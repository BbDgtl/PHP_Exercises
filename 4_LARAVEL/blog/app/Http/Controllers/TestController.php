<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        return 'Index method of test controller';
    }

    public function contact()
    {
        return 'Contact method of the test controller';
    }

    public function book($id)
    {
        // Ask the model to give a list of authors for this book
        $authors = ['Ricardo', 'Liliana', 'Zoltan'];

        return view('book', ['id' => $id, 'authors' => $authors]);
    }
}
