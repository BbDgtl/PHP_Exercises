<?php

/*

// * SERIALIZE

// TODO: Step 1: Create an object.
$myObj = new stdClass();
$myObj->title = "Jurassic Park";
$myObj->release_year = "2018";
var_dump($myObj);

// TODO: Step 2: Serialize the object.
$myJson = json_encode($myObj, JSON_PRETTY_PRINT);
var_dump($myJson);

*/

require_once 'Movie.php';

$jurassic = new Movie("Jurassic Park", "2018");
$json = json_encode($jurassic, JSON_PRETTY_PRINT);
var_dump($json);
