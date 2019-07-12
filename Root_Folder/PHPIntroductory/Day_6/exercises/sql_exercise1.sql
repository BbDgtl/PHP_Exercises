-- ** Part 1 :
-- TODO - Analyse and execute this request :

CREATE TABLE directors
(
  director_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  date_of_birth DATE,
  country VARCHAR(50)
)

-- TODO - This is going to create a new table : directors.
-- TODO - Analyze and execute this query:

ALTER TABLE movies
ADD directorID INT,
ADD FOREIGN KEY (directorID) REFERENCES directors (director_id);

-- This request will add a 'directorID' attribute, in the 'movies' table, which refers to the directors_id of 'directors' (foreign key).

-- TODO - Now, fill the table with some directors

INSERT INTO directors(first_name, last_name, date_of_birth, country)
VALUES ('David', 'Fincher', '1962-08-28', 'USA');

INSERT INTO directors(first_name, last_name, date_of_birth, country)
VALUES ('Steven', 'Spielberg', '1946-12-18', 'USA');

INSERT INTO directors(first_name, last_name, date_of_birth, country)
VALUES ('Dan', 'Gilroy', '1959-06-24', 'USA');

INSERT INTO directors(first_name, last_name, date_of_birth, country)
VALUES ('Peter', 'Jackson', '1961-10-31', 'USA');

-- TODO - Now, with a query, insert the id of each director in the 'movies' table according to their name already present in the 'director' column.

UPDATE movies SET directorID = '1' WHERE movies.movie_id = '1';
UPDATE movies SET directorID = '2' WHERE movies.movie_id = '2';
UPDATE movies SET directorID = '3' WHERE movies.movie_id = '3';
UPDATE movies SET directorID = '4' WHERE movies.movie_id = '4';
UPDATE movies SET directorID = '2' WHERE movies.movie_id = '5';

-- ** Part 2 :
-- TODO - Retrieve the name and the year of birth of each director
-- TODO - Recover directors under 50 years old.
-- TODO - Recover the directors of American nationality

SELECT first_name, date_of_birth FROM directors;
SELECT first_name, last_name FROM directors WHERE TIMESTAMPDIFF(year, date_of_birth, now()) > 50;
SELECT first_name, last_name FROM directors WHERE country = 'USA';

-- ** Part 3:
-- TODO - Collect the film that was the least visited at the box office
-- TODO - Collect the most popular movie at the box office
-- TODO - Collect the 3 most viewed movies at the box office

SELECT title FROM movies WHERE views ORDER BY views ASC LIMIT 1;
SELECT title FROM movies WHERE views ORDER BY views DESC LIMIT 1;
SELECT title FROM movies WHERE views ORDER BY views DESC LIMIT 3;

-- ** Part 4: (JOINS)
-- TODO - For each film, recover its title, its year of release and the name of the director
-- TODO - For each film, get all the information about it and the name of the director
-- TODO - Get the title of each film and the name of the director, sorted alphabetically on the title of the film.
-- TODO - Same but sorted on the director's name.

SELECT movies.title, directors.first_name, movies.release_year
FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID;

SELECT movies.title, directors.first_name, movies.release_year 
FROM movies 
INNER JOIN directors ON directors.director_id=movies.directorID;

SELECT movies.title, directors.first_name, directors.last_name 
FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
ORDER BY movies.title;

SELECT movies.title, directors.first_name, directors.last_name 
FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
ORDER BY directors.last_name;

-- ** Part 5:
-- TODO - Get all the films from the director "George Lucas"
-- TODO - Get all the director's films that are not "George Lucas"
-- TODO - Collect all films whose director has the letter 's' in his name or first name.

SELECT movies.title FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
WHERE directors.first_name = 'George' && directors.last_name = 'Lucas';

SELECT * FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
WHERE directors.first_name = 'George' && directors.last_name != 'Lucas';

SELECT * FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
WHERE directors.first_name LIKE '%s%' || directors.last_name LIKE '%s%';

-- ** Part 6:
-- TODO - Get all the movies from the youngest to the oldest director
-- TODO - Collect the number of films by director (with the name of the director)

SELECT movies.title, directors.first_name, directors.last_name, directors.date_of_birth 
FROM movies 
INNER JOIN directors ON directors.director_id=movies.directorID
ORDER BY directors.date_of_birth DESC;

SELECT directors.first_name, directors.last_name, COUNT(movies.movie_id) AS 'Movies Made'
FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
GROUP BY directors.director_id;

-- ** Part 7:
-- TODO - Get the sum of the views of all the films of the director 'George Lucas'
-- TODO - Get the sum of views of all movies by director
-- TODO - Get average views of all movies by director
-- TODO - Get the sum of the views by nationality (of the director)

SELECT SUM(views) AS 'Total Views'
FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
WHERE directors.first_name = 'George' && directors.last_name = 'Lucas';

SELECT directors.first_name, directors.last_name, SUM(views) AS 'Total Views'
FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
GROUP BY directors.director_id;

SELECT AVG(views) AS 'Average Views'
FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID

SELECT DISTINCT directors.country, SUM(views) AS 'Total Views'
FROM movies
INNER JOIN directors ON directors.director_id=movies.directorID
GROUP BY directors.country;

-- ** Part 8:
-- TODO - Get the director who makes the most views.
-- TODO - Recover nationalities (director) who made over 200,000 views

SELECT directors.first_name, directors.last_name, movies.views AS 'Most Views'
FROM movies
JOIN directors ON directors.director_id=movies.directorID
ORDER BY views DESC LIMIT 1;

SELECT directors.first_name, directors.last_name, movies.views AS 'Most Views'
FROM movies
JOIN directors ON directors.director_id=movies.directorID
HAVING movies.views > 200000;

-- ** Part 9:
-- TODO - All director George Lucas's films have made 2000 more box office hits. Update these movies.

UPDATE movies
INNER JOIN directors ON directors.director_id=movies.directorID
SET movies.views = movies.views + 2000
WHERE directors.first_name = 'George' && directors.last_name = 'Lucas';
