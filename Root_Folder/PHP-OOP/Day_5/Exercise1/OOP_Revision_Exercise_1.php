<?php

/*
	Exercise 1 :
	
	We have two tables : Movies and Directors.

	In the Directors table :
		- id
		- name
		- biography

	In the Movies table : 
		- id
		- title
		- release_year
		- category
		- director_id

	
	Write the SQL request to display a movie (id = 5) and his director using a junction (join).
	Note: Only write the SQL request, not the PHP.

*/

$query = 'SELECT movies.title, directors.first_name, directors.last_name 
FROM movies INNER JOIN directors 
ON movies.directorID=directors.director_id WHERE movie_id=5';
