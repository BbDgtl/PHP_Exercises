<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookApiController extends Controller
{
    public function books()
    {
        return Book::all();
    }

    public function numberOfBooks($number)
    {
        return Book::all()
            ->take($number);
    }

    public function booksByTitle($title)
    {
        return Book::where("title", "LIKE", "%" . $title . "%")
            ->get();
    }

    public function booksByAuthor($author)
    {
        return Book::where("author", "LIKE", "%" . $author . "%")
            ->get();
    }
}
