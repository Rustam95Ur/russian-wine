<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use Illuminate\Http\Request;

/**
 * Поиск Вин
 */
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->title;
        $wines = Wine::where(function ($query) use ($keyword) {
            $query->where('title', 'like', '%' . $keyword . '%')
                ->orWhereHas('winery', function ($q) use ($keyword) {
                    $q->where('title', 'like', '%' . $keyword . '%');
                });
        })->where('price', '>', 0)
            ->where('status', '=', 'ACTIVE')
            ->limit(3)->get();
        $link = 'title=' . $request->title;
        return ['wines' => $wines, 'link' => $link];
    }
}

