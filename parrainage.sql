-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 nov. 2025 à 09:11
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `parrainage`
--

-- --------------------------------------------------------

--
-- Structure de la table `asso`
--

DROP TABLE IF EXISTS `asso`;
CREATE TABLE IF NOT EXISTS `asso` (
  `id_parrain` int NOT NULL,
  `id_prestation` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_parrain`,`id_prestation`),
  KEY `id_parrain` (`id_parrain`),
  KEY `id_prestation` (`id_prestation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `asso`
--

INSERT INTO `asso` (`id_parrain`, `id_prestation`) VALUES
(1, 1),
(3, 2),
(8, 1),
(8, 2),
(15, 1),
(18, 1),
(37, 1),
(38, 1),
(39, 1);

-- --------------------------------------------------------

--
-- Structure de la table `parrain`
--

DROP TABLE IF EXISTS `parrain`;
CREATE TABLE IF NOT EXISTS `parrain` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` text NOT NULL,
  `cle` varchar(80) DEFAULT NULL,
  `code_parrain` varchar(19) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `cle` (`cle`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parrain`
--

INSERT INTO `parrain` (`id`, `nom`, `email`, `password`, `cle`, `code_parrain`) VALUES
(1, 'Mouss', 'souiivoir225@gmail.com', 'SatanR', '69032f6f17ba0', ''),
(2, 'OUATTARA', 'souiivir225@gmail.com', 'SatanR', '69033e02c554b', '69032f6f17ba0'),
(3, 'Mac', 'marc@gmail.com', 'mmmm', '6903443cb5089', '69032f6f17ba0'),
(4, 'soro', 'soro@gmail.com', 'sor', '69047ee633ecd', '69032f6f17ba0'),
(5, 'ala', 'ala@gmail.com', 'ala', '6904834ad64bf', '69032f6f17ba0'),
(6, 'OUATTARA', 'soruiivoir225@gmail.com', 'SatanR', '6904962ea8ab2', ''),
(7, 'OUATTARA', 'ouattara@gmail.com', 'mou', '6904993385bb7', '1478523'),
(8, 'Youl', 'youl@gmail.com', 'youl', '6907d1cb69da0', ''),
(9, 'OUATTARA', 'youll@gmail.com', 'youl', '6907d9f703bef', '788'),
(10, 'POMA', 'oul@gmail.com', 'youl', '6907ddd9e31e8', '788'),
(11, 'OUATTARA', 'yul@gmail.com', 'youl', '6907df6801eb1', '1478523'),
(12, 'OUATTARA', 'yu@gmail.com', 'youl', '6907df700919c', '1478523'),
(13, 'moll', 'Moll@gmail.com', 'youl', '6907e0894cb24', '6907d1cb69da0'),
(14, 'd', 'doul@gmail.com', 'youl', '690a12b924387', '1'),
(15, 'd', 'dul@gmail.com', 'youl', '690a1309e8d70', '1'),
(16, 'd', 'du@gmail.com', 'youl', '690a13150e42d', '1'),
(17, 'houj', 'yoppul@gmail.com', '852', '690a14d93b948', ''),
(18, 'pp', 'pol@gmail.com', 'youl', '690a175cad24e', ''),
(19, 'ZA', 'ZAol@gmail.com', 'ZAyoul', '690a2cf178a78', ''),
(20, 'ZrA', 'Aol@gmail.com', '147', '690a2e29eb3bf', ''),
(21, 'ZrA', 'Ao@gmail.com', '1486', '690a2e8187713', ''),
(22, 'ZrA', 'o@gmail.com', 'errr', '690a2ebd94a3a', ''),
(23, 'mmA', 'mmma@gmail.com', 'mmmm', '690a2f9db1938', ''),
(24, 'mmA', 'mmm@gmail.com', 'mmm', '690a2fd8473db', ''),
(25, 'Tui', 'pppol@gmail.com', 'youl', '690a3695b680f', '690a2fd8473db'),
(26, '1', '1@gmail.com', '1', '690b236690574', ''),
(27, '2', '2@gmail.com', '2', '690b243eea42d', ''),
(28, '3', '3@gmail.com', '3', '690b248f5b312', ''),
(29, '4', '4@gmail.com', '4', '690b251b6e60e', ''),
(30, '5', '5@gmail.com', '5', '690b255c69769', ''),
(31, '6', '6@gmail.com', '6', '690b2650a1fa3', ''),
(32, '7', '7@gmail.com', '7', '690b2715ce1a8', ''),
(33, '8', '8@gmail.com', '8', '690b276f0ac58', ''),
(34, '9', '9@gmail.com', '9', '690b28c0578d4', ''),
(35, '10', '10@gmail.com', '10', '690b297f524d8', ''),
(36, '11', '11@gmail.com', '11', '690b29ae7c2bd', ''),
(37, 'testtest', 'test@gmail.com', 'test01', '6912798abca45', '6907d1cb69da0'),
(38, 'ttyuu', 'teskt@gmail.com', 'test01', '69135bdad9ac7', '6912798abca45'),
(39, 'user', 'user@gmail.com', 'user', '691c969ee87f0', '');

-- --------------------------------------------------------

--
-- Structure de la table `prestation`
--

DROP TABLE IF EXISTS `prestation`;
CREATE TABLE IF NOT EXISTS `prestation` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reduction` varchar(100) NOT NULL DEFAULT '30% de reduction',
  `type_reduction` varchar(100) NOT NULL DEFAULT 'stantard',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prestation`
--

INSERT INTO `prestation` (`id`, `reduction`, `type_reduction`) VALUES
(1, ' 50% de reduction', 'stantard'),
(2, ' 30% de reduction', 'stantard');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `asso`
--
ALTER TABLE `asso`
  ADD CONSTRAINT `asso_ibfk_1` FOREIGN KEY (`id_parrain`) REFERENCES `parrain` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `asso_ibfk_2` FOREIGN KEY (`id_prestation`) REFERENCES `prestation` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
