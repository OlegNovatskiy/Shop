-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Жов 26 2016 р., 23:44
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп даних таблиці `producer`
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
-- Структура таблиці `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id_product` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `producer` int(11) NOT NULL,
  `version` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `like` int(11) NOT NULL,
  PRIMARY KEY (`id_product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп даних таблиці `products`
--

INSERT INTO `products` (`id_product`, `type`, `producer`, `version`, `price`, `date`, `image`, `like`) VALUES
(1, 1, 7, 'A830', 4000, 144239448, '', 0),
(2, 2, 7, 'Z500', 14350, 144239448, '', 0),
(3, 1, 10, '5453Duo', 2500, 144239448, '', 0),
(4, 1, 11, '2.50', 3100, 144239448, '', 0),
(5, 1, 12, 'Mini Red', 330, 144239448, '', 0),
(6, 1, 8, 'A500KL', 4500, 144239448, '', 0),
(7, 2, 8, 'X555SJ', 7500, 144239448, '', 0),
(8, 2, 9, 'A530-U.AE02R1', 9000, 144239448, '', 0),
(9, 2, 6, 'SVT11213CX', 12000, 144239448, '', 0),
(10, 2, 5, '550P7C', 6600, 144239448, '', 0),
(11, 3, 6, 'Alpha A58K', 12000, 144239448, '', 0),
(12, 3, 5, 'NX1', 32000, 144239448, '', 0);

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
