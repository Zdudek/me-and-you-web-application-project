-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2016 at 06:16 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meandyou`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `userName` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `dateTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `userName1` varchar(30) NOT NULL,
  `userName2` varchar(30) NOT NULL,
  `matchCriteria` varchar(50) NOT NULL,
  `matchPercent` int(3) DEFAULT NULL,
  `dateTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `userName` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `phoneNumber` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `birthDate` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `st` varchar(30) NOT NULL,
  `zipCode` int(5) NOT NULL,
  `dateTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`userName`, `password`, `firstName`, `lastName`, `phoneNumber`, `gender`, `birthDate`, `address`, `city`, `st`, `zipCode`, `dateTimeStamp`) VALUES
('aprice5@wufoo.com', '7rWjXR', 'Adam', 'Price', '5555555560', 'Male', '1986-06-18', '34 Boon Dr', 'Allentown', 'NH', 3107, '2016-05-01 20:03:47'),
('bmills4@nbcnews.com', 'oNeamSXqBA', 'Betty', 'Mills', '5555555559', 'Female', '1983-07-15', '34 Fort Way', 'Trexlertown', 'GA', 3101, '2016-05-01 20:03:45'),
('jfowler8@51.la', 'bv4E969C', 'Joan', 'Fowler', '5555555563', 'Female', '1984-11-19', '32 Grass St', 'Hudson', 'NH', 3172, '2016-05-01 20:03:48'),
('khunt6@newyorker.com', 'fjiPPrZ1SUzB', 'Keith', 'Hunt', '5555555561', 'Male', '1989-01-22', '34 Frank St', 'Londonderry', 'VA', 3109, '2016-05-01 20:03:48'),
('lburke1@google.fr', 'iqNv9ciiOBg', 'Lawrence', 'Burke', '5555555556', 'Male', '1986-05-19', '34 City Rd', 'Bedford', 'MA', 3134, '2016-05-01 20:03:36'),
('mstone2@netscape.com', 'UJQ2gR2', 'Marie', 'Stone', '5555555557', 'Female', '1986-06-19', '34 Howard Dr', 'Hooksett', 'PA', 3178, '2016-05-01 20:03:39'),
('ncarroll7@drupal.org', 'M3Q8f9j', 'Nicole', 'Carroll', '5555555562', 'Female', '1982-03-09', '34 Teepee Dr', 'Merrimack', 'CO', 3104, '2016-05-01 20:03:48'),
('sriley0@eventbrite.com', 'Hbo9HfMcz9I1', 'Susan', 'Riley', '5555555555', 'Female', '1986-04-19', '34 Bank Dr', 'Manchester', 'NH', 3102, '2016-05-01 20:03:35'),
('tfuller3@microsoft.com', 'cnDVU1RJx', 'Tammy', 'Fuller', '5555555558', 'Female', '1985-10-19', '34 Tree Rd', 'Candia', 'OH', 3136, '2016-05-01 20:03:43'),
('twilliamson9@elegantthemes.com', 'BzmQiu', 'Todd', 'Williamson', '5555555564', 'Male', '1986-08-19', '50 Poppins Dr', 'Nashua', 'NH', 3123, '2016-05-01 20:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `userName` varchar(50) NOT NULL,
  `phone` int(9) NOT NULL,
  `dateTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `searches`
--

CREATE TABLE `searches` (
  `searchID` int(6) UNSIGNED NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userNameSearch` varchar(50) DEFAULT NULL,
  `firstName` varchar(30) DEFAULT NULL,
  `lastName` varchar(30) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `dateTimeStamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`userName`,`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD UNIQUE KEY `username_match` (`userName1`,`userName2`),
  ADD KEY `userName2` (`userName2`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`userName`),
  ADD KEY `first_name` (`firstName`),
  ADD KEY `last_name` (`lastName`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`userName`,`phone`),
  ADD KEY `phone_number` (`phone`);

--
-- Indexes for table `searches`
--
ALTER TABLE `searches`
  ADD PRIMARY KEY (`searchID`),
  ADD KEY `user_name` (`userName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `searches`
--
ALTER TABLE `searches`
  MODIFY `searchID` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `emails`
--
ALTER TABLE `emails`
  ADD CONSTRAINT `emails_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `person` (`userName`);

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_ibfk_1` FOREIGN KEY (`userName1`) REFERENCES `person` (`userName`),
  ADD CONSTRAINT `matches_ibfk_2` FOREIGN KEY (`userName2`) REFERENCES `person` (`userName`);

--
-- Constraints for table `phones`
--
ALTER TABLE `phones`
  ADD CONSTRAINT `phones_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `person` (`userName`);

--
-- Constraints for table `searches`
--
ALTER TABLE `searches`
  ADD CONSTRAINT `searches_ibfk_1` FOREIGN KEY (`userName`) REFERENCES `person` (`userName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
