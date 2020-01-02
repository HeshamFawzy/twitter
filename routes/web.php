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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/utwittes', 'TwittesController@index')->name('twittes.index');

Route::get('/create', 'TwittesController@create')->name('twittes.create');

Route::post('/store', 'TwittesController@store')->name('twittes.store');

Route::get('/show/{id}', 'TwittesController@show')->name('twittes.show');

Route::get('/destroy/{id}', 'TwittesController@destroy')->name('twittes.destroy');

Route::get('/followers', 'FollowersController@index')->name('followers.index');

Route::get('/search', 'FollowersController@search')->name('followers.search');
