-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 02, 2021 at 12:03 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech1`
--

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

DROP TABLE IF EXISTS `patientregistration`;
CREATE TABLE IF NOT EXISTS `patientregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `NameofthePatient` varchar(50) NOT NULL,
  `ContactNumber` bigint(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `Income(per annum)` int(20) NOT NULL,
  `Selectthedisease` varchar(225) NOT NULL,
  `NationCardNo` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
