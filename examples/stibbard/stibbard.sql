-- MySQL dump 10.13  Distrib 5.7.18, for macos10.12 (x86_64)
--
-- Host: localhost    Database: dbasename
-- ------------------------------------------------------
-- Server version	5.7.18

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

DROP DATABASE IF EXISTS `stibbard`;
CREATE DATABASE stibbard;
USE stibbard;

--
-- Table structure for table `stibbard`
--

DROP TABLE IF EXISTS `stibbard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stibbard` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `postcode` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stibbard`
--

LOCK TABLES `stibbard` WRITE;
/*!40000 ALTER TABLE `stibbard` DISABLE KEYS */;
INSERT INTO `stibbard` (`id`, `firstname`, `lastname`, `postcode`) VALUES (1,'ypl5d','Holland','54321'),(2,'Robert','Holland','85254'),(3,'Stanley','Holland','82514'),(4,'Jason','Holland','85254'),(5,'XnrrL','Holland','12345'),(6,'Tc0hp','Holland','12345'),(7,'OKnCp','Holland','12345'),(8,'GVaKs','Holland','12345'),(9,'8KbDn','Holland','12345'),(10,'LDXkw','Holland','12345'),(11,'iNrXi','Holland','12345'),(12,'5lHBu','Holland','12345'),(13,'kxMwh','Holland','12345'),(14,'DhmbY','Holland','12345'),(15,'n0MFS','Holland','12345'),(16,'W1gPQ','Holland','12345'),(17,'Tns2V','Holland','12345'),(18,'pMQrd','Holland','12345');
/*!40000 ALTER TABLE `stibbard` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-18 21:39:36
