<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('book.index', ['books' => $books]);
    }
    public function create()
    {
        return view('book.create');
    }
    public function store(Request $request)
    {
        $data = [$request]
    }
}
