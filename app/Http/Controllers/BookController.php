<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $books = config('books');
        dump($books);

        return view('pages.book.index', compact('books'));
    }
}
