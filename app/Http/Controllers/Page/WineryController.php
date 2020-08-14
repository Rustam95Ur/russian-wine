<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Models\Winery;

class WineryController extends Controller
{
    public function index()
    {
        $regions = Region::with('wineries')->get();
        $type = Winery::WINE_TYPE;
        $page_title = 'Русские Винодельни';
        return view('page.winery.index', [
            'regions' => $regions,
            'winery_type' => $type,
            'page_title' => $page_title
        ]);
    }

    public function micro_winery()
    {
        $regions = Region::whereHas('wineries')->get();
        $type = Winery::MICRO_WINE_TYPE;
        $page_title = 'Русские микровинодельни';
        return view('page.winery.index', [
            'regions' => $regions,
            'winery_type' => $type,
            'page_title' => $page_title
        ]);
    }

    public function show($slug)
    {
        $winery = Winery::where('slug', '=', $slug)->with('images', 'wines')->firstOrFail();
        return view('page.winery.show', [
            'winery' => $winery
        ]);
    }
}
