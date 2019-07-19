<?php

// ***** ///// EXERCISE 3 : LET'S CLEAN \\\\\ ***** \\
// ! COMPLETED (i think.....)

// TODO In this exercise, you must create an Ajax form. You can use Ajax with JavaScript or jQuery.

// ? The form will allow to add a new vehicle in the database with the following fields:
// ?  - Brand
// ?  - Model
// ?  - Year
// ?  - Color

// TODO The form treatment will be made in ajax. A message will display if the data entry has failed or was a success.

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercise 3 : Let's Clean</title>
</head>

<body>
  <br>
  <h1>Add a Vehicle</h1>
  <h2 id="myDiv"></h2>
  <br>

  <form action="" method="POST">
    <div>
      <label for="brand">Make : </label>
      <input type="text" name="brandMake" id="brandMake" placeholder="Vehicle Make" required>

      <label for="brand">Model : </label>
      <input type="text" name="modelName" id="modelName" placeholder="Vehicle Model" required>

      <label for="brand">Year : </label>
      <input type="text" name="yearBuilt" id="yearBuilt" placeholder="Vehicle Year" required>

      <label for="brand">Color : </label>
      <input type="text" name="vehicleColor" id="vehicleColor" placeholder="Vehicle Color" required>

      <input type="submit" value="Submit">
    </div>
  </form>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script>
    // AJAX call to 'ajax_validation.php'
    $(function() {
      $('input[type="submit"]').click(function(e) {
        e.preventDefault();
        $.ajax({
          url: 'ajax_validation.php',
          type: 'post',
          data: $('form').serialize(),
          dataType: 'html',
          success: function(results) {
            console.log(results);
            $('#myDiv').html(results);
          },
          error: function(err) {
            // If an AJAX error occurs.
            console.log("ERROR");
          }
        });
      });
    });
  </script>

</body>

</html>