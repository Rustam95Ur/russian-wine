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
            ->where('status', '=', 'ACTIVE')
            ->where('price', '>', 0)
            ->limit(3)->get();
        $link = 'title='.$request->title;

        if (count($wines) == 0) {
            $wineries = Winery::where('title','LIKE','%'.$request->title."%")
                ->where('status', '=', 'ACTIVE')->with('wines')->get();

            $wines_array = [];
            $winery_link = '';
            foreach ($wineries as $winery) {
                foreach ($winery->wines as $key => $wine_data) {
                    if ($wine_data->price > 0 ) {
                        $wines_array[] = $wine_data;
                    }
                }
                $winery_link .= 'winery[]='.(string) $winery->id. '&';
            }
            $wines = $wines_array;
            $link =  $winery_link;
        }
        return ['wines' => $wines, 'link' => $link];
    }
}
?>
