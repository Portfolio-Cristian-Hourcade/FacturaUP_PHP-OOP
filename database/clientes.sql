-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-11-2017 a las 09:25:58
-- Versión del servidor: 5.6.36-cll-lve
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `facturaup`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `cl_id` int(11) NOT NULL AUTO_INCREMENT,
  `cl_nombre` varchar(20) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_apellido` varchar(20) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_email` varchar(40) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_pass` varchar(100) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_tel` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_confirmar` int(11) NOT NULL,
  `cl_codigo` int(11) NOT NULL,
  `cl_status` int(11) NOT NULL,
  PRIMARY KEY (`cl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci AUTO_INCREMENT=59 ;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`cl_id`, `cl_nombre`, `cl_apellido`, `cl_email`, `cl_pass`, `cl_tel`, `cl_confirmar`, `cl_codigo`, `cl_status`) VALUES
(56, 'damian', 'sabbatella', 'dsabbatella@yahoo.com.ar', '202cb962ac59075b964b07152d234b70', '22222', 1, 0, 1),
(57, 'juan', 'perez', 'dami_sabb@hotmail.com', '79b7cdcd14db14e9cb498f1793817d69', '1233', 1, 0, 1),
(58, 'pablo', 'gonzales', 'sabbatelladamian@gmail.com', '202cb962ac59075b964b07152d234b70', '12345', 1, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
