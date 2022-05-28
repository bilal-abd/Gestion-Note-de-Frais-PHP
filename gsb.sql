-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 23 mars 2022 à 17:39
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `frais`
--

DROP TABLE IF EXISTS `frais`;
CREATE TABLE IF NOT EXISTS `frais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `deplacement` char(11) DEFAULT NULL,
  `hotel` char(11) DEFAULT NULL,
  `restauration` char(11) DEFAULT NULL,
  `imprevu` int(11) DEFAULT NULL,
  `verif` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `frais`
--

INSERT INTO `frais` (`id`, `nom`, `deplacement`, `hotel`, `restauration`, `imprevu`, `verif`) VALUES
(9, 'djodjo', '65', '23', '098', 0, 1),
(6, 'rachid', '45', '31', '31', 0, 1),
(10, 'djodjo', '65', '23', '098', 0, 1),
(11, 'hgjgjhg', '7677', '9898', '4545', 0, 0),
(13, 'test 4', '1', '2', '3', 0, 0),
(14, 'Bilal Visiteur', '45', '89', '0987', 0, 0),
(15, 'Bilal ABD', '67', '87', '43', 0, 0),
(16, 'Bilal Visiteur', '45', '87', '567', 0, 0),
(18, 'Bilal Visiteur', '43', '8', '87', 0, 0),
(19, 'Bilal Visiteur', '4345', '8', '87', 0, 0),
(20, 'test', '1', '2', '5', 0, 0),
(21, 'Bilal Visiteur', '23', '65', '45', 0, 1),
(22, 'Bilal Visiteur', '89', '2', '3', 4, 0),
(23, 'zak', '66', '87', '45', 21, 0),
(24, 'Bilal Visiteur', '5', '87', '5', 98, 0),
(25, 'Bilal Visiteur', '5', '87', '5', 98, 0),
(26, 'Bilal Visiteur', '5', '87', '5', 98, 0),
(27, 'Bilal Visiteur', '58', '8', '509', 2, 0),
(28, 'Bilal Visiteur', '57', '8', '509', 21, 0),
(29, 'Steve', '3', '-2', '9', 6, 0),
(30, 'Eric', '9', '0', '12', 3, 0),
(31, 'Bilal Visiteur', '52', '23', '12', 54, 0),
(32, 'Bilal Visiteur', NULL, NULL, NULL, NULL, 0),
(33, 'Bilal ABD', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` enum('user','admin') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'admin', 'bilal', '0230782c6665a4465ee7ddaf7207935a', 'Bilal ABD'),
(2, 'user', 'bilal2', 'dcaa6e60155776107c638af755498759', 'Bilal Visiteur');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
