<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Comment;

class TastingsController extends Controller
{
    public function index()
    {
        $comments = Comment::where('status', '=', 'ACTIVE')->get();
        return view('shop.tasting.index', [
            'comments'  => $comments
        ]);
    }
}
