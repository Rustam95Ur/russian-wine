<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Tasting;
use App\Models\TastingMethod;
use Illuminate\Http\Request;
use App\Models\Order;

class TastingsController extends Controller
{
    public function index()
    {
        $comments = Comment::where('status', '=', 'ACTIVE')->get();
        $methods = TastingMethod::all();
        $tastings = Tasting::where('in_home', false)->get();
        return view('shop.tasting.index', [
            'comments'  => $comments,
            'methods' => $methods,
            'tastings' => $tastings,
        ]);
    }

    public function order(Request $request)
    {
        $tasting = Tasting::where('id', '=', $request['tasting_id'])->firstOrFail();
        $saveRequest = new Order();
        $saveRequest->name = $request['name'];
        $saveRequest->phone = $request['phone'];
        $saveRequest->email = $request['email'];
        $saveRequest->type = Order::TYPE_TASTING;
        $saveRequest->message = $tasting->title;
        $saveRequest->request = json_encode($tasting);
        $saveRequest->save();
        return redirect()->route('home')->with('success', trans('order.success.tasting'));
    }
}
