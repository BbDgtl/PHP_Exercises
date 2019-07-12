<?php include 'example.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Include Files</title>
</head>

<body>

  <h1>This is the BODY</h1>

  <?php

  echo $string;

  ?>

</body>

<?php

// ** Include a file
include 'footer.html';
include_once 'footer.html'; // ! USE THIS MOST OF THE TIME

// ** Require -> stops the execution IF there is an error
require 'example.php';
require_once 'example.php';

?>

</html>