<!-- 2. Create a page 'index.php'.
	This page will display a nice message like 'Welcome to the freakin movie website' (or whatever) -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie Page</title>
</head>

<body>

  <?php
  echo '<h1>Welcome to the (freakin\') Movie Website</h1>';

  require_once 'database.php';

  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
  // echo 'Connection successful.' . '<br>';
  $db_name = 'moviedb';
  $db_found = mysqli_select_db($conn, $db_name);

  echo '<h2>The 3 most recent films:</h2>';
  // TODO - Also display the last three movies (ordered by date of release).
  if ($db_found) {
    // echo "$db_name found!<br>";
    // Prepare the query:
    $query = 'SELECT title FROM movies ORDER BY release_year LIMIT 3';
    // Send the query to the DB
    $results = mysqli_query($conn, $query);
    // $db_record = mysqli_fetch_assoc($results);
    // $db_record2 = mysqli_fetch_assoc($results);
    while ($db_record = mysqli_fetch_assoc($results)) {
      echo '<br>';
      echo $db_record['title'] . '<br>';
    }
  } else {
    echo "$db_name not found!";
  }

  mysqli_close($conn);
  ?>

</body>

</html>