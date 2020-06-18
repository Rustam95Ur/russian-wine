<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;

class IndexController extends Controller
{

    public function index()
    {
        $wines = Product::where('status', '=', 'ACTIVE')->with('color', 'sugar')->orderBy('id', 'DESC')->get();
        return view('home.index', [
            'wines' => $wines
        ]);
    }
}
