<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'Here are all the books in the library';
    }

    public function show($title)
    {
        return 'Results for the book: ' . $title;
    }
}
