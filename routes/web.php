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

Route::post('trabajador/', 'PagesController@CrearVendedor')->name('vendedor.crear');
Route::get('trabajador/editar/{rutV}', 'PagesController@EditarVendedor')->name('vendedor.editar');
Route::put('trabajador/editar/{rutV}', 'PagesController@ModificarVendedor')->name('vendedor.modificar');
Route::delete('trabajador/eliminar/{rutV}', 'PagesController@EliminarVendedor')->name('vendedor.eliminar');

// CLIENTES
Route::get('clientes', 'PagesController@clientes')->name('clientes');

Route::post('clientes/', 'PagesController@CrearCliente')->name('clientes.crear');
Route::get('clientes/editar/{rutC}', 'PagesController@EditarCliente')->name('clientes.editar');
Route::put('clientes/editar/{rutC}', 'PagesController@ModificarCliente')->name('clientes.modificar');
Route::delete('clientes/eliminar/{rutC}', 'PagesController@EliminarCliente')->name('clientes.eliminar');

// MERCADERIA
Route::get('mercaderia', 'PagesController@mercaderia')->name('mercaderia');

Route::post('mercaderia/', 'PagesController@CrearMercaderia')->name('mercaderia.crear');
Route::get('mercaderia/editar/{idm}', 'PagesController@EditarMercaderia')->name('mercaderia.editar');
Route::put('mercaderia/editar/{idm}', 'PagesController@ModificarMercaderia')->name('mercaderia.modificar');
Route::delete('mercaderia/eliminar/{idm}', 'PagesController@EliminarMercaderia')->name('mercaderia.eliminar');

// DISTRIBUIDOR
Route::get('distribuidor', 'PagesController@distribuidor')->name('distribuidor');

Route::post('distribuidor/', 'PagesController@CrearDistribuidor')->name('distribuidor.crear');
Route::get('distribuidor/editar/{rutV}', 'PagesController@EditarDistribuidor')->name('distribuidor.editar');
Route::put('distribuidor/editar/{rutV}', 'PagesController@ModificarDistribuidor')->name('distribuidor.modificar');
Route::delete('distribuidor/eliminar/{rutV}', 'PagesController@EliminarDistribuidor')->name('distribuidor.eliminar');