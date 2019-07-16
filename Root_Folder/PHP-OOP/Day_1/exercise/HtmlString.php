<?php

// $markup = new HtmlString();
// $markup->setString('My strinnnng');
// $bold = $markup->getBoldString();

// echo $bold; /* Display <b>My strinnnng</b> */

/*
  Part 2 :

  Make it possible to directly create a HtmlString object
  with string in parentheses :

 */

$markup = new HtmlString('This string is set in the constructor!');
echo $markup->getBoldString();
echo $markup->getItalicString();
echo $markup->getItalicBoldString();
