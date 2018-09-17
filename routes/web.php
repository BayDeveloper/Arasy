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
Route::get('tcnewtrip', 'PagesController@getTcnewtrip');

Route::get('contact', 'PagesController@getContact');

Route::get('about', 'PagesController@getabout');

Route::get('/', 'PagesController@getIndex');
