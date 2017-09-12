-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2017 at 05:53 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-2+ubuntu16.04.1+deb.sury.org+4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codered`
--

-- --------------------------------------------------------

--
-- Table structure for table `MasterDB`
--

CREATE TABLE `MasterDB` (
  `id` int(255) NOT NULL,
  `CustomerName` varchar(255) NOT NULL,
  `Geo` text NOT NULL,
  `BusinessImpact` text NOT NULL,
  `sr` int(11) NOT NULL,
  `ProductVersion` varchar(255) NOT NULL,
  `ProblemDescription` varchar(255) NOT NULL,
  `CustomerTemp` text NOT NULL,
  `BugID` varchar(255) NOT NULL,
  `ProductionDown` text NOT NULL,
  `LastUpdate` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `MasterDB`
--
DELIMITER $$
CREATE TRIGGER `SR_Trigger` BEFORE INSERT ON `MasterDB` FOR EACH ROW BEGIN if new.sr <71000000 THEN SIGNAL SQLSTATE '02000' SET MESSAGE_TEXT = 'Warning: Invalid SR Number Entered!'; end if; if new.sr >81000000 THEN SIGNAL SQLSTATE '02000' SET MESSAGE_TEXT = 'Invalid SR Number Entered!'; end if; end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `UpdateDB`
--

CREATE TABLE `UpdateDB` (
  `sr` int(11) NOT NULL,
  `NewUpdate` text NOT NULL,
  `CreatedDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `MasterDB`
--
ALTER TABLE `MasterDB`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sr` (`sr`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `UpdateDB`
--
ALTER TABLE `UpdateDB`
  ADD UNIQUE KEY `CreatedDate` (`CreatedDate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `MasterDB`
--
ALTER TABLE `MasterDB`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
