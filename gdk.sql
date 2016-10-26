-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2016 г., 09:52
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gdk`
--

-- --------------------------------------------------------

--
-- Структура таблицы `producer`
--

CREATE TABLE IF NOT EXISTS `producer` (
  `id_producer` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `producer`
--

INSERT INTO `producer` (`id_producer`, `name`) VALUES
(5, 'Samsung'),
(6, 'Sony'),
(7, 'Lenovo'),
(8, 'Asus'),
(9, 'LG'),
(10, 'Prestigio'),
(11, 'Impression'),
(12, 'Globex');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `producer` int(11) NOT NULL,
  `version` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_product`, `type`, `producer`, `version`, `price`, `date`, `image`) VALUES
(1, 1, 7, 'A830', 4000, 144239448, ''),
(2, 2, 7, 'Z500', 14350, 144239448, ''),
(3, 1, 10, '5453Duo', 2500, 144239448, ''),
(4, 1, 11, '2.50', 3100, 144239448, ''),
(5, 1, 12, 'Mini Red', 330, 144239448, ''),
(6, 1, 8, 'A500KL', 4500, 144239448, ''),
(7, 2, 8, 'X555SJ', 7500, 144239448, ''),
(8, 2, 9, 'A530-U.AE02R1', 9000, 144239448, ''),
(9, 2, 6, 'SVT11213CX', 12000, 144239448, ''),
(10, 2, 5, '550P7C', 6600, 144239448, ''),
(11, 3, 6, 'Alpha A58K', 12000, 144239448, ''),
(12, 3, 5, 'NX1', 32000, 144239448, '');

-- --------------------------------------------------------

--
-- Структура таблицы `type_products`
--

CREATE TABLE IF NOT EXISTS `type_products` (
  `id_type` int(11) NOT NULL,
  `title` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `type_products`
--

INSERT INTO `type_products` (`id_type`, `title`) VALUES
(1, 'Телефони'),
(2, 'Ноутбуки'),
(3, 'Фотопарати');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`id_producer`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `producer`
--
ALTER TABLE `producer`
  MODIFY `id_producer` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
