-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1
-- Timp de generare: iun. 03, 2020 la 01:25 PM
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
-- Structură tabel pentru tabel `commentsbattle`
--

CREATE TABLE `commentsbattle` (
  `id` int(11) NOT NULL,
  `id_jucator` int(11) NOT NULL,
  `numeutiz` varchar(100) NOT NULL,
  `comentariu` varchar(1000) NOT NULL,
  `datacomentariu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Eliminarea datelor din tabel `commentsbattle`
--

INSERT INTO `commentsbattle` (`id`, `id_jucator`, `numeutiz`, `comentariu`, `datacomentariu`) VALUES
(1, 4, 'vlad1', 'Imi place foarte mult aceasta pagina de battle.', '2020-05-28 00:00:00'),
(2, 4, 'vlad1', 'Foarte frumos', '2020-05-31 15:11:05'),
(3, 1, 'denisa1', 'Am fost foarte atenta la aceste turnee si pot spune doar ca-mi place foarte mult. Si paleta de culori este ok, si structura cu cele 2 split-uri si meniul si tot. Abia astept sa particip la un turneu', '2020-05-31 15:26:55');

--
-- Indexuri pentru tabele eliminate
--

--
-- Indexuri pentru tabele `commentsbattle`
--
ALTER TABLE `commentsbattle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pentru tabele eliminate
--

--
-- AUTO_INCREMENT pentru tabele `commentsbattle`
--
ALTER TABLE `commentsbattle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
