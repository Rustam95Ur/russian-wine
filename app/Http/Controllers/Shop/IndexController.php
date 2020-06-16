<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function wine_list()
    {
        return view('shop.wine-list');
    }

    public function sets()
    {
        return view('shop.sets');
    }
}
