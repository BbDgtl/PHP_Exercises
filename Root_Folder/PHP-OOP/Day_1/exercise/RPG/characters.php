<?php

// ** -- Step 1 :

// TODO Create a Character class.
// This class will implement all attributes and methods common to the characters.

// Set up different type of character. You must be able to create Elves, Orcs or Humans.
// * Example : 
// ? $elf = new Character('Elf');
// ? $orc = new Character('Orc');


// ** -- Step 2 :

// Orcs are not understood by anyone.
// TODO Their war cry is now: "wwouogrouroulou mlll !!"


// ** -- Step 4 :

// A character can now hold an equipment.
// TODO You have to change the Character class and add a new property : $equipment;
// TODO You can add/remove/display the equipment for a character (create a method for each action)

// TODO Implement the fact that a character has (or not) an inventory.

require_once 'equipment.php';

class Character
{

  private $_race;
  private $_name;
  private $_attackPoints;
  private $_defensePoints;
  private $_healthPoints;
  private $_warCry;
  private $_equipment;

  // ***** CONSTRUCTOR **** \\
  public function __construct($race, $_name)
  {
    $this->_healthPoints = 100;
    $this->_attackPoints = 10;
    $this->_defensePoints = 5;
    $this->_warCry = '';
    $this->_equipments = array();

    if ($race == 'human') {
      $this->_race = $race;
      $this->_name = $_name;
      $this->humanBonus();
      $this->_warCry = 'Attaaack!';
    } else if ($race == 'orc') {
      $this->_race = $race;
      $this->_name = $_name;
      $this->orcBonus();
      $this->_warCry = 'Wwouogrouroulou mlll!!';
    } else if ($race == 'elf') {
      $this->_race = $race;
      $this->_name = $_name;
      $this->elfBonus();
      $this->_warCry = 'Lacho calad! Drego morn!!';
    } else {
      echo 'This is not correct.';
    }
  }

  // ***** METHODS ***** \\
  // ** Character Bonus functions
  public function humanBonus()
  {
    $this->_attackPoints = $this->_attackPoints;
    $this->_healthPoints = $this->_healthPoints;
    $this->_attackPoints = $this->_attackPoints;
  }

  public function orcBonus()
  {
    $this->_healthPoints -= 10;
    $this->_attackPoints += 2;
    $this->_defensePoints += 2;
  }

  public function elfBonus()
  {
    $this->_healthPoints = $this->_healthPoints;
    $this->_attackPoints = $this->_attackPoints;
    $this->_defensePoints -= 3;
  }

  // ** setters
  public function addEq($equipment)
  {
    $this->_equipments[] = $equipment;
  }

  public function removeEq()
  {
    $this->_equipments = null;
  }

  // ** getters
  // TODO DISPLAY the EQUIPMENT
  public function displayEq()
  {
    return $this->_equipments;
  }
}
