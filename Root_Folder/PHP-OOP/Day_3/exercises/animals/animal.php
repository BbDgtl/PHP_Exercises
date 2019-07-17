<?php

// ***** - Step 1 : ***** \\
// Think about the nature of your classes. At least one of them will never be instantiate...
// TODO You need to turn them into abstract class.
// TODO Maybe change some methods to make it abstract methods.
// ? Tips : If you pay attention, many of our classes can 'talk' or 'make a sound'

require_once './being.php';

abstract class Animal extends Being
{
	protected $_numLegs;

	// ? Constructor
	public function __construct($name, $sex, $color, $legs = 4)
	{
		parent::__construct($name, $sex, $color);
		$this->_numLegs = $legs;
	}
}
