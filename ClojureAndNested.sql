-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 08 2018 г., 12:48
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ClojureAndNested`
--
CREATE DATABASE IF NOT EXISTS `ClojureAndNested` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ClojureAndNested`;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id_category`, `name`) VALUES
(1, 'Каталог'),
(2, 'Одежда'),
(3, 'Продукты'),
(4, 'Верхняя одежда'),
(5, 'Молочные продуткы'),
(6, 'Молоко'),
(7, 'Прайс'),
(8, 'Машины'),
(9, 'Грузовые'),
(10, 'Легковые');

-- --------------------------------------------------------

--
-- Структура таблицы `category_links`
--

CREATE TABLE `category_links` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `child_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `category_links`
--

INSERT INTO `category_links` (`id`, `parent_id`, `child_id`, `level`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 2),
(5, 1, 5, 2),
(6, 2, 2, 1),
(7, 2, 4, 2),
(8, 3, 3, 1),
(9, 3, 5, 2),
(10, 5, 6, 3),
(11, 3, 6, 3),
(12, 1, 6, 3),
(13, 7, 7, 0),
(14, 1, 8, 1),
(15, 8, 8, 1),
(16, 1, 9, 2),
(17, 8, 9, 2),
(18, 1, 10, 2),
(19, 8, 10, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `nested`
--

CREATE TABLE `nested` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `level` int(11) NOT NULL,
  `left` int(11) NOT NULL,
  `right` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `nested`
--

INSERT INTO `nested` (`id`, `name`, `level`, `left`, `right`) VALUES
(1, 'node1', 1, 1, 22),
(2, 'node2', 2, 2, 9),
(3, 'node3', 2, 10, 15),
(4, 'node4', 2, 16, 21),
(5, 'node5', 3, 3, 4),
(6, 'node6', 3, 5, 8),
(7, 'node7', 3, 11, 14),
(8, 'node8', 3, 17, 18),
(9, 'node9', 3, 19, 20),
(10, 'node10', 4, 6, 7),
(11, 'node11', 4, 12, 13);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Индексы таблицы `category_links`
--
ALTER TABLE `category_links`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `nested`
--
ALTER TABLE `nested`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `category_links`
--
ALTER TABLE `category_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `nested`
--
ALTER TABLE `nested`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
