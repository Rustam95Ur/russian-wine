<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\GrapeSort;
use App\Models\Region;
use App\Models\Wine;
use App\Models\Winemaker;
use App\Models\Winery;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Sugar;

class IndexController extends Controller
{

    public function wine_list()
    {
        $wineries = Winery::where('status', '=', 'ACTIVE')->get();
        $colors = Color::all();
        $regions = Region::all();
        $sugars = Sugar::all();
        $sorts = GrapeSort::all();
        $wines = Wine::where('status', '=', 'ACTIVE')
            ->with('color', 'sugar', 'winery')
            ->paginate(40);
        return view('shop.wine.list', [
            'wines' => $wines,
            'colors' => $colors,
            'regions' => $regions,
            'sugars' => $sugars,
            'wineries' => $wineries,
            'sorts' => $sorts
        ]);
    }

    public function wine_info($slug)
    {
//        $wine = Wine::where('slug', '=', $slug)->where('status', '=', 'ACTIVE')->firstOrFail();
        return view('shop.wine.show', [
//            'wine' => $wine
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function personal_wine()
    {
        $wineries = Winery::where('is_nominal', '=', 1)->get();
        return view('shop.wine.personal', [
            'wineries' => $wineries
        ]);
    }

    public function personal_wine_order(Request $request)
    {
        $saveRequest = new Order();

        if (filter_var($request['contact'], FILTER_VALIDATE_EMAIL)) {
            $saveRequest->email = $request['contact'];
        } else {
            $saveRequest->phone = $request['contact'];
        }
        $saveRequest->name = $request['name'];
        $saveRequest->type = Order::TYPE_NOMINAL_WINE;
        $saveRequest->message = $request['message'];
        $saveRequest->save();
        return redirect()->back()->with('success', trans('order.success.nominal'));
    }

}
