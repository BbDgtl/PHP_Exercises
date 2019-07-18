<?php

namespace Flowers\User;

class Flower
{
  private $flowers_id;
  private $flowers_name;
  private $flowers_price;

  public function __construct($id, $name, $price)
  {
    $this->flowers_id = $id;
    $this->flowers_name = $name;
    $this->flowers_price = $price;
  }
}
