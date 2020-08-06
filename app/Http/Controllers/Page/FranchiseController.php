<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Models\Order;

class FranchiseController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $page = Page::where('slug', '=', 'franchise')->where('status', '=', 'ACTIVE')->firstOrFail();
        return view('page.franchise.index', [
            'page'  => $page
        ]);
    }

    public function order(Request $request)
    {
        $saveRequest = new Order();
        $saveRequest->name = $request['name'];
        $saveRequest->phone = $request['phone'];
        $saveRequest->type = Order::TYPE_FRANCHISE;
        $saveRequest->save();
        return redirect()->back()->with('success', trans('order.success.franchise'));
    }
}
