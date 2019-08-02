@extends('layouts.mytemplate')

@section('title', 'Book Page Title')

@section('content')
<h1>Welcome to the Book Page</h1>
<p>This is the book : {{ $id }}</p>

@if(count($authors))
<ul>
    @foreach($authors as $author)
    <li>Name :{{ $author }}</li>
    @endforeach
</ul>
@endif

@endsection

<div>
    <p>More content.</p>
</div>
