-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2020 at 02:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `name`, `category`) VALUES
(1, 'wingspan', 'board'),
(2, 'blinded', 'board'),
(3, 'cytosis', 'board'),
(4, 'evo', 'board'),
(5, 'mad science', 'board'),
(6, 'wonders of science', 'board'),
(7, 'keep cool', 'board'),
(8, 'ungame', 'board'),
(9, 'kolejka', 'board'),
(10, 'equate', 'board'),
(11, 'battle masters', 'board'),
(12, 'blood bowl', 'board'),
(13, 'survive', 'board'),
(14, 'chaos marauders', 'board'),
(15, 'dark tower', 'board'),
(16, 'seven days', 'board'),
(17, 'axis and allies', 'board'),
(18, 'lancaster', 'board'),
(19, 'carcassonne', 'board'),
(20, '1960 president', 'board'),
(21, 'stone age', 'board'),
(22, 'nyctophobia', 'board'),
(23, 'betrayl', 'board'),
(24, 'zombicide', 'board'),
(25, 'gost', 'board'),
(26, 'dead of winter', 'board'),
(27, 'mansions of madness', 'board'),
(28, 'o day attak on earth', 'online'),
(29, 'bomberman', 'online'),
(30, 'bulets', 'online'),
(31, 'batman', 'online'),
(32, 'mario', 'online'),
(33, 'air raiders', 'online'),
(34, 'apex legends', 'online'),
(35, 'amazing eternals', 'online'),
(36, 'quaqe campions', 'online'),
(37, 'overwatch', 'online'),
(38, 'valorant', 'online'),
(39, 'evolve', 'online'),
(40, 'soccer', 'online'),
(41, 'nba', 'online'),
(42, 'tenniskids', 'online'),
(43, 'finalblow', 'online'),
(44, 'internationalkarate', 'online'),
(45, 'bowling', 'online'),
(46, 'forge of empiers', 'online'),
(47, 'grepolis', 'online'),
(48, 'tribal wars', 'online'),
(49, 'the west', 'online'),
(50, 'elvenar', 'online'),
(51, 'triviador', 'online'),
(52, 'nascar', 'online'),
(53, 'car3', 'online'),
(54, 'the word of cars', 'online'),
(55, 'racing', 'online');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
