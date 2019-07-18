<?php

var_dump($_POST);
if (isset($_POST['submit'])) {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    require_once 'UserManager.php';
    $userManager = new UserManager();
    $userLogged = $userManager->login($_POST['email'], $_POST['password']);

    if (!empty($userLogged)) {
      $_SESSION['user']['email']   = $userLogged->getMail();
      $_SESSION['user']['id']      = $userLogged->getId();
      echo 'Welcome USER.';
    } else {
      echo 'Wrong credentials';
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>

<body>
  <form action="" method="POST">
    <input type="email" name="email" placeholder="Email Address" required>
    <input type="password" name="password" placeholder="Enter Password" required>
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>