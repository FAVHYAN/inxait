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

-- Volcando datos para la tabla inxait.cliente: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
INSERT INTO `cliente` (`cedula`, `fecha`, `nombre`, `apellido`, `departamento`, `ciudad`, `celular`, `correo`, `id_concurso`) VALUES
	(0, '2018-02-06 13:58:27', 'Hugo Fabian', 'asd', 'Tolima', 'ibague', 34234, 'favhyan@gmail.com', NULL),
	(1, '2018-02-06 13:58:39', 'Hugo Fabian', 'asd', 'cundinamarca', 'girardot', 34234, 'favhyan@gmail.com', NULL),
	(2, '2018-02-06 13:58:52', 'Webpaje internet Marketing ', 'asd', 'Tolima', 'armero', 34234, 'favhyan@gmail.com', NULL),
	(3, '2018-02-06 13:59:13', 'Hugo Fabian', 'asd', 'cundinamarca', 'girardot', 34234, 'favhyan@gmail.com', NULL);
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
