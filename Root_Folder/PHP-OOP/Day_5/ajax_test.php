<?php

$error = array();

if (!empty($_POST)) {
  // Basic Validaion
  if (empty($_POST['firstName'])) {
    $error[] = 'First Name is mandatory.';
  }

  if (empty($_POST['lastName'])) {
    $error[] = 'Last Name is mandatory.';
  }

  if (count($error) > 0) {
    echo implode('<br>', $error);
  } else {
    // If no errors, insert into DB
    $pdo = new PDO('mysql:host=localhost;dbname=moviedb', 'root', '');
    $query = 'INSERT INTO users(first_name, last_name) VALUE(?,?)';
    $insert = $pdo->prepare($query);
    $insert->bindValue(1, $_POST['firstName']);
    $insert->bindValue(2, $_POST['lastName']);

    if ($insert->execute()) {
      echo 'User successfully added.';
    } else {
      echo 'Error inserting into database.';
    }
  }
}
