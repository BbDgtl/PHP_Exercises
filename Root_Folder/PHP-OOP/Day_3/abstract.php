<?php

/* 
  Abstraction

  An abstract class cannot be instantiate
  This class is meant to be extends 
  by a 'concrete' class.

  The structure of this class is the same
  as a regular one, just add the word 'abstract'

*/

abstract class Shape
{ }

/* Because it's not meant to be instantiate
This will give you an error : */
$shape = new Shape();

/* 
  Class Circle will extends the Shape class
  (to use the property/methods common for all shapes)
  */
class Circle extends Shape
{ }

/* 
 We can define some abstract methods in an abstract class.
 It's now mandatory to implements those methods in the
 extending(children) classes. 
*/
abstract class Shape
{
  abstract public function calculateSurface();
}

class Circle extends Shape
{
  // I HAVE TO IMPLEMENT THIS METHOD
  // MANDATORY !!!
  public function calculateSurface()
  {
    return ($x * $y);
  }
}

class Rectangle extends Shape
{
  public function calculateSurface()
  {
    return ($x * $y + 5);
  }
}

/*
  1. An abstract class can contain methods with a body
  (not just abstract method)
  2. A class can also be abstract without containing any
  abstract methods.
  3. If a class has one or more abstract methods, it
  must be 'labelized' as an abstract class


