-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 20 2023 г., 02:27
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `books_shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `author`
--

INSERT INTO `author` (`author_id`, `author_name`) VALUES
(1, 'Николай Гоголь'),
(2, 'Михаил Зощенко'),
(3, 'Стивен Кинг'),
(4, 'Федор Достоевский'),
(5, 'Джон Харт'),
(6, 'Николай Леонов'),
(8, 'Валерия Вербинина'),
(9, 'Сергей Александров'),
(10, 'Дуглас Престон'),
(11, 'Иар Эльтеррус'),
(12, 'Ольга Грон'),
(13, 'Александр Беляев'),
(16, 'Дэн Браун'),
(17, 'Без автора (группа авторов)');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `author_id` int(11) NOT NULL,
  `publishing_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `purchase_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `author_id`, `publishing_id`, `genre_id`, `year`, `purchase_price`, `sale_price`, `picture`) VALUES
(1, 'Король лжи', 5, 2, 1, 2002, 120, 300, '/Detectiv/2204671_detail.jpg'),
(2, 'Пропала дочь президента', 6, 1, 1, 2012, 40, 90, '/Detectiv/a9b14c3deb52cd0e28f12be7ad369a3a.jpg'),
(3, 'Московское время', 8, 2, 1, 1990, 50, 80, '/Detectiv/moskovsk_544.jpg'),
(4, 'Цифровая крепость', 16, 5, 1, 2016, 150, 340, '/Detectiv/1459829174138182082.jpg'),
(5, 'Старая дама, или чехарда с ожерельем', 9, 1, 1, 2006, 50, 180, '/Detectiv/staraya-dama-ili-cheharda-s-ozherelem_317288.jpg'),
(6, 'Проект \"КРАКЕН\"', 10, 1, 1, 2016, 70, 320, '/Detectiv/untitled.png'),
(7, 'Последняя битва', 11, 2, 2, 2012, 70, 160, '/Fantasi/36700659.jpg'),
(8, 'Русская и советская фантастика', 17, 2, 2, 2000, 50, 90, '/Fantasi/BC2_1473321701.jpg'),
(9, 'Штурман для космического демона', 12, 2, 2, 2016, 80, 250, '/Fantasi/oblozhka-knigi-gravitaciya-mezhdu-nami-287052.jpg'),
(10, 'Голова профессора Доуэля', 13, 1, 2, 1990, 50, 80, '/Fantasi/508986140_8.jpg'),
(11, 'Избранное. Великие шедевры под одной обложкой', 2, 1, 3, 2015, 100, 280, '/Publising/imagesPVND11XI.jpg'),
(12, 'Необходимые вещи', 3, 2, 3, 1991, 100, 350, '/Publising/9OyXeXhkYYw0bJPpVNhTwQ.jpg'),
(13, 'Мертвые души', 1, 6, 3, 1835, 200, 120, '/Publising/gogol.jpg'),
(14, 'Подросток', 4, 7, 3, 1875, 200, 90, '/Publising/v17r8hvh-r.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `genres_of_books`
--

CREATE TABLE `genres_of_books` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `genres_of_books`
--

INSERT INTO `genres_of_books` (`genre_id`, `genre_name`) VALUES
(1, 'Детектив'),
(2, 'Фантастика'),
(3, 'Роман');

-- --------------------------------------------------------

--
-- Структура таблицы `publishing`
--

CREATE TABLE `publishing` (
  `publishing_id` int(11) NOT NULL,
  `publishing_name` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `manager` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `publishing`
--

INSERT INTO `publishing` (`publishing_id`, `publishing_name`, `address`, `phone`, `manager`) VALUES
(1, 'Эксмо', '', '', ''),
(2, 'АСТ', '', '', ''),
(3, 'Просвещение', '', '', ''),
(4, 'Феникс', '', '', ''),
(5, 'Фламинго', '', '', ''),
(6, 'Питер', '', '', ''),
(7, 'Проспект', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'user'),
(2, 'moderator'),
(3, 'administrator');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `login`, `password`, `role_id`) VALUES
(1, 'user', '1', 1),
(2, 'mod', '1', 2),
(3, 'admin', '1', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `publishing_id` (`publishing_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Индексы таблицы `genres_of_books`
--
ALTER TABLE `genres_of_books`
  ADD PRIMARY KEY (`genre_id`);

--
-- Индексы таблицы `publishing`
--
ALTER TABLE `publishing`
  ADD PRIMARY KEY (`publishing_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `genres_of_books`
--
ALTER TABLE `genres_of_books`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `publishing`
--
ALTER TABLE `publishing`
  MODIFY `publishing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`publishing_id`) REFERENCES `publishing` (`publishing_id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genres_of_books` (`genre_id`),
  ADD CONSTRAINT `books_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
