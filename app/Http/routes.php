<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('posts/{post}/yt', 'VtvController@getYT')->name('posts.yt');
Route::get('posts/{post}/{yt_id}/yt_update', 'VtvController@getyt_update')->name('posts.yt_update');

Route::resource('posts', 'VtvController');

Route::get('/', function () {
    return view('welcome');
});
