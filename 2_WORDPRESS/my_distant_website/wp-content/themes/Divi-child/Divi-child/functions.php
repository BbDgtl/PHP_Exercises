<?php

/* Sample function in the parent theme */

function wf3_mySamplefunction()
{
  echo '<p>From the child function</p>';
}

function callTheDate()
{
  echo "Today is " . date("Y/m/d") . "<br>";
}
