<?php

require_once 'namespace.php';
require_once 'namespace2.php';

/*
First method (without use)
// With namespace :
$myClass = new MyProject\Tools\MyClass();
// Without namespace, we would have write this :
//$myClass = new MyClass();
$myClass->doStuff();
*/

/*
Second method (with use)
 */

use MyProject\Tools\MyClass as TestClass;
use MyProject\Blabla\MyClass as UtClass;

$myClass = new TestClass();
$myClass->doStuff();

$myClass = new UtClass();
$myClass->doStuff();
