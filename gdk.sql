-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Жов 23 2016 р., 22:10
-- Версія сервера: 5.5.45
-- Версія PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `gdk`
--

-- --------------------------------------------------------

--
-- Структура таблиці `producer`
--

CREATE TABLE IF NOT EXISTS `producer` (
  `id_producer` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id_producer`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп даних таблиці `producer`
--

INSERT INTO `producer` (`id_producer`, `name`) VALUES
(5, 'Samsung'),
(6, 'Sony'),
(7, 'Lenovo'),
(8, 'Asus'),
(9, 'LG');

-- --------------------------------------------------------

--
-- Структура таблиці `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `maker` int(11) NOT NULL,
  `version` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`id_product`, `type`, `maker`, `version`, `price`, `date`) VALUES
(1, 1, 7, 'A830', 4000, 144239448),
(2, 2, 7, 'Z500', 14350, 144239448);

-- --------------------------------------------------------

--
-- Структура таблиці `type_products`
--

CREATE TABLE IF NOT EXISTS `type_products` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп даних таблиці `type_products`
--

INSERT INTO `type_products` (`id_type`, `title`) VALUES
(1, 'Телефони'),
(2, 'Ноутбуки'),
(3, 'Фотопарати');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
