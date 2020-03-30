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
Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home.index',
]);


/* 
 * /Product
*/
Route::get('produkty', [
    'uses' => 'ProductController@index',
    'as' => 'product.index',
]);


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/home', 'HomeController@index')->name('home');
