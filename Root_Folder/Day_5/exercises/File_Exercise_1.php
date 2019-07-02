<?php

/*
		1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.

		2. View the contents of the transform_to_table.txt file in an HTML table.
	*/

// TODO: 	1. Create a PHP script that will display the contents of a message.txt file, located in the same folder as this script.
if (file_exists('message.txt')) {
	$file_handle = readfile('message.txt', 'r');
	echo $file_handle;
}

// TODO: 2. View the contents of the transform_to_table.txt file in an HTML table.
echo '<table border="1">';

if (file_exists('transform_to_table.txt')) {
	$file_handle = fopen('transform_to_table.txt', 'r');
	echo $file_handle . '<br>';

	while (!feof($file_handle)) {
		$line_of_text = fgets($file_handle);
		echo '</td><td>', $line_of_text . '</td></tr>';
		// echo $line_of_text . '<br>';
	}

	fclose($file_handle);
} else {
	echo 'File doesn\'t exist';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Exercise 2: Table</title>
</head>

<body>
	<h2>Table is Below</h2>
</body>

</html>