-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2020 at 01:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `ID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`ID`, `name`, `gender`) VALUES
(1, 'Tom Hanks', 'M'),
(2, 'Robin Wright', 'M'),
(3, 'Gary Sinise', 'M'),
(4, 'Elijah Wood', 'M'),
(5, 'Ian McKellen', 'M'),
(6, 'Viggo Mortensen', 'M'),
(7, 'John Travolta', 'M'),
(8, 'Uma Thurman', 'F'),
(9, 'Samuel L. Jackson', 'M'),
(10, 'Sylvester Stallone', 'M'),
(11, 'Brian Dennehy', 'M'),
(12, 'Richard Crenna', 'M'),
(13, 'Christopher Reeve', 'M'),
(14, 'Margot Kidder', 'F'),
(15, 'Gene Hackman', 'M'),
(16, 'Christian Bale', 'M'),
(17, 'Heath Ledger', 'M'),
(18, 'Aaron Eckhart', 'M'),
(19, 'Marlon Brando', 'M'),
(20, 'Al Pacino', 'M'),
(21, 'James Caan', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `ID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`ID`, `name`) VALUES
(1, 'Drama'),
(2, 'Romance'),
(3, 'Action'),
(4, 'Adventure'),
(5, 'Crime');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `ID` int(4) NOT NULL,
  `title` varchar(50) NOT NULL,
  `releaseYear` int(4) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `synopsis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`ID`, `title`, `releaseYear`, `poster`, `synopsis`) VALUES
(1, 'Forrest Gump', 1994, 'forrestgump.jpg', 'dghsdfh'),
(2, 'The Lord of the Rings: The Two Towers', 2002, 'thelordoftherings1.jpg', '0'),
(3, 'The Lord of the Rings: The Return of the King', 2003, 'thelordoftherings2.jpg', '....'),
(4, 'Pulp Fiction', 1994, 'pulpfiction.png', ''),
(5, 'First Blood ', 1985, 'firstblood.jpg', ''),
(6, 'Superman', 1978, 'superman.jpg', ''),
(7, 'The Dark Knight', 2008, 'thedarknight.jpg', ''),
(8, 'The Godfather', 1972, 'thegodfather.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `moviesactors`
--

CREATE TABLE `moviesactors` (
  `moviesID` int(4) NOT NULL,
  `actorsID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviesactors`
--

INSERT INTO `moviesactors` (`moviesID`, `actorsID`) VALUES
(1, 1),
(1, 2),
(1, 3),
(4, 7),
(4, 8),
(4, 9),
(2, 4),
(2, 5),
(2, 6),
(3, 4),
(3, 5),
(3, 6),
(5, 10),
(5, 11),
(5, 12),
(6, 13),
(6, 14),
(6, 15),
(8, 19),
(8, 20),
(8, 21);

-- --------------------------------------------------------

--
-- Table structure for table `moviescategorie`
--

CREATE TABLE `moviescategorie` (
  `moviesID` int(4) NOT NULL,
  `categorieID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moviescategorie`
--

INSERT INTO `moviescategorie` (`moviesID`, `categorieID`) VALUES
(1, 1),
(1, 2),
(2, 3),
(2, 1),
(2, 4),
(3, 3),
(3, 1),
(3, 4),
(4, 5),
(4, 1),
(5, 3),
(5, 4),
(6, 3),
(6, 4),
(7, 3),
(7, 5),
(8, 5),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `ID` int(4) NOT NULL,
  `userID` int(4) NOT NULL,
  `playlistName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `playlistmovies`
--

CREATE TABLE `playlistmovies` (
  `movieID` int(4) NOT NULL,
  `playlistID` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `passwordConfirmation` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `moviesactors`
--
ALTER TABLE `moviesactors`
  ADD KEY `c6` (`actorsID`),
  ADD KEY `c7` (`moviesID`);

--
-- Indexes for table `moviescategorie`
--
ALTER TABLE `moviescategorie`
  ADD KEY `c5` (`moviesID`),
  ADD KEY `c4` (`categorieID`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `c1` (`userID`);

--
-- Indexes for table `playlistmovies`
--
ALTER TABLE `playlistmovies`
  ADD KEY `c2` (`playlistID`),
  ADD KEY `c3` (`movieID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(4) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `moviesactors`
--
ALTER TABLE `moviesactors`
  ADD CONSTRAINT `c6` FOREIGN KEY (`actorsID`) REFERENCES `actors` (`ID`),
  ADD CONSTRAINT `c7` FOREIGN KEY (`moviesID`) REFERENCES `movies` (`ID`);

--
-- Constraints for table `moviescategorie`
--
ALTER TABLE `moviescategorie`
  ADD CONSTRAINT `c4` FOREIGN KEY (`categorieID`) REFERENCES `categorie` (`ID`),
  ADD CONSTRAINT `c5` FOREIGN KEY (`moviesID`) REFERENCES `movies` (`ID`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `c1` FOREIGN KEY (`userID`) REFERENCES `user` (`ID`);

--
-- Constraints for table `playlistmovies`
--
ALTER TABLE `playlistmovies`
  ADD CONSTRAINT `c2` FOREIGN KEY (`playlistID`) REFERENCES `playlist` (`ID`),
  ADD CONSTRAINT `c3` FOREIGN KEY (`movieID`) REFERENCES `movies` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
