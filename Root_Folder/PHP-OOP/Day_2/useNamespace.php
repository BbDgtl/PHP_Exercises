<?php

require_once 'namespace.php';

// ? With Namespace
$myClass = new MyProject\Utilities\MyClass();

// ! Without namespace, we would've written this:
// ! $myClass = new MyClass();
$myClass->doStuff();

use MyProject\Utilities\MyClass as TestClass;

$myClass = new TestClass();
$myClass->doStuff();
