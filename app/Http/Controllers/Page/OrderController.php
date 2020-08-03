<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function tour_save(Request $request)
    {
        $saveRequest = new Order();
        $saveRequest->name = $request['name'];
        $saveRequest->phone = $request['phone'];
        $saveRequest->type = Order::TYPE_TOUR;
        $saveRequest->save();
        return redirect()->route('home')->with('success', trans('order.success.tour'));
    }

}
