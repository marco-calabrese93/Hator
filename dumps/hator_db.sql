-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Creato il: Lug 06, 2025 alle 10:09
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hator_db`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(64) NOT NULL,
  `user_url` varchar(60) NOT NULL,
  `titolo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`ID`, `first_name`, `last_name`, `email`, `password`, `user_url`, `titolo`) VALUES
(1, 'Gaia', 'Piersanti', 'gaiapiersanti19@gmail.com', 'password', 'bcrsgqrq1rn2', 'Mrs.'),
(2, 'Fabri', 'Fibra', 'fabri@fibra.com', 'fenomeno', 'wcc5xfgq6cm3', 'Mr.'),
(4, 'Gaia', 'Pier', 'gaiapiersanti19@gmail.com', 'dmdmekdm', 'tbpye0h60kp1vugpnzpiom8a2jhsnc7zy0hgheqgvgymfqwjrcr4swwkvfrc', 'Mrs.'),
(5, 'Gaia', 'Pier', 'gaiapiersanti19@gmail.com', '', 'radmrcjed5h78swbso4famp9i0pnj6wasobl5tc90txaf9bo4ivqggzci7zh', 'Mrs.'),
(6, 'Armando', 'Molino', 'arm@dedalo.com', 'ciaoA!', 'emqcatopfahdcsp19kcgy5mfdhda3tdiztyuswojcwcbiff0z2obzjfwwfyi', 'Mr.');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `url` (`user_url`),
  ADD KEY `email` (`email`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
