<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/book', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create']);
Route::get('/book/{book}', [BookController::class, 'show']);
Route::post('/store', [BookController::class, 'store']);