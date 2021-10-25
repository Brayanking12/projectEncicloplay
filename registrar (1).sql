-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2021 a las 04:21:25
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `eres` varchar(20) NOT NULL,
  `tipod` varchar(11) NOT NULL,
  `numrdoc` int(11) NOT NULL,
  `nombape` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`eres`, `tipod`, `numrdoc`, `nombape`, `pass`) VALUES
('instructor', 'Ti', 32342, 'jkkl', 'kkl.,,'),
('alumno', 'CC', 35678900, 'juan valdes', 'rjhjkk'),
('instructor', 'CC', 52904545, 'LINA CONSUELO', 'brayan'),
('instructor', 'Ti', 52904546, 'jose julio', 'pas'),
('instructor', 'Ti', 123432343, 'dddmmdd', 'wenenw'),
('alumno', 'Ti', 212344546, 'Adriana Gonzales', 'nacional123'),
('instructor', 'CC', 500324212, 'jose guillermo beltran', ''),
('alumno', 'Ti', 1003746719, 'brayan caseres', 'nacional');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`numrdoc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
