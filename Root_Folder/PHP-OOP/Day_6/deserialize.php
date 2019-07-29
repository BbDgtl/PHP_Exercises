<!-- 

  JSON : 
  It's a data/file type which allows the user to store data.

  Most of the time, the data represents an OBJECT. It is in
  an easy to read format and the syntax is very simple. It's 
  lightweight and allows fast data transfer. 

  Syntax : 
    - { ... } : Curly Brackets define an object.
    - [ ... ] : Brackets represent/define an atrray.
    - JSON understands STRING, BOOLEAN, and INTEGER.

-->

<!-- 

  SERIALIZATION
  Serialization is a process to convert an object into a string.

  DESERIALIZATION
  Deserialization is the process to retrieve a string and
  convert the string into an object.--

-->

<?php

// TODO: Step 1: Get the content of the JSON file.
$jsonFile = file_get_contents("movie.json");

// TODO: Step 2: Deserializae JSON
$myObject = json_decode($jsonFile);
var_dump($myObject);

// TODO: Step 3: Access objects property
// echo $myObject->title;

?>