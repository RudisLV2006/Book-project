<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/book', [BookController::class, 'index']);
Route::get('/create', [BookController::class, 'create']);
Route::get('/book/{book}', [BookController::class, 'show']);
Route::get('/edit/{book}', [BookController::class, 'edit']);
Route::post('/store', [BookController::class, 'store']);
Route::put('/book/{book}', [BookController::class, 'update']);
//Route::delete('/book/{book}', [BookController::class, 'delete']);