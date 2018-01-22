-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 22 jan. 2018 à 08:15
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `notification`
--

DROP TABLE IF EXISTS `notification`;
CREATE TABLE IF NOT EXISTS `notification` (
  `ID_notif` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `notif_description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notif_date` datetime NOT NULL,
  `notif_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notif_statut` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notif_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notif_lvl` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`ID_notif`, `ID_user`, `notif_description`, `notif_date`, `notif_name`, `notif_statut`, `notif_type`, `notif_lvl`) VALUES
(1, 1, 'Fondation de cette base de données.', '2018-01-18 09:41:44', 'Première notification', 'Achevée.', 'Mémorial.', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
