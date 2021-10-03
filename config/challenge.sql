-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 03 oct. 2021 à 10:12
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `challenge`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(255) UNSIGNED NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(191) DEFAULT NULL,
  `mdp` text DEFAULT NULL,
  `date_creation_compte` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `pseudo`, `mail`, `mdp`, `date_creation_compte`) VALUES
(1, 'konate', 'mamadou', 'kernel01', 'kernelbrain48135717@gmail.com', '0000', '2021-10-03 04:46:46'),
(2, 'kouame', 'kouame nicaise', '', 'ker@gmail.com', '1100', '2021-10-03 04:56:50'),
(3, 'assoumou', 'kouadio stephane', '', 'assoumou@gmail.com', '@1212', '2021-10-03 05:02:43'),
(4, 'tet', 'tete', '', 'tete@gmail.fr', '0909', '2021-10-03 05:04:52'),
(5, 'konate', 'mamadou kernel', '', 'mkk@gmail.com', '0908', '2021-10-03 05:07:01'),
(6, 'konate', 'clao amed', '', 'clao@gmail.com', '0707', '2021-10-03 05:08:50');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
