<!-- 4. Create a page 'movie.php'.
	This page is a descriptive page for each movie. It'll display the poster, the title, the release year but also the director's name.
	This page will have to use the GET method to get the id of the movie you want to display.
	So in your adress bar it'll look like this : 'localhost/movie.php?id=1' -->

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

  if (isset($_GET['submit'])) {
    $conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
    $db_name = 'moviedb';
    $db_found = mysqli_select_db($conn, $db_name);

    if ($db_found) {
      $query = 'SELECT title, poster, release_year  FROM movies INNER JOIN directors ON director_id=directorID ORDER BY release_year DESC';
      $results = mysqli_query($conn, $query);

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
  }

  ?>

  <form action="" method="GET">
    <input type="submit" value="Search">
  </form>

</body>

</html>