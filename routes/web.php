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
Route::get('/wineshop', 'Shop\IndexController@wine_list')->name('wineshop');
Route::get('/sets', 'Shop\IndexController@sets')->name('sets');
Route::get('/subscription', 'Shop\SubscriptionController@index')->name('subscription');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
