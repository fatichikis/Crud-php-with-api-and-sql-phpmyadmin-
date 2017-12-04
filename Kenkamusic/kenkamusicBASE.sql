-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2017 a las 22:31:35
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kenkamusic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `id_artista` int(11) NOT NULL,
  `Nombre_Artistico` varchar(30) NOT NULL,
  `Lugar_Nacimiento` varchar(30) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`id_artista`, `Nombre_Artistico`, `Lugar_Nacimiento`, `Edad`) VALUES
(1, 'Natalia La Fourcade', 'Ciudad de Mexico', 33),
(2, 'Jorge Blanco', 'Guadalajara, Jalisco', 27),
(4, 'Daniela Calvario', 'Guadalajara, Jalisco', 27),
(5, 'Vicente Fernandez', 'Guadalajara, Jalisco', 77);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cantantes`
--

CREATE TABLE `cantantes` (
  `id_user` int(11) NOT NULL,
  `artista` varchar(30) CHARACTER SET latin1 NOT NULL,
  `cancion` varchar(30) CHARACTER SET latin1 NOT NULL,
  `genero` varchar(30) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cantantes`
--

INSERT INTO `cantantes` (`id_user`, `artista`, `cancion`, `genero`) VALUES
(1, 'Natalia Lafourcade', 'Mexicana Hermosa', 'Ranchera'),
(3, 'Jorge Blanco', 'Summer', 'Pop'),
(4, 'Ha-ash', '100 aÃ±os', 'Pop'),
(5, 'Las Tres Grandes', 'La Calaca', 'Rancheras'),
(6, 'Daniela Calvario', 'Nada Cambia', 'Pop'),
(9, 'Vicente Fernandez', 'Estos Celos', 'Rancheras'),
(10, 'Ana Barbara', 'Lo Busque', 'Ranchera');

-- --------------------------------------------------------
--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id_artista`);

--
-- Indices de la tabla `cantantes`
--
ALTER TABLE `cantantes`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id_artista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cantantes`
--
ALTER TABLE `cantantes`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
