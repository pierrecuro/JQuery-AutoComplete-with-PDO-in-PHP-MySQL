-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2018 a las 23:57:13
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autocompletar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `codigoArticulo` int(11) NOT NULL,
  `articulo` varchar(80) NOT NULL,
  `fname` varchar(60) NOT NULL,
  `lname` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` int(2) NOT NULL,
  `salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`codigoArticulo`, `articulo`, `fname`, `lname`, `email`, `age`, `salary`) VALUES
(1, 'yssyogesh', 'Yogesh', 'singh', 'yssyogesh@makitweb.com', 23, '24000'),
(2, 'sonarika', 'Sonarika', 'Bhadoria', 'sonarika@gmail.com', 23, '44000'),
(3, 'akilesh', 'Akilesh', 'sahu', 'akilesh93@gmail.com', 24, '32000'),
(4, 'shreya', 'Shreya', 'Joshi', 'shreya@gmail.com', 24, '25000'),
(5, 'ajay', 'Ajay', 'Singh', 'ajaysingh@gmail.com', 25, '31000'),
(6, 'pierre', 'Vijay', 'maurya', 'vijayec@gmail.com', 24, '26000'),
(7, 'sunil', 'Sunil', 'singh', 'sunilsingh94@gmail.com', 23, '27000'),
(8, 'vishal', 'Vishal', 'sahu', 'vishal92@gmail.com', 25, '44000'),
(9, 'mukesh', 'Mukesh', 'sharma', 'mukesh@gmail.com', 26, '32000'),
(10, 'nitin', 'Nitin', 'singh', 'nitin@gmail.com', 27, '38000');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`codigoArticulo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `codigoArticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
