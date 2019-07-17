<?php

require_once 'animal.php';

class Dog extends Animal
{
  public function talk()
  {
    return 'Woof woof';
  }
}
