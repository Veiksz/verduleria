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

Route::get('trabajador', 'PagesController@trabajador')->name('trabajador');

Route::get('clientes', 'PagesController@clientes')->name('clientes');

Route::get('mercaderia', 'PagesController@mercaderia')->name('mercaderia');

Route::get('distribuidor', 'PagesController@distribuidor')->name('distribuidor');