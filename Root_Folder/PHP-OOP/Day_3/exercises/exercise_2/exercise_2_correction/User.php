<?php

class User
{
  // * PROPERTIES
  private $_id;
  private $_email;

  // * CONSTRUCTOR FUNCTION - call when object created
  public function __construct($id, $email)
  {
    $this->_id = $id;
    $this->_email = $email;
  }

  // * GETTERS - retrieve the private properties
  public function getId()
  {
    return $this->_id;
  }

  public function getEmail()
  {
    return $this->_email;
  }
}
