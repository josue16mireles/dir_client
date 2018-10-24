-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-10-2018 a las 07:22:14
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directorio`
--

CREATE TABLE IF NOT EXISTS `directorio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `celular` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `email2` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `relacionado` varchar(120) COLLATE utf8_spanish_ci NOT NULL,
  `compania` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `directorio`
--

INSERT INTO `directorio` (`id`, `nombre`, `direccion`, `telefono`, `celular`, `email`, `email2`, `relacionado`, `compania`) VALUES
(13, 'Luis Eduardo Marquez Jimenez', 'Av. Lauro Villar', '9876543', '1237894', 'lalomarkez@hotmail.com', 'lalokera@hotmail.com', 'Job Alberto Gonzalez Mireles', 'UATosos'),
(15, 'Josue GonzÃ¡lez Mireles', 'Rio Sabinas #24, Del Valle', '8101568', '8688387052', 'josue.1013e@gmail.com', 'josue.1013e@gmail.com', 'Norma Mireles', 'FMeISCdeM'),
(16, 'Norma Leticia Mireles Lopez', 'Av. Uniones', '9876543', '8387052', 'norlet@hotmail.com', 'normamireles@hotmail.com', 'Josue Miguel Gonzalez Mireles', 'UAMM-UAT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
