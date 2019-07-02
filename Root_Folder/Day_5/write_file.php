<?php
/* Open the file in writing mode
   If it doesn't exist, it will create one. */
$file_handle = fopen('test_file.txt', 'w');
// $file_handle = fopen('test_file.txt', 'a');
$file_content = 'Helloooooo, how are you?';

// ** Fwrite - Write inside the file.
fwrite($file_handle, $file_content);

// ! Close the file!
fclose($file_handle);

echo '********** file created **********';
