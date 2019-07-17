<?php

// ***** - Step 2 : *****
// Some of your classes can do the same job.
// ? Actually they have the same 'role'.
// TODO Use an interface to abstract all of this.

abstract class Being
{
  protected $_name;
  protected $_color;
  protected $_sex;

  public function __construct($name, $sex, $color)
  {
    $this->_name = $name;
    $this->_color = $color;
    $this->_sex = $sex;
  }
  abstract function talk();
}
