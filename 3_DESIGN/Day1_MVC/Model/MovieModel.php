<?php

function getMovies()
{
  // Connect to DB
  $db = new PDO('mysql:host=localhost;dbname=moviedb;charset=utf8', 'root', '');
  // Query DB
  $movies = $db->query('SELECT * FROM movies');
  // var_dump($res);
  return $movies;
}
