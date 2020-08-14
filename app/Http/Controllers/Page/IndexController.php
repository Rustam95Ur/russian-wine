<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Page;

class IndexController extends Controller
{
    public function tour()
    {
        return view('page.tour');
    }

    /**
     * @param $slug
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function simple_page($slug)
    {
        $page = Page::where('slug', '=', $slug)->where('status', '=', 'ACTIVE')->firstOrFail();
        return view('page.simple-page', [
            'page'  => $page
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function where_to_by()
    {
        $contacts = Contact::all();
        return view('page.where_to_by', [
            'contacts' => $contacts
        ]);
    }
}
