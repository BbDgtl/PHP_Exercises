@extends('layouts.mytemplate')

@section('title', 'Book Display Page')

@section('content')

<h1>Book List:</h1>

@foreach($books as $book)
<h3>{{ $book->title }}</h3>
<h3>{{ $book->author }}</h3>
<!-- Show details of the book -->
<a href="/books/{{$book->id_book}}">show details</a>
<!-- Edit the book -->
<a href="/books/{{$book->id_book}}/edit"> | edit</a>
<!-- Delete the book -->
<form action="/books/{{ $book->id_book }}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete this book?">
</form>
<hr>
@endforeach

@endsection
