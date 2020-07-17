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
        $wines=Wine::where('title','LIKE','%'.$request->q."%")->get();

        return $wines;
    }
}
?>
