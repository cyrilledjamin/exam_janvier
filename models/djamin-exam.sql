-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 10 jan. 2022 à 10:35
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `djamin-exam`
--

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` text NOT NULL,
  `emetteur` int(11) NOT NULL,
  `destinataire` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `contenu`, `emetteur`, `destinataire`) VALUES
(1, 'aGVsbG8=', 5, 1),
(2, 'Ym9uam91cg==', 1, 5),
(3, 'Y29tbWVudCB2b3VzIGFpZGV6', 1, 5),
(4, 'c2FsdXQ=', 3, 1),
(5, 'c2FsdXQ=', 5, 1),
(6, 'ZmZm', 5, 1),
(7, 'b3Vp', 1, 5),
(8, 'b3Vp', 4, 1),
(9, 'c2FsdXQ=', 3, 1),
(10, 'c2FsdXQ=', 3, 1),
(11, 'c2FsdXQ=', 3, 1),
(12, 'b3VpIGVuIHF1b2kgdm91cyBhaWRleg==', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `roles` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

DROP TABLE IF EXISTS `tache`;
CREATE TABLE IF NOT EXISTS `tache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_debut` varchar(255) NOT NULL,
  `date_fin` varchar(255) NOT NULL,
  `etat` enum('EnCours','Terminee','EnAttente') NOT NULL DEFAULT 'EnCours',
  `commanditaire` int(11) NOT NULL,
  `id_utilisateur` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_user` (`id_utilisateur`),
  KEY `fk_commanditaire` (`commanditaire`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `name`, `description`, `date_debut`, `date_fin`, `etat`, `commanditaire`, `id_utilisateur`) VALUES
(2, 'Développement ', 'création app', '23-12-2021', '24-12-2021', 'Terminee', 1, 4),
(3, 'Corrections', 'correction des taches', '17-12-2021', '23-12-2021', 'EnCours', 3, 5),
(4, 'programmer', 'App SiteWeb', '25-12-2021', '26-12-2021', 'EnCours', 1, 4),
(7, 'Correction', 'developpement', '26-12-2021', '01-01-2022', 'EnAttente', 1, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `last_name` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isconnected` enum('Client','Travailleur','Root','Disconnected') NOT NULL DEFAULT 'Disconnected',
  `statuts` varchar(255) NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `last_name`, `first_name`, `email`, `phone`, `password`, `isconnected`, `statuts`, `activated`) VALUES
(1, 'cyrille gaus', 'Djamin', 'cyrilledjamin@yahoo.fr', '0486027517', '$2y$10$dzg/jTlIQD3WkvCig35bUe5f4OWkKUpHOKHmFSADd3glUn1qtfPwe', 'Disconnected', 'a:1:{i:0;s:4:\"Root\";}', 1),
(2, 'Kenne', 'Gaus', 'djamincyrille1@gmail.com', '+32486027517', '$2y$10$gnfhnaf7A963F.UlH9qi.Os1ew4Xu.JNPYKuumIFeFLj7ItZbuiYC$2y$10$YFBN7aCxYbTEK0.P2nybiOhyDrtiJwcH5wktWNLpMBECO6iibi1rq', 'Disconnected', 'a:0:{}', 0),
(3, 'Emaga', 'Alain', 'alaincesar@hotmail.fr', '+32486027518', '$2y$10$YFBN7aCxYbTEK0.P2nybiOhyDrtiJwcH5wktWNLpMBECO6iibi1rq', 'Disconnected', 'a:1:{i:0;s:6:\"Client\";}', 1),
(4, 'gaus', 'kenne', 'cyrilledjamin@yahoo.com', '+32486027517', '$2y$10$aMBwJQ/UXmHMhfaCvB4/..tm80h9xQw50SDuTu5LObVBqlAAnxI1i', 'Disconnected', 'a:1:{i:0;s:11:\"Travailleur\";}', 1),
(5, 'Brevers', 'Christophe', 'chris@tophe.fr', '+32456875555', '$2y$10$zsjCMrgjn90cR2ZWE7uruuap.1jIH3A8BhfqV/QDRkB1FGEtkfWO.', 'Disconnected', 'a:1:{i:0;s:11:\"Travailleur\";}', 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tache`
--
ALTER TABLE `tache`
  ADD CONSTRAINT `fk_commanditaire` FOREIGN KEY (`commanditaire`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_utilisateur`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
