@extends('layouts.mytemplate')

@section('title', 'New Book Page')

@section('content')

<h1>Add a New Book:</h1>

<form action="" method="POST">
    @csrf
    <input type="text" name="author" id="book_author">
    <input type="text" name="title" id="book_title">
    <input type="submit" value="submit">
</form>

<h1>Delete a Book:</h1>

<form action="" method="POST">
    @csrf
    <input type="text" name="id" id="id_book">
    <input type="submit" value="submit">
</form>

@endsection
