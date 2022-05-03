-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 03 2022 г., 09:26
-- Версия сервера: 8.0.27
-- Версия PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `checkup`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fameles`
--

CREATE TABLE `fameles` (
  `id` int NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_1` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_2` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_3` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_4` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `old_price` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `fameles`
--

INSERT INTO `fameles` (`id`, `gender`, `title_1`, `title_2`, `title_3`, `title_4`, `price`, `old_price`) VALUES
(1, 'мужчин', 'Горомональный скрининг', 'Тестостерон', 'Свободный тестостерон', 'Глобулин, связывающий половые гормоны', 2800, 3500),
(2, 'женщин', 'Диагностика шейки матки аппаратом \"ТруСкрин\"', 'Консультация гинеколога', 'Лечение цистита ', 'Лечение миомы матки', 3400, 4599),
(3, 'детей', 'КУФ Солнышко', 'Лечебная физкультура ', 'Фитнес для мам и малышей ', 'Программа \"Депозит\"', 2999, 3600),
(4, 'всей семьи ', 'Анализы ', 'Все виды УЗИ', 'Кардиограмма(ЭЭГ) ', 'Медицинские справки', 1500, 2300);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fameles`
--
ALTER TABLE `fameles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fameles`
--
ALTER TABLE `fameles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
