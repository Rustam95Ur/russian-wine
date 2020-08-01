<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Tasting;
use App\Models\TastingMethod;

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
}
