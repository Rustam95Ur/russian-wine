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

Auth::routes();

Route::get('', 'Home\IndexController@index')->name('home');
Route::get('/wine-shop', 'Shop\IndexController@wine_list')->name('wine-shop');
Route::get('/wine/{slug}', 'Shop\IndexController@wine_info')->name('wine');
Route::get('/sets', 'Shop\SetController@index')->name('sets');

Route::get('/wineries', 'Page\WineryController@index')->name('wineries');
Route::get('/micro_winery', 'Page\WineryController@micro_winery')->name('micro_winery');
Route::get('/winery/{slug}', 'Page\WineryController@show')->name('winery');
Route::get('/set-{slug}', 'Shop\SetController@show')->name('set');
Route::get('/subscription', 'Shop\SubscriptionController@index')->name('subscription');
Route::get('/winemakers', 'Page\WinemakerController@index')->name('winemakers');
Route::get('/franchise', 'Page\FranchiseController@index')->name('franchise');

Route::get('/personal-wine', 'Shop\IndexController@personal_wine')->name('personal-wine');
Route::post('personal-wine/order', 'Shop\IndexController@personal_wine_order')->name('personal-wine-order');

Route::get('/tastings', 'Shop\TastingsController@index')->name('tastings');
Route::post('tasting/order', 'Shop\TastingsController@order')->name('tasting_order');

Route::get('/wine-tour', 'Page\IndexController@tour')->name('wine-tour');
Route::get('/where-to-buy', 'Page\IndexController@where_to_by')->name('where_to_by');
Route::get('/winemaking-regions', 'Page\RegionController@index')->name('regions');
Route::get('/region-{slug}', 'Page\RegionController@show')->name('region');

Route::post('order/tour', 'Page\OrderController@tour_save')->name('tour_save');
// Ajax action
Route::get('/search', 'Home\SearchController@search')->name('search');

Route::get('/profile', 'Page\ProfileController@show')->name('profile');
Route::post('/profile/update', 'Page\ProfileController@update')->name('profile-update');


Route::get('/add-to-favorite', 'Page\FavoriteController@addToFavorite')->name('add-to-favorite');
Route::get('/delete-from-favorite', 'Page\FavoriteController@deleteFromFavorite')->name('delete-from-favorite');

Route::get('/favorite', 'Page\ProfileController@favorite')->name('favorite');

//подписки в ЛК
Route::get('/sub-wines', 'Page\ProfileController@sub')->name('sub-wines');

Route::get('/{slug}', 'Page\IndexController@simple_page')->name('simple_page');



