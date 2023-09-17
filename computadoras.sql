-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 00:39:09
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computadoras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadoras`
--

CREATE TABLE `computadoras` (
  `ID` int(10) NOT NULL,
  `Procesador` varchar(50) NOT NULL,
  `Almacenamiento` varchar(50) NOT NULL,
  `RAM` varchar(50) NOT NULL,
  `GPU` varchar(50) NOT NULL,
  `SO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `computadoras`
--

INSERT INTO `computadoras` (`ID`, `Procesador`, `Almacenamiento`, `RAM`, `GPU`, `SO`) VALUES
(1204, 'Intel Celeron', '120GB', '4GB DDR4', 'Integrada', 'Ubuntu'),
(31231, 'M1', '1TB', '32GB DDR4', 'Integrada', 'MacOs'),
(96802, 'Snapdragon 680', '240GB', '2GB DDR4', 'Integrada', 'ChromeOS'),
(71163060, 'Intel I5', '1TB', '16GB DDR4', 'RTX 3060', 'Windows 10'),
(92323090, 'Ryzen 9', '2TB', '32GB DDR5 ', 'RTX 3090', 'Windows 11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computadoras`
--
ALTER TABLE `computadoras`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
