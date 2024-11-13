-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 27 avr. 2024 à 13:12
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `paranet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idAdmin` int NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idAdmin`, `login`, `password`) VALUES
(1, 'mayssen', 'maydridi'),
(2, 'maysendridi@gmail.com', 'maydridi');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(100) NOT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`) VALUES
(1, 'visage'),
(2, 'main'),
(3, 'corps'),
(4, 'yeux');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(10) NOT NULL,
  `prenomClient` varchar(10) NOT NULL,
  `emailClient` varchar(20) NOT NULL,
  `addClient` varchar(10) NOT NULL,
  `teleClient` int NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`idClient`, `nomClient`, `prenomClient`, `emailClient`, `addClient`, `teleClient`) VALUES
(1, 'mayssen', 'dridi', 'mayssen@gmail.com', 'hammamett', 23456781),
(4, 'dridi', 'mohammed', 'mohammed@gmail.com', 'hammamet', 29199587),
(5, 'hamzaoui', 'lara', 'lara@gmail.com', 'nabeul', 28466780),
(6, 'dridi', 'saeb', 'saeb@gmail.com', 'sfax', 55487963),
(7, 'ben younes', 'sadok', 'sadok@gmail.com', 'hammamet', 56789412);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(100) NOT NULL,
  `prenomClient` varchar(100) NOT NULL,
  `addEmail` varchar(100) NOT NULL,
  `addresse` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ville` varchar(100) NOT NULL,
  `mode` varchar(100) NOT NULL,
  `numero` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nomClient`, `prenomClient`, `addEmail`, `addresse`, `ville`, `mode`, `numero`, `total`) VALUES
(1, 'marwa', 'mimi', 'hghhg@gmail.com', 'nabeul', 'hammamet', 'Par chéque', 28456975, 204),
(2, 'marwa', 'mimi', 'hghhg@gmail.com', 'nabeul', 'hammamet', 'Par chéque', 28456975, 204),
(3, 'marwa', 'mimi', 'hghhg@gmail.com', 'nabeul', 'hammamet', 'Par chéque', 28456975, 204),
(4, 'marwa', 'mimi', 'hghhg@gmail.com', 'nabeul', 'hammamet', 'Par chéque', 28456975, 204),
(5, 'marwa', 'mimi', 'hghhg@gmail.com', 'nabeul', 'hammamet', 'Par chéque', 28456975, 233),
(6, 'marwa', 'mimi', 'hghhg@gmail.com', 'nabeul', 'hammamet', 'Cash à la livraison', 28456975, 79);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

DROP TABLE IF EXISTS `fournisseur`;
CREATE TABLE IF NOT EXISTS `fournisseur` (
  `idFournisseur` int NOT NULL AUTO_INCREMENT,
  `nomFournisseur` varchar(10) NOT NULL,
  `prenomFournisseur` varchar(10) NOT NULL,
  `emailFournisseur` varchar(10) NOT NULL,
  `teleFournisseur` int NOT NULL,
  PRIMARY KEY (`idFournisseur`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`idFournisseur`, `nomFournisseur`, `prenomFournisseur`, `emailFournisseur`, `teleFournisseur`) VALUES
(1, 'dridi', 'mohammed', 'hh@gmail.c', 23564875),
(5, 'marzouki', 'amine', 'amine@gmai', 55647983),
(4, 'jerbi', 'aziz', 'aziz@gmail', 28796314);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `idMarque` int NOT NULL AUTO_INCREMENT,
  `nomMarque` varchar(10) NOT NULL,
  PRIMARY KEY (`idMarque`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`idMarque`, `nomMarque`) VALUES
(3, 'eucerin'),
(2, 'svr'),
(4, 'ACM'),
(5, 'Nuxe'),
(6, 'isidin');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(100) NOT NULL,
  `prixProduit` int NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `panier`
--

INSERT INTO `panier` (`id`, `nomProduit`, `prixProduit`, `image`) VALUES
(18, 'NUXE CRÈME MAINS', 29, 'nuxe-creme-mains-et-ongles-50-ml-.jpg'),
(8, 'ACM DUOLYS', 50, 'acm-duolys-legere-soin-hydratant-anti-age-40ml.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `idProduit` int NOT NULL AUTO_INCREMENT,
  `nomProduit` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descriptionProduit` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idMarque` int NOT NULL,
  `idCategorie` int NOT NULL,
  `prixProduit` int NOT NULL,
  `quantite` int NOT NULL,
  `fileAffiche` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`idProduit`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`idProduit`, `nomProduit`, `descriptionProduit`, `idMarque`, `idCategorie`, `prixProduit`, `quantite`, `fileAffiche`) VALUES
(4, 'SVR AMPOULE C', '20% de Vitamine C optimisée pour une peau éclatante ! Ce sérum ultra-concentré en vitamine C optimisée recharge immédiatement la peau pour révéler l’éclat du teint et réduire les signes de fatigue. ', 2, 1, 1055, 15, '-svr-ampoule-anti-ox.jpg'),
(6, 'NUXE CRÈME MAINS', 'Sa formule contient 88,3% d\'ingrédients d\'origine naturelle. Elle contient du Miel réparateur, qui lui confère son parfum si doux, du tournesol, reconnu pour ses fonctions hydratantes et restructurant', 5, 2, 29, 8, 'nuxe-creme-mains-et-ongles-50-ml-.jpg'),
(7, 'NUXE REVE ', 'L\'utilisation d\'un démaquillant inadapté abîme et assèche les peaux sensibles. Avec le soin du visage Nuxe Rêve de miel, le démaquillage devient un plaisir .\r\n\r\n', 5, 1, 49, 9, 'nuxe-reve-de-miel-gel-nettoyant-demaquillant-.jpg'),
(8, 'ISDIN ÉCRA', 'Le 1er protecteur solaire formulé à base d\'eau (non gras) pour une protection UV révolutionnnaire.\r\nA l\'application il est immédiatement absorbé, offrant une protection invisible et fraîche.\r\n', 6, 1, 56, 15, 'isdin-ecran-fusion-water-invisible-spf50-50ml.jpg'),
(9, 'EUCERIN HYALURON-FILLER', 'EUCERIN HYALURON-FILLER + VOLUME-LIFT Soin de Jour Peau Sèche contient trois ingrédients actifs spécialement reconnus pour leurs actions face à la perte de volume et au relâchement cutané.\r\n\r\n', 3, 1, 78, 10, 'eucerin-hyaluron-filler-vit-c-8-ml-.jpg'),
(10, 'EUCERIN HYALURON-FILLER', 'Eucerin Hyaluron-Filler 10% Pure Vitamin C Booster est la solution idéale pour la peau fatiguée causée par le soleil, la pollution et le tabagisme. ', 3, 1, 108, 7, 'eucerin-hyaluron-filler-volume-lift-soin-de-jour-peau-seche.jpg'),
(11, 'ACM DEPIWHITE', 'ACM DÉPIWHITE Lait Corporel Éclaircissant est un lait qui permet à la fois d\'hydrater, de protéger et de nourrir la peau et permet aussi d\'éclaircir les taches brunes.', 4, 3, 55, 1, 'acm-depiwhite-lait-corporel-200-ml.jpg'),
(12, 'ACM DUOLYS', 'CE SOIN LUTTE CONTRE LE VIEILLISSEMENT CUTANÉ EN RENFORÇANT L’HYDRATATION DES PEAUX SÈCHES À TRÈS SÈCHES.', 4, 1, 50, 211, 'acm-duolys-legere-soin-hydratant-anti-age-40ml.jpg'),
(17, 'masque', 'rftgyh', 3, 1, 9, 7, 'téléchargement__2_-removebg-preview.png'),
(18, 'masque', 'rftgyh', 3, 1, 6, 7, 'téléchargement__1_-removebg-preview.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
