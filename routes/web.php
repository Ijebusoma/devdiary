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

//Route::get('/login', 'HomeController@showlogin');
Route::get('/home', 'HomeController@showlogin');
Route::get('/dashboard', 'HomeController@index');

//Route::post('/home/{user}', 'HomeController@index')->name('login');
