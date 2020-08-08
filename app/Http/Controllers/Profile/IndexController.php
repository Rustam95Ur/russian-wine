<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    public function show()
    {
        return view('profile.show');
    }

    public function favorite()
    {
        $favorites = Auth::user()->wines;
        return view('profile.favorite', ['favorites' => $favorites]);
    }

    public function sub()
    {
        return view('profile.sub-wines');
    }

    public function myOrders()
    {
        return view('profile.my-orders');
    }

    public function mySets()
    {
        return view('profile.my-sets');
    }


    public function update(Request $request)
    {
        $client = Auth::user();

        $client->first_name = $request['first_name'];
        $client->last_name = $request['last_name'];
        $client->email = $request['email'];
        $client->phone = $request['phone'];
        $client->birth_date = $request['birth_date'];

        if ($request['newpassword'] !== null && $request['oldpassword'] !== null) {
            $newPass = Hash::make($request['newpassword']);
            $client->password = $newPass;
        }

        $client->save();

        return redirect()->route('profile')->with('success', 'Данные успешно обновленны');
    }
}
