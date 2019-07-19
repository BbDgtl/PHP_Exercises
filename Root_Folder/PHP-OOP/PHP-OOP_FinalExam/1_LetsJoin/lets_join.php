<?php

// ****** ////// EXERCISE 1 : LET'S JOIN \\\\\ ****** \\
// ! COMPLETED

/* 

Table "users" :       |       Table "articles" 
  - id (primary key)  |         - id (primary key)
  - firstname         |         - title
  - lastname          |         - content
  - email             |         - picture 
  - role              |         - date_publish
                      |         - id_user (secondary key)

*/

// TODO Write the SQL request to display an article (id = 10) and his author using a junction.

$query = 'SELECT articles.title, users.first_name, users.last_name 
FROM articles INNER JOIN users 
ON articles.id_user=users.id_user WHERE id=10';
