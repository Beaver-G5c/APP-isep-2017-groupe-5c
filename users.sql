-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 déc. 2017 à 08:40
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
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_user`, `name`, `email`, `password`, `phone_number`, `secret_question`, `secret_answer`, `account_creation_date`, `last_connection_date`, `is_connected`, `is_admin`, `admin_authorization`, `last_cgu_acceptance`) VALUES
(65, 'maxime', 'maxneymon@gmail.com', '$2y$10$VG9arPZnqbc.eKJ7u0OJO.EqaJaG245k.Xui7L948nz7gP8nlNSZ2', '85645566', 'comment s\'appelle ma m&egrave;re ', 'marie', '2017-12-01 09:39:53', NULL, NULL, 0, 0, '2017-12-01 09:39:53'),
(64, 'lucas', 'lucas@gmail.com', '$2y$10$mIKmwUUyFUNP/z.a6d3VBucJvKXLZ48j70rIOL2N2FNFN6IKhpq0W', '85645566', 'qui est mon h&eacute;ros pr&eacute;f&eacute;r&eacute;', 'tintin', '2017-12-01 09:39:04', NULL, NULL, 0, 0, '2017-12-01 09:39:04'),
(63, 'antoine', 'antoinre@yahoo.fr', '$2y$10$rMcaY1PHFJ9lOEIRp1Qex.bY.Mi5U/GK5UpgrHEf7WmLmPuu/l.cO', '899554555', 'quelle est la marque de ma premi&egrave;re voiture', 'renault', '2017-12-01 09:37:19', NULL, NULL, 0, 0, '2017-12-01 09:37:19'),
(62, 'camille', 'camille@gmail.fr', '$2y$10$RO1G/40JDGLq1qmu9Mp.wetRVsVuT78FYU5BoXdJLkeh1wOWwZT6e', '588877777', 'quelle est la marque de ma premi&egrave;re voiture', 'renault', '2017-12-01 09:36:29', NULL, NULL, 0, 0, '2017-12-01 09:36:29'),
(56, 'Jeanne', 'jeanne@chateauneuf.fr', '$2y$10$XolLVomCbiNgPfqMxDoruOlzpVwZ24NiD26MCUPmxdgKKyESokX1W', '0221144556', 'quel est mon plat pr&eacute;f&eacute;r&eacute;', 'les pates', '2017-12-01 09:28:58', NULL, NULL, 0, 0, '2017-12-01 09:28:58'),
(57, 't&eacute;va', 'teva.paquin@gmail.com', '$2y$10$sidPzrQWOFtNAZFh8TScbO0000ebF8Oasd5dfE2g30vTyRcsH/Zce', '0221144556', 'quel est mon animal pr&eacute;f&eacute;r&eacute;', 'suricates', '2017-12-01 09:30:04', '2017-12-01 09:31:39', 1, 0, 0, '2017-12-01 09:30:04'),
(58, 'Joanna', 'joanna@gmail.com', '$2y$10$ik6JnKH2/I/WJPe/QI2.V.2uTlryYu1VDzbB5vzTJ8ZGOx3Q30Poq', '0221144556', 'qui est la plus belle en ce miroir ', 'moi', '2017-12-01 09:31:00', NULL, NULL, 0, 0, '2017-12-01 09:31:00'),
(59, 'Thibaud', 'thibau@yahoo.fr', '$2y$10$dflCFiFF.qk4vHebWiUlW.iMM.DnBXl3ExWx5RgYXeMKfbCL9idi2', '4555444778', 'c\'est qui les meilleurs', 'c\'est nous', '2017-12-01 09:32:49', NULL, NULL, 0, 0, '2017-12-01 09:32:49'),
(60, 'geoffrey', 'thibau@yahoo.fr', '$2y$10$YfuLs0z0hYetuta6xO189OXzQBdhCIfqIRqiI77wksKpPWOzgE8XW', '4555444778', 'quel est mon deuxieme prenom', 'charles', '2017-12-01 09:34:03', NULL, NULL, 0, 0, '2017-12-01 09:34:03'),
(61, 'seb', 'seb@laposte.net', '$2y$10$DkUmqI0kjnJJMeaz4gW4LOV75H9wlNWoZZ9re0j42oDmGBv5Mm7U6', '4555444778', 'quel est mon deuxieme prenom', 'charles', '2017-12-01 09:35:01', NULL, NULL, 0, 0, '2017-12-01 09:35:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
//Ss