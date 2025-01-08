-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2024 a las 00:41:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_parcial`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso_auto`
--

CREATE TABLE `ingreso_auto` (
  `cod_auto` int(11) NOT NULL,
  `auto_placa` varchar(12) NOT NULL,
  `modelo` varchar(12) NOT NULL,
  `anio` varchar(12) NOT NULL,
  `color` varchar(12) NOT NULL,
  `fecha` varchar(15) NOT NULL,
  `entrada` varchar(10) NOT NULL,
  `salida` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ingreso_auto`
--

INSERT INTO `ingreso_auto` (`cod_auto`, `auto_placa`, `modelo`, `anio`, `color`, `fecha`, `entrada`, `salida`) VALUES
(7, 'paq188', 'audi', '2020', 'azul', '30/03/2024', '2:30', '3:30'),
(9, 'pla143', 'ford', '2018', 'negro', '03/03/2024', '3:30', '4:30'),
(11, 'ala134', 'cadillac', '1950', 'blanco', '03/03/2024', '1:20', '2:20'),
(12, 'qla124', 'ferrari', '1980', 'rojo', '03/04/2024', '10:00', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ingreso_auto`
--
ALTER TABLE `ingreso_auto`
  ADD PRIMARY KEY (`cod_auto`),
  ADD KEY `auto_placa` (`auto_placa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ingreso_auto`
--
ALTER TABLE `ingreso_auto`
  MODIFY `cod_auto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
