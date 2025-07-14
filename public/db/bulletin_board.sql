-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.127.126.26
-- Время создания: Июл 14 2025 г., 17:40
-- Версия сервера: 8.0.35
-- Версия PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `bulletin_board`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int NOT NULL,
  `slug` varchar(32) COLLATE utf8mb4_general_ci NOT NULL,
  `ad_head` text COLLATE utf8mb4_general_ci NOT NULL,
  `ad_body` text COLLATE utf8mb4_general_ci NOT NULL,
  `subject_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `advertisements`
--

INSERT INTO `advertisements` (`id`, `slug`, `ad_head`, `ad_body`, `subject_id`) VALUES
(1, '1752492910', 'test head', 'test_body', 2),
(2, '1752492988', 'test head2', 'test body2', 2),
(3, '1752493063', 'goods test', 'goods test body', 1),
(4, '1752494334', 'Заголовок3', 'Объявление 3', 2),
(5, '1752494378', 'Заголовок4', 'Объявление 4', 2),
(6, '1752494423', 'Товар 2', 'Продам товар 2 продам', 1),
(7, '1752494443', 'товар 3', 'Куплю товар 3 товар', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `subject`
--

CREATE TABLE `subject` (
  `id` int NOT NULL,
  `slug` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `subject`
--

INSERT INTO `subject` (`id`, `slug`, `name`) VALUES
(1, 'goods', 'Товары'),
(2, 'services', 'Услуги');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
