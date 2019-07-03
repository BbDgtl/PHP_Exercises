/*
	CREATE TABLE directors
	(
	    director_id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	    first_name VARCHAR(50),
	    last_name VARCHAR(50),
	    date_of_birth DATE,
	    country VARCHAR(50)
	)
*/

CREATE TABLE directors
(
  director_id INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(50),
  last_name VARCHAR(50),
  date_of_birth DATE,
  country VARCHAR(50)
)

