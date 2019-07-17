<?php

require_once 'animal.php';

class Dog extends Animal{
  public function talk()
  {
    return $this->_name . ': Woof woof <br>';
  }
}
