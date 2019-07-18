<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Flowershop Login</title>
</head>

<body>
  <h1>Flowershop Login Page</h1>
  <hr>
  <form action="" method="GET">
    <input type="email" name="email" placeholder="email" requried>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" value="Submit">
  </form>

  <?php
  if (!empty($_GET)) {
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo $email . '<br>';
    echo $password;
  }
  ?>

</body>

</html>