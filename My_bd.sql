-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 06 2017 г., 15:06
-- Версия сервера: 5.5.53
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `My_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `1`
--

CREATE TABLE `1` (
  `id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `1`
--

INSERT INTO `1` (`id`) VALUES
(1),
(2),
(3);

-- --------------------------------------------------------

--
-- Структура таблицы `aa`
--

CREATE TABLE `aa` (
  `id` int(11) NOT NULL,
  `name` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aa`
--

INSERT INTO `aa` (`id`, `name`) VALUES
(1, 'AA'),
(2, 'aa'),
(3, 'Aa');

-- --------------------------------------------------------

--
-- Структура таблицы `animals`
--

CREATE TABLE `animals` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT 'без имени',
  `sex` varchar(10) NOT NULL,
  `race` varchar(100) NOT NULL,
  `breeder` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `kennel` varchar(255) NOT NULL,
  `birth` date NOT NULL,
  `now` varchar(255) NOT NULL DEFAULT '0',
  `mum` int(11) NOT NULL,
  `dad` int(11) NOT NULL,
  `hr` varchar(4) NOT NULL,
  `aa` varchar(3) NOT NULL,
  `bb` varchar(3) NOT NULL,
  `tt` varchar(3) NOT NULL,
  `mm` varchar(3) NOT NULL,
  `ww` varchar(3) NOT NULL,
  `ff` varchar(3) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `puppy` int(11) NOT NULL DEFAULT '0',
  `litter` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `animals`
--

INSERT INTO `animals` (`id`, `name`, `sex`, `race`, `breeder`, `owner`, `kennel`, `birth`, `now`, `mum`, `dad`, `hr`, `aa`, `bb`, `tt`, `mm`, `ww`, `ff`, `status`, `puppy`, `litter`, `url`) VALUES
(1, 'Адам', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 0, 0, 'hrhr', 'aa', 'BB', 'Tt', 'mm', 'ww', 'Ff', 1, 0, 0, 'pic/hrhr/hr_orange.png'),
(2, 'EVA', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 0, 0, 'Hrhr', 'AA', 'bb', 'Tt', 'mm', 'Ww', 'ff', 1, 0, 0, 'pic/TT/shokoTT.png'),
(3, 'Трешка', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 2, 1, 'hrhr', 'Aa', 'Bb', 'tt', 'mm', 'Ww', 'ff', 1, 0, 0, 'pic/hrhr/hr_white.png'),
(4, '4 Белянка', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 3, 1, 'hrhr', 'Aa', 'Bb', 'tt', 'mm', 'Ww', 'Ff', 1, 0, 0, 'pic/hrhr/hr_white.png'),
(5, 'Чистая и голая', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 2, 1, 'Hrhr', 'Aa', 'Bb', 'tt', 'mm', 'Ww', 'Ff', 1, 0, 0, 'pic/white.png'),
(6, 'Шестой', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-06-01', '0', 5, 1, 'hrhr', 'Aa', 'Bb', 'tt', 'mm', 'Ww', 'ff', 1, 0, 0, 'pic/hrhr/hr_white.png'),
(7, 'Беленькая семерка', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-06-01', '0', 5, 1, 'hrhr', 'Aa', 'BB', 'tt', 'mm', 'Ww', 'Ff', 1, 0, 0, 'pic/hrhr/hr_white.png');

-- --------------------------------------------------------

--
-- Структура таблицы `bb`
--

CREATE TABLE `bb` (
  `id` int(11) NOT NULL,
  `name` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bb`
--

INSERT INTO `bb` (`id`, `name`) VALUES
(1, 'BB'),
(2, 'bb'),
(3, 'Bb');

-- --------------------------------------------------------

--
-- Структура таблицы `book`
--

CREATE TABLE `book` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `book`
--

INSERT INTO `book` (`id`, `title`, `author`, `price`) VALUES
(1, 'Gifted Programmers', 'Charles Xavier', '99.99'),
(2, 'Gifted Programmers', 'Charles Xavier', '99.99'),
(3, 'Gifted Programmers', 'Charles Xavier', '99.99'),
(4, 'Gifted Programmers', 'Charles Xavier', '99.99'),
(5, 'Gifted Programmers', 'Charles Xavier', '99.99'),
(6, 'Gifted Programmers', 'Charles Xavier', '99.99');

-- --------------------------------------------------------

--
-- Структура таблицы `dogs`
--

CREATE TABLE `dogs` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `race` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breeder` int(11) UNSIGNED DEFAULT NULL,
  `owner` int(11) UNSIGNED DEFAULT NULL,
  `kennel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` date DEFAULT NULL,
  `now` int(11) UNSIGNED DEFAULT NULL,
  `dad` int(11) UNSIGNED DEFAULT NULL,
  `mum` int(11) UNSIGNED DEFAULT NULL,
  `hr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mm` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ww` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ff` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `dogs`
--

INSERT INTO `dogs` (`id`, `name`, `sex`, `race`, `breeder`, `owner`, `kennel`, `birth`, `now`, `dad`, `mum`, `hr`, `aa`, `bb`, `tt`, `mm`, `ww`, `ff`, `status`) VALUES
(1, 'ЖОЖО', 'сука', 'КХС', 1, 1, 'Чарующий соблазн', '0000-00-00', 1, 1, 1, 'hrhr', 'aa', 'bb', 'Tt', 'Mm', 'WW', 'ff', 0),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tt', NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TT', NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tt', NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aa', NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TT', NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AA', NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tt', NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aa', NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tt', NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aa', NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TT', NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AA', NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TT', NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aa', NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TT', NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aa', NULL, NULL, NULL, NULL, NULL, NULL),
(18, ' ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'aa', 'Bb', 'Tt', 'Mm', 'Ww', 'Ff', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `ff`
--

CREATE TABLE `ff` (
  `id` int(11) NOT NULL,
  `name` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ff`
--

INSERT INTO `ff` (`id`, `name`) VALUES
(1, 'FF'),
(2, 'ff'),
(3, 'Ff');

-- --------------------------------------------------------

--
-- Структура таблицы `hr`
--

CREATE TABLE `hr` (
  `id` int(11) NOT NULL,
  `name` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hr`
--

INSERT INTO `hr` (`id`, `name`) VALUES
(1, 'HRHR'),
(2, 'Hrhr'),
(3, 'hrhr');

-- --------------------------------------------------------

--
-- Структура таблицы `mm`
--

CREATE TABLE `mm` (
  `id` int(11) NOT NULL,
  `name` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `mm`
--

INSERT INTO `mm` (`id`, `name`) VALUES
(1, 'MM'),
(2, 'mm'),
(3, 'Mm');

-- --------------------------------------------------------

--
-- Структура таблицы `races`
--

CREATE TABLE `races` (
  `id_r` int(20) NOT NULL,
  `name_race` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `races`
--

INSERT INTO `races` (`id_r`, `name_race`) VALUES
(1, 'КХС'),
(3, 'пудель'),
(2, 'шпиц');

-- --------------------------------------------------------

--
-- Структура таблицы `sex`
--

CREATE TABLE `sex` (
  `id_s` int(11) NOT NULL,
  `sex` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sex`
--

INSERT INTO `sex` (`id_s`, `sex`) VALUES
(1, 'кобель'),
(2, 'сука');

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `id` int(11) UNSIGNED NOT NULL,
  `status` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `test`
--

CREATE TABLE `test` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `test`
--

INSERT INTO `test` (`id`, `name`, `sex`, `tt`) VALUES
(1, 'ЖОЖО', 'сука', 'TT'),
(2, 'муму', 'кобель', 'tt'),
(3, NULL, NULL, 'Tt');

-- --------------------------------------------------------

--
-- Структура таблицы `tt`
--

CREATE TABLE `tt` (
  `id` int(11) NOT NULL,
  `name` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tt`
--

INSERT INTO `tt` (`id`, `name`) VALUES
(1, 'TT'),
(2, 'tt'),
(3, 'Tt');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kennel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_time` date NOT NULL,
  `l_time` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `kennel`, `f_time`, `l_time`, `status`) VALUES
(18, 'nesh', 'h@h', '$2y$10$W/2Hrjkj4fIdZ0GbNpf24e3da6.03LLqMSMKwuuLgBH7STxeU/yFW', '-=Чарующий соблазн=-', '0000-00-00', '0000-00-00', 0),
(19, 'fgg', 'gbgdf@sd', '$2y$10$nu88rfUhfGE.6Qn0PkHhzuode6K5YXefx.3sDtFNP4rm7SMKc0cR6', '', '0000-00-00', '0000-00-00', 0),
(20, 'Neshika', 'stepanovaml@mail.ru', '$2y$10$hARENCiSn/EVfUdYywIF6..KOt746yZpItARlqVCfhtABVjVwa8sy', '', '0000-00-00', '0000-00-00', 0),
(21, 'admin', 'neshika69@gmail.com', '$2y$10$if1D7PAa12HxCCkNOjAfReD87FAVziC0Ppuwk91wvb4iDkZ0JQP.G', '', '0000-00-00', '0000-00-00', 0),
(22, 'admin2', 'neshika69@gmail.com2', '$2y$10$WTEsW3rI9dvy/XzczoQBBuJ1lBAUaH8u1aYlcfH63SJidJmWx52fi', '', '0000-00-00', '0000-00-00', 0),
(23, 'admin3', 'neshika69@gmail.com23', '$2y$10$3SKYlknPHT1svso2giH0fuS.UKoMMkJSIq51HPgYhM9eBlOpxfmyG', '', '0000-00-00', '0000-00-00', 0),
(24, 'Nika', 'nika@taka', '$2y$10$tZtnHGYrrOTgS67LOdkfUeoT3B5bU3zdwg9qPvl.Ot6TFUm9ovQ/e', 'махрушки', '0000-00-00', '0000-00-00', 0),
(25, 'nuki', 'nuki@q', '$2y$10$LeplyfcZcLDhJqGNyDlAcOcAaaAE8DNCX2WwGZk0ZhoZqUl.AsAa6', 'sgfe', '0000-00-00', '0000-00-00', 0),
(26, 'nui', 'nui@qw', '$2y$10$j4IvDZkt/Vd/EqiR6naq7O5NxeimLNzD5Sp5LunNTkzRok/RuvbEu', 'муськи', '0000-00-00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `vid`
--

CREATE TABLE `vid` (
  `id_vid` int(11) NOT NULL,
  `name_vid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vid`
--

INSERT INTO `vid` (`id_vid`, `name_vid`) VALUES
(1, 'пудель'),
(2, 'Дог'),
(3, 'Шпиц'),
(4, 'КХС');

-- --------------------------------------------------------

--
-- Структура таблицы `ww`
--

CREATE TABLE `ww` (
  `id` int(11) NOT NULL,
  `name` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ww`
--

INSERT INTO `ww` (`id`, `name`) VALUES
(1, 'WW'),
(2, 'ww'),
(3, 'Ww');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `1`
--
ALTER TABLE `1`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `aa`
--
ALTER TABLE `aa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sex` (`sex`),
  ADD KEY `aa` (`aa`),
  ADD KEY `hr` (`hr`),
  ADD KEY `bb` (`bb`),
  ADD KEY `tt` (`tt`),
  ADD KEY `mm` (`mm`),
  ADD KEY `ww` (`ww`),
  ADD KEY `ff` (`ff`),
  ADD KEY `race` (`race`),
  ADD KEY `breeder` (`breeder`),
  ADD KEY `owner` (`owner`),
  ADD KEY `mum` (`mum`),
  ADD KEY `dad` (`dad`);

--
-- Индексы таблицы `bb`
--
ALTER TABLE `bb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ff`
--
ALTER TABLE `ff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `hr`
--
ALTER TABLE `hr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `mm`
--
ALTER TABLE `mm`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `name_race` (`name_race`);

--
-- Индексы таблицы `sex`
--
ALTER TABLE `sex`
  ADD PRIMARY KEY (`id_s`),
  ADD KEY `sex` (`sex`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tt`
--
ALTER TABLE `tt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`);

--
-- Индексы таблицы `vid`
--
ALTER TABLE `vid`
  ADD PRIMARY KEY (`id_vid`);

--
-- Индексы таблицы `ww`
--
ALTER TABLE `ww`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `1`
--
ALTER TABLE `1`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `aa`
--
ALTER TABLE `aa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `bb`
--
ALTER TABLE `bb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `dogs`
--
ALTER TABLE `dogs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
