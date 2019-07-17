<?php

require_once './animals/animal.php';
require_once './animals/dog.php';
require_once './animals/cat.php';
require_once './human/human.php';
require_once './human/robot.php';

$snoopy = new Dog('Snoopy', 'male', 'white and black');
// var_dump($snoopy);
echo $snoopy->talk();
echo '<br><br>';

$paige = new Cat('Paige', 'male', 'grey');
// var_dump($paige);
echo $paige->talk();

$liliana = new Human('Liliana', 'Woman', 'pink');
// var_dump($liliana);
echo $liliana->work();
echo $liliana->talk();

echo '<br><br>';

$zoltbot = new Robot('4177', 'silver');
echo $zoltbot->work();
// var_dump($zoltbot);

echo '<hr>';

// ***** - Step 3 : *****

// In a main program :

$creaturesArray = array();

$creatures = array(
  'cat',
  'dog',
  'human'
);
// var_dump($creatures);

$sex = array(
  'male',
  'female'
);

$color = array(
  'black',
  'brown',
  'red',
  'blue',
  'green'
);


// TODO 3. Create a script where :
// TODO  - You loop ten times
// TODO  - Each time, you randomly pick one animal (or human) in the first array
// TODO  - The randomly pick element should make a sound
for ($i = 0; $i <= 10; $i++) {
  $ranNum = rand(0, 2);
  $ranNumSex = rand(0, 1);
  $ranNumColor = rand(0, 4);
  $name = $creatures[$ranNum];
  $creaturesArray[] = new $name($creatures[$ranNum] . ' ' . $i, $sex[$ranNumSex], $color[$ranNumColor]);
}

var_dump($creaturesArray);
echo $name . '<br>';

// TODO 2. Create an array of human/robots (randomly generated)
$creatures2 = array(
  'human',
  'robot'
);
  // var_dump($creatures2);
  
  // TODO 4. Create a script where :
  // TODO  - You loop ten times
  // TODO  - Each time, you randomly pick a human (or a robot) in the second array
  // for ($i = 0; $i <= 10; $i++) {
  //   $robotHuman = rand(0, 1);
  //   $name = $creatures[$ranNum];
  //   $creaturesArray[] = new $name($creatures[$ranNum] . ' ' . $i, $sex[$ranNumSex], $color[$ranNumColor]);
// }

// TODO  - The randomly pick element should work.
// TODO  Each object should be displayed before working.
// ?  Example : 'The woman Madonna, who is blond, is going to work'.
