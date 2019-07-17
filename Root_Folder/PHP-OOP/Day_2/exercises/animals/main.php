<?php

require_once 'animal.php';
require_once 'dog.php';
require_once 'cat.php';

// $myAnimal = new Animal('AnimalTest', 'male', 'black');
// var_dump($myAnimal);

$snoopy = new Dog('Snoopy', 'male', 'white and black');
// var_dump($snoopy);
echo $snoopy->bark();
echo '<br><br>';

$paige = new Cat('Paige', 'male', 'grey');
// var_dump($paige);
echo $paige->meow();
