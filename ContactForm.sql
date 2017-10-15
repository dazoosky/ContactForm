-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 15 Paź 2017, 21:08
-- Wersja serwera: 5.7.19-0ubuntu0.16.04.1
-- Wersja PHP: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ContactForm`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phoneno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `readStatus` tinyint(1) NOT NULL,
  `messageCategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `message`
--

INSERT INTO `message` (`id`, `date`, `name`, `surname`, `email`, `phoneno`, `text`, `readStatus`, `messageCategory`) VALUES
(1, '2017-10-15 20:10:50', 'Jan', 'Kowalski', 'kowalski@ab.com', NULL, 'wiadomosc nr 1', 1, 1),
(2, '2017-10-15 20:59:49', 'Pawel', 'Nowak', 'pawel@amb.pl', NULL, 'test 2', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `message_category`
--

CREATE TABLE `message_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `message_category`
--

INSERT INTO `message_category` (`id`, `name`) VALUES
(1, 'Contact Request'),
(2, 'Complaint'),
(3, 'Query'),
(4, 'Other');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6BD307F1BFAA0E6` (`messageCategory`);

--
-- Indexes for table `message_category`
--
ALTER TABLE `message_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `message_category`
--
ALTER TABLE `message_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307F1BFAA0E6` FOREIGN KEY (`messageCategory`) REFERENCES `message_category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
