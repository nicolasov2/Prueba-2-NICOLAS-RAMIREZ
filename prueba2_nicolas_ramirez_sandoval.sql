-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2022 a las 04:51:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba2_nicolas_ramirez_sandoval`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_medico`
--

CREATE TABLE `tabla_medico` (
  `Id_medico` int(11) NOT NULL,
  `Nombre_medico` varchar(80) NOT NULL,
  `Apellido_medico` varchar(80) NOT NULL,
  `Especialidad` varchar(100) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Correo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_paciente`
--

CREATE TABLE `tabla_paciente` (
  `Id_paciente` int(11) NOT NULL,
  `Nombre_paciente` varchar(100) NOT NULL,
  `Prevision` varchar(120) NOT NULL,
  `Direccion` varchar(120) NOT NULL,
  `Patologias` varchar(120) NOT NULL,
  `Ficha_atencion` varchar(100) NOT NULL,
  `Img_paciente` mediumblob NOT NULL,
  `Fono` int(11) NOT NULL,
  `Correo` varchar(80) NOT NULL,
  `Alergias` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_patologias`
--

CREATE TABLE `tabla_patologias` (
  `Id_patologia` int(11) NOT NULL,
  `Nombre_patologia` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  `Id_medico` int(11) NOT NULL,
  `Tratamiento` int(11) NOT NULL,
  `Img_patologia` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_medico`
--
ALTER TABLE `tabla_medico`
  ADD UNIQUE KEY `Id_medico` (`Id_medico`);

--
-- Indices de la tabla `tabla_paciente`
--
ALTER TABLE `tabla_paciente`
  ADD UNIQUE KEY `Id_paciente` (`Id_paciente`);

--
-- Indices de la tabla `tabla_patologias`
--
ALTER TABLE `tabla_patologias`
  ADD UNIQUE KEY `Id_patologia` (`Id_patologia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_medico`
--
ALTER TABLE `tabla_medico`
  MODIFY `Id_medico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_paciente`
--
ALTER TABLE `tabla_paciente`
  MODIFY `Id_paciente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tabla_patologias`
--
ALTER TABLE `tabla_patologias`
  MODIFY `Id_patologia` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
