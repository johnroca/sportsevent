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

Auth::routes();

Route::get('/homeSport', 'SportController@index');

Route::get('/addSport', 'SportController@add')->name('addEvent');

Route::post('/addSport',
	[
		'as' => 'save_sport',
		'uses' => 'SportController@save'
	] 
);





