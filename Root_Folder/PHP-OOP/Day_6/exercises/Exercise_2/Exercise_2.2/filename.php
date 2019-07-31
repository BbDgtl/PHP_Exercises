<?php

// ***** ///// Exercise 2 : \\\\\ ***** \\

// ***** Part 1
// TODO : A program asks the user for a file name.
// TODO : For now, the program does nothing else.

// ***** Part 2
// TODO : Now, when the user enters the name of the file, the program will read this file and then display the contents of it.
// TODO : You must handle the case where the file does not exist.

// ***** Part 3
// TODO : In case the file does not exist, give the user an additional chance to enter a new file name.
// TODO : The user has 3 chances for enter a valid filename.

$fileName = readline('Please submit a file name: ');

class NoFileExists extends Exception
{
  public function __construct()
  {
    parent::__construct("No such file exists.");
  }
}

if (file_exists($fileName)) {

  $fn = fopen($fileName, "r");

  while (!feof($fn)) {
    $result = fgets($fn);
    echo $result;
  }

  fclose($fn);
} else {
  throw new NoFileExists();
  for ($i = 2; $i > 0; $i--) {
    echo "The file, " . "'" . $fileName . "'" . " does not exist. You have $i more tries. ";
    $fileName = readline('Please submit a file name: ');
  }
  echo "Out of tries, so sad. Goodbye forever, friend.";
}
