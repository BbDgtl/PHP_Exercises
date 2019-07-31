<?php

// TODO In a new file, instantiate the class to display 3 different cats and display the result with the getInfos() method previously created.

require_once 'Cat.php';

$cat1 = new Cat('Paige', 16, 'Grey/White', 'Male', 'Tabby');
$cat2 = new Cat('Le Chat Noir', 70, 'Black', 'Male', 'Alley Cat');
$cat3 = new Cat('Garfield', 50, 'Orange/Black', 'Male', 'Cartoon');

foreach ($cat1->getInfo() as $key => $value) {
  echo 'The first cats name was ' . $cat1->getName() . ',' . ' he was ' . $cat1->getAge() . ' years old, and was a ' . $cat1->getColor() . ' ' . $cat1->getBreed() . '. Sadly, he died a few years ago. He was a pain in my ass, but I miss him.<br><br>';
}

foreach ($cat2->getInfo() as $key => $value) {
  echo 'The second cats name is ' . $cat2->getName() . ',' . ' he is ' . $cat2->getAge() . ' years old, and is a ' . $cat2->getColor() . ' ' . $cat2->getBreed() . '. Very popular art-style.<br><br>';
}

foreach ($cat3->getInfo() as $key => $value) {
  echo 'The third cats name is ' . $cat3->getName() . ',' . ' he is ' . $cat3->getAge() . ' years old, and is an ' . $cat3->getColor() . ' ' . $cat1->getBreed() . '. I don\'t really know the comic or cartoon..';
}
