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

Route::get('saludar', function () {
    return 'Hola mundo!';
});

Route::redirect('saludo', 'saludar');

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('greeting', 'GreetingController@saludar');

Route::post('login', 'GreetingController@login')->name('login');