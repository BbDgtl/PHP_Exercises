<h1>PHP LOOPS Exercise</h1>
<?php

// ** Exercise 1 
// TODO Based on the character exercise, display all his caracteristics using a loop.
$charIMG = '<img src ="./imgs/drizzt.png">';
$lastName = 'Do\'Urden';
$firstName = 'Drizzt';
$characteristics = array(
  'alignment' => 'Chaotic Good',
  'age' => 140,
  'attack points' => 31,
  'defense points' => 50
);

?> <ul>
  <?php
  foreach ($characteristics as $value) { ?>
    <?php echo "<li> $value </li>"; ?>
  <?php }; ?>
</ul>

<?php
// ** Exercise 2
// TODO Michel went to the supermarket and bought some food.
// TODO He used an array to save his spending.
// TODO Write a script that will :
// TODO 1. Sort by value
// TODO 2. Sort by key in descending order
// TODO 3. Use a loop to calculate the total of his spendings.
$array = array(
  "Lettuce" => "1.03",
  "Tomato" => "2.3",
  "Onion" => "1.85",
  "Red Cabbage" => "0.85"
);

sort($array);
var_dump($array);
krsort($array);
var_dump($array);

$results = 0;
foreach ($array as $type => $cost) {
  $results += $cost;
}

echo 'Michel spent ' . $results;

// ** Exercise 3
// TODO Using a loop, fill in a array with every number from 0 to 20.
// TODO The element 0 will therefore contain 0, the element 1 will contain 1 etc.
// TODO Do it by using a for AND a while loop
$exampleArray = array();

for ($i = 0; $i <= 20; $i++) {
  $exampleArray[] = $i;
}
var_dump($exampleArray);

// ** Exercise 4
// TODO Use a loop to create a array.
// TODO This array will contain the multiplication table of 2.
// TODO From 1 to 20.

$createdArray = array();
for ($i = 0; $i <= 10; $i++) {
  $createdArray[] = $i * 2;
}
var_dump($createdArray);

// ** Exercise 5
// TODO Create a random numerical array.
// TODO Find the smallest value.
// TODO Find the greatest value.
$numbers = array();
$max = 10;
$done = false;
while (!$done) {
  $numbers = range(0, $max);
  shuffle($numbers);
  $done = true;
  foreach ($numbers as $key => $val) {
    if ($key == $val) {
      $done = false;
      break;
    }
  }
}

var_dump($numbers);
sort($numbers);

$ranNum = array();
$ranNum = rand(0, 10);
var_dump($ranNum);
