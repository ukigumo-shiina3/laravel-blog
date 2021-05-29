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

Route::get('/', 'App\Http\Controllers\BlogController@showList')->name('blogs');
Route::get('/', 'App\Http\Controllers\BlogController@showCreate')->name('create');
Route::get('/', 'App\Http\Controllers\BlogController@exeStore')->name('store');
Route::get('/blog/{id}', 'App\Http\Controllers\BlogController@showDetail')->name('show');
