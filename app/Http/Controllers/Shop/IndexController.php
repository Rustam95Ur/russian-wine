<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\GrapeSort;
use App\Models\Region;
use App\Models\Set;
use App\Models\Wine;
use App\Models\WineClass;
use App\Models\Winemaker;
use App\Models\Winery;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Sugar;
use App\Filters\WineFilter;
use Session;
use Illuminate\Support\Facades\Auth;
use DB;
use TCG\Voyager\Facades\Voyager;

class IndexController extends Controller
{

    public function wine_list(WineFilter $filters)
    {
        $wineries = Winery::where('status', '=', 'ACTIVE')->get();
        $colors = Color::all();
        $regions = Region::all();
        $sugars = Sugar::all();
        $sorts = GrapeSort::all();
        $classes = WineClass::all();
        $years = Wine::select('year')->where('year', '!=', null)->groupBy('year')->orderBy('year', 'DESC')->get();
        $fortresses = Wine::select('fortress')->where('fortress', '!=', null)->groupBy('fortress')->orderBy('fortress', 'DESC')->get();
        $wines = Wine::where('status', '=', 'ACTIVE')->where('price', '>', 0)->filter($filters)->with('color', 'sugar', 'winery')
            ->paginate(39);
        $filters = request()->input();

        $favorite_id_list = [];
        if (Auth::guard('client')->user()) {
            $client = Auth::guard('client')->user();
            $favorite_wines = $client->wines()->get();
            foreach ($favorite_wines as $wine) {
                $favorite_id_list[] = $wine->id;
            }
        }

        return view('shop.wine.list', [
            'wines' => $wines,
            'colors' => $colors,
            'regions' => $regions,
            'sugars' => $sugars,
            'wineries' => $wineries,
            'sorts' => $sorts,
            'classes' => $classes,
            'years' => $years,
            'fortresses' => $fortresses,
            'filters' => $filters,
            'favorite' => $favorite_id_list
        ]);
    }

    public function wine_info($slug)
    {
        $wine = Wine::where('slug', '=', $slug)->where('status', '=', 'ACTIVE')->firstOrFail();
        if(isset($wine->winery)) {
            $wines = Wine::where('winery_id', '=', $wine->winery->id)->where('price', '>', 0)->get();
        } else {
            $wines = Wine::where('price', '>', 0)->limit(20)->get();
        }

        return view('shop.wine.show', [
            'wine' => $wine,
            'wines' => $wines,

        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function personal_wine()
    {
        $wineries = Winery::where('is_nominal', '=', 1)->get();
        return view('shop.wine.personal', [
            'wineries' => $wineries
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function personal_wine_order(Request $request)
    {
        $saveRequest = new Order();

        if (filter_var($request['contact'], FILTER_VALIDATE_EMAIL)) {
            $saveRequest->email = $request['contact'];
        } else {
            $saveRequest->phone = $request['contact'];
        }
        $saveRequest->name = $request['name'];
        $saveRequest->type = Order::TYPE_NOMINAL_WINE;
        $saveRequest->message = $request['message'];
        $saveRequest->save();
        return redirect()->back()->with('success', trans('order.success.nominal'));
    }

    /**
     * @param int $product_id
     * @param int $qty
     * @param string $type
     * @return mixed
     */
    protected function add_to_cart(string $type, int $product_id, int $qty)
    {
        if ($type == 'wine') {
            $checkProduct = Wine::where('id', '=', $product_id)->firstOrFail();
        } elseif ($type == 'set') {
            $checkProduct = Set::where('id', '=', $product_id)->firstOrFail();
        }
        $countItem = $checkProduct->count;
        if ($qty > $countItem) {
            return \Response::json(['error' => trans('shop.error.many-item')], 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
        $item = ['product_id' => $product_id, 'qty' => $qty, 'type' => $type, 'price' => $checkProduct->price];
        $sessionItems = Session::get('cart');
        $results = [];
        if ($sessionItems and count($sessionItems) > 0) {
            $status = array_search($product_id, array_column($sessionItems, 'product_id'));
            $status_type = array_search($type, array_column($sessionItems, 'type'));
            if ($status === false or $status_type === false) {
                array_push($sessionItems, $item);
                Session::forget('cart');
                foreach ($sessionItems as $result) {
                    Session::push('cart', $result);
                }
            } else {
                for ($i = 0; $i < count($sessionItems); $i++) {
                    $sum = ($sessionItems[$i]['product_id'] == $product_id and $sessionItems[$i]['type'] == $type) ? $sessionItems[$i]['qty'] + $qty : $sessionItems[$i]['qty'];

                    if ($sum > $countItem) {
                        return \Response::json(['error' => trans('shop.error.many-item')], 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                    }
                    $newArray = [
                        'product_id' => $sessionItems[$i]['product_id'],
                        'qty' => $sum,
                        'type' => $sessionItems[$i]['type'],
                        'price' => $checkProduct->price,
                    ];
                    $results[$i] = $newArray;
                }
                Session::forget('cart');
                foreach ($results as $result) {
                    Session::push('cart', $result);
                }
            }
        } else {
            Session::push('cart', $item);
        }
        return \Response::json(['success' => trans('shop.success.add-cart')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * @param string $type
     * @param int $product_id
     * @param int $qty
     * @return mixed
     */
    protected function remove_to_cart(string $type, int $product_id, int $qty = 0)
    {
        if ($type == 'wine') {
            $checkProduct = Wine::where('id', '=', $product_id)->firstOrFail();
        } elseif ($type == 'set') {
            $checkProduct = Set::where('id', '=', $product_id)->firstOrFail();
        }
        $countItem = $checkProduct->count;
        if ($qty > $countItem) {
            return \Response::json(['error' => trans('shop.error.many-item')], 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
        $sessionItems = Session::get('cart');

        if ($sessionItems) {
            $itemIndex = array_search($product_id, array_column($sessionItems, 'product_id'));
            $typeIndex = array_search($type, array_column($sessionItems, 'type'));
            if ($itemIndex !== false and $typeIndex !== false) {
                Session::forget('cart');
                if ($qty == 0) {
                    foreach ($sessionItems as $key => $item) {
                        if ($item['product_id'] == $product_id and $item['type'] == $type) {
                            unset($sessionItems[$key]);
                        }
                    }
                } else {
                    $results = [];
                    for ($i = 0; $i < count($sessionItems); $i++) {
                        $newQty = ($sessionItems[$i]['product_id'] == $product_id) ? $qty : $sessionItems[$i]['qty'];
                        $newArray = [
                            'product_id' => $sessionItems[$i]['product_id'],
                            'qty' => $newQty,
                            'type' => $sessionItems[$i]['type'],
                            'price' => $checkProduct->price,
                        ];
                        $results[$i] = $newArray;
                    }
                    foreach ($results as $result) {
                        Session::push('cart', $result);
                    }
                    return \Response::json(['success' => trans('shop.success.remove-cart')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                }
                if ($sessionItems) {
                    foreach ($sessionItems as $item) {
                        Session::push('cart', $item);
                    }
                }
            }
            return \Response::json(['success' => trans('shop.success.remove-cart')], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        } else {
            return \Response::json(['success' => trans('shop.success.no-cart')], 404, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    protected function count_cart()
    {
        $count = 0;
        $countCartItems = Session::get('cart');
        if ($countCartItems != false) {
            foreach ($countCartItems as $item) {
                $count += $item['qty'];
            }
        }
        return \Response::json(['count' => $count], 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    protected function get_car_wines()
    {
        $total_sum = 0;
        $countProduct = 0;
        $cart_products = [];
        $countCartItems = Session::get('cart');
        if ($countCartItems != false) {
            foreach ($countCartItems as $item) {
                if ($item['type'] == 'wine') {
                    $product = Wine::select('title', 'price', 'image', 'id')->where('id', '=', $item['product_id'])->first();
                } elseif ($item['type'] == 'set') {
                    $product = Set::select('title', 'price', 'image', 'id')->where('id', '=', $item['product_id'])->first();
                }
                if ($product) {
                    $product_array = [
                        'count' => $item['qty'],
                        'type' => $item['type'],
                        'product_id' => $product->id,
                        'title' => $product->title,
                        'price' => $product->price,
                        'image' => Voyager::image($product->image),
                        'total' => (int)$product->price * $item['qty']
                    ];
                    array_push($cart_products, $product_array);
                    $total_sum += (int)$product->price * $item['qty'];
                    $countProduct += 1;
                }
            }
        }
        $wines = ['products' => $cart_products];
        $count_wine_array = ['count_products' => $countProduct];
        $total_sums = ['total_sum' => $total_sum];
        $result = array_merge($wines, $count_wine_array, $total_sums);
        return \Response::json($result, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function checkout()
    {
        $countCartItems = Session::get('cart');
        if ($countCartItems != false) {
            $total_sum = 0;
            foreach ($countCartItems as $item) {
                if ($item['type'] == 'set') {
                    $product = Set::select('title', 'price', 'image', 'id')->where('id', '=', $item['product_id'])->first();
                } elseif ($item['type'] == 'wine') {
                    $product = Wine::select('title', 'price', 'image', 'id')->where('id', '=', $item['product_id'])->first();
                }
                if ($product) {
                    $total_sum += (int)$product->price * $item['qty'];
                }
            }
            if ($total_sum == 0) {
                return redirect()->back();
            } else {
                $form_url = route('checkout_order');
                return view('shop.checkout.index', [
                    'total_price' => $total_sum,
                    'form_url' => $form_url,
                ]);
            }
        } else {
            return redirect()->back();
        }
    }

    public function checkout_order(Request $request)
    {
        $cart_session = Session::get('cart');
        if ($cart_session != false) {
            $cart_info = '';
            $total_sum = 0;

            foreach ($cart_session as $item) {
                if ($item['type'] == 'set') {
                    $product = Set::select('title', 'price', 'image', 'id', 'in_subscription')->where('id', '=', $item['product_id'])->first();
                    if ($product->in_subscription) {
                        $product_type = 'Подписка на сеты';
                    } else {
                        $product_type = 'Сеты';
                    }

                } elseif ($item['type'] == 'wine') {
                    $product = Wine::select('title', 'price', 'image', 'id')->where('id', '=', $item['product_id'])->first();
                    $product_type = 'Вино';

                }
                if ($product) {
                    $total_sum += (int)$product->price * $item['qty'];
                    $cart_info .= 'Название: <b>' . $product->title . '</b> Тип продуката: <b>' . $product_type . '. </b>Количество: <b>' . $item['qty'] . '</b> штук <br>  ';
                }
            }
            $cart_info .= 'Общая сумма: <b>' . $total_sum . '</b>';
            $saveRequest = new Order();
            $saveRequest->name = $request['name'];
            $saveRequest->phone = $request['phone'];
            $saveRequest->email = $request['email'];
            $saveRequest->type = Order::TYPE_CART;
            $saveRequest->message = $cart_info;
            $saveRequest->request = json_encode($cart_session);
            $saveRequest->save();
            Session::forget('cart');
            return redirect()->route('checkout_success');
        } else {
            return redirect()->back();
        }
    }

    public function checkout_success()
    {
        return view('shop.checkout.success');
    }
}
