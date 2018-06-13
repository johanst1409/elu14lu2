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

Route::get('/', 'GameController@index')->name('games.index');

Route::resource('games', 'GameController')->except('index');
Route::resource('platforms', 'PlatformController');
Route::resource('companies', 'CompanyController');
Route::resource('genres', 'GenreController')->only('index', 'store', 'show');
