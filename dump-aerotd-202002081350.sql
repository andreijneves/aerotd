-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: aerotd
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

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
-- Table structure for table `dvds`
--

DROP TABLE IF EXISTS `dvds`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dvds` (
  `id_dvd` int(11) NOT NULL AUTO_INCREMENT,
  `produtoras_id` int(11) NOT NULL,
  `ano` int(11) DEFAULT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `sinopse` text,
  PRIMARY KEY (`id_dvd`),
  KEY `dvds_produtoras_fk` (`produtoras_id`),
  CONSTRAINT `dvds_produtoras_fk` FOREIGN KEY (`produtoras_id`) REFERENCES `produtoras` (`id_produtora`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dvds`
--

LOCK TABLES `dvds` WRITE;
/*!40000 ALTER TABLE `dvds` DISABLE KEYS */;
INSERT INTO `dvds` VALUES (1,1,2019,'Filme do Andrei','TERROR'),(11,1,1986,'teste 2','asddajf alf lkdsfjklsdj fklfdj');
/*!40000 ALTER TABLE `dvds` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dvds_legendas`
--

DROP TABLE IF EXISTS `dvds_legendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dvds_legendas` (
  `dvds_id` int(11) NOT NULL,
  `legendas_id` int(11) NOT NULL,
  PRIMARY KEY (`legendas_id`,`dvds_id`),
  KEY `dvds_legendas_dvds_fk` (`dvds_id`),
  CONSTRAINT `dvds_legendas_dvds_fk` FOREIGN KEY (`dvds_id`) REFERENCES `dvds` (`id_dvd`),
  CONSTRAINT `dvds_legendas_legendas_fk` FOREIGN KEY (`legendas_id`) REFERENCES `legendas` (`id_legenda`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dvds_legendas`
--

LOCK TABLES `dvds_legendas` WRITE;
/*!40000 ALTER TABLE `dvds_legendas` DISABLE KEYS */;
INSERT INTO `dvds_legendas` VALUES (1,2),(11,3);
/*!40000 ALTER TABLE `dvds_legendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `legendas`
--

DROP TABLE IF EXISTS `legendas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `legendas` (
  `id_legenda` int(11) NOT NULL AUTO_INCREMENT,
  `lingua` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_legenda`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `legendas`
--

LOCK TABLES `legendas` WRITE;
/*!40000 ALTER TABLE `legendas` DISABLE KEYS */;
INSERT INTO `legendas` VALUES (2,'PT-BR'),(3,'US'),(4,'EN-UK');
/*!40000 ALTER TABLE `legendas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produtoras`
--

DROP TABLE IF EXISTS `produtoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produtoras` (
  `nome` varchar(150) DEFAULT NULL,
  `id_produtora` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_produtora`),
  UNIQUE KEY `produtos_id_produtora_idx` (`id_produtora`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produtoras`
--

LOCK TABLES `produtoras` WRITE;
/*!40000 ALTER TABLE `produtoras` DISABLE KEYS */;
INSERT INTO `produtoras` VALUES ('Teste do Andrei',1);
/*!40000 ALTER TABLE `produtoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'aerotd'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-08 12:50:08
