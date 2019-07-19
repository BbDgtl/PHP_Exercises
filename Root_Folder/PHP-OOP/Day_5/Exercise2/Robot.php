<?php

class Robot
{
  private $_id;
  private $_color;

  // * CONSTRUCTOR FUNCTION
  public function __construct()
  {
    $this->_id = setId();
    $this->_color = setColor();
  }

  // ***** ///// METHODS \\\\\ ***** \\
  // * GETTERS
  public function getId()
  {
    return $this->_id;
  }

  public function getColor()
  {
    return $this->_color;
  }

  public function getInfos()
  {
    $infoArray = array();
    $infoArray[]  = $this->_id;
    $infoArray[]  = $this->_color;
    return $infoArray;
  }

  // * SETTERS
  public function setId($newId)
  {
    $this->_id = $newId;
  }

  public function setColor($newColor)
  {
    $this->_color = $newColor;
  }
}
