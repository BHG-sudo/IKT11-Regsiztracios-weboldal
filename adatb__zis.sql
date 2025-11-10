-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2025. Nov 10. 10:17
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `adatbázis`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `regisztráció`
--

CREATE TABLE `regisztráció` (
  `id` int(50) NOT NULL,
  `email` varchar(90) NOT NULL COMMENT 'muszáj kitölteni',
  `jelszó` varchar(50) NOT NULL COMMENT 'muszáj kitölteni',
  `születési` date NOT NULL DEFAULT current_timestamp(),
  `telefonszám` int(20) NOT NULL COMMENT 'muszáj kitölteni',
  `nem` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci NOT NULL COMMENT 'férfi/nő',
  `legmagasabb iskolai végzetség` varchar(30) NOT NULL,
  `profilkép` int(11) NOT NULL,
  `nyelv` varchar(20) NOT NULL COMMENT 'magyar/angol/német'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `regisztráció`
--
ALTER TABLE `regisztráció`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `regisztráció`
--
ALTER TABLE `regisztráció`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
