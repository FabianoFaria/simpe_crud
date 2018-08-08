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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/home', function () {
//     return view('index');
// })->name('home');
Route::get('/', 'ProdutosController@index')->name('/');
Route::get('/home', 'ProdutosController@index')->name('home');
Route::get('/lista', 'ProdutosController@index')->name('lista');

Route::get('/registrar', 'ProdutosController@create')->name('registrar');
Route::get('/atualizar/{id}', 'ProdutosController@edit')->name('atualizar');


Route::post('salvar','ProdutosController@store')->name('salvar');
Route::put('salvar_atualizar/{id}', 'ProdutosController@update')->name('salvar_atualizar');
Route::get('remover/{id}', 'ProdutosController@destroy')->name('remover');