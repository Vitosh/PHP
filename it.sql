-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2015 at 02:56 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `languages`
--

-- --------------------------------------------------------

--
-- Table structure for table `it`
--

CREATE TABLE IF NOT EXISTS `it` (
  `Id` int(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `LearnedSince` date NOT NULL,
  `Level` int(20) NOT NULL,
  `MoneyMadeWithIt` decimal(20,0) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it`
--

INSERT INTO `it` (`Id`, `Name`, `LearnedSince`, `Level`, `MoneyMadeWithIt`) VALUES
(1, 'VBA', '2013-08-16', 3, 300),
(2, 'C#', '2013-08-16', 2, 5000),
(3, 'Visual Basic', '2014-04-16', 3, 250),
(4, 'Python', '2014-10-16', 3, 100),
(5, 'JavaScript', '2013-09-16', 3, 1300),
(6, 'PHP', '2013-03-16', 2, 200);
