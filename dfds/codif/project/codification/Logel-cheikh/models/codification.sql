-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  jeu. 13 fév. 2020 à 17:00
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `codification`
--

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `idChambre` int(11) NOT NULL,
  `numeroChambre` int(11) NOT NULL,
  `nomPavillon` varchar(50) NOT NULL,
  `typeChambre` enum('FILLE','GARÇON') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`idChambre`, `numeroChambre`, `nomPavillon`, `typeChambre`) VALUES
(1, 24, 'Pavillon C', 'FILLE'),
(2, 23, 'Pavillon C', 'FILLE'),
(3, 61, 'Pavillon C', 'GARÇON'),
(4, 74, 'Pavillon C', 'GARÇON'),
(5, 60, 'Pavillon A', 'FILLE'),
(6, 39, 'Pavillon A', 'GARÇON'),
(7, 66, 'Pavillon B', 'FILLE'),
(8, 45, 'Pavillon B', 'GARÇON'),
(9, 7, 'Pavillon F', 'FILLE'),
(10, 16, 'Pavillon F', 'GARÇON');

-- --------------------------------------------------------

--
-- Structure de la table `codifChambre`
--

CREATE TABLE `codifChambre` (
  `idCodif` int(11) NOT NULL,
  `numeroCarte` varchar(50) NOT NULL,
  `idChambre` int(11) NOT NULL,
  `idPersonnel` int(11) NOT NULL,
  `dateCodif` date NOT NULL,
  `codif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `codifChambre`
--

INSERT INTO `codifChambre` (`idCodif`, `numeroCarte`, `idChambre`, `idPersonnel`, `dateCodif`, `codif`) VALUES
(1, '201607fgj', 1, 1, '2020-02-13', 0),
(2, '201607lki', 7, 2, '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `idCompte` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `motDePasse` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`idCompte`, `mail`, `motDePasse`) VALUES
(1, 'fall.peindafall@gmail.com', 'passer'),
(2, 'annie.anniediop@gmail.com', 'passer'),
(3, 'cheikh.cheikhmbacke@gmail.com', 'passer'),
(4, 'fall.jeanfall@gmail.com', 'passer'),
(5, 'abdoul.abdoulkande@gmail.com', 'passer');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `numeroCarte` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `numeroTelephone` int(9) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `niveau` enum('DUT 1','DUT 2','DIC 1','DIC 2','DIC 3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`numeroCarte`, `prenom`, `nom`, `numeroTelephone`, `mail`, `niveau`) VALUES
('201607rty', 'abdoul', 'kande', 771234567, 'abdoul.abdoulkande@gmail.com', 'DUT 2'),
('201607lki', 'annie', 'diop', 775678900, 'annie.anniediop@gmail.com', 'DIC 3'),
('201607fgj', 'cheikh', 'mbacke', 770987654, 'cheikh.cheikhmbacke@gmail.com', 'DIC 2');

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

CREATE TABLE `paiement` (
  `idPaiement` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  `idCodification` int(11) NOT NULL,
  `datePaiement` date NOT NULL,
  `estEnRegle` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement`
--

INSERT INTO `paiement` (`idPaiement`, `idCompte`, `idCodification`, `datePaiement`, `estEnRegle`) VALUES
(1, 2, 2, '2020-02-20', 1),
(2, 5, 1, '2020-02-10', 0);

-- --------------------------------------------------------

--
-- Structure de la table `pavillon`
--

CREATE TABLE `pavillon` (
  `nomPavillon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pavillon`
--

INSERT INTO `pavillon` (`nomPavillon`) VALUES
('Pavillon A'),
('Pavillon B'),
('Pavillon C'),
('Pavillon F');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE `personnel` (
  `idPersonnel` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `numeroTelephone` int(9) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`idPersonnel`, `prenom`, `nom`, `numeroTelephone`, `mail`) VALUES
(1, 'peinda', 'fall', 777777777, 'fall.peindafall@gmail.com'),
(2, 'jean phillipe', 'fall', 770777777, 'fall.jeanfall@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`idChambre`),
  ADD KEY `fk_nomPavillon` (`nomPavillon`);

--
-- Index pour la table `codifChambre`
--
ALTER TABLE `codifChambre`
  ADD PRIMARY KEY (`idCodif`),
  ADD KEY `fk_idChambre` (`idChambre`),
  ADD KEY `fk_idPersonnel` (`idPersonnel`),
  ADD KEY `fk_numeroEtudiant` (`numeroCarte`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`idCompte`),
  ADD KEY `mail` (`mail`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `numbPhone` (`numeroTelephone`),
  ADD UNIQUE KEY `numeroCarte` (`numeroCarte`);

--
-- Index pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD PRIMARY KEY (`idPaiement`),
  ADD KEY `fk_idCompte` (`idCompte`),
  ADD KEY `fk_idCodification` (`idCodification`);

--
-- Index pour la table `pavillon`
--
ALTER TABLE `pavillon`
  ADD PRIMARY KEY (`nomPavillon`);

--
-- Index pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`idPersonnel`),
  ADD KEY `fk_mail_personnel` (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `idChambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `codifChambre`
--
ALTER TABLE `codifChambre`
  MODIFY `idCodif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `idCompte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `paiement`
--
ALTER TABLE `paiement`
  MODIFY `idPaiement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `idPersonnel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `fk_nomPavillon` FOREIGN KEY (`nomPavillon`) REFERENCES `pavillon` (`nomPavillon`);

--
-- Contraintes pour la table `codifChambre`
--
ALTER TABLE `codifChambre`
  ADD CONSTRAINT `fk_idChambre` FOREIGN KEY (`idChambre`) REFERENCES `chambre` (`idChambre`),
  ADD CONSTRAINT `fk_idPersonnel` FOREIGN KEY (`idPersonnel`) REFERENCES `personnel` (`idPersonnel`),
  ADD CONSTRAINT `fk_numeroEtudiant` FOREIGN KEY (`numeroCarte`) REFERENCES `etudiant` (`numeroCarte`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_mail` FOREIGN KEY (`mail`) REFERENCES `compte` (`mail`);

--
-- Contraintes pour la table `paiement`
--
ALTER TABLE `paiement`
  ADD CONSTRAINT `fk_idCodification` FOREIGN KEY (`idCodification`) REFERENCES `codifChambre` (`idCodif`),
  ADD CONSTRAINT `fk_idCompte` FOREIGN KEY (`idCompte`) REFERENCES `compte` (`idCompte`);

--
-- Contraintes pour la table `personnel`
--
ALTER TABLE `personnel`
  ADD CONSTRAINT `fk_mail_personnel` FOREIGN KEY (`mail`) REFERENCES `compte` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
