<!-- - recap-signin.php: Page showing the summary of the information entered. -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign In Recap</title>
</head>

<body>

  <!-- 	2. Add validators on the different fields of the form:
				- The name and the first name are mandatory.
				- The e-mail must be between 8 and 50 characters long and should contains @
				- The fields "Password" and "Confirmation" must be identical and have at least 8 characters
 -->

  <?php

  // ! CORRECTION:

  if (isset($_POST['submit'])) {
    // ** VALIDATIONS:'
    if (empty($_POST['firstName']) || empty($_POST['lastName']))
      echo "First & last names are mandatory.";
    elseif (!(strlen($_POST['email']) > 8 && strlen($_POST['email']) < 50))
      echo "Your email should be between 8 and 50 characters long.";
    elseif (!strpos($_POST['email'], '@'))
      echo "Your email must contain an @ symbol.";
    elseif (!strlen($_POST['password']) != 8)
      echo "Your password must be at least 8 characters long.";
    elseif ($_POST['password'] == $_POST['checkPassword'])
      echo "Your passwords are NOT identical.";

    echo "Your name: " . $_POST['firstName'] . ' ' . $_POST['lastName'];
    echo "Your email: " . $_POST['email'];

    if (isset($_POST['checkbox'])) {
      echo "You clicked the checkbox";
    } else {
      echo "You didn't click the checkbox.";
    }
  }

  ?>

</body>

</html>