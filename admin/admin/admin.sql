-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 jan. 2018 à 13:35
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


-- Structure de la table `install_number`
--

DROP TABLE IF EXISTS `install_number`;
CREATE TABLE IF NOT EXISTS `install_number` (
  `install_number` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `install_number`
--

INSERT INTO `install_number` (`install_number`, `id_user`) VALUES
(44444, 25),
(255522, NULL),
(111111, 118),
(4440000, 80),
(22222, 94),
(1, 93),
(7, 96),
(9999, 75),
(7878, 113),
(8989, 117),
(123, 73),
(56, 74),
(2, 119),
(3, 120),
(4, 76),
(5, 77),
(6, 78),
(7, NULL),
(9, NULL),
(10, NULL),
(455, 79),
(12, 81),
(12, 81);

-- --------------------------------------------------------

--
-- Structure de la table `legal_notice`
--

DROP TABLE IF EXISTS `legal_notice`;
CREATE TABLE IF NOT EXISTS `legal_notice` (
  `ID` int(11) NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `body` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `legal_notice`
--

INSERT INTO `legal_notice` (`ID`, `title`, `body`) VALUES
(1, 'mentions1', 'mentionjignsifns');

-- --------------------------------------------------------


-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID_user` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `secret_question` varchar(255) DEFAULT NULL,
  `secret_answer` varchar(255) DEFAULT NULL,
  `account_creation_date` datetime DEFAULT NULL,
  `last_connection_date` datetime DEFAULT NULL,
  `is_connected` tinyint(1) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `admin_authorization` tinyint(1) DEFAULT NULL,
  `last_cgu_acceptance` datetime DEFAULT NULL,
  PRIMARY KEY (`ID_user`)
) ENGINE=MyISAM AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_user`, `name`, `email`, `password`, `phone_number`, `secret_question`, `secret_answer`, `account_creation_date`, `last_connection_date`, `is_connected`, `is_admin`, `admin_authorization`, `last_cgu_acceptance`) VALUES
(81, 't', 'thibault@poivre.eu', '$2y$10$3Ril/4EpK855erHdBVZaFeOpxBcB5oEd5IYgxCEQsi5J1SuNPWgdO', '56', 'kk', 'kk', '2018-01-08 13:55:23', NULL, NULL, 0, 0, '2018-01-08 13:55:23'),
(64, 'lucas', 'lucas@gmail.com', '$2y$10$mIKmwUUyFUNP/z.a6d3VBucJvKXLZ48j70rIOL2N2FNFN6IKhpq0W', '85645566', 'qui est mon h&eacute;ros pr&eacute;f&eacute;r&eacute;', 'tintin', '2017-12-01 09:39:04', NULL, NULL, 1, 0, '2017-12-01 09:39:04'),
(76, '4', 'lklk@ddo.com', '$2y$10$V6kSxP46fEm7ar4qIweg3.9P88uxQdhhnvffRpfuWrREaANIFWJ0a', '4', 'lll', 'jjjj', '2018-01-04 15:25:34', NULL, NULL, 0, 0, '2018-01-04 15:25:34'),
(77, '5', 'lklk@ddo.com', '$2y$10$yPxKxHG4oNQq5TV.C9mkK.jAy2STsksvkVfx.wa2yOtyRrQzEh6s6', '5', '5', '5', '2018-01-04 15:26:42', NULL, NULL, 0, 0, '2018-01-04 15:26:42'),
(62, 'camille', 'camille@gmail.fr', '$2y$10$RO1G/40JDGLq1qmu9Mp.wetRVsVuT78FYU5BoXdJLkeh1wOWwZT6e', '588877777', 'quelle est la marque de ma premi&egrave;re voiture', 'renault', '2017-12-01 09:36:29', NULL, NULL, 0, 0, '2017-12-01 09:36:29'),
(79, 'p', 'thhuh@clou.com', '$2y$10$rNNGk/4xvwyj4DiufWeKou68O2xt0ilTh/pvbEfOXXJ8NLI6i/JqO', '5', 'ff', 'ff', '2018-01-07 18:30:32', NULL, NULL, 0, 0, '2018-01-07 18:30:32'),
(57, 't&eacute;va', 'teva.paquin@gmail.com', '$2y$10$sidPzrQWOFtNAZFh8TScbO0000ebF8Oasd5dfE2g30vTyRcsH/Zce', '0221144556', 'quel est mon animal pr&eacute;f&eacute;r&eacute;', 'suricates', '2017-12-01 09:30:04', '2017-12-01 09:31:39', 1, 0, 0, '2017-12-01 09:30:04'),
(58, 'Joanna', 'joanna@gmail.com', '$2y$10$ik6JnKH2/I/WJPe/QI2.V.2uTlryYu1VDzbB5vzTJ8ZGOx3Q30Poq', '0221144556', 'qui est la plus belle en ce miroir ', 'moi', '2017-12-01 09:31:00', NULL, NULL, 0, 0, '2017-12-01 09:31:00'),
(78, 'gina', 'lklk@ddo.com', '$2y$10$RGCjJLsdHYBSmXgiwbadZ.VRJo/DhWVNPiapShr4Uf1x.B0dn6gGW', 'rr', '6', '6', '2018-01-04 15:27:25', NULL, NULL, 0, 0, '2018-01-04 15:27:25'),
(60, 'geoffrey', 'thibau@yahoo.fr', '$2y$10$YfuLs0z0hYetuta6xO189OXzQBdhCIfqIRqiI77wksKpPWOzgE8XW', '4555444778', 'quel est mon deuxieme prenom', 'charles', '2017-12-01 09:34:03', NULL, NULL, 0, 0, '2017-12-01 09:34:03'),
(61, 'seb', 'seb@laposte.net', '$2y$10$DkUmqI0kjnJJMeaz4gW4LOV75H9wlNWoZZ9re0j42oDmGBv5Mm7U6', '4555444778', 'quel est mon deuxieme prenom', 'charles', '2017-12-01 09:35:01', NULL, NULL, 0, 0, '2017-12-01 09:35:01');

-- --------------------------------------------------------


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


