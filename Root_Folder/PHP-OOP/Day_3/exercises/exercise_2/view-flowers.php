<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Homes Display</title>
  <style>
    h1 {
      text-align: center;
    }
  </style>
</head>

<body>


  <h1>Flower Shop</h1>
  <hr>

  <?php
  $server = 'localhost';
  $user = 'root';
  $password = '';
  $db_name = 'flowers';

  $conn = mysqli_connect($server, $user, $password);

  $db_found = mysqli_select_db($conn, $db_name);

  if ($db_found) {
    // Prepare the query:
    $query = 'SELECT * FROM flowers';
    // Send the query to the DB
    $results = mysqli_query($conn, $query);

    while ($db_record = mysqli_fetch_assoc($results)) {

      echo $db_record['flowers_name'] . '<br>';
      echo $db_record['flowers_price'] . ' ' . '€' . '<br><br>';
      echo '<img height="200px" src="images/' . $db_record['images'] . '"><br><br>';
    }
  } else {
    echo "$db_name not found!";
  }

  mysqli_close($conn);
  ?>
</body>

</html>