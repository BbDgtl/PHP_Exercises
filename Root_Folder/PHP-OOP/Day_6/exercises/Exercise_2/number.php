<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercise 1</title>
</head>

<body>

  <?php

  class GreaterThanException extends Exception
  { };

  class NotANumberException extends Exception
  { };

  function myFunction($number)
  {
    $ranNumber = rand(0, 50);
    if ($number > $ranNumber) {
      throw new GreaterThanException();
    } else if (NAN) {
      throw new NotANumberException();
    }
  }

  if (isset($_POST['submit'])) {
    $number = $_POST['number'];
    myFunction($number);
  }

  ?>

  <form action="" method="POST">
    <label for="number">Pick a number:
      <input type="number" name="number">
    </label>
    <input type="submit" name="submit" value="submit">
  </form>


</body>

</html>