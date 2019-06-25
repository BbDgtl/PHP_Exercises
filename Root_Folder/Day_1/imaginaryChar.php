<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Drizzt Do'urden</title>
</head>

<body>

  <?php

  $drizztDoUrden = array(
    'img' => '<img src ="./imgs/drizzt.png">',
    'last name' => 'Do\'Urden',
    'first name' => 'Drizzt',
    'characteristics' => array(
      'alignment' => 'Chaotic Good',
      'age' => 140,
      'attack points' => 31,
      'defense points' => 50
    )
  );

  echo $drizztDoUrden['img'] . '<br>';
  var_dump($drizztDoUrden) . '<br>';

  $charIMG = '<img src ="./imgs/drizzt.png">';
  $lastName = 'Do\'Urden';
  $firstName = 'Drizzt';
  $characteristics = array(
    'alignment' => 'Chaotic Good',
    'age' => 140,
    'attack points' => 31,
    'defense points' => 50
  );

  ?>

  <p>Name:
    <?php echo $firstName . ' ' . $lastName ?>
  </p>
  <img src="<?php echo $charIMG ?>" alt="">
  <ul>
    <li><?php echo $characteristics['alignment']; ?></li>
    <li><?php echo $characteristics['age']; ?></li>
    <li><?php echo $characteristics['attack points']; ?></li>
    <li><?php echo $characteristics['defense points']; ?></li>
  </ul>

</body>

</html>