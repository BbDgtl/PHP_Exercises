<?php

// ** RECURSIVE FUNCTIONS

function displayNumber($number)
{
  if ($number != 0)
    echo $number . '<br>';
  displayNumber($number - 1);
}

// TODO CALL the FUNCTION
displayNumber(10);
