<?php

// ** -- Step 3 :

// There are several types of equipment: armor, sword, others (you can add as many as you want).

// Each equipment is designated by a name and a description of the item.
// Equipment also gives a special bonus.

// ? For example: an armor can give +5 in defense, a +3 sword in attack.
// ? There is even some object that gives +10 in attack but decreases defense.

// TODO Create an Equipment class.
// This class will implement all the attributes and methods common to the devices.

// TODO Set up the different types of equipment. You must be able to create multiple equipment.
// (I leave you free to your imagination for the creation of weapon and specific power ....)
// * For example :
// ? $sword = new equipment("Death Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
// ? $jewel = new equipment("Grace Necklace", 0, 0, 5); // 0 atk bonus, 0 def bonus, 5 life bonus;

class Equipment
{
  private $_equipmentType;
  private $_description;
  // TODO Include STATS
  private $_attackPoints;
  private $_defensePoints;
  private $_healthPoints;

  // ***** CONSTRUCTOR ***** \\
  public function __construct($equipmentType)
  {
    $this->_attackPoints = 10;
    $this->_defensePoints = 8;
    $this->_healthPoints = 5;

    if ($equipmentType == 'sword') {
      $this->_equipmentType = $equipmentType;
      $this->_description = 'Oathbringer';
      $this->swordBonus();
    } else if ($_equipmentType = 'axe') {
      $this->_equipmentType = $equipmentType;
      $this->_description = 'Headchopper';
      $this->axeBonus();
    } else if ($_equipmentType = 'hammer') {
      $this->_equipmentType = $equipmentType;
      $this->_description = 'Skullcrusher';
      $this->hammerBonus();
    } else if ($_equipmentType == 'leather armor') {
      $this->equipmentType = $_equipmentType;
      $this->_description = 'Night\'s Embrace';
      $this->leatherBonus();
    } else if ($_equipmentType = 'chainmail') {
      $this->_equipmentType = $equipmentType;
      $this->_description = 'Windwalker';
      $this->chainBonus();
    } else if ($_equipmentType = 'hammer') {
      $this->_equipmentType = $equipmentType;
      $this->_description = 'Skullcrusher';
      $this->plateBonus();
    }
  }

  public function __toString()
  {
    $string = 'Desc : ' . $this->_description . '<br>';
    $string .= 'Type : ' . $this->_equipmentType . '<br>';

    return $string;
  }

  // ***** METHODS ***** \\
  // * Weapons:
  public function swordBonus()
  {
    $this->_attackPoints = $this->_attackPoints;
    $this->_defensePoints = 0;
    $this->_healthPoints = 0;
  }
  public function axeBonus()
  {
    $this->_attackPoints += 5;
    $this->_defensePoints = -2;
    $this->_healthPoints = 0;
  }
  public function hammerBonus()
  {
    $this->_attackPoints += 2;
    $this->_defensePoints = -1;
    $this->_healthPoints = $this->_healthPoints += 5;
  }

  // * Armor:
  public function leatherBonus()
  {
    $this->ap -= 8;
    $this->dp = $this->dp;
    $this->hp -= 5;
  }
  public function chainBonus()
  {
    $this->ap = $this->ap;
    $this->dp += 2;
    $this->hp -= 3;
  }
  public function plateBonus()
  {
    $this->ap = $this->ap;
    $this->dp += 5;
    $this->hp = $this->hp;
  }
}



// ! CORRECTION:

<?php

class Equipment
{
  private $_type;
  private $_description;
  private $_bonusAtk;
  private $_bonusDef;
  private $_bonusHealth;

  // Construct
  public function __construct($type, $description, $atk, $def, $health)
  {
    $this->_type = $type;
    $this->_description = $description;
    $this->_bonusAtk = $atk;
    $this->_bonusDef = $def;
    $this->_bonusHealth = $health;
  }

  public function __toString()
  {
    $string = 'Desc : ' . $this->_description . '<br>';
    $string .= 'Type : ' . $this->_type . '<br>';

    return $string;
  }

  // Getters
  public function getType()
  {
    return $this->_type;
  }

  public function getBonusAtk()
  {
    return $this->_bonusAtk;
  }
  public function getBonusDef()
  {
    return $this->_bonusDef;
  }
  public function getBonusHealth()
  {
    return $this->_bonusHealth;
  }
}