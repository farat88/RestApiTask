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

Route::post('/book/submit', 'BooksController@submit')->name('book-form');
