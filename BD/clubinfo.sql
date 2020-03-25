-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 20 août 2019 à 13:08
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `clubinfo`
--

-- --------------------------------------------------------

--
-- Structure de la table `acceuil`
--

CREATE TABLE `acceuil` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acceuil`
--

INSERT INTO `acceuil` (`id`, `titre`, `contenu`, `image`, `statut`, `date`) VALUES
(1, 'Journée d\'Intégration', 'Journée de faire connaissances entre les nouveaux et anciens et de préparer le programme de l\'année qui débute.', 'image/ZMszm.jpg', '1', '0000-00-00 00:00:00'),
(3, 'Mot du Directeur', 'Quelle est la fonction de la soutenance ?\r\nLa soutenance du mémoire est un moment important de la vie de l’étudiant et de celle de\r\nl’institution. C’est un rituel qui est soumis à certaines règles, des règles qui sont à la fois une\r\ncontrainte et une ressource pour les acteurs impliqués. Le cérémonial est réduit au strict\r\nminimum, et il est orienté vers ce qui compte d’abord dans la soutenance : le débat\r\nintellectuel.', 'image/fspqT.jpg', '1', '2019-07-12 15:15:59');

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contenu` longtext NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`id`, `titre`, `date`, `contenu`, `status`) VALUES
(1, 'It Day', '2019-07-13 17:18:43', 'Journée commémorative du département d\'informatique, dédié aux geeks de faire valoir l\'année scolaire.', '1'),
(3, 'Journée d\'Intégration', '2019-07-13 18:06:38', 'Journée de faire connaissances entre les nouveaux et anciens et de préparer le programme de l\'année qui débute.', '1'),
(4, 'Bienvenue à tous', '2019-07-18 13:20:51', 'Les mots de bienvenus', '1'),
(5, 'journée it day de 2017', '2019-07-18 13:21:14', 'Contenu à ajouter', '1'),
(6, 'journée it day de 2016', '2019-07-18 13:21:43', 'contenu à ajouter', '1'),
(7, 'journée it day de 2018', '2019-07-18 13:21:53', 'Contenu à ajouter', '1'),
(8, 'ICAGI IT DAY 3e Edition 2019', '2019-08-05 15:16:18', 'Une journée consacré a faire valoir notre année scolaire, avec des différentes prestations, des démonstrations et le lancements de notre plateforme (CIG)... Sous l direction de notre Parrain M. Alex FOUTI, le Directeur General de l\'Institut Monsieur Adbon Privat PAMBOU et  l\'Ecole ESP et HETAA qui nous ont honoré de leur présence avec de très belle prestation sans Oublier les Anciens et tous les étudiants qui nous ont honoré', '1');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `id` int(255) NOT NULL,
  `libelle` varchar(255) NOT NULL,
  `statut` varchar(255) NOT NULL,
  `idmatiere` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(255) NOT NULL,
  `message` tinytext NOT NULL,
  `id_activites` int(255) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateposte` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `message`, `id_activites`, `nom`, `email`, `dateposte`) VALUES
(1, 'courage les gars', 1, 'Almeida Djata', 'almeidadjata12@gmail.com', '2019-07-18 18:36:14'),
(2, 'Continuer dans ce sens les gars', 1, 'Aminata sow', 'almeidadjata@hotmail.fr', '2019-07-18 18:55:25'),
(3, 'top', 1, 'gerry orest rangba', 'aua@gmail.com', '2019-07-18 19:04:00'),
(4, 'yup', 3, 'Aminata sow', 'almeidadjata@hotmail.fr', '2019-07-18 19:11:55'),
(5, 'cool', 3, 'aaa', 'almeidadjata12@gmail.com', '2019-07-19 15:10:12'),
(6, 'Très cool', 3, 'RANGBA OUEdANE Gerry Oreste', 'rajerr2013@gmail.com', '2019-08-05 11:39:56'),
(8, 'Bonne continuation les gars', 7, 'bamba', 'bamba@gmail.com', '2019-08-05 15:09:46');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sujet` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `email`, `message`, `sujet`) VALUES
(2, 'Adama Ndao', 'ndao@yahoo.com', 'gv jlsn zsrkgjv,sjdhk;n', 'Information');

-- --------------------------------------------------------

--
-- Structure de la table `fonction`
--

CREATE TABLE `fonction` (
  `id` int(11) NOT NULL,
  `libelli` varchar(100) NOT NULL,
  `discription` longtext NOT NULL,
  `fichier` blob NOT NULL,
  `membre` int(11) NOT NULL,
  `dateajoutF` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fonction`
--

INSERT INTO `fonction` (`id`, `libelli`, `discription`, `fichier`, `membre`, `dateajoutF`) VALUES
(3, 'Assistance comptable et financière', 'ccccccccccccccccccc', 0x666963686965722f6d454d2e646f6378, 2, '2019-07-16 13:43:14');

-- --------------------------------------------------------

--
-- Structure de la table `galerie`
--

CREATE TABLE `galerie` (
  `idg` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_activites` int(255) NOT NULL,
  `statusim` int(11) NOT NULL,
  `dateajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `galerie`
--

INSERT INTO `galerie` (`idg`, `image`, `id_activites`, `statusim`, `dateajout`) VALUES
(8, 'slider/r0hEq9DvTJ5TCzQkzd6O.jpg', 3, 1, '2019-07-17 22:13:30'),
(9, 'slider/8f9PC3KemaSMI1u2WSIO.jpg', 3, 1, '2019-07-17 22:14:18'),
(10, 'slider/B4HZukfaFQJvragqcd8V.jpg', 1, 1, '2019-07-17 22:14:39'),
(11, 'slider/rEFpSE4WuBL4HUQWxC8k.jpg', 1, 1, '2019-07-17 22:14:55'),
(18, 'slider/U18y1P0HRnB64zcH4l41.jpeg', 3, 1, '2019-07-20 01:54:55');

-- --------------------------------------------------------

--
-- Structure de la table `historique`
--

CREATE TABLE `historique` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `historique`
--

INSERT INTO `historique` (`id`, `titre`, `contenu`, `date_ajout`, `status`) VALUES
(1, 'journee d integration de club', 'on. C’est un rituel qui est soumis à certaines règles, des règles qui sont à la fois une contrainte et une ressource pour les acteurs impliqués. Le cérémonial est réduit au strict minimum, et il est orienté vers ce qui compte d’abord dans la soutenance : le débat intellectuel.Quelle est la fon. C’est un rituel qui est soumis à certaines règles, des règles qui sont à la fois une contrainte et une ressource pour les acteurs impliqués. Le cérémonial est réduit au strict minimum, et il est orienté vers ce qui compte d’abord dans la soutenance : le débat intellectuel.Quelle est la f on. C’est un rituel qui est soumis à certaines règles, des règles qui sont à la fois une contrainte et une ressource pour les acteurs impliqués. Le cérémonial est réduit au strict minimum, et il est orienté vers ce qui compte d’abord dans la soutenance : le débat intellectuel.Quelle est la f', '2019-07-13 15:32:18', '1'),
(3, 'aaa', 'aaaaaaaaaa', '2019-07-13 17:17:28', '1');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

CREATE TABLE `matiere` (
  `id` int(255) NOT NULL,
  `lib` varchar(100) NOT NULL,
  `classe` varchar(50) NOT NULL,
  `semesttre` varchar(50) NOT NULL,
  `statusm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`id`, `lib`, `classe`, `semesttre`, `statusm`) VALUES
(1, 'javascript', 'L1 Informatique', '2 semestre', 1),
(2, 'slq server', 'L3 Informatique', '1 semestre', 1),
(3, 'html', 'L1 Informatique', '1 semestre', 1),
(4, 'Mathematique', 'L1 Informatique', '1 semestre', 1),
(5, 'Arcitecture des ordinateurs', 'L1 Informatique', '1 semestre', 1),
(6, 'Merise', 'L1 Informatique', '2 semestre', 1),
(7, 'base de données', 'L2 Informatique', '1 semestre', 1),
(8, 'UML', 'L2 Informatique', '2 semestre', 1),
(9, 'windev 1', 'L3 Informatique', '1 semestre', 1),
(10, 'java 1', 'L3 Informatique', '1 semestre', 1),
(11, 'Arcitecture des ordinateurs', 'Master 1', '1 semestre', 1),
(12, 'Administrateur linux', 'L3 Informatique', '1 semestre', 1),
(13, 'Virtualisation et Cloud', 'L3 Informatique', '2 semestre', 1),
(14, 'virtualisation', 'Master 2', '2 semestre', 1),
(15, 'UML2', 'L3 Informatique', '1 semestre', 1),
(16, 'Methodologie de Rapport de Stage', 'L3 Informatique', '1 semestre', 1),
(17, 'Entrepreunariat', 'L3 Informatique', '1 semestre', 1),
(18, 'Cisco(CCNA2)', 'L3 Informatique', '1 semestre', 1),
(19, 'Administration Windows Server', 'L3 Informatique', '1 semestre', 1),
(20, 'Windev2', 'L3 Informatique', '2 semestre', 1),
(21, 'java2', 'L3 Informatique', '2 semestre', 1),
(22, 'Cisco(CCNA2)', 'L3 Informatique', '2 semestre', 1),
(23, 'Administration Base de données Oracle', 'L3 Informatique', '2 semestre', 1),
(24, 'MsProject', 'L3 Informatique', '2 semestre', 1);

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(11) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_inscrit` varchar(18) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(18) NOT NULL,
  `statusM` int(11) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `droit` int(11) NOT NULL,
  `action` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `sexe`, `niveau`, `image`, `profile`, `date_ajout`, `date_inscrit`, `email`, `telephone`, `statusM`, `password`, `droit`, `action`) VALUES
(2, 'Fouty', 'Mr.Alex', 'Masculin', 'L3 Informatique', 'image/YvlH2.jpeg', 'Parrain', '2019-07-14 13:19:53', '2019-07-11', 'almeidadjata12@gmail.com', '775643355', 0, '0000', 0, 0),
(3, 'Ndiaye', 'Mame Diarra', 'Feminin', 'L3 Informatique', 'image/Inl54.jpg', 'vice-president', '2019-07-17 14:19:16', '2018-11-26', 'almeidadjata@hotmail.fr', '777775444', 1, '0000', 1, 1),
(4, 'oreste Rangba', 'Gerry', 'Masculin', 'L3 Informatique', 'image/YlHDY.jpeg', 'president', '2019-07-17 14:21:43', '2018-02-26', 'rajerr2013@gmail.com', '7765433222', 1, '0000', 2, 1),
(5, 'Diaw', 'Bamba', 'Masculin', 'L3 Informatique', 'image/wkNs7xQdObuPt9DKn412.jpg', 'Membre', '2019-07-19 00:05:39', '2017-07-04', 'bamba@gmail.com', '778886644', 1, NULL, 3, 5),
(6, 'Pierre Mbeng', 'Cidrik', 'Masculin', 'L3 Informatique', 'image/mBz78i4WXEu0FHwXHOnV.jpg', 'Membre', '2019-07-19 00:09:35', '2016-07-05', 'cedrik@gmail.com', '775664433', 1, NULL, 1, 5),
(7, 'Felnonie Ndiaye', 'Fatou', 'Feminin', 'L3 Informatique', 'image/Pk9oAW7WVoyhQaHnapCB.jpg', 'tresorerie', '2019-07-19 00:12:36', '2016-03-01', 'fatou@gmail.com', '7755433266', 1, '0000', 1, 5),
(8, 'Bano barry', 'Mamadou', 'Masculin', 'L3 Informatique', 'image/7rebrchgjD3xrnb7N9t6.jpg', 'Membre', '2019-07-19 00:15:32', '2017-06-27', 'bano@gmail.com', '67754332', 1, NULL, 1, 5),
(9, 'the yacine ngom', 'Papa', 'Masculin', 'L3 Informatique', 'image/5dIjMBwUWUStcgzOnp87.jpg', ' Membre', '2019-07-19 00:21:06', '2016-06-28', 'papa@gmail.com', '77544534534', 1, NULL, 1, 5),
(10, 'Mendes', 'Rofino', 'Masculin', 'L2 Informatique', 'image/moX53fpoA4ht4qGA9nIr.jpg', 'Membre', '2019-07-19 13:48:24', '2017-06-27', 'rofinoupeni@gmail.com', '779424154', 1, NULL, 1, 5),
(11, 'Quintino Baepar', 'Emilio', 'Masculin', 'L2 Informatique', 'image/mao0QOQQaN4EKyng1Cnq.jpg', 'Membre', '2019-07-19 13:50:16', '2017-06-27', 'emiliodimir@gmail.com', '772999177', 1, NULL, 1, 5),
(12, 'PAMBOU', 'Abdon Privat', 'Masculin', 'aucune', 'image/ZSyrn4IjchJUnIQ2rhPP.png', 'DG', '2019-07-19 14:46:14', '2013-02-01', 'pambou@gmail.com', '675433556', 0, NULL, 1, 5),
(13, 'Dibantsa', 'M.', 'Masculin', 'aucune', 'image/40woO.jpg', 'Chef de Departement', '2019-07-19 15:06:39', '2014-05-06', 'dibansa@gmail.com', '555534343', 0, NULL, 1, 5),
(14, 'Diallo', 'M', 'Masculin', 'aucune', 'image/TAmvFSHt7bbmncFZJDQw.png', 'DE', '2019-07-19 15:33:25', '2013-07-03', 'diallo@gmail.com', '677655756', 0, NULL, 1, 5),
(15, 'diatta', 'tony almeida', 'Masculin', 'L3 Informatique', 'image/qJyID4aEXbj51a61lHaP.jpg', 'Membre', '2019-07-20 01:39:11', '2017-11-27', 'tony@gmailcom', '784562222', 1, NULL, 1, 3),
(16, 'Thiam', 'Saly', 'Feminin', 'aucune', 'image/Bv92z0MKDOfez11K93pW.jpeg', 'Membre', '2019-07-20 01:41:15', '2017-11-27', 'saly@yahoo.fr', '784561212', 1, NULL, 1, 3),
(17, 'Sane', 'Yaya', 'Masculin', 'L2 Informatique', 'image/ULKre7w6kOiH0QJafPlT.jpeg', 'Resp.pedagogie', '2019-07-20 01:46:11', '2017-11-20', 'yaya@gmail.com', '784561212', 1, NULL, 4, 2),
(18, 'Mame Binta', 'C. Compte', 'Feminin', 'L2 Informatique', 'image/Cof2Zuh5j53JCs6whfJf.jpeg', 'tresorerie', '2019-07-20 01:47:35', '2017-11-20', 'binta@gmail.com', '784565252', 1, NULL, 1, 2),
(19, 'Diagne', 'Adama', 'Feminin', 'L2 Informatique', 'image/hEGLbwMrhPkN6x5QAsnt.jpeg', 'resp.communication', '2019-07-20 01:51:11', '2017-11-20', 'ada@gmail.com', '781254895', 1, NULL, 6, 2),
(20, 'Boundou', 'Adja', 'Feminin', 'L2 Informatique', 'image/4ertUcSvZIi8vW23aPr0.jpeg', 'secretaire', '2019-07-20 01:52:23', '2017-11-13', 'adja@yahoo.fr', '701258585', 1, '0000', 5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `objetifs`
--

CREATE TABLE `objetifs` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `objetifs`
--

INSERT INTO `objetifs` (`id`, `titre`, `contenu`, `date_ajout`, `status`) VALUES
(1, 'Integration des Etudiants', 'Objectifs\r\n\r\n    Faciliter l’insertion des étudiants dans les TIC\r\n    Cultiver la solidarité\r\n    Embrasser le milieu professionnel\r\n    Développer les compétences de travail en équipe\r\n    Etc...', '2019-07-03 02:16:15', '1');

-- --------------------------------------------------------

--
-- Structure de la table `presentation`
--

CREATE TABLE `presentation` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` longtext NOT NULL,
  `date_ajout` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `presentation`
--

INSERT INTO `presentation` (`id`, `titre`, `contenu`, `date_ajout`, `status`) VALUES
(1, 'Présentation du Club', 'Présentation du Club\r\nLe club informatique est constitué de 26 membres dont 12 membres du bureau. Le Bureau est structuré comme suit:\r\n\r\n    Le President\r\n\r\n    Sécretaire général\r\n\r\n    Adjoint sécretaire Général\r\n\r\n    Président comité d\'organisation\r\n\r\n    Adjoint president comité d\'organisation\r\n\r\n    Le Trésorier\r\n\r\n    Commissaire au compte\r\n\r\n    Adjoint commissaire au compte\r\n\r\n    Le chargé des affaires pédagogiques\r\n\r\n    Chargé des relations extérieures et de la communication', '2019-07-13 16:37:46', '1');

-- --------------------------------------------------------

--
-- Structure de la table `slide`
--

CREATE TABLE `slide` (
  `id` int(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL,
  `contenu` varchar(255) NOT NULL,
  `publication_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `slide`
--

INSERT INTO `slide` (`id`, `titre`, `slider_image`, `contenu`, `publication_status`) VALUES
(8, 'aaaaaaa', 'slider/uyXQDGNbYxadwazhDpYG.jpg', 'aaaaaaaaaaaaaaaa', 0),
(9, 'bienvenu general consultings', 'slider/5enGO7kbX3Hxaoq3UekB.jpg', 'aaaaaaaaaaaaaaaaa', 1),
(13, 'bbbbbb', 'slider/l7FZv0U2KRvE9g6FGHtW.jpg', 'bbbb', 0),
(14, 'bienvenu a tous', 'slider/Ubfl1k7CO4GuCx2cXL9H.jpg', 'bbbbbbbbbbbbb', 1),
(15, 'bienvenu', 'slider/cT6hbsqxEJZ7wp5muwUN.jpg', 'bbbbbbbbbbbbb', 0),
(16, 'bienvenu general consulting', 'slider/RPc7W7muLCHi3oIue64m.jpg', 'La force de code', 0),
(17, 'Bannière', 'slider/9S2WMH0tOsSimkD5zEMa.jpg', 'ICAGI IT DAY 3e Edition', 1),
(18, 'seances codes', 'slider/6NYjLE3a9Uf8ZiAEw3nB.jpeg', 'codes Vaccances', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acceuil`
--
ALTER TABLE `acceuil`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmatiere` (`idmatiere`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_activites` (`id_activites`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fonction`
--
ALTER TABLE `fonction`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD PRIMARY KEY (`idg`),
  ADD KEY `id_activites` (`id_activites`);

--
-- Index pour la table `historique`
--
ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `objetifs`
--
ALTER TABLE `objetifs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presentation`
--
ALTER TABLE `presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `acceuil`
--
ALTER TABLE `acceuil`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `classe`
--
ALTER TABLE `classe`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `fonction`
--
ALTER TABLE `fonction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `galerie`
--
ALTER TABLE `galerie`
  MODIFY `idg` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `historique`
--
ALTER TABLE `historique`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `matiere`
--
ALTER TABLE `matiere`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `objetifs`
--
ALTER TABLE `objetifs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `presentation`
--
ALTER TABLE `presentation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `classe`
--
ALTER TABLE `classe`
  ADD CONSTRAINT `classe_ibfk_1` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`id`);

--
-- Contraintes pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_activites`) REFERENCES `activites` (`id`);

--
-- Contraintes pour la table `galerie`
--
ALTER TABLE `galerie`
  ADD CONSTRAINT `galerie_ibfk_1` FOREIGN KEY (`id_activites`) REFERENCES `activites` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
