@extends('layouts.mytemplate')

@section('title', 'Users Display')

@section('content')

<h1>User List:</h1>

@foreach($users as $user)
<h3>{{ $user->first_name }}</h3>
<h3>{{ $user->last_name }}</h3>
<hr>
@endforeach

@endsection
