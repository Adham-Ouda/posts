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

Route::get('/','PostController@posts');

Route::get('products','PostController@posts');

Route::resource('myposts','PostController');

Route::post('/store','PostController@store');


Route::get('/allposts','PostController@allposts');