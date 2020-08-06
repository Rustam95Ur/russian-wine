<?php

namespace App\Providers;

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
                    $wine = Wine::select('title', 'price', 'image', 'id')->where('id', '=', $item['wine_id'])->first();
                    if ($wine) {
                        $wine_array = [
                            'wine_id' => $wine->id,
                            'title' => $wine->title,
                            'price' => $wine->price,
                            'image' => Voyager::image($wine->image),
                        ];
                        array_push($cart_wines, $wine_array);
                        $total_sum += $wine->price;
                        $countWine += 1;
                    }
                }
            }
            $view->with('countCart', $count)->with('cart_wines', $cart_wines)->with('total_sum', $total_sum)->with('countWine', $countWine);
        });
    }
}
