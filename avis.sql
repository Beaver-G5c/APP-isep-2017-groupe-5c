-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 24 jan. 2018 à 15:49
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
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

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
(7, 'Teva', 'Ca marche ?', '2018-01-24', 22);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
