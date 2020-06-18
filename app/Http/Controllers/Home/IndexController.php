<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use App\Models\Winemaker;

class IndexController extends Controller
{

    public function index()
    {
        $wines = Wine::where('status', '=', 'ACTIVE')->with('color', 'sugar')->orderBy('id', 'DESC')->get();
        $winemakers = Winemaker::where('status', '=', 'ACTIVE')->with('wines', 'region')->get();

        return view('home.index', [
            'wines' => $wines,
            'winemakers' => $winemakers
        ]);
    }
}
