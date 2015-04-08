-- MySQL dump 10.13  Distrib 5.1.73, for redhat-linux-gnu (x86_64)
--
-- Host: dbhost-mysql.cs.missouri.edu    Database: cs4380sp15grp15
-- author: Qintai Liu
-- ------------------------------------------------------
-- Server version	5.1.73

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` varchar(100) NOT NULL DEFAULT '',
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `app`
--

DROP TABLE IF EXISTS `app`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `app` (
  `id` varchar(128) NOT NULL DEFAULT '',
  `name` varchar(128) DEFAULT NULL,
  `gpa` int(11) DEFAULT NULL,
  `degree` varchar(128) DEFAULT NULL,
  `phoneNumber` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `graduateDate` date DEFAULT NULL,
  `workPlace` varchar(256) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `app_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `app`
--

LOCK TABLES `app` WRITE;
/*!40000 ALTER TABLE `app` DISABLE KEYS */;
/*!40000 ALTER TABLE `app` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `course` (
  `courseName` varchar(128) NOT NULL DEFAULT '',
  `deptment` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`courseName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curTeach`
--

DROP TABLE IF EXISTS `curTeach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curTeach` (
  `id` varchar(128) NOT NULL DEFAULT '',
  `courseName` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`,`courseName`),
  KEY `courseName` (`courseName`),
  CONSTRAINT `curTeach_ibfk_1` FOREIGN KEY (`id`) REFERENCES `app` (`id`) ON DELETE CASCADE,
  CONSTRAINT `curTeach_ibfk_2` FOREIGN KEY (`courseName`) REFERENCES `course` (`courseName`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curTeach`
--

LOCK TABLES `curTeach` WRITE;
/*!40000 ALTER TABLE `curTeach` DISABLE KEYS */;
/*!40000 ALTER TABLE `curTeach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graduate`
--

DROP TABLE IF EXISTS `graduate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `graduate` (
  `id` varchar(128) NOT NULL DEFAULT '',
  `degree` varchar(128) DEFAULT NULL,
  `adviseName` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `graduate_ibfk_1` FOREIGN KEY (`id`) REFERENCES `app` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graduate`
--

LOCK TABLES `graduate` WRITE;
/*!40000 ALTER TABLE `graduate` DISABLE KEYS */;
/*!40000 ALTER TABLE `graduate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `interStudent`
--

DROP TABLE IF EXISTS `interStudent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `interStudent` (
  `id` varchar(128) NOT NULL DEFAULT '',
  `score` varchar(128) DEFAULT NULL,
  `semester` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `interStudent_ibfk_1` FOREIGN KEY (`id`) REFERENCES `app` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `interStudent`
--

LOCK TABLES `interStudent` WRITE;
/*!40000 ALTER TABLE `interStudent` DISABLE KEYS */;
/*!40000 ALTER TABLE `interStudent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `likeTeach`
--

DROP TABLE IF EXISTS `likeTeach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `likeTeach` (
  `id` varchar(128) NOT NULL DEFAULT '',
  `courseName` varchar(128) NOT NULL DEFAULT '',
  `score` double DEFAULT NULL,
  PRIMARY KEY (`id`,`courseName`),
  KEY `courseName` (`courseName`),
  CONSTRAINT `likeTeach_ibfk_1` FOREIGN KEY (`id`) REFERENCES `app` (`id`) ON DELETE CASCADE,
  CONSTRAINT `likeTeach_ibfk_2` FOREIGN KEY (`courseName`) REFERENCES `course` (`courseName`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `likeTeach`
--

LOCK TABLES `likeTeach` WRITE;
/*!40000 ALTER TABLE `likeTeach` DISABLE KEYS */;
/*!40000 ALTER TABLE `likeTeach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `preTeach`
--

DROP TABLE IF EXISTS `preTeach`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `preTeach` (
  `id` varchar(128) NOT NULL DEFAULT '',
  `courseName` varchar(128) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`,`courseName`),
  KEY `courseName` (`courseName`),
  CONSTRAINT `preTeach_ibfk_1` FOREIGN KEY (`id`) REFERENCES `app` (`id`) ON DELETE CASCADE,
  CONSTRAINT `preTeach_ibfk_2` FOREIGN KEY (`courseName`) REFERENCES `course` (`courseName`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `preTeach`
--

LOCK TABLES `preTeach` WRITE;
/*!40000 ALTER TABLE `preTeach` DISABLE KEYS */;
/*!40000 ALTER TABLE `preTeach` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `undergraduate`
--

DROP TABLE IF EXISTS `undergraduate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `undergraduate` (
  `id` varchar(128) NOT NULL DEFAULT '',
  `program` varchar(128) DEFAULT NULL,
  `level` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `undergraduate_ibfk_1` FOREIGN KEY (`id`) REFERENCES `app` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `undergraduate`
--

LOCK TABLES `undergraduate` WRITE;
/*!40000 ALTER TABLE `undergraduate` DISABLE KEYS */;
/*!40000 ALTER TABLE `undergraduate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` varchar(128) NOT NULL DEFAULT '',
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `nation` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-04-07 20:40:34
