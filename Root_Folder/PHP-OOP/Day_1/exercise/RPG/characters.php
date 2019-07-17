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

// 

class Character
{
  private $_race;
  private $_attackPoints;
  private $_defensePoints;
  private $_healthPoints;
  private $_warCry;
  private $_equipments;

  // Constructor
  public function __construct($race)
  {
    $this->_healthPoints = 100;
    $this->_attackPoints = 10;
    $this->_defensePoints = 5;
    $this->_warCry = 'Arhhhhgggg';
    $this->_equipments = array();

    if ($race === 'Orcs') {
      // If my character is an Orc
      $this->bonusOrcs();
      $this->_race = $race;
      $this->_warCry = 'wwouogrouroulou mlll !!';
    } else if ($race === 'Elves') {
      // If my character is an Elf
      $this->bonusElves();
      $this->_race = $race;
    } else if ($race == 'Humans') {
      // If my character is an Human
      $this->bonusHumans();
      $this->_race = $race;
    } else {
      // If the race is not 'valid'
      echo 'This race is not correct';
    }
  }


  // Methods
  public function bonusOrcs()
  {
    $this->_attackPoints += 2;
    $this->_defensePoints += 2;
    $this->_healthPoints -= 10;
  }

  public function bonusHumans()
  { }

  public function bonusElves()
  {
    $this->_defensePoints -= 3;
  }

  // Equipment methods
  public function addEquipment($equipment)
  {
    if (count($this->_equipments) < 4) {
      $swords = 0;
      $shield = 0;

      foreach ($this->_equipments as $equip) {
        if ($equip->getType() === 'Sword')
          $swords++;

        if ($equip->getType() === 'Shield')
          $shield++;
      }

      if ($equipment->getType() === 'Sword' && $swords >= 2)
        return 'You already have 2 swords';

      if ($equipment->getType() === 'Shield' && $shield >= 1)
        return 'You already have a shield';

      $this->_equipments[] = $equipment;
      return 'Equiped';
    } else
      return 'You already have 4 items';
  }

  public function removeEquipment($equipment)
  {
    foreach ($this->_equipments as $key => $equip) {
      if ($equipment === $equip) {
        unset($this->_equipments[$key]);
        return 'Item removed';
      }
    }

    return 'Item doesn\'t match';
  }

  public function displayEquipment()
  {
    foreach ($this->_equipments as $equip) {
      echo $equip;
    }
  }

  public function getEquipment()
  {
    return $this->_equipments;
  }

  public function getStats()
  {
    $bonusAtk = $this->_attackPoints;
    $bonusDef = $this->_defensePoints;
    $bonusLife = $this->_healthPoints;

    foreach ($this->_equipments as $equip) {
      $bonusAtk += $equip->getBonusAtk();
      $bonusDef += $equip->getBonusDef();
      $bonusLife += $equip->getBonusHealth();
    }

    return 'Atk : ' . $bonusAtk . '<br>'
      . 'Def : ' . $bonusDef . '<br>'
      . 'Health : ' . $bonusLife . '<br>';
  }
}
