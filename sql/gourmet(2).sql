-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2018 at 02:00 PM
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
  `u_id` varchar(25) NOT NULL,
  `r_id` int(11) NOT NULL,
  `qnty` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`u_id`,`r_id`,`date`),
  KEY `r_id` (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`u_id`, `r_id`, `qnty`, `start_time`, `end_time`, `date`) VALUES
('admin16423', 57, 1, '15:26:00', '17:26:00', '2018-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

DROP TABLE IF EXISTS `food`;
CREATE TABLE IF NOT EXISTS `food` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `type`) VALUES
(43, 'Veggie Supreme', 'veg'),
(42, 'Veggie Italiano', 'veg'),
(41, 'Veg Exotica', 'veg'),
(8, 'chiken paneer', 'nonveg'),
(49, 'PEPPER BARBECUE CHICKEN', 'nonveg'),
(10, 'tanduri chiken', 'nonveg'),
(11, 'pig', 'nonveg'),
(12, 'Chicken Biryani', 'nonveg'),
(13, 'Chicken Masala', 'nonveg'),
(14, 'Chicken Punjabi', 'nonveg'),
(15, 'Chicken Keema', 'nonveg'),
(16, 'Chicken Tikka Masala', 'nonveg'),
(17, 'Butter Chicken ', 'nonveg'),
(18, 'dal fried', 'veg'),
(19, 'Dal Makhni', 'Veg'),
(20, 'Aloo Gobhi', 'Veg'),
(21, 'Matar Paneer', 'Veg'),
(22, 'Shahi Paneer', 'Veg'),
(23, 'Choley Bhature', 'Veg'),
(24, 'Chilli Paneer', 'Veg'),
(25, 'Paneer Butter Masala', 'Veg'),
(26, 'Mushroom Masala', 'Veg'),
(27, 'Paneer Do Pyaza', 'Veg'),
(28, 'Roti', 'Veg'),
(29, 'Tandoori Roti', 'Veg'),
(30, 'Tandoori Lacha Paratha', 'Veg'),
(31, 'Paneer Tikka Masala', 'Veg'),
(32, 'Kulcha', 'Veg'),
(33, 'Papad Masala', 'Veg'),
(34, 'Rice', 'Veg'),
(35, 'Rice Fry', 'Veg'),
(36, 'Hyderabadi Biriyani', 'Veg'),
(37, 'Veg Chowmein', 'Veg'),
(38, 'French Fries', 'Veg'),
(39, 'Veg Burger', 'Veg'),
(40, 'Plain Maggi', 'Veg'),
(44, 'Paneer Soya Supreme', 'veg'),
(45, 'Farmers Pick', 'veg'),
(46, 'Veggie Lover', 'veg'),
(47, 'Tandoori Paneer', 'veg'),
(48, 'Country Feast', 'veg'),
(50, 'CHICKEN TIKKA', 'nonveg'),
(51, 'CHICKEN SAUSAGE', 'nonveg'),
(52, 'Chicken Golden Delight', 'nonveg'),
(53, 'Non Veg Supreme', 'nonveg'),
(54, 'CHICKEN FIESTA', 'nonveg'),
(55, 'PEPPER BARBECUE & ONION', 'nonveg'),
(56, 'PERI-PERI CHICKEN', 'nonveg'),
(57, 'PEPPER BARBECUE CHICKEN', 'nonveg'),
(58, 'Black Forest Ham', 'veg'),
(59, 'Black Forest Ham', 'veg'),
(60, 'Meatball Marinara', 'nonveg'),
(61, 'Oven Roasted Chicken', 'nonveg'),
(62, 'Rotisserie-Style Chicken', 'nonveg'),
(63, 'Chipotle Southwest Steak & Cheese', 'veg'),
(64, 'Savory Rotisserie-Style Chicken Caesar', 'nonveg'),
(65, 'Turkey, Bacon & Guacamole', 'nonveg');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

DROP TABLE IF EXISTS `owner`;
CREATE TABLE IF NOT EXISTS `owner` (
  `u_id` varchar(25) NOT NULL,
  `r_id` int(11) NOT NULL,
  PRIMARY KEY (`u_id`,`r_id`),
  KEY `r_id` (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`u_id`, `r_id`) VALUES
('janglee', 1),
('janglee', 2),
('janglee', 3),
('janglee', 6),
('mota', 2),
('mota', 4),
('mota', 5),
('oola', 1),
('oola', 2),
('oola', 4);

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE IF NOT EXISTS `restaurant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile_no` bigint(11) DEFAULT NULL,
  `star` float DEFAULT '3',
  `city` varchar(20) DEFAULT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `veg_nonveg` varchar(6) DEFAULT 'veg',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`,`address`,`mobile_no`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `address`, `mobile_no`, `star`, `city`, `open_time`, `close_time`, `veg_nonveg`) VALUES
(48, 'RH Chicken POint', 'Main Road, Sadar Bazzar, Cantt', 1174022111, 4.6, 'Jabalpur', '11:00:00', '23:00:00', 'nonveg'),
(49, 'Roopali restaurant', '\r\n1994, Napier Town, Opposite Jyoti Cinema, Naudra Bridge', 8818895529, 3.2, 'Jabalpur', '12:00:00', '23:00:00', 'veg'),
(50, 'Smoky Brew', '603, Third Floor, Jagat Mall, Gorakhpur Main Road, Hathital', 8103663707, 3.9, 'Jabalpur', '12:00:00', '23:00:00', 'both'),
(51, 'Old School Cafe', '1085, Near St. Paul School, 4th Bridge, Napier Town', 8982826561, 2.6, 'Jabalpur', '11:00:00', '21:00:00', 'veg'),
(52, 'Pizza Hut', '\r\n361 & 361A, Russel Chowk, Anand Talkies Road, Napier Town', 7613988398, 3.8, 'Jabalpur', '11:00:00', '23:00:00', 'both'),
(53, 'Subway', '361/1, Beside Jabalpur Hospital, Russel Chowk, Napier Town', 7400666622, 4.1, 'Jabalpur', '11:00:00', '23:00:00', 'nonveg'),
(55, 'Crystal', '\r\nOpposite Hawabagh Church Narmada-Gwarighat Road, Rampur', 7614084444, 3.2, 'Jabalpur', '11:00:00', '23:59:00', 'veg'),
(56, 'Domino\'s', 'Russell Crossing, Napier Town', 9256494322, 4, 'Jabalpur', '11:00:00', '23:00:00', 'nonveg'),
(57, 'Domino\'s', 'Left Side Of Ground Floor, Plot 128 & 129, Laxmi Pur, Vijay Nagar', 945523456, 4.3, 'Jabalpur', '11:00:00', '23:00:00', 'both'),
(58, 'Domino\'s', 'South Avenue Mall, Narmada Road, Rampur', 18602100000, 2.6, 'Jabalpur', '11:00:00', '23:00:00', 'both'),
(59, 'Riyaz Hotel', '993, Badi Omti, Napier Town', 7614925555, 3, 'Jabalpur', '11:00:00', '23:00:00', 'both');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

DROP TABLE IF EXISTS `seats`;
CREATE TABLE IF NOT EXISTS `seats` (
  `r_id` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `serves`
--

DROP TABLE IF EXISTS `serves`;
CREATE TABLE IF NOT EXISTS `serves` (
  `r_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `star` float NOT NULL DEFAULT '3',
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT '0',
  PRIMARY KEY (`r_id`,`f_id`),
  KEY `f_id` (`f_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serves`
--

INSERT INTO `serves` (`r_id`, `f_id`, `star`, `price`, `discount`) VALUES
(52, 51, 3, 120, 0),
(52, 50, 4, 120, 0),
(52, 49, 3, 120, 0),
(52, 48, 3, 120, 0),
(52, 47, 3, 120, 20),
(52, 46, 3, 120, 20),
(52, 45, 4, 120, 20),
(52, 44, 4, 120, 20),
(52, 43, 3, 120, 20),
(52, 42, 4, 120, 20),
(52, 41, 3, 120, 0),
(55, 39, 5, 60, 10),
(55, 35, 5, 90, 10),
(55, 34, 4, 75, 10),
(55, 33, 4, 20, 0),
(55, 31, 5, 200, 10),
(55, 30, 4, 45, 10),
(55, 29, 4, 20, 0),
(55, 28, 5, 15, 10),
(55, 27, 5, 150, 10),
(55, 26, 5, 150, 10),
(55, 25, 5, 150, 10),
(55, 24, 3, 160, 10),
(55, 22, 5, 150, 10),
(55, 21, 4, 60, 0),
(55, 20, 3, 100, 10),
(49, 39, 5, 60, 10),
(49, 35, 5, 90, 10),
(49, 34, 4, 75, 10),
(49, 33, 4, 20, 0),
(49, 31, 5, 200, 10),
(49, 30, 4, 45, 10),
(49, 29, 4, 20, 0),
(49, 24, 3, 160, 10),
(49, 26, 5, 150, 10),
(49, 25, 5, 150, 10),
(49, 28, 5, 15, 10),
(49, 22, 5, 150, 10),
(49, 21, 4, 60, 0),
(49, 20, 3, 100, 10),
(49, 19, 4, 70, 0),
(49, 18, 3, 150, 10),
(48, 26, 3, 140, 30),
(48, 28, 4, 20, 10),
(48, 27, 4, 200, 30),
(48, 21, 4, 150, 30),
(48, 20, 3, 100, 30),
(48, 18, 4, 100, 30),
(48, 17, 4, 160, 0),
(48, 16, 5, 230, 30),
(48, 15, 4, 250, 40),
(48, 14, 4, 220, 10),
(48, 13, 3, 180, 20),
(48, 12, 4, 200, 30),
(56, 52, 4, 120, 20),
(56, 53, 3, 120, 20),
(56, 54, 4, 120, 20),
(56, 55, 4, 120, 20),
(56, 56, 3, 120, 20),
(56, 57, 3, 120, 20),
(56, 49, 3, 120, 0),
(56, 50, 4, 120, 0),
(56, 51, 3, 120, 0),
(59, 20, 3, 100, 10),
(59, 21, 4, 60, 0),
(59, 22, 5, 150, 10),
(59, 24, 3, 160, 10),
(59, 25, 5, 150, 10),
(59, 26, 5, 150, 10),
(59, 27, 5, 150, 10),
(59, 28, 5, 15, 10),
(59, 29, 4, 20, 0),
(59, 30, 4, 45, 10),
(59, 31, 5, 200, 10),
(59, 33, 4, 20, 0),
(59, 34, 4, 75, 10),
(59, 35, 5, 90, 10),
(59, 39, 5, 60, 10),
(59, 49, 3, 120, 0),
(59, 50, 4, 120, 0),
(59, 51, 3, 120, 0),
(53, 58, 4, 150, 0),
(53, 60, 4, 130, 0),
(53, 61, 5, 170, 0),
(53, 62, 4, 180, 0),
(53, 63, 4, 200, 0),
(53, 64, 4, 100, 0),
(53, 55, 3, 150, 0),
(50, 20, 3, 100, 10),
(50, 21, 4, 60, 0),
(50, 22, 5, 150, 10),
(50, 24, 3, 160, 10),
(50, 25, 5, 150, 10),
(50, 26, 5, 150, 10),
(50, 27, 5, 150, 10),
(50, 28, 5, 15, 10),
(50, 29, 4, 20, 0),
(50, 30, 4, 45, 10),
(50, 31, 5, 200, 10),
(50, 33, 4, 20, 0),
(50, 34, 4, 75, 10),
(50, 35, 5, 90, 10),
(50, 39, 5, 60, 10),
(50, 17, 4, 160, 0),
(50, 16, 5, 230, 30),
(50, 15, 4, 250, 40),
(50, 14, 4, 220, 10),
(50, 13, 3, 180, 20),
(50, 12, 4, 200, 30),
(51, 20, 3, 100, 10),
(51, 21, 4, 60, 0),
(51, 22, 5, 150, 10),
(51, 24, 3, 160, 10),
(51, 25, 5, 150, 10),
(51, 26, 5, 150, 10),
(51, 27, 5, 150, 10),
(51, 28, 5, 15, 10),
(51, 29, 4, 20, 0),
(51, 30, 4, 45, 10),
(51, 31, 5, 200, 10),
(51, 33, 4, 20, 0),
(51, 34, 4, 75, 10),
(51, 35, 5, 90, 10),
(51, 39, 5, 60, 10),
(57, 45, 4, 120, 20),
(57, 46, 3, 120, 20),
(57, 47, 3, 120, 20),
(57, 48, 3, 120, 0),
(57, 49, 3, 120, 0),
(57, 50, 4, 120, 0),
(57, 51, 3, 120, 0),
(57, 52, 4, 120, 20),
(57, 53, 3, 120, 20),
(57, 54, 4, 120, 20),
(57, 55, 4, 120, 20),
(57, 56, 3, 120, 20),
(57, 57, 3, 120, 20),
(58, 45, 4, 120, 20),
(58, 46, 3, 120, 20),
(58, 47, 3, 120, 20),
(58, 48, 3, 120, 0),
(58, 51, 3, 120, 0),
(58, 52, 4, 120, 20),
(58, 53, 3, 120, 20),
(58, 54, 4, 120, 20),
(58, 55, 4, 120, 20),
(58, 56, 3, 120, 20),
(58, 57, 3, 120, 20),
(58, 49, 3, 120, 0),
(58, 50, 4, 120, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` varchar(25) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pswd` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `mobile_no` bigint(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mobile_no` (`mobile_no`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pswd`, `city`, `mobile_no`) VALUES
('janglee', NULL, '123', 'jabalpur', 1234567890),
('oola', NULL, '123', 'jabalpur', 1234567891),
('mota', NULL, '123', 'jabalpur', 1234567892),
('ad123', NULL, 'ad123', 'dasfasdf', 1242342312),
('', NULL, 'admin', 'sdfgsdgf', 1234567899),
('kd', 'kasbjd', '123', 'qwde', 123456798),
('admin16423', 'admin16423', 'admin', 'jabalpur', 8299337188);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
