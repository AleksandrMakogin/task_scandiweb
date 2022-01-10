-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Січ 10 2022 р., 13:52
-- Версія сервера: 10.3.22-MariaDB
-- Версія PHP: 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `scandiweb`
--

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE `product` (
  `sku` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп даних таблиці `product`
--

INSERT INTO `product` (`sku`, `name`, `price`, `type`, `size`, `weight`, `width`, `height`, `length`) VALUES
('JVCA24', 'SDD', 250, 'Furniture', 550, 2, 3, 1, 6),
('JVCA25', 'HDD', 255, 'DVD', 555, 4, 6, 2, 10),
('JVCA26', 'SDD', 260, 'Furniture ', 750, 2, 3, 1, 6),
('JVCA27', 'SDD', 270, 'Book', 900, 2, 3, 1, 6),
('JVCA28', 'SDD', 275, 'DVD', 800, 4, 3, 1, 6),
('JVCA29', 'HDD', 240, 'Book', 540, 3, 6, 2, 10),
('JVCA30', 'SDD', 245, 'DVD', 500, 1, 3, 1, 6);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `product`
--
ALTER TABLE `product`
  ADD UNIQUE KEY `AK_SKU` (`sku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
