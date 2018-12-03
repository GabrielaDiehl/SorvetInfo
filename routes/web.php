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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sabores', 'saboresController@index');
Route::get('/tipos', 'tiposController@index');
Route::get('/pedidos', 'peididoController@index');


Route::get('/pedidos/create','peididoController@create');
Route::post('/pedidos','peididoController@store');