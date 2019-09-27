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

Route::get('/', 'SuperHeroesController@show');
Route::get('changes/delete/{id}', 'SuperHeroesController@destroy');

Route::get('/changes', 'SuperHeroesController@choiseact');
Route::get('/changes/edit/{id}', 'SuperHeroesController@editshow');
Route::get('/hero/{id}', 'SuperHeroesController@showOneHeroInfo');
Route::post('/changes/edit', 'SuperHeroesController@edit');
Route::post('/changes/create', 'SuperHeroesController@create');

