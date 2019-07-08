<?php
/* It can be dangerous not to protect 
the data the users entered
throught a form
*/
var_dump($_GET);
if (isset($_GET['movieID'])) {
  // Make sure it is a number I get
  $movieID = (int) $_GET['movieID'];
  
  if ($movieID > 0) {
    // I can do some things
    require_once 'database.php';
    // Connect to my database server<
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    echo 'Connexion successfull<br>';
    // Choose wich database I want to work with
    $db_name = DB_NAME;
    $db_found = mysqli_select_db($conn, $db_name);

    if ($db_found) {
      // Prepare my query
      $query = 'SELECT * FROM movies 
      WHERE movie_id = ' . $movieID;

      //Send the query to the DB
      $results = mysqli_query($conn, $query);
      var_dump($results);
      while ($db_record = mysqli_fetch_assoc($results)) {
        echo '<hr>';
        echo $db_record['title'] . '<br>';
        echo $db_record['release_year'] . '<br>';
        echo $db_record['views'] . '<br>';
      }
    }
  } else {
    echo "Id is not correct";
  }
} else {
  echo 'You are not allow to view this page';
}

?>
<!--
<form action="" method="get">
  <input type="number" name="myInput">
  <input type="submit" name="mySubmit" value="Send">
</form>-->