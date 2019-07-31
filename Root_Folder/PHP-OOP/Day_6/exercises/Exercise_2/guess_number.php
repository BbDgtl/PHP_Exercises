<?php
// Exceptions
class NotIntegerException extends Exception
{
  public function __construct()
  {
    parent::__construct("You should entered an integer");
  }
}

class NotInRangeException extends Exception
{
  public function __construct($nb)
  {
    parent::__construct("You should entered a number between 1 and " . $nb);
  }
}

// Functions
function guessNumber($number)
{
  $myNumber = readline('Enter a number between 1 and ' . $number . ' : ');

  // Validation : Number should be integer
  if ((int) $myNumber === 0) {
    //Throw exception because it's not an integer
    throw new NotIntegerException();
  }

  // Validation : Should be between 1 and $number
  if ($myNumber < 1 || $myNumber > $number) {
    // Throw exception because it's not in range
    throw new NotInRangeException($number);
  }

  return $myNumber;
}

// Script execution
try {
  echo "You entered : " . guessNumber(rand(1, 100));
} catch (Exception $e) {
  echo $e->getMessage();
}
