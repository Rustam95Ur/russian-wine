<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Set;
use App\Models\Tasting;
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
        $home_set = Set::where('in_home', true)->first();
        $home_tasting = Tasting::where('in_home', true)->first();
        return view('home.index', [
            'new_wines' => $new_wines,
            'popular_wines' => $popular_wines,
            'winemakers' => $winemakers,
            'home_set'  => $home_set,
            'home_tasting'  => $home_tasting,

        ]);
    }
}
