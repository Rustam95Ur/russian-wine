<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Set;

class SetController extends Controller
{
    public function index()
    {
        $sets = Set::where('status', '=', 'ACTIVE')->get();
        return view('sets.index', [
            'sets'  => $sets
        ]);
    }
}
