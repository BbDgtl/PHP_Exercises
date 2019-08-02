<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movies</title>
</head>

<body>

  <?php
  // Display the movies
  while ($movie = $movies->fetch(PDO::FETCH_ASSOC)) {
    echo $movie['title'] . '<br>';
    echo $movie['release_year'] . '<br>';
    echo $movie['views'] . '<br>';
    echo '<hr>';
  }
  ?>

</body>

</html>