<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{

    public function index()
    {
        return view('shop.subscription.index');
    }

}
