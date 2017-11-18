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


Auth::routes();

Route::get('/event', 'EventController@index')->name('event');
Route::post('/event', 
  ['as' => 'save_event', 'uses' => 'EventController@save']);

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/school/add', 'SchoolController@add')->name('add-school');
Route::post('/school/add', 'SchoolController@register')->name('register-school');



Route::get('/event', 'EventController@index')->name('event');
Route::get('/event', 'EventController@save')->name('save_event');

Route::get('/homeSport', 'SportController@index');

Route::get('/addSport', 'SportController@add')->name('addEvent');

Route::post('/addSport',
	[
		'as' => 'save_sport',
		'uses' => 'SportController@save'
	] 
);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/confirmschool', 'ConfirmTableController@controlPage')->name('confirmschool');

