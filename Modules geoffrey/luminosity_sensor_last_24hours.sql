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
-- Table structure for table `luminosity_sensor_last_24hours`
--

CREATE TABLE `luminosity_sensor_last_24hours` (
  `id_sensor` int(10) NOT NULL,
  `hour` int(10) NOT NULL,
  `value` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luminosity_sensor_last_24hours`
--

INSERT INTO `luminosity_sensor_last_24hours` (`id_sensor`, `hour`, `value`) VALUES
(1, 0, 90000),
(1, 1, 100000),
(1, 2, 98000),
(1, 3, 142000),
(1, 4, 167000),
(1, 5, 190000),
(1, 6, 192000),
(1, 7, 190000),
(1, 8, 180000),
(1, 9, 175000),
(1, 10, 140000),
(1, 11, 98000),
(1, 12, 92000),
(1, 13, 91000),
(1, 14, 72000),
(1, 15, 28000),
(1, 16, 21000),
(1, 17, 17000),
(1, 18, 2200),
(1, 19, 1100),
(1, 20, 1080),
(1, 21, 1085),
(1, 22, 1085),
(1, 23, 1087),
(1, 24, 1088);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luminosity_sensor_last_24hours`
--
ALTER TABLE `luminosity_sensor_last_24hours`
  ADD PRIMARY KEY (`hour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
