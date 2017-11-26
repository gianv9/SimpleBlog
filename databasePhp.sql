-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: databasePhp
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Current Database: `databasePhp`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `databasePhp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `databasePhp`;

--
-- Table structure for table `blog_posts`
--

DROP TABLE IF EXISTS `blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `content` longtext NOT NULL,
  `img_url` text,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blog_posts`
--

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;
INSERT INTO `blog_posts` VALUES (1,'Title 1','  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas ultricies augue.\r\n                        Donec hendrerit tellus a malesuada imperdiet. Sed sapien nibh,\r\n                        tristique vitae enim id, posuere dictum odio. Nullam vestibulum diam sed ipsum hendrerit placerat.\r\n                        Phasellus commodo, arcu sit amet fermentum commodo, tortor magna egestas sapien, ac sollicitudin\r\n                        nibh augue nec quam. Sed accumsan aliquet nibh, vel dictum eros lacinia sed. Vivamus aliquam ligula\r\n                        urna, eget imperdiet sapien venenatis eget. Praesent sem tellus, tincidunt nec elit ut, facilisis\r\n                        tempor elit. Morbi facilisis sem condimentum libero pellentesque, tempor blandit risus efficitur.\r\n                        Sed quis dolor tempor metus fringilla pharetra sed ut metus.\r\n\r\n                        Cras varius posuere accumsan. Sed pharetra pellentesque velit, eu tincidunt ligula posuere ut.\r\n                        Maecenas nulla libero, maximus eu dui tincidunt, auctor tempus quam. Aliquam iaculis fringilla velit,\r\n                        nec consequat sapien. Pellentesque scelerisque nulla vitae fermentum pellentesque. In vel laoreet nisl,\r\n                        quis pulvinar ante. Praesent mattis, eros vel dapibus interdum, urna.',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'Title2','  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer egestas ultricies augue.\r\n                        Donec hendrerit tellus a malesuada imperdiet. Sed sapien nibh,\r\n                        tristique vitae enim id, posuere dictum odio. Nullam vestibulum diam sed ipsum hendrerit placerat.\r\n                        Phasellus commodo, arcu sit amet fermentum commodo, tortor magna egestas sapien, ac sollicitudin\r\n                        nibh augue nec quam. Sed accumsan aliquet nibh, vel dictum eros lacinia sed. Vivamus aliquam ligula\r\n                        urna, eget imperdiet sapien venenatis eget. Praesent sem tellus, tincidunt nec elit ut, facilisis\r\n                        tempor elit. Morbi facilisis sem condimentum libero pellentesque, tempor blandit risus efficitur.\r\n                        Sed quis dolor tempor metus fringilla pharetra sed ut metus.\r\n\r\n                        Cras varius posuere accumsan. Sed pharetra pellentesque velit, eu tincidunt ligula posuere ut.\r\n                        Maecenas nulla libero, maximus eu dui tincidunt, auctor tempus quam. Aliquam iaculis fringilla velit,\r\n                        nec consequat sapien. Pellentesque scelerisque nulla vitae fermentum pellentesque. In vel laoreet nisl,\r\n                        quis pulvinar ante. Praesent mattis, eros vel dapibus interdum, urna.',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'fdg','dfg',NULL,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'heuheuh','hueheuheuheuhsuvgrlxdfgtrbxdfghxghxfghxcfghgf',NULL,'2017-11-03 05:52:52','2017-11-03 05:52:52'),(5,'Post de Andy','JEEDEDEDEDEWf',NULL,'2017-11-03 19:43:16','2017-11-03 19:43:16'),(6,'This is the best blog entry','HUEHUEHUE',NULL,'2017-11-03 20:17:40','2017-11-03 20:17:40'),(7,'Yet another blog entry','DFSDFSDFSDFS\r\n\r\nm vestibulum diam sed ipsum hendrerit placerat. Phasellus commodo, arcu sit amet fermentum commodo, tortor magna egestas sapien, ac sollicitudin nibh augue nec quam. Sed accumsan aliquet nibh, vel dictum eros lacinia sed. Vivamus aliquam ligula urna, eget imperdiet sapien venenatis eget. Prae',NULL,'2017-11-03 20:18:33','2017-11-03 20:18:33'),(8,'dfgdf','dfgdfg',NULL,'2017-11-06 22:33:27','2017-11-06 22:33:27'),(9,'What People think about Paola Verrocchi','gay....',NULL,'2017-11-24 20:32:22','2017-11-24 20:32:22');
/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'Gian','gian@gmail.com','$2y$10$xxfCiKPUTLfxNX9pwHNfueE.3ZP1cB/NyXVAfCRCuu6j60h7dvcuC','2017-11-09 20:42:25','2017-11-09 20:42:25');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-11-26 10:57:59
