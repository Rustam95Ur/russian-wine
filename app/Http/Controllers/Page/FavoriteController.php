<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Wine;


class FavoriteController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function addToFavorite(Request $request)
    {
        $user = Auth::guard('client')->user();
        if ($user == null) {
            return response(['message' => 'Только авторизованные пользователи могут добавлять в избранные'], 401);
        }
        $wine = Wine::where('id', '=', $request->wine_id)->first();
        if ($wine) {
            if (! $user->wines->contains($wine->id)) {
                $user->wines()->save($wine);
            }
            return response(['message'=> 'Товар добавлен в избранное'], 201);
        } else {
            return response(['message' => 'Данное вино не существует'], 404);
        }


    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function deleteFromFavorite(Request $request)
    {
        $user = Auth::guard('client')->user();
        if ($user == null) {
            return response(['message' => 'Только авторизованные пользователи могут добавлять в избранные'], 401);
        }
        $wine = Wine::where('id', '=', $request->wine_id)->first();
        if ($wine) {
            if ($user->wines->contains($wine->id)) {
                $user->wines()->detach($wine);
            }
            return response(['message'=> 'Товар удален из избранного'], 201);
        } else {
            return response(['message' => 'Данное вино не существует'], 404);
        }

    }
}
