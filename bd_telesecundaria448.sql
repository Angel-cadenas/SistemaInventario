-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2023 a las 18:31:31
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_telesecundaria448`
--
CREATE DATABASE IF NOT EXISTS `bd_telesecundaria448` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bd_telesecundaria448`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

DROP TABLE IF EXISTS `almacen`;
CREATE TABLE IF NOT EXISTS `almacen` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `material` varchar(50) NOT NULL,
  `cantidad` int(2) NOT NULL,
  `responsable` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id`, `nombre`, `material`, `cantidad`, `responsable`) VALUES
(1, 'Escoba', 'Madera', 3, 'Ignacio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apepat` varchar(30) NOT NULL,
  `apemat` varchar(30) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `tutor` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apepat`, `apemat`, `domicilio`, `tutor`) VALUES
(22, 'Alejandro', 'Alcazar', 'Gordillo', 'Conocido', 'Ramirez Ramirez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

DROP TABLE IF EXISTS `aulas`;
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `docente` int(4) NOT NULL,
  `almacen_id` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `docente` (`docente`),
  KEY `almacen_id` (`almacen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

DROP TABLE IF EXISTS `docentes`;
CREATE TABLE IF NOT EXISTS `docentes` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apepat` varchar(30) NOT NULL,
  `apemat` varchar(30) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id`, `nombre`, `apepat`, `apemat`, `clave`, `telefono`, `correo`) VALUES
(1, 'Oscar', 'Jimenez', 'Gonzalez', 'OGON23', '961235456', 'Conocido'),
(2, 'Martha', 'Clarck', 'Lopez', 'MAC0235', '962321232', 'Conocido'),
(3, 'Oscar', 'Jimenez', 'Gonzalez', 'OGON23', '961235456', 'Conocido'),
(4, 'Martha', 'Clarck', 'Lopez', 'MAC0235', '962321232', 'Conocido'),
(5, 'Odalis', 'Cruz', 'Martinez', 'ODA1230', '9632365236', 'conocido'),
(6, 'Gabriel', 'Madrid', 'Alcazar', 'GAB123', '1236523123', 'conocido'),
(7, 'Zuleyma', 'Gomez', 'Ramirez', 'zul0523', '963215320', 'asd@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `docente` int(4) NOT NULL,
  `alumno_id` int(4) NOT NULL,
  `grado` int(2) NOT NULL,
  `generación` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `docente` (`docente`),
  KEY `alumno_id` (`alumno_id`),
  KEY `alumno_id_2` (`alumno_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

DROP TABLE IF EXISTS `historial`;
CREATE TABLE IF NOT EXISTS `historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alumno_id` int(4) NOT NULL,
  `docente_id` int(4) NOT NULL,
  `grado` int(2) NOT NULL,
  `grupo` varchar(4) NOT NULL,
  `generacion` varchar(30) NOT NULL,
  `materia` varchar(30) NOT NULL,
  `calificacion` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `alumno_id`, `docente_id`, `grado`, `grupo`, `generacion`, `materia`, `calificacion`) VALUES
(7, 22, 1, 1, 'A', '2020-2023', 'Español', 0),
(8, 22, 1, 1, 'A', '2020-2023', 'Matemáticas', 0),
(9, 22, 2, 2, 'B', '2020-2023', 'Etica', 0),
(10, 22, 2, 2, 'B', '2020-2023', 'Geografia', 0),
(11, 22, 5, 3, 'A', '2020-2023', 'Ingles III', 0),
(12, 22, 5, 3, 'A', '2020-2023', 'Informatica', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

DROP TABLE IF EXISTS `materias`;
CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `grado` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `nombre`, `grado`) VALUES
(1, 'Español', 1),
(2, 'Matemáticas', 1),
(3, 'Etica', 2),
(4, 'GEografia', 2),
(5, 'Ingles III', 3),
(6, 'Informatica', 3);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD CONSTRAINT `aulas_ibfk_1` FOREIGN KEY (`docente`) REFERENCES `docentes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aulas_ibfk_2` FOREIGN KEY (`almacen_id`) REFERENCES `almacen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `grupos_ibfk_1` FOREIGN KEY (`docente`) REFERENCES `docentes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `grupos_ibfk_2` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
