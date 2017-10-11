-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2017 a las 11:11:12
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `cl_id` int(11) NOT NULL,
  `cl_nombre` varchar(20) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_apellido` varchar(20) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_email` varchar(40) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_pass` varchar(20) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_tel` varchar(30) COLLATE utf16_spanish2_ci NOT NULL,
  `cl_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `completos`
--

CREATE TABLE `completos` (
  `c_id` int(11) NOT NULL,
  `c_fecha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demos`
--

CREATE TABLE `demos` (
  `d_id` int(11) NOT NULL,
  `d_fecha` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `link`
--

CREATE TABLE `link` (
  `l_id` int(11) NOT NULL,
  `l_link` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `l_ip` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `l_descargas` int(11) NOT NULL,
  `l_fecha` varchar(14) COLLATE utf8_spanish2_ci NOT NULL,
  `l_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `v_id` int(11) NOT NULL,
  `v_cliente` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `v_fecha` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `v_precio` int(11) NOT NULL,
  `v_plan` int(11) NOT NULL,
  `v_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`cl_id`);

--
-- Indices de la tabla `completos`
--
ALTER TABLE `completos`
  ADD PRIMARY KEY (`c_id`);

--
-- Indices de la tabla `demos`
--
ALTER TABLE `demos`
  ADD PRIMARY KEY (`d_id`);

--
-- Indices de la tabla `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`l_id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `cl_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `completos`
--
ALTER TABLE `completos`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `demos`
--
ALTER TABLE `demos`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `link`
--
ALTER TABLE `link`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
