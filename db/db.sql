-- MySQL dump 10.13  Distrib 5.5.46, for debian-linux-gnu (armv7l)
--
-- Host: localhost    Database: caixamagica
-- ------------------------------------------------------
-- Server version	5.5.46-0+deb7u1

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
-- Table structure for table `transacoes_caixamagica`
--

DROP TABLE IF EXISTS `transacoes_caixamagica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transacoes_caixamagica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idioma` varchar(10) DEFAULT NULL,
  `metodo` tinyint(4) DEFAULT NULL,
  `m1` varchar(2) DEFAULT NULL,
  `m1_texto` varchar(4048) DEFAULT NULL,
  `m2` int(11) DEFAULT NULL,
  `m3` varchar(2) DEFAULT NULL,
  `m3_texto` varchar(4048) DEFAULT NULL,
  `m3_origem` int(11) DEFAULT NULL,
  `nao_importa` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=171 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transacoes_caixamagica`
--

LOCK TABLES `transacoes_caixamagica` WRITE;
/*!40000 ALTER TABLE `transacoes_caixamagica` DISABLE KEYS */;
INSERT INTO `transacoes_caixamagica` VALUES (161,'por',1,'c','NÃ£o gosto das obras nos terminais, pois nunca acabam ',NULL,NULL,NULL,NULL,NULL,'2015-11-27 21:17:17','192.168.0.126'),(162,'por',1,'c','NÃ£o gosto do tempo de travessia pois demora muito ',NULL,NULL,NULL,NULL,NULL,'2015-11-27 21:17:50','192.168.0.126'),(163,'por',1,'b','NÃ£o existe boa organizaÃ§Ã£o.',NULL,NULL,NULL,NULL,NULL,'2015-11-27 21:17:58','192.168.0.128'),(165,'por',1,'b','NÃ£o existe ar condicionado e o calor Ã© insuportÃ¡vel.',NULL,NULL,NULL,NULL,NULL,'2015-11-27 21:18:13','192.168.0.128'),(167,'por',1,'c','NÃ£o gosto do preÃ§o cobrado.',NULL,NULL,NULL,NULL,NULL,'2015-11-27 21:18:26','192.168.0.128'),(168,'por',1,'b','NÃ£o existe pontualidade na saÃ­da das barcas.',NULL,NULL,NULL,NULL,NULL,'2015-11-27 21:18:41','192.168.0.128');
/*!40000 ALTER TABLE `transacoes_caixamagica` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-11-27 22:20:56
