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
//Auto par p thar start
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Auto par p thar end

//koko pyan yay start
Route::get('/show', 'HomeController@show')->name('show');
Route::post('/home/create', 'HomeController@create')->name('home.create');
Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
Route::post('/home/update/{id}', 'HomeController@update')->name('home.update');
Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');




