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
    return view('home');
});
Route::get('/system', 'SystemsController@index');
Route::post('/system/add', 'SystemsController@store');
Route::get('/system/autocomplete', "SystemsController@autoComplete");

Route::get('/faction', "FactionsController@index");
Route::post('/faction/add', "FactionsController@store");
Route::get('/faction/autocomplete/{name}', "FactionsController@autoComplete");

Route::get('/fsdata', "FSDataController@index");
Route::post('/fsdata/edit', "FSDataController@edit");

