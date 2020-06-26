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

Route::get('/login', 'LoginController@index')->name('get.login');
Route::post('/login', 'LoginController@login')->name('post.login');
Route::get('/logout', 'LoginController@logout')->name('get.logout');

Route::group(['middleware' => 'auth.user'], function () {
    Route::get('/', 'HomeController@getCategories')->name('categories');
    Route::get('/categories', 'HomeController@getCategories')->name('categories');
    Route::get('/{slug}.html', 'HomeController@getItem')->name('item');
    Route::get('/categories/{slug}', 'HomeController@getSubCategories')->name('sub-categories');
    Route::get('/cart', 'HomeController@getCart')->name('cart');
    Route::post('/order', 'HomeController@order')->name('order');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
