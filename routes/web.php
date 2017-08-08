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
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@showlogin');
Route::get('/dashboard', 'HomeController@show');
Route::get('/profile', 'HomeController@showProfile')->name('profile');
Route::post('/create', 'HomeController@save');
Route::get('/edit/{id}', 'HomeController@edit');
Route::get('/crud', function()
{
    return view('crud');
});


//Route::post('/home/{user}', 'HomeController@index')->name('login');
