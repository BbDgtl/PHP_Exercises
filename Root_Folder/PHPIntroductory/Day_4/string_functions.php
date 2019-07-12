<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>String Functions</title>
</head>

<body>

  <?php

  // ** Manipulate strings **

  /* Change the case of a string
     Make it all uppercase */
  $string = 'Here, take a beer!' . '<br>';
  echo strtoupper($string);

  /* Change the case of a string
     Make it all lowercase */
  echo strtolower($string);

  /* First letter capitalized.
     uc = uppercase */
  echo ucfirst($string);

  /* First letter capitalized
     for each word */
  echo ucwords($string);

  /* Find the position of a character 
     in a string */
  echo strpos($string, ',') . '<br>';
  // ! It will not display anything if it doesn't find anything without explicitly asking it to do so.
  if (strpos($string, '@'))
    echo 'Found it!';
  else {
    echo 'No @ symbol!' . '<br>';
  }

  /* Allow the user to retrieve one part of a string. (sub-string) */
  $string = 'Here, take another beer!' . '<br>';
  echo substr($string, 19) . '<br>';
  echo substr($string, 11, 7) . '<br>';
  echo substr($string, -5) . '<br>';

  /* Replace a string into a string. */
  echo str_replace('another beer', 'a coca-cola', $string) . '<br>';

  /* Delete a character at the beginning
     and at the end of a string. */
  echo trim($string, '!');

  /* Delete on the left side 
     with ltrim($string) */

  /* Delete on the right side 
     with rtrim($string) */

  /* Convert a string into an array
     using a delimiter */
  $string = 'Hello, Simon. I hope you\'re okay!';
  $array = explode(' ', $string);

  var_dump($array);

  /* Convert an array into a string
     using a delimiter */
  $string2 = implode(' ', $array);
  echo $string2;

  ?>

</body>

</html>