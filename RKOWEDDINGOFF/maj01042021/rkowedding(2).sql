-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Jeu 01 Avril 2021 à 15:21
-- Version du serveur :  5.7.33-0ubuntu0.18.04.1
-- Version de PHP :  7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rkowedding`
--

-- --------------------------------------------------------

--
-- Structure de la table `ajout_prestation`
--

CREATE TABLE `ajout_prestation` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ajout_prestation`
--

INSERT INTO `ajout_prestation` (`id`, `titre`, `description`, `image`) VALUES
(1, 'top', 'adzscede', 'https://zupimages.net/up/21/13/2hdn.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `creation_admin`
--

CREATE TABLE `creation_admin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `creation_admin`
--

INSERT INTO `creation_admin` (`id`, `email`, `username`, `password`) VALUES
(1, 'gisele.rakotoarivony2@gmail.com', 'nitro', '$2y$10$hoXIP7IIggbMfc19z1kZcepOHvX9ryFW1sRs7iIRSeGEkkbJAu3DS'),
(2, 'lalao-malgachine@hotmail.fr', 'nitro974', '$2y$10$U.ZmJFJgT8J6LVCFc6Ah5OMc32DLOLUFyLNj6c/o4e6gwVcBENOEa');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `ajout_prestation`
--
ALTER TABLE `ajout_prestation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `creation_admin`
--
ALTER TABLE `creation_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `ajout_prestation`
--
ALTER TABLE `ajout_prestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `creation_admin`
--
ALTER TABLE `creation_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
