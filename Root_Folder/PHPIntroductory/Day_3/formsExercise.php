<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Forms Exercise</title>
</head>

<body>

  <!--
  - Exercise 1 :
  1. Create an HTML form with two textbox (first and last name) and a 'submit' button.
  When the 'submit' button is clicked, display the full name of the person.
  Do not worry about what's in the textbox once the button is clicked.

  2.Now, display the first and last name in the textbox, even after the button is clicked.

  3. Suppose our site has only 5 authorized users.
  These users are contained in a table.
  For example: $ users = array ("johnny hallyday", "simon bertrand", "tom hanks", "toto tata", "john");
  Check if the user, who enters his data, is one of the 5 users and display a suitable message.

  > Step 1: Create a PHP script that browses an array and checks whether a string is there (use a loop and a logical condition).
      
      > Step 2: Use step 1 to check if an user is allow
  -->
  <?php

  $firstName = '';
  $lastName = '';
  $msg = ' ';

  $users = array(
    "Johnny",
    "Simon",
    "Tom",
    "Tota",
    "John"
  );

  ?>

  <form action="" method="POST">
    <input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName ?>">
    <input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName ?>">
    <input type="submit" name="submit" value="Send">
  </form>

  <?php

  if (!empty($_GET)) {
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    echo $firstName . ' ' . $lastName . '<br>';

    foreach ($users as $string) {
      if ($firstName == $string) {
        $msg = 'Welcome, ' . $firstName;
        break;
      } else {
        $msg = 'You\'re not allowed to view this page!';
      }
    }
    echo $msg;
  };

  ?>

</body>

</html>