-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
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
  `id_dep` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ciu`),
  KEY `FK_ciudad_departamento` (`id_dep`),
  CONSTRAINT `FK_ciudad_departamento` FOREIGN KEY (`id_dep`) REFERENCES `departamento` (`id_dep`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inxait.ciudad: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `ciudad` DISABLE KEYS */;
INSERT INTO `ciudad` (`id_ciu`, `nom_ciu`, `id_dep`) VALUES
	(1, 'bogota', 1),
	(2, 'girardot', 1),
	(3, 'funza', 1),
	(4, 'ibague', 2),
	(5, 'armero', 2),
	(6, 'benadillo', 2),
	(7, 'cali', 3),
	(8, 'buenaventura', 3),
	(9, 'palmira', 3);
/*!40000 ALTER TABLE `ciudad` ENABLE KEYS */;

-- Volcando estructura para tabla inxait.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `cedula` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `departamento` varchar(50) DEFAULT NULL,
  `id_ciu` int(11) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `celular` int(10) DEFAULT NULL,
  `correo` varchar(150) DEFAULT NULL,
  `id_concurso` int(11) DEFAULT NULL,
  PRIMARY KEY (`cedula`),
  KEY `FK_cliente_concurso` (`id_concurso`),
  KEY `FK_cliente_ciudad` (`id_ciu`),
  CONSTRAINT `FK_cliente_ciudad` FOREIGN KEY (`id_ciu`) REFERENCES `ciudad` (`id_ciu`),
  CONSTRAINT `FK_cliente_concurso` FOREIGN KEY (`id_concurso`) REFERENCES `concurso` (`id_con`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inxait.cliente: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`cedula`, `fecha`, `nombre`, `apellido`, `departamento`, `id_ciu`, `ciudad`, `celular`, `correo`, `id_concurso`) VALUES
	(677, '2018-02-07 05:49:04', 'Hugo Fabian', 'asd', 'Tolima', 4, 'ibague', 34234, 'favhyan@gmail.com', 19),
	(34234, '2018-02-07 05:49:04', 'Hugo Fabian', 'asd', 'cauca', 7, 'cali', 34234, 'favhyan@gmail.com', 19),
	(454545, '2018-02-07 05:49:04', 'Hugo Fabian', 'asd', 'cundinamarca', 1, 'bogota', 34234, 'favhyan@gmail.com', 19),
	(75676756, '2018-02-07 05:49:04', 'Hugo Fabian', 'asd', 'Tolima', 4, 'ibague', 34234, 'favhyan@gmail.com', 19),
	(1110465049, '2018-02-07 05:49:04', 'Hugo Fabian', 'asd', 'Tolima', 4, 'ibague', 34234, 'favhyan@gmail.com', 19);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Volcando estructura para tabla inxait.concurso
CREATE TABLE IF NOT EXISTS `concurso` (
  `id_con` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_con` timestamp NULL DEFAULT NULL,
  `cedula` int(11) DEFAULT NULL,
  `competencia` char(1) DEFAULT '1',
  PRIMARY KEY (`id_con`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inxait.concurso: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `concurso` DISABLE KEYS */;
INSERT INTO `concurso` (`id_con`, `fecha_con`, `cedula`, `competencia`) VALUES
	(16, '2018-02-06 14:17:39', 1, '1'),
	(17, '2018-02-06 14:39:11', 8, '1'),
	(18, '2018-02-06 20:58:41', 789, '1'),
	(19, '2018-02-07 05:49:04', 454545, '1');
/*!40000 ALTER TABLE `concurso` ENABLE KEYS */;

-- Volcando estructura para tabla inxait.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `id_dep` int(11) NOT NULL AUTO_INCREMENT,
  `nom_dep` varchar(50),
  PRIMARY KEY (`id_dep`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla inxait.departamento: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
INSERT INTO `departamento` (`id_dep`, `nom_dep`) VALUES
	(1, 'cundinamarca'),
	(2, 'Tolima'),
	(3, 'cauca');
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
