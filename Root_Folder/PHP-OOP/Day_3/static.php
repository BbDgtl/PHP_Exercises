<?php

/*
  Static
  
  A static variable is not linked to a specific object
  but to the class

  Example :
*/

class Sheep
{
  public static $countCloned = 0;

  public function __construct()
  {
    self::$countCloned++;
  }

  public function addClone()
  {
    $this->countCloned++;
  }
}
// Create an object (a sheep)
$sheep1 = new Sheep();
echo Sheep::$countCloned . '<br>';
$sheep2 = new Sheep();
echo Sheep::$countCloned . '<br>';
$sheep3 = new Sheep();
echo Sheep::$countCloned . '<br>';

/*
  'self' keyword refers to the class itself
  As opposed to 'self', 'this' keyword refers 
  to the instance of the object
  
  It allows to acces static properties of a class

  A method can be static
  Example :
*/
abstract class Log
{
  public static function display()
  {
    echo date('Y-m-d H:i:s') . ' - Code is doing fine';
  }
}

Log::display();
