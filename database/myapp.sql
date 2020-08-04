-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 04, 2020 at 11:46 AM
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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `pid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `uid`, `pid`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'medical'),
(2, 'hardware');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL,
  `price` varchar(10) NOT NULL,
  `quantity` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `sid`, `name`, `desc`, `price`, `quantity`) VALUES
(1, 3, 'aviral', 'its me, I\'m for sale', '1', 1),
(2, 2, 'aviral', 'its me, I\'m for sale', '1', 1),
(4, 3, 'aviral', 'its me, I\'m for sale', '10', 12),
(5, 2, 'aviral', 'its me, I\'m for sale', '11902', 188);

-- --------------------------------------------------------

--
-- Table structure for table `requirment`
--

DROP TABLE IF EXISTS `requirment`;
CREATE TABLE IF NOT EXISTS `requirment` (
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `sid` int(10) NOT NULL,
  `content` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requirment`
--

INSERT INTO `requirment` (`rid`, `uid`, `sid`, `content`, `name`, `phone`) VALUES
(1, 1, 3, 'some thing\r\n', 'aivral', '9911416415'),
(9, 1, 2, '', 'aivral', '9911416415'),
(11, 1, 1, 'nothing', 'aviral', '9911416415'),
(14, 1, 1, 'yo nigga ', 'aviral', '9911416415'),
(15, 1, 1, 'suck my dick plz', 'aviral sharma', '9911416415');

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
(1, 'xplore', 'a@gmail.com', 'delhi', 'nigga', 1, '66ff66', 'aviral', '9876543321', 'somewhere on earth'),
(2, 'aviral', 'aviral@ymailc.com', 'ghaziabad', 'aviralw', 1, 'ff0000', '', '', ''),
(3, 'shop3', 'a@gmail.com', 'ghaziabad', 'niggaw', 1, 'ff0000', '', '', ''),
(4, 'shop4', 'aviral@ymailc.com', 'ghaziabad', 'aviral', 1, '66ff66', '', '', ''),
(5, 'Aviral Sharma', 'shop@gmail.com', 'delhi', 'aviral', 1, '66ff66', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `phone` text,
  `location` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `phone`, `location`) VALUES
(1, 'aviral sharma', 'aviral@ymail.com', 'aviral', '9911416415', 'delhi'),
(2, 'aivral', 'aviral@ymal.com', 'aviral', '987654321', 'delhi'),
(3, 'Aviral Sharma', 'sharma_aviral@ymail.com', 'aviraal', '9911416415', 'ghaziabad'),
(6, 'Aviral Sharma', 'sharma_aviral@gamil.com', 'aviral', '9876554321', 'ghaziabad'),
(4, 'Aviral Sharma', 'sharma_aviral@gmail.com', 'aviral', '9911416415', 'ghaziabad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
