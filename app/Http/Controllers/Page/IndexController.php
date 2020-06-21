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

    public function simple_page($slug)
    {
        $page = Page::where('slug', '=', $slug)->where('status', '=', 'ACTIVE')->firstOrFail();
        return view('page.simple-page', [
            'page'  => $page
        ]);
    }

    public function where_to_by()
    {
        return view('page.where_to_by');
    }
}
