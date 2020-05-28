-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 14, 2020 la 04:35 PM
-- Versiune server: 10.4.11-MariaDB
-- Versiune PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `gamadb`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `views` int(11) NOT NULL,
  `tournaments` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `games`
--

INSERT INTO `games` (`id`, `name`, `category`, `views`, `tournaments`, `type`) VALUES
(1, 'wingspan', 'board', 0, 0, 'biology'),
(2, 'blinded', 'board', 0, 0, 'biology'),
(3, 'cytosis', 'board', 0, 0, 'biology'),
(4, 'evo', 'board', 0, 0, 'biology'),
(5, 'mad science', 'board', 0, 0, 'biology'),
(6, 'wonders of science', 'board', 0, 0, 'biology'),
(7, 'keep cool', 'board', 0, 0, 'educational'),
(8, 'ungame', 'board', 0, 0, 'educational'),
(9, 'kolejka', 'board', 0, 0, 'educational'),
(10, 'equate', 'board', 0, 0, 'educational'),
(11, 'battle masters', 'board', 0, 0, 'fantasy'),
(12, 'blood bowl', 'board', 0, 0, 'fantasy'),
(13, 'survive', 'board', 0, 0, 'fantasy'),
(14, 'chaos marauders', 'board', 0, 0, 'fantasy'),
(15, 'dark tower', 'board', 0, 0, 'fantasy'),
(16, 'seven days', 'board', 0, 0, 'historical'),
(17, 'axis and allies', 'board', 0, 0, 'historical'),
(18, 'lancaster', 'board', 0, 0, 'historical'),
(19, 'carcassonne', 'board', 0, 0, 'historical'),
(20, '1960 president', 'board', 0, 0, 'historical'),
(21, 'stone age', 'board', 0, 0, 'historical'),
(22, 'nyctophobia', 'board', 0, 0, 'horror'),
(23, 'betrayl', 'board', 0, 0, 'horror'),
(24, 'zombicide', 'board', 0, 0, 'horror'),
(25, 'gost', 'board', 0, 0, 'horror'),
(26, 'dead of winter', 'board', 0, 0, 'horror'),
(27, 'mansions of madness', 'board', 0, 0, 'horror'),
(28, 'o day attak on earth', 'online', 0, 0, 'action'),
(29, 'bomberman', 'online', 0, 0, 'action'),
(30, 'bulets', 'online', 0, 0, 'action'),
(31, 'batman', 'online', 0, 0, 'action'),
(32, 'mario', 'online', 0, 0, 'action'),
(33, 'air raiders', 'online', 0, 0, 'action'),
(34, 'apex legends', 'online', 0, 0, 'adventure'),
(35, 'amazing eternals', 'online', 0, 0, 'adventure'),
(36, 'quaqe campions', 'online', 0, 0, 'adventure'),
(37, 'overwatch', 'online', 0, 0, 'adventure'),
(38, 'valorant', 'online', 0, 0, 'adventure'),
(39, 'evolve', 'online', 0, 0, 'adventure'),
(40, 'soccer', 'online', 0, 0, 'sport'),
(41, 'nba', 'online', 0, 0, 'sport'),
(42, 'tenniskids', 'online', 0, 0, 'sport'),
(43, 'finalblow', 'online', 0, 0, 'sport'),
(44, 'internationalkarate', 'online', 0, 0, 'sport'),
(45, 'bowling', 'online', 0, 0, 'sport'),
(46, 'forge of empiers', 'online', 0, 0, 'strategy'),
(47, 'grepolis', 'online', 0, 0, 'strategy'),
(48, 'tribal wars', 'online', 0, 0, 'strategy'),
(49, 'the west', 'online', 0, 0, 'strategy'),
(50, 'elvenar', 'online', 0, 0, 'strategy'),
(51, 'triviador', 'online', 0, 0, 'strategy'),
(52, 'nascar', 'online', 0, 0, 'vehicles'),
(53, 'car3', 'online', 0, 0, 'vehicles'),
(54, 'the word of cars', 'online', 0, 0, 'vehicles'),
(55, 'racing', 'online', 0, 0, 'vehicles'),
(56, 'survive', 'board', 0, 0, 'vehicles');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
