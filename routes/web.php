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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@comingSoon');
Route::get('/demo', 'HomeController@demo');
Route::get('/contact-us', 'HomeController@contactUs');
Route::get('/products/{category}', 'HomeController@products');

// Route::get('/', 'HomeController@coming_soon')->name('home');


