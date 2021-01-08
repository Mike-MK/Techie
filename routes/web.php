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

Route::get('/','LandingPageController@index');
Route::get('/shop','ShopPageController@index')->name('shop.index');
Route::get('/shop/{product}','ShopPageController@show')->name('shop.show');
Route::get('/cart','CartController@index')->name('cart.index');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');


//Test route
Route::get('empty', function (){
    Cart::destroy();
  });

Route::get('/product','ProductPageController@index');

Route::post('cart', 'CartController@store')->name('cart.store');