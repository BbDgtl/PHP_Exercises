<?php

/*
	 EXERCISE 1 :

		Write a PHP script that checks if an email address contains the @ symbol.
		If yes, display: "Valid email, symbol found at X". Otherwise display "Invalid email".

		To do your tests, you can create a "can" variable of the type $ mail = "simon@gmail.com";
	*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

$can = 'bbdgtl@gmail.com';
// ! Another option: $posSymbol = strpos($can, '@');
if (strpos($can, '@'))
	echo 'Valid email, symbol found at ' . strpos($can, '@') . '.'; // ! $posSymbol
else
	echo 'Not a valid email address.';

/*
	 EXERCICE 2 :

		Write a PHP script that removes all slashes from this string: */

$movies = "/Star Wars/Fight Club/Intouchables/Night Call//";

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

echo trim(str_replace('/', ' ', $movies));
echo $movies;

/*
	 EXERCICE 3 :

		Write a PHP script that replaces the word "random" with the word "beautiful" in this sentence: */

$sentence = "This is a random sentence";

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

echo str_replace('random', 'beautiful', $sentence) . '<br>';

/*
	 EXERCICE 4 :

		Write a PHP script that displays the last word of a sentence using 2 functions:
			explode () and count ()
		
		You can use the previous sentence to test : $sentence = "This is a random sentence";
	 */

$array = explode(' ', $sentence);
// var_dump($array);
echo count($array) . '<br>';
echo $array[4];
