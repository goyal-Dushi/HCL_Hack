-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 17, 2020 at 03:39 PM
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
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

DROP TABLE IF EXISTS `shop`;
CREATE TABLE IF NOT EXISTS `shop` (
  `shop_id` int(10) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(50) NOT NULL,
  `shop_email` varchar(50) NOT NULL,
  `shop_location` varchar(100) NOT NULL,
  `shop_password` varchar(50) NOT NULL,
  `category` int(10) NOT NULL,
  `zone` varchar(10) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `owner_contact` varchar(10) NOT NULL,
  `shop_address` varchar(255) NOT NULL,
  PRIMARY KEY (`shop_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `shop_name`, `shop_email`, `shop_location`, `shop_password`, `category`, `zone`, `owner_name`, `owner_contact`, `shop_address`) VALUES
(1, 'xplore', 'a@gmail.com', 'delhi', 'nigga', 1, 'green', 'aviral', '9876543321', 'somehwhere on earth'),
(2, 'aviral', 'aviral@ymailc.com', 'ghaziabad', 'aviralw', 1, 'red', '', '', ''),
(3, 'shop3', 'a@gmail.com', 'ghaziabad', 'niggaw', 1, 'green', '', '', ''),
(4, 'shop4', 'aviral@ymailc.com', 'ghaziabad', 'aviral', 1, 'green', '', '', ''),
(5, 'Aviral Sharma', 'shop@gmail.com', 'delhi', 'aviral', 1, 'yellow', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
