<?php

// ***** Errors vs Exceptions ***** \\
/* 
- Errors : 
  An error is an unexpected result that can't be handled by the program itself.
  Errors are fixed by fixing the code directly.

  For example: forgetting a semicolon, an infinite loop, etc.

- Exceptions :
  an exception is an unexpected result that can be handled by the script.

  For example: trying to open a file that does not exist. This exception can be
  handled by either creating the file, or you can give the user an option to 
  search for the file.
*/

// ????? HOW TO HANDLE ERRORS ????? \\

function custom_error($error_no, $error_msg)
{
  echo "Something went wrong!<br>";
  echo "Error code: " . $error_no . '<br>';
  echo "Error message: " . $error_msg . '<br>';
}

set_error_handler("custom_error");

$number = 0;
echo 15 / $number;
