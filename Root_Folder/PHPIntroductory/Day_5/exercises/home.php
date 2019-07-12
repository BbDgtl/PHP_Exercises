<?php

// TODO 3. In 'home.php', you'll have to check :
// TODO - If this user actually exists.
// TODO - If he exists, check that both email/password are matching.
// TODO - Display a message for both validations.

$msg = '';

if (isset($_POST['submitBtn'])) {
  if (file_exists('users.txt')) {
    $file_handle = fopen('users.txt', 'r');

    while (!feof($file_handle)) {
      $line_of_text = fgets($file_handle);
      $lineArray = explode(';', $line_of_text);
      $mail = trim(substr($lineArray[0], strpos($lineArray[0], '=') + 1));
      $password = trim(substr($lineArray[1], strpos($lineArray[1], '=') + 1));
      if ((trim($_POST['mail']) == $mail) && (trim($_POST['password']) == $password)) {
        $msg = 'User validation is correct.';
        break;
      } else {
        $msg = 'User does NOT exist.';
        break;
      }
    }
    echo $msg;
  }
  fclose($file_handle);
} else {
  echo 'File does not exist!';
}
