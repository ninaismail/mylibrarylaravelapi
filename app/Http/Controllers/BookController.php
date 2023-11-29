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
        $book = Book::find($id);
        return $book;
    }
    public function getSearchResults($title) 
    {
      $searchresult = Book::where('title',"LIKE","%".$title."%")->get();
      return $searchresult;
    }    
    public function getByOrigin($origin) 
    {
        $booksByOrigin = Book::where('literature_origin', $origin)->get();
        return $booksByOrigin;
    }
}
