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
//Rotas Esportes//
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Route::get('/esportes', 'EsporteController@listar')->middleware('auth')->name('listaresportes');
Route::get('/cadastrar_esportes', 'EsporteController@cadastrar')->middleware('auth')->name('cadastraresporte');
Route::post('/cadastrar_esportes', 'EsporteController@novoCadastro')->middleware('auth')->name('novoesporte');
//Rotas Usuarios//
Route::get('/usuario/{id}', 'UserController@buscar');
