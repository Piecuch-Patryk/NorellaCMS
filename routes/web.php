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

/* 
 * Register Off
*/
Auth::routes([
    'register' => false,
]);

/* 
 * /Home
*/
// index
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home.index',
]);

/* 
 * /Product
*/
// index
Route::get('oferta', [
    'uses' => 'ProductController@index',
    'as' => 'product.index',
]);
// create
Route::view('dodaj-nowa-oferte', 'product.create')
    ->name('product.create')
    ->middleware('auth');
// store
Route::post('zapisz-oferte', [
    'uses' => 'ProductController@store',
    'as' => 'product.store',
    'middleware' => 'auth',
]);
// showPrices
Route::get('cennik-uslug', [
    'uses' => 'ProductController@showPrice',
    'as' => 'product.showprice',
]);
// show
Route::get('oferta-norella/{product}', [
    'uses' => 'ProductController@show',
    'as' => 'product.show',
]);
// edit
Route::get('edytuj-oferte/{product}/{id}', [
    'uses' => 'ProductController@edit',
    'as' => 'product.edit',
    'middleware' => 'auth',
]);
// update
Route::put('zapisz-oferte/{product}', [
    'uses' => 'ProductController@update',
    'as' => 'product.update',
    'middleware' => 'auth',
]);
// destroy
Route::delete('usun-oferte/{product}', [
    'uses' => 'ProductController@destroy',
    'as' => 'product.destroy',
    'middleware' => 'auth',
]);

/* 
 * /Slide
*/
// index
Route::get('pokaz-slajdów', [
    'uses' => 'SlideController@index',
    'as' => 'slide.index',
    'middleware' => 'auth',
]);
// create
Route::view('dodaj-nowy-slajd', 'slide.add')
    ->name('slide.add')
    ->middleware('auth');
// store
Route::post('zapisz-slajd', [
    'uses' => 'SlideController@store',
    'as' => 'slide.store',
    'middleware' => 'auth',
]);
// destroy
Route::delete('usuń-wybrany-slajd/{slide}', [
    'uses' => 'SlideController@destroy',
    'as' => 'slide.destroy',
    'middleware' => 'auth',
]);