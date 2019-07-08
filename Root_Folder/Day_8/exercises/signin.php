<!-- 2. Create 'signin.php' page
	This page will display a form where a user can enter its data to create an account
	You have to check all mandatories input, otherwise display a message.
	When all input are fill, you have to insert the user in the database and display a nice message. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Signin Page</title>
</head>

<body>

  <?php

  if (isset($_GET['submit'])) {
    $msg = ' ';
    $first = $last = $mail = '';

    require_once 'database.php';

    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    if ($conn) {
      $msg = 'Connection Successful' . '<br>';
      echo $msg;
    } else {
      $msg = 'Not Connected';
      echo $msg;
    }

    $db_name = DB_NAME;
    $db_found = mysqli_select_db($conn, $db_name);

    if ($db_found) {

      $first = test_input($_GET['first_name']);
      $last = test_input($_GET['last_name']);
      $email = test_input($_GET['email']);
      $password = test_input($_GET['password']);

      $query = "INSERT INTO users(first_name, last_name, email, password) VALUES('$first', '$last', '$email', '$password')";
      $results = mysqli_query($conn, $query);

      $msg = 'User added!';
      echo $msg;
    } else {
      $msg = 'DB not found';
      echo $msg;
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  mysqli_close($conn);
  ?>

  <form action="" method="GET">
    <input type="text" name="first_name" placeholder="first name" required>
    <input type="text" name="last_name" placeholder="last name" required>
    <input type="email" name="email" placeholder="email address" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" name="submit" value="Create Account">
  </form>
</body>

</html>