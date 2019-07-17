<?php

// ***** ///// - Part 2 : \\\\\ ***** \\
// TODO A human being is a magical creature that does not belong to the animal kingdom but is represented by a name, a hair color and a sex.
// TODO A robot is a mechanical creature that is defined by an identifier and a color.
// TODO	-> Create the matching classes

require_once 'being.php';
include_once "workInterface.php";
class Human extends Creature implements IWork{
  public function __toString(){
    return $this->_name . " who is " . $this->_sex . ", is going to work.<br>";
  }
  public function work()
  {
    return $this->_name . ' is working.<br>';
  }
  public function makeSound()
  {
    return 'Hello, my name is ' . $this->_name
      . ', I am a ' . $this->_sex . '<br>';
  }
}

