<?php

// * DRY Concepts (Don't Repeat Yourself) :
// *  - Use functions to FACTOR your code
// *  - Use require() / include() to use fragments of your code

/*

  Users                   Posts 
  -----                   -----
  id                      id
  lastname                title
  firstname               content
                          user_id

*/

// ! WET (We Enjoy Typing / Wasting Everyone's Time) <- Dont do this.

/* 

  Making your website dynamic!

  The website doesn't have a fixed # of pages.

  URI_PARAM

  To access a page with a URI Parameter.
    "movie.php?id=4"
    "products.php?page=5

*/

// * EXAMPLE (You don't need a form to use the GET method)

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM movies WHERE movie_id = " . $id;
}

?>

<a href="movie.php?id=<?php echo $id ?>">Click the link.</a>