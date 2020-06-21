<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Page;

class IndexController extends Controller
{
    public function tour()
    {
        return view('page.tour');
    }

    public function agreement()
    {
        $page = Page::where('slug', '=', 'agreement')->firstOrFail();
        return view('page.agreement', [
            'page'  => $page
        ]);
    }
}
