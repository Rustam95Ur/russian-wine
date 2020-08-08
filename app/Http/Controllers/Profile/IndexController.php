<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Set;
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
        foreach ($request->wines as $wine) {
                $wine = Wine::select('title', 'price', 'image', 'id')->where('id', '=', $wine)->first();
            if ($wine) {
                $total_sum += (int)$wine->price;
                $cart_info .= 'Название: <b>' . $wine->title . '</b>'. '. </b>Количество: <b>' . 1 . '</b> штук <br>  ';
            }
        }
        $cart_info .= 'Общая сумма: <b>' . $total_sum . '</b>';
        $saveRequest = new Order();
        $saveRequest->name = Auth::user()->first_name;
        $saveRequest->phone = Auth::user()->phone;
        $saveRequest->email = Auth::user()->email;
        $saveRequest->type = Order::TYPE_FAVORITE;
        $saveRequest->message = $cart_info;
        $saveRequest->save();
        return redirect()->back()->with('success', 'Заявка успешно отправлена');

    }

    public function sub()
    {
        $data = $this->menu_item_count();
        return view('profile.sub-wines', $data);
    }

    public function myOrders()
    {
        $data = $this->menu_item_count();
        return view('profile.my-orders', $data);
    }

    public function mySets()
    {
        $data = $this->menu_item_count();
        return view('profile.my-sets', $data);
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
        return $menu;
    }
}
