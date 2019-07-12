<?php

// ** To work with a database, we'll use a function call: mysqli
// $server = 'localhost';
// $user = 'root';
// $password = '';

require_once 'database.php';
// TODO Connect to the DATABASE SERVER
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
echo 'Connection successful.' . '<br>';
// var_dump($conn);

// TODO Choose which DB to work with
$db_name = DB_NAME;
$db_found = mysqli_select_db($conn, $db_name);

if ($db_found) {
  echo "$db_name found!<br>";
  // TODO Prepare the QUERY
  $query = 'SELECT * FROM movies';
  // TODO SEND the QUERY to the DB
  $results = mysqli_query($conn, $query);
  // var_dump($results);
  // TODO Retrieve the results as an array
  // TODO Display array (use a loop)
  while ($db_record = mysqli_fetch_assoc($results)) {
    echo '<hr>';
    echo $db_record['title'] . '<br>';
    echo $db_record['release_year'] . '<br>';
    echo $db_record['views'] . '<br>';
    // var_dump($db_record);
  }
} else
  echo "$db_name NOT found!";

// ** CLOSE the connection to the DB
mysqli_close($conn);
