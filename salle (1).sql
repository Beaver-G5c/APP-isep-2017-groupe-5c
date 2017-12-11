-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2017 at 01:16 PM
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
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `nomdelasalle` varchar(255) NOT NULL,
  `ID` int(10) NOT NULL,
  `taillesalle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`nomdelasalle`, `ID`, `taillesalle`) VALUES
('salon', 4, 0),
('salle de bain ', 4, 0),
('test', 4, 0),
('sutersx', 4, 0),
('vdxbx', 4, 0),
('fes', 4, 0),
('fe', 4, 0),
('nonon', 4, 0),
('fd', 4, 0),
('e', 4, 0),
('de', 4, 0),
('fe', 4, 0),
('salle 3 bain', 155, 0),
('salle de l\'espoir', 1665, 0),
('testtest', 125, 14),
('Salle à Malekoum', 122, 18);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
