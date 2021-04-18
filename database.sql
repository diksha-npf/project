-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: db1
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

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
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `permission` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'edit'),(2,'upload');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `address1` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `pincode` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'diksha','$2y$10$ZJHI4vPNgfBR6sLR18UvEOubKkPKrg9mqKBiYK9ykO/DHbsEpt3Iy','diksha@gmail.com','se','Address1','Address2','123456','admin'),(2,'user1','$2y$10$u2DZMzQt.O/xCZuW/BBz3.RKf6HXngRUsLGRouBUKxhhykdUBwHQ.','user1@gmail.com','se','Address1','Address2','123456','user'),(3,'User2','$2y$10$/aDWshEEiMv9gZX610NY2utjh02y4yANJyTF1IDn/Bl/APD8Vv5ky','user2@gmail.com','software','kjhgfd','address2','987654','sales'),(4,'User3','$2y$10$36/rWt2VgTQLnRzsrFlxR.RV4y6d7UROE.52lF4BiAsZBE2/lHby2','user3@gmail.com','se','Address1','Address2','123456','user'),(5,'User4','$2y$10$K2VQlS4qKEYA7qhDE5kVvuI/x5znBGHoRbFAy/PB8vgcrEz4IKxWe','user4@gmail.com','developer','Address1','Address2','987654','user'),(6,'User5','$2y$10$BD5FHt4QFKGq/OVD3UK9huijpH9ffQF2w76k4S0u3BzWBA6bCotQe','user5@gmail.com','QA','Address1','Address2','456784','user'),(7,'User6','$2y$10$.ZFH3mCh/rRJni0jo.HDNOKJV9NInj3Ria0TV1dP0ir5zOrlw/6Au','user6@gmail.com','CS','Address1','Address2','453423','user'),(8,'User8','$2y$10$xzQf9UYkdNvmTPaPE2SWjejUmf1SKwCRKGjscO1lPr7AxW2X4Fa/e','user8@123gmail.com','product','Address1','Address2','767898','user'),(9,'User9','$2y$10$xTp6khGw.oW27pn.KDNyAe6FvXJ4SgENxZ6dCZA4WSrnQhY2CswU6','user9@gmail.com','support','Address1','Address2','456543','user'),(10,'User10','$2y$10$SpHR7svi5LTSC1LRW4G3QOIHXuoqGfo9waT6vm6/iWHiDNU3GtuQq','user10@gmail.com','developer','Address1','Address2','765432','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_permissions`
--

DROP TABLE IF EXISTS `users_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users_permissions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `usersid` int NOT NULL,
  `permissionid` int DEFAULT NULL,
  `status` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `users_id` (`usersid`),
  KEY `permission` (`permissionid`),
  CONSTRAINT `users_permissions_ibfk_1` FOREIGN KEY (`usersid`) REFERENCES `users` (`id`),
  CONSTRAINT `users_permissions_ibfk_2` FOREIGN KEY (`permissionid`) REFERENCES `permissions` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_permissions`
--

LOCK TABLES `users_permissions` WRITE;
/*!40000 ALTER TABLE `users_permissions` DISABLE KEYS */;
INSERT INTO `users_permissions` VALUES (1,2,1,1),(2,2,2,1),(3,3,1,1),(4,5,1,1),(5,6,1,1),(6,7,1,1),(7,8,1,1),(8,9,2,1),(9,10,1,1);
/*!40000 ALTER TABLE `users_permissions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-16 19:14:46
