-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2022 a las 19:36:42
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `welldex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenedor`
--

CREATE TABLE `contenedor` (
  `numero` int(11) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_bin NOT NULL,
  `dimensiones` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_descargo` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `contenedor`
--

INSERT INTO `contenedor` (`numero`, `tipo`, `dimensiones`, `fecha_descargo`) VALUES
(1, 'Cerrado', '24 x 30', '2022-02-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operacion`
--

CREATE TABLE `operacion` (
  `folio` int(11) NOT NULL,
  `pedimento` varchar(50) COLLATE utf8_bin NOT NULL,
  `cliente` varchar(100) COLLATE utf8_bin NOT NULL,
  `aduana` varchar(50) COLLATE utf8_bin NOT NULL,
  `patente` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipo_mercancia` varchar(50) COLLATE utf8_bin NOT NULL,
  `tipo_operacion` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_arribo` varchar(50) COLLATE utf8_bin NOT NULL,
  `pais_origen` varchar(50) COLLATE utf8_bin NOT NULL,
  `fecha_zarpe` varchar(50) COLLATE utf8_bin NOT NULL,
  `pais_destino` varchar(50) COLLATE utf8_bin NOT NULL,
  `estatus` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
