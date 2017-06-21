-- MySQL dump 10.13  Distrib 5.7.18, for Linux (x86_64)
--
-- Host: localhost    Database: strict
-- ------------------------------------------------------
-- Server version	5.7.18-0ubuntu0.16.04.1

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
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banners` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `update` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banners`
--

LOCK TABLES `banners` WRITE;
/*!40000 ALTER TABLE `banners` DISABLE KEYS */;
INSERT INTO `banners` VALUES (1,'../home/pic/banner.jpg','STRICT 1','Strict is responsive theme with a a clean and minimal lock.','2017-06-30 00:00:00'),(2,'../home/pic/banner.jpg','STRICT 2','Strict is responsive theme with a a clean and minimal lock.','2017-06-06 00:00:00'),(3,'../home/pic/banner.jpg','STRICT 3','Strict is responsive theme with a a clean and minimal lock.','2017-06-14 00:00:00');
/*!40000 ALTER TABLE `banners` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `STT` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`STT`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (1,'admin','admin'),(2,'vantoi1','van'),(3,'vantoi1','van');
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `showcase`
--

DROP TABLE IF EXISTS `showcase`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `showcase` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `title-pro` varchar(100) NOT NULL,
  `description-pro` varchar(500) NOT NULL,
  `source-img` varchar(100) NOT NULL,
  `update` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `showcase`
--

LOCK TABLES `showcase` WRITE;
/*!40000 ALTER TABLE `showcase` DISABLE KEYS */;
INSERT INTO `showcase` VALUES (1,'Project1','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book','../home/pic/pic1.jpg','2017-06-23 00:00:00'),(2,'Project 2','Designers everywhere dush with admiration upon seeing a web design and exclaim \"it\'sbeautiful, it\',\'sso clean !\".There are a countless number a webdesign round up dedicated to \'/clean\' design and it is a term thrown around quite a bit in the web design community.It can be easy to spot a good example of clean design.','../home/pic/pic2.jpg','2017-08-06 00:00:00'),(3,'Project 3','Designers everywhere dush with admiration upon seeing a web design and exclaim \"it\'sbeautiful, it\',\'sso clean !\".There are a countless number a webdesign round up dedicated to \'/clean\' design and it is a term thrown around quite a bit in the web design community.It can be easy to spot a good example of clean design.','../home/pic/pic3.jpg','2017-08-06 00:00:00'),(5,'Project 4','Designers everywhere dush with admiration upon seeing a web design and exclaim \"it\'sbeautiful, it\',\'sso clean !\".There are a countless number a webdesign round up dedicated to \'/clean\' design and it is a term thrown around quite a bit in the web design community.It can be easy to spot a good example of clean design.','../home/pic/pic4.jpg','2017-08-06 00:00:00'),(6,'Project 5','Designers everywhere dush with admiration upon seeing a web design and exclaim \"it\'sbeautiful, it\',\'sso clean !\".There are a countless number a webdesign round up dedicated to \'/clean\' design and it is a term thrown around quite a bit in the web design community.It can be easy to spot a good example of clean design.','../home/pic/pic5.jpg','2017-08-06 00:00:00'),(7,'Project 6','Designers everywhere dush with admiration upon seeing a web design and exclaim itsbeautiful, sso clean !.There are a countless number a webdesign round up dedicated to clean design and it is a term thrown around quite a bit in the web design community.It can be easy to spot a good example of clean design.','../home/pic/pic6.jpg','2017-06-18 00:00:00');
/*!40000 ALTER TABLE `showcase` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `simplepure`
--

DROP TABLE IF EXISTS `simplepure`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `simplepure` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `source-icon` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `update` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `simplepure`
--

LOCK TABLES `simplepure` WRITE;
/*!40000 ALTER TABLE `simplepure` DISABLE KEYS */;
INSERT INTO `simplepure` VALUES (6,'upfile/simple/icon1.jpg','Optimized for all devices','STRICT has been designed to be fully responsive on all devices.','2017-06-20 00:00:00'),(7,'upfile/simple/icon2.jpg','Clean & Minimal Design','This multipurpose theme is espectially created to be used for different projects.','2017-06-24 00:00:00'),(8,'upfile/simple/icon3.jpg','Font Awesome Icon','This multipurpose theme is espectially created to be used for different projects.','2017-06-23 00:00:00');
/*!40000 ALTER TABLE `simplepure` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `social`
--

DROP TABLE IF EXISTS `social`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `social` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) NOT NULL,
  `class-fa` varchar(100) NOT NULL,
  `name-social` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `social`
--

LOCK TABLES `social` WRITE;
/*!40000 ALTER TABLE `social` DISABLE KEYS */;
INSERT INTO `social` VALUES (1,'http://www.facebook.com','fa fa-facebook','Facebook link'),(2,'http://www.twitter.com','fa fa-twitter','Twitter link'),(3,'http://www.google.com','fa fa-google-plus','Google+ link'),(4,'http://www.linkedin.com','fa fa-linkedin','Linkedin link');
/*!40000 ALTER TABLE `social` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staywithat`
--

DROP TABLE IF EXISTS `staywithat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staywithat` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staywithat`
--

LOCK TABLES `staywithat` WRITE;
/*!40000 ALTER TABLE `staywithat` DISABLE KEYS */;
INSERT INTO `staywithat` VALUES (3,'manh2@aa.com','manh','dfa');
/*!40000 ALTER TABLE `staywithat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'strict'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-21 16:23:23
