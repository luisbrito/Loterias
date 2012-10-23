-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-07-2012 a las 22:38:52
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `loterias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('490fb07924ac0e8609a6d93bc724ac66', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11', 1343074047, 'a:2:{s:9:"user_data";s:0:"";s:9:"logged_in";a:3:{s:6:"iduser";s:1:"1";s:8:"username";s:7:"mchaves";s:6:"nombre";s:26:"Miguel González de Chaves";}}'),
('8f638ea0e578d4186898e47f1e427118', '127.0.0.1', 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11', 1343162293, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `codigoCliente` int(11) NOT NULL DEFAULT '0',
  `nombre` varchar(100) NOT NULL,
  `dni` varchar(10) DEFAULT NULL,
  `telefono` varchar(12) DEFAULT NULL,
  `debe` int(11) DEFAULT NULL,
  `observaciones` text,
  PRIMARY KEY (`codigoCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`codigoCliente`, `nombre`, `dni`, `telefono`, `debe`, `observaciones`) VALUES
(1, 'Paco Siverio', '12345678-K', '922343637', 31045, 'Comision de Tejiade'),
(2, 'Juan Luis Guerra', '12345678-K', '689236319', 50, 'Cantante'),
(3, 'Fernando Alonso', '12345678-K', '914267451', 0, NULL),
(4, 'Perico Delgado', '12345678-K', '912 34 56 78', 1000, NULL),
(5, 'PSOE Matanza', '12345678-K', '922561243', 10, 'Encargado: Juan Oliva'),
(6, 'Jorge Gonzalez', '12345678-K', '922134531', 0, NULL),
(7, 'Felipe Garcia', '12345678-K', '922026750', 0, NULL),
(8, 'Feliciano', '12345678-K', '922057411', 0, 'Tolete'),
(10, 'Pepe Moreno', '12345678-K', '922268479', 4000, NULL),
(11, 'Rogelio Martin', '12345678-K', '9221891364', 0, NULL),
(12, 'Inocencio Ramirez', '12345678-K', '922356781', 0, NULL),
(13, 'Placido Domingo', '12345678-K', '922134531', 0, NULL),
(14, 'Pau Gasol', '12345678-K', '922223431', 20, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numeros`
--

CREATE TABLE IF NOT EXISTS `numeros` (
  `numero` int(11) NOT NULL DEFAULT '0',
  `idsorteo` int(11) NOT NULL DEFAULT '0',
  `hojasTotales` float DEFAULT NULL,
  `hojasDisponibles` float DEFAULT NULL,
  PRIMARY KEY (`numero`,`idsorteo`),
  KEY `idsorteo` (`idsorteo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidonumero`
--

CREATE TABLE IF NOT EXISTS `pedidonumero` (
  `numero` int(11) NOT NULL DEFAULT '0',
  `idsorteo` int(11) NOT NULL DEFAULT '0',
  `idpedido` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`numero`,`idsorteo`,`idpedido`),
  KEY `idpedido` (`idpedido`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `idpedido` int(11) NOT NULL DEFAULT '0',
  `idcliente` int(11) DEFAULT NULL,
  `vale` varchar(50) DEFAULT NULL,
  `haber` float DEFAULT NULL,
  `entrega` float DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `idcliente` (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sorteos`
--

CREATE TABLE IF NOT EXISTS `sorteos` (
  `idsorteo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `importancia` int(11) DEFAULT NULL,
  `precioDecimo` float NOT NULL,
  `fecha` date NOT NULL,
  `debito` float DEFAULT '0',
  `observaciones` text,
  PRIMARY KEY (`idsorteo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `sorteos`
--

INSERT INTO `sorteos` (`idsorteo`, `nombre`, `importancia`, `precioDecimo`, `fecha`, `debito`, `observaciones`) VALUES
(1, 'Navidad 2011', 0, 20, '2011-12-22', 1000, NULL),
(2, 'Niño 2012', 2, 20, '2012-01-06', 0, NULL),
(3, 'Navidad 2012', 1, 20, '2012-12-22', 0, NULL),
(4, '28 Junio', 8, 12, '2012-07-08', 0, NULL),
(5, '29 Junio', 8, 20, '2012-07-01', 0, NULL),
(6, 'Extraordinario Julio', 5, 15, '2012-07-02', 0, NULL),
(7, 'Extraordinario Julio', 5, 15, '2012-07-02', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`iduser`, `username`, `nombre`, `password`) VALUES
(1, 'mchaves', 'Miguel González de Chaves', '5fb3533200a0722ac8e32d6f57700586');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `numeros`
--
ALTER TABLE `numeros`
  ADD CONSTRAINT `numeros_ibfk_1` FOREIGN KEY (`idsorteo`) REFERENCES `sorteos` (`idsorteo`);

--
-- Filtros para la tabla `pedidonumero`
--
ALTER TABLE `pedidonumero`
  ADD CONSTRAINT `pedidonumero_ibfk_1` FOREIGN KEY (`numero`, `idsorteo`) REFERENCES `numeros` (`numero`, `idsorteo`),
  ADD CONSTRAINT `pedidonumero_ibfk_2` FOREIGN KEY (`idpedido`) REFERENCES `pedidos` (`idpedido`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
