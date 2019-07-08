<!-- 	3. Create 'login.php' page
	This page will display a form where a user can login using email/password.
	You have to check all mandatories input, otherwise display a message.
	When all input are fill, you have to check if the user exists in the database and check if its password/email matches. -->

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
    // if ($conn) {
    //   $msg = 'Connection Successful' . '<br>';
    //   echo $msg;
    // } else {
    //   $msg = 'Not Connected';
    //   echo $msg;
    // }

    $db_name = DB_NAME;
    $db_found = mysqli_select_db($conn, $db_name);

    if ($db_found) {

      $email = test_input($_GET['email']);
      $password = test_input($_GET['password']);

      $query = "SELECT * FROM users WHERE email = '$email' && password = '$password'";
      $results = mysqli_query($conn, $query);

      while ($db_record = mysqli_fetch_assoc($results)) {
        if ($db_record['email'] = $email && $db_record['password'] = $password) {
          $msg = 'User Validated';
          echo $msg;
          break;
        } else {
          $msg = 'Invalid User';
          echo $msg;
          break;
        }
        echo $db_record['views'] . '<br>';
        // var_dump($db_record);
      }
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
    <input type="email" name="email" placeholder="email address" required>
    <input type="password" name="password" placeholder="password" required>
    <input type="submit" name="submit" value="Log In">
  </form>
</body>

</html>