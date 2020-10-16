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
    return view('coronas/index');
});

Route::resource('coronas',           'App\Http\Controllers\CoronaController');
Route::post('coronas',               'App\Http\Controllers\CoronaController@store');
Route::get('/coronas',               'App\Http\Controllers\CoronaController@index');
Route::get('/coronas/create',        'App\Http\Controllers\CoronaController@create');
Route::delete('/coronas/{corona}',   'App\Http\Controllers\CoronaController@destroy');
Route::put('/coronas/{corona}',      'App\Http\Controllers\CoronaController@update');
Route::get('/coronas/{corona}',      'App\Http\Controllers\CoronaController@show');
Route::get('/coronas/{corona}/edit', 'App\Http\Controllers\CoronaController@edit');