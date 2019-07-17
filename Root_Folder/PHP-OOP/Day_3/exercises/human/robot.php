<?php

class Robot extends Human implements IWork
{
  protected $_id;
  protected $_color;

  // ? Constructor
  public function __construct($id, $color)
  {
    $this->_id = $id;
    $this->_color = $color;
  }
  public function work()
  {
    return $this->_id . ' is doing some robot stuff!<br>';
  }
}
