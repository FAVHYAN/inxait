-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.24-log - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para inxait
CREATE DATABASE IF NOT EXISTS `inxait` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `inxait`;

-- Volcando estructura para tabla inxait.ciudad
CREATE TABLE IF NOT EXISTS `ciudad` (
  `id_ciu` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ciu` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_ciu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inxait.ciudad: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla inxait.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `cedula` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `departamento` int(6) DEFAULT NULL,
  `ciudad` int(6) DEFAULT NULL,
  `celular` int(10) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inxait.clientes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Volcando estructura para tabla inxait.concurso
CREATE TABLE IF NOT EXISTS `concurso` (
  `id_con` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_con` timestamp NULL DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `winner` enum('W','L') DEFAULT NULL,
  PRIMARY KEY (`id_con`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inxait.concurso: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `concurso` DISABLE KEYS */;
/*!40000 ALTER TABLE `concurso` ENABLE KEYS */;

-- Volcando estructura para tabla inxait.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_dep` int(11) NOT NULL AUTO_INCREMENT,
  `id_ciu` int(11) NOT NULL DEFAULT '0',
  `nom_dep` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_dep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inxait.departamento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
