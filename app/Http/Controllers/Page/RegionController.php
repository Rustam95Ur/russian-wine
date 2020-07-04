<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Region;

class RegionController extends Controller
{
    public function index()
    {
        $regions = Region::all();
        return view('page.region.index', [
            'regions' => $regions
        ]);
    }


    public function show($slug)
    {
        $region = Region::where('slug', '=', $slug)->with('wines', 'wineries', 'quote')->firstOrFail();
        return view('page.region.show', [
            'region' => $region
        ]);
    }
}
