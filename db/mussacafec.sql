-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2023 a las 13:26:05
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
-- Base de datos: `mussacafec`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ac_ponentes`
--

CREATE TABLE `ac_ponentes` (
  `ID` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `opciones` varchar(255) NOT NULL,
  `titulada` varchar(255) NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `institucion` varchar(100) NOT NULL,
  `n_ponentes` varchar(2) NOT NULL,
  `titulo` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `proyecto` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ac_ponentes`
--

INSERT INTO `ac_ponentes` (`ID`, `categoria`, `opciones`, `titulada`, `ficha`, `institucion`, `n_ponentes`, `titulo`, `email`, `proyecto`, `fecha`) VALUES
(9, 'Agroindustrial', 'Sena', 'rmnh', '736', '', '3', 0, 'msy@fk.com', 'Formativo', '2023-09-14 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ac_poster`
--

CREATE TABLE `ac_poster` (
  `ID` int(11) NOT NULL,
  `institucion` varchar(255) NOT NULL,
  `participantes` int(2) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ac_poster`
--

INSERT INTO `ac_poster` (`ID`, `institucion`, `participantes`, `titulo`, `fecha`) VALUES
(1, 'San Agustin ', 3, 'SOL', '2023-09-14 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `ID` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`ID`, `usuario`, `contrasena`) VALUES
(1, 'Admin', 'Admin1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresarial`
--

CREATE TABLE `empresarial` (
  `ID` int(11) NOT NULL,
  `institucion` varchar(255) NOT NULL,
  `participantes` int(2) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `representante` varchar(40) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empresarial`
--

INSERT INTO `empresarial` (`ID`, `institucion`, `participantes`, `titulo`, `representante`, `fecha`) VALUES
(1, 'Camilo Torres', 2, 'AAA', 'soy yo', '2023-09-14 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `robotica`
--

CREATE TABLE `robotica` (
  `ID` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `institucion` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `participantes` int(2) NOT NULL,
  `representante` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` int(12) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `robotica`
--

INSERT INTO `robotica` (`ID`, `categoria`, `institucion`, `equipo`, `participantes`, `representante`, `email`, `telefono`, `fecha`) VALUES
(0, 'Robot seguidor de linea velocista', 'JEG', 'ELL', 2, 'ellos', 'ell@si.com', 1234567890, '2023-09-14 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ac_ponentes`
--
ALTER TABLE `ac_ponentes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `ac_poster`
--
ALTER TABLE `ac_poster`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `empresarial`
--
ALTER TABLE `empresarial`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ac_ponentes`
--
ALTER TABLE `ac_ponentes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `ac_poster`
--
ALTER TABLE `ac_poster`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresarial`
--
ALTER TABLE `empresarial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
