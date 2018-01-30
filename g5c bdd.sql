-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 30, 2018 at 10:14 PM
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
-- Database: `g5c`
--

-- --------------------------------------------------------

--
-- Table structure for table `alert_type`
--

CREATE TABLE `alert_type` (
  `id_alert_type` int(11) NOT NULL,
  `name_alert_type` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alert_type`
--

INSERT INTO `alert_type` (`id_alert_type`, `name_alert_type`) VALUES
(1, 'SAV'),
(2, 'mel'),
(3, 'Site');

-- --------------------------------------------------------

--
-- Table structure for table `avis`
--

CREATE TABLE `avis` (
  `ID_Avis` int(11) NOT NULL,
  `Nom` varchar(255) DEFAULT NULL,
  `Texte` text,
  `Date` date DEFAULT NULL,
  `ID_catalogue` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `actif` int(11) NOT NULL,
  `nom_du_capteur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capteurs`
--

INSERT INTO `capteurs` (`nomdelasalle`, `id_insta`, `id_salle`, `type`, `id_capteur`, `valeur1`, `valeur2`, `actif`, `nom_du_capteur`) VALUES
('test', 125, 1, 1, 1233, NULL, NULL, 0, 'feg'),
('salon', 123, 1, 1, 1665, NULL, NULL, 0, 'capteur salon');

-- --------------------------------------------------------

--
-- Table structure for table `catalogue`
--

CREATE TABLE `catalogue` (
  `ID` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `conso` int(11) DEFAULT NULL,
  `description` text,
  `ID_type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catalogue`
--

INSERT INTO `catalogue` (`ID`, `product_name`, `price`, `conso`, `description`, `ID_type`) VALUES
(29, 'capteur de luminosit&eacute;', 25, 5, 'Tr&egrave;s bon capteur pour connecter vos lampes dans une pi&egrave;ce', 1),
(31, 'cc2650', 50, 8, 'Un capteur multifonction pour connecter une grande gamme d\'appareils', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id_faq` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id_faq`, `question`, `answer`, `category`) VALUES
(184, 'Comment changer mon adresse mail?', 'Vous pouvez changer votre adresse mail depuis l\'onglet profil.', '1');

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(256) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id_category`, `category_name`) VALUES
(1, 'Mon profil'),
(2, 'Ma maison ');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `ID_home` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
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
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `ID_text` int(11) NOT NULL,
  `homepage_text` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `homepage_title` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`ID_text`, `homepage_text`, `homepage_title`) VALUES
(1, 'Découvrez les merveilles de la maison connectée à travers un produit innovant ! La Domotique est la porte vers un nouveau monde, où vous êtes en mesure de contrôler tous les appareils de votre maison en quelques gestes. Prenez le contrôle, découvrez TOP®', 'Bienvenue sur TOP, un produit Domisep');

-- --------------------------------------------------------

--
-- Table structure for table `install_number`
--

CREATE TABLE `install_number` (
  `install_number` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `install_number`
--

INSERT INTO `install_number` (`install_number`, `id_user`) VALUES
(122, 127),
(124, NULL),
(123, 131),
(125, 132),
(126, 133),
(127, 134),
(128, NULL),
(129, NULL),
(130, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `legal_notice`
--

CREATE TABLE `legal_notice` (
  `ID` int(11) NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `body` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `legal_notice`
--

INSERT INTO `legal_notice` (`ID`, `title`, `body`) VALUES
(1, 'mentions légales Domisep', 'Les mentions légales d’un site internet\r\nQu’il s’agisse d’une boutique en ligne, d’un site d’informations ou d’un forum de discussion, les mentions légales sont obligatoires sur tout site Internet. Le but de celles-ci est de sécuriser tant les internautes que les administrateurs de sites. Elles donnent la possibilité aux utilisateurs de vérifier la fiabilité d’un site et renforcent ainsi sa crédibilité. Mais que doivent comporter ces informations obligatoires ? Concernent-elles tous les sites Internet ? Quels sont les risques ? Nous vous livrons ici un aperçu de ce que dit la loi ainsi que des modèles de mentions légales. \r\n\r\nCe que dit la loi\r\nLe développement de la Toile a entraîné une série de lois permettant de contrôler la diffusion d’informations et d’en identifier les auteurs.  La loi n°2004-575 du 21 juin 2004 pour la confiance dans l\'économie numérique a légiféré sur les informations obligatoires qu’un site Internet doit comporter et a été complétée plus tard par le décret du 9 mai 2007.\r\n\r\nD’après la loi, toute personne physique doit communiquer sur son identité. Ces informations sont importantes avant tout pour les boutiques en ligne, qui doivent être joignables. Aussi, les administrateurs de site doivent pouvoir être contactés en cas de litige. En général, ces mentions légales figurent dans le bas de page (footer) d’un site Internet, mais peuvent aussi figurer sur une page séparée. Elles peuvent être présentées en format HTML ou encore sur un PDF.   \r\n\r\nLes différents cas\r\n1. Les personnes physiques agissant à titre professionnel ont l’obligation de faire apparaître des mentions légales. C’est aussi le cas des blogs par exemple, sauf pour ceux à usage entièrement privé, n’entraînant aucun revenu. Voici les informations à y faire figurer :\r\n\r\nnom, prénom ;\r\nadresse du domicile ;\r\nnuméro de téléphone ;\r\nadresse email ;\r\nnom du directeur de la publication (pour les sites éditant des contenus éditoriaux) ;\r\nnom de l\'hébergeur, sa dénomination ou raison sociale, adresse de l\'hébergeur, numéro de téléphone ;\r\nnuméro de déclaration à la CNIL (Commission nationale de l’informatique et des libertés) si le site / blog n’est pas à caractère personnel.\r\nSi ces personnes sont assujetties aux formalités d’inscription au RCS (Registre du Commerce et des Sociétés) ou au répertoire des métiers, ils doivent mentionner les informations suivantes :\r\n\r\nnuméro d\'inscription au RCS.\r\n2. Les personnes morales doivent faire apparaître des informations supplémentaires :\r\n\r\nraison ou dénomination sociale ;\r\nadresse du siège social ;\r\nadresse e-mail de contact et ses coordonnées téléphoniques ;\r\nnom du directeur de publication ;\r\nnom du directeur de la publication (pour les sites éditant des contenus éditoriaux) ;\r\nnom de l\'hébergeur, sa dénomination ou raison sociale, son adresse de l\'hébergeur, son numéro de téléphone ;\r\nnuméro de déclaration à la CNIL (Commission nationale de l’informatique et des libertés) si le site / blog n’est pas à caractère personnel.\r\nDe même, si ces personnes sont assujetties aux formalités d’inscription au RCS (Registre du Commerce et des Sociétés) ou au répertoire des métiers, il faut rajouter :\r\n\r\nnuméro d\'inscription au RCS ;\r\nmontant du capital social.\r\nUn doute ? Le site Internet document juridique vous fournit un très bon modèle de mentions légales.\r\n\r\n \r\n\r\nPrésentation\r\nCes informations sont complétées par les conditions générales d’utilisation (CGU) pour les sites qui nécessitent des procédures d’identification telles que pour les boutiques en ligne. Voici les informations à y faire figurer :\r\n\r\nAccès au service (ex : utilisation d\'identifiants/mots de passe) ;\r\nPropriété intellectuelle (copyright) ;\r\nGestion des données personnelles, protection des données personnelles et cookie (qui fait parfois l\'objet d\'une page différente) ;\r\nLimites de responsabilité (notamment concernant les hyperliens).\r\n\r\nCe texte provient du site https://www.1and1.fr');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `ID_user` int(11) NOT NULL,
  `notif_description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notif_date` datetime NOT NULL,
  `notif_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notif_statut` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notif_type` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `notif_lvl` int(11) NOT NULL,
  `from_sav` int(1) NOT NULL,
  `ID_notif` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`ID_user`, `notif_description`, `notif_date`, `notif_name`, `notif_statut`, `notif_type`, `notif_lvl`, `from_sav`, `ID_notif`) VALUES
(0, '  Bienvenue sur Top, un produit Domisep. Contactez nous en cas de besoin!', '2018-01-30 20:58:34', 'Bienvenue', 'Non Trait�e', '1', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `nomdelasalle` varchar(30) NOT NULL,
  `id_installation` int(10) NOT NULL,
  `id_salle` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`nomdelasalle`, `id_installation`, `id_salle`) VALUES
('test', 125, 1),
('salon', 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `scenario`
--

CREATE TABLE `scenario` (
  `scenario` int(11) NOT NULL,
  `nom_scenario` varchar(255) NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `actif_quot` tinyint(1) NOT NULL,
  `id_insta` int(11) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `nomdelasalle` varchar(255) DEFAULT NULL,
  `nom_du_capteur` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `temperature_sensor_last_7days`
--

CREATE TABLE `temperature_sensor_last_7days` (
  `day` int(11) NOT NULL,
  `id_sensor` int(11) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature_sensor_last_7days`
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
-- Table structure for table `temperature_sensor_last_30days`
--

CREATE TABLE `temperature_sensor_last_30days` (
  `day` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `id_sensor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature_sensor_last_30days`
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
-- Table structure for table `temperature_sensor_last_hour`
--

CREATE TABLE `temperature_sensor_last_hour` (
  `id_sensor` int(11) NOT NULL,
  `minute` int(11) NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temperature_sensor_last_hour`
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
-- Table structure for table `trame`
--

CREATE TABLE `trame` (
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
-- Table structure for table `type_device`
--

CREATE TABLE `type_device` (
  `ID_type` int(11) NOT NULL,
  `Nom` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_device`
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_user` int(11) NOT NULL,
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
  `last_cgu_acceptance` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_user`, `name`, `email`, `password`, `phone_number`, `secret_question`, `secret_answer`, `account_creation_date`, `last_connection_date`, `is_connected`, `is_admin`, `admin_authorization`, `last_cgu_acceptance`) VALUES
(127, 'admin', 'admin@gmail.com', '$2y$10$Lmck3d6Q8hT5EpQctRQQNeUA8NHET7gqJZTwi/bEhNVITL8wqpFcq', '0670225598', 'Suis-je admin ou un utilisateur?', 'admin', '2018-01-30 20:57:04', '2018-01-30 23:07:40', 1, 1, 0, '2018-01-30 20:57:04'),
(131, 'user', 'user@gmail.com', '$2y$10$cNtJ.DP1DhHd2mZP/RM1duOVbwMp/SRwJMytImz2mkbiPnx71ZkuC', '0670225432', 'Meilleur groupe d\'APP?', 'g5c', '2018-01-30 21:41:13', '2018-01-30 23:07:14', 0, 0, 0, '2018-01-30 21:41:13'),
(129, 'geoffrey', 'geoff-c@hotmail.fr', '$2y$10$4hLsAIGq1vVQFHpWVgHbbOMWpZYPXx1XF44qJMdslpi4dKmYXtBWG', '0670228515', 'Ai-je besoin d\'une question secr&egrave;te?', 'non', '2018-01-30 21:35:59', NULL, NULL, 1, 0, '2018-01-30 21:35:59'),
(130, 'joanna', 'joanna@laposte.net', '$2y$10$l6Lcq5ak8grWXPAkfOTequEvVPaN4rxHb98.fwE.y7VjNa7jhXW3O', '06703355665', 'Meilleur joueur de foot de l\'histoire', 'Javier Pastore', '2018-01-30 21:38:25', NULL, NULL, 1, 0, '2018-01-30 21:38:25'),
(132, 'user2', 'user2@gmail.com', '$2y$10$In6oTGbU2v4WbNSE.02oUOdvGa5y/l0m1CLElFHOvrTkvWLJoDW6C', '0670225432', 'question?', 'reponse', '2018-01-30 21:43:12', '2018-01-30 21:58:53', 0, 0, 0, '2018-01-30 21:43:12'),
(133, 'user3', 'user3@gmail.com', '$2y$10$uBZEBVMRHLOZX3bdab0F4ec93PcjnvcdMQ0fuD8LE0QWuYi3WcxEq', '0670225432', 'question?', 'reponse', '2018-01-30 21:43:35', NULL, NULL, 0, 0, '2018-01-30 21:43:35'),
(134, 'user4', 'user4@gmail.com', '$2y$10$JghQbUp9EdEmEQuCE0XipOgnNvP805tYgf6FnU7C2wXVDVM1YItj2', '0655879956', 'question?', 'reponse', '2018-01-30 21:44:02', NULL, NULL, 0, 0, '2018-01-30 21:44:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alert_type`
--
ALTER TABLE `alert_type`
  ADD PRIMARY KEY (`id_alert_type`);

--
-- Indexes for table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`ID_Avis`);

--
-- Indexes for table `catalogue`
--
ALTER TABLE `catalogue`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD KEY `ID_home` (`ID_home`);

--
-- Indexes for table `scenario`
--
ALTER TABLE `scenario`
  ADD PRIMARY KEY (`scenario`);

--
-- Indexes for table `type_device`
--
ALTER TABLE `type_device`
  ADD PRIMARY KEY (`ID_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avis`
--
ALTER TABLE `avis`
  MODIFY `ID_Avis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `catalogue`
--
ALTER TABLE `catalogue`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;
--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `ID_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `scenario`
--
ALTER TABLE `scenario`
  MODIFY `scenario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `type_device`
--
ALTER TABLE `type_device`
  MODIFY `ID_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
