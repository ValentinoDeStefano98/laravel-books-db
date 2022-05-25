<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends Controller
{
    public function index(){
        //$books = config('books');
        //dump($books);

        $books = Book::all();

        //dd($books);

        return view('pages.book.index', compact('books'));
    }
}
