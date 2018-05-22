-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 May 2018, 02:36:48
-- Sunucu sürümü: 10.1.32-MariaDB
-- PHP Sürümü: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uy_signup`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`) VALUES
(1, 'aykut', 'aykut@aykut.com', '123456789', 'aykut.jpg'),
(2, 'ayktt', 'asd@asd.com', '$2y$10$P.7h6xoMVB1lcIk2rOjcMeoYxa/w2VIAoFweglA1QtLKpMmyKrd9W', ''),
(3, 'asdasd', 'asdasd@asdasd.com', '$2y$10$BY4QtfLYPhStAA7c7dAfHucccywwUrLcq/ieYj/ji6.QLqOiGM6Y2', ''),
(4, 'lalal', 'lala@alala.com', '$2y$10$cqgcEHH97dRoeNOD7iT3kuzQVRpPEbHwvMRYy08focXz9MSPtlDw2', ''),
(5, 'huhu', 'huhu@huhu.coi', '$2y$10$NEUPbTAIMLV0e7nJx/kY6.mp3qZrSzUn7KOJfQrxd/u09PgsJ9sau', ''),
(6, 'huhu', 'huhu@huhu.cosi', '$2y$10$YEQEfqi1MX6Y3EiSTzZJA.V9H0bsIhYyOPxQ/qxr3fYIgWkW2OBFO', ''),
(7, 'Lalala', 'shopare2003@live.nl', '$2y$10$WHDn2ZYOF9EZ5Du/g7vXnuI.mI6dbvZeHrIzD51EPS.EqSGx/8MeC', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
