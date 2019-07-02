<?php
/*
// TODO Read a file (but not in a nice, formatted style)
$file_content = readfile("movies.txt");
echo $file_content . '<br>';

// Different function for the same idea.
$file_content = file_get_contents("movies.txt");
echo $file_content;
*/

// ** Check if the file exists
if (file_exists('files/movies.txt')) {;

  // ** Fopen - Open a file
  $file_handle = fopen('files/movies.txt', 'r');
  echo $file_handle . '<br>';

  // echo fgets($file_handle);
  // echo fgets($file_handle);
  // echo fgets($file_handle);

  // ** Loop until you reach the end of the file.
  while (!feof($file_handle)) {
    $line_of_text = fgets($file_handle);
    echo $line_of_text . '<br>';
  }

  // ** Fclose - Close the open file 
  fclose($file_handle); // ! Never forget to close your open file! (affects performance)
} else
  echo 'File doesn\'t exist!';
