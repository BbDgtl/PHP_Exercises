<?php

/*
  Part 1 : 

  Design an HtmlString class.

  It is intended to display bold and / or italic text.

  It will have the following methods:

  - setString ($string)
  Sets the string

  - getString ()
  Get the string

  - getBoldString()
  Get a bold version of the string

  - getItalicString ()
  Get an italic version of the string

  - getItalicBoldString ()
  Get a bold italic version of the string

  Be careful, put the class declaration in a separate file!

  Use Example :
 */

require_once 'HtmlString.php';

class HtmlString
{
  // ***** ///// Properties: \\\\\ ***** \\
  private $string;

  // ***** CONSTRUCTOR FUNCTION ***** \\
  public function __construct($string)
  {
    $this->string = $string;
  }

  // ***** ///// Methods: \\\\\ ***** \\
  // ? setString Method
  public function setString($newString)
  {
    $this->string = $newString;
  }
  // ? getString Method
  public function getString()
  {
    // return $this->string;
    return $this->string;
  }
  // ? getBoldString Method
  public function getBoldString()
  {
    // return $this->string;
    return '<b>' . $this->string . '</b>' . '<br>';
  }
  // ? getItalicString Method
  public function getItalicString()
  {
    // return $this->string;
    return '<i>' . $this->string . '</i>' . '<br>';
  }
  // ? getItalicBoldString Method
  public function getItalicBoldString()
  {
    // echo '<b><i>' . $this->string . '</i></b>';
    return '<i>' . $this->getBoldstring() . '</i>' . '<br>';
  }
}
