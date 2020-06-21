<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

class TastingsController extends Controller
{
    public function index()
    {
        return view('shop.tasting.index');
    }
}
