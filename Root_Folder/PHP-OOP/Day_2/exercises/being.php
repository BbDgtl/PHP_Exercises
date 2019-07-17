<?php

class Being
{
  protected $_name;
  protected $_color;
  protected $_sex;

  // ? Constructor
  public function __construct($name, $sex, $color)
  {
    $this->_name = $name;
    $this->_color = $color;
    $this->_sex = $sex;
  }
}
