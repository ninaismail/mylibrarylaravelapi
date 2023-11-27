<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }
    public function find($id)
    {
        $product = Book::find($id);
        return $product;
    }  
}
