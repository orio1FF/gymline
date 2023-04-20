-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 18-04-2023 a las 18:42:09
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id20445349_gymline`
--
CREATE DATABASE IF NOT EXISTS `id20445349_gymline` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id20445349_gymline`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `ID_Classe` int(11) NOT NULL,
  `ID_Treballador` int(11) NOT NULL,
  PRIMARY KEY (`ID_Classe`),
  KEY `fk_classes` (`ID_Treballador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `classes`
--

INSERT INTO `classes` (`ID_Classe`, `ID_Treballador`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `classes_clients`
--

DROP TABLE IF EXISTS `classes_clients`;
CREATE TABLE IF NOT EXISTS `classes_clients` (
  `ID_Classe` int(11) NOT NULL,
  `ID_Client` int(11) NOT NULL,
  KEY `fk_classes_clients_classes` (`ID_Classe`),
  KEY `fk_classes_clients` (`ID_Client`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `classes_clients`
--

INSERT INTO `classes_clients` (`ID_Classe`, `ID_Client`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 4),
(2, 5),
(2, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `ID_Client` int(11) NOT NULL,
  `Nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Data_alta` date NOT NULL,
  `ID_Subscripcio` int(11) NOT NULL,
  `ID_Seguiment` int(11) NOT NULL,
  `Gympoints` int(11) NOT NULL,
  PRIMARY KEY (`ID_Client`),
  KEY `fk_clientes_seguimiento` (`ID_Seguiment`),
  KEY `fk_clientes_Subscripcion` (`ID_Subscripcio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clients`
--

INSERT INTO `clients` (`ID_Client`, `Nom`, `Data_alta`, `ID_Subscripcio`, `ID_Seguiment`, `Gympoints`) VALUES
(1, 'Juan Lagunas', '2023-04-11', 1, 1, 3),
(2, 'Marcos Hernández', '2023-04-11', 2, 2, 223),
(3, 'Pedro Juárez', '2023-04-11', 2, 2, 267),
(4, 'Laura Martínez', '2023-04-11', 2, 3, 544),
(5, 'Maria López', '2023-04-11', 2, 1, 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comandes`
--

DROP TABLE IF EXISTS `comandes`;
CREATE TABLE IF NOT EXISTS `comandes` (
  `ID_Comanda` int(11) NOT NULL,
  `ID_Client` int(11) NOT NULL,
  `ID_Producte` int(11) NOT NULL,
  `Quantitat` int(11) NOT NULL,
  `Data` date NOT NULL,
  PRIMARY KEY (`ID_Comanda`),
  KEY `fk_pedidos_cliente` (`ID_Client`),
  KEY `fk_pedidos_productos` (`ID_Producte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comandes`
--

INSERT INTO `comandes` (`ID_Comanda`, `ID_Client`, `ID_Producte`, `Quantitat`, `Data`) VALUES
(1, 1, 16, 1, '2023-04-11'),
(2, 2, 20, 1, '2023-04-11'),
(3, 3, 12, 5, '2023-04-11'),
(4, 4, 10, 3, '2023-04-11'),
(5, 5, 1, 2, '2023-04-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departaments`
--

DROP TABLE IF EXISTS `departaments`;
CREATE TABLE IF NOT EXISTS `departaments` (
  `ID_depart` int(11) NOT NULL,
  `Nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `Localitat` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_depart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `departaments`
--

INSERT INTO `departaments` (`ID_depart`, `Nom`, `Localitat`) VALUES
(1, 'Professors', 'Barcelona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas_treballadors`
--

DROP TABLE IF EXISTS `estadisticas_treballadors`;
CREATE TABLE IF NOT EXISTS `estadisticas_treballadors` (
  `Cardio` int(11) NOT NULL,
  `Forca` int(11) NOT NULL,
  `Elasticitat` int(11) NOT NULL,
  `Experiencia` int(11) NOT NULL,
  `Nocions_alimentaries` int(11) NOT NULL,
  `ID_Treballador` int(11) NOT NULL,
  KEY `ID_Treballador` (`ID_Treballador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estadisticas_treballadors`
--

INSERT INTO `estadisticas_treballadors` (`Cardio`, `Forca`, `Elasticitat`, `Experiencia`, `Nocions_alimentaries`, `ID_Treballador`) VALUES
(87, 77, 68, 80, 62, 1),
(73, 89, 45, 92, 68, 2),
(90, 86, 93, 77, 83, 3),
(78, 84, 58, 66, 95, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productes`
--

DROP TABLE IF EXISTS `productes`;
CREATE TABLE IF NOT EXISTS `productes` (
  `ID_Producte` int(11) NOT NULL,
  `Nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Preu` double NOT NULL,
  `ID_Tipus_Producte` int(11) NOT NULL,
  `Imatge` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_Producte`),
  KEY `ID_Tipus_Producte` (`ID_Tipus_Producte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productes`
--

INSERT INTO `productes` (`ID_Producte`, `Nom`, `Preu`, `ID_Tipus_Producte`, `Imatge`) VALUES
(1, 'Peses', 23.59, 1, 'peses.png'),
(2, 'Samarreta', 9.99, 2, 'samarreta.png'),
(3, 'Banda de resistència', 14.99, 1, 'bandaresist.png'),
(4, 'Creatina', 18.99, 3, 'creatina.png'),
(5, 'Mancuernes', 7.89, 1, 'mancuernes.png'),
(6, 'Guants', 8.99, 2, 'guants.png'),
(7, 'Sac de boxe', 174.99, 4, 'sac.png'),
(8, 'Guants de boxe', 25.99, 4, 'guantsboxe.png'),
(9, 'Pilota de ioga', 13.99, 1, 'pilota.png'),
(10, 'Proteïnes', 35.99, 3, 'proteines.png'),
(11, 'Cinta de correr', 570.99, 4, 'cintacorrer.png'),
(12, 'Tatami de gimnàs', 15.99, 4, 'tatami.png'),
(13, 'motxilla', 10.99, 2, 'motxilla.png'),
(14, 'Rodet', 8.99, 1, 'rodet.png'),
(15, 'Estoreta', 11.99, 1, 'estoreta.png'),
(16, 'casc', 17.99, 1, 'casc.png'),
(17, 'Bastons trekking', 24.99, 1, 'bastons.png'),
(18, 'genolleres', 9.99, 1, 'genolleres.png'),
(19, 'Pilota medicinal', 12.99, 1, 'pilota_medicinal.png'),
(20, 'Bambes', 35.99, 2, 'bambes.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguiment_proces`
--

DROP TABLE IF EXISTS `seguiment_proces`;
CREATE TABLE IF NOT EXISTS `seguiment_proces` (
  `ID_Seguiment` int(11) NOT NULL,
  `Nom_Rang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Puntuacio_minima` int(11) NOT NULL,
  `Puntuacio_maxima` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Seguiment`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `seguiment_proces`
--

INSERT INTO `seguiment_proces` (`ID_Seguiment`, `Nom_Rang`, `Puntuacio_minima`, `Puntuacio_maxima`) VALUES
(1, 'Principiant', 0, 200),
(2, 'Aficionat', 201, 400),
(3, 'Semi Pro', 401, 600),
(4, 'Professional', 601, 1100),
(5, 'Expert', 1101, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipus_producte`
--

DROP TABLE IF EXISTS `tipus_producte`;
CREATE TABLE IF NOT EXISTS `tipus_producte` (
  `ID_Tipus_Producte` int(11) NOT NULL,
  `Nom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcio` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_Tipus_Producte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipus_producte`
--

INSERT INTO `tipus_producte` (`ID_Tipus_Producte`, `Nom`, `Descripcio`) VALUES
(1, 'Eines', 'Eines corporatives per realitzar exercicis a casa.'),
(2, 'Roba', 'Roba esportiva per realitzar els exercicis còmodament.'),
(3, 'Suplements', 'Suplements nutricionals'),
(4, 'Equip d\'entrenament', 'Equip per realitzar entrenament a casa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipus_subscripcio`
--

DROP TABLE IF EXISTS `tipus_subscripcio`;
CREATE TABLE IF NOT EXISTS `tipus_subscripcio` (
  `ID_Subscripcio` int(11) NOT NULL,
  `Tipus` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Preu` double NOT NULL,
  PRIMARY KEY (`ID_Subscripcio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipus_subscripcio`
--

INSERT INTO `tipus_subscripcio` (`ID_Subscripcio`, `Tipus`, `Preu`) VALUES
(1, 'Estàndard', 0),
(2, 'Premium', 7.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treballadors`
--

DROP TABLE IF EXISTS `treballadors`;
CREATE TABLE IF NOT EXISTS `treballadors` (
  `ID_Treballador` int(11) NOT NULL,
  `Nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Salari` double NOT NULL,
  `ID_Depart` int(11) NOT NULL,
  `Foto` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_Treballador`),
  KEY `fk_treballadors_dep` (`ID_Depart`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `treballadors`
--

INSERT INTO `treballadors` (`ID_Treballador`, `Nom`, `Salari`, `ID_Depart`, `Foto`) VALUES
(1, 'Pepe Domínguez', 400, 1, 'pepedominguez.png'),
(2, 'Jose Juan', 500, 1, 'josejuan.png'),
(3, 'Laura Díaz', 700, 1, 'lauradiaz.png'),
(4, 'Federico Pérez', 650, 1, 'federicoperez.png');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `fk_classes` FOREIGN KEY (`ID_Treballador`) REFERENCES `treballadors` (`ID_Treballador`);

--
-- Filtros para la tabla `classes_clients`
--
ALTER TABLE `classes_clients`
  ADD CONSTRAINT `fk_classes_clients` FOREIGN KEY (`ID_Client`) REFERENCES `clients` (`ID_Client`),
  ADD CONSTRAINT `fk_classes_clients_classes` FOREIGN KEY (`ID_Classe`) REFERENCES `classes` (`ID_Classe`);

--
-- Filtros para la tabla `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `fk_clientes_Subscripcion` FOREIGN KEY (`ID_Subscripcio`) REFERENCES `tipus_subscripcio` (`ID_Subscripcio`),
  ADD CONSTRAINT `fk_clientes_seguimiento` FOREIGN KEY (`ID_Seguiment`) REFERENCES `seguiment_proces` (`ID_Seguiment`);

--
-- Filtros para la tabla `comandes`
--
ALTER TABLE `comandes`
  ADD CONSTRAINT `fk_pedidos_cliente` FOREIGN KEY (`ID_Client`) REFERENCES `clients` (`ID_Client`),
  ADD CONSTRAINT `fk_pedidos_productos` FOREIGN KEY (`ID_Producte`) REFERENCES `productes` (`ID_Producte`);

--
-- Filtros para la tabla `estadisticas_treballadors`
--
ALTER TABLE `estadisticas_treballadors`
  ADD CONSTRAINT `estadisticas_treballadors_ibfk_1` FOREIGN KEY (`ID_Treballador`) REFERENCES `treballadors` (`ID_Treballador`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `productes`
--
ALTER TABLE `productes`
  ADD CONSTRAINT `Productes_ibfk_1` FOREIGN KEY (`ID_Tipus_Producte`) REFERENCES `tipus_producte` (`ID_Tipus_Producte`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `treballadors`
--
ALTER TABLE `treballadors`
  ADD CONSTRAINT `fk_trabajadores` FOREIGN KEY (`ID_Depart`) REFERENCES `departaments` (`ID_depart`),
  ADD CONSTRAINT `fk_treballadors_dep` FOREIGN KEY (`ID_Depart`) REFERENCES `departaments` (`ID_depart`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
