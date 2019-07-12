<?php

class Equipment
{
  private $sword;
  private $axe;
  private $hammer;
  private $mace;
  private $morningstar;
  private $staff;
  private $longbow;
  private $scimitar;
  private $falchion;
  private $dagger;
  private $spear;

  public function __construct($race)
  {
    if ($race = 'human') {
      $this->race = $race;
      $this->name = $name;
      $this->hp = 100;
      $this->ap = 10;
      $this->dp = 5;
      $this->wc == 'Attaaaaack!';
    } else if ($race = 'orc') {
      $this->race = $race;
      $this->name = $name;
      $this->hp = 90;
      $this->ap = 12;
      $this->dp = 7;
      $this->wc == 'Wwouogrouroulou mlll!!';
    } else if ($race = 'elf') {
      $this->race = $race;
      $this->name = $name;
      $this->hp = 100;
      $this->ap = 10;
      $this->dp = 2;
      $this->wc == 'Lacho calad! Drego morn!!';
    }
  }