@extends('layouts.mytemplate')

@section('title', 'Edit a book')

@section('content')
<h1>Edit a book</h1>
<form action="/books/{{ $book->id_book }}" method="post">
    @csrf
    @method('PUT')
    <label for="title">Title : </label>
    <input type="text" name="title"
    value="{{ $book->title }}"><br>

    <label for="author">Author : </label>
    <input type="text" name="author"
    value="{{ $book->author}}"><br>

    <input type="submit" value="Submit">
</form>
@endsection
