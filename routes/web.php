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
//use Auth;
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/event', 'EventController@index')->name('event');
Route::post('/event', 
  ['as' => 'save_event', 'uses' => 'EventController@save']);

Route::get('/home', 'HomeController@index')->name('home');

