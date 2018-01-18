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
-- Table structure for table `temperature_sensor_last_24hours`
--

CREATE TABLE `temperature_sensor_last_24hours` (
  `day` float NOT NULL,
  `hour` int(10) NOT NULL,
  `value` float NOT NULL,
  `id_sensor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature_sensor_last_24hours`
--

INSERT INTO `temperature_sensor_last_24hours` (`day`, `hour`, `value`, `id_sensor`) VALUES
(1.02, 12, 19, 1),
(1.02, 13, 20, 1),
(1.02, 14, 20.7, 1),
(1.02, 15, 21.6, 1),
(1.02, 16, 22, 1),
(1.02, 17, 21.5, 1),
(1.02, 18, 20.6, 1),
(1.02, 19, 19.6, 1),
(1.02, 20, 19.2, 1),
(1.02, 21, 18.8, 1),
(1.02, 22, 18.4, 1),
(1.02, 23, 17.7, 1),
(1.02, 0, 16.2, 1),
(2.02, 1, 15.8, 1),
(2.02, 2, 15.7, 1),
(2.02, 3, 15.8, 1),
(2.02, 4, 15.2, 1),
(2.02, 5, 15.1, 1),
(2.02, 6, 15, 1),
(2.02, 8, 14.2, 1),
(2.02, 9, 15.1, 1),
(2.02, 10, 15.6, 1),
(2.02, 11, 15.5, 1),
(2.02, 12, 16.2, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
