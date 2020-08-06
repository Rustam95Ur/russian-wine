<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Session;

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
        view()->composer('*', function($view)
        {
            $count = 0;
            $countCartItems = Session::get('cart');
            if ($countCartItems != false ) {
                foreach ($countCartItems as $item) {
                    $count += $item['qty'];
                }
            }
            $view->with('countCart', $count);
        });
    }
}
