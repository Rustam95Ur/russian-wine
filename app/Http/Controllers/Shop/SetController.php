<?php


namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Set;
use Illuminate\Http\Request;


class SetController extends Controller
{
    public function index()
    {
        $sets = Set::where('status', '=', 'ACTIVE')->where('in_main', '=', 1)->orderBy('title', 'ASC')->get();
        return view('sets.index', [
            'sets' => $sets
        ]);
    }

    public function show(Request $request, $slug)
    {
        $page_type = $request->get('type');
        $set = Set::where('status', '=', 'ACTIVE')
            ->where('slug', '=', $slug)
            ->with('wines', 'nextSet', 'prevSet')
            ->firstOrFail();
        $wine_count = count($set->wines);
        return view('sets.show', [
            'set' => $set,
            'wine_count' => $wine_count,
            'page_type' => $page_type
        ]);
    }
}
