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


Auth::routes();

Route::get('/','HomeController@index')->name('home');

Route::post('/add','HomeController@add');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::post('/admin', 'AdminController@update');

Route::get('guitars/{alias}', 'GuitarsController@index');

Route::get('guitars/{alias}?filter={brand}', 'GuitarsController@index');

Route::get('product/{alias}', 'SingleController@index');

Route::post('product/{alias}', 'SingleController@update');

Route::any('cart/add', 'CartController@add');

Route::get('cart/clear', 'CartController@clear');

Route::any('cart/checkout', 'CartController@checkout');

Route::get('cart/show', 'CartController@show');

Route::any('contact', 'ContactController@index')->name('contact');

Route::post('search', 'SearchController@index');
