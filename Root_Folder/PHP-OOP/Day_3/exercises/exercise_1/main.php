<?php
require_once 'dog.php';
require_once 'cat.php';
require_once 'human.php';
require_once 'robot.php';
function pickCreature()
{

    $snoopy = new Dog('Snoopy', 'male', 'white/black');
    $garfield = new Cat('Garfield', 'male', 'orange');
    $liliana = new Human('Liliana', 'female', 'pink');
    $chuck = new Human('Chuck Norris', 'male', 'blond');
    $leroy = new Human('Leeeeeeeerooooooooy Jeeeeeeeeeeeennnnnkinnnnnnssssss', 'male', 'bald');
    $rocky = new Dog('Rocky', 'male', 'brown');
    $paige = new Cat('Mittens', 'female', 'white');
    $paige = new Dog('Brutus', 'male', 'black and white');
    $paige = new Human('Angelina Jolie', 'female', 'black');
    $paige = new Human('Selina Kyle', 'female', 'black');
    $creatures = [$snoopy, $garfield, $liliana, $chuck, $leroy, $rocky, $paige];
    for ($i = 0; $i < 10; $i++) {
        $rand = rand(0, count($creatures) - 1);
    }
    echo $creatures[$rand]->talk();
}
function pickHumanoid()
{

    $zoltbot = new Robot('4177', "silver");
    $michael = new Human('Michael Jackson', "male", "black");
    $bender = new Robot("Bender", "gray");
    $c3p0 = new Robot("C3P0", "gold");
    $r2d2 = new Robot("R2D2", "blue/white");
    $evangelion = new Robot("Evangelion", "white/silver");
    $leia = new Human("Leia Organa", "female", "brown");
    $luke = new Human("Luke Skywalker", "male", "blond");
    $maleficent = new Human("Maleficent", "female", "black");
    $drizzt = new Human("Drizzt Do'Urden", "male", "blond");

    $humanoid = [$zoltbot, $michael, $bender, $c3p0, $r2d2, $evangelion, $leia, $luke, $maleficent, $drizzt];
    for ($i = 0; $i < 10; $i++) {
        $rand = rand(0, count($humanoid) - 1);
    }
    echo $humanoid[$rand];
}
pickCreature();
echo "<hr>";
pickHumanoid();
