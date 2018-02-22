-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 22 2018 г., 15:10
-- Версия сервера: 5.7.19
-- Версия PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `task3`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `title`) VALUES
(1, 'Test title 1'),
(2, 'Test title 2'),
(3, 'Test title 3'),
(4, 'Test title 4'),
(5, 'Test title 5'),
(6, 'Test title 6'),
(7, 'Test title 7'),
(8, 'Test title 8'),
(9, 'Test title 9'),
(10, 'Test title 10'),
(11, 'Test title 11'),
(12, 'Test title 12'),
(13, 'Test title 13'),
(14, 'Test title 14'),
(15, 'Test title 15'),
(16, 'Test title 16'),
(17, 'Test title 17'),
(18, 'Test title 18'),
(19, 'Test title 19'),
(20, 'Test title 20'),
(21, 'Test title 21'),
(22, 'Test title 22'),
(23, 'Test title 23'),
(24, 'Test title 24'),
(25, 'Test title 25'),
(26, 'Test title 26'),
(27, 'Test title 27'),
(28, 'Test title 28'),
(29, 'Test title 29'),
(30, 'Test title 30'),
(31, 'Test title 31'),
(32, 'Test title 32'),
(33, 'Test title 33'),
(34, 'Test title 34'),
(35, 'Test title 35'),
(36, 'Test title 36'),
(37, 'Test title 37'),
(38, 'Test title 38'),
(39, 'Test title 39'),
(40, 'Test title 40'),
(41, 'Test title 41'),
(42, 'Test title 42'),
(43, 'Test title 43'),
(44, 'Test title 44'),
(45, 'Test title 45'),
(46, 'Test title 46'),
(47, 'Test title 47'),
(48, 'Test title 48'),
(49, 'Test title 49'),
(50, 'Test title 50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
