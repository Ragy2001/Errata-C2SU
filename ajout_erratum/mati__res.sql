-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 08 déc. 2020 à 23:58
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `errata`
--

-- --------------------------------------------------------

--
-- Structure de la table `matières`
--

CREATE TABLE `matières` (
  `ID` int(1) NOT NULL,
  `Année` tinytext NOT NULL,
  `Matière 1` varchar(100) NOT NULL,
  `Matière 2` varchar(100) NOT NULL,
  `Matière 3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `matières`
--

INSERT INTO `matières` (`ID`, `Année`, `Matière 1`, `Matière 2`, `Matière 3`) VALUES
(1, 'DFGSM2 (P2)', '', '', ''),
(2, 'DFGSM3 (D1)', '	CCPC Pneumologie', '	CCPC Neurologie', '	CCPC Cardiologie'),
(3, 'DFASM1 (D2)', '', '', ''),
(4, 'DFASM2 (D3)', '', '', ''),
(5, 'DFASM3 (D4)', '', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `matières`
--
ALTER TABLE `matières`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
