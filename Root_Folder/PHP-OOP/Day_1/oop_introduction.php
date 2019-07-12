<?php

/*
  Pros of OOP :
  - Reusability
  - Roles separation

  Warning, you can't re-declare a class : differents names!

  Declare a class :
  */

/*class Car
{ }

// Create an object : Instance of a class 
$myCar = new Car();

// We can create as much objects as we want
$ferrari = new Car();
*/
/*
  Classes have 'internal variables', called 'properties'
  They have also 'internal functions', called 'methods'
*/

class Car
{
  // Properties 
  private $color; // Color of the car (red, blue...)
  public $brand; // Brand of the car (ferrari, bmw, audi...)
  public $category; // Category of the car

  // Methods
  public function setColor($newColor)
  { // Public method (accessible from an object)
    $this->color = $newColor; // Edit the property
  }

  public function getColor()
  {
    return $this->color; // Return the property
  }
}

$myCar = new Car();
// I can access public properties (or methods)
$myCar->brand = 'Ferrari';
// I can't access private properties :
$myCar->color = 'red';
// But I can use public method
$myCar->setColor('red');
// Display the color of the car
echo $myCar->getColor();
// Take a look at my object
var_dump($myCar);

// Create a variable which is link to the same
// object as the first one
$anotherCar = $myCar;
var_dump($anotherCar);


/*
  A method can call another method
*/
class Car
{
  // Properties 
  private $color; // Color of the car (red, blue...)
  public $brand; // Brand of the car (ferrari, bmw, audi...)
  public $category; // Category of the car

  // Methods
  public function setColor($newColor)
  { // Public method (accessible from an object)
    $this->color = $newColor; // Edit the property
  }

  public function getColor()
  {
    return $this->color; // Return the property
  }

  public function getColorUpperCase()
  {
    return strtoupper($this->getColor());
  }
}

echo $ferrari->getColorUpperCase();

/*
  Constructor is call when the object is instantiate
  Destructor when...destroy
*/
class Car
{
  // Properties 
  private $color; // Color of the car (red, blue...)
  public $brand; // Brand of the car (ferrari, bmw, audi...)
  public $category; // Category of the car

  // Methods
  public function __construct($color, $brand)
  {
    $this->color = $color;
    $this->brand = $brand;
  }

  public function setColor($newColor)
  { // Public method (accessible from an object)
    $this->color = $newColor; // Edit the property
  }

  public function getColor()
  {
    return $this->color; // Return the property
  }

  public function getColorUpperCase()
  {
    return strtoupper($this->getColor());
  }

  // Override tostring method
  public function __toString()
  {
    return "My car is a " . $this->brand . ", color : " . $red;
  }
}
$myCar = new Car('red', 'ferrari');
echo $myCar;

/*
  Good practices : 
  - One class = One file
  - Capital letter for the first letter and for
  the other words
  Example : HelloWorld / Car / CoffeeMug...

*/
