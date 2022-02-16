<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/authors', function () {
    return view('authors');
})->name('authors');

Route::get('/books', function () {
    return view('books');
})->name('books');

Route::post('/author/submit', 'AuthorsController@submit')->name('author-form');

Route::post('/books', 'BooksController@submit')->name('book-form');

//route::post('/books/submit', [ \App\Http\Controllers\BooksController::class, 'submit' ])->name('book-form');




