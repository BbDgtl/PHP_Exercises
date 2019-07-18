<?php

/*

Hydrating your OBJECTS

Hydrating an object is taking data that exists 
in memory (database, file, etc.) and then populating
an object with the data.

*/

class User
{
  private $_id;
  private $_name;
  private $_mail;
}

// ? SELECT * FROM users WHERE id = 5;
