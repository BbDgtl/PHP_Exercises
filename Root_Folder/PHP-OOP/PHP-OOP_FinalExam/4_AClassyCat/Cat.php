<?php
// ***** ///// EXERCISE 4 : A CLASSY CAT \\\\\ ***** \\

// TODO You work for a local animal shelter. You must redesign their website.
// TODO You have to create a class named Cat() with the following properties:
//  ? - Name (string - 3 to 20 characters)
//  ? - Age (int)
//  ? - Color (string - 3 to 10 characters)
//  ? - Sex (string - male or female)
//  ? - Breed (string - 3 to 20 characters)

// TODO Make the getters/setters to validate the above data type. You also have to create the class constructor in order to instantiate the class.
// TODO Add a getInfos() method to return all the properties as an array..
// TODO In a new file, instantiate the class to display 3 different cats and display the result with the getInfos() method previously created.

class Cat
{
  // ****** PROPERTIES ****** \\
  private $_name;
  private $_age;
  private $_color;
  private $_gender;
  private $_breed;

  // ****** CONSTRUCT ***** \\
  public function __construct($name, $age, $color, $gender, $breed)
  {
    $this->_name = $name;
    $this->_age = $age;
    $this->_color = $color;
    $this->_gender = $gender;
    $this->_breed = $breed;
  }

  // ***** METHODS ***** \\
  public function getInfo()
  {
    $infoArray = array();
    $infoArray[]  = $this->_name;
    $infoArray[]  = $this->_age;
    $infoArray[]  = $this->_color;
    $infoArray[]  = $this->_gender;
    $infoArray[]  = $this->_breed;
    return $infoArray;
  }

  // * GETTERS * \\
  public function getName()
  {
    return $this->_name;
  }

  public function getAge()
  {
    return $this->_age;
  }

  public function getColor()
  {
    return $this->_color;
  }

  public function getGender()
  {
    return $this->_gender;
  }

  public function getBreed()
  {
    return $this->_breed;
  }

  // * SETTERS * \\
  public function setName($newName)
  {
    $this->_name = $newName;
  }

  public function setAge($newAge)
  {
    $this->_age = $newAge;
  }

  public function setColor($newColor)
  {
    $this->_color = $newColor;
  }

  public function setGender($newGender)
  {
    $this->_gender = $newGender;
  }

  public function setBreed($newBreed)
  {
    $this->_breed = $newBreed;
  }
}
