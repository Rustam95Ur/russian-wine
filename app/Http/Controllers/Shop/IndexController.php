<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\GrapeSort;
use App\Models\Region;
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

        if (Auth::guard('client')->user()) {
            $clientd = Auth::guard('client')->user()->id;
            $favorited = DB::table('client_wine')
                ->join('wines', 'client_wine.wine_id', '=', 'wines.id')
                ->where('client_wine.client_id', '=', $clientd)->get();
        }

        $favoriteIds = [];

        if (!empty($favorited)) {
            foreach ($favorited as $item) {
                $favoriteIds[] = $item->wine_id;
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
            'favorite' => $favoriteIds
        ]);
    }

    public function wine_info($slug)
    {
        $wine = Wine::where('slug', '=', $slug)->where('status', '=', 'ACTIVE')->firstOrFail();
        return view('shop.wine.show', [
            'wine' => $wine
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
     * @param int $wine_id
     * @param int $qty
     * @return mixed
     */
    protected function add_to_cart(int $wine_id, int $qty)
    {
        $checkProduct = Wine::where('id', '=', $wine_id)->firstOrFail();
        $countItem = $checkProduct->count;
        if ($qty > $countItem) {
            return \Response::json(['error' => trans('shop.error.many-item')], 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
        $item = ['wine_id' => $wine_id, 'qty' => $qty];
        $sessionItems = Session::get('cart');
        $results = [];
        if ($sessionItems and count($sessionItems) > 0) {
            $status = array_search($wine_id, array_column($sessionItems, 'wine_id'));
            if ($status === false) {
                array_push($sessionItems, $item);
                Session::forget('cart');
                foreach ($sessionItems as $result) {
                    Session::push('cart', $result);
                }
            } else {
                for ($i = 0; $i < count($sessionItems); $i++) {
                    $sum = ($sessionItems[$i]['wine_id'] == $wine_id) ? $sessionItems[$i]['qty'] + $qty : $sessionItems[$i]['qty'];
                    if ($sum > $countItem) {
                        return \Response::json(['error' => trans('shop.error.many-item')], 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
                    }
                    $newArray = [
                        'wine_id' => $sessionItems[$i]['wine_id'],
                        'qty' => $sum,
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

    protected function remove_to_cart(int $wine_id, int $qty = 0)
    {
        $checkProduct = Wine::where('id', '=', $wine_id)->firstOrFail();
        $countItem = $checkProduct->count;
        if ($qty > $countItem) {
            return \Response::json(['error' => trans('shop.error.many-item')], 400, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
        }
        $sessionItems = Session::get('cart');
        if ($sessionItems) {
            $itemIndex = array_search($wine_id, array_column($sessionItems, 'wine_id'));
            if ($itemIndex !== false) {
                Session::forget('cart');
                if ($qty == 0) {
                    unset($sessionItems[$itemIndex]);
                } else {
                    $results = [];
                    for ($i = 0; $i < count($sessionItems); $i++) {
                        $newQty = ($sessionItems[$i]['wine_id'] == $wine_id) ? $qty : $sessionItems[$i]['qty'];
                        $newArray = [
                            'wine_id' => $sessionItems[$i]['wine_id'],
                            'qty' => $newQty
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
        $countWine = 0;
        $cart_wines = [];
        $countCartItems = Session::get('cart');
        if ($countCartItems != false) {
            foreach ($countCartItems as $item) {
                $wine = Wine::select('title', 'price', 'image', 'id')->where('id', '=', $item['wine_id'])->first();
                if ($wine) {
                    $wine_array = [
                        'count' => $item['qty'],
                        'wine_id' => $wine->id,
                        'title' => $wine->title,
                        'price' => $wine->price,
                        'image' => Voyager::image($wine->image),
                        'total' => (int) $wine->price * $item['qty']
                    ];
                    array_push($cart_wines, $wine_array);
                    $total_sum += (int) $wine->price * $item['qty'];
                    $countWine += 1;
                }
            }
        }
        $wines = ['wines'=> $cart_wines];
        $count_wine_array = ['count_wine' => $countWine];
        $total_sums = ['total_sum' => $total_sum];
        $result = array_merge($wines, $count_wine_array, $total_sums);
        return \Response::json($result, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }


}
