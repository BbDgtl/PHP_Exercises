<?php

require_once 'human.php';
require_once 'robot.php';

$liliana = new Human('Liliana', 'Woman', 'pink');
var_dump($liliana);
echo $liliana->work();
echo $liliana->talk();

echo '<br><br>';

$zoltbot = new Robot('4177', 'silver');
echo $zoltbot->work();
var_dump($zoltbot);
