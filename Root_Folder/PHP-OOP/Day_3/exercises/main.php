<?php
require_once 'dog.php';
require_once 'cat.php';
require_once 'human.php';
require_once 'robot.php';
function pickCreature() {
 
    $snoopy = new Dog('Snoopy', 'Male', 'White/Black');
    $garfield = new Cat('Garfield', 'Male', 'Orange');
    $liliana = new Human('Liliana', 'Woman', 'Pink');
    $creatures = [$snoopy, $garfield, $liliana];
    for ($i=0; $i < 10; $i++) { 
        $rand = rand(0, count($creatures) - 1);
        echo $creatures[$rand]->makeSound();
    }
}
function pickHumanoid() {
 
    $zoltbot = new Robot('4177', 'Silver');
    $diedon = new Human('Diedon', "Male", "Blue");
    $beep = new Robot("1234", "Gold");
    $boop = new Robot("4321", "Rusty");
    $joao = new Human("Joao", "Male", "Black");
    
    $humanoide = [$diedon, $joao, $zoltbot, $beep, $boop];
    for ($i=0; $i < 10; $i++) { 
        $rand = rand(0, count($humanoide) - 1);
        echo $humanoide[$rand];
    }
}
pickCreature();
echo "<br><hr><br>";
pickHumanoid();