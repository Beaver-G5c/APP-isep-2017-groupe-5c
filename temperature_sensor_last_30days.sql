-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2018 at 10:54 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `temperature_sensor_last_30days`
--

CREATE TABLE `temperature_sensor_last_30days` (
  `day` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `id_sensor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature_sensor_last_30days`
--

INSERT INTO `temperature_sensor_last_30days` (`day`, `value`, `id_sensor`) VALUES
(1, 18, 1),
(2, 19, 1),
(3, 15, 1),
(4, 17, 1),
(5, 19, 1),
(6, 19, 1),
(7, 17, 1),
(8, 18, 1),
(9, 18, 1),
(10, 19, 1),
(11, 17, 1),
(12, 18, 1),
(13, 14, 1),
(14, 12, 1),
(15, 10, 1),
(16, 11, 1),
(17, 14, 1),
(18, 16, 1),
(19, 16, 1),
(20, 15, 1),
(21, 15, 1),
(22, 16, 1),
(23, 16, 1),
(24, 16, 1),
(25, 17, 1),
(26, 16, 1),
(27, 16, 1),
(28, 15, 1),
(29, 15, 1),
(30, 15, 1),
(31, 15, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
