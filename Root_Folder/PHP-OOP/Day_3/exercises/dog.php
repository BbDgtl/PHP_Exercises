<?php

require_once 'animal.php';

class Dog extends Animal
{
  public function talk()
  {
    return $this->_name . ': Woof Woof! Bow Wow! Wau Wau! (I\'m a tri-lingual doggie)! <br>';
  }
}
