<?php

/*
  INTERFACE

  An interface looks like a class but has
  only static constants and abstract methods.
  
  PHP uses interfaces to implement multiple inheritances.
  (You can't inherit from only one class)

  Interfaces are used to implements/share roles.

  An interface allow to specify that one part 
  of your code must be implemented by a class

  Syntax :
*/

interface IExample
{
  // Methods
}

// To implements an interface in a class :
class example implements IExample
{ }

/* 
Take the example of our classes Animal/Dog/Cat/Birds/Lezard...
Some of them can sit(). Even a Human can sit.
*/
interface IDomestic
{
  public function sit();
}

// First extends, then implements
class Dog extends Animal implements IDomestic
{
  // I HAVE TO IMPLEMENTS THIS METHOD
  public function sit()
  { }
}

class Cat extends Animal implements IDomestic, IExample
{
  // I HAVE TO IMPLEMENTS THIS METHOD
  public function sit()
  { }
}

/* 
  Abstract class :
  1. When a model/template must be set for a group
  of subclasses, use an abstract class.
  2. An abstract class can contain concrete methods
  3. Abstract classes provide default actions for
  subclasses
  4. Used to provide a template for potential future
  inherited classes.

  Interface :
  1. Use an interface when a role must be defined
  for other classes as well, regardless of the 
  inheritance of these classes.
  2. You can't instantiate an interface 
  and create an object
  3. Interface can't contain concrete methods
  4. A class can implement multiple interfaces
  (5. An interface can inherit from a class)




