<?php

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

Route::get('/', 'PagesController@index');

Route::get('/checkout', [
    'uses' => 'ProductController@checkout',
    'as' => 'pages.checkout'
]);

Route::get('/add-to-cart/{id}', [
	'uses' => 'ProductController@getAddToCart',
	'as' => 'product.addToCart'
]);

Route::get('/shopping-cart', [
	'uses' => 'ProductController@getCart',
	'as' => 'pages.shopping-cart'
]);

Route::get('/about', 'PagesController@about');

Route::get('/explore', [
    'uses' => 'LocationController@getLoc',
    'as' => 'explore'
]);

Route::get('/create', [
    'uses' => 'LocationController@create',
    'as' => 'create'
]);

Route::post('store', [
    'uses' => 'LocationController@store',
    'as' => 'store'
]);

Route::get('/products', [
    'uses' => 'ProductController@getIndex',
    'as' => 'products'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

