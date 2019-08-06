@extends('layouts.mytemplate')

@section('title')
{{ $book->title }}
@endsection

@section('content')
<h1>Book Detail</h1>
<p><strong>Title : </strong> {{ $book->title }}</p>
<p><strong>Author : </strong> {{ $book->author }}</p>
@endsection
