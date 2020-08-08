<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Set;
use DB;
use App\Models\Wine;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        $data = $this->menu_item_count();
        return view('profile.show', $data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function favorite()
    {
        $data = $this->menu_item_count();
        $favorites = Auth::user()->wines()->get();
        $data['favorites'] = $favorites;
        return view('profile.favorite', $data);
    }

    public function favorite_order(Request $request)
    {
        $cart_info = '';
        $total_sum = 0;
        $wine_info_array = [];
        foreach ($request->wines as $wine) {
            $wine = Wine::select('title', 'price', 'image', 'id')->where('id', '=', $wine)->first();
            if ($wine) {
                $total_sum += (int)$wine->price;
                $cart_info .= 'Название: <b>' . $wine->title . '</b>' . '. </b>Количество: <b>' . 1 . '</b> штук <br>  ';
            }
            $wine_info['product_id'] = $wine->id;
            $wine_info['qty'] = 1;
            $wine_info['type'] = 'wine';
            $wine_info['price'] = $wine->price;
            array_push($wine_info_array, $wine_info);
        }
        $cart_info .= 'Общая сумма: <b>' . $total_sum . '</b>';
        $saveRequest = new Order();
        $saveRequest->name = Auth::user()->first_name;
        $saveRequest->phone = Auth::user()->phone;
        $saveRequest->email = Auth::user()->email;
        $saveRequest->request = json_encode($wine_info_array);
        $saveRequest->type = Order::TYPE_FAVORITE;
        $saveRequest->message = $cart_info;
        $saveRequest->save();
        return redirect()->back()->with('success', 'Заявка успешно отправлена');

    }

    public function set_order(Request $request)
    {
        $cart_info = '';
        $total_sum = 0;
        $wine_info_array = [];
        foreach ($request->sets as $set) {
            $set = Set::select('title', 'price', 'image', 'id')->where('id', '=', $set)->first();
            if ($set) {
                $total_sum += (int)$set->price;
                $cart_info .= 'Название: <b>' . $set->title . '</b>' . '. </b>Количество: <b>' . 1 . '</b> штук <br>  ';
            }
            $wine_info['product_id'] = $set->id;
            $wine_info['qty'] = 1;
            $wine_info['type'] = 'set';
            $wine_info['price'] = $set->price;
            array_push($wine_info_array, $wine_info);
        }
        $cart_info .= 'Общая сумма: <b>' . $total_sum . '</b>';
        $saveRequest = new Order();
        $saveRequest->name = Auth::user()->first_name;
        $saveRequest->phone = Auth::user()->phone;
        $saveRequest->email = Auth::user()->email;
        $saveRequest->request = json_encode($wine_info_array);
        $saveRequest->type = Order::TYPE_FAVORITE;
        $saveRequest->message = $cart_info;
        $saveRequest->save();
        return redirect()->back()->with('success', 'Заявка успешно отправлена');
    }

    public function sub()
    {
        $data = $this->menu_item_count();

        $orders = Order::where('email', '=', Auth::user()->email)->get();
        $set_id_array = [];
        foreach ($orders as $key => $order) {
            $requests = json_decode($order->request);
            foreach ($requests as $request) {
                $requestType = $request->type;
                if ($requestType === 'set') {
                    $set_id_array[] = $request->product_id;
                }
            }
        }
        $sets = Set::whereIn('id', $set_id_array)->get();
        $subscriptions = [];

        foreach ($sets as $set) {
            if ($set->in_subscription) {
                $subscriptions[] = $set;
            }
        }

        $data['subscriptions'] = $subscriptions;


        return view('profile.sub-wines', $data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function orders()
    {
        $data = $this->menu_item_count();
        $orders = Order::where('email', '=', Auth::user()->email)->get();
        $order_list = [];
        foreach ($orders as $key => $value) {
            $total_price = 0;
            $request = json_decode($value->request);
            $order['id'] = $value->id;
            $order['date_created'] = date($value->created_at);
            foreach ($request as $item) {
                $total_price += $item->price * $item->qty;
            }
            $order['total_price'] = $total_price;
            array_push($order_list, $order);
        }
        $data['orders'] = $order_list;
        return view('profile.orders', $data);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function sets()
    {
        $data = $this->menu_item_count();
        $orders = Order::where('email', '=', Auth::user()->email)->get();
        $set_id_array = [];
        foreach ($orders as $key => $order) {
            $requests = json_decode($order->request);
            foreach ($requests as $request) {
                $requestType = $request->type;
                if ($requestType === 'set') {
                    $set_id_array[] = $request->product_id;
                }
            }
        }
        $sets = Set::whereIn('id', $set_id_array)->get();
        $data['sets'] = $sets;

        return view('profile.sets', $data);
    }


    public function update(Request $request)
    {
        $client = Auth::user();

        $client->first_name = $request['first_name'];
        $client->last_name = $request['last_name'];
        $client->email = $request['email'];
        $client->phone = $request['phone'];
        $client->birth_date = $request['birth_date'];

        if ($request['newpassword'] !== null && $request['oldpassword'] !== null) {
            $newPass = Hash::make($request['newpassword']);
            $client->password = $newPass;
        }

        $client->save();

        return redirect()->route('profile')->with('success', 'Данные успешно обновленны');
    }


    protected function menu_item_count()
    {
        $favorites_wines = Auth::user()->wines()->count();
        $menu = ['favorite_count' => $favorites_wines];
        $orders = Order::where('email', '=', Auth::user()->email)->get();
        $count_sets = 0;
        foreach ($orders as $order) {
            if ($order->type == Order::TYPE_CART) {
                $request = json_decode($order->request);
                foreach ($request as $item) {
                    if ($item->type == 'set') {
                        $count_sets += $item->qty;
                    }
                }
            }
        }
        $menu['order_count'] = count($orders);
        $menu['set_count'] = $count_sets;
        return $menu;
    }
}
