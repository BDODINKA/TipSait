-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 04 2020 г., 16:03
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `molotok`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `body` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `catalog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `picture` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci,
  `status` tinytext CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE `maintexts` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `purdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `purdate`) VALUES
(1, 'About us', 'О Магазине\r\nНаша миссия:\r\nВ каждой точке Республики Беларусь Интернет-магазин «Молоток»— лучший выбор для всех, кто занимается строительством, ремонтом и обустройством дома\r\n________________________________________\r\n«Молоток» — быстроразвивающийся интернет-магазин строительных материалов и инструментов, а также товаров для дома, сада и огорода в Республике Беларусь. Основанный 2020 году.\r\nБолее 1000 товаров для дома\r\nВ интернет-магазине «Молоток» представлена большая часть брендов которые зарекомендовали себя как эталоны качества: Bosch, Caparol, «Керамин», Makita, ISOVER, PAROC, Ceresit, KNAUF, Tarkett, «ТехноНИКОЛЬ», Condor. Являясь одним из первых поставщиков данной продукции в Республику Беларусь, Интернет-магазин предлагает клиентам самые выгодные условия покупок.\r\n \r\nНаша цель:\r\nСамым крупным и узнаваемым Интернет-магазином в Республике Беларусь, который предпочитает покупатель, а поставщики конкурируют между собой за право поставлять свою продукцию в интернет магазин «Молоток».\r\n________________________________________\r\nПрограммы лояльности\r\nИнтернет магазин дорожит клиентами и предлагает на выбор несколько программ лояльности, чтобы покупки в интернет магазине «Молоток» всегда были выгодными. В числе дисконтных программ — накопительная карта Интернет магазин Молоток, программа для застройщиков и новоселов Ремонт у Хату, а также Моцная картка от БЕЛКАРТ.\r\n', 'index.html', '2020-06-14');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `password` tinytext NOT NULL,
  `status` tinytext NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'wq@mail.ru', '1', 'default', '2020-06-18 20:09:51', '2020-06-18 20:09:51');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
