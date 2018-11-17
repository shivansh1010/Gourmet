-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 17, 2018 at 09:58 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gourmet`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `U_ID` int(11) DEFAULT NULL,
  `R_ID` int(11) DEFAULT NULL,
  `SEATS_QNTY` int(11) DEFAULT NULL,
  `BOOK_TIME` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `FOOD_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) DEFAULT NULL,
  `TYPE` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`FOOD_ID`),
  KEY `FOOD_INDX` (`NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `O_ID` int(11) NOT NULL,
  `R_ID` int(11) NOT NULL,
  PRIMARY KEY (`O_ID`,`R_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `restaraunt`
--

DROP TABLE IF EXISTS `restaraunt`;
CREATE TABLE IF NOT EXISTS `restaraunt` (
  `REST_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  `ADDRESS` varchar(50) NOT NULL,
  `MOBILE_NUMBER` varchar(13) DEFAULT NULL,
  `STAR` int(11) DEFAULT NULL,
  `CITY` varchar(20) DEFAULT NULL,
  `OPEN_TIME` time NOT NULL,
  `CLOSE_TIME` time NOT NULL,
  `DISCOUNT` int(11) DEFAULT '0',
  `VEG_NONVEG` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`REST_ID`),
  KEY `REST_INDX` (`NAME`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `R_ID` int(11) NOT NULL,
  `TOTAL_SEATS` int(11) DEFAULT NULL,
  `AVAILABLE_SEATS` int(11) DEFAULT NULL,
  PRIMARY KEY (`R_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `serves`
--

DROP TABLE IF EXISTS `serves`;
CREATE TABLE IF NOT EXISTS `serves` (
  `R_ID` int(11) NOT NULL,
  `F_ID` int(11) NOT NULL,
  `STAR` int(11) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `DISCOUNT` int(11) DEFAULT '0',
  PRIMARY KEY (`R_ID`,`F_ID`),
  KEY `F_ID` (`F_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL,
  `PSWD` varchar(25) NOT NULL,
  `CITY` varchar(25) NOT NULL,
  `MOBILE_NUMBER` varchar(13) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `MOBILE_NUMBER` (`MOBILE_NUMBER`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
