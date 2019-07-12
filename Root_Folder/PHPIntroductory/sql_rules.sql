-- ! SQL = Structured Query Language

/* 
Basic Rules: 
  - The symbol * means 'all the attributes'
  - String have to be surrounded by 'simple quotes'
  - Date also must also be surrounded by 'simple quotes'
  - Numbers shouldn't be surrounded by quotes
*/

CREATE DATABASE movieDB;

CREATE TABLE movies (
  movie_id INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(30) NOT NULL, 
  release_year YEAR
);

