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

	public function edit()
	{

	}
}