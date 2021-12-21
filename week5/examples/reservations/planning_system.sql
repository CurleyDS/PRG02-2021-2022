-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 15 dec 2021 om 12:02
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `planning_system`
--
CREATE DATABASE IF NOT EXISTS `planning_system` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `planning_system`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE `reservations` (
  `id` int(11) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Gegevens worden geëxporteerd voor tabel `reservations`
--

INSERT INTO `reservations` (`id`, `description`, `date`, `start_time`, `end_time`) VALUES
(1, 'Tandarts', '2020-01-08', '14:30:00', '15:00:00'),
(2, 'PHP les 1', '2020-01-07', '14:30:00', '15:30:00'),
(3, 'PHP les 2', '2020-01-09', '15:00:00', '17:00:00'),
(4, 'keuzevak', '2020-01-09', '09:00:00', '10:30:00'),
(5, 'test', '2020-01-08', '09:00:00', '10:00:00'),
(6, 'Tentamen PHP', '2020-01-06', '11:00:00', '12:00:00'),
(7, 'Bob', '2020-12-09', '11:00:00', '12:00:00'),
(8, 'Bob', '2020-12-24', '10:30:00', '11:30:00');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
