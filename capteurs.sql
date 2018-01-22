-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2018 at 10:22 AM
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
-- Database: `app2`
--

-- --------------------------------------------------------

--
-- Table structure for table `capteurs`
--

CREATE TABLE `capteurs` (
  `nomdelasalle` varchar(20) NOT NULL,
  `id_insta` int(11) NOT NULL,
  `id_salle` int(10) NOT NULL,
  `type` int(11) NOT NULL,
  `id_capteur` int(11) NOT NULL,
  `valeur1` int(11) DEFAULT NULL,
  `valeur2` int(11) DEFAULT NULL,
  `actif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capteurs`
--

INSERT INTO `capteurs` (`nomdelasalle`, `id_insta`, `id_salle`, `type`, `id_capteur`, `valeur1`, `valeur2`, `actif`) VALUES
('cuisine', 2, 3, 1, 400, NULL, NULL, 1),
('salle de bain', 2, 4, 1, 103, NULL, NULL, 1),
('cuisine', 2, 4, 3, 43, NULL, NULL, 0),
('salon', 2, 52, 3, 64, NULL, NULL, 0),
('salle de bain', 2, 67, 2, 3, NULL, NULL, 1),
('couloir', 2, 2, 3, 5, 3, 14, 1),
('Chambre', 2, 1, 8, 54, 2, NULL, 1),
('blabla', 2, 23, 1, 454, NULL, NULL, 1),
('bla', 2, 76, 11, 564, 1, 1, 1),
('nom', 2, 32, 1, 43, NULL, NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
