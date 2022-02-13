<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function Submit(Request $req)
    {
        $validation = $req->validate([
            'name-book' => 'required|min:2|max:50',
            'publication-year' => 'required|min:4|max:4',
            'summary-book' => 'max:500',
            'contact-authors' => 'max:50'
        ]);
    }
}
