<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Set;
use App\Models\Tasting;
use App\Models\Wine;
use App\Models\Winemaker;
use DB;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function index()
    {
        $popular_wines = Wine::where('status', '=', 'ACTIVE')
            ->where('featured', '=', 1)
            ->where('price', '>', 0)
            ->with('color', 'sugar', 'winery')
            ->orderBy('id', 'DESC')
            ->limit(10)
            ->get();
        $new_wines = Wine::where('status', '=', 'ACTIVE')
            ->with('color', 'sugar', 'winery')
            ->where('price', '>', 0)
            ->orderBy('id', 'DESC')
            ->limit(10)
            ->get();


        if (Auth::guard('client')->user()) {
            $clientd = Auth::guard('client')->user()->id;
            $favorited = DB::table('client_wine')
                ->join('wines', 'client_wine.wine_id', '=', 'wines.id')
                ->where('client_wine.client_id', '=', $clientd)->get();
        }

        $ids = [];

        if (!empty($favorited)) {
            foreach ($favorited as $item) {
                $ids[] = $item->wine_id;
            }
        }

        $winemakers = Winemaker::where('status', '=', 'ACTIVE')->with('wines', 'region', 'winery')->get();
        $home_set = Set::where('in_home', true)->first();
        $home_tasting = Tasting::where('in_home', true)->first();
        return view('home.index', [
            'new_wines' => $new_wines,
            'popular_wines' => $popular_wines,
            'winemakers' => $winemakers,
            'home_set'  => $home_set,
            'home_tasting'  => $home_tasting,
            'favorite' => $ids,
        ]);
    }
}
