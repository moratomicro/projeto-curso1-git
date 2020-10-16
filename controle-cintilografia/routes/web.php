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

Route::get('/', 'App\Http\Controllers\ExamesController@index');

Route::get('/exames', 'App\Http\Controllers\ExamesController@index');

Route::get('/agenda',         'App\Http\Controllers\AgendasController@index');
Route::get('/agenda/create',  'App\Http\Controllers\AgendasController@create');
Route::post('/agenda/create', 'App\Http\Controllers\AgendasController@store')->name('create');
Route::get('/agenda/edit',    'App\Http\Controllers\AgendasController@edit');