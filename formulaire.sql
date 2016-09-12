-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 12 Septembre 2016 à 08:00
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `ci`
--

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE IF NOT EXISTS `formulaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(128) NOT NULL,
  `prenom` varchar(128) NOT NULL,
  `adresse` text NOT NULL,
  `mail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `formulaire`
--

INSERT INTO `formulaire` (`id`, `nom`, `prenom`, `adresse`, `mail`) VALUES
(1, 'DUPONT', 'Jean', '2 impasse de la nonidée 44 100 Nantes', 'jean.dupont@gmail.com'),
(2, 'TOURETTE', 'Gille', '3 rue de la ville derrière 9000 Saint coucou', 'tourette.gille@p***.com'),
(13, 'test1', 'test', 'test', 'test@test.test'),
(14, 'JEAN', 'marie', 'libelule 56', 'truestory@gmail.com'),
(15, '1', '2', '3 rue dulol 44100 Nantes', '2@2.fr'),
(16, '1', '2', '3 rue dulol 44100 Nantes', '3@3.fr'),
(17, 'test', 'test', '3 test', '4@4.fr'),
(18, '1', '1', '1', '1@2.fr');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
