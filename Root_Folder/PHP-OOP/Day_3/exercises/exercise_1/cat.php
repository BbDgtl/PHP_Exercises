<?php

require_once 'animal.php';

class Cat extends Animal
{
  public function talk()
  {
    return $this->_name . ': Meoooooooowwwww (give me some food, slave)! <br>';
  }
}
