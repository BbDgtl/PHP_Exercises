<?php

// ** If a variable is SET, it means it has VALUE
// There is a difference between DECLARE / INITIALIZE variables
// If x is set to 0, isset will return true because it has been initialized, but empty will still return empty
$x;
$y = 5;

echo isset($y);
var_dump(isset($x));
var_dump(isset($y));

// ** Checks if VARIABLE is EMPTY 
if (empty($x))
  echo 'x is empty' . '<br>';
else
  echo 'x is !empty' . '<br>';

// ** Count the # of characters in a string
$message = 'my message';
echo strlen($message);
