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

// Route::get('/', function () {
// });


// $router->get('/compressor', 'Site\CompressorController@index');


Route::get('/', 'App\Http\Controllers\RotasController@index');
Route::get('/cadastro', 'App\Http\Controllers\RotasController@cadastro');
Route::post('/cadastro/post', 'App\Http\Controllers\RotasController@cadastroPost');

// Route::get('/', 'App\Http\Controllers\RotasController@index');
// Route::get('/', 'App\Http\Controllers\RotasController@index');

// Route::get('/', 'App\Http\Controllers\RotasController@index');

