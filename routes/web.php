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
//rotta: localhost: 8080
Route::get('/', 'BookController@index');

//rotta: localhost8080/book/id
Route::get('/book/{id}', 'BookController@show')->name('book');