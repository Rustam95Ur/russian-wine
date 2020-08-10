<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Set;

class SetController extends Controller
{
    public function index()
    {
        $sets = Set::where('status', '=', 'ACTIVE')->where('in_main', '=', 1)->orderBy('title', 'ASC')->get();
        return view('sets.index', [
            'sets' => $sets
        ]);
    }

    public function show($slug)
    {
        $set = Set::where('status', '=', 'ACTIVE')
            ->where('slug', '=', $slug)
            ->with('wines', 'nextSet', 'prevSet')
            ->firstOrFail();
        $wine_count = count($set->wines);
        return view('sets.show', [
            'set' => $set,
            'wine_count' => $wine_count
        ]);
    }
}
