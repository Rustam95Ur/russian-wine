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

Route::get('', 'Home\IndexController@index')->name('home');
Route::get('/wine-shop', 'Shop\IndexController@wine_list')->name('wine-shop');
Route::get('/sets', 'Shop\SetController@index')->name('sets');
Route::get('/subscription', 'Shop\SubscriptionController@index')->name('subscription');
Route::get('/winemakers', 'Page\WinemakerController@index')->name('winemakers');
Route::get('/franchise', 'Page\FranchiseController@index')->name('franchise');
Route::get('/personal-wine', 'Page\WinemakerController@personal_wine')->name('personal-wine');
Route::get('/tastings', 'Shop\TastingsController@index')->name('tastings');
Route::get('/wine-tour', 'Page\IndexController@tour')->name('wine-tour');
Route::get('/agreement', 'Page\IndexController@agreement')->name('agreement');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
