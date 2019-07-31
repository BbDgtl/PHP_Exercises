<?php

class User implements JsonSerializable
{
  private $name;
  private $email;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getEmail()
  {
    return $this->email;
  }

  // TODO: Override the method.
  public function jsonSerialize()
  {
    return [
      "name" => $this->name,
      "email" => $this->email
    ];
  }
}
