-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: rest
-- ------------------------------------------------------
-- Server version	5.7.21-log

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecategoria` varchar(150) NOT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES (8,'PLATILLO'),(9,'POSTRES'),(13,'BEBIDAS');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalles`
--

DROP TABLE IF EXISTS `detalles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalles` (
  `iddetalle` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL,
  PRIMARY KEY (`iddetalle`),
  KEY `FK__productos` (`idproducto`),
  KEY `FK_detalles_usuarios` (`idusuario`),
  CONSTRAINT `FK__productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_detalles_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalles`
--

LOCK TABLES `detalles` WRITE;
/*!40000 ALTER TABLE `detalles` DISABLE KEYS */;
INSERT INTO `detalles` VALUES (3,2,117,'19-01-2017',1,'MESA 3'),(5,1,40,'24-01-2017',3,'MESA 1'),(8,4,130,'22-07-2018',5,'MESA 1'),(9,3,40,'22-07-2018',5,'MESA 1');
/*!40000 ALTER TABLE `detalles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagen`
--

DROP TABLE IF EXISTS `imagen`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagen` (
  `idimagen` int(11) NOT NULL AUTO_INCREMENT,
  `imagen` longblob NOT NULL,
  `tipo_imagen` varchar(30) CHARACTER SET latin1 COLLATE latin1_danish_ci DEFAULT NULL,
  PRIMARY KEY (`idimagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagen`
--

LOCK TABLES `imagen` WRITE;
/*!40000 ALTER TABLE `imagen` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagen` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa1`
--

DROP TABLE IF EXISTS `mesa1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa1` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 1',
  PRIMARY KEY (`idmesa`),
  KEY `FK_mesa1_productos` (`idproducto`),
  KEY `FK_mesa1_usuarios` (`idusuario`),
  CONSTRAINT `FK_mesa1_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa1_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa1`
--

LOCK TABLES `mesa1` WRITE;
/*!40000 ALTER TABLE `mesa1` DISABLE KEYS */;
INSERT INTO `mesa1` VALUES (1,2,117,'23-07-2018',5,'MESA 1'),(2,3,40,'23-07-2018',5,'MESA 1');
/*!40000 ALTER TABLE `mesa1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa10`
--

DROP TABLE IF EXISTS `mesa10`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa10` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 10',
  PRIMARY KEY (`idmesa`),
  KEY `FK_mase10_productos` (`idproducto`),
  KEY `FK_mesa10_usuarios` (`idusuario`),
  CONSTRAINT `FK_mase10_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa10_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa10`
--

LOCK TABLES `mesa10` WRITE;
/*!40000 ALTER TABLE `mesa10` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesa10` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa2`
--

DROP TABLE IF EXISTS `mesa2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa2` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 2',
  PRIMARY KEY (`idmesa`),
  KEY `FK_mesa2_productos` (`idproducto`),
  KEY `FK_mesa2_usuarios` (`idusuario`),
  CONSTRAINT `FK_mesa2_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa2_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa2`
--

LOCK TABLES `mesa2` WRITE;
/*!40000 ALTER TABLE `mesa2` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesa2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa3`
--

DROP TABLE IF EXISTS `mesa3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa3` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 3',
  PRIMARY KEY (`idmesa`),
  KEY `idproducto` (`idproducto`),
  KEY `FK_mesa3_usuarios` (`idusuario`),
  CONSTRAINT `FK_mesa3_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa3_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa3`
--

LOCK TABLES `mesa3` WRITE;
/*!40000 ALTER TABLE `mesa3` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesa3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa4`
--

DROP TABLE IF EXISTS `mesa4`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa4` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 4',
  PRIMARY KEY (`idmesa`),
  KEY `FK_mesa4_productos` (`idproducto`),
  CONSTRAINT `FK_mesa4_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa4`
--

LOCK TABLES `mesa4` WRITE;
/*!40000 ALTER TABLE `mesa4` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesa4` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa5`
--

DROP TABLE IF EXISTS `mesa5`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa5` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 5',
  PRIMARY KEY (`idmesa`),
  KEY `idproducto` (`idproducto`),
  KEY `FK_mesa5_usuarios` (`idusuario`),
  CONSTRAINT `FK_mesa5_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa5_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa5`
--

LOCK TABLES `mesa5` WRITE;
/*!40000 ALTER TABLE `mesa5` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesa5` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa6`
--

DROP TABLE IF EXISTS `mesa6`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa6` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 6',
  PRIMARY KEY (`idmesa`),
  KEY `FK_mesa6_productos` (`idproducto`),
  KEY `FK_mesa6_usuarios` (`idusuario`),
  CONSTRAINT `FK_mesa6_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa6_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa6`
--

LOCK TABLES `mesa6` WRITE;
/*!40000 ALTER TABLE `mesa6` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesa6` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa7`
--

DROP TABLE IF EXISTS `mesa7`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa7` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 7',
  PRIMARY KEY (`idmesa`),
  KEY `FK_mesa7_productos` (`idproducto`),
  KEY `FK_mesa7_usuarios` (`idusuario`),
  CONSTRAINT `FK_mesa7_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa7_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa7`
--

LOCK TABLES `mesa7` WRITE;
/*!40000 ALTER TABLE `mesa7` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesa7` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa8`
--

DROP TABLE IF EXISTS `mesa8`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa8` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 8',
  PRIMARY KEY (`idmesa`),
  KEY `FK_mesa8_productos` (`idproducto`),
  KEY `FK_mesa8_usuarios` (`idusuario`),
  CONSTRAINT `FK_mesa8_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa8_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa8`
--

LOCK TABLES `mesa8` WRITE;
/*!40000 ALTER TABLE `mesa8` DISABLE KEYS */;
INSERT INTO `mesa8` VALUES (2,2,117,'22-07-2018',5,'MESA 8'),(3,3,40,'22-07-2018',5,'MESA 8');
/*!40000 ALTER TABLE `mesa8` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesa9`
--

DROP TABLE IF EXISTS `mesa9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesa9` (
  `idmesa` int(11) NOT NULL AUTO_INCREMENT,
  `idproducto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `fecha` varchar(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `mesa` varchar(50) NOT NULL DEFAULT 'MESA 9',
  PRIMARY KEY (`idmesa`),
  KEY `FK_mesa9_productos` (`idproducto`),
  KEY `FK_mesa9_usuarios` (`idusuario`),
  CONSTRAINT `FK_mesa9_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_mesa9_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesa9`
--

LOCK TABLES `mesa9` WRITE;
/*!40000 ALTER TABLE `mesa9` DISABLE KEYS */;
/*!40000 ALTER TABLE `mesa9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `idproducto` int(11) NOT NULL AUTO_INCREMENT,
  `nombreproducto` text NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `precio` double NOT NULL,
  `idusuario` int(11) NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `FK_productos_categorias` (`idcategoria`),
  KEY `FK_productos_usuarios` (`idusuario`),
  CONSTRAINT `FK_productos_categorias` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_productos_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `usuarios` (`idusuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'HELADOS',9,40,1),(2,'MILANESA C/ FRITAS',8,117,1),(3,'FLAN',9,40,1),(4,'COLITA DE CUADRIL',8,130,1),(5,'ljhjhj',13,86757,5);
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedores`
--

DROP TABLE IF EXISTS `proveedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proveedores` (
  `idproveedor` int(11) NOT NULL AUTO_INCREMENT,
  `nombreproveedor` varchar(150) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  PRIMARY KEY (`idproveedor`),
  KEY `idcategoria` (`idcategoria`),
  KEY `idproducto` (`idproducto`),
  CONSTRAINT `FK_proveedores_categorias` FOREIGN KEY (`idcategoria`) REFERENCES `categorias` (`idcategoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_proveedores_productos` FOREIGN KEY (`idproducto`) REFERENCES `productos` (`idproducto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedores`
--

LOCK TABLES `proveedores` WRITE;
/*!40000 ALTER TABLE `proveedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `proveedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservas` (
  `idreserva` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecliente` varchar(150) NOT NULL,
  `cantidadpersonas` varchar(150) NOT NULL,
  `telefono` varchar(150) NOT NULL,
  `diallegada` date NOT NULL,
  `horallegada` text NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`idreserva`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservas`
--

LOCK TABLES `reservas` WRITE;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
INSERT INTO `reservas` VALUES (3,'CARLOS ALVARES','12','12345678','2017-01-24','21:00','LIBRE MESA'),(12,'BIANCA ANIDUZZI','22','4584463','2017-01-25','22:00','Sin Restricciones'),(16,'DIEGO PENNISI','13','23455677','2017-01-25','20:45','VINO GRAN RESERVA\r\n'),(17,'DIEGO PENNISI','22','3414584463','2017-01-24','21:30','SIN PAN'),(19,'BIANCA ANIDUZZI','14','153693019','2017-01-28','22:00','MOZO JULIA\r\n'),(20,'0','8','33176766589','2019-08-22','14:00','incluir para bebes'),(21,'0','10','5636556456','2018-07-19','23:21','Sin Restricciones'),(22,'0','asdas|','qweqw','2017-10-19','22:00','Sin Restricciones'),(23,'0','24','t365646455758','2018-08-24','08:34','Sin Restricciones'),(24,'0','231','3317676559','2018-07-22','07:23','Sin Restricciones'),(25,'0','23','33176766589','2018-07-23','09:40','Sin Restricciones');
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombreusuario` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `fechacreado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'administrador','1234','2016-12-22 03:59:29'),(2,'TOMAS12','1234','2017-01-24 04:47:34'),(3,'admin','admin','2017-01-24 04:53:00'),(5,'santy','santy','2018-07-22 09:24:34');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-23 17:18:28
