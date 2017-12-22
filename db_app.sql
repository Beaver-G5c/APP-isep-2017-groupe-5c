-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 22, 2017 at 10:54 AM
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
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `ID_item` int(11) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_consumption` int(11) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rating_average` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `ID_category` int(11) NOT NULL,
  `name_category` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description_category` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cgu`
--

CREATE TABLE `cgu` (
  `ID_version` int(11) NOT NULL,
  `date_last_update` date NOT NULL,
  `text` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact_sav`
--

CREATE TABLE `contact_sav` (
  `ID_contact` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `date_hour` datetime NOT NULL,
  `resolved` tinyint(1) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `ID_question` int(11) NOT NULL,
  `ID_category` int(11) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `answer` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `rating_average` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--

CREATE TABLE `opinion` (
  `ID_comment` int(11) NOT NULL,
  `ID_item` int(11) NOT NULL,
  `name_author` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `date_comment` date NOT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `ID_professional` int(11) NOT NULL,
  `professional_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `professional_country` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `professional_county` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `professional_phone` int(11) NOT NULL,
  `professional_expertise` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `professional_rating_average` int(11) NOT NULL,
  `professional_rating_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `ID_type` int(11) NOT NULL,
  `type_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type_description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_user` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(256) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `secret_question` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `secret_answer` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
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

-- --------------------------------------------------------

--
-- Table structure for table `warning`
--

CREATE TABLE `warning` (
  `ID_warning` int(11) NOT NULL,
  `ID_user` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `warning_lvl` int(4) NOT NULL,
  `looked` tinyint(1) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `warning_code` int(11) NOT NULL,
  `resolved` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`ID_item`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`ID_category`);

--
-- Indexes for table `cgu`
--
ALTER TABLE `cgu`
  ADD PRIMARY KEY (`ID_version`);

--
-- Indexes for table `contact_sav`
--
ALTER TABLE `contact_sav`
  ADD PRIMARY KEY (`ID_contact`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID_question`);

--
-- Indexes for table `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`ID_comment`);

--
-- Indexes for table `professional`
--
ALTER TABLE `professional`
  ADD PRIMARY KEY (`ID_professional`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID_type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`);

--
-- Indexes for table `warning`
--
ALTER TABLE `warning`
  ADD PRIMARY KEY (`ID_warning`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
