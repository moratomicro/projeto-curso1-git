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
    return view('home');
});

Route::get('/exames', 'App\Http\Controllers\ExamesController@index');
Route::get('/listaMensal', 'App\Http\Controllers\AgendasController@index');
Route::get('/novo', 'App\Http\Controllers\AgendasController@create');
Route::post('/novo', 'App\Http\Controllers\AgendasController@store')->name('agendar_paciente');
Route::get('/edit/{id}', 'App\Http\Controllers\AgendasController@edit')->name('editar_paciente');
Route::get('/delete/{id}', 'App\Http\Controllers\AgendasController@destroy')->name('deletar_paciente');