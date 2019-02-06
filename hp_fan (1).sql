-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 06 fév. 2019 à 13:05
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
-- Base de données :  `hp_fan`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Noms` varchar(25000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `Noms`) VALUES
(1, 'Harry Potter à l’école des sorciers '),
(2, 'Harry Potter et la Chambre des secrets '),
(3, 'Harry Potter et le Prisonnier d’Azkaban '),
(4, 'Harry Potter et la Coupe de feu '),
(5, 'Harry Potter et l’Ordre du phénix '),
(6, 'Harry Potter et le Prince de sang-mêlé '),
(7, 'Harry Potter et les Reliques de la Mort, première partie'),
(8, 'Harry Potter et les Reliques de la Mort, deuxième partie ');

-- --------------------------------------------------------

--
-- Structure de la table `maisons`
--

DROP TABLE IF EXISTS `maisons`;
CREATE TABLE IF NOT EXISTS `maisons` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Noms` varchar(2000) NOT NULL,
  `Fondateurs` varchar(2000) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maisons`
--

INSERT INTO `maisons` (`ID`, `Noms`, `Fondateurs`) VALUES
(1, 'Gryffondor', 'Godric Gryffondor \r\nAlbus Dumbledore\r\nMinerva McGonagall'),
(2, 'Poufsouffle', 'Helga Poufsouffle\r\nPomona Chourave'),
(3, 'Serdaigle', 'Rowena Serdaigle '),
(4, 'Serpentard', 'Salazar Serpentard \r\nHorace Slughorn\r\nSeverus Rogue');

-- --------------------------------------------------------

--
-- Structure de la table `personnages`
--

DROP TABLE IF EXISTS `personnages`;
CREATE TABLE IF NOT EXISTS `personnages` (
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Age` varchar(255) NOT NULL,
  `film` varchar(400) NOT NULL,
  `maison` varchar(400) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnages`
--

INSERT INTO `personnages` (`ID`, `Nom`, `Prenom`, `Age`, `film`, `maison`) VALUES
(1, 'Potter', 'Harry', '39', 'Harry Potter à l\'école des sorciers', 'Gryffondor'),
(2, 'Drago ', 'malfoy', '35', 'Harry Potter à l\'école des sorciers', 'Mangemorts\r\n'),
(3, 'Tom ', 'Jedusor', '71 ( mort) ', ' Harry Potter à l\'école des sorciers', '');

-- --------------------------------------------------------

--
-- Structure de la table `sors`
--

DROP TABLE IF EXISTS `sors`;
CREATE TABLE IF NOT EXISTS `sors` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Noms` varchar(400) NOT NULL,
  `Interdit` varchar(400) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sors`
--

INSERT INTO `sors` (`ID`, `Noms`, `Interdit`) VALUES
(1, 'Avada kedavra', 'oui'),
(2, 'Elasticus', 'non');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
