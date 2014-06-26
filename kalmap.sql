-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 26-06-2014 a las 18:28:56
-- Versión del servidor: 5.5.37
-- Versión de PHP: 5.3.10-1ubuntu3.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `kalmap`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anupor`
--

CREATE TABLE IF NOT EXISTS `anupor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tit` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `des` tinytext COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `anupor`
--

INSERT INTO `anupor` (`id`, `tit`, `des`, `img`) VALUES
(1, 'Bonos', 'Buscas algo original? Regala la experiencia de un tratamiento con chocoterapia, es mucho mas que un tratamiento de belleza es un regalo de Bienestar salud y belleza. Para todos los gustos y bolsillos, elige el tratamiento que mas te guste.', 'kalma2.jpg'),
(2, 'Promociones', 'Buscas algo original? Regala la experiencia de un tratamiento con chocoterapia, es mucho mas que un tratamiento de belleza es un regalo de Bienestar salud y belleza. Para todos los gustos y bolsillos, elige el tratamiento que mas te guste.', 'kalma2.jpg'),
(3, 'Hazte Socio', 'Buscas algo original? Regala la experiencia de un tratamiento con chocoterapia, es mucho mas que un tratamiento de belleza es un regalo de Bienestar salud y belleza. Para todos los gustos y bolsillos, elige el tratamiento que mas te guste.', 'kalma3.jpg'),
(4, 'Chocoterapia', 'Nuestros tratamientos de chocoterapia son muy dulces', 'choco2.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
