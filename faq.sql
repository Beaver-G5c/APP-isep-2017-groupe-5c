-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 16 jan. 2018 à 12:05
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `faq`
--

-- --------------------------------------------------------

--
-- Structure de la table `faq`
--

CREATE TABLE `faq` (
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `id_faq` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `faq`
--

INSERT INTO `faq` (`question`, `answer`, `category`, `id_faq`) VALUES
('Comment puis je modifier mes informations personnelles?', 'Vous pouvez modifier vos informations personnelles depuis la page \"mon profil\".', 'Profil', 175),
('Comment accéder au mode nocturne?', 'Vous pouvez accéder à votre mode nocturne depuis la page \"gestion manuelle\".', 'Maison', 176);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id_faq`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `faq`
--
ALTER TABLE `faq`
  MODIFY `id_faq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;
