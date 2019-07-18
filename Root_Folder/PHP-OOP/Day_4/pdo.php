<?php

/* PDO - PHP Data Object

PDO is an abstraction layer to query the database.
PDO takes care of more than 12 different types of databases.

We don't use an array or parameters to connect to the 
database.
Instead we use a DSN (Data Source Name)

The DSN summarizes the parameters for the connection.

*/

// Connect to the DB :
$dsnConnection = 'mysql:host=localhost;dbname=moviedb';
$pdo = new PDO($dsnConnection, 'root', '');

// Execute queries
$deleteQuery = 'DELETE FROM moviedb WHERE movie_id=2';
$pdo->exec($deleteQuery);
// exec() only return the number of lines
// that are affected

// query() will return a rowset (results set)
$selectQuery = 'SELECT * FROM movies';
$results = $pdo->query($selectQuery);
var_dump($results);

/* 

For now, results have been retrieved
but we need to use the fetch() method
to use/display them

*/

$row = $result->fetch(PDO::FETCH_ASSOC);
var_dump($row);

// $night = $result->fetch(PDO::FETCH_ASSOC);
// var_dump($night);

/* 

Fetch() will retrieve the 1st element returned by mysql
We need to tell it how to fetch() (associative array)

*/

while ($result->fetch(PDO::FETCH_ASSOC)) {
  echo $row['title'];
}

/* 

Prepared Statements 

*/

// Without prepared
$mail = $_POST['mail'];
$password = $_POST['password'];
$query = 'SELECT * 
  FROM users WHERE mail=' . $mail .
  'AND password=' . $password;

// Prepared 
// ? ? mark means it will be a variable
$preparedQuery = 'SELECT * 
FROM users WHERE mail=? AND password=?';

$prep = $pdo->prepare($preparedQuery);

// Associate value to placeholder.
$prep->bindValue(1, $mail, PDO::PARAM_STR);
$prep->bindValue(2, $password);

// Compile and execute the query.
// Returns row sets
$prep->execute();

/*

Pros of prepared statements :
  - Safety !
  - Better performance

  It's also useful when we want to insert multiple
  records.
  Instead of doing multiple INSERS, we will prepare
  the query and use it in a loop, For example :

*/

// Without prepared
$title = 'Star Wars';
$pdo->exec('INSERT INTO movies("title")
VALUES(' . $title . ')');

$title = 'Jurassic Park';
$pdo->exec('INSERT INTO movies("title")
VALUES(' . $title . ')');

$title = 'Nightcrawler';
$pdo->exec('INSERT INTO movies("title")
VALUES(' . $title . ')');

// WITH prepared statements
$prep = $pdo->prepare('INSERT INTO movies("title")
VALUES(?)');

$prep->bindParam(1, $title);

// Insert a movie
$title = 'Star Wars';
$prep->execute();

// Insert a movie
$title = 'Jurassic Park';
$prep->execute();

// Insert a movie
$title = 'Nightcrawler';
$prep->execute();
