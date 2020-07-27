<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;

/**
 * 
 */
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }
	public function show()
	{
		return view('page.profile.index');
	}

	public function favorite()
    {
        return view('page.profile.favorite');
    }

    public function sub()
    {
        return view('page.profile.sub-wines');
    }

	public function edit()
	{

	}
}