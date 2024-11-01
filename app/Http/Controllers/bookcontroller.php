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
    public function show(Book $book)
    {
        return view('book.show', ['book' => $book]);
    }
    public function edit(Book $book)
    {
        return view('book.edit', ['book' => $book]);
    }
    public function update(Request $request, Book $book)
    {
        $data = ['title' => $request->title, 'release_date' => $request->date];
        $book->update($data);
        return redirect('/book/' . $book->id);
    }
    public function store(Request $request)
    {
        \Log::debug($request);

        $data = ['title' => $request->title, 'release_date' => $request->date];
        $book = Book::create($data);
        // return view('book.index');
        return redirect('/book/' . $book->id);
    }
    public function delete(Book $book)
    {
        $book->delete();

        return redirect('/book');
    }
}
