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
-- Table structure for table `luminosity_sensor_last_hour`
--

CREATE TABLE `luminosity_sensor_last_hour` (
  `id_sensor` int(10) NOT NULL,
  `minute` int(5) NOT NULL,
  `value_lux` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luminosity_sensor_last_hour`
--

INSERT INTO `luminosity_sensor_last_hour` (`id_sensor`, `minute`, `value_lux`) VALUES
(1, 0, 65550),
(1, 1, 65000),
(1, 2, 64000),
(1, 3, 64500),
(1, 4, 66000),
(1, 5, 67000),
(1, 6, 65900),
(1, 7, 67000),
(1, 8, 98000),
(1, 9, 100000),
(1, 10, 97000),
(1, 11, 98000),
(1, 12, 98500),
(1, 13, 96000),
(1, 14, 94000),
(1, 15, 92000),
(1, 16, 94500),
(1, 17, 98000),
(1, 18, 101000),
(1, 19, 45000),
(1, 20, 40000),
(1, 21, 42000),
(1, 22, 42900),
(1, 23, 43700),
(1, 24, 44000),
(1, 25, 44700),
(1, 26, 43000),
(1, 27, 49000),
(1, 28, 50000),
(1, 29, 52000),
(1, 30, 49000),
(1, 31, 49800),
(1, 32, 48000),
(1, 33, 48200),
(1, 34, 48400),
(1, 35, 49250),
(1, 36, 49800),
(1, 37, 50000),
(1, 38, 51000),
(1, 39, 51800),
(1, 40, 51900),
(1, 41, 52400),
(1, 42, 52300),
(1, 43, 52400),
(1, 44, 52500),
(1, 45, 52900),
(1, 46, 53000),
(1, 47, 51000),
(1, 48, 51800),
(1, 49, 51900),
(1, 50, 52000),
(1, 1, 52500),
(1, 51, 52900),
(1, 52, 51800),
(1, 53, 51600),
(1, 54, 51800),
(1, 55, 51900),
(1, 56, 52000),
(1, 57, 53500),
(1, 58, 55600),
(1, 59, 53800);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
