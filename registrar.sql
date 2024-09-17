-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 17-09-2024 a las 18:00:16
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `no`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar`
--

CREATE TABLE `registrar` (
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `celular` varchar(100) NOT NULL,
  `ingreso` varchar(100) NOT NULL,
  `contraseña` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrar`
--

INSERT INTO `registrar` (`email`, `nombre`, `celular`, `ingreso`, `contraseña`) VALUES
('emiliocerecero79@gmail.com', 'emilio', '844844844844', '500033', '123'),
('emiliocerecero79@gmail.com', 'emilio', '844844844844', '500033', '123'),
('si@gmail', 'emilio', '123', '5000', '1234'),
('12312@sdsdf', 'emilio', '844844844844', '5000', '123'),
('emilio@sdsd', 'emilio', '844844844844', '5000', '1234'),
('12312@sd', 'emilio', '844844844844', '5000', '123'),
('12312@sdasd', 'emilio', '844844844844', '5000', 'zxc'),
('emiliocerecero79@gmail.come', 'emilio', '844844844844', '5000', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
