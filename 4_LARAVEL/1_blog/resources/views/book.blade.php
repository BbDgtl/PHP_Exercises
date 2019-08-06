@extends('layouts.mytemplate')

@section('title', '{{ Book Details }}')

@section('content')
<h1>Book Details</h1>
<p><strong>Title: </strong> {{ $book->title }}</p>
<p><strong>Author: </strong> {{ $book->author }}</p>

@endsection
