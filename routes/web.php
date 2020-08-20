<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/menus', function() {
    return view('menus.sidebar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contratos', 'ContratoController@contratos')->name('contrato');
Route::get('/clientes', 'ClienteController@clientes')->name('cliente');

Route::get('/alta-cliente', 'ClienteController@index')->name('cliente.index');
Route::post('/cliente/save', 'ClienteController@save')->name('cliente.save');

Route::get('/alta-contrato', 'ContratoController@contratos')->name('contratos.contratos');
Route::post('/contrato/save', 'ContratoController@save')->name('contratos.save');

Route::get('/listado', 'ClienteController@listado')->name('cliente.listado');
