<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class FavoriteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:client');
    }

    // Только залогиненый пользователь можешь добавлять в избанные
    public function add(Request $request)
    {
        $favoirte = new Favorite();

        $favoirte->client_id = $request['client_id'];
        $favoirte->wine_id = $request['wine_id'];

        if ($favoirte->save()) {
            // Думаю пока можно так
            $request->session()->put('fav', true);
            return view('shop.wine.list', [
                'favorite' => true
            ]);
        }
    }

    //Удаляем из избранных
    public function delete(Request $request)
    {
        $favorite = Favorite::where('client_id', '=', $request->client_id)->where('wine_id', '=', $request->wine_id)->get();
    }
}