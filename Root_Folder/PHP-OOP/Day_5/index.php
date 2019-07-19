<?php

/* 
  With the AJAX mechanism, you can make 
  sure that a form is submitted and sent 
  to the server, without reloading the page.
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <br>
  <h2 id="myDiv"></h2>
  <br>
  <form action="" method="POST">
    <div>
      <label for="firstName">First Name :</label>
      <input type="text" name="firstName" id="firstName">
    </div>
    <br>
    <div>
      <label for="firstName">Last Name :</label>
      <input type="text" name="lastName" id="lastName">
    </div>
    <br>
    <input type="submit" name="submit" value="Click Me!">
  </form>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    // AJAX call to 'ajax_test.php'
    $(function() {
      $('input[type="submit"]').click(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'ajax_test.php',
          type: 'post',
          data: $('form').serialize(),
          dataType: 'html',
          success: function(result) {
            console.log(result);
            $('#myDiv').html(result);
          },
          error: function(err) {
            // If an AJAX error happens
            console.log('ERROR');
          }
        });
      });
    });
  </script>
</body>

</html>