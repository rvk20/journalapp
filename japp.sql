-- MySQL dump 10.13  Distrib 8.0.28, for Linux (x86_64)
--
-- Host: localhost    Database: japp
-- ------------------------------------------------------
-- Server version	8.0.28-0ubuntu0.20.04.3

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
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attendance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `mark` int NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6DE30D9123EDC87` (`subject_id`),
  KEY `IDX_6DE30D91A76ED395` (`user_id`),
  CONSTRAINT `FK_6DE30D9123EDC87` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  CONSTRAINT `FK_6DE30D91A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doctrine_migration_versions`
--

LOCK TABLES `doctrine_migration_versions` WRITE;
/*!40000 ALTER TABLE `doctrine_migration_versions` DISABLE KEYS */;
INSERT INTO `doctrine_migration_versions` VALUES ('DoctrineMigrations\\Version20220305154516','2022-03-05 16:45:39',1092),('DoctrineMigrations\\Version20220305160809','2022-03-05 17:08:13',472),('DoctrineMigrations\\Version20220305171632','2022-03-05 18:16:40',20272),('DoctrineMigrations\\Version20220319021436','2022-03-19 03:14:45',6869);
/*!40000 ALTER TABLE `doctrine_migration_versions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `event` (
  `id` int NOT NULL AUTO_INCREMENT,
  `subject_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3BAE0AA723EDC87` (`subject_id`),
  CONSTRAINT `FK_3BAE0AA723EDC87` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grade`
--

DROP TABLE IF EXISTS `grade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grade` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `mark` double NOT NULL,
  `weight` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_595AAE34A76ED395` (`user_id`),
  KEY `IDX_595AAE3423EDC87` (`subject_id`),
  CONSTRAINT `FK_595AAE3423EDC87` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  CONSTRAINT `FK_595AAE34A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grade`
--

LOCK TABLES `grade` WRITE;
/*!40000 ALTER TABLE `grade` DISABLE KEYS */;
/*!40000 ALTER TABLE `grade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lesson_plan`
--

DROP TABLE IF EXISTS `lesson_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `lesson_plan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_group_id` int DEFAULT NULL,
  `day` int NOT NULL,
  `number` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E42B9D194DDF95DC` (`student_group_id`),
  CONSTRAINT `FK_E42B9D194DDF95DC` FOREIGN KEY (`student_group_id`) REFERENCES `student_group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lesson_plan`
--

LOCK TABLES `lesson_plan` WRITE;
/*!40000 ALTER TABLE `lesson_plan` DISABLE KEYS */;
INSERT INTO `lesson_plan` VALUES (1,1,1,1,'Matematyka'),(2,1,1,2,'Matematyka'),(3,1,1,3,'Matematyka'),(4,1,1,4,'Fizyka'),(5,1,1,5,'Fizyka'),(6,1,1,6,'Brak zajęć'),(7,1,1,7,'Brak zajęć'),(8,1,1,8,'Brak zajęć'),(9,1,2,1,'Brak zajęć'),(10,1,2,2,'Brak zajęć'),(11,1,2,3,'Brak zajęć'),(12,1,2,4,'Brak zajęć'),(13,1,2,5,'Brak zajęć'),(14,1,2,6,'Brak zajęć'),(15,1,2,7,'Brak zajęć'),(16,1,2,8,'Brak zajęć'),(17,1,3,1,'Fizyka'),(18,1,3,2,'Fizyka'),(19,1,3,3,'Brak zajęć'),(20,1,3,4,'Brak zajęć'),(21,1,3,5,'Fizyka'),(22,1,3,6,'Brak zajęć'),(23,1,3,7,'Brak zajęć'),(24,1,3,8,'Brak zajęć'),(25,1,4,1,'Fizyka'),(26,1,4,2,'Fizyka'),(27,1,4,3,'Brak zajęć'),(28,1,4,4,'Matematyka'),(29,1,4,5,'Matematyka'),(30,1,4,6,'Brak zajęć'),(31,1,4,7,'Brak zajęć'),(32,1,4,8,'Brak zajęć'),(33,1,5,1,'Matematyka'),(34,1,5,2,'Fizyka'),(35,1,5,3,'Fizyka'),(36,1,5,4,'Matematyka'),(37,1,5,5,'Brak zajęć'),(38,1,5,6,'Brak zajęć'),(39,1,5,7,'Brak zajęć'),(40,1,5,8,'Brak zajęć'),(41,2,1,1,'Fizyka'),(42,2,1,2,'Fizyka'),(43,2,1,3,'Fizyka'),(44,2,1,4,'Brak zajęć'),(45,2,1,5,'Brak zajęć'),(46,2,1,6,'Brak zajęć'),(47,2,1,7,'Fizyka'),(48,2,1,8,'Fizyka'),(49,2,2,1,'Brak zajęć'),(50,2,2,2,'Brak zajęć'),(51,2,2,3,'Brak zajęć'),(52,2,2,4,'Brak zajęć'),(53,2,2,5,'Brak zajęć'),(54,2,2,6,'Brak zajęć'),(55,2,2,7,'Brak zajęć'),(56,2,2,8,'Brak zajęć'),(57,2,3,1,'Brak zajęć'),(58,2,3,2,'Fizyka'),(59,2,3,3,'Brak zajęć'),(60,2,3,4,'Brak zajęć'),(61,2,3,5,'Fizyka'),(62,2,3,6,'Brak zajęć'),(63,2,3,7,'Brak zajęć'),(64,2,3,8,'Brak zajęć'),(65,2,4,1,'Fizyka'),(66,2,4,2,'Brak zajęć'),(67,2,4,3,'Brak zajęć'),(68,2,4,4,'Brak zajęć'),(69,2,4,5,'Brak zajęć'),(70,2,4,6,'Brak zajęć'),(71,2,4,7,'Fizyka'),(72,2,4,8,'Brak zajęć'),(73,2,5,1,'Fizyka'),(74,2,5,2,'Brak zajęć'),(75,2,5,3,'Brak zajęć'),(76,2,5,4,'Brak zajęć'),(77,2,5,5,'Brak zajęć'),(78,2,5,6,'Brak zajęć'),(79,2,5,7,'Brak zajęć'),(80,2,5,8,'Brak zajęć');
/*!40000 ALTER TABLE `lesson_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `note`
--

DROP TABLE IF EXISTS `note`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `note` (
  `id` int NOT NULL AUTO_INCREMENT,
  `student_id` int DEFAULT NULL,
  `teacher_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_CFBDFA14CB944F1A` (`student_id`),
  KEY `IDX_CFBDFA1441807E1D` (`teacher_id`),
  CONSTRAINT `FK_CFBDFA1441807E1D` FOREIGN KEY (`teacher_id`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_CFBDFA14CB944F1A` FOREIGN KEY (`student_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note`
--

LOCK TABLES `note` WRITE;
/*!40000 ALTER TABLE `note` DISABLE KEYS */;
/*!40000 ALTER TABLE `note` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rating` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `student_group_id` int DEFAULT NULL,
  `subject_id` int DEFAULT NULL,
  `grades` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `average` double DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D8892622A76ED395` (`user_id`),
  KEY `IDX_D88926224DDF95DC` (`student_group_id`),
  KEY `IDX_D889262223EDC87` (`subject_id`),
  CONSTRAINT `FK_D889262223EDC87` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`id`),
  CONSTRAINT `FK_D88926224DDF95DC` FOREIGN KEY (`student_group_id`) REFERENCES `student_group` (`id`),
  CONSTRAINT `FK_D8892622A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES (1,2,1,1,'4 4 2 2',NULL),(2,5,1,1,'2 2 1',NULL),(3,6,1,1,'5 5 5 5',NULL),(4,7,1,1,'4 4 1 2',NULL),(5,8,1,1,'2 2 2 2 2 2',NULL),(6,3,2,2,'2',NULL),(7,4,2,2,'4 4 4',NULL),(8,2,1,3,'4',NULL),(9,5,1,3,'5 5 5',NULL),(10,6,1,3,'1 1 5 5',NULL),(11,7,1,3,'2 2 5',NULL),(12,8,1,3,'3 3 5 5',NULL),(13,9,1,3,NULL,NULL),(14,9,1,1,'2 1 5',NULL);
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_group`
--

DROP TABLE IF EXISTS `student_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_E5F73D58A76ED395` (`user_id`),
  CONSTRAINT `FK_E5F73D58A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_group`
--

LOCK TABLES `student_group` WRITE;
/*!40000 ALTER TABLE `student_group` DISABLE KEYS */;
INSERT INTO `student_group` VALUES (1,1,'8 B'),(2,1,'8 A'),(3,1,'Nauczyciel');
/*!40000 ALTER TABLE `student_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subject` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `student_group_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FBCE3E7AA76ED395` (`user_id`),
  KEY `IDX_FBCE3E7A4DDF95DC` (`student_group_id`),
  CONSTRAINT `FK_FBCE3E7A4DDF95DC` FOREIGN KEY (`student_group_id`) REFERENCES `student_group` (`id`),
  CONSTRAINT `FK_FBCE3E7AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subject`
--

LOCK TABLES `subject` WRITE;
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` VALUES (1,1,1,'Matematyka'),(2,1,2,'Fizyka'),(3,1,1,'Fizyka');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `student_group_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`),
  KEY `IDX_8D93D6494DDF95DC` (`student_group_id`),
  CONSTRAINT `FK_8D93D6494DDF95DC` FOREIGN KEY (`student_group_id`) REFERENCES `student_group` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'on@o2.pl','[\"ROLE_ADMIN\"]','$2y$13$jScat4NpPrqSpsOeV/hSmeabOkALffbGSsPGtQLt.sMiIxNHn4IiO','Jacek','Kucharczyk','Warszawa Polna 32','547427852','teacher',NULL),(2,'yu@o2.pl','[]','$2y$13$K4TaKh3sS.Xr895reNaN0OOiaJuY7sJmxC09mMSEHBdj6eLHuXBam','Łukasz','Białek','Warszawa Miodowa 12','88844875','teacher',NULL),(3,'en@o2.pl','[]','$2y$13$ZhSreydE/p9mhMI6ser1jOjkpAMHa3syNzrmC9WfGdDulO3Yd9Z1m','Arkadiusz','Olszewski','Warszawa Polna 2','528741555','student',2),(4,'uczen@o2.pl','[]','$2y$13$O/aZvG4rxLXglMqX1GHrKevbtJ0W.KpumwFP2AaYI52V1ZqaW3rIi','Łukasz','Jarecki','Poznań Polna 3','88844888','student',2),(5,'zz@z','[]','123','Adam','Adam','Wars','552123123','student',1),(6,'2@2','[]','123','Mariusz','Zaromski','Krajowa 12','222222222','student',1),(7,'uczen1@o2.pl','[]','$2y$13$kez.6tDxS71E3yriIS1ucuv.XevtDDBZ8r9PJ5Z.LE5.AhCdMZtpa','Jacek','Nowak','Adres 123','888444555','student',1),(8,'uczen3@o2.pl','[]','$2y$13$2NlvDL01K4G.ZTCILqDcQ.4AmkO63E8a1j4jVE/Etrw96qOs8WmOm','Jan','Orłowski','Warszawa Kotłowska 2','555555545','student',1),(9,'uczen4@o2.pl','[]','$2y$13$rqqeWGO41Urdvd10hj0jZu5iddR.hUOnahaynRJNMkPyg5GDTSfnG','Leszek','Gmocki','Warszawa Akademicka 21','553123456','student',1);
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

-- Dump completed on 2022-03-26  3:30:38
