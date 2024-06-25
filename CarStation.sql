-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 25 2024 г., 10:32
-- Версия сервера: 8.0.30
-- Версия PHP: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `CarStation`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `name` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_mysql500_ci DEFAULT NULL,
  `price` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_mysql500_ci DEFAULT NULL,
  `imagepath` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_mysql500_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_mysql500_ci;

--
-- Дамп данных таблицы `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `imagepath`, `quantity`) VALUES
(2, 'Lada Vesta', '15', 'img/ladavesta.jpg', 60);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int NOT NULL,
  `price` int DEFAULT NULL,
  `name` varchar(205) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_mysql500_ci DEFAULT NULL,
  `status` varchar(205) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_mysql500_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `price`, `name`, `status`) VALUES
(16, 1500, 'Lada Vesta', 'Выполнен'),
(17, 2000, 'Kia K5', 'Выполнен'),
(18, 4000, 'Hyundai Solaris', 'Выполнен'),
(19, 5000, 'Kia Spectra', 'Выполнен'),
(20, 4200, 'Cherry Tiggo 4 Pro', 'Выполнен'),
(21, 3500, 'Mercedes W212', 'Создан');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `imagepath` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `imagepath`) VALUES
(1, 'Kia K5', 20, 'img/kiak5.jpg'),
(2, 'Lada Vesta', 15, 'img/ladavesta.jpg'),
(6, 'Hyundai Solaris', 30, 'img/solaris.jpg'),
(7, 'Mercedes W212', 35, 'img/w212.jpg'),
(8, 'Kia Spectra', 18, 'img/spectra.jpg'),
(9, 'Lada Xray', 19, 'img/ladaxray.jpg'),
(10, 'Cherry Tiggo 4 Pro', 25, 'img/tiggo4pro.jpg'),
(11, 'Kia Rio', 12, 'img/kiario.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
