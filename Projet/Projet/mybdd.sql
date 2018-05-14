-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 27 nov. 2017 à 09:04
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
-- Base de données :  `mybdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `ficheproduit`
--

DROP TABLE IF EXISTS `ficheproduit`;
CREATE TABLE IF NOT EXISTS `ficheproduit` (
  `nom` varchar(75) NOT NULL,
  `type` char(3) NOT NULL,
  `description` varchar(200) NOT NULL,
  `caracteristique` varchar(200) NOT NULL,
  `marque` varchar(100) NOT NULL,
  `prix` int(5) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ficheproduit`
--

INSERT INTO `ficheproduit` (`nom`, `type`, `description`, `caracteristique`, `marque`, `prix`, `image`) VALUES
('MANUBESTOFPLUS', 'VDR', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du vélo', 'Ce paragraphe parle de la marque plus en détails blabalf hbdeosv bfh', 5345, './images/VTT/bike2.jpg'),
('MY TRALALA', 'VTC', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du vélo', 'Ce paragraphe parle de la marque plus en détails blabalf hbdeosv bfh', 2456, './images/VTT/bike2.jpg'),
('Sacamin', 'FSA', 'sac de sport vraiment chouette', 'Tu peux mettre pleins de trucs dedans askip', 'Sport3000', 40, './images/football/sac.jpg'),
('Sking', 'FGA', 'Gants de ouf mamene', 'Attrape bien les balles', 'Sport3000', 20, './images/football/gants.jpg'),
('Supershoes', 'FCH', 'Chaussures de ouf', 'Elles sont bien fraiches', 'Sport3000', 100, './images/football/shoes.jpg'),
('Ballon De Basket', 'BBA', 'beau', 'aérodynamique', 'Wilson', 20, './images/basket/ballon1.jpg'),
('ZEZE', 'VTC', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du vélo', 'Ce paragraphe parle de la marque plus en détails blabalf hbdeosv bfh', 345, './images/VTT/bike1-6.jpg'),
('Champagne', 'VTT', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du vélo', 'Ce paragraphe parle de la marque plus en détails blabalf hbdeosv bfh', 1344, './images/VTT/bike1-2.jpg'),
('LUC', 'VTT', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du vélo', 'Ce paragraphe parle de la marque plus en détails blabalf hbdeosv bfh', 1344, './images/VTT/bike1-1.jpg'),
('TOUCH', 'VTT', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du vélo', 'Ce paragraphe parle de la marque plus en détails blabalf hbdeosv bfh', 983, './images/VTT/bike1-3.jpg'),
('Ballon rugby enfant', 'RBA', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du ballon', 'Sport3000', 20, './images/rugby/ballon1.jpg'),
('Ballon XV France', 'RBA', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du ballon', 'Sport3000', 120, './images/rugby/ballon2.jpg'),
('Ballon Rose', 'RBA', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du ballon', 'Sport3000', 30, './images/rugby/ballon3.jpg'),
('Ballon classique', 'RBA', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du ballon', 'Sport3000', 30, './images/rugby/ballon4.jpg'),
('Maillot rugby', 'RVE', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du vetement', 'Sport3000', 120, './images/rugby/maillot1.jpg'),
('Short Rugby', 'RVE', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques du ballon', 'Sport3000', 40, './images/rugby/short1.jpg'),
('Chaussures de rugby', 'RCH', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques des chaussures', 'Sport3000', 75, './images/rugby/chaussures1.jpg'),
('Casque de rugby', 'RAC', 'Ceci est la description du produit, ce paragraphe parle du produit plus en détails', 'Cette partie parle des caractéristiques des accessoires', 'Sport3000', 30, './images/rugby/accessoires1.jpg'),
('Casque rose', 'VAC', 'casque rose', 'aerodynamique', 'quid', 2750, './images/VTT/casque.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `fichierclient`
--

DROP TABLE IF EXISTS `fichierclient`;
CREATE TABLE IF NOT EXISTS `fichierclient` (
  `pseudo` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `mdpHash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `portable` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `droits` int(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichierclient`
--

INSERT INTO `fichierclient` (`pseudo`, `mdpHash`, `nom`, `prenom`, `portable`, `email`, `droits`) VALUES
('root', '$2y$10$PHHhwGOZF9qVjLJKzVIr1eLOl5f8FeF7/lrI1TJm9TECl746ZBi2i', 'root', 'admin', '0658584453', 'ropt@admin.fr', 1),
('User', '$2y$10$mxuDWJm0vdxVccFLlyJtV.S/EbaXsnenVbEdtcIkM8dPX20ZE4aei', 'user', 'user', '0658584453', 'user@sport3000.fr', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `ID` varchar(100) NOT NULL,
  `NomP` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`ID`, `NomP`) VALUES
('Duchemin', 'TOUCH'),
('Thomas33', 'Champagne'),
('Thomas33', 'MY TRALALA'),
('Thomas33', 'MY TRALALA'),
('Duchemin', 'ZEZE'),
('Thomas33', 'YOU'),
('User', 'Ballon De Basket'),
('User', 'LUC'),
('User', 'LUC'),
('User', 'Champagne'),
('root', 'YOU'),
('root', 'Ballon De Basket');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
