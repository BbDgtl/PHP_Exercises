@extends('layouts.mytemplate')

@section('title', 'Books List')

@section('content')
    <h1>Books List</h1>
    @foreach($books as $book)
        <h3>{{ $book->title }}</h3>
        <p>{{ $book->author }}</p>
        <!-- Show details of the book -->
        <a href="/books/{{$book->id_book}}">Show details</a> |
        <!-- Edit this book -->
        <a href="/books/{{$book->id_book}}/edit">edit
        </a>
        <!-- Delete this book -->
        <form action="/books/{{ $book->id_book }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete this book">
        </form>
        <hr>
    @endforeach
@endsection
