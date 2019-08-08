@extends('layouts.mytemplate')

@section('title', 'Insert a new book')

@section('content')
<h1>Create a new book</h1>

<div id="resultForm"></div>

<form action="/books" method="post">
    @csrf
    <label for="title">Title : </label>
<input type="text" name="title"
value="{{ old('title')}}"><br>
    <label for="author">Author : </label>
    <input type="text" name="author"><br>
    <input type="submit" value="Submit">
</form>
@endsection
<script src="http://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
    // AJAX Call to 'ajax_test.php'
    $(function() {
      $('input[type="submit"]').click(function(e) {
        e.preventDefault();
        console.log('click');
        $.ajax({
          url: '/books',
          type: 'post',
          data: $('form').serialize(),
          success: function(result) {
            if(result.success) {
                $('#resultForm').html('<p style="color:green">'
                    + result.success + '</p>');
            } else {
                $('#resultForm').html('');
                $.each(result.errors, function(key, value) {
                    $('#resultForm').append('<p style="color:red">'
                    + value + '</p>');
                });
            }

          },
          error: function(err) {
            // If an AJAX error happens
          }
        });
      });
    });
</script>
