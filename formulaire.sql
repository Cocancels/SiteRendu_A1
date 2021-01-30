-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 31 mai 2020 à 23:18
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `formulaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `pseudo`, `titre`, `msg`, `image`, `date`) VALUES
(151, 'a', 'Ce monde est merveilleux', '<p><em>Il l&#39;est.</em></p>', 'fond.jpg', '2020-06-01 00:52:17'),
(150, 'a', 'One Piece, quel bel animÃ©.', '<p>S&eacute;rieusement, <strong>QUI DANS CE MONDE&nbsp;</strong>n&#39;aime pas One piece ?</p>', 'favicon.png', '2020-06-01 00:50:45');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

DROP TABLE IF EXISTS `enregistrement`;
CREATE TABLE IF NOT EXISTS `enregistrement` (
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `statut` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enregistrement`
--

INSERT INTO `enregistrement` (`pseudo`, `mdp`, `email`, `image`, `statut`, `id`) VALUES
('Corentin', 'corentin95', 'corentinancel@gmail.com', 'ez.JPG', 2, 20),
('a', 'a', 'a', 'profil.jpg', 1, 27);

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

DROP TABLE IF EXISTS `galerie`;
CREATE TABLE IF NOT EXISTS `galerie` (
  `newurl` text NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `galerie`
--

INSERT INTO `galerie` (`newurl`, `auteur`, `id`) VALUES
('brook1.jpg', 'Corentin', 74),
('fdd2.png', 'Corentin', 75),
('2.jpg', 'Corentin', 76),
('luffy.jpg', 'Corentin', 73),
('Luffy02.jpg', 'Corentin', 72),
('fondformu.jpg', 'Corentin', 71);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `pseudo`, `email`, `msg`, `date`) VALUES
(37, 'Corentin', 'corentinancel@gmail.com', 'J\'aurai besoin de conseil svp.', '2020-06-01 00:53:56'),
(36, 'Corentin', 'corentinancel@gmail.com', 'J\'ai besoin d\'aide', '2020-05-31 22:43:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
