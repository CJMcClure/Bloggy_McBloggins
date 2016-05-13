CREATE DATABASE  IF NOT EXISTS `mcbloggers` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `mcbloggers`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mcbloggers
-- ------------------------------------------------------
-- Server version	5.5.41-log

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
-- Table structure for table `mcusers`
--

DROP TABLE IF EXISTS `mcusers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mcusers` (
  `mcuser_idnum` int(11) NOT NULL AUTO_INCREMENT,
  `mcuser_first` varchar(25) DEFAULT NULL,
  `mcuser_last` varchar(25) DEFAULT NULL,
  `mcuser_email` varchar(255) DEFAULT NULL,
  `mcuser_username` varchar(35) DEFAULT NULL,
  `mcuser_password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`mcuser_idnum`),
  UNIQUE KEY `mcuser_idnum_UNIQUE` (`mcuser_idnum`),
  UNIQUE KEY `mcuser_username_UNIQUE` (`mcuser_username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mcusers`
--

LOCK TABLES `mcusers` WRITE;
/*!40000 ALTER TABLE `mcusers` DISABLE KEYS */;
INSERT INTO `mcusers` VALUES (3,'Casey','McClure','Casey.McClure@McCentric.com','CaseyJMcClure','password');
/*!40000 ALTER TABLE `mcusers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-05-10  0:50:36
