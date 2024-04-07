-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 16:40:35
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pt05_biel_martinez`
--
DROP DATABASE IF EXISTS `pt05_biel_martinez`;
CREATE DATABASE IF NOT EXISTS `pt05_biel_martinez` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pt05_biel_martinez`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id`, `article`) VALUES
(41, 'Investigadors Descobreixen Nova Teràpia Contra Malalties Cròniques'),
(42, 'Innovació Tecnològica Transforma la Forma de Treballar'),
(43, 'Esportistes Locals Triomfen en Competències Internacionals'),
(44, 'Descobriments Arqueològics Revelen Secrets Antics'),
(45, 'Polítics Debatran Sobre l\'Educació del Futur'),
(46, 'Economia Creix Amb Incentius Empresarials Innovadors'),
(47, 'Artista Emergent Destaca en l\'Escena Internacional'),
(48, 'Descobriments Científics Prometen Avanços en Medicina'),
(49, 'Comunitat Local Esforça-se per Combatre el Canvi Climàtic'),
(50, 'Indústria Alimentària Aplica Noves Tecnologies per Millorar'),
(51, 'Turisme Sostenible Guanya Terreny en la Regió'),
(52, 'Mesures per a Superar la Crisi Global'),
(53, 'Cultura Local Brilla en un Festival Multicultural'),
(54, 'Avanços Tecnològics en les Comunicacions'),
(55, 'Esport Local Celebra un Rècord Històric'),
(56, 'Nou Hàbitat Natural Descobert per a Espècies en Perill'),
(57, 'Esforços per a la Conservació de la Biodiversitat'),
(58, 'Educar la Pròxima Generació de Líders'),
(59, 'Artista Local Impressiona amb la Seva Creativitat'),
(60, 'Programes de Sostenibilitat Impulsen un Futur Més Verd'),
(61, 'Investigadors Treballen en la Cura de Malalties'),
(62, 'Resposta Ambiciosa a la Crisi Sanitària'),
(63, 'Innovació en l\'Energia: Noves Oportunitats'),
(64, 'Projectes de Conservació Ambiental en Marxa'),
(65, 'Investigació Espacial que Impressiona'),
(66, 'Inversions en Infraestructures Sostenibles'),
(67, 'Transformació en l\'Indústria Automobilística'),
(68, 'Celebració de la Diversitat Cultural en un Festival Local'),
(69, 'Creixent Economia Amb Perspectives Positives'),
(70, 'Història Recuperada Gràcies a Descobriments Recents'),
(71, 'Artista Emergent Triomfa en una Exposició'),
(72, 'Foment de l\'Ecoturisme per un Turisme Més Sostenible'),
(73, 'Mesures Decidides contra la Contaminació Ambiental'),
(74, 'Esforços Locals per la Pau Mundial'),
(75, 'Innovació en l\'Educació Cap al Futur'),
(76, 'Cultura Local que Inspira a Nivell Global'),
(77, 'Recerca Continua en Energies Netes'),
(78, 'Joves Talents Destaquen en Competències'),
(79, 'Conservació de la Naturalesa: Avanços Importants'),
(80, 'Solucions Innovadores per Enfrontar la Crisi Econòmica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuari` text NOT NULL,
  `contrasenya` longtext NOT NULL,
  `token` text NOT NULL,
  `expire` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
