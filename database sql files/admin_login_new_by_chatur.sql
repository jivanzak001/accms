-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 02:38 PM
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
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` double NOT NULL,
  `user_html_id` varchar(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `pincode` double NOT NULL,
  `admin_type` int(1) NOT NULL COMMENT '1=Super Admin | 2 = Admin',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0=Disable | 1=Enable',
  `last_login` datetime DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `user_base` double NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_id`, `user_html_id`, `user_name`, `email`, `password`, `first_name`, `last_name`, `dob`, `pincode`, `admin_type`, `status`, `last_login`, `created_date`, `user_base`) VALUES
(1, 1, '', '', 'superadmin@gmail.com', '0192023a7bbd73250516f069df18b500', 'Super', 'Admin', '2016-08-16', 0, 1, 1, '2016-08-16 16:15:26', '2016-08-16 00:00:00', 0),
(66, 1.60817080836e15, '1608-1708-0836-0001', 'chaturbhuj12', 'chaturbhuj12@gamil.com', '005f6761c9462181e2ff3c5eb7897d1f', 'chaturbhuj', 'chaturbhuj', '0000-00-00', 123456, 0, 0, NULL, '2016-08-17 08:08:28', 160817080836);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
