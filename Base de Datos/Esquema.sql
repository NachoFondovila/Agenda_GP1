-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2020 a las 01:02:46
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `metodologias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpe_met_aeropuerto`
--

CREATE TABLE `tpe_met_aeropuerto` (
  `id_aeropuerto` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `ciudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpe_met_escala`
--

CREATE TABLE `tpe_met_escala` (
  `id_aeropuerto` int(11) NOT NULL,
  `id_vuelo` int(11) NOT NULL,
  `tiempo_escala` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpe_met_plan`
--

CREATE TABLE `tpe_met_plan` (
  `id_plan` int(11) NOT NULL,
  `id_viaje` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpe_met_usuario`
--

CREATE TABLE `tpe_met_usuario` (
  `email` varchar(50) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `fecha_nac` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpe_met_viaje`
--

CREATE TABLE `tpe_met_viaje` (
  `id_viaje` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpe_met_vuelo`
--

CREATE TABLE `tpe_met_vuelo` (
  `id_vuelo` int(11) NOT NULL,
  `fecha_inic` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fecha_fin` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cod_reserva` int(11) NOT NULL,
  `compania` varchar(20) NOT NULL,
  `nro_asiento` int(11) NOT NULL,
  `aeronave` text NOT NULL,
  `id_aer_origen` int(11) NOT NULL,
  `id_aer_destino` int(11) NOT NULL,
  `id_viaje` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tpe_met_aeropuerto`
--
ALTER TABLE `tpe_met_aeropuerto`
  ADD PRIMARY KEY (`id_aeropuerto`);

--
-- Indices de la tabla `tpe_met_escala`
--
ALTER TABLE `tpe_met_escala`
  ADD PRIMARY KEY (`id_aeropuerto`,`id_vuelo`),
  ADD KEY `FK_TPE_MET_ESCALA_TPE_MET_VUELO` (`id_vuelo`);

--
-- Indices de la tabla `tpe_met_plan`
--
ALTER TABLE `tpe_met_plan`
  ADD PRIMARY KEY (`id_plan`,`id_viaje`,`email`),
  ADD KEY `FK_TPE_MET_PLAN_TPE_MET_VIAJE` (`id_viaje`,`email`);

--
-- Indices de la tabla `tpe_met_usuario`
--
ALTER TABLE `tpe_met_usuario`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `tpe_met_viaje`
--
ALTER TABLE `tpe_met_viaje`
  ADD PRIMARY KEY (`id_viaje`,`email`),
  ADD KEY `FK_TPE_MET_VIAJE_TPE_MET_USUARIO` (`email`);

--
-- Indices de la tabla `tpe_met_vuelo`
--
ALTER TABLE `tpe_met_vuelo`
  ADD PRIMARY KEY (`id_vuelo`),
  ADD KEY `FK_TPE_AEROPUERTO_DESTINO` (`id_aer_origen`),
  ADD KEY `FK_TPE_AEROPUERTO_ORIGEN` (`id_aer_destino`),
  ADD KEY `FK_TPE_MET_VUELO_TPE_MET_VIAJE` (`id_viaje`,`email`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tpe_met_escala`
--
ALTER TABLE `tpe_met_escala`
  ADD CONSTRAINT `FK_TPE_MET_ESCALA_TPE_MET_AEROPUERTO` FOREIGN KEY (`id_aeropuerto`) REFERENCES `tpe_met_aeropuerto` (`id_aeropuerto`),
  ADD CONSTRAINT `FK_TPE_MET_ESCALA_TPE_MET_VUELO` FOREIGN KEY (`id_vuelo`) REFERENCES `tpe_met_vuelo` (`id_vuelo`);

--
-- Filtros para la tabla `tpe_met_plan`
--
ALTER TABLE `tpe_met_plan`
  ADD CONSTRAINT `FK_TPE_MET_PLAN_TPE_MET_VIAJE` FOREIGN KEY (`id_viaje`,`email`) REFERENCES `tpe_met_viaje` (`id_viaje`, `email`);

--
-- Filtros para la tabla `tpe_met_viaje`
--
ALTER TABLE `tpe_met_viaje`
  ADD CONSTRAINT `FK_TPE_MET_VIAJE_TPE_MET_USUARIO` FOREIGN KEY (`email`) REFERENCES `tpe_met_usuario` (`email`);

--
-- Filtros para la tabla `tpe_met_vuelo`
--
ALTER TABLE `tpe_met_vuelo`
  ADD CONSTRAINT `FK_TPE_AEROPUERTO_DESTINO` FOREIGN KEY (`id_aer_origen`) REFERENCES `tpe_met_aeropuerto` (`id_aeropuerto`),
  ADD CONSTRAINT `FK_TPE_AEROPUERTO_ORIGEN` FOREIGN KEY (`id_aer_destino`) REFERENCES `tpe_met_aeropuerto` (`id_aeropuerto`),
  ADD CONSTRAINT `FK_TPE_MET_VUELO_TPE_MET_VIAJE` FOREIGN KEY (`id_viaje`,`email`) REFERENCES `tpe_met_viaje` (`id_viaje`, `email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;