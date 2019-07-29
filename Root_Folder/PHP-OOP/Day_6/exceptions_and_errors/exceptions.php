<?php

//  ***** EXCEPTIONS ***** \\

/* 
Exceptions must be handled by the developer. Exceptions are
handled in an Object Oriented (OOP) way.

When an exception is thrown, an 'exception' object is created.
An Exception Object contains some details. It has some methods:
getMessage(), getcode(), toString()...

Syntax: 
  throw new Exception("This is an exception.", 2);

'throw' allows the user to trigger an exception 
'new' creates an instance of an exception

Handle exceptions with Try...Catch
*/

/*
try {
  echo "Everything is fine!<br>";
  $msg = "This is an exception example.";
  throw new Exception($msg);
  echo "Everything is <em>STILL</em> fine!<br>";
} catch (Exception $e) {
  // var_dump($e);
  // echo $e->getMessage();
  echo "Caught the exception.";
}
*/

function calcul($x, $y)
{
  return $x * $y;
}
try {
  echo calcul(2);
} catch (ArgumentCountError $e) {
  echo 'BOOOOOM!';
}

echo '<hr>';

// require_once "CustomException.php";
// throw new CustomException("My Custom Exception class!");

echo '<hr>';

/*
How to handle multiple exceptions.

Example: 
  There is a script that waits for a number.
  Divide 25 by this number.
  Script only accepts positive numbers. 
*/

class DivideByZeroException extends Exception
{ };

class DivideByNegativeException extends Exception
{ };

function test($x)
{
  if ($x == 0)
    throw new DivideByZeroException();
  else if ($x < 0)
    throw new DivideByNegativeException();

  return 25 / $x;
}

// $denominator = -14;

try {
  echo test(-25);
  // if ($denominator == 0) {
  //   new DivideByZeroException();
  // } else if ($denominator < 0) {
  //   new DivideByNegativeException();
  // }

  // echo 25 / $denominator;
} catch (DivideByZeroException $e) {
  echo "DIVIDE BY ZERO EXCEPTION!";
} catch (DivideByNegativeException $e) {
  echo "DIVIDE BY NEGATIVE NUMBER EXCEPTION!";
} catch (Exception $e) {
  echo "UNKNOWN EXCEPTION!";
}
