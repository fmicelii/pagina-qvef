-- MySQL dump 10.13  Distrib 8.0.39, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: db_qvef
-- ------------------------------------------------------
-- Server version	8.0.39-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `precio` int DEFAULT NULL,
  `talle` varchar(45) DEFAULT NULL,
  `color` varchar(45) DEFAULT NULL,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `categoria` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producto`
--

LOCK TABLES `producto` WRITE;
/*!40000 ALTER TABLE `producto` DISABLE KEYS */;
INSERT INTO `producto` VALUES (1,'nike phantom','botines rojos',100000,'43','rojo','../img/botines_rojos_phantom1.jpeg','../img/botines_rojos_phantom2.jpeg','../img/botines_rojos_phantom3.jpeg','../img/botines_rojos_phantom4.jpeg','../img/botines_rojos_phantom_pezzella.jpeg','botin'),(2,'nike phantom','botines celestes',50000,'44','celeste','../img/botines_celeste_phantom1.png','../img/botines_celeste_phantom2.png','../img/botines_celeste_phantom3.png','../img/botines_celeste_phantom4.png','botines_celeste_phantom_enzo.jpg','botin'),(3,'puma borussia','botines maradona',60000,'40','negro','../img/botines_negros_borussia1.jpg','../img/botines_negros_borussia2.jpg','../img/botines_negros_borussia3.jpg','../img/botines_negros_borussia4.jpg','../img/botines_negros_borussia_maradona.jpg','botin'),(4,'puma future','botines verdes',120000,'39','verde','../img/botines_verdes_future1.jpg','../img/botines_verdes_future2.jpg','../img/botines_verdes_future3.jpg','../img/botines_verdes_future4.jpg','../img/botines_verdes_future_neymar.jpg','botin'),(5,'adidas f50','botines dorados',200000,'47','dorado','../img/botines_dorados_f501.jpg','../img/botines_dorados_f502.jpg','../img/botines_dorados_f503.jpg','../img/botines_dorados_f504.jpg','../img/botines_dorados_f50_messi.jpg','botin'),(6,'boca alternativa','camiseta boca',912000,'l','azul','../img/camiseta_boca1.jpg','../img/camiseta_boca2.jpg','../img/camiseta_boca_cavani.jpg','../img/camiseta_boca_medina.jpg','../img/camiseta_boca_lolo.jpg','camiseta'),(7,'river entrenamiento','camiseta river',31000,'m','blanco','../img/camiseta_river1.jpg','../img/camiseta_river2.jpg','../img/camiseta_river_fonseca.jpg','../img/camiseta_river_pity.jpg','../img/camiseta_river_fran.jpg','camiseta'),(8,'argentina titular','camiseta argentina',100000,'s','celeste','../img/camiseta_argentina1.jpg','../img/camiseta_argentina2.jpg','../img/camiseta_argentina_depaul.jpg','../img/camiseta_argentina_julian.jpg','../img/camiseta_argentina_lolo.jpg','camiseta'),(10,'racing titular','camiseta racing',67000,'l','celeste','../img/camiseta_racing1.jpg','../img/camiseta_racing2.jpg','../img/camiseta_racing_maravilla.jpg','../img/camiseta_racing_martirena.jpg','../img/camiseta_racing_santi.jpg','camiseta'),(12,'defensores titular','camiseta 2001 original',160000,'xl','rojo','../img/camiseta_defensores1.jpeg','../img/camiseta_defensores2.jpeg','../img/camiseta_defensores_eze.jpeg','../img/camiseta_defensores_eze2.jpeg','../img/camiseta_defensores_plantel.jpg','camiseta');
/*!40000 ALTER TABLE `producto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `contrasena` varchar(45) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Sgroleo9@gmail.com','Juan','Perez','dasd','ssss',22222),(2,'fran@gmail.com','Juan','Perez','dasd','2',22222),(3,'asdasdfran@gmail.com','Juan','Perez','dasd','234',22222),(4,'franaisj@gmail.com','Francisco','Miceli','asdasf','1',123),(5,'fran123@gmail.com','Francisco','Miceli','asdasf','1',123),(6,'lolito@hotmail.com','lolo','tabuada','asdas','1',234),(7,'nicoorgnero@gmail.com','nicolas','orgnegro','la_casa_de_la_mama_de_lolo 123','lamamadelolo<3',123321123);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-29 10:23:04
