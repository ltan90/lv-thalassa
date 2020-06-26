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

Route::get('/', 'LoginController@index');
Route::get('/login', 'LoginController@index');
Route::post('/', 'LoginController@index');

Route::get('/categories', 'HomeController@getCategories')->name('categories');
Route::get('/categories/{slug}', 'HomeController@getSubCategories');
Route::get('/cart', 'HomeController@getCart')->name('cart');
//Route::group(['middleware' => 'auth.user'], function () {
//    Route::get('/categories', 'HomeController@getCategories');
//});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
