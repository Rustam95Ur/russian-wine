<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;

class FranchiseController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', '=', 'franchise')->where('status', '=', 'ACTIVE')->firstOrFail();
        return view('page.franchise.index', [
            'page'  => $page
        ]);
    }
}
