<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use App\Models\Winemaker;

class IndexController extends Controller
{
    public function wine_list()
    {
        return view('shop.wine.list');
    }

    public function wine_info($slug)
    {
//        $wine = Wine::where('slug', '=', $slug)->where('status', '=', 'ACTIVE')->firstOrFail();
        return view('shop.wine.show', [
//            'wine' => $wine
        ]);
    }

    public function personal_wine()
    {
        return view('shop.wine.personal', [
        ]);
    }


}
