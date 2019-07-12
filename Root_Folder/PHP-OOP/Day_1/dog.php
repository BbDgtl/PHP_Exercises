<?php

/* 

  You can use STATIC properties (or methods) without
  insantiating the class.
  You can access these directly using the name of 
  the class.

*/

class Dog
{
  private $color;
  private $name;
  private $breed;
  // public static $legs = 4;

  public static function getNumberLegs()
  {
    return 4;
  }
}

// ? Call to the static method
Dog::getNumberLegs();
