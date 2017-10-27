-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2017 a las 17:40:17
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `facturaup`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `con_id` int(11) NOT NULL,
  `con_contacto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `con_email` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `con_mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `con_fechaenvio` date NOT NULL,
  `con_fecharespuesta` date NOT NULL,
  `con_respuesta` text COLLATE utf8_spanish_ci NOT NULL,
  `con_horarespuesta` time NOT NULL,
  `con_horaenvio` time NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`con_id`, `con_contacto`, `con_email`, `con_mensaje`, `con_fechaenvio`, `con_fecharespuesta`, `con_respuesta`, `con_horarespuesta`, `con_horaenvio`, `status`) VALUES
(7, 'dd', 'ezequielgal', 'sdsd', '2017-10-25', '2017-10-25', 'dsds', '12:49:00', '12:49:00', 1),
(8, 'damian', 'dami_sabb@h', 'asasas', '2017-10-25', '2017-10-25', 'sdsdsd', '13:16:00', '13:15:00', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`con_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
