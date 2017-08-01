-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 01 2017 г., 23:37
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
-- Структура таблицы `3`
--

CREATE TABLE `3` (
  `id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `3`
--

INSERT INTO `3` (`id`) VALUES
(1);

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
  `mum` int(11) NOT NULL DEFAULT '0',
  `dad` int(11) NOT NULL DEFAULT '0',
  `g1dad` int(11) DEFAULT '0',
  `g1mum` int(11) DEFAULT '0',
  `g0dad` int(11) DEFAULT '0',
  `g0mum` int(11) DEFAULT '0',
  `gg1dad1` int(11) DEFAULT '0',
  `gg1mum2` int(11) DEFAULT '0',
  `gg1dad3` int(11) DEFAULT '0',
  `gg1mum4` int(11) DEFAULT '0',
  `gg0dad1` int(11) DEFAULT '0',
  `gg0mum2` int(11) DEFAULT '0',
  `gg0dad3` int(11) DEFAULT '0',
  `gg0mum4` int(11) DEFAULT '0',
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

INSERT INTO `animals` (`id`, `name`, `sex`, `race`, `breeder`, `owner`, `kennel`, `birth`, `now`, `mum`, `dad`, `g1dad`, `g1mum`, `g0dad`, `g0mum`, `gg1dad1`, `gg1mum2`, `gg1dad3`, `gg1mum4`, `gg0dad1`, `gg0mum2`, `gg0dad3`, `gg0mum4`, `hr`, `aa`, `bb`, `tt`, `mm`, `ww`, `ff`, `status`, `puppy`, `litter`, `url`) VALUES
(1, 'Адам', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'hrhr', 'aa', 'BB', 'Tt', 'mm', 'ww', 'Ff', 1, 8, 8, 'pic/hrhr/hr_orange.png'),
(2, 'EVA', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Hrhr', 'AA', 'bb', 'Tt', 'mm', 'Ww', 'ff', 1, 4, 4, 'pic/TT/shokoTT.png'),
(3, 'Трешка', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'hrhr', 'Aa', 'Bb', 'tt', 'mm', 'Ww', 'ff', 1, 1, 1, 'pic/hrhr/hr_white.png'),
(4, '4 Белянка', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 3, 1, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'hrhr', 'Aa', 'Bb', 'tt', 'mm', 'Ww', 'Ff', 1, 0, 0, 'pic/hrhr/hr_white.png'),
(5, 'Чистая и голая', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-05-31', '0', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Hrhr', 'Aa', 'Bb', 'tt', 'mm', 'Ww', 'Ff', 1, 3, 3, 'pic/white.png'),
(6, 'Шестой', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-06-01', '0', 5, 1, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'hrhr', 'Aa', 'Bb', 'tt', 'mm', 'Ww', 'ff', 0, 0, 0, 'pic/hrhr/hr_white.png'),
(7, 'Беленькая семерка', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-06-01', '0', 5, 1, 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'hrhr', 'Aa', 'BB', 'tt', 'mm', 'Ww', 'Ff', 1, 1, 1, 'pic/hrhr/hr_white.png'),
(8, 'восьмец', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-06-06', '0', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Hrhr', 'Aa', 'Bb', 'Tt', 'mm', 'Ww', 'ff', 1, 1, 1, 'pic/TT/blackTT.png'),
(13, 'голый 13', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-07-17', '0', 5, 8, 1, 2, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 'Hrhr', 'Aa', 'BB', 'tt', 'mm', 'WW', 'ff', 1, 2, 2, 'pic/white.png'),
(14, '14 BB WW', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-07-17', '0', 7, 13, 8, 5, 1, 5, 1, 2, 1, 2, 0, 0, 1, 2, 'Hrhr', 'Aa', 'BB', 'tt', 'mm', 'WW', 'Ff', 1, 2, 2, 'pic/white.png'),
(15, '15 кобель\r\n', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-07-17', '0', 14, 13, 8, 5, 13, 7, 1, 2, 1, 2, 8, 5, 1, 5, 'Hrhr', 'aa', 'BB', 'tt', 'mm', 'WW', 'ff', 1, 3, 3, 'pic/white.png'),
(16, '16 друг', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-07-17', '0', 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Hrhr', 'Aa', 'Bb', 'Tt', 'mm', 'Ww', 'Ff', 1, 0, 0, 'pic/TT/blackTT.png'),
(17, '17 сука', 'сука', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-07-17', '0', 14, 1, 0, 0, 13, 7, 0, 0, 0, 0, 8, 5, 1, 5, 'Hrhr', 'aa', 'BB', 'tt', 'mm', 'Ww', 'FF', 1, 3, 3, 'pic/white.png'),
(18, '18 кобелек', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-07-17', '0', 17, 15, 13, 14, 1, 14, 8, 5, 13, 7, 0, 0, 13, 7, 'Hrhr', 'aa', 'BB', 'tt', 'mm', 'WW', 'Ff', 1, 0, 0, 'pic/white.png'),
(19, '19 тый', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-07-17', '0', 17, 15, 13, 14, 1, 14, 8, 5, 13, 7, 0, 0, 13, 7, 'Hrhr', 'aa', 'BB', 'tt', 'mm', 'WW', 'Ff', 1, 0, 0, 'pic/white.png'),
(20, '20 белый кобель', 'кобель', 'КХС', 'nesh', 'nesh', '-=Чарующий соблазн=-', '2017-07-17', '0', 17, 15, 13, 14, 1, 14, 8, 5, 13, 7, 0, 0, 13, 7, 'hrhr', 'aa', 'BB', 'tt', 'mm', 'Ww', 'Ff', 1, 0, 0, 'pic/hrhr/hr_white.png');

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
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `icons` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `name`, `icons`) VALUES
(1, 'coins', '');

-- --------------------------------------------------------

--
-- Структура таблицы `kennels`
--

CREATE TABLE `kennels` (
  `id` int(11) NOT NULL,
  `name_k` varchar(15) NOT NULL,
  `owner_k` varchar(155) NOT NULL,
  `suff` tinyint(1) DEFAULT NULL,
  `name_suff` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `dogs` int(11) NOT NULL,
  `litters` int(11) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `email` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

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
-- Структура таблицы `owner_items`
--

CREATE TABLE `owner_items` (
  `owner_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `count` int(20) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `owner_items`
--

INSERT INTO `owner_items` (`owner_id`, `item_id`, `count`) VALUES
(18, 1, 10000);

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
-- Структура таблицы `stats`
--

CREATE TABLE `stats` (
  `id` int(11) NOT NULL,
  `dog_id` int(11) NOT NULL,
  `speed` float NOT NULL,
  `agility` float NOT NULL,
  `teach` float NOT NULL,
  `jump` float NOT NULL,
  `scent` float NOT NULL,
  `find` float NOT NULL,
  `total` float NOT NULL,
  `mutation` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stats`
--

INSERT INTO `stats` (`id`, `dog_id`, `speed`, `agility`, `teach`, `jump`, `scent`, `find`, `total`, `mutation`) VALUES
(1, 1, 90, 80, 100, 70, 50, 60, 450, 0),
(2, 2, 90, 80, 100, 70, 50, 60, 450, 0),
(3, 3, 90.83, 80.74, 100.92, 70.64, 50.46, 60.55, 454.14, 0.92),
(5, 4, 90.5, 80.44, 100.55, 70.38, 50.28, 60.33, 452.48, 0.09),
(6, 5, 90.23, 80.21, 100.26, 70.18, 50.13, 60.16, 451.17, 0.26),
(7, 6, 89.39, 79.46, 99.33, 69.53, 49.66, 59.6, 446.98, 0.8),
(8, 7, 89.39, 79.46, 99.33, 69.53, 49.66, 59.6, 446.98, 0.8),
(9, 8, 90.27, 80.24, 100.3, 70.21, 50.15, 60.18, 451.35, 0.3),
(11, 13, 90.25, 80.23, 100.28, 70.2, 50.14, 60.17, 451.26, 0.56),
(12, 14, 89.82, 79.85, 99.81, 69.87, 49.9, 59.89, 449.12, 0.71),
(14, 15, 89.32, 79.41, 99.25, 69.48, 49.62, 59.56, 446.63, 0.79),
(15, 16, 90.42, 80.38, 100.47, 70.33, 50.24, 60.28, 452.12, 0.47),
(16, 17, 89.42, 79.49, 99.37, 69.56, 49.68, 59.62, 447.13, 0.54),
(17, 18, 89.63, 79.68, 99.6, 69.72, 49.79, 59.76, 448.18, 0.29),
(18, 19, 89.83, 79.86, 99.83, 69.88, 49.91, 59.9, 449.2, 0.52),
(19, 20, 89.73, 79.77, 99.71, 69.8, 49.85, 59.83, 448.67, 0.4);

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
  `online` tinyint(1) NOT NULL,
  `sign` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `kennel`, `f_time`, `l_time`, `online`, `sign`) VALUES
(18, 'nesh', 'h@h', '$2y$10$W/2Hrjkj4fIdZ0GbNpf24e3da6.03LLqMSMKwuuLgBH7STxeU/yFW', '-=Чарующий соблазн=-', '0000-00-00', '2017-07-17', 1, 212121),
(19, 'fgg', 'gbgdf@sd', '$2y$10$nu88rfUhfGE.6Qn0PkHhzuode6K5YXefx.3sDtFNP4rm7SMKc0cR6', '', '0000-00-00', '0000-00-00', 0, 456777),
(20, 'Neshika', 'stepanovaml@mail.ru', '$2y$10$hARENCiSn/EVfUdYywIF6..KOt746yZpItARlqVCfhtABVjVwa8sy', '', '0000-00-00', '0000-00-00', 0, 460214),
(21, 'admin', 'neshika69@gmail.com', '$2y$10$if1D7PAa12HxCCkNOjAfReD87FAVziC0Ppuwk91wvb4iDkZ0JQP.G', '', '0000-00-00', '2017-07-17', 0, 0),
(22, 'admin2', 'neshika69@gmail.com2', '$2y$10$WTEsW3rI9dvy/XzczoQBBuJ1lBAUaH8u1aYlcfH63SJidJmWx52fi', '', '0000-00-00', '0000-00-00', 0, 0),
(23, 'admin3', 'neshika69@gmail.com23', '$2y$10$3SKYlknPHT1svso2giH0fuS.UKoMMkJSIq51HPgYhM9eBlOpxfmyG', '', '0000-00-00', '0000-00-00', 0, 0),
(24, 'Nika', 'nika@taka', '$2y$10$tZtnHGYrrOTgS67LOdkfUeoT3B5bU3zdwg9qPvl.Ot6TFUm9ovQ/e', 'махрушки', '0000-00-00', '0000-00-00', 0, 0),
(25, 'nuki', 'nuki@q', '$2y$10$LeplyfcZcLDhJqGNyDlAcOcAaaAE8DNCX2WwGZk0ZhoZqUl.AsAa6', 'sgfe', '0000-00-00', '0000-00-00', 0, 0),
(26, 'nui', 'nui@qw', '$2y$10$j4IvDZkt/Vd/EqiR6naq7O5NxeimLNzD5Sp5LunNTkzRok/RuvbEu', 'муськи', '0000-00-00', '0000-00-00', 0, 0),
(27, 'test', 'test@test', '$2y$10$bwwvvZdvzB8c2aFygKNBou3pBEcHukXXY1YtFVXhCmxqT0lyZs9oi', 'test', '2017-06-06', '0000-00-00', 0, 0),
(28, '234', '123@12', '$2y$10$qsfUEZiFP73jtj0SpmGFpePBW/4s6umcFSVV/KbTwUQdec91JpCB2', '125844', '2018-06-20', '0000-00-00', 0, 0),
(29, '123', '123$hfg@dldsjkfnl', '$2y$10$9AkiGbJ9zddxZzxhYMUtjOcDTnVFyhvp4wxAwXe4HptWytlB4.tcK', 'Красивыми розам', '2018-06-20', '0000-00-00', 0, 0),
(30, 'Новый', 'hjhg@jhg', '$2y$10$0j0JOhzAxQtTkqEYPXLvUuh.Y19kv/qc09fMJKHhC41CatRC5AHZu', 'Класса', '2018-06-20', '0000-00-00', 0, 0);

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
-- Индексы таблицы `3`
--
ALTER TABLE `3`
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
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kennels`
--
ALTER TABLE `kennels`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `stats`
--
ALTER TABLE `stats`
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
-- AUTO_INCREMENT для таблицы `3`
--
ALTER TABLE `3`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `aa`
--
ALTER TABLE `aa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT для таблицы `bb`
--
ALTER TABLE `bb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `kennels`
--
ALTER TABLE `kennels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
