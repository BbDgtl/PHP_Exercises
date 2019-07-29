<?php

require_once 'User.php';

$my_file = 'users.json';
$arr_data = array();

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $newUser = new User($name, $email);
  $json = json_encode($newUser, JSON_PRETTY_PRINT);
  // var_dump($json);

  $jsonFile = file_get_contents("users.json");
  $arr_data = json_decode($json, true);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercise 1</title>
</head>

<body>
  <form action="" method="POST">
    <label for="">
      Contact Information:
      <input type="text" name="name" placeholder="Your Name">
      <input type="email" name="email" placeholder="Your Email">
      <input type="submit" name="submit">
    </label>
  </form>
</body>

</html>