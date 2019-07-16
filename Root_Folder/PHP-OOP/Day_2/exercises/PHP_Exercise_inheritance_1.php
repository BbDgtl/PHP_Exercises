<?php

/*
- Part 1 : 
An animal is represented by a number of legs, a color, a sex and a name.
A dog is able to bark.
A cat is able to meow.

	-> Create the matching classes

- Part 2 :

A human being is a magical creature that does not belong to the animal kingdom but is represented by a name, a hair color and a sex.

A robot is a mechanical creature that is defined by an identifier and a color.

	-> Create the matching classes

- Part 3 :

Human and robot can work, create a 'work()' method (just display some stuff).

- Part 4 : 

Human can talk.

	-> Change your code to match

*/

// ***** ///// - Part 1 : \\\\\ ***** \\ 
// TODO An animal is represented by a number of legs, a color, a sex and a name.
// TODO A dog is able to bark.
// TODO A cat is able to meow.
// TODO	-> Create the matching classes

// ** The PARENT
class Animal
{
	protected $_numLegs = 4;
	protected $_color;
	protected $_sex;
	protected $_name;

	// ? Constructor
	public function __construct()
	{
		$this->_color = 'red';
		$this->_sex = 'female';
		$this->_name = 'Mama';
	}
	public function getLegs()
	{
		return $this->_numLegs;
	}
}

// ** The CHILDREN
class Dog extends Animal
{
	private $_bark;
	public function __construct()
	{
		$this->_bark = 'Woof!';
		$this->_color = 'red';
		$this->_sex = 'female';
		$this->_name = 'Frida';
	}
}

class Cat extends Animal
{
	private $_meow;
	public function __construct()
	{
		$this->_meow = 'Meow!';
		$this->_color = 'black';
		$this->_sex = 'male';
		$this->_name = 'Voodoo';
	}
}

$myAnimal = new Animal('brown', 'male', 'Fido');
var_dump($myAnimal);

$myDog = new Dog();
$myDog->getLegs();
var_dump($myDog);

$myCat = new Cat();
$myCat->getLegs();
var_dump($myCat);


// ***** ///// - Part 2 : \\\\\ ***** \\
// TODO A human being is a magical creature that does not belong to the animal kingdom but is represented by a name, a hair color and a sex.
// TODO A robot is a mechanical creature that is defined by an identifier and a color.
// TODO	-> Create the matching classes

class Human
{
	private $_name;
	private $_hairColor;
	private $_sex;
	protected $_numLegs = 2;
}

class Robot extends Human
{
	private $_id;
	private $_color;
}
