-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-07-2018 a las 23:42:19
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mundial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

DROP TABLE IF EXISTS `contacto`;
CREATE TABLE IF NOT EXISTS `contacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `correo`, `asunto`, `mensaje`) VALUES
(1, 'Nicolas', 'mansillanico39@gmail.com', 'ninguno', 'asdfasfdfgr');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`id`, `nombre`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G'),
(8, 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jugador`
--

DROP TABLE IF EXISTS `jugador`;
CREATE TABLE IF NOT EXISTS `jugador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_completo` varchar(250) CHARACTER SET latin1 NOT NULL,
  `fecha_nac` date NOT NULL,
  `info` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `pais_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pais_id` (`pais_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `jugador`
--

INSERT INTO `jugador` (`id`, `nombre_completo`, `fecha_nac`, `info`, `pais_id`) VALUES
(1, 'Luka Modric', '1985-09-09', 'Es un futbolista croata que juega como centrocampista y su equipo actual es el Real Madrid Club de Futbol de la Primera Division. Tambien es internacional con la seleccion de Croacia.', 10),
(2, 'Kylian Mbappe Lottin', '1998-12-20', 'Es un futbolista francés de ascendencia camerunesa y argelina,  juega como delantero y su actual equipo es el París Saint-Germain de la Ligue 1 de Francia.', 14),
(3, 'James Rodríguez', '1991-07-12', 'James David Rodríguez Rubio, también conocido futbolísticamente como James, es un futbolista colombiano que juega como centrocampista en el Bayern Múnich de la Bundesliga de Alemania, cedido por el Real Madrid Club de Fútbol. ', 7),
(4, 'Alán Yelizbárovich Dzagóyev', '1990-06-17', 'Alán Yelizbárovich Dzagóyev nació el 17 de junio de 1990 en Beslán y es un futbolista ruso. El futbolista, de origen étnico osetio, juega como centrocampista actualmente en el PFC CSKA Moscú y es internacional con Rusia.', 26),
(5, 'Mohamed Salah Ghaly', '1992-06-15', 'Es un futbolista egipcio, juega como extremo y su actual equipo es el Liverpool de la Premier League de Inglaterra. Además es internacional con la Selección de Egipto. Comenzó su carrera en Al-Mokawloon Al-Arab.', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`correo`,`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `correo`, `usuario`, `clave`) VALUES
(1, 'nico@yahoo.com.ar', 'Nicko232', '1584238b45dff1387bee64af18a5c45296383a8ae47ceb19a0dacec2b1d69ed31c44c222e493db03c6f13ee4d8c01cfc8ed3bfaba99a3b5bc0b3f6eafa93a163');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

DROP TABLE IF EXISTS `pais`;
CREATE TABLE IF NOT EXISTS `pais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `grupo_id` (`grupo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`id`, `nombre`, `grupo_id`) VALUES
(1, 'Alemania', 6),
(2, 'Arabia Saudita', 1),
(3, 'Argentina', 4),
(4, 'Australia', 3),
(5, 'Belgica', 7),
(6, 'Brasil', 5),
(7, 'Colombia', 8),
(8, 'Corea del Sur', 6),
(9, 'Costa Rica', 5),
(10, 'Croacia', 4),
(11, 'Dinamarca', 3),
(12, 'Egipto', 1),
(13, 'España', 2),
(14, 'Francia', 3),
(15, 'Inglaterra', 7),
(16, 'Iran', 2),
(17, 'Islandia', 4),
(18, 'Japon', 8),
(19, 'Marruecos', 2),
(20, 'Mexico', 6),
(21, 'Nigeria', 4),
(22, 'Panama', 7),
(23, 'Peru', 3),
(24, 'Polonia', 8),
(25, 'Portugal', 2),
(26, 'Rusia', 1),
(27, 'Senegal', 8),
(28, 'Serbia ', 5),
(29, 'Suecia', 6),
(30, 'Suiza', 5),
(31, 'Tunez', 7),
(32, 'Uruguay', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`pais_id`) REFERENCES `pais` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `pais`
--
ALTER TABLE `pais`
  ADD CONSTRAINT `pais_ibfk_1` FOREIGN KEY (`grupo_id`) REFERENCES `grupo` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
