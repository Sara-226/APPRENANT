-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 01 Février 2021 à 15:24
-- Version du serveur :  5.6.20
-- Version de PHP :  5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `baseapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `admine`
--

CREATE TABLE IF NOT EXISTS `admine` (
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `motsdpasse` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admine`
--

INSERT INTO `admine` (`email`, `nom`, `motsdpasse`) VALUES
('a@gmail.com', 'aaa', '$2y$10$Tm3KiZpn/vXzgPq5fU.LKO4NzO63gJOpoL02E6tiAR.nSxm63tSW.'),
('eren@gmail.com', 'eren', '$2y$10$ilGwseTbjVZJC9YZfd.48.P04rLqI13K1lV/LYAHcQu3Od2kT9E/G'),
('hnbvjh,bn', 'dflgkfo', '$2y$10$nIfNp2FsnCferPb/RX9k2e34M1v5.7SdhK4398EfhsRr6JnJs5Fnu'),
('tetra@gmail.com', 'dflgkfo', '$2y$10$iO7NW8k976wMcMQxGDwKeOAf0Je62bFn549PqH63YBOUpShNJx/pa'),
('trere@gmail.com', 'dflgkfo', 'iugtij'),
('yidjabazie@gmail.com', 'BAZIE', 'fhgjvhbknl');

-- --------------------------------------------------------

--
-- Structure de la table `formulaires`
--

CREATE TABLE IF NOT EXISTS `formulaires` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `villeorigine` varchar(60) NOT NULL,
  `formation` varchar(60) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `devref` varchar(1) NOT NULL,
  `appreciation` varchar(1024) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `formulaires`
--

INSERT INTO `formulaires` (`id`, `email`, `nom`, `prenom`, `villeorigine`, `formation`, `sexe`, `devref`, `appreciation`) VALUES
(1, '', 'CISSE', 'ABOUBAKARY', 'ouagadougou', 'ANG', 'm', '', ''),
(2, '', 'ALAKOUTOU', 'ARIANE', 'ouagadougou', 'COM', 'f', '', ''),
(3, '', 'DIEBRE', 'DAVY', 'ouagadougou', 'ECO', 'm', '', ''),
(4, '', 'BAKYO', 'MAX AYMAR', 'ouagadougou', 'inconu', 'm', '', ''),
(5, '', 'BASSINA', 'REBECCA', 'ouagadougou', 'inconu', 'f', '', ''),
(6, '', 'BAZIE', 'SARA', 'ouagadougou', 'GC', 'f', '', ''),
(7, 'yidjabazie@gmail.com', '', '', '', '', '', '', ''),
(8, 'yidjabazie@gmail.com', '', '', '', '', '', '', ''),
(9, 'yidjabazie@gmail.com', 'dflgkfo', 'regfrgr', '', '', '', '', ''),
(10, '77658740', 'trare', 'tafi', 'bobo', 'referen digital', '', '', 'sg'),
(11, '', '', '', '', '', 'F', 'D', ''),
(12, 'tetra@gmail.com', 'dflgkfo', 'regfrgr', 'bobo', 'etertez', 'M', 'e', 'super bruyant'),
(13, 'tetra@gmail.com', 'dflgkfo', 'regfrgr', 'bobo', 'etertez', 'F', 'e', 'super bruyant'),
(14, 'tetra@gmail.com', 'dflgkfo', 'regfrgr', 'bobo', 'etertez', 'M', 'e', 'super bruyant'),
(15, 'tetra@gmail.com', 'dflgkfo', 'regfrgr', 'bobo', 'etertez', 'M', 'e', 'super bruyant'),
(16, 'trere@gmail.com', 'dflgkfo', 'regfrgr', 'bobo', 'referen digital', 'F', 'r', 'individu peu recommendable');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admine`
--
ALTER TABLE `admine`
 ADD PRIMARY KEY (`email`);

--
-- Index pour la table `formulaires`
--
ALTER TABLE `formulaires`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `formulaires`
--
ALTER TABLE `formulaires`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
