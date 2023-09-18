-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2023 a las 04:08:00
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
  `id` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `opciones` varchar(255) NOT NULL,
  `titulada` varchar(255) NOT NULL,
  `ficha` varchar(10) NOT NULL,
  `institucion` varchar(100) NOT NULL,
  `n_ponentes` varchar(2) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `proyecto` varchar(255) NOT NULL,
  `fecha` datetime NOT NULL,
  `archivo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ac_ponentes`
--

INSERT INTO `ac_ponentes` (`id`, `categoria`, `opciones`, `titulada`, `ficha`, `institucion`, `n_ponentes`, `titulo`, `email`, `proyecto`, `fecha`, `archivo`) VALUES
(11, 'Arquitectura y Construcciones Sostenibles', 'Sena', 'ADSI', '2551643', '', '3', 'Proyect', 'Chads@gmail.com', 'SENNOVA', '2023-09-18 00:00:00', 0x54454d504552414d454e544f20464c454d415449434f2e646f6378);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ac_poster`
--

CREATE TABLE `ac_poster` (
  `id` int(11) NOT NULL,
  `institucion` varchar(255) NOT NULL,
  `participantes` int(2) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `archivo` longblob NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ac_poster`
--

INSERT INTO `ac_poster` (`id`, `institucion`, `participantes`, `titulo`, `archivo`, `fecha`) VALUES
(6, 'www', 3, 'eee', 0x7465726d696e6f735f6665726961456d70726573617269616c2e706466, '2023-09-18 00:00:00');

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
  `id` int(11) NOT NULL,
  `institucion` varchar(255) NOT NULL,
  `participantes` int(2) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `representante` varchar(40) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `robotica`
--

CREATE TABLE `robotica` (
  `id` int(11) NOT NULL,
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
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ac_ponentes`
--
ALTER TABLE `ac_ponentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ac_poster`
--
ALTER TABLE `ac_poster`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `empresarial`
--
ALTER TABLE `empresarial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ac_ponentes`
--
ALTER TABLE `ac_ponentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ac_poster`
--
ALTER TABLE `ac_poster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresarial`
--
ALTER TABLE `empresarial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
