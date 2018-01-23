-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2018 at 10:55 AM
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
-- Table structure for table `temperature_sensor_last_hour`
--

CREATE TABLE `temperature_sensor_last_hour` (
  `id_sensor` int(11) NOT NULL,
  `minute` int(11) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature_sensor_last_hour`
--

INSERT INTO `temperature_sensor_last_hour` (`id_sensor`, `minute`, `value`) VALUES
(1, 0, 18),
(1, 1, 18),
(1, 2, 18),
(1, 3, 18.1),
(1, 4, 18.1),
(1, 5, 18.2),
(1, 6, 18.2),
(1, 7, 18.3),
(1, 8, 18.4),
(1, 9, 18.5),
(1, 10, 18.5),
(1, 11, 18.5),
(1, 12, 18.5),
(1, 13, 18.5),
(1, 14, 18.5),
(1, 15, 18.5),
(1, 16, 18.4),
(1, 17, 18.5),
(1, 18, 18.6),
(1, 19, 18.7),
(1, 20, 18.7),
(1, 21, 18.8),
(1, 22, 18.9),
(1, 23, 19),
(1, 24, 19),
(1, 25, 19.1),
(1, 26, 19.2),
(1, 27, 19.1),
(1, 28, 19.2),
(1, 29, 19.2),
(1, 30, 19.1),
(1, 31, 19.2),
(1, 32, 19.2),
(1, 33, 19.3),
(1, 34, 19.4),
(1, 35, 19.6),
(1, 36, 19.5),
(1, 37, 19.6),
(1, 38, 19.6),
(1, 39, 19.6),
(1, 40, 19.6),
(1, 41, 19.7),
(1, 42, 19.7),
(1, 43, 19.7),
(1, 44, 19.7),
(1, 45, 19.8),
(1, 46, 19.8),
(1, 47, 19.9),
(1, 48, 19.9),
(1, 49, 19.9),
(1, 50, 20),
(1, 51, 20),
(1, 52, 20),
(1, 53, 20),
(1, 54, 20),
(1, 55, 20),
(1, 56, 19.9),
(1, 57, 20),
(1, 58, 20),
(1, 59, 20),
(1, 60, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
