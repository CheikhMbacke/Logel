-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: logel
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB-0+deb9u1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `anneescolaire`
--

DROP TABLE IF EXISTS `anneescolaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `anneescolaire` (
  `idAn` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`idAn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anneescolaire`
--

LOCK TABLES `anneescolaire` WRITE;
/*!40000 ALTER TABLE `anneescolaire` DISABLE KEYS */;
/*!40000 ALTER TABLE `anneescolaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chambre`
--

DROP TABLE IF EXISTS `chambre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chambre` (
  `idChambre` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `genre` enum('M','F') DEFAULT NULL,
  `pav` int(11) DEFAULT NULL,
  PRIMARY KEY (`idChambre`),
  KEY `pav` (`pav`),
  CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`pav`) REFERENCES `pavillon` (`idPav`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chambre`
--

LOCK TABLES `chambre` WRITE;
/*!40000 ALTER TABLE `chambre` DISABLE KEYS */;
INSERT INTO `chambre` VALUES (1,70,'F',2),(2,50,'F',2),(3,16,'M',2),(4,25,'M',2),(5,16,'M',1),(6,25,'M',1),(7,81,'F',1),(8,39,'F',1),(9,63,'M',2);
/*!40000 ALTER TABLE `chambre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant` (
  `numCarte` varchar(15) NOT NULL,
  `nom` varchar(35) DEFAULT NULL,
  `prenom` varchar(35) DEFAULT NULL,
  `sexe` enum('M','F') NOT NULL,
  `niveau` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`numCarte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` VALUES ('201607E0R','KANDE','Abdoul','M','DIC2','abdoulkande2@gmail.com','781870147'),('201607E0T','Cheikh','Mbacke','M','DIC2','cheikh@gmail.com','781234567');
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiantcodif`
--

DROP TABLE IF EXISTS `etudiantcodif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiantcodif` (
  `carte` varchar(15) DEFAULT NULL,
  `pwd` varchar(100) DEFAULT NULL,
  `numChambre` int(11) DEFAULT NULL,
  `aCle` int(2) DEFAULT '0',
  `aDrap` int(2) DEFAULT NULL,
  `aCouverture` int(2) DEFAULT NULL,
  `aRideau` int(2) DEFAULT NULL,
  `caution` int(11) DEFAULT NULL,
  `statut` enum('titulaire','suppleant') DEFAULT NULL,
  KEY `carte` (`carte`),
  KEY `numChambre` (`numChambre`),
  CONSTRAINT `etudiantcodif_ibfk_1` FOREIGN KEY (`carte`) REFERENCES `etudiant` (`numCarte`),
  CONSTRAINT `etudiantcodif_ibfk_2` FOREIGN KEY (`numChambre`) REFERENCES `chambre` (`idChambre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiantcodif`
--

LOCK TABLES `etudiantcodif` WRITE;
/*!40000 ALTER TABLE `etudiantcodif` DISABLE KEYS */;
INSERT INTO `etudiantcodif` VALUES ('201607E0R','passer123',5,0,1,NULL,1,1,'titulaire'),('201607E0T','passer123',4,0,1,1,1,1,'titulaire');
/*!40000 ALTER TABLE `etudiantcodif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mois`
--

DROP TABLE IF EXISTS `mois`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mois` (
  `idMois` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`idMois`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mois`
--

LOCK TABLES `mois` WRITE;
/*!40000 ALTER TABLE `mois` DISABLE KEYS */;
/*!40000 ALTER TABLE `mois` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `paiement` (
  `etudi` varchar(15) NOT NULL,
  `chefComptable` int(11) DEFAULT NULL,
  `datePaiement` date NOT NULL,
  `mois` varchar(20) DEFAULT NULL,
  KEY `chefComptable` (`chefComptable`),
  CONSTRAINT `paiement_ibfk_4` FOREIGN KEY (`chefComptable`) REFERENCES `personnel` (`idPersonnel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paiement`
--

LOCK TABLES `paiement` WRITE;
/*!40000 ALTER TABLE `paiement` DISABLE KEYS */;
INSERT INTO `paiement` VALUES ('201607E0R',2,'2020-03-30','Octobre'),('201607E0T',2,'2020-03-30','Octobre'),('201607E0T',2,'2020-03-30','Novembre');
/*!40000 ALTER TABLE `paiement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pavillon`
--

DROP TABLE IF EXISTS `pavillon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pavillon` (
  `idPav` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(35) DEFAULT NULL,
  `chefPav` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPav`),
  KEY `chefPav` (`chefPav`),
  CONSTRAINT `pavillon_ibfk_1` FOREIGN KEY (`chefPav`) REFERENCES `personnel` (`idPersonnel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pavillon`
--

LOCK TABLES `pavillon` WRITE;
/*!40000 ALTER TABLE `pavillon` DISABLE KEYS */;
INSERT INTO `pavillon` VALUES (1,'Pavillon B',1),(2,'Pavillon A',3);
/*!40000 ALTER TABLE `pavillon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personnel` (
  `idPersonnel` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(35) DEFAULT NULL,
  `premom` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPersonnel`),
  KEY `role` (`role`),
  CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`role`) REFERENCES `typeprofile` (`idProfile`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnel`
--

LOCK TABLES `personnel` WRITE;
/*!40000 ALTER TABLE `personnel` DISABLE KEYS */;
INSERT INTO `personnel` VALUES (1,'KANDE','Abdoul','abdoulkande2@gmail.com','781870147',1),(2,'MBACKE','Cheikh','cheikh@gmail.com','771234568',2),(3,'DIOP','Annie','annie@gmail.com','781478523',1);
/*!40000 ALTER TABLE `personnel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typeprofile`
--

DROP TABLE IF EXISTS `typeprofile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `typeprofile` (
  `idProfile` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(35) DEFAULT NULL,
  PRIMARY KEY (`idProfile`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typeprofile`
--

LOCK TABLES `typeprofile` WRITE;
/*!40000 ALTER TABLE `typeprofile` DISABLE KEYS */;
INSERT INTO `typeprofile` VALUES (1,'Chef de pavillon'),(2,'Comptable'),(3,'lingerie');
/*!40000 ALTER TABLE `typeprofile` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-31  2:45:51
