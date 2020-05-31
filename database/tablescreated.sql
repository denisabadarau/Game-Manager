-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 21, 2020 la 04:42 PM
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
-- Structură tabel pentru tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`) VALUES
(1, 'denisa', 'denisa', 'denisa_ionela28@yahoo.com'),
(2, 'adelina', 'adelina', 'adelina_alicia_2007@yahoo.com'),
(3, 'vlad', 'vlad', 'vlad_afrasinei@yahoo.com');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `battles`
--

CREATE TABLE `battles` (
  `id_turneu` int(11) NOT NULL,
  `id_jucator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'wingspan', 'board', 6, 0, 'biology'),
(2, 'blinded', 'board', 6, 0, 'biology'),
(3, 'cytosis', 'board', 6, 0, 'biology'),
(4, 'evo', 'board', 6, 0, 'biology'),
(5, 'mad science', 'board', 6, 0, 'biology'),
(6, 'wonders of science', 'board', 6, 0, 'biology'),
(7, 'keep cool', 'board', 3, 0, 'educational'),
(8, 'ungame', 'board', 3, 0, 'educational'),
(9, 'kolejka', 'board', 3, 0, 'educational'),
(10, 'equate', 'board', 3, 0, 'educational'),
(11, 'battle masters', 'board', 5, 0, 'fantasy'),
(12, 'blood bowl', 'board', 5, 0, 'fantasy'),
(13, 'survive', 'board', 5, 0, 'fantasy'),
(14, 'chaos marauders', 'board', 5, 0, 'fantasy'),
(15, 'dark tower', 'board', 5, 0, 'fantasy'),
(16, 'seven days', 'board', 2, 0, 'historical'),
(17, 'axis and allies', 'board', 2, 0, 'historical'),
(18, 'lancaster', 'board', 2, 0, 'historical'),
(19, 'carcassonne', 'board', 2, 0, 'historical'),
(20, '1960 president', 'board', 2, 0, 'historical'),
(21, 'stone age', 'board', 2, 0, 'historical'),
(22, 'nyctophobia', 'board', 2, 0, 'horror'),
(23, 'betrayl', 'board', 2, 0, 'horror'),
(24, 'zombicide', 'board', 2, 0, 'horror'),
(25, 'gost', 'board', 2, 0, 'horror'),
(26, 'dead of winter', 'board', 2, 0, 'horror'),
(27, 'mansions of madness', 'board', 2, 0, 'horror'),
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
(40, 'soccer', 'online', 1, 0, 'sport'),
(41, 'nba', 'online', 1, 0, 'sport'),
(42, 'tenniskids', 'online', 1, 0, 'sport'),
(43, 'finalblow', 'online', 1, 0, 'sport'),
(44, 'internationalkarate', 'online', 1, 0, 'sport'),
(45, 'bowling', 'online', 1, 0, 'sport'),
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
(56, 'survive', 'online', 0, 0, 'vehicles');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `likes`
--

CREATE TABLE `likes` (
  `id_user` int(11) NOT NULL,
  `id_game` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `likes`
--

INSERT INTO `likes` (`id_user`, `id_game`) VALUES
(1, 1),
(1, 5),
(1, 4),
(1, 28),
(4, 11),
(4, 12),
(4, 13),
(4, 15),
(4, 7),
(4, 17),
(4, 24),
(4, 2);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `tournament`
--

CREATE TABLE `tournament` (
  `id_turneu` int(11) NOT NULL,
  `nume_joc` varchar(100) NOT NULL,
  `nume_creator` varchar(100) NOT NULL,
  `data_creare` date NOT NULL,
  `data_turneu` date NOT NULL,
  `nr_jucatori` int(11) NOT NULL,
  `premiu` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `locatia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'denisa', 'denisa', 'denisa_ionela28@yahoo.com'),
(2, 'adelina', 'adelina', 'adelina_alicia_2007@yahoo.com'),
(3, 'vlad', 'vlad', 'vlad_afrasinei@yahoo.com'),
(4, 'vlad1', '$2y$10$X/iGGR6TOX6pJlDXvBbqZudRQBUuu6kL.zR/LBnehWS48uqan6b6W', 'a.vlad_10@yahoo.com');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- Indexuri pentru tabele `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexuri pentru tabele `likes`
--
ALTER TABLE `likes`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_game` (`id_game`);

--
-- Indexuri pentru tabele `tournament`
--
ALTER TABLE `tournament`
  ADD PRIMARY KEY (`id_turneu`);

--
-- Indexuri pentru tabele `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique` (`email`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pentru tabele `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pentru tabele `tournament`
--
ALTER TABLE `tournament`
  MODIFY `id_turneu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pentru tabele `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`id_game`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
