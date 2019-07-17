<?php

require_once 'animal.php';

class Dog extends Animal
{
  public function bark()
  {
    return 'Woof woof';
  }
}
