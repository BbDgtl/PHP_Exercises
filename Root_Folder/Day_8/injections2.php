<form action="" method="get">
  <input type="text" name="myInput" placeholder="your email">
  <input type="submit" name="mySubmit" value="Send">
</form>

<?php

if (isset($_GET['mySubmit'])) {
  echo $_GET['myInput'];

  // Convert the special HTML tags
  // "&" convert to "&amp;"
  // "<" convert to "&lt;"
  $str = htmlspecialchars($_GET['myInput']);
  echo "<br>" . $str;

  // We can REMOVE the special HTML tags
  $str2 = strip_tags($_GET['myInput']);
  echo "<br>" . $str2;
}
