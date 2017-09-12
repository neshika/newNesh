-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 12 2017 г., 21:14
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
-- Структура таблицы `ages`
--

CREATE TABLE `ages` (
  `id` int(11) NOT NULL,
  `age` varchar(50) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ages`
--

INSERT INTO `ages` (`id`, `age`, `text`) VALUES
(1, '0 мес', ''),
(2, '2 месяца', ''),
(3, '4 месяца', ''),
(4, '6 месяцев', ''),
(5, '8 месяцев', ''),
(6, '10 месяцев', ''),
(7, '12 месяцев', ''),
(8, '1 год 2 месяца', ''),
(9, '1 год 4 месяцев', ''),
(10, '1 год 6 месяцев', ''),
(11, '1 год 8 месяцев', ''),
(12, '1 год 10 месяцев', '');

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
  `age_id` int(50) NOT NULL DEFAULT '1',
  `birth` varchar(100) NOT NULL DEFAULT '00.00.0000',
  `now` varchar(255) NOT NULL DEFAULT '00.00.0000',
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
(1, 0, 42, 'hrhr', 'ww', 'ff', 'Bb', 'mm', 'tt', 'AA'),
(2, 0, 46, 'hrhr', 'ww', 'ff', 'bb', 'mm', 'tt', 'aa'),
(3, 0, 42, 'hrhr', 'ww', 'ff', 'Bb', 'mm', 'tt', 'AA');

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
(1, 'coins', '/pic/coins_mini.png'),
(2, 'logo', '/Pic/logo_mini.png'),
(3, 'food', '/Pic/food_mini.png'),
(4, 'water', '/Pic/water.png'),
(5, 'badd', '/Pic/badd_mini.png\r\n');

-- --------------------------------------------------------

--
-- Структура таблицы `kennels`
--

CREATE TABLE `kennels` (
  `id` int(11) NOT NULL,
  `name_k` varchar(20) NOT NULL,
  `owner_k` varchar(155) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT '00.00.0000',
  `dogs` int(11) NOT NULL,
  `litters` int(11) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `kennels`
--

INSERT INTO `kennels` (`id`, `name_k`, `owner_k`, `date`, `dogs`, `litters`, `email`) VALUES
(29, 'Чарующий соблазн', 'nesh', '02.09.2017', 2, NULL, 'stepanova@mail.ru'),
(30, 'Тестики', 'test', '03.09.2017', 2, NULL, 'test@test');

-- --------------------------------------------------------

--
-- Структура таблицы `owner_items`
--

CREATE TABLE `owner_items` (
  `id` int(11) NOT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `count` int(20) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `owner_items`
--

INSERT INTO `owner_items` (`id`, `owner_id`, `item_id`, `count`) VALUES
(1, 1, 1, 1380000);

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
(1, 0, 11, 11, 11, 9, 10, 9, 61, 0),
(2, 0, 10, 10, 10, 10, 11, 11, 62, 0);

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
  `f_time` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00.00.0000',
  `l_time` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '00.00.0000',
  `online` tinyint(1) NOT NULL,
  `sign` int(6) NOT NULL,
  `visits` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `email`, `password`, `kennel`, `f_time`, `l_time`, `online`, `sign`, `visits`) VALUES
(1, 'nesh', 'stepanova@mail.ru', '$2y$10$pinvDspcODn0zxHMfyEUoufayxxNfwrQoqHGX2.Ky1I.fB7FnDan.', 'Чарующий соблазн', '03.09.2017', '10.09.2017', 1, 0, 11),
(2, 'test', 'test@test', '$2y$10$Vy0Am7CkZj5SYrzoNR26W.XsiO21HWtuQezqns20CfpcqAqdlm7D.', 'Тестики', '04.09.2017', '10.09.2017', 0, 0, 4);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ages`
--
ALTER TABLE `ages`
  ADD PRIMARY KEY (`id`);

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
-- Индексы таблицы `owner_items`
--
ALTER TABLE `owner_items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `name_race` (`name_race`);

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
-- AUTO_INCREMENT для таблицы `ages`
--
ALTER TABLE `ages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT для таблицы `animals`
--
ALTER TABLE `animals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `coat`
--
ALTER TABLE `coat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `dna`
--
ALTER TABLE `dna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `kennels`
--
ALTER TABLE `kennels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `owner_items`
--
ALTER TABLE `owner_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
