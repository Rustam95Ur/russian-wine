<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use App\Models\Winemaker;

class IndexController extends Controller
{

    public function index()
    {
        $popular_wines = Wine::where('status', '=', 'ACTIVE')
            ->where('featured', '=', 1)
            ->with('color', 'sugar', 'winery')
            ->orderBy('id', 'DESC')
            ->limit(10)
            ->get();
        $new_wines = Wine::where('status', '=', 'ACTIVE')
            ->with('color', 'sugar', 'winery')
            ->orderBy('id', 'DESC')
            ->limit(10)
            ->get();
        $winemakers = Winemaker::where('status', '=', 'ACTIVE')->with('wines', 'region', 'winery')->get();
        return view('home.index', [
            'new_wines' => $new_wines,
            'popular_wines' => $popular_wines,
            'winemakers' => $winemakers
        ]);
    }
}
