@extends('layouts.mytemplate')

@section('title', 'Insert a New Book')

@section('content')

<h1>
    Create a new book:
</h1>

<form action="/books" method="POST">
    @csrf
    <label for="title">Title : </label>
    <input type="text" name="title">
    <label for="title">Author : </label>
    <input type="text" name="author">
    <input type="submit" name="submit">
</form>

@endsection
