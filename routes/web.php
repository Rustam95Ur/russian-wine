<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('', 'Home\IndexController@index')->name('home');
Route::get('/wine-shop', 'Shop\IndexController@wine_list')->name('wine-shop');
Route::get('/sets', 'Shop\SetController@index')->name('sets');

Route::get('/wineries', 'Page\WineryController@index')->name('wineries');
Route::get('/micro_winery', 'Page\WineryController@micro_winery')->name('micro_winery');
Route::get('/winery/{slug}', 'Page\WineryController@show')->name('winery');
Route::get('/set-{slug}', 'Shop\SetController@show')->name('set');
Route::get('/subscription', 'Shop\SubscriptionController@index')->name('subscription');
Route::get('/winemakers', 'Page\WinemakerController@index')->name('winemakers');
Route::get('/franchise', 'Page\FranchiseController@index')->name('franchise');
Route::get('/personal-wine', 'Page\WinemakerController@personal_wine')->name('personal-wine');
Route::get('/tastings', 'Shop\TastingsController@index')->name('tastings');
Route::get('/wine-tour', 'Page\IndexController@tour')->name('wine-tour');
Route::get('/where-to-buy', 'Page\IndexController@where_to_by')->name('where_to_by');
Route::get('/winemaking-regions', 'Page\RegionController@index')->name('regions');
Route::get('/region-{slug}', 'Page\RegionController@show')->name('region');

Route::get('/search', 'Home\SearchController@search')->name('search');


Route::get('/{slug}', 'Page\IndexController@simple_page')->name('simple_page');





