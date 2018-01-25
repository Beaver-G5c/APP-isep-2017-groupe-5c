-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 25 jan. 2018 à 15:29
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
-- Base de données :  `g5c`
--

-- --------------------------------------------------------

--
-- Structure de la table `alert_type`
--

DROP TABLE IF EXISTS `alert_type`;
CREATE TABLE IF NOT EXISTS `alert_type` (
  `id_alert_type` int(11) NOT NULL,
  `name_alert_type` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_alert_type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `alert_type`
--

INSERT INTO `alert_type` (`id_alert_type`, `name_alert_type`) VALUES
(1, 'SAV'),
(2, 'mel'),
(3, 'Site');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `ID_Avis` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) DEFAULT NULL,
  `Texte` text,
  `Date` date DEFAULT NULL,
  `ID_catalogue` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Avis`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`ID_Avis`, `Nom`, `Texte`, `Date`, `ID_catalogue`) VALUES
(1, 'Michel', 'J\'ai eu une experience mitigé avec ce capteur nottament car il m\'as explosé entre les doigts.', '2018-01-23', NULL),
(2, 'Ilan', 'J\'aime mon papa', '2018-01-23', 20),
(3, 'Ilan', 'Le meilleur INFP', '2018-01-23', 18),
(4, 'Ilan', 'je continue a ne pas croire la force de cet homme ', '2018-01-23', 18),
(5, 'Thibault PFEFFER', 'J\'aime', '2018-01-23', 22),
(6, 'Thibault', 'je pense que je vais avoir tort', '2018-01-23', 18),
(7, 'Teva', 'Ca marche ?', '2018-01-24', 22),
(8, 'Thibault', 'Vraiment top', '2018-01-25', 18);

-- --------------------------------------------------------

--
-- Structure de la table `capteurs`
--

DROP TABLE IF EXISTS `capteurs`;
CREATE TABLE IF NOT EXISTS `capteurs` (
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
-- Déchargement des données de la table `capteurs`
--

INSERT INTO `capteurs` (`nomdelasalle`, `id_insta`, `id_salle`, `type`, `id_capteur`, `valeur1`, `valeur2`, `actif`) VALUES
('cuisine', 2, 3, 1, 400, NULL, NULL, 0),
('salle de bain', 2, 4, 1, 103, NULL, NULL, 1),
('cuisine', 2, 4, 3, 43, NULL, NULL, 1),
('salon', 2, 52, 3, 64, NULL, NULL, 1),
('salle de bain', 2, 67, 2, 3, NULL, NULL, 0),
('couloir', 2, 2, 3, 5, 3, 14, 1),
('Chambre', 2, 1, 8, 54, 2, NULL, 1),
('blabla', 2, 23, 1, 454, NULL, NULL, 1),
('bla', 2, 76, 11, 564, 1, 1, 1),
('nom', 2, 32, 1, 43, NULL, NULL, 1);

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
  `ID_type` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `catalogue`
--

INSERT INTO `catalogue` (`ID`, `product_name`, `price`, `conso`, `description`, `ID_type`) VALUES
(20, 'Alexandre', 2, 324, 'Rate son tp d\'electro', 8),
(18, 'Teva', 34000, 2, 'wow', 3),
(24, 'CC57', 340, 34, 'capteur qui fait des trucs', 5);

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

DROP TABLE IF EXISTS `faq`;
CREATE TABLE IF NOT EXISTS `faq` (
  `id_faq` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  PRIMARY KEY (`id_faq`)
) ENGINE=InnoDB AUTO_INCREMENT=179 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `answer`, `category`) VALUES
(176, 'Comment accéder au mode nocturne?', 'Vous pouvez accéder à votre mode nocturne depuis la page \"gestion manuelle\".', ''),
(177, 'comment modif ?', 'HRHTG', '1'),
(178, 'KK', 'KK7', '2');

-- --------------------------------------------------------

--
-- Structure de la table `faq_categories`
--

DROP TABLE IF EXISTS `faq_categories`;
CREATE TABLE IF NOT EXISTS `faq_categories` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `faq_categories`
--

INSERT INTO `faq_categories` (`id_category`, `category_name`) VALUES
(1, 'Mon profil'),
(2, 'Ma maison ');

-- --------------------------------------------------------

--
-- Structure de la table `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `ID_home` int(11) NOT NULL AUTO_INCREMENT,
  `ID_user` int(11) NOT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  KEY `ID_home` (`ID_home`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `home`
--

INSERT INTO `home` (`ID_home`, `ID_user`, `adress`, `postal_code`, `town`) VALUES
(1, 0, NULL, NULL, NULL),
(2, 0, NULL, NULL, NULL),
(3, 0, NULL, NULL, NULL),
(4, 0, NULL, NULL, NULL),
(5, 0, NULL, NULL, NULL),
(6, 0, NULL, NULL, NULL),
(7, 0, NULL, NULL, NULL),
(8, 0, NULL, NULL, NULL),
(9, 0, NULL, NULL, NULL),
(10, 0, NULL, NULL, NULL),
(11, 0, '7 rue guenegaud', '75006', 'Paris'),
(12, 0, '5 rue Paul Mieille', '65000', 'Tarbes'),
(13, 0, '', '', ''),
(14, 0, '70 rue du Bac', '75007', 'Paris'),
(15, 0, '', '', ''),
(16, 0, '', '', ''),
(17, 0, '', '', ''),
(18, 0, '', '', ''),
(19, 0, '70 rue du Bac', '75007', 'Paris');

-- --------------------------------------------------------

--
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
(12, 81),
(29, NULL),
(963852, 83),
(75391, 84);

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
(1, 'plouuuuuu', '4245827');

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
  `notif_lvl` int(11) NOT NULL,
  `from_sav` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `notification`
--

INSERT INTO `notification` (`ID_notif`, `ID_user`, `notif_description`, `notif_date`, `notif_name`, `notif_statut`, `notif_type`, `notif_lvl`, `from_sav`) VALUES
(666, 1, 'Surprise', '2018-01-24 22:30:25', 'devine', 'En cours', 'inconnu', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `nomdelasalle` varchar(30) NOT NULL,
  `id_installation` int(10) NOT NULL,
  `id_salle` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`nomdelasalle`, `id_installation`, `id_salle`) VALUES
('test', 456, 2),
('salon', 456, 3),
('Salle de bain', 456, 4),
('pouloulou', 0, 5),
('zebi', 1222, 5),
('zaaaaaaai', 123, 5),
('zaaaaaaai', 123, 5),
('test', 0, 5),
('test', 0, 5),
('allo', 0, 5),
(';', 0, 5),
('pp', 456, 5),
('pppoo', 456, 6),
('pppoo', 456, 7),
('ppp', 456, 8),
('ppp', 456, 9),
('ca marcheeeeee', 456, 10),
('l', 122, 11),
('l', 456, 11),
('tjrs', 456, 15),
('testastos', 456, 16);

-- --------------------------------------------------------

--
-- Structure de la table `scenario`
--

DROP TABLE IF EXISTS `scenario`;
CREATE TABLE IF NOT EXISTS `scenario` (
  `scenario` int(11) NOT NULL AUTO_INCREMENT,
  `nom_scenario` varchar(255) NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `actif_quot` tinyint(1) NOT NULL,
  `id_insta` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `nomdelasalle` varchar(255) DEFAULT NULL,
  `id_capteur` int(11) DEFAULT NULL,
  PRIMARY KEY (`scenario`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `scenario`
--

INSERT INTO `scenario` (`scenario`, `nom_scenario`, `heure_debut`, `heure_fin`, `actif_quot`, `id_insta`, `type`, `nomdelasalle`, `id_capteur`) VALUES
(70, 'COUCOU', '06:39:00', '13:06:00', 1, 2, 1, 'cuisine', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `temperature_sensor_last_7days`
--

DROP TABLE IF EXISTS `temperature_sensor_last_7days`;
CREATE TABLE IF NOT EXISTS `temperature_sensor_last_7days` (
  `day` int(11) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temperature_sensor_last_7days`
--

INSERT INTO `temperature_sensor_last_7days` (`day`, `id_sensor`, `value`) VALUES
(1, 1, 18.2),
(2, 1, 18.9),
(3, 1, 15.4),
(4, 1, 16.6),
(5, 1, 18.8),
(6, 1, 19.2),
(7, 1, 17.4),
(8, 1, 17.7);

-- --------------------------------------------------------

--
-- Structure de la table `temperature_sensor_last_24hours`
--

DROP TABLE IF EXISTS `temperature_sensor_last_24hours`;
CREATE TABLE IF NOT EXISTS `temperature_sensor_last_24hours` (
  `day` float NOT NULL,
  `hour` int(10) NOT NULL,
  `value` float NOT NULL,
  `id_sensor` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temperature_sensor_last_24hours`
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

-- --------------------------------------------------------

--
-- Structure de la table `temperature_sensor_last_30days`
--

DROP TABLE IF EXISTS `temperature_sensor_last_30days`;
CREATE TABLE IF NOT EXISTS `temperature_sensor_last_30days` (
  `day` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `id_sensor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temperature_sensor_last_30days`
--

INSERT INTO `temperature_sensor_last_30days` (`day`, `value`, `id_sensor`) VALUES
(1, 18, 1),
(2, 19, 1),
(3, 15, 1),
(4, 17, 1),
(5, 19, 1),
(6, 19, 1),
(7, 17, 1),
(8, 18, 1),
(9, 18, 1),
(10, 19, 1),
(11, 17, 1),
(12, 18, 1),
(13, 14, 1),
(14, 12, 1),
(15, 10, 1),
(16, 11, 1),
(17, 14, 1),
(18, 16, 1),
(19, 16, 1),
(20, 15, 1),
(21, 15, 1),
(22, 16, 1),
(23, 16, 1),
(24, 16, 1),
(25, 17, 1),
(26, 16, 1),
(27, 16, 1),
(28, 15, 1),
(29, 15, 1),
(30, 15, 1),
(31, 15, 1);

-- --------------------------------------------------------

--
-- Structure de la table `temperature_sensor_last_hour`
--

DROP TABLE IF EXISTS `temperature_sensor_last_hour`;
CREATE TABLE IF NOT EXISTS `temperature_sensor_last_hour` (
  `id_sensor` int(11) NOT NULL,
  `minute` int(11) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `temperature_sensor_last_hour`
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

-- --------------------------------------------------------

--
-- Structure de la table `trame`
--

DROP TABLE IF EXISTS `trame`;
CREATE TABLE IF NOT EXISTS `trame` (
  `id_trame` int(11) NOT NULL,
  `type_trame` int(11) NOT NULL,
  `num_objet` int(11) NOT NULL,
  `type_requete` int(11) NOT NULL,
  `type_capteur` int(11) NOT NULL,
  `num_capteur` int(11) NOT NULL,
  `valeur` int(11) NOT NULL,
  `num_trame` int(11) NOT NULL,
  `checksum` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_device`
--

DROP TABLE IF EXISTS `type_device`;
CREATE TABLE IF NOT EXISTS `type_device` (
  `ID_type` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` text NOT NULL,
  PRIMARY KEY (`ID_type`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_device`
--

INSERT INTO `type_device` (`ID_type`, `Nom`) VALUES
(1, 'Luminosité'),
(2, 'Position angulaire'),
(3, 'Multifonction'),
(4, 'Detecteur de fumée'),
(5, 'Présence'),
(6, 'Capteur de contact'),
(7, 'Alarme'),
(8, 'Climatisation'),
(9, 'Fenetres'),
(10, 'Volets'),
(11, 'Réveil');

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
) ENGINE=MyISAM AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_user`, `name`, `email`, `password`, `phone_number`, `secret_question`, `secret_answer`, `account_creation_date`, `last_connection_date`, `is_connected`, `is_admin`, `admin_authorization`, `last_cgu_acceptance`) VALUES
(64, 'lucas', 'lucas@gmail.com', '$2y$10$TTtcYwGvrVZTWz/fPqUi/eN/je0rhQczFBgEDuvxprcRjNL.BbaOm', '85645566', 'qui est mon h&eacute;ros pr&eacute;f&eacute;r&eacute;', 'tintin', '2017-12-01 09:39:04', NULL, NULL, 1, 0, '2017-12-01 09:39:04'),
(76, '4', 'lklk@ddo.com', '$2y$10$V6kSxP46fEm7ar4qIweg3.9P88uxQdhhnvffRpfuWrREaANIFWJ0a', '4', 'lll', 'jjjj', '2018-01-04 15:25:34', NULL, NULL, 0, 0, '2018-01-04 15:25:34'),
(77, '5', 'lklk@ddo.com', '$2y$10$yPxKxHG4oNQq5TV.C9mkK.jAy2STsksvkVfx.wa2yOtyRrQzEh6s6', '5', '5', '5', '2018-01-04 15:26:42', NULL, NULL, 0, 0, '2018-01-04 15:26:42'),
(62, 'camille', 'camille@gmail.fr', '$2y$10$RO1G/40JDGLq1qmu9Mp.wetRVsVuT78FYU5BoXdJLkeh1wOWwZT6e', '588877777', 'quelle est la marque de ma premi&egrave;re voiture', 'renault', '2017-12-01 09:36:29', NULL, NULL, 0, 0, '2017-12-01 09:36:29'),
(79, 'p', 'thhuh@clou.com', '$2y$10$rNNGk/4xvwyj4DiufWeKou68O2xt0ilTh/pvbEfOXXJ8NLI6i/JqO', '5', 'ff', 'ff', '2018-01-07 18:30:32', NULL, NULL, 0, 0, '2018-01-07 18:30:32'),
(57, 't&eacute;va', 'teva.paquin@gmail.com', '$2y$10$sidPzrQWOFtNAZFh8TScbO0000ebF8Oasd5dfE2g30vTyRcsH/Zce', '0221144556', 'quel est mon animal pr&eacute;f&eacute;r&eacute;', 'suricates', '2017-12-01 09:30:04', '2017-12-01 09:31:39', 1, 0, 0, '2017-12-01 09:30:04'),
(58, 'Joanna', 'joanna@gmail.com', '$2y$10$ik6JnKH2/I/WJPe/QI2.V.2uTlryYu1VDzbB5vzTJ8ZGOx3Q30Poq', '0221144556', 'qui est la plus belle en ce miroir ', 'moi', '2017-12-01 09:31:00', NULL, NULL, 0, 0, '2017-12-01 09:31:00'),
(78, 'gina', 'lklk@ddo.com', '$2y$10$RGCjJLsdHYBSmXgiwbadZ.VRJo/DhWVNPiapShr4Uf1x.B0dn6gGW', 'rreee', '6', '6', '2018-01-04 15:27:25', NULL, NULL, 0, 0, '2018-01-04 15:27:25'),
(60, 'geoffrey', 'thibau@yahoo.fr', '$2y$10$YfuLs0z0hYetuta6xO189OXzQBdhCIfqIRqiI77wksKpPWOzgE8XW', '4555444778', 'quel est mon deuxieme prenom', 'charles', '2017-12-01 09:34:03', NULL, NULL, 0, 0, '2017-12-01 09:34:03'),
(61, 'seb', 'seb@laposte.net', '$2y$10$DkUmqI0kjnJJMeaz4gW4LOV75H9wlNWoZZ9re0j42oDmGBv5Mm7U6', '4555444778', 'quel est mon deuxieme prenom', 'charles', '2017-12-01 09:35:01', NULL, NULL, 0, 0, '2017-12-01 09:35:01'),
(83, 'Pfeffer', 't.pfeffer@laposte.net', '$2y$10$D/khFXNR2qm0huCwyVCtTu01GTvPfH2oHQzZTPkTJIjuocjj9kR/2', '78', 'kk', 'kk', '2018-01-25 11:27:38', '2018-01-25 12:23:46', 0, 0, 0, '2018-01-25 11:27:38'),
(84, 'Agnan', 'agnan@gmail.com', '$2y$10$CoOkHKOep5D6HrElFIBCDebmD8.2AYYgCjM6CgzA2VsazzEmN541e', '78', 'qui est mon meilleur ami', 'Nicolas', '2018-01-25 12:40:22', NULL, NULL, 0, 0, '2018-01-25 12:40:22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
