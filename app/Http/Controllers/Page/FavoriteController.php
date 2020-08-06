<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 *
 */
class FavoriteController extends Controller
{
    // Только залогиненый пользователь можешь добавлять в избанные
    public function addToFavorite(Request $request)
    {
        $user = Auth::guard('client')->user();

        if ($user == null) {
            return response(['message' =>'Только авторизованные пользователи могут добавлять в избранные'], 401);
//            return [
//                'status' => 401,
//                'message' => 'Только авторизованные пользователи могут добавлять в избранные'
//            ];
        }

        DB::table('client_wine')->insert(
            ['client_id' => $user->id, 'wine_id' => $request->wine_id]
        );

    }

    //Удаляем из избранных
    public function deleteFromFavorite(Request $request)
    {
        $user = Auth::guard('client')->user();

        DB::table('client_wine')->where('client_id', '=', $user->id)
            ->where('wine_id', '=', $request->wine_id)->delete();
    }
}
