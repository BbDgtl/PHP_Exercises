<?php

// TODO COPY a file
$file = 'files/movies.txt';
$copied_file = 'copy.txt';
copy($file, $copied_file);

// TODO DELETE a file
unlink($file);
