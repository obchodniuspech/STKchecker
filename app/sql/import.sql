-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Počítač: localhost:8889
-- Vytvořeno: Čtv 30. čen 2022, 21:15
-- Verze serveru: 5.7.34
-- Verze PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `stkCheck`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `rz` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `stk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Vypisuji data pro tabulku `cars`
--

INSERT INTO `cars` (`id`, `rz`, `name`, `userId`, `stk`) VALUES
(5, '7AN5541', 'Skauk', 1, '2022-06-29'),
(6, '4AU4905', 'Ryzipid', 1, '2022-06-01'),
(7, NULL, 'Volvo', NULL, NULL),
(8, NULL, 'Renault Megane', NULL, NULL),
(9, '4AC2871', 'Popelnice Peugeot', NULL, '2022-06-30'),
(10, '777888', 'Hnujdaj', NULL, '2022-12-01'),
(11, '777888', 'Hnujdaj', NULL, '2022-12-01'),
(12, '7A72424', 'Peugeot', NULL, '2022-06-30'),
(13, '555666', 'test', NULL, '2022-06-30');

--
-- Indexy pro exportované tabulky
--

--
-- Indexy pro tabulku `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
