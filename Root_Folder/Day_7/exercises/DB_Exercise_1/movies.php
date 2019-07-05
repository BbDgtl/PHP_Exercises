<!-- 3. Create a page 'movies.php'.
	This page will display all the movies (poster first, then above title and release year). -->

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
  require_once 'database.php';

  $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
  // echo 'Connection successful.' . '<br>';
  $db_name = 'moviedb';
  $db_found = mysqli_select_db($conn, $db_name);

  // TODO - display all the movies (poster first, then above title and release year).
  if ($db_found) {
    // echo "$db_name found!<br>";
    // Prepare the query:
    $query = 'SELECT title, poster, release_year  FROM movies ORDER BY release_year DESC';
    // Send the query to the DB
    $results = mysqli_query($conn, $query);
    // $db_record = mysqli_fetch_assoc($results);
    // $db_record2 = mysqli_fetch_assoc($results);
    while ($db_record = mysqli_fetch_assoc($results)) {
      echo '<br>';
      echo '<h3>' . $db_record['title'] . '</h3>' . '<br>';
      echo '<img height="500px" src="imgs/' . $db_record['poster'] . '">' . '<br>';
      echo $db_record['release_year'] . '<br>';
    }
  } else {
    echo "$db_name not found!";
  }

  mysqli_close($conn);
  ?>
</body>

</html>