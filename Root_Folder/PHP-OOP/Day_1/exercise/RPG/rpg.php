<?php

require_once 'characters.php';
require_once 'equipment.php';

$legolas = new Character('elf', 'Legolas', 'sword');
var_dump($legolas);

$blarg = new Character('orc', 'Blarg', 'axe');
var_dump($blarg);

$sword = new Equipment('sword');
var_dump($sword);

$chainmail = new Equipment('chainmail');
var_dump($chainmail);

$legolas->addEq($sword);
echo $legolas->displayEq();
