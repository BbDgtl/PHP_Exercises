<?php

$fruits = array(
  'coconuts',
  'apples',
  'lemons'
);

//Array before sorting
var_dump($fruits);

// ** SORT the ARRAY
sort($fruits);

// Array after sorting
var_dump($fruits);

// ** SORT on an ASSOCIATIVE ARRAY
$gender = array(
  'Michel' => 'Male',
  'Sarah' => 'Female',
  'Ricardo' => 'Male'
);

// KEY Sort
ksort($gender);
var_dump($gender);
krsort($gender);
var_dump($gender);

// VALUE Sort
asort($gender);
var_dump($gender);

// ** COUNT the # of elements in an ARRAY
echo count($gender);
$message = 'My message';
