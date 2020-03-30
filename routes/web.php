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
Route::get('produkty', [
    'uses' => 'ProductController@index',
    'as' => 'product.index',
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