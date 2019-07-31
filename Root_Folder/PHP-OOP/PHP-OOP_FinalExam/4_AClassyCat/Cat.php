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
  private static $gender_available = [
    'male',
    'female'
  ];

  // ****** CONSTRUCT ***** \\
  public function __construct($name, $age, $color, $gender, $breed)
  {
    $this->setName($name);
    $this->setAge($age);
    $this->setColor($color);
    $this->setGender($gender);
    $this->setBreed($breed);
  }

  // ***** METHODS ***** \\
  public function getInfo()
  {
    return [
      'Name' => $this->_name,
      'Age' => $this->_age,
      'Color' => $this->_color,
      'Gender' => $this->_gender,
      'Breed' => $this->_breed
    ];
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
    if (
      is_string($newName) && (strlen($newName) >= 3 && strlen($newName) <= 20)
    )
      $this->_name = $newName;
    else
      echo "Name is invalid.";
  }

  public function setAge($newAge)
  {
    if (
      is_int($newAge)
    )
      $this->_age = $newAge;
    else
      echo "Age is invalid.";
  }

  public function setColor($newColor)
  {
    if (
      is_string($newColor) && (strlen($newColor) >= 3 && strlen($newColor) <= 10)
    )
      $this->_color = $newColor;
    else
      echo "Color is invalid.";
  }

  public function setGender($newGender)
  {
    if (
      is_string($newGender) && (in_array($newGender, self::$gender_available))
    )
      $this->_gender = $newGender;
    else
      echo "Gender is invalid.";
  }

  public function setBreed($newBreed)
  {
    if (
      is_string($newBreed) && (strlen($newBreed) >= 3 && strlen($newBreed) <= 20)
    )
      $this->_breed = $newBreed;
    else
      echo "Breed is invalid.";
  }
}
