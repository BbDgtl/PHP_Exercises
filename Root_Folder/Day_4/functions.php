<?php

// ** Declare a FUNCTION **
function helloWorld()
{
  echo 'Hello';
}

// ** FUNCTIONS with ARGUMENTS
function greetings($message = 'Hey Bro!')
{
  echo 'Your message : ' . $message . '<br>';
}

// ** Return the value
function multiply($x, $y = 2)
{
  return ($x * $y);
  echo 'HELLOOOOOOO!'; // ! <- This will never execute.
}

// ** CALL the FUNCTION **
helloWorld();
echo '<br>';
greetings('Hello !');
greetings();
echo multiply(5, 10);

// ** Return the value
$x = 5;
function multiply2($y)
{
  global $x;
  return ($x * $y);
}

echo multiply2(10);

// ** SCOPE
function displayMessage($message, &$x)
{
  $x += 10;
  return $message . ' : ' . $x;
}

$myNumber = 5;
echo '<br>' . 'BEFORE -- My number outside the function : ' . $myNumber . '<br>';
echo displayMessage('Hello, my number inside the function', $myNumber);
echo '<br>' . 'AFTER -- My number outside the function : ' . $myNumber . '<br>';
