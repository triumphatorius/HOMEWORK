-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 31 2018 г., 10:40
-- Версия сервера: 5.7.13-log
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `auth`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dz_5`
--

CREATE TABLE IF NOT EXISTS `dz_5` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dz_5`
--

INSERT INTO `dz_5` (`id`, `login`, `password`, `name`, `age`, `description`, `photo`) VALUES
(1, 'user1', '1234', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(6) unsigned NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`, `firstname`, `lastname`, `username`, `name`) VALUES
(1, '', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', NULL, NULL, '', ''),
(2, 'имя1', '1234', NULL, NULL, NULL, NULL, NULL),
(3, 'имя2', '1234', NULL, NULL, NULL, NULL, NULL),
(4, 'имя3', '1234', NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, 'john@example.com', 'John', 'Doe', NULL, NULL),
(6, NULL, NULL, 'mary@example.com', 'Mary', 'Moe', NULL, NULL),
(7, NULL, NULL, 'julie@example.com', 'Julie', 'Dooley', NULL, NULL),
(8, NULL, NULL, 'john@example.com', 'John', 'Doe', NULL, NULL),
(9, NULL, NULL, 'mary@example.com', 'Mary', 'Moe', NULL, NULL),
(10, NULL, NULL, 'julie@example.com', 'Julie', 'Dooley', NULL, NULL),
(11, 'one', '1', NULL, NULL, NULL, NULL, NULL),
(12, 'two', '2', NULL, NULL, NULL, NULL, NULL),
(13, 'roma', '1234', NULL, NULL, NULL, NULL, NULL),
(14, 'vasya', '1234', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users2`
--

CREATE TABLE IF NOT EXISTS `users2` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users2`
--

INSERT INTO `users2` (`id`, `login`, `password`) VALUES
(1, 'radu', '123'),
(2, 'victor', '123'),
(3, 'popgapon', '1234'),
(4, 'имя1', '1234'),
(5, 'имя2', '1234'),
(6, 'имя3', '1234'),
(7, 'faq', '123456'),
(8, 'user1', '123456'),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, 'user2', '1234');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dz_5`
--
ALTER TABLE `dz_5`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `dz_5`
--
ALTER TABLE `dz_5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `users2`
--
ALTER TABLE `users2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
