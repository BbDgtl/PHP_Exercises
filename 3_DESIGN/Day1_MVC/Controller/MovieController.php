<?php

require_once '../Model/MoviesModel.php';

$movies = getMovies();

if ($movies->rowCount() == 0) {
  include_once '../Error/ErrorView.php';
} else {
  include_once '../View/MoviesView.php';
}
