<?php

// $user_data = array();

// If submit button is clicked...
if (isset($_POST['submit'])) {
  // Check if the inputs contain data...
  if (empty($_POST['name']) || empty($_POST['email'])) {
    echo "You must fill in both inputs.";
  } else {
    require_once 'User.php';
    $newUser = new User($_POST['name'], $_POST['email']);
    // var_dump($user);
    // I need to get all the users
    $jsonFile = file_get_contents("users.json");
    $userArray = json_decode($jsonFile);
    // var_dump($userArray);

    // Loop through all users to check for a match with 
    // data from the form
    $found = false;
    foreach ($userArray as $user) {
      if (
        $user->name === $newUser->getName() && $user->email === $newUser->getEmail()
      ) {
        // User already exists
        $found = true;
        break;
      }
    }

    // If user exits :
    if ($found) {
      echo 'Welcome, ' . $newUser->getName();
    } else {
      // If user doesn't exist
      // 1 - Save into json
      $userArray[] = $newUser;
      // var_dump($userArray);
      // 2 - Say welcome new user
      $myJson = json_encode($userArray, JSON_PRETTY_PRINT);
      file_put_contents('users.json', $myJson);
      echo 'Welcome new user !';
    }
  }
}
var_dump($userArray);

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
      <input type="submit" name="submit" value="Log In">
    </label>
  </form>
</body>

</html>