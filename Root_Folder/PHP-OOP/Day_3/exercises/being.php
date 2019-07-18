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
  public function getName()
  {
    return $this->_name;
  }
  public function getColor()
  {
    return $this->_color;
  }
  public function getSex()
  {
    return $this->_sex;
  }
  public abstract function talk();
}
