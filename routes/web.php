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

Route::get('/', 'PagesController@inicio');

//VENDEDOR
Route::get('trabajador', 'PagesController@vendedor')->name('trabajador');

// CLIENTES
Route::get('clientes', 'PagesController@clientes')->name('clientes');

// MERCADERIA
Route::get('mercaderia', 'PagesController@mercaderia')->name('mercaderia');

Route::post('/', 'PagesController@CrearMercaderia')->name('mercaderia.crear');
Route::get('/editar/{idm}', 'PagesController@editar')->name('mercaderia.editar');
Route::delete('/eliminar/{idm}', 'PagesController@eliminar')->name('mercaderia.eliminar');

// DISTRIBUIDOR
Route::get('distribuidor', 'PagesController@distribuidor')->name('distribuidor');