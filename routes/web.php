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
Route::get('/login', 'App\Http\Controllers\RotasController@login');
Route::post('login', array('uses' => 'RotasController@postLogin'));


Route::get('/cadastro/usuario', 'App\Http\Controllers\RotasController@cadastroUsuario');
Route::post('/cadastro/usuario/post', 'App\Http\Controllers\RotasController@cadastroUsuarioPost');
Route::get('/listagem', 'App\Http\Controllers\RotasController@listagem');


Route::post('/evento/confirmar', 'App\Http\Controllers\RotasController@confirmarEvento');
Route::post('/evento/feedback', 'App\Http\Controllers\RotasController@feedbackEvento');



Route::get('/cadastro/evento', 'App\Http\Controllers\RotasController@cadastroEvento');
Route::post('/cadastro/evento/post', 'App\Http\Controllers\RotasController@cadastroEventoPost');
Route::get('admin/evento/getDT', 'App\Http\Controllers\RotasController@eventoDataTables');

