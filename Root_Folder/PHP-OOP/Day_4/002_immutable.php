<?php

/*

IMMUTABLE

An immutable object is an object that can't be edited
after creation.

*/

class User
{
  private $_id;
  private $_name;
  private $_mail;

  public function __construct($id, $name, $mail)
  {
    $this->_id = $id;
    $this->_name = $name;
    $this->_mail = $mail;
  }
}

$simon - new User(1, 'Simon', 'simon@gmail.com');
