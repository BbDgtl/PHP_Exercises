<?php

class CustomException extends Exception
{
  // ! Due to INHERITANCE, you don't need to call a construct function here.
  // ! It will take the constructor of the parent (Exception).
  // TODO Override the exception
  public function __construct($message, $code = 0)
  {
    // Custom code
    $this->date = date("Y-m-d");
    // Parent construct
    parent::__construct($message, $code);
  }

  public function customFunction()
  {
    echo "Custom function for this custom exception.";
  }
}
