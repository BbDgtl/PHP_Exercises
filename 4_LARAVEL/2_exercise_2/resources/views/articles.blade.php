@extends('layouts.mytemplate')

@section('title', 'Articles List')

@section('content')
    <h1>Articles List</h1>
    @foreach($articles as $article)
        <h3>{{ $article->title }}</h3>
        <p>{{ $article->description }}</p>
        <hr>
    @endforeach
@endsection
