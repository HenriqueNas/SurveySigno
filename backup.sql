-- MySQL dump 10.13  Distrib 8.0.20, for Linux (x86_64)
--
-- Host: localhost    Database: survey
-- ------------------------------------------------------
-- Server version	8.0.20

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tboptions`
--

DROP TABLE IF EXISTS `tboptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tboptions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `survey_id` int NOT NULL,
  `name` varchar(25) NOT NULL,
  `votes` int DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `tboptions_FK` (`survey_id`),
  CONSTRAINT `tboptions_FK` FOREIGN KEY (`survey_id`) REFERENCES `tbsurveys` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tboptions`
--

LOCK TABLES `tboptions` WRITE;
/*!40000 ALTER TABLE `tboptions` DISABLE KEYS */;
INSERT INTO `tboptions` VALUES (1,2,'Henrique',0),(2,2,'Henrique Nascimento',0),(3,2,'Opção 1',0),(4,2,'euqirneH',0),(5,3,'Spotify',0),(6,3,'Deezer',0),(7,3,'Youtube Music',0),(8,4,'número a',0),(9,4,'letra 2',0),(10,4,'aê aê',0);
/*!40000 ALTER TABLE `tboptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbsurveys`
--

DROP TABLE IF EXISTS `tbsurveys`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbsurveys` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `begindate` date NOT NULL,
  `enddate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbsurveys`
--

LOCK TABLES `tbsurveys` WRITE;
/*!40000 ALTER TABLE `tbsurveys` DISABLE KEYS */;
INSERT INTO `tbsurveys` VALUES (2,'Quem contratar?','Enquete para escolher o melhor candidato para a vaga de fullstack na SignoWeb.','2020-06-04','2020-06-10'),(3,'Qual o melhor streaming de música?','Esta enquete vai definir de uma vez por todas o melhor streaming de música.','2020-03-04','2020-03-10'),(4,'Teste de Enquete','Só um teste para enquetar.','2020-08-04','2020-08-10');
/*!40000 ALTER TABLE `tbsurveys` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-05  1:34:11
