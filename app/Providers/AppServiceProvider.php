<?php

namespace App\Providers;

use App\Models\Set;
use App\Models\Wine;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Session;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        setlocale(LC_TIME, 'ru_RU.UTF-8');
        Carbon::setLocale(config('app.locale'));
        view()->composer('*', function ($view) {
            $count = 0;
            $total_sum = 0;
            $countWine = 0;
            $cart_wines = [];
            $countCartItems = Session::get('cart');
            if ($countCartItems != false) {
                foreach ($countCartItems as $item) {
                    $count += $item['qty'];
                    if ($item['type'] == 'set') {
                        $product = Set::select('title', 'price', 'image', 'id')->where('id', '=', $item['product_id'])->first();
                    } elseif ($item['type'] == 'wine') {
                        $product = Wine::select('title', 'price', 'image', 'id')->where('id', '=', $item['product_id'])->first();
                    }
                    if ($product) {
                        $wine_array = [
                            'count' => $item['qty'],
                            'type' => $item['type'],
                            'product_id' => $product->id,
                            'title' => $product->title,
                            'price' => $product->price,
                            'image' => Voyager::image($product->image),
                            'total' => (int)$product->price * $item['qty']
                        ];
                        array_push($cart_wines, $wine_array);
                        $total_sum += (int)$product->price * $item['qty'];
                        $countWine += 1;
                    }
                }
            }
            $view->with('countCart', $count)->with('cart_wines', $cart_wines)->with('total_sum', $total_sum)->with('countWine', $countWine);
        });
    }
}
