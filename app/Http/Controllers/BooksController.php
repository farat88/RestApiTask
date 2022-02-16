<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
//    public function Submit(Request $req)
//    {
//        $validation = $req->validate([
//            'name-book' => 'required|min:2|max:50',
//            'publication-year' => 'min:4|max:4',
//            'summary-book' => 'max:500',
//            'contact-authors' => 'max:50'
//        ]);
//    }
    public function submit()
    {
        $books = books::all();
        return view('books', compact('books'));
    }
}

//return view('bookss', compact('books'));
