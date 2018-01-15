-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 jan. 2018 à 09:23
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app2`
--

-- --------------------------------------------------------

--
-- Structure de la table `catalogue`
--

DROP TABLE IF EXISTS `catalogue`;
CREATE TABLE IF NOT EXISTS `catalogue` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `conso` int(11) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `catalogue`
--

INSERT INTO `catalogue` (`ID`, `product_name`, `price`, `conso`, `description`) VALUES
(13, 'CC5430', 4430, 43002, 'un autre capteur'),
(8, 'Aymeric', 34302, 32, 'Florant');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
