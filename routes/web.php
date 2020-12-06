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


Route::get('/', 'App\Http\Controllers\RotasController@index');
Route::get('/cadastro/usuario', 'App\Http\Controllers\RotasController@cadastroUsuario');
Route::post('/cadastro/usuario/post', 'App\Http\Controllers\RotasController@cadastroUsuarioPost');

Route::get('/listagem', 'App\Http\Controllers\RotasController@listagem');

Route::get('/cadastro/evento', 'App\Http\Controllers\RotasController@cadastroEvento');
Route::post('/cadastro/evento/post', 'App\Http\Controllers\RotasController@cadastroEventoPost');

