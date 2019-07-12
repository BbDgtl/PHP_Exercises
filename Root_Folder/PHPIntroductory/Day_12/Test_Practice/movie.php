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
  <title>Movie Details</title>
</head>

<body>
  <?php require_once 'navbar.html'; ?>

  <h1>Movies Detail</h1>
  <hr>

  <?php

  if (isset($_GET['id'])) {

    // Make sure it is a number I get
    $movieID = (int) $_GET['id'];

    // Make sure it's an number AND a valid ID
    if ($movieID > 0) {
      require_once 'database.php';

      $db_handle = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD);
      $db_found = mysqli_select_db($db_handle, DB_NAME);

      if ($db_found) {

        $sql_query = 'SELECT m.*, d.first_name, d.last_name 
      FROM movies m 
      INNER JOIN directors d ON d.director_id = m.director_id
      WHERE movie_id = ' . $movieID;

        $result_query = mysqli_query($db_handle, $sql_query);
        $db_field = mysqli_fetch_assoc($result_query);

        echo '<img href="' . $db_field['poster'] . '" alt="' . $db_field['title'] . '">';
        echo '<p><strong>Title : </strong>' . $db_field['title'] . '</p>';
        echo '<p><strong>Year of release : </strong>' . $db_field['release_year'] . '</p>';

        echo '<br>';
        echo '<p><strong>Director : </strong>' . $db_field['first_name'] . ' '
          . $db_field['last_name'] . '</p>';
      } else {
        echo 'DB not found (' . DB_NAME . ')';
      }
    } else {
      echo 'Something\'s wrong...';
      echo '<a href="./">Go Back</a>';
    }
  } else {
    echo 'Something\'s wrong...';
    echo '<a href="./">Go Back</a>';
  }

  mysqli_close($conn);

  ?>

  <form action="" method="GET">
    <input type="submit" value="Search">
  </form>

</body>

</html>