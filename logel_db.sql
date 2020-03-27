-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: logel_db
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
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
  `pav` int(11) DEFAULT NULL,
  `typeChambre` enum('FILLE','GARÇON') NOT NULL,
  PRIMARY KEY (`idChambre`),
  KEY `pav` (`pav`),
  CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`pav`) REFERENCES `pavillon` (`idPav`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chambre`
--

LOCK TABLES `chambre` WRITE;
/*!40000 ALTER TABLE `chambre` DISABLE KEYS */;
INSERT INTO `chambre` VALUES (1,61,15,'GARÇON'),(2,60,15,'GARÇON'),(21,24,15,'FILLE'),(22,23,18,'FILLE'),(23,61,18,'GARÇON'),(24,74,16,'GARÇON'),(25,60,13,'FILLE'),(26,39,17,'GARÇON'),(27,66,14,'FILLE'),(28,45,13,'GARÇON'),(29,17,15,'FILLE'),(30,16,18,'GARÇON'),(31,24,15,'FILLE'),(32,23,16,'FILLE'),(33,61,16,'GARÇON'),(34,74,16,'GARÇON'),(35,60,13,'FILLE'),(36,39,17,'GARÇON'),(37,66,17,'FILLE'),(38,45,17,'GARÇON'),(39,17,15,'FILLE'),(40,16,15,'GARÇON');
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
  `niveau` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `numeroTelephone` int(9) NOT NULL,
  PRIMARY KEY (`numCarte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` VALUES ('201607fgj','mbacke','cheikh','DIC 2','cheikh.cheikhmbacke@gmail.com',770987654),('201607lki','diop','annie','DIC 3','annie.anniediop@gmail.com',775678900),('201607rty','kande','abdoul','DUT 2','abdoul.abdoulkande@gmail.com',771234567);
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
  `password` varchar(100) DEFAULT NULL,
  `numChambre` int(11) DEFAULT NULL,
  `aCle` int(2) DEFAULT NULL,
  `lingerie` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiantcodif`
--

LOCK TABLES `etudiantcodif` WRITE;
/*!40000 ALTER TABLE `etudiantcodif` DISABLE KEYS */;
INSERT INTO `etudiantcodif` VALUES ('201607rty','passer',NULL,NULL,NULL);
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
  `idMois` int(11) NOT NULL,
  `idAn` int(11) NOT NULL,
  `chefComptable` int(11) DEFAULT NULL,
  PRIMARY KEY (`etudi`,`idMois`,`idAn`),
  KEY `idMois` (`idMois`),
  KEY `idAn` (`idAn`),
  CONSTRAINT `paiement_ibfk_1` FOREIGN KEY (`etudi`) REFERENCES `etudiant` (`numCarte`),
  CONSTRAINT `paiement_ibfk_2` FOREIGN KEY (`idMois`) REFERENCES `mois` (`idMois`),
  CONSTRAINT `paiement_ibfk_3` FOREIGN KEY (`idAn`) REFERENCES `anneescolaire` (`idAn`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paiement`
--

LOCK TABLES `paiement` WRITE;
/*!40000 ALTER TABLE `paiement` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pavillon`
--

LOCK TABLES `pavillon` WRITE;
/*!40000 ALTER TABLE `pavillon` DISABLE KEYS */;
INSERT INTO `pavillon` VALUES (13,'Pavillon A',3),(14,'Pavillon B',4),(15,'Pavillon C',3),(16,'Pavillon F',4),(17,'Pavillon H',3),(18,'Pavillon G',4);
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
  `prenom` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `numero` varchar(15) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idPersonnel`),
  KEY `role` (`role`),
  CONSTRAINT `personnel_ibfk_1` FOREIGN KEY (`role`) REFERENCES `typeprofile` (`idProfile`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personnel`
--

LOCK TABLES `personnel` WRITE;
/*!40000 ALTER TABLE `personnel` DISABLE KEYS */;
INSERT INTO `personnel` VALUES (3,'fall','peinda','fall.peindafall@gmail.com','777777777',2,NULL),(4,'fall','jean phillipe','fall.jeanfall@gmail.com','770777777',1,NULL),(20,'Thiaw','Serigne cheikh','serignecheikhmbackethiaw@gmail.com','07 76 06 79 74',2,'passer'),(21,'tall','Elhadj','tall.elhadjtall@gmail.com','778767766',2,'passer');
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
INSERT INTO `typeprofile` VALUES (1,'Chef de pavillon'),(2,'Comptable'),(3,'buanderie');
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

-- Dump completed on 2020-03-27  0:09:46
