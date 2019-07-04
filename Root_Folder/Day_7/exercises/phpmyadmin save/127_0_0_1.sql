-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 04, 2019 at 02:57 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstoredb`
--
CREATE DATABASE IF NOT EXISTS `bookstoredb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bookstoredb`;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
CREATE TABLE IF NOT EXISTS `authors` (
  `author_id` int(10) NOT NULL,
  `first_name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `last_name` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `date_of_birth` year(4) DEFAULT NULL,
  `bio` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`author_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `first_name`, `last_name`, `date_of_birth`, `bio`) VALUES
(1, 'R.A.', 'Salvatore', 1959, 'Robert Anthony Salvatore, born January 20, 1959, in Leominster, Massachusetts, is an American writer of fantasy and science fiction. His best-known novels take place in The Forgotten Realms. The covers of his novels are often illustrated by Ciruelo Cabral.');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET latin1 NOT NULL,
  `qty` int(5) DEFAULT NULL,
  `authorName` varchar(30) CHARACTER SET latin1 NOT NULL,
  `release_date` year(4) DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) NOT NULL AUTO_INCREMENT,
  `billing_address` varchar(320) CHARACTER SET latin1 NOT NULL,
  `shipping_address` varchar(320) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `last_name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(320) CHARACTER SET latin1 NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 NOT NULL,
  `order_history` varchar(320) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Database: `company`
--
CREATE DATABASE IF NOT EXISTS `company` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `company`;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id_employee` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `sex` enum('f','m','o') NOT NULL,
  `department` varchar(30) NOT NULL,
  `date_hired` date NOT NULL,
  `salary` int(8) NOT NULL,
  PRIMARY KEY (`id_employee`)
) ENGINE=InnoDB AUTO_INCREMENT=992 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `first_name`, `last_name`, `sex`, `department`, `date_hired`, `salary`) VALUES
(1, 'Igor', 'MARTY', 'm', 'CEO', '2010-07-05', 400),
(350, 'Jean-pierre', 'Laborde', 'm', 'direction', '1999-12-09', 5100),
(388, 'Clement', 'Gallet', 'm', 'commercial', '2000-01-15', 2400),
(415, 'Thomas', 'Winter', 'm', 'commercial', '2000-05-03', 3650),
(417, 'Chloe', 'Dubar', 'f', 'production', '2001-09-05', 2000),
(491, 'Elodie', 'Fellier', 'f', 'assistant', '2002-02-22', 1700),
(509, 'Fabrice', 'Grand', 'm', 'comptabilite', '2003-02-20', 2000),
(547, 'Melanie', 'Collier', 'f', 'commercial', '2004-09-08', 4200),
(592, 'Laura', 'Blanchet', 'f', 'direction', '2005-06-09', 4600),
(627, 'Guillaume', 'Miller', 'm', 'commercial', '2006-07-02', 2000),
(655, 'Celine', 'Perrin', 'f', 'commercial', '2006-09-10', 2800),
(699, 'Julien', 'Cottet', 'm', 'Marketing', '2007-01-18', 2100),
(701, 'Mathieu', 'Vignal', 'm', 'IT', '2008-12-03', 2100),
(739, 'Thierry', 'Desprez', 'm', 'assistant', '2009-11-17', 1600),
(780, 'Amandine', 'Thoyer', 'f', 'marketing', '2010-01-23', 1600),
(802, 'Damien', 'Durand', 'm', 'IT', '2010-07-05', 2350),
(854, 'Daniel', 'Chevel', 'm', 'IT', '2011-09-28', 1800),
(876, 'Nathalie', 'Martin', 'f', 'juridique', '2012-01-12', 3300),
(900, 'Benoit', 'Lagarde', 'm', 'production', '2013-01-03', 650),
(933, 'Emilie', 'Sennard', 'f', 'commercial', '2014-09-11', 1900),
(990, 'Stephanie', 'Lafaye', 'f', 'assistant', '2015-06-02', 1875),
(991, 'Sandra', 'Pimenta Da Silva', 'f', 'juridique', '2019-06-19', 5100);
--
-- Database: `library`
--
CREATE DATABASE IF NOT EXISTS `library` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `library`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id_book` int(3) NOT NULL AUTO_INCREMENT,
  `author` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_book`, `author`, `title`) VALUES
(101, 'GUY DE MAUPASSANT', 'Une Vie'),
(102, 'GUY DE MAUPASSAN', 'Bel Ami'),
(103, 'VICTOR HUGO', 'Les Misérables'),
(104, 'VICTOR HUGO', 'Notre Dame de Paris'),
(105, 'HERGER', 'Tintin au Pays de l\'Or Luxembourgeois');

-- --------------------------------------------------------

--
-- Table structure for table `borrowed`
--

DROP TABLE IF EXISTS `borrowed`;
CREATE TABLE IF NOT EXISTS `borrowed` (
  `id_borrowed` int(3) NOT NULL AUTO_INCREMENT,
  `id_borrower` int(3) NOT NULL,
  `id_book` int(3) NOT NULL,
  `date_borrowed` date NOT NULL,
  `date_returned` date DEFAULT NULL,
  PRIMARY KEY (`id_borrowed`),
  KEY `id_book` (`id_book`),
  KEY `id_borrower` (`id_borrower`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowed`
--

INSERT INTO `borrowed` (`id_borrowed`, `id_borrower`, `id_book`, `date_borrowed`, `date_returned`) VALUES
(1, 1, 102, '2017-12-17', '2017-12-18'),
(2, 2, 101, '2017-12-18', '2017-12-20'),
(3, 3, 105, '2018-12-19', '2018-12-22'),
(4, 4, 103, '2018-12-19', '2018-12-22'),
(5, 1, 104, '2018-12-19', '2018-12-28'),
(6, 2, 105, '2019-03-20', '2019-03-26'),
(7, 3, 105, '2019-06-13', NULL),
(8, 2, 102, '2019-06-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `borrowers`
--

DROP TABLE IF EXISTS `borrowers`;
CREATE TABLE IF NOT EXISTS `borrowers` (
  `id_borrower` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(10) NOT NULL,
  PRIMARY KEY (`id_borrower`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrowers`
--

INSERT INTO `borrowers` (`id_borrower`, `first_name`) VALUES
(1, 'Igor'),
(2, 'Goktag'),
(3, 'Nasser'),
(4, 'Diedon');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_borrowed`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `view_borrowed`;
CREATE TABLE IF NOT EXISTS `view_borrowed` (
`first_name` varchar(10)
,`title` varchar(50)
,`date_borrowed` date
,`date_returned` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_herger`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `view_herger`;
CREATE TABLE IF NOT EXISTS `view_herger` (
`author` varchar(30)
,`date_borrowed` date
,`date_returned` date
);

-- --------------------------------------------------------

--
-- Structure for view `view_borrowed`
--
DROP TABLE IF EXISTS `view_borrowed`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_borrowed`  AS  select `p`.`first_name` AS `first_name`,`b`.`title` AS `title`,`z`.`date_borrowed` AS `date_borrowed`,`z`.`date_returned` AS `date_returned` from ((`borrowers` `p` join `books` `b`) join `borrowed` `z`) where ((`p`.`id_borrower` = `z`.`id_borrower`) and (`b`.`id_book` = `z`.`id_book`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_herger`
--
DROP TABLE IF EXISTS `view_herger`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_herger`  AS  select `b`.`author` AS `author`,`a`.`date_borrowed` AS `date_borrowed`,`a`.`date_returned` AS `date_returned` from (`borrowed` `a` join `books` `b`) where ((`a`.`date_borrowed` = `a`.`date_returned`) and (`b`.`author` = `b`.`author`)) ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `borrowed`
--
ALTER TABLE `borrowed`
  ADD CONSTRAINT `borrowed_ibfk_1` FOREIGN KEY (`id_book`) REFERENCES `books` (`id_book`),
  ADD CONSTRAINT `borrowed_ibfk_2` FOREIGN KEY (`id_borrower`) REFERENCES `borrowers` (`id_borrower`);
--
-- Database: `moviedb`
--
CREATE DATABASE IF NOT EXISTS `moviedb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moviedb`;

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
CREATE TABLE IF NOT EXISTS `directors` (
  `director_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `country` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`director_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`director_id`, `first_name`, `last_name`, `date_of_birth`, `country`) VALUES
(1, 'David', 'Fincher', '1962-08-28', 'USA'),
(2, 'George', 'Lucas', '1946-12-18', 'USA'),
(3, 'Dan', 'Gilroy', '1959-06-24', 'USA'),
(4, 'Peter', 'Jackson', '1961-10-31', 'New Zealand');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) CHARACTER SET latin1 NOT NULL,
  `release_year` year(4) DEFAULT NULL,
  `views` int(11) NOT NULL,
  `directorID` int(11) DEFAULT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `directorID` (`directorID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `release_year`, `views`, `directorID`) VALUES
(1, 'Fight Club', 1996, 1132145, 1),
(2, 'Star Wars', 1979, 2008554, 2),
(3, 'Nightcrawler', 2017, 113255, 3),
(4, 'Lord of the Rings', 2001, 5200112, 4),
(5, 'Star Wars', 2018, 12157518, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`directorID`) REFERENCES `directors` (`director_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
