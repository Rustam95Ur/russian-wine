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
                ->where('status', '=', 'ACTIVE')->get();

            foreach ($wineries as $winery) {
                $wines = Wine::where('winery_id', '=', $winery->id)->limit(3)->get();
            }
        }

        return count($wines) ? $wines : ["error" => "По вашему запросу ничего не найдено"];

    }
}
?>
