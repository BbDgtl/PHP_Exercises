<?php

// ** FOR loops **
// Displays all numbers from 0 to 10
for ($i = 0; $i <= 10; $i++) {
  echo $i . '<br>';
}

echo '<hr>';
// TODO LOOP through an ARRAY
$fruits = array(
  'apple',
  'coconut',
  'lemon'
);

$size = count($fruits);
for ($i = 0; $i < $size; $i++) {
  echo $fruits[$i] . '<br>';
}

// ** WHILE loop **
// Displays all numbers from 0 to 10
echo '<hr>';
$i = 0;
while ($i <= 10) {
  echo $i . '<br>';
  $i++;
};

echo '<hr>';

$i = 0;
while (true) {
  echo $i . '<br>';
  if ($i === 10)
    break;
  $i++;
};

// ** DO WHILE loop **
echo '<hr>';
// ! Will run a loop at least 1x, even when false
$test = false;
do {
  // instructions
  echo 'Hello' . '<br>';
} while ($test);

echo '<hr>';
$i = 11;
do {
  echo $i . '<br>';
} while ($i <= 10);

// ** ForEach loop **
echo '<hr>';
// ! Meant for looping through arrays
foreach ($fruits as $value) {
  # code ...
  echo 'Value : ' . $value . '<br>';
}

echo '<hr>';
$countries = array(
  'Luxembourg' => 600000,
  'France' => 1700000
);

foreach ($countries as $country => $people) {
  echo $country . ' / ' . $people . '<br>';
  $countries[$country] += 10000;
}
