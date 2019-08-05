@extends('layouts.mytemplate')

@section('title', 'Edit a Book')

@section('content')

<h1>
    Edit a book:
</h1>

<form action="/books/{{ $book->id_book }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title : </label>
        <input type="text" name="title" value="{{ $book->title }}"><br>
    <label for="title">Author : </label>
        <input type="text" name="author" value="{{ $book->author }}"><br>
    <input type="submit" name="submit">
    <br>
</form>

@endsection
