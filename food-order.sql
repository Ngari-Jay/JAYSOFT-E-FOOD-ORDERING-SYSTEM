-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2024 at 02:21 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(4, 'Kithi Kombe', 'Administrator', 'e3afed0047b08059d0fada10f400c1e5'),
(48, 'Joshua Kithi', 'Jeshi', '21232f297a57a5a743894a0e4a801fc3'),
(64, 'jaysoft', 'Jeshi', 'b31df235e8aee38fd08600c353af2b52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(24, 'Sea Food', 'Food_category_337.jpg', 'Yes', 'Yes'),
(23, 'Meat', 'Food_category_540.jpg', 'Yes', 'Yes'),
(28, 'Vegetables', 'Food_category_848.jpg', 'No', 'Yes'),
(29, 'Rice', 'Food_category_208.jpg', 'No', 'Yes'),
(13, 'Dairy Products', 'Food_category_20.jpg', 'No', 'Yes'),
(15, 'Fruits', 'Food_category_551.png', 'Yes', 'Yes'),
(25, 'Eggs', 'Food_category_653.jpg', 'Yes', 'Yes'),
(32, 'Fruits3', 'Food_category_292.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

DROP TABLE IF EXISTS `tbl_food`;
CREATE TABLE IF NOT EXISTS `tbl_food` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(7, 'Millet', 'made at five star hotel', '400.00', 'Food-Name_656.jpg', 13, 'Yes', 'Yes'),
(6, 'Avocado', 'Freshy Fruits from Malindi', '200.00', 'Food-Name_168.png', 15, 'Yes', 'Yes'),
(8, 'ugali samaki', 'Kenyan Lunch', '150.00', 'Food-Name-691.png', 13, 'No', 'Yes'),
(9, 'Biriani', 'Basmati rice from palastin', '350.00', 'Food-Name-555.jpg', 24, 'Yes', 'Yes'),
(10, 'Boiled Fishs Stew', 'India and chinese fish with coconut ', '1000.00', 'Food-Name-144.jpg', 24, 'Yes', 'Yes'),
(11, 'Pig meat', 'From Shakahola Farm', '550.00', 'Food-Name-419.jpg', 23, 'No', 'Yes'),
(12, 'India Eggs', 'from turkey ', '250.00', 'Food-Name-31.jpg', 25, 'No', 'Yes'),
(13, 'Cabbage', 'from Limuru', '650.00', 'Food-Name-507.jpg', 24, 'No', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(12, 'Pig meat', '550.00', 5, '2750.00', '2021-01-24 12:56:50', 'On Delivery', 'Mary Santa', '0111513939', 'mary@gmail.com', 'Malindi'),
(9, 'ugali samaki', '150.00', 2, '300.00', '2021-01-24 11:26:56', 'On Delivery', 'Neema Glorian', '0111513939', 'glorianneema@gmail.com', 'Kilili'),
(16, 'Avocado', '200.00', 3, '600.00', '2007-02-24 03:04:43', 'Delivered', 'karisa gab', '0734343434', 'gab@com', 'barber shop '),
(13, 'Boiled Fishs Stew', '1000.00', 10, '10000.00', '2021-01-24 02:42:58', 'Cancelled', 'Systems Jaysoft', '0111513939', 'jaysoftsystems93@gmail.com', 'china');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
