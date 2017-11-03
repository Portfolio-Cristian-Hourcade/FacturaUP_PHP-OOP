-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2017 a las 07:05:38
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `adm_id` int(11) NOT NULL,
  `adm_user` varchar(16) COLLATE utf8_spanish2_ci NOT NULL,
  `adm_pass` varchar(16) COLLATE utf8_spanish2_ci NOT NULL,
  `adm_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`adm_id`, `adm_user`, `adm_pass`, `adm_status`) VALUES
(1, 'Toto', '123', 1),
(2, '', '', 0),
(3, '', '', 0),
(4, 'jose', '123', 0),
(5, 'Damian', '123', 0),
(6, 'Ezequiel', '123', 0),
(7, 's', 'ss', 0),
(8, '', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
