<?php

$error = array();

if (!empty($_POST)) {
  // Basic Validaion
  if (empty($_POST['brandMake'])) {
    $error[] = 'Sorry, vehicle make is mandatory..';
  }

  if (empty($_POST['modelName'])) {
    $error[] = 'Sorry, vehicle model is mandatory..';
  }

  if (empty($_POST['yearBuilt'])) {
    $error[] = 'Sorry, vehicle year is mandatory..';
  }

  if (empty($_POST['vehicleColor'])) {
    $error[] = 'Sorry, vehicle color is mandatory..';
  }

  if (count($error) > 0) {
    echo implode('<br>', $error);
  } else {
    // If no errors, insert into DB
    $pdo = new PDO('mysql:host=localhost;dbname=vehicles', 'root', '');
    $query = 'INSERT INTO cars(make, model, year, color) VALUE(?,?,?,?)';
    $insert = $pdo->prepare($query);
    $insert->bindValue(1, $_POST['brandMake']);
    $insert->bindValue(2, $_POST['modelName']);
    $insert->bindValue(3, $_POST['yearBuilt']);
    $insert->bindValue(4, $_POST['vehicleColor']);

    if ($insert->execute()) {
      echo 'Car successfully added.';
    } else {
      echo 'Error inserting into database.';
    }
  }
}
