@extends('layouts.mytemplate')

@section('title')
{{ $article->title }}
@endsection

@section('content')
<h1>Article Details</h1>
<p><strong>Title: </strong> {{ $article->title }}</p>
<p><strong>Description: </strong> {{ $article->description }}</p>

@endsection
