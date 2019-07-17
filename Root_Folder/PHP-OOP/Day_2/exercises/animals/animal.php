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

require_once '../being.php';

class Animal extends Being
{
	protected $_numLegs;

	// ? Constructor
	public function __construct($name, $sex, $color, $legs = 4)
	{
		parent::__construct($name, $sex, $color);
		$this->_numLegs = $legs;
	}
}
