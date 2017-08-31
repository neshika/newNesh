-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 31 2017 г., 23:36
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
  `birth` varchar(100) NOT NULL DEFAULT '00.00.0000',
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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `puppy` int(11) NOT NULL DEFAULT '0',
  `litter` int(11) NOT NULL DEFAULT '0',
  `url` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `animals`
--

INSERT INTO `animals` (`id`, `name`, `sex`, `race`, `breeder`, `owner`, `kennel`, `birth`, `now`, `mum`, `dad`, `g1dad`, `g1mum`, `g0dad`, `g0mum`, `gg1dad1`, `gg1mum2`, `gg1dad3`, `gg1mum4`, `gg0dad1`, `gg0mum2`, `gg0dad3`, `gg0mum4`, `status`, `puppy`, `litter`, `url`) VALUES
(1, 'Подруга', 'сука', 'КХС', 'nesha', 'nesha', 'Классные', '25.08.2017', '0', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 49);

-- --------------------------------------------------------

--
-- Структура таблицы `coat`
--

CREATE TABLE `coat` (
  `id` int(11) NOT NULL,
  `color` varchar(100) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coat`
--

INSERT INTO `coat` (`id`, `color`, `url`) VALUES
(1, 'hr1w0f0b1t0m0', '/pic/clear/black_01.png'),
(2, 'hr1w0f0b1t0m0', '/pic/clear/black_02.png'),
(3, 'hr1w0f0b1t0m0', '/pic/clear/black_03.png'),
(4, 'hr1w0f0b1t0m0', '/pic/clear/black_04.png'),
(5, 'hr1w0f0b1t0m0', '/pic/clear/black_05.png'),
(6, 'hr1w0f1t0m0', '/pic/clear/orange_01.png'),
(7, 'hr1w0f1t0m0', '/pic/clear/orange_02.png'),
(8, 'hr1w0f1t0m0', '/pic/clear/orange_03.png'),
(9, 'hr1w0f1t0m0', '/pic/clear/orange_04.png'),
(10, 'hr1w0f1t0m0', '/pic/clear/orange_05.png'),
(11, 'hr1w0f0b0t0m0', '/pic/clear/shoko_01.png'),
(12, 'hr1w0f0b0t0m0', '/pic/clear/shoko_02.png'),
(13, 'hr1w0f0b0t0m0', '/pic/clear/shoko_03.png'),
(14, 'hr1w0f0b0t0m0', '/pic/clear/shoko_04.png'),
(15, 'hr1w0f0b0t0m0', '/pic/clear/shoko_05.png'),
(16, 'hr1w0b1t0m0', '/pic/clear/white_bl_01.png'),
(17, 'hr1w0b1t0m0', '/pic/clear/white_bl_02.png'),
(18, 'hr1w0b1t0m0', '/pic/clear/white_bl_03.png'),
(19, 'hr1w0b1t0m0', '/pic/clear/white_bl_04.png'),
(20, 'hr1w0b1t0m0', '/pic/clear/white_bl_05.png'),
(21, 'hr1w0b0t0m0', '/pic/clear/white_sh_01.png'),
(22, 'hr1w0b0t0m0', '/pic/clear/white_sh_02.png'),
(23, 'hr1w0b0t0m0', '/pic/clear/white_sh_03.png'),
(24, 'hr1w0b0t0m0', '/pic/clear/white_sh_04.png'),
(25, 'hr1w0b0t0m0', '/pic/clear/white_sh_05.png'),
(26, 'hr1w0f0b1t0m1', '/pic/MM/blackMM_01.png'),
(27, 'hr1w0f0b1t0m1', '/pic/MM/blackMM_02.png'),
(28, 'hr1w0f0b1t0m1', '/pic/MM/blackMM_03.png'),
(29, 'hr1w0f0b1t0m1', '/pic/MM/blackMM_04.png'),
(30, 'hr1w0f0b1t0m1', '/pic/MM/blackMM_05.png'),
(31, 'hr1w0f1t0m0', 'pic/clear/orange_06.png'),
(32, 'hr1w0f1t0m1', 'pic/MM/orangeMM_01.png'),
(33, 'hr1w0f1t0m1', 'pic/MM/orangeMM_02.png'),
(34, 'hr1w0f1t0m1', 'pic/MM/orangeMM_03.png'),
(35, 'hr1w0f1t0m1', 'pic/MM/orangeMM_04.png'),
(36, 'hr1w0f1t0m1', 'pic/MM/orangeMM_05.png'),
(37, 'hr1w0f0b0t0m1', 'pic/MM/shokoMM_01.png'),
(38, 'hr1w0f0b0t0m1', 'pic/MM/shokoMM_02.png'),
(39, 'hr1w0f0b0t0m1', 'pic/MM/shokoMM_03.png'),
(40, 'hr1w0f0b0t0m1', 'pic/MM/shokoMM_04.png'),
(41, 'hr1w0f0b0t0m1', 'pic/MM/shokoMM_05.png'),
(42, 'hr0w0f0b1m0', 'pic/hrhr/hr_black_01.png'),
(43, 'hr0w0f0b1m1', 'pic/hrhr/hr_blackMM_01.png'),
(44, 'hr0w0f1m0', 'pic/hrhr/hr_orange_01.png'),
(45, 'hr0w0f1m1', 'pic/hrhr/hr_orangeMM_01.png'),
(46, 'hr0w0f0b0m0', 'pic/hrhr/hr_shoko_01.png'),
(47, 'hr0w0f0b0m1', 'pic/hrhr/hr_shokoMM_01.png'),
(48, 'hr0w1b1', 'pic/hrhr/hr_white_bl_01.png'),
(49, 'hr0w1b0', 'pic/hrhr/hr_white_sh_01.png'),
(50, 'vip', 'pic/vip/vip.png'),
(51, 'hr1w0f0b1t1m1', 'pic/TM/blackTM_01.png'),
(52, 'hr1w0f0b0t1m1', 'pic/TM/shokoTM_01.png'),
(53, 'hr1w0f0b0t1m0', 'pic/TT/shokoTT_01.png'),
(54, 'hr1w0f0b1t1m0', 'pic/TT/blackTT_01.png');

-- --------------------------------------------------------

--
-- Структура таблицы `dna`
--

CREATE TABLE `dna` (
  `id` int(11) NOT NULL,
  `dog_id` int(100) NOT NULL,
  `url_id` int(100) NOT NULL,
  `hr` varchar(4) NOT NULL,
  `ww` varchar(3) NOT NULL,
  `ff` varchar(3) NOT NULL,
  `bb` varchar(3) NOT NULL,
  `mm` varchar(3) NOT NULL,
  `tt` varchar(3) NOT NULL,
  `aa` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dna`
--

INSERT INTO `dna` (`id`, `dog_id`, `url_id`, `hr`, `ww`, `ff`, `bb`, `mm`, `tt`, `aa`) VALUES
(1, 0, 52, 'hrhr', 'ww', 'ff', 'bb', 'Mm', 'Tt', 'aa'),
(2, 1, 54, 'hrhr', 'ww', 'ff', 'Bb', 'mm', 'Tt', 'aa'),
(3, 1, 43, 'Hrhr', 'ww', 'ff', 'Bb', 'Mm', 'Tt', 'aa'),
(4, 2, 49, 'Hrhr', 'Ww', 'Ff', 'bb', 'Mm', 'tt', 'aa'),
(5, 1, 48, 'Hrhr', 'Ww', 'Ff', 'Bb', 'Mm', 'tt', 'aa');

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
  `date` date NOT NULL,
  `dogs` int(11) NOT NULL,
  `litters` int(11) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `kennels`
--

INSERT INTO `kennels` (`id`, `name_k`, `owner_k`, `date`, `dogs`, `litters`, `email`) VALUES
(2, '1111', '111', '2030-08-20', 2, NULL, '112@11'),
(3, '123', '12', '2030-08-20', 2, NULL, '12@12'),
(4, '22222', '22222', '2030-08-20', 2, NULL, '222@22'),
(5, '666', '555', '2030-08-20', 2, NULL, '555@666'),
(6, '6565', '444', '2030-08-20', 2, NULL, '444@555');

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
(18, 1, 450003);

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
(1, 0, 95, 90, 91, 100, 99, 92, 92, 0),
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
(19, 20, 89.73, 79.77, 99.71, 69.8, 49.85, 59.83, 448.67, 0.4),
(20, 21, 90.11, 80.1, 100.13, 70.09, 50.06, 60.08, 450.56, 0.56),
(21, 22, 90.74, 80.66, 100.82, 70.58, 50.41, 60.5, 453.69, 0.97),
(22, 23, 90.12, 80.11, 100.13, 70.09, 50.07, 60.08, 450.61, 0.1),
(23, 24, 89.81, 79.83, 99.78, 69.85, 49.89, 59.87, 449.04, 0.28),
(24, 25, 89.2, 79.29, 99.12, 69.38, 49.56, 59.47, 446.01, 0.57),
(25, 26, 90, 94, 100, 90, 91, 94, 91, 0),
(26, 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
  `sign` int(6) NOT NULL,
  `visits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `kennel`, `f_time`, `l_time`, `online`, `sign`, `visits`) VALUES
(18, 'nesh', 'h@h', '$2y$10$W/2Hrjkj4fIdZ0GbNpf24e3da6.03LLqMSMKwuuLgBH7STxeU/yFW', '-=Чарующий соблазн=-', '0000-00-00', '2021-08-20', 0, 212121, 541),
(19, 'fgg', 'gbgdf@sd', '$2y$10$nu88rfUhfGE.6Qn0PkHhzuode6K5YXefx.3sDtFNP4rm7SMKc0cR6', '', '0000-00-00', '0000-00-00', 0, 456777, 0),
(20, 'Neshika', 'stepanovaml@mail.ru', '$2y$10$hARENCiSn/EVfUdYywIF6..KOt746yZpItARlqVCfhtABVjVwa8sy', '', '0000-00-00', '0000-00-00', 0, 460214, 0),
(21, 'admin', 'neshika69@gmail.com', '$2y$10$if1D7PAa12HxCCkNOjAfReD87FAVziC0Ppuwk91wvb4iDkZ0JQP.G', '', '0000-00-00', '2017-07-17', 0, 0, 0),
(22, 'admin2', 'neshika69@gmail.com2', '$2y$10$WTEsW3rI9dvy/XzczoQBBuJ1lBAUaH8u1aYlcfH63SJidJmWx52fi', '', '0000-00-00', '0000-00-00', 0, 0, 0),
(23, 'admin3', 'neshika69@gmail.com23', '$2y$10$3SKYlknPHT1svso2giH0fuS.UKoMMkJSIq51HPgYhM9eBlOpxfmyG', '', '0000-00-00', '0000-00-00', 0, 0, 0),
(24, 'Nika', 'nika@taka', '$2y$10$tZtnHGYrrOTgS67LOdkfUeoT3B5bU3zdwg9qPvl.Ot6TFUm9ovQ/e', 'махрушки', '0000-00-00', '0000-00-00', 0, 0, 0),
(25, 'nuki', 'nuki@q', '$2y$10$LeplyfcZcLDhJqGNyDlAcOcAaaAE8DNCX2WwGZk0ZhoZqUl.AsAa6', 'sgfe', '0000-00-00', '0000-00-00', 0, 0, 0),
(26, 'nui', 'nui@qw', '$2y$10$j4IvDZkt/Vd/EqiR6naq7O5NxeimLNzD5Sp5LunNTkzRok/RuvbEu', 'муськи', '0000-00-00', '0000-00-00', 0, 0, 0),
(27, 'test', 'test@test', '$2y$10$bwwvvZdvzB8c2aFygKNBou3pBEcHukXXY1YtFVXhCmxqT0lyZs9oi', 'test', '2017-06-06', '0000-00-00', 0, 0, 0),
(28, '234', '123@12', '$2y$10$qsfUEZiFP73jtj0SpmGFpePBW/4s6umcFSVV/KbTwUQdec91JpCB2', '125844', '2018-06-20', '0000-00-00', 0, 0, 0),
(29, '123', '123$hfg@dldsjkfnl', '$2y$10$9AkiGbJ9zddxZzxhYMUtjOcDTnVFyhvp4wxAwXe4HptWytlB4.tcK', 'Красивыми розам', '2018-06-20', '0000-00-00', 0, 0, 0),
(30, 'Новый', 'hjhg@jhg', '$2y$10$0j0JOhzAxQtTkqEYPXLvUuh.Y19kv/qc09fMJKHhC41CatRC5AHZu', 'Класса', '2018-06-20', '0000-00-00', 0, 0, 0),
(31, 'nesha', 'st@st', '$2y$10$rBWsPpL9RGvmgJNwwEIa6.jQICpFJPaHXGAVsPkxSf6fcIbmzqAxq', 'Классные', '2023-08-20', '2031-08-20', 0, 0, 14),
(32, 'temp', 'temp@temp', '$2y$10$v6/ylytmGMhaNl1c1EL3g.RQXPFxLpcAaG3cYkUbHuyuo6tvB.Tve', 'Temp', '2030-08-20', '0000-00-00', 0, 0, 0),
(33, 'temp2', 'temp2@temp', '$2y$10$sYsf6AmDVboZlZJKf663.eMfgPfLjoVB3yJOG6xU73uwUfCIZg0B6', 'Tempik', '2030-08-20', '0000-00-00', 0, 0, 0),
(37, '111', '112@11', '$2y$10$inehlwDlGzrfWxHZVVVU9OFyULBIWy45wG1gVTjYyn5WkGv5KlkCK', '1111', '2030-08-20', '0000-00-00', 0, 0, 0),
(38, '12', '12@12', '$2y$10$v5xXNpx2xR3uqQ5gtAetDOWZrvvoajyWGW5kneUWPTyAd/jrO9MIK', '123', '2030-08-20', '0000-00-00', 0, 0, 0),
(39, '22222', '222@22', '$2y$10$koXWdgE28w.eqkW3E4Wy9uQNLlD3p6IeLsrMkJyvTEhbccRv54x6y', '22222', '2030-08-20', '0000-00-00', 0, 0, 0),
(40, '555', '555@666', '$2y$10$LzQUMEx8FJCh6dxxTcBry.CSw6h5fNATn7Ht9qRN6lMbxJHfztRrO', '666', '2030-08-20', '0000-00-00', 0, 0, 0),
(41, '444', '444@555', '$2y$10$g3XDym8Fram35wz94bgvquLI87bFxEgimyEXF1esDhZO61B/PoPUC', '6565', '2030-08-20', '0000-00-00', 0, 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `animals`
--
ALTER TABLE `animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sex` (`sex`),
  ADD KEY `race` (`race`),
  ADD KEY `breeder` (`breeder`),
  ADD KEY `owner` (`owner`),
  ADD KEY `mum` (`mum`),
  ADD KEY `dad` (`dad`);

--
-- Индексы таблицы `coat`
--
ALTER TABLE `coat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dna`
--
ALTER TABLE `dna`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `coat`
--
ALTER TABLE `coat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `dna`
--
ALTER TABLE `dna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `kennels`
--
ALTER TABLE `kennels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
