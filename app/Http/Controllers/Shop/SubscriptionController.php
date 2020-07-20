<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Set;

class SubscriptionController extends Controller
{

    public function index()
    {
        $sets = Set::where('in_subscription', true)->limit(3)->get();
        $sale_set = Set::whereNotNull('sale')->first();
        return view('shop.subscription.index', [
            'sets' => $sets,
            'sale_set' => $sale_set
        ]);
    }

}
