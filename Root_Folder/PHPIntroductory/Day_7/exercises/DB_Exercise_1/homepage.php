<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GameShop</title>
</head>

<body>

  <?php
  echo '<h1>Welcome to the GameShop</h1>';

  require_once 'database.php';

  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
  // echo 'Connection successful.' . '<br>';
  $db_name = DB_NAME;
  $db_found = mysqli_select_db($conn, $db_name);

  echo '<h2>The 3 best sellers :</h2>';

  if ($db_found) {
    // Prepare the query:
    $query = 'SELECT games.title, games.image FROM games INNER JOIN purchase ON purchase.id_purchase=games.id_purchase LIMIT 3';
    // Send the query to the DB

    $results = mysqli_query($conn, $query);

    while ($db_record = mysqli_fetch_assoc($results)) {
      echo '<br>';
      echo $db_record['title'] . '<br>';
      echo '<img height="300px" width="200px" src="images/' . $db_record['image'] . '">' . '<br>';
    }
  } else {
    echo "$db_name not found!";
  }

  mysqli_close($conn);
  ?>

</body>

</html>