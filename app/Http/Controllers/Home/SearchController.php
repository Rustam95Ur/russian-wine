<?php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Wine;
use App\Models\Winery;
use Illuminate\Http\Request;

/**
 * Поиск Вин
 */
class SearchController extends Controller
{
    public function search(Request $request)
    {
        $wines = Wine::where('title','LIKE','%'.$request->title."%")
            ->where('status', '=', 'ACTIVE')->limit(3)->get();

        if (count($wines) == 0) {
            $wineries = Winery::where('title','LIKE','%'.$request->title."%")
                ->where('status', '=', 'ACTIVE')->with('wines')->get();

            $wines_array = [];

            foreach ($wineries as $winery) {
                foreach ($winery->wines as $wine_data) {
                    $wines_array[] = $wine_data;
                }

            }

            $wines = $wines_array;


        }

        return count($wines) ? $wines : ["error" => "По вашему запросу ничего не найдено"];
    }
}
?>
