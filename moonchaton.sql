-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-03-2016 a las 17:44:54
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `moonchaton`
--
CREATE DATABASE IF NOT EXISTS `moonchaton` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `moonchaton`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

DROP TABLE IF EXISTS `grupos`;
CREATE TABLE IF NOT EXISTS `grupos` (
  `idGroup` int(11) NOT NULL AUTO_INCREMENT,
  `dateCreation` varchar(300) NOT NULL,
  `users` text NOT NULL,
  `userCreator` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idGroup`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUser` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) DEFAULT NULL,
  `apellido` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(300) NOT NULL,
  `slogan` text,
  `avatar` text,
  `dateRegistered` varchar(100) DEFAULT NULL,
  `numLogin` int(11) DEFAULT NULL,
  `lastLogin` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUser`, `nombre`, `apellido`, `email`, `username`, `password`, `slogan`, `avatar`, `dateRegistered`, `numLogin`, `lastLogin`, `status`) VALUES
(1, 'Sabino', 'Neria Cervantes', 'n_eria_11@gmail.com', 'sabino', 'ba952731f97fb058035aa399b1cb3d5c', 'Atacando al atacante', 'img/users/oso/oso.jpg', 'November 25, 2015, 11:41 am', 1, 'November 30, 2015, 2:03 pm', 1),
(2, 'Sabino', 'Neria Cervantes', 'n_eria_11@gmail.com', 'oso', '5caae99531c54bc794f2489f5f2e6f33', 'Atacando al atacante', 'img/users/oso/oso.jpg', 'November 26, 2015, 2:44 pm', 1, 'March 22, 2016, 2:45 pm', 1),
(3, 'Sabino', 'Neria Cervantes', 'n_eria_11@gmail.com', 'kranky', '552a44015122281c0c4366e24b4121c4', 'Atacando al atacante', 'img/users/oso/oso.jpg', 'November 26, 2015, 2:48 pm', 1, 'December 7, 2015, 4:24 pm', 1),
(4, 'Sabino', 'Neria Cervantes', 'n_eria_11@gmail.com', 'cool', 'b1f4f9a523e36fd969f4573e25af4540', 'Atacando al atacante', 'img/users/oso/oso.jpg', 'November 26, 2015, 2:49 pm', NULL, NULL, 1),
(5, 'Sabino', 'Neria Cervantes', 'n_eria_11@gmail.com', 'cooler', 'b1f4f9a523e36fd969f4573e25af4540', 'Atacando al atacante', 'img/users/oso/oso.jpg', 'November 26, 2015, 2:50 pm', NULL, NULL, 1),
(6, NULL, NULL, NULL, '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 'img/users/oso/oso.jpg', 'November 27, 2015, 3:58 pm', NULL, NULL, 1),
(7, NULL, NULL, NULL, 'patito', '3411f6d521ed0d17b6953e5741eaecca', NULL, 'img/users/oso/oso.jpg', 'December 1, 2015, 2:40 pm', 1, 'December 1, 2015, 2:40 pm', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
