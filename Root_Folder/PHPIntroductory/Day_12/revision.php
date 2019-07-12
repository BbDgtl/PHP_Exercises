<?php

/*
	1. Display the type of each variable at the end of the script (using only one function)
	2. Display the type AND the value of each variable (using only one function)
*/
$array = array(
	$x = 5,
	$y = "1",
	$z = true,
	$n = 2.5
);

var_dump($array);

$array2 = array(
	$z = $x + $y,
	$k = $n * $y
);

foreach ($array2 as $key => $value) {
	var_dump($array2);
}

/*
	Show the date (in a nice format) for :
		- Today
		- Tomorrow
		- The same date than today one month late
*/

/*
	Create an array with the numbers from 1 to 100
	Display it in a HTML list (ul/li)
*/

/*
	You have a multi-dimensional array (see below)
	Display the phone of 'Michael' using the array;
*/

$array['Michael'] = array('Phone' => '4828342', 'Mail' => 'mich@gmail.com');
$array['John'] = array('Phone' => '423232323', 'Mail' => 'john@gmail.com');


/*
	Using the moviedb :
	1. Connect to the database and choose the moviedb
	2. Run a query to delete data
	For example : DELETE FROM movies WHERE title LIKE '%star wars%';
	3. Retrieve the number of rows affected by this query

*/
