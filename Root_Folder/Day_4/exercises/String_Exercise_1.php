<?php

/*

	1. Create an HTML form with a text field in a PHP script. The form will point to the same page.

	2. Create a `submit` button that sends the string input, and displays in a <div> this string in uppercase.

	3. Create a second `submit` button, which displays the string entered in lowercase

	4. Similarly, a submit to add a capital letter to each word
	
	5. And again a submit to add a capital letter, but only at the beginning of the chain.

	6. Now create a submit that will display the string only up to the '.' (point) not included
	  - Use the `explode` function for that.
	  - Now use the `strpos` and` substr` function to produce the same result.

	Bonus: Finally, create a submit that displays the first two words of the string entered, separated by a hyphen ("-")
  	If there are not enough words, display the message "Enter at least two words"
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>String exercise 1</title>
</head>

<body>

	<form action="" method="POST">
		<input type="text" name="message" placeholder="Type something here">
		<input type="submit" name="uc" value="Uppercase">
		<input type="submit" name="lc" value="Lowercase">
		<input type="submit" name="cap" value="Capitalize the first letter">
		<input type="submit" name="cap1" value="Capitalize only the first letter">
		<input type="submit" name="explode" value="Display the string up to a certain point">
		<input type="submit" name="bonus" value="BONUS!">
	</form>
	<h1>

		<?php
		$message = '';
		if (!empty($_POST)) {
			$message = $_POST['message'];
			if (isset($_POST['uc'])) {
				echo strtoupper($message);
			} else if (isset($_POST['lc'])) {
				echo strtolower($message);
			} else if (isset($_POST['cap'])) {
				echo ucfirst($message);
			} else if (isset($_POST['cap1'])) {
				echo ucwords($message);
			} else if (isset($_POST['explode'])) {
				$array = explode(' ', $message);
				echo strpos($message, '.') . '<br>';
				echo substr($message, 0, 14);
			} else if (isset($_POST['bonus'])) {
				$array = explode(' ', $message);
				if (sizeof($array) < 2) {
					echo 'Enter at least two words!';
				} else {
					echo $array[0] . '-' . $array[1];
				}
			}
		}
		?>

	</h1>
</body>

</html>