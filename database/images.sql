-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: mai 26, 2020 la 03:52 PM
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
-- Structură tabel pentru tabel `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `id_game` int(11) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `images`
--

INSERT INTO `images` (`id`, `id_game`, `img1`, `img2`, `img3`) VALUES
(1, 1, 'img1', 'img2', 'img3'),
(2, 2, 'img4', 'img5', 'img6'),
(3, 3, 'img7', 'img8', 'img9'),
(4, 4, 'img10', 'img11', 'img12'),
(5, 5, 'img13', 'img14', 'img15'),
(6, 6, 'img16', 'img17', 'img18'),
(7, 7, 'img19', 'img20', 'img21'),
(8, 8, 'img22', 'img23', 'img24'),
(9, 9, 'img25', 'img26', 'img27'),
(10, 10, 'img28', 'img29', 'img30'),
(11, 11, 'img31', 'img32', 'img33'),
(12, 12, 'img34', 'img35', 'img36'),
(13, 13, 'img37', 'img38', 'img39'),
(14, 14, 'img40', 'img41', 'img42'),
(15, 15, 'img43', 'img44', 'img45'),
(16, 16, 'img46', 'img47', 'img48'),
(17, 17, 'img49', 'img50', 'img51'),
(18, 18, 'img52', 'img53', 'img54'),
(19, 19, 'img55', 'img56', 'img57'),
(20, 20, 'img58', 'img59', 'img60'),
(21, 21, 'img61', 'img62', 'img63'),
(22, 22, 'img64', 'img65', 'img66'),
(23, 23, 'img67', 'img68', 'img69'),
(24, 24, 'img70', 'img71', 'img72'),
(25, 25, 'img73', 'img74', 'img75'),
(26, 26, 'img76', 'img77', 'img78'),
(27, 27, 'img79', 'img80', 'img81'),
(28, 28, 'img82', 'img83', 'img84'),
(29, 29, 'img85', 'img86', 'img87'),
(30, 30, 'img88', 'img89', 'img90'),
(31, 31, 'img91', 'img92', 'img93'),
(32, 32, 'img94', 'img95', 'img96'),
(33, 33, 'img97', 'img98', 'img99'),
(34, 34, 'img100', 'img101', 'img102'),
(35, 35, 'img103', 'img104', 'img105'),
(36, 36, 'img106', 'img107', 'img108'),
(37, 37, 'img109', 'img110', 'img111'),
(38, 38, 'img112', 'img113', 'img114'),
(39, 39, 'img115', 'img116', 'img117'),
(40, 40, 'img118', 'img119', 'img120'),
(41, 41, 'img121', 'img122', 'img123'),
(42, 42, 'img124', 'img125', 'img126'),
(43, 43, 'img127', 'img128', 'img129'),
(44, 44, 'img130', 'img131', 'img132'),
(45, 45, 'img133', 'img134', 'img135'),
(46, 46, 'img136', 'img137', 'img138'),
(47, 47, 'img139', 'img140', 'img141'),
(48, 48, 'img142', 'img143', 'img144'),
(49, 49, 'img145', 'img146', 'img147'),
(50, 50, 'img148', 'img149', 'img150'),
(51, 51, 'img151', 'img152', 'img153'),
(52, 52, 'img154', 'img155', 'img156'),
(53, 53, 'img157', 'img158', 'img159'),
(54, 54, 'img160', 'img161', 'img162'),
(55, 55, 'img163', 'img164', 'img165'),
(56, 56, 'img166', 'img167', 'img168');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
