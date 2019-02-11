-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2019 a las 06:56:52
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `caprepol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `convenio`
--

CREATE TABLE `convenio` (
  `idConvenio` varchar(100) NOT NULL,
  `NombreEscuela` varchar(100) NOT NULL,
  `Carreras` varchar(100) NOT NULL,
  `Vigencia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `convenio`
--

INSERT INTO `convenio` (`idConvenio`, `NombreEscuela`, `Carreras`, `Vigencia`) VALUES
('1312', 'itgam', 'tics', '2019-09-09'),
('1520', 'INSURGENTES', 'derecho', '2020-03-03'),
('656', 'ftdrtd', 'tftft', '2018-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `idPrestador` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`idPrestador`, `nombre`, `apellido`, `foto`) VALUES
(277, 'hggh', 'vhbjh', '565864.jpg'),
(1965, 'virginias', 'gonzalez perez', '314010.jpg'),
(1978, 'maribel', 'cabrera alba', '308248.jpg'),
(1979, 'Pedro', 'Lopez Hernandez', '449251.jpg'),
(1985, 'Elias', 'Romero Gonzalez', '637722.jpg'),
(1991, 'Elisa', 'Gonzalez Romero', '36060.jpg'),
(1995, 'armando', 'moreno', '563029.png'),
(12345, 'pedro', 'duran martinez', '955184.jpg'),
(12547, 'Carlos', 'rrrrrrrrrrr', '587998.jpg'),
(123456, 'fernando', 'ramirez ramirez', '782048.png'),
(13113041, 'rodman1', 'romero hernandez', '982196.jpg'),
(14587787, 'pablo', 'galeana', '284072.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestador`
--

CREATE TABLE `prestador` (
  `idPrestador` varchar(100) NOT NULL,
  `idConvenio` varchar(100) NOT NULL,
  `NombreAlumno` varchar(100) NOT NULL,
  `Inicio` date NOT NULL,
  `Termino` date NOT NULL,
  `Proyecto` varchar(100) NOT NULL,
  `Carrera` varchar(100) NOT NULL,
  `Escuela` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Ubicacion` varchar(100) NOT NULL,
  `Piso` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Observaciones` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prestador`
--

INSERT INTO `prestador` (`idPrestador`, `idConvenio`, `NombreAlumno`, `Inicio`, `Termino`, `Proyecto`, `Carrera`, `Escuela`, `Area`, `Ubicacion`, `Piso`, `Status`, `Observaciones`) VALUES
('123455555', '123', 'rrrr', '2019-09-09', '2019-09-09', 'RRRR', 'RRRRR', 'RRRRR', 'RRRRR', 'RRRR', 0, 'RRRRR', 'RR'),
('131130411', '123', 'Elisa Romero Gonzalez xD', '2019-09-09', '2019-03-09', 'Administracion de conmutador', 'tics', 'itgam', 'Soporte tecnico', 'Pedro moreno', 3, 'servicio social', 'Este prestador esta activo '),
('676', 'gghf', 'ghjhj', '2018-01-01', '2018-01-01', '7987', '87678', '67', '6789', 'uyuyy', 0, '887', 'uyiuy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `id_usuario` int(11) NOT NULL,
  `modulo_administrador` varchar(2) NOT NULL,
  `modulo_checador` varchar(2) NOT NULL,
  `adm_conv` varchar(2) NOT NULL,
  `adm_conv_nuevo_convenio` varchar(2) NOT NULL,
  `adm_conv_buscar_convenio` varchar(2) NOT NULL,
  `adm_conv_descargar_reporte` varchar(2) NOT NULL,
  `adm_pre` varchar(2) NOT NULL,
  `adm_pre_nuevo_prestador` varchar(2) NOT NULL,
  `adm_pre_buscar_prestador` varchar(2) NOT NULL,
  `adm_pre_descargar_reporte` varchar(2) NOT NULL,
  `chec_dar_alta` varchar(2) NOT NULL,
  `chec_buscar_registro` varchar(2) NOT NULL,
  `chec_buscar_registro_general` varchar(2) NOT NULL,
  `chec_monitoreo` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `privilegios`
--

INSERT INTO `privilegios` (`id_usuario`, `modulo_administrador`, `modulo_checador`, `adm_conv`, `adm_conv_nuevo_convenio`, `adm_conv_buscar_convenio`, `adm_conv_descargar_reporte`, `adm_pre`, `adm_pre_nuevo_prestador`, `adm_pre_buscar_prestador`, `adm_pre_descargar_reporte`, `chec_dar_alta`, `chec_buscar_registro`, `chec_buscar_registro_general`, `chec_monitoreo`) VALUES
(2, 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registros`
--

CREATE TABLE `registros` (
  `id` int(11) NOT NULL,
  `idPrestador` int(11) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `registros`
--

INSERT INTO `registros` (`id`, `idPrestador`, `fecha_hora`, `tipo`, `fecha`) VALUES
(207, 1979, '2018-09-05 16:14:04', 'Entrada', '2018-09-05'),
(208, 1979, '2018-09-05 16:29:57', 'Salida', '2018-09-05'),
(209, 1991, '2018-09-11 16:39:50', 'Entrada', '2018-09-11'),
(210, 1991, '2018-09-13 17:57:37', 'Salida', '2018-09-13'),
(211, 1991, '2018-09-13 17:57:41', 'Entrada', '2018-09-13'),
(212, 1991, '2018-10-03 16:46:17', 'Salida', '2018-10-03'),
(213, 1991, '2018-10-03 16:46:28', 'Entrada', '2018-10-03'),
(214, 14587787, '2018-10-04 15:42:41', 'Entrada', '2018-10-04'),
(215, 1965, '2018-10-19 23:49:51', 'Entrada', '2018-10-19'),
(216, 1965, '2018-10-20 00:29:01', 'Salida', '2018-10-19'),
(217, 1979, '2018-10-20 00:30:00', 'Entrada', '2018-10-19'),
(218, 1965, '2018-10-21 00:49:58', 'Entrada', '2018-10-20'),
(219, 1965, '2018-10-23 21:51:25', 'Salida', '2018-10-23'),
(220, 1991, '2018-11-08 21:46:48', 'Salida', '2018-11-08'),
(221, 1991, '2018-11-08 21:47:02', 'Entrada', '2018-11-08'),
(222, 1991, '2018-11-15 03:08:03', '\n po', '2018-11-14'),
(223, 1991, '2018-11-15 03:08:09', 'Entrada', '2018-11-14'),
(224, 1991, '2018-11-15 03:08:21', '\n po', '2018-11-14'),
(225, 1991, '2018-11-15 03:08:44', 'Entrada', '2018-11-14'),
(226, 1991, '2018-11-15 03:09:17', '\n po', '2018-11-14'),
(227, 1991, '2018-11-15 03:10:52', 'Entrada', '2018-11-14'),
(228, 1991, '2018-11-15 03:11:05', 'Salida', '2018-11-14'),
(229, 1991, '2018-11-15 03:11:56', 'Entrada', '2018-11-14'),
(230, 1965, '2018-11-15 03:12:12', 'Entrada', '2018-11-14'),
(231, 1991, '2018-11-16 07:46:47', 'Salida', '2018-11-16'),
(232, 1991, '2018-11-18 02:23:05', 'Entrada', '2018-11-17'),
(233, 1991, '2018-11-20 01:24:26', 'Salida', '2018-11-19'),
(234, 1991, '2018-11-20 01:24:40', 'Entrada', '2018-11-19'),
(235, 1991, '2018-11-22 23:21:53', 'Salida', '2018-11-22'),
(236, 1991, '2018-11-22 23:22:23', 'Entrada', '2018-11-22'),
(237, 1991, '2018-11-22 23:23:29', 'Salida', '2018-11-22'),
(238, 1991, '2018-11-22 23:24:36', 'Entrada', '2018-11-22'),
(239, 1991, '2018-11-22 23:25:37', 'Salida', '2018-11-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_usuario`, `clave`, `tipo_usuario`) VALUES
(2, 'elisa', '1234', 'AA'),
(3, 'ochoa', '1234', 'AB');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `convenio`
--
ALTER TABLE `convenio`
  ADD PRIMARY KEY (`idConvenio`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`idPrestador`);

--
-- Indices de la tabla `prestador`
--
ALTER TABLE `prestador`
  ADD PRIMARY KEY (`idPrestador`),
  ADD KEY `idConvenio` (`idConvenio`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD KEY `usuario` (`id_usuario`);

--
-- Indices de la tabla `registros`
--
ALTER TABLE `registros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registros`
--
ALTER TABLE `registros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD CONSTRAINT `usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
