-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2019 a las 18:14:29
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `celular2` varchar(20) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `referencia` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `fechanac` date NOT NULL,
  `nombreapo` varchar(50) NOT NULL,
  `asesor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nombre`, `apellido`, `dni`, `celular`, `celular2`, `departamento`, `distrito`, `direccion`, `referencia`, `producto`, `precio`, `fechanac`, `nombreapo`, `asesor`) VALUES
('Demetrio ', 'Calizaya', '47513899', '954875856', '952145875', 'Tacna', 'Alto de la Alianza', 'Av. 02 de mayo', 'Una cuadra mas arriba', 'Naked 20 MB', 'precio', '0000-00-00', 'nombreapo', 'supervisor'),
('Maria', 'Sotomayor', '41257895', '921498055', '952145875', 'Tacna', 'Alto de la Alianza', 'Av. 02 de mayo', 'Una cuadra mas arriba', 'Trio 200 MB', 'precio', '0000-00-00', 'nombreapo', 'supervisor'),
('Alan Robert', 'Quispe Acho ', '47513899', '921498055', '952145875', 'Tacna', 'Alto de la Alianza', 'Av. 02 de mayo', 'Una cuadra mas arriba', 'Duo Movistar', 'precio', '0000-00-00', 'nombreapo', 'supervisor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `tipoproducto` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `asesor` varchar(50) NOT NULL,
  `comentario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `apellido`, `dni`, `celular`, `producto`, `tipoproducto`, `direccion`, `asesor`, `comentario`) VALUES
('Alan Robert', 'Quispe Acho ', '47513899', '921498055', 'Duo Movistar', 'Alta', 'Av. San Martin ', 'Pamela Gutierrez', 'llamara'),
('Alan Robert', 'Quispe Acho ', '47513899', '921498055', 'Duo Movistar', 'Alta', 'Av. San Martin ', 'Pamela Gutierrez', 'Se animo'),
('Gustavo', 'Quispe Acho ', '47513899', '921498055', 'Duo Movistar', 'Alta', 'Calle Zela ', 'Pamela Gutierrez', 'llamara');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `asesor` varchar(50) NOT NULL,
  `producto` varchar(50) NOT NULL,
  `situacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Alan Quispe ', 'Alan', 'rob.informatico@gmail.com', '....123asd', '2019-08-07 10:37:36'),
(2, 'Mamani', 'Saul', 'des@gmail.com', '....123', '2019-08-08 10:18:09'),
(3, 'QUISPE', 'MARIA ', 'robe.informatic@gmail.com', 'DDDDDD', '2019-08-08 11:02:13'),
(4, 'Soto', 'Fernando ', 'umaga@gmail.com', '....123asd', '2019-08-08 13:22:27'),
(6, 'Masculino', 'Adrian', 'polarmulti1@gmail.com', '...123asd', '2019-08-08 19:09:38'),
(7, 'Masculino', 'Juan', 'basadrinux.info@gmail.com', '123', '2019-08-08 19:11:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
