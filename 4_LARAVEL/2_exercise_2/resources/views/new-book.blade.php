@extends('layouts.mytemplate')

@section('title', 'Insert a new book')

@section('content')
<h1>Create a new book</h1>
<form action="/books" method="post">
    @csrf
    <label for="title">Title : </label>
    <input type="text" name="title"><br>
    <label for="author">Author : </label>
    <input type="text" name="author"><br>
    <input type="submit" value="Submit">
</form>
@endsection
