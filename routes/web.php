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
Route::get('/', function () {

    $books = config('books');

    //compact('books') = [ 'books' => $books]
    return view('pages.book.index', compact('books'));
});

//rotta: localhost8080/book/id
Route::get('/book/{id}', function ($id) {

    $books = config('books'); //recupera tutto l'array book

    //recuperare un solo dato dell'array globale
    $book = $books[$id];

    //compact('books') = [ 'books' => $books]
    return view('pages.book.show', compact('book'));
})->name('book');