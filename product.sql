-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 30 2021 г., 20:39
-- Версия сервера: 10.1.48-MariaDB
-- Версия PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `product`
--
CREATE DATABASE IF NOT EXISTS `product` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `product`;

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `sku` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'SKU',
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'NAME',
  `price` float NOT NULL COMMENT 'PRICE($)',
  `type_id` int(11) NOT NULL COMMENT 'Type',
  `size_dvd` float DEFAULT NULL COMMENT 'Size',
  `weight_book` float DEFAULT NULL COMMENT 'weight',
  `height_furniture` float DEFAULT NULL COMMENT 'hight',
  `length_furniture` float DEFAULT NULL COMMENT 'length',
  `width_furniture` float DEFAULT NULL COMMENT 'width'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`sku`, `name`, `price`, `type_id`, `size_dvd`, `weight_book`, `height_furniture`, `length_furniture`, `width_furniture`) VALUES
('dfgdfg', 'dddd', 120, 2, 0, 10, 0, 0, 0),
('dhffffff', 'dfhhhhhhhhhhhhh', 125, 3, 0, 0, 10, 10, 10),
('gfhfg', 'fhfg', 120, 2, 0, 120, 0, 0, 0),
('hhhhhhhhhhh', 'hhhhhhhhhhhhhhhhhhh', 120, 2, 0, 120, 0, 0, 0),
('hjhjh', 'hjhjjjjjjjjjjjjjjjjjjjj', 120, 1, 120, 0, 0, 0, 0),
('ooooooooooo', 'oooooooooooooooo', 120, 3, 0, 0, 10, 10, 10),
('rereg', 'erge', 120, 2, 0, 120, 0, 0, 0),
('rtert', 'erter', 123, 1, 120, 0, 0, 0, 0),
('sdvsdv', 'sdv', 120, 2, 0, 120, 0, 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `type_product`
--

CREATE TABLE `type_product` (
  `type_id` int(11) NOT NULL,
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `type_product`
--

INSERT INTO `type_product` (`type_id`, `name`) VALUES
(1, 'DICK'),
(2, 'Book'),
(3, 'Furniture');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sku`),
  ADD UNIQUE KEY `sku` (`sku`),
  ADD KEY `type` (`type_id`);

--
-- Индексы таблицы `type_product`
--
ALTER TABLE `type_product`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `type_product`
--
ALTER TABLE `type_product`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_product` (`type_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
