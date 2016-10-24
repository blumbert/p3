<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// lorem ipsum generator routes
Route::get('/lipsum', 'LipsumController@index')->name('lipsum.index');
Route::post('/lipsum', 'LipsumController@show')->name('lipsum.show');

// users generator routes
Route::get('/users', 'UsersController@index')->name('users.index');
Route::post('/users', 'UsersController@show')->name('users.show');
