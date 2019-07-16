<?php

/* It's possible to extends the classes. 
For example I have a Car class 
extending Vehicle Class */
// The parent
class Vehicle
{
  protected $color;

  // Construct
  public function __construct()
  {
    $this->color = "red";
  }

  public function getColor()
  {
    return $this->color;
  }
}

// The child
class Car extends Vehicle
{
  private $wheelsBrand;

  // Construct
  public function __construct()
  {
    $this->color = "blue";
    $this->wheelsBrand = "Michelin";
  }

  public function getColor()
  {
    return $this->color;
  }
}

$myVehicle = new Vehicle();
var_dump($myVehicle);

$myCar = new Car();
var_dump($myCar);
$myCar->getColor();