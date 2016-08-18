-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 08:35 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_staff_type`
--

CREATE TABLE IF NOT EXISTS `admin_staff_type` (
  `staff_type_id` int(10) NOT NULL AUTO_INCREMENT,
  `staff_type_name` varchar(100) NOT NULL,
  `staff_type_desc` longtext NOT NULL,
  `staff_type_status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `staff_type_level` int(10) NOT NULL,
  `staff_type_min_level` int(10) NOT NULL,
  `staff_type_max_level` int(10) NOT NULL,
  `creation_access` enum('on','off') NOT NULL DEFAULT 'on',
  `created_date` date NOT NULL,
  `created_time` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_staff_type`
--

INSERT INTO `admin_staff_type` (`staff_type_id`, `staff_type_name`, `staff_type_desc`, `staff_type_status`, `staff_type_level`, `staff_type_min_level`, `staff_type_max_level`, `creation_access`, `created_date`, `created_time`) VALUES
(1, 'test', 'test', 'active', 3, 3, 2, 'on', '2016-08-16', '15:08:16'),
(2, 'test', 'test', 'active', 3, 3, 2, 'on', '2016-08-17', '01:08:35');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
