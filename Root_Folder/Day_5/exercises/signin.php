<?php

// TODO 2. In the 'signin.php' file, create a form with two input : email & password.
// TODO    This form will redirect to 'home.php'

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>File Exercise 3</title>
</head>

<body>
  <form action="home.php" method="POST">
    <input type="email" name="mail" placeholder="your email">
    <input type="password" name="password" placeholder="your password">
    <input type="submit" name="submitBtn">
  </form>
</body>

</html>