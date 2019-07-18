<?php

class Flower
{

  // * PROPERTIES
  private $_flowers_id;
  private $_flowers_name;
  private $_flowers_price;

  // * CONSTRUCTOR FUNCTION
  public function __construct($id, $name, $price)
  {
    $this->_flowers_id = $id;
    $this->_flowers_name = $name;
    $this->_flowers_price = $price;
  }

  // * GETTERS
  public function getId()
  {
    return $this->_flowers_id;
  }
  public function getName()
  {
    return $this->_flowers_name;
  }
  public function getPrice()
  {
    return $this->_flowers_price;
  }
}
