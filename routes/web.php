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

Route::get('/school/add', 'SchoolController@add')->name('add-school');
Route::post('/school/add', 'SchoolController@register')->name('register-school');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
