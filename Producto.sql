-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-04-2018 a las 06:22:51
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdunad_301127_41`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Producto`
--

CREATE TABLE `Producto` (
  `Codigo` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Psso` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Fabricante` varchar(50) NOT NULL,
  `Caracteristicas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Producto`
--

INSERT INTO `Producto` (`Codigo`, `Nombre`, `Psso`, `Marca`, `Fabricante`, `Caracteristicas`) VALUES
(1, 'Primero', '1', 'Primero', 'Primero', 'Primero'),
(2, 'Segundo', '2', 'Segundo', 'Segundo', 'Segundo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Producto`
--
ALTER TABLE `Producto`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
