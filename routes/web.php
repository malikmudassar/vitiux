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

Route::get('/', 'IndexController@show')->name('index');

Route::get('/video/{slug}', 'VideoController@show')->name('video');

Route::get('/staff/{slug}', 'StaffController@show')->name('staff');

Route::get('/pack/{slug}', 'PackController@show')->name('pack');

Route::get('/busqueda/{q}', 'SearchController@show')->name('search');

Route::get('/carro-de-compras', 'CartController@show')->name('cart');
Route::get('/carro-de-compras/resumen', 'CartController@summary')->name('cart.summary');
Route::get('/carro-de-compras/medio-de-pago', 'CartController@method')->name('cart.method');
Route::get('/carro-de-compras/checkout', 'CartController@checkout')->name('cart.checkout');
Route::get('/carro-de-compras/compra-exitosa', 'CartController@success')->name('cart.success');
Route::get('/carro-de-compras/compra-exitosa', 'CartController@success')->name('cart.failure');
Route::get('/carro-de-compras/compra-exitosa', 'CartController@success')->name('cart.pending');

Auth::routes();
Route::group(['middleware' => ['admin', 'auth']], function () {
    Route::resource('/admin', 'AdminController');
    Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
});
Route::get('/home', 'HomeController@index')->name('home');
