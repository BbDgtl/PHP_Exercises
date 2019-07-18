<?php

class Users
{
  private $user_id;
  private $email_address;
  private $hashed_pw;

  public function __construct($id, $email, $pw)
  {
    $this->user_id = $id;
    $this->email_address = $email;
    $this->hashed_pw = $pw;
  }
}
