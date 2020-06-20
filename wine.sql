-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 20 2020 г., 18:19
-- Версия сервера: 5.7.25
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
-- База данных: `wine`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 'Category 1', 'category-1', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(2, NULL, 1, 'Category 2', 'category-2', '2020-06-17 09:43:45', '2020-06-17 09:43:45');

-- --------------------------------------------------------

--
-- Структура таблицы `colors`
--

CREATE TABLE `colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `colors`
--

INSERT INTO `colors` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Красное', 'colors\\June2020\\cSJtR3KKTyqF6sEFGIOx.png', '2020-06-18 08:35:03', '2020-06-18 10:05:46');

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(2, 1, 'name', 'text', 'Имя', 1, 1, 1, 1, 1, 1, NULL, 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, NULL, 3),
(4, 1, 'password', 'password', 'Пароль', 1, 0, 0, 1, 1, 0, NULL, 4),
(5, 1, 'remember_token', 'text', 'Токен восстановления', 0, 0, 0, 0, 0, 0, NULL, 5),
(6, 1, 'created_at', 'timestamp', 'Дата создания', 0, 1, 1, 0, 0, 0, NULL, 6),
(7, 1, 'updated_at', 'timestamp', 'Дата обновления', 0, 0, 0, 0, 0, 0, NULL, 7),
(8, 1, 'avatar', 'image', 'Аватар', 0, 1, 1, 1, 1, 1, NULL, 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Роль', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, NULL, 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Имя', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Дата создания', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Дата обновления', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Имя', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Дата создания', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Дата обновления', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Отображаемое имя', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Роль', 1, 1, 1, 1, 1, 1, NULL, 9),
(22, 4, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(23, 4, 'parent_id', 'select_dropdown', 'Родитель', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(24, 4, 'order', 'text', 'Сортировка', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(25, 4, 'name', 'text', 'Имя', 1, 1, 1, 1, 1, 1, NULL, 4),
(26, 4, 'slug', 'text', 'Slug (ЧПУ)', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(27, 4, 'created_at', 'timestamp', 'Дата создания', 0, 0, 1, 0, 0, 0, NULL, 6),
(28, 4, 'updated_at', 'timestamp', 'Дата обновления', 0, 0, 0, 0, 0, 0, NULL, 7),
(29, 5, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(30, 5, 'author_id', 'text', 'Автор', 1, 0, 1, 1, 0, 1, NULL, 2),
(31, 5, 'category_id', 'text', 'Категория', 1, 0, 1, 1, 1, 0, NULL, 3),
(32, 5, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, NULL, 4),
(33, 5, 'excerpt', 'text_area', 'Отрывок', 1, 0, 1, 1, 1, 1, NULL, 5),
(34, 5, 'body', 'rich_text_box', 'Содержимое', 1, 0, 1, 1, 1, 1, NULL, 6),
(35, 5, 'image', 'image', 'Изображение Статьи', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(36, 5, 'slug', 'text', 'Slug (ЧПУ)', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:posts,slug\"}}', 8),
(37, 5, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 9),
(38, 5, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 10),
(39, 5, 'status', 'select_dropdown', 'Статус', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(40, 5, 'created_at', 'timestamp', 'Дата создания', 0, 1, 1, 0, 0, 0, NULL, 12),
(41, 5, 'updated_at', 'timestamp', 'Дата обновления', 0, 0, 0, 0, 0, 0, NULL, 13),
(42, 5, 'seo_title', 'text', 'SEO Название', 0, 1, 1, 1, 1, 1, NULL, 14),
(43, 5, 'featured', 'checkbox', 'Рекомендовано', 1, 1, 1, 1, 1, 1, NULL, 15),
(44, 6, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(45, 6, 'author_id', 'text', 'Автор', 1, 0, 0, 0, 0, 0, NULL, 2),
(46, 6, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, NULL, 3),
(47, 6, 'excerpt', 'text_area', 'Отрывок', 1, 0, 1, 1, 1, 1, NULL, 4),
(48, 6, 'body', 'rich_text_box', 'Содержимое', 1, 0, 1, 1, 1, 1, NULL, 5),
(49, 6, 'slug', 'text', 'Slug (ЧПУ)', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"},\"validation\":{\"rule\":\"unique:pages,slug\"}}', 6),
(50, 6, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, NULL, 7),
(51, 6, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, NULL, 8),
(52, 6, 'status', 'select_dropdown', 'Статус', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(53, 6, 'created_at', 'timestamp', 'Дата создания', 1, 1, 1, 0, 0, 0, NULL, 10),
(54, 6, 'updated_at', 'timestamp', 'Дата обновления', 1, 0, 0, 0, 0, 0, NULL, 11),
(55, 6, 'image', 'image', 'Изображение Страницы', 0, 1, 1, 1, 1, 1, NULL, 12),
(56, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(57, 9, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(58, 9, 'seo_title', 'text', 'Seo Title', 0, 0, 1, 1, 1, 1, '{}', 3),
(59, 9, 'description', 'text_area', 'Описание', 0, 0, 1, 1, 1, 1, '{}', 4),
(60, 9, 'production_feature', 'text_area', 'Особенности производства', 0, 0, 1, 1, 1, 1, '{}', 5),
(61, 9, 'combination', 'text_area', 'Гастрономическое сочетание', 0, 0, 1, 1, 1, 1, '{}', 6),
(62, 9, 'feature', 'text_area', 'Дегустационные характеристики', 0, 0, 1, 1, 1, 1, '{}', 7),
(63, 9, 'innings', 'text_area', 'Подача', 0, 0, 1, 1, 1, 1, '{}', 8),
(64, 9, 'model', 'text', 'Модель', 1, 1, 1, 1, 1, 1, '{}', 9),
(65, 9, 'winery_id', 'text', 'Winery Id', 1, 0, 1, 1, 1, 1, '{}', 10),
(67, 9, 'edition', 'text', 'Тираж', 1, 0, 1, 1, 1, 1, '{}', 12),
(69, 9, 'region_id', 'text', 'Region Id', 1, 0, 1, 1, 1, 1, '{}', 14),
(70, 9, 'color_id', 'text', 'Color Id', 1, 0, 1, 1, 1, 1, '{}', 15),
(71, 9, 'fortress', 'number', 'Крепость', 1, 0, 1, 1, 1, 1, '{}', 16),
(72, 9, 'year', 'number', 'Год урожая', 1, 0, 1, 1, 1, 1, '{}', 17),
(73, 9, 'volume', 'number', 'Объем', 1, 0, 1, 1, 1, 1, '{}', 18),
(74, 9, 'count', 'number', 'Количество', 1, 0, 1, 1, 1, 1, '{}', 19),
(75, 9, 'image', 'image', 'Картинка', 0, 0, 1, 1, 1, 1, '{}', 20),
(76, 9, 'slug', 'text', 'SEO URL', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:products,slug\"}}', 21),
(77, 9, 'meta_description', 'text', 'Meta Description', 1, 0, 1, 1, 1, 1, '{}', 22),
(78, 9, 'meta_keywords', 'text', 'Meta Keywords', 1, 0, 1, 1, 1, 1, '{}', 23),
(79, 9, 'status', 'select_dropdown', 'Статус', 1, 1, 1, 1, 1, 1, '{\"default\":\"ACTIVE\",\"options\":{\"ACTIVE\":\"\\u0430\\u043a\\u0442\\u0438\\u0432\\u043d\\u044b\\u0439\",\"INACTIVE\":\"\\u043d\\u0435\\u0430\\u043a\\u0442\\u0438\\u0432\\u043d\\u044b\\u0439\"}}', 24),
(80, 9, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 1, '{}', 25),
(81, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 26),
(82, 9, 'featured', 'checkbox', 'Рекомендованный ', 1, 0, 1, 1, 1, 1, '{}', 27),
(83, 10, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(84, 10, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(85, 10, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 3),
(86, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(87, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(88, 11, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(89, 11, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 3),
(90, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(91, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(92, 12, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(93, 12, 'image', 'image', 'Картинка', 1, 1, 1, 1, 1, 1, '{}', 3),
(94, 12, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 4),
(95, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(96, 9, 'product_belongsto_color_relationship', 'relationship', 'Цвет', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Color\",\"table\":\"colors\",\"type\":\"belongsTo\",\"column\":\"color_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 28),
(97, 9, 'product_belongsto_country_relationship', 'relationship', 'Производитель', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Manufacturer\",\"table\":\"manufacturers\",\"type\":\"belongsTo\",\"column\":\"manufacturer_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 29),
(98, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(99, 13, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(100, 13, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 3),
(101, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(102, 9, 'price', 'number', 'Цена', 1, 1, 1, 1, 1, 1, '{}', 3),
(103, 9, 'manufacturer_id', 'text', 'Manufacturer Id', 1, 0, 1, 1, 1, 1, '{}', 14),
(104, 9, 'product_belongsto_region_relationship', 'relationship', 'Регион', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Region\",\"table\":\"regions\",\"type\":\"belongsTo\",\"column\":\"region_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 30),
(105, 15, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(106, 15, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(107, 15, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 3),
(108, 15, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(109, 9, 'grape_sort_id', 'text', 'Grape Sort Id', 1, 1, 1, 1, 1, 1, '{}', 12),
(110, 9, 'product_belongsto_grape_sort_relationship', 'relationship', 'Сорт винограда', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\GrapeSort\",\"table\":\"grape_sorts\",\"type\":\"belongsTo\",\"column\":\"grape_sort_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 31),
(112, 18, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(113, 18, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(114, 18, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 3),
(115, 18, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(116, 9, 'sugar_id', 'text', 'Sugar Id', 1, 1, 1, 1, 1, 1, '{}', 20),
(117, 9, 'product_belongsto_sugar_relationship', 'relationship', 'Содержание сахара', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Sugar\",\"table\":\"sugars\",\"type\":\"belongsTo\",\"column\":\"sugar_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 32),
(118, 19, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(119, 19, 'full_name', 'text', 'ФИО', 1, 1, 1, 1, 1, 1, '{}', 2),
(120, 19, 'description', 'text_area', 'Описание', 1, 0, 1, 1, 1, 1, '{}', 3),
(121, 19, 'region_id', 'text', 'Region Id', 1, 0, 1, 1, 1, 1, '{}', 4),
(122, 19, 'seo_title', 'text', 'Seo Title', 0, 0, 1, 1, 1, 1, '{}', 5),
(123, 19, 'meta_description', 'text_area', 'Meta Description', 0, 0, 1, 1, 1, 1, '{}', 6),
(124, 19, 'meta_keywords', 'text_area', 'Meta Keywords', 0, 0, 1, 1, 1, 1, '{}', 7),
(125, 19, 'slug', 'text', 'Slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"full_name\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:winemakers,slug\"}}', 8),
(126, 19, 'image', 'image', 'Картинка', 1, 1, 1, 1, 1, 1, '{}', 9),
(127, 19, 'status', 'select_dropdown', 'Статус', 1, 1, 1, 1, 1, 1, '{\"default\":\"ACTIVE\",\"options\":{\"ACTIVE\":\"\\u0430\\u043a\\u0442\\u0438\\u0432\\u043d\\u044b\\u0439\",\"INACTIVE\":\"\\u043d\\u0435\\u0430\\u043a\\u0442\\u0438\\u0432\\u043d\\u044b\\u0439\"}}', 10),
(128, 19, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 11),
(129, 19, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(131, 19, 'winemaker_belongsto_region_relationship', 'relationship', 'Регион', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Region\",\"table\":\"regions\",\"type\":\"belongsTo\",\"column\":\"region_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 13),
(132, 19, 'winery_id', 'text', 'Winery Id', 1, 1, 1, 1, 1, 1, '{}', 5),
(133, 19, 'winemaker_belongstomany_wine_relationship', 'relationship', 'Вины', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Wine\",\"table\":\"wines\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"winemaker_wine\",\"pivot\":\"1\",\"taggable\":\"on\"}', 14),
(134, 20, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(135, 20, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(136, 20, 'signature', 'text', 'Сигнатура', 1, 0, 1, 1, 1, 1, '{}', 3),
(137, 20, 'description', 'text_area', 'Описание', 1, 0, 1, 1, 1, 1, '{}', 4),
(138, 20, 'header_image', 'image', 'Основное фото в хедере', 1, 0, 1, 1, 1, 1, '{}', 5),
(139, 20, 'logo_image', 'image', 'Логотип', 1, 1, 1, 1, 1, 1, '{}', 6),
(140, 20, 'catalog_image', 'image', 'Изображение для каталога', 1, 0, 1, 1, 1, 1, '{}', 7),
(141, 20, 'region_id', 'text', 'Регион', 1, 0, 1, 1, 1, 1, '{}', 8),
(142, 20, 'seo_title', 'text', 'Seo Title', 0, 0, 1, 1, 1, 1, '{}', 9),
(143, 20, 'type_id', 'select_dropdown', 'Тип винодельни', 1, 1, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"\\u0412\\u0438\\u043d\\u043e\\u0434\\u0435\\u043b\\u044c\\u043d\\u044f\",\"2\":\"\\u041c\\u0438\\u043a\\u0440\\u043e\\u0432\\u0438\\u043d\\u043e\\u0434\\u0435\\u043b\\u044c\\u043d\\u044f\"}}', 10),
(144, 20, 'layout_id', 'number', 'Номер макета', 1, 1, 1, 1, 1, 1, '{}', 11),
(145, 20, 'subscribe_status', 'select_dropdown', 'Выводить винодельню в разделе \"Подписка\"', 1, 0, 1, 1, 1, 1, '{\"default\":\"1\",\"options\":{\"1\":\"\\u0414\\u0430\",\"2\":\"\\u041d\\u0435\\u0442\"}}', 12),
(146, 20, 'slug', 'text', 'SEO URL', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:wineries,slug\"}}', 13),
(147, 20, 'status', 'select_dropdown', 'Статус', 1, 1, 1, 1, 1, 1, '{\"default\":\"ACTIVE\",\"options\":{\"ACTIVE\":\"\\u0430\\u043a\\u0442\\u0438\\u0432\\u043d\\u044b\\u0439\",\"INACTIVE\":\"\\u043d\\u0435\\u0430\\u043a\\u0442\\u0438\\u0432\\u043d\\u044b\\u0439\"}}', 14),
(148, 20, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 17),
(149, 20, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 18),
(150, 20, 'winery_belongsto_region_relationship', 'relationship', 'Регион', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Region\",\"table\":\"regions\",\"type\":\"belongsTo\",\"column\":\"region_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 19),
(151, 20, 'coordinate_lon', 'number', 'Координаты долготы', 1, 1, 1, 1, 1, 1, '{}', 15),
(152, 20, 'coordinate_lat', 'number', 'Координаты широты', 1, 1, 1, 1, 1, 1, '{}', 16),
(153, 9, 'wine_belongsto_winery_relationship', 'relationship', 'Винедельня', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Winery\",\"table\":\"wineries\",\"type\":\"belongsTo\",\"column\":\"winery_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 33),
(154, 19, 'winemaker_belongsto_winery_relationship', 'relationship', 'Винодельня', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Winery\",\"table\":\"wineries\",\"type\":\"belongsTo\",\"column\":\"winery_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 15),
(155, 21, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(156, 21, 'title', 'text', 'Название', 1, 1, 1, 1, 1, 1, '{}', 2),
(157, 21, 'description', 'text_area', 'Описание', 0, 0, 1, 1, 1, 1, '{}', 3),
(158, 21, 'model', 'text', 'Модель', 1, 0, 1, 1, 1, 1, '{}', 4),
(159, 21, 'price', 'number', 'Цена', 1, 1, 1, 1, 1, 1, '{}', 5),
(160, 21, 'year', 'number', 'Год', 1, 0, 1, 1, 1, 1, '{}', 6),
(161, 21, 'image', 'image', 'Картинка', 1, 0, 1, 1, 1, 1, '{}', 7),
(163, 21, 'count', 'number', 'Количество', 1, 1, 1, 1, 1, 1, '{}', 9),
(164, 21, 'prev_set_id', 'text', 'Предыдущий сет', 0, 0, 1, 1, 1, 1, '{}', 10),
(165, 21, 'next_set_id', 'text', 'Следующий сет', 0, 0, 1, 1, 1, 1, '{}', 11),
(166, 21, 'next_category_set_id', 'text', 'Следующий сет (для категории \"Сеты\")', 0, 0, 1, 1, 1, 1, '{}', 12),
(167, 21, 'prev_category_set_id', 'text', 'Предыдущий сет (для категории \"Сеты\")', 0, 0, 1, 1, 1, 1, '{}', 13),
(168, 21, 'meta_description', 'text_area', 'Meta Description', 1, 0, 1, 1, 1, 1, '{}', 14),
(169, 21, 'meta_keywords', 'text_area', 'Meta Keywords', 1, 0, 1, 1, 1, 1, '{}', 15),
(170, 21, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 1, '{}', 17),
(171, 21, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 18),
(172, 21, 'set_belongsto_wine_relationship', 'relationship', 'Предыдущий сет', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Set\",\"table\":\"sets\",\"type\":\"belongsTo\",\"column\":\"prev_set_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 19),
(173, 21, 'set_belongsto_set_relationship', 'relationship', 'Следующий сет', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Set\",\"table\":\"sets\",\"type\":\"belongsTo\",\"column\":\"next_set_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 20),
(174, 21, 'slug', 'text', 'SEO Url', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true},\"validation\":{\"rule\":\"unique:sets,slug\"}}', 8),
(175, 21, 'set_hasone_set_relationship', 'relationship', 'Следующий сет (для категории \"Сеты\")', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Set\",\"table\":\"sets\",\"type\":\"belongsTo\",\"column\":\"next_category_set_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 21),
(176, 21, 'set_hasone_set_relationship_1', 'relationship', 'Предыдущий сет (для категории \"Сеты\")', 0, 0, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Set\",\"table\":\"sets\",\"type\":\"belongsTo\",\"column\":\"prev_category_set_id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"categories\",\"pivot\":\"0\",\"taggable\":\"0\"}', 22),
(178, 21, 'status', 'select_dropdown', 'Статус', 1, 1, 1, 1, 1, 1, '{\"default\":\"ACTIVE\",\"options\":{\"ACTIVE\":\"\\u0430\\u043a\\u0442\\u0438\\u0432\\u043d\\u044b\\u0439\",\"INACTIVE\":\"\\u043d\\u0435\\u0430\\u043a\\u0442\\u0438\\u0432\\u043d\\u044b\\u0439\"}}', 16),
(179, 21, 'set_belongstomany_wine_relationship', 'relationship', 'Вина для сета', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Models\\\\Wine\",\"table\":\"wines\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"title\",\"pivot_table\":\"set_wine\",\"pivot\":\"1\",\"taggable\":\"on\"}', 23);

-- --------------------------------------------------------

--
-- Структура таблицы `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'Пользователь', 'Пользователи', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', '', 1, 0, NULL, '2020-06-17 09:43:44', '2020-06-17 09:43:44'),
(2, 'menus', 'menus', 'Меню', 'Меню', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2020-06-17 09:43:44', '2020-06-17 09:43:44'),
(3, 'roles', 'roles', 'Роль', 'Роли', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController', '', 1, 0, NULL, '2020-06-17 09:43:44', '2020-06-17 09:43:44'),
(4, 'categories', 'categories', 'Категория', 'Категории', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(5, 'posts', 'posts', 'Статья', 'Статьи', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(6, 'pages', 'pages', 'Страница', 'Страницы', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(9, 'wines', 'wines', 'Вино', 'Вина', NULL, 'App\\Models\\Wine', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-06-17 09:47:26', '2020-06-20 04:46:33'),
(10, 'regions', 'regions', 'Регион', 'Регионы', NULL, 'App\\Models\\Region', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-06-18 08:29:12', '2020-06-18 08:29:12'),
(11, 'countries', 'countries', 'Страна', 'Страны', NULL, 'App\\Models\\Country', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-06-18 08:30:07', '2020-06-18 08:30:07'),
(12, 'colors', 'colors', 'Цвет', 'Цвета', NULL, 'App\\Models\\Color', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-06-18 08:32:13', '2020-06-18 08:35:21'),
(13, 'manufacturers', 'manufacturers', 'Производитель', 'Производители', NULL, 'App\\Models\\Manufacturer', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-06-18 08:53:55', '2020-06-18 08:53:55'),
(15, 'grape_sorts', 'grape-sorts', 'Сорт винограда', 'Сорты винограда', NULL, 'App\\Models\\GrapeSort', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2020-06-18 09:06:22', '2020-06-18 09:06:22'),
(18, 'sugars', 'sugars', 'Содержание сахара', 'Содержание сахара', NULL, 'App\\Models\\Sugar', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-06-18 10:11:01', '2020-06-18 10:13:09'),
(19, 'winemakers', 'winemakers', 'Винодел', 'Виноделы', NULL, 'App\\Models\\Winemaker', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-06-18 11:13:29', '2020-06-20 04:47:43'),
(20, 'wineries', 'wineries', 'Винодельня', 'Винодельни', NULL, 'App\\Models\\Winery', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-06-20 04:23:20', '2020-06-20 04:39:52'),
(21, 'sets', 'sets', 'Сет', 'Сеты', NULL, 'App\\Models\\Set', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2020-06-20 06:14:12', '2020-06-20 07:42:08');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `grape_sorts`
--

CREATE TABLE `grape_sorts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `grape_sorts`
--

INSERT INTO `grape_sorts` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Каберне Совиньон', '2020-06-18 09:06:43', '2020-06-18 09:06:43');

-- --------------------------------------------------------

--
-- Структура таблицы `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Фанагория', '2020-06-18 08:59:02', '2020-06-18 08:59:02');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2020-06-17 09:43:44', '2020-06-17 09:43:44');

-- --------------------------------------------------------

--
-- Структура таблицы `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Панель управления', '', '_self', 'voyager-boat', NULL, NULL, 1, '2020-06-17 09:43:44', '2020-06-17 09:43:44', 'voyager.dashboard', NULL),
(2, 1, 'Медиа', '', '_self', 'voyager-images', NULL, NULL, 5, '2020-06-17 09:43:44', '2020-06-20 04:17:43', 'voyager.media.index', NULL),
(3, 1, 'Пользователи', '', '_self', 'voyager-person', NULL, NULL, 3, '2020-06-17 09:43:45', '2020-06-17 09:43:45', 'voyager.users.index', NULL),
(4, 1, 'Роли', '', '_self', 'voyager-lock', NULL, NULL, 2, '2020-06-17 09:43:45', '2020-06-17 09:43:45', 'voyager.roles.index', NULL),
(5, 1, 'Инструменты', '', '_self', 'voyager-tools', NULL, NULL, 9, '2020-06-17 09:43:45', '2020-06-20 06:26:59', NULL, NULL),
(6, 1, 'Конструктор Меню', '', '_self', 'voyager-list', NULL, 5, 1, '2020-06-17 09:43:45', '2020-06-18 12:37:38', 'voyager.menus.index', NULL),
(7, 1, 'База данных', '', '_self', 'voyager-data', NULL, 5, 2, '2020-06-17 09:43:45', '2020-06-18 12:37:38', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2020-06-17 09:43:45', '2020-06-18 12:37:38', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2020-06-17 09:43:45', '2020-06-18 12:37:38', 'voyager.bread.index', NULL),
(10, 1, 'Настройки', '', '_self', 'voyager-settings', NULL, NULL, 11, '2020-06-17 09:43:45', '2020-06-20 06:26:59', 'voyager.settings.index', NULL),
(11, 1, 'Категории', '', '_self', 'voyager-categories', NULL, NULL, 8, '2020-06-17 09:43:45', '2020-06-20 06:26:59', 'voyager.categories.index', NULL),
(12, 1, 'Статьи', '', '_self', 'voyager-news', NULL, NULL, 6, '2020-06-17 09:43:45', '2020-06-20 04:17:43', 'voyager.posts.index', NULL),
(13, 1, 'Страницы', '', '_self', 'voyager-file-text', NULL, NULL, 7, '2020-06-17 09:43:45', '2020-06-20 06:26:59', 'voyager.pages.index', NULL),
(14, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, NULL, 10, '2020-06-17 09:43:45', '2020-06-20 06:26:59', 'voyager.hooks', NULL),
(15, 1, 'Вина', '', '_self', NULL, '#000000', 23, 1, '2020-06-17 09:47:26', '2020-06-18 12:38:02', 'voyager.wines.index', 'null'),
(16, 1, 'Регионы', '', '_self', NULL, NULL, 23, 2, '2020-06-18 08:29:12', '2020-06-18 12:38:02', 'voyager.regions.index', NULL),
(17, 1, 'Страны', '', '_self', NULL, NULL, 23, 4, '2020-06-18 08:30:07', '2020-06-18 12:38:02', 'voyager.countries.index', NULL),
(18, 1, 'Цвета', '', '_self', NULL, NULL, 23, 9, '2020-06-18 08:32:13', '2020-06-20 04:30:13', 'voyager.colors.index', NULL),
(19, 1, 'Производители', '', '_self', NULL, NULL, 23, 7, '2020-06-18 08:53:56', '2020-06-18 12:38:02', 'voyager.manufacturers.index', NULL),
(20, 1, 'Сорты винограда', '', '_self', NULL, NULL, 23, 6, '2020-06-18 09:06:22', '2020-06-18 12:38:02', 'voyager.grape-sorts.index', NULL),
(21, 1, 'Содержание сахара', '', '_self', NULL, NULL, 23, 5, '2020-06-18 10:11:01', '2020-06-18 12:38:02', 'voyager.sugars.index', NULL),
(22, 1, 'Виноделы', '', '_self', NULL, '#000000', 23, 3, '2020-06-18 11:13:29', '2020-06-18 12:38:26', 'voyager.winemakers.index', 'null'),
(23, 1, 'Каталог', '', '_self', 'voyager-folder', '#000000', NULL, 4, '2020-06-18 12:37:32', '2020-06-20 04:17:43', NULL, ''),
(24, 1, 'Винодельни', '', '_self', NULL, NULL, 23, 8, '2020-06-20 04:23:20', '2020-06-20 04:30:13', 'voyager.wineries.index', NULL),
(25, 1, 'Сеты', '', '_self', NULL, NULL, 23, 10, '2020-06-20 06:14:12', '2020-06-20 06:26:59', 'voyager.sets.index', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2016_01_01_000000_add_voyager_user_fields', 1),
(3, '2016_01_01_000000_create_data_types_table', 1),
(4, '2016_01_01_000000_create_pages_table', 1),
(5, '2016_01_01_000000_create_posts_table', 1),
(6, '2016_02_15_204651_create_categories_table', 1),
(7, '2016_05_19_173453_create_menu_table', 1),
(8, '2016_10_21_190000_create_roles_table', 1),
(9, '2016_10_21_190000_create_settings_table', 1),
(10, '2016_11_30_135954_create_permission_table', 1),
(11, '2016_11_30_141208_create_permission_role_table', 1),
(12, '2016_12_26_201236_data_types__add__server_side', 1),
(13, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(14, '2017_01_14_005015_create_translations_table', 1),
(15, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(16, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(17, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(18, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(19, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(20, '2017_08_05_000000_add_group_to_settings_table', 1),
(21, '2017_11_26_013050_add_user_role_relationship', 1),
(22, '2017_11_26_015000_create_user_roles_table', 1),
(23, '2018_03_11_000000_add_user_settings', 1),
(24, '2018_03_14_000000_add_details_to_data_types_table', 1),
(25, '2018_03_16_000000_make_settings_value_nullable', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2020_06_17_121204_create_products_table', 1),
(28, '2020_06_17_174502_add_products_table', 2),
(29, '2020_06_18_140551_create_colors_table', 3),
(30, '2020_06_18_140706_create_countries_table', 3),
(31, '2020_06_18_140742_create_regions_table', 3),
(32, '2020_06_18_145203_create_manufacturers_table', 4),
(33, '2020_06_18_150433_create_grape_sorts_table', 5),
(35, '2020_06_18_160813_create_sugars_table', 6),
(37, '2020_06_18_164507_create_winemakers_table', 7),
(38, '2020_06_18_172829_create_winemaker_wine_table', 8),
(39, '2020_06_20_100554_create_wineries_table', 8),
(41, '2020_06_20_113629_create_sets_table', 9),
(43, '2020_06_20_132711_create_set_wine_table', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pages`
--

INSERT INTO `pages` (`id`, `author_id`, `title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 'Hello World', 'Hang the jib grog grog blossom grapple dance the hempen jig gangway pressgang bilge rat to go on account lugger. Nelsons folly gabion line draught scallywag fire ship gaff fluke fathom case shot. Sea Legs bilge rat sloop matey gabion long clothes run a shot across the bow Gold Road cog league.', '<p>Hello World. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', 'pages/page1.jpg', 'hello-world', 'Yar Meta Description', 'Keyword1, Keyword2', 'ACTIVE', '2020-06-17 09:43:45', '2020-06-17 09:43:45');

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(2, 'browse_bread', NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(3, 'browse_database', NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(4, 'browse_media', NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(5, 'browse_compass', NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(6, 'browse_menus', 'menus', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(7, 'read_menus', 'menus', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(8, 'edit_menus', 'menus', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(9, 'add_menus', 'menus', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(10, 'delete_menus', 'menus', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(11, 'browse_roles', 'roles', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(12, 'read_roles', 'roles', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(13, 'edit_roles', 'roles', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(14, 'add_roles', 'roles', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(15, 'delete_roles', 'roles', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(16, 'browse_users', 'users', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(17, 'read_users', 'users', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(18, 'edit_users', 'users', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(19, 'add_users', 'users', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(20, 'delete_users', 'users', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(21, 'browse_settings', 'settings', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(22, 'read_settings', 'settings', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(23, 'edit_settings', 'settings', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(24, 'add_settings', 'settings', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(25, 'delete_settings', 'settings', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(26, 'browse_categories', 'categories', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(27, 'read_categories', 'categories', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(28, 'edit_categories', 'categories', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(29, 'add_categories', 'categories', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(30, 'delete_categories', 'categories', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(31, 'browse_posts', 'posts', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(32, 'read_posts', 'posts', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(33, 'edit_posts', 'posts', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(34, 'add_posts', 'posts', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(35, 'delete_posts', 'posts', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(36, 'browse_pages', 'pages', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(37, 'read_pages', 'pages', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(38, 'edit_pages', 'pages', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(39, 'add_pages', 'pages', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(40, 'delete_pages', 'pages', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(41, 'browse_hooks', NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(42, 'browse_wines', 'wines', '2020-06-17 09:47:26', '2020-06-17 09:47:26'),
(43, 'read_wines', 'wines', '2020-06-17 09:47:26', '2020-06-17 09:47:26'),
(44, 'edit_wines', 'wines', '2020-06-17 09:47:26', '2020-06-17 09:47:26'),
(45, 'add_wines', 'wines', '2020-06-17 09:47:26', '2020-06-17 09:47:26'),
(46, 'delete_products', 'products', '2020-06-17 09:47:26', '2020-06-17 09:47:26'),
(47, 'browse_regions', 'regions', '2020-06-18 08:29:12', '2020-06-18 08:29:12'),
(48, 'read_regions', 'regions', '2020-06-18 08:29:12', '2020-06-18 08:29:12'),
(49, 'edit_regions', 'regions', '2020-06-18 08:29:12', '2020-06-18 08:29:12'),
(50, 'add_regions', 'regions', '2020-06-18 08:29:12', '2020-06-18 08:29:12'),
(51, 'delete_regions', 'regions', '2020-06-18 08:29:12', '2020-06-18 08:29:12'),
(52, 'browse_countries', 'countries', '2020-06-18 08:30:07', '2020-06-18 08:30:07'),
(53, 'read_countries', 'countries', '2020-06-18 08:30:07', '2020-06-18 08:30:07'),
(54, 'edit_countries', 'countries', '2020-06-18 08:30:07', '2020-06-18 08:30:07'),
(55, 'add_countries', 'countries', '2020-06-18 08:30:07', '2020-06-18 08:30:07'),
(56, 'delete_countries', 'countries', '2020-06-18 08:30:07', '2020-06-18 08:30:07'),
(57, 'browse_colors', 'colors', '2020-06-18 08:32:13', '2020-06-18 08:32:13'),
(58, 'read_colors', 'colors', '2020-06-18 08:32:13', '2020-06-18 08:32:13'),
(59, 'edit_colors', 'colors', '2020-06-18 08:32:13', '2020-06-18 08:32:13'),
(60, 'add_colors', 'colors', '2020-06-18 08:32:13', '2020-06-18 08:32:13'),
(61, 'delete_colors', 'colors', '2020-06-18 08:32:13', '2020-06-18 08:32:13'),
(62, 'browse_manufacturers', 'manufacturers', '2020-06-18 08:53:55', '2020-06-18 08:53:55'),
(63, 'read_manufacturers', 'manufacturers', '2020-06-18 08:53:55', '2020-06-18 08:53:55'),
(64, 'edit_manufacturers', 'manufacturers', '2020-06-18 08:53:55', '2020-06-18 08:53:55'),
(65, 'add_manufacturers', 'manufacturers', '2020-06-18 08:53:55', '2020-06-18 08:53:55'),
(66, 'delete_manufacturers', 'manufacturers', '2020-06-18 08:53:55', '2020-06-18 08:53:55'),
(67, 'browse_grape_sorts', 'grape_sorts', '2020-06-18 09:06:22', '2020-06-18 09:06:22'),
(68, 'read_grape_sorts', 'grape_sorts', '2020-06-18 09:06:22', '2020-06-18 09:06:22'),
(69, 'edit_grape_sorts', 'grape_sorts', '2020-06-18 09:06:22', '2020-06-18 09:06:22'),
(70, 'add_grape_sorts', 'grape_sorts', '2020-06-18 09:06:22', '2020-06-18 09:06:22'),
(71, 'delete_grape_sorts', 'grape_sorts', '2020-06-18 09:06:22', '2020-06-18 09:06:22'),
(72, 'browse_sugars', 'sugars', '2020-06-18 10:11:01', '2020-06-18 10:11:01'),
(73, 'read_sugars', 'sugars', '2020-06-18 10:11:01', '2020-06-18 10:11:01'),
(74, 'edit_sugars', 'sugars', '2020-06-18 10:11:01', '2020-06-18 10:11:01'),
(75, 'add_sugars', 'sugars', '2020-06-18 10:11:01', '2020-06-18 10:11:01'),
(76, 'delete_sugars', 'sugars', '2020-06-18 10:11:01', '2020-06-18 10:11:01'),
(77, 'browse_winemakers', 'winemakers', '2020-06-18 11:13:29', '2020-06-18 11:13:29'),
(78, 'read_winemakers', 'winemakers', '2020-06-18 11:13:29', '2020-06-18 11:13:29'),
(79, 'edit_winemakers', 'winemakers', '2020-06-18 11:13:29', '2020-06-18 11:13:29'),
(80, 'add_winemakers', 'winemakers', '2020-06-18 11:13:29', '2020-06-18 11:13:29'),
(81, 'delete_winemakers', 'winemakers', '2020-06-18 11:13:29', '2020-06-18 11:13:29'),
(82, 'delete_wines', 'wines', '2020-06-18 11:49:56', '2020-06-18 11:49:56'),
(83, 'browse_wineries', 'wineries', '2020-06-20 04:23:20', '2020-06-20 04:23:20'),
(84, 'read_wineries', 'wineries', '2020-06-20 04:23:20', '2020-06-20 04:23:20'),
(85, 'edit_wineries', 'wineries', '2020-06-20 04:23:20', '2020-06-20 04:23:20'),
(86, 'add_wineries', 'wineries', '2020-06-20 04:23:20', '2020-06-20 04:23:20'),
(87, 'delete_wineries', 'wineries', '2020-06-20 04:23:20', '2020-06-20 04:23:20'),
(88, 'browse_sets', 'sets', '2020-06-20 06:14:12', '2020-06-20 06:14:12'),
(89, 'read_sets', 'sets', '2020-06-20 06:14:12', '2020-06-20 06:14:12'),
(90, 'edit_sets', 'sets', '2020-06-20 06:14:12', '2020-06-20 06:14:12'),
(91, 'add_sets', 'sets', '2020-06-20 06:14:12', '2020-06-20 06:14:12'),
(92, 'delete_sets', 'sets', '2020-06-20 06:14:12', '2020-06-20 06:14:12');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1),
(76, 1),
(77, 1),
(78, 1),
(79, 1),
(80, 1),
(81, 1),
(82, 1),
(83, 1),
(84, 1),
(85, 1),
(86, 1),
(87, 1),
(88, 1),
(89, 1),
(90, 1),
(91, 1),
(92, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `title`, `seo_title`, `excerpt`, `body`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Lorem Ipsum Post', NULL, 'This is the excerpt for the Lorem Ipsum Post', '<p>This is the body of the lorem ipsum post</p>', 'posts/post1.jpg', 'lorem-ipsum-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(2, 0, NULL, 'My Sample Post', NULL, 'This is the excerpt for the sample Post', '<p>This is the body for the sample post, which includes the body.</p>\n                <h2>We can use all kinds of format!</h2>\n                <p>And include a bunch of other stuff.</p>', 'posts/post2.jpg', 'my-sample-post', 'Meta Description for sample post', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(3, 0, NULL, 'Latest Post', NULL, 'This is the excerpt for the latest post', '<p>This is the body for the latest post</p>', 'posts/post3.jpg', 'latest-post', 'This is the meta description', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(4, 0, NULL, 'Yarr Post', NULL, 'Reef sails nipperkin bring a spring upon her cable coffer jury mast spike marooned Pieces of Eight poop deck pillage. Clipper driver coxswain galleon hempen halter come about pressgang gangplank boatswain swing the lead. Nipperkin yard skysail swab lanyard Blimey bilge water ho quarter Buccaneer.', '<p>Swab deadlights Buccaneer fire ship square-rigged dance the hempen jig weigh anchor cackle fruit grog furl. Crack Jennys tea cup chase guns pressgang hearties spirits hogshead Gold Road six pounders fathom measured fer yer chains. Main sheet provost come about trysail barkadeer crimp scuttle mizzenmast brig plunder.</p>\n<p>Mizzen league keelhaul galleon tender cog chase Barbary Coast doubloon crack Jennys tea cup. Blow the man down lugsail fire ship pinnace cackle fruit line warp Admiral of the Black strike colors doubloon. Tackle Jack Ketch come about crimp rum draft scuppers run a shot across the bow haul wind maroon.</p>\n<p>Interloper heave down list driver pressgang holystone scuppers tackle scallywag bilged on her anchor. Jack Tar interloper draught grapple mizzenmast hulk knave cable transom hogshead. Gaff pillage to go on account grog aft chase guns piracy yardarm knave clap of thunder.</p>', 'posts/post4.jpg', 'yarr-post', 'this be a meta descript', 'keyword1, keyword2, keyword3', 'PUBLISHED', 0, '2020-06-17 09:43:45', '2020-06-17 09:43:45');

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `regions`
--

INSERT INTO `regions` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Кубань', '2020-06-18 09:01:15', '2020-06-18 09:01:15');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Администратор', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(2, 'user', 'Обычный Пользователь', '2020-06-17 09:43:45', '2020-06-17 09:43:45');

-- --------------------------------------------------------

--
-- Структура таблицы `sets`
--

CREATE TABLE `sets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prev_set_id` int(11) DEFAULT NULL,
  `next_set_id` int(11) DEFAULT NULL,
  `next_category_set_id` int(11) DEFAULT NULL,
  `prev_category_set_id` int(11) DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sets`
--

INSERT INTO `sets` (`id`, `title`, `description`, `model`, `price`, `year`, `image`, `slug`, `count`, `prev_set_id`, `next_set_id`, `next_category_set_id`, `prev_category_set_id`, `meta_description`, `meta_keywords`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Автохтонные вина', 'Уникальный сет. Это наши, русские, аборигенные сорта винограда: Красностоп Золотовский, Сибирьковый, Цимлянский Черный, который произрастают только в России', 'Автохтонный сет', 14500, 1, 'sets\\June2020\\nGQPUWRByUgQsboPbPYY.png', 'avtohtonnye-vina', '100', NULL, NULL, NULL, NULL, 'dwadwadawd', 'wadwda', 'ACTIVE', '2020-06-20 09:12:57', '2020-06-20 09:18:37');

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Название Сайта', 'Название Сайта', '', 'text', 1, 'Site'),
(2, 'site.description', 'Описание Сайта', 'Описание Сайта', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Логотип Сайта', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Фоновое Изображение для Админки', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Название Админки', 'Voyager', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Описание Админки', 'Добро пожаловать в Voyager. Пропавшую Админку для Laravel', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Загрузчик Админки', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Иконка Админки', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (используется для панели администратора)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Структура таблицы `set_wine`
--

CREATE TABLE `set_wine` (
  `wine_id` int(11) NOT NULL,
  `set_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `set_wine`
--

INSERT INTO `set_wine` (`wine_id`, `set_id`) VALUES
(2, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `sugars`
--

CREATE TABLE `sugars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `sugars`
--

INSERT INTO `sugars` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Сухое', '2020-06-18 10:12:52', '2020-06-18 10:12:52');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `table_name`, `column_name`, `foreign_key`, `locale`, `value`, `created_at`, `updated_at`) VALUES
(1, 'data_types', 'display_name_singular', 5, 'pt', 'Post', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(2, 'data_types', 'display_name_singular', 6, 'pt', 'Página', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(3, 'data_types', 'display_name_singular', 1, 'pt', 'Utilizador', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(4, 'data_types', 'display_name_singular', 4, 'pt', 'Categoria', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(5, 'data_types', 'display_name_singular', 2, 'pt', 'Menu', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(6, 'data_types', 'display_name_singular', 3, 'pt', 'Função', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(7, 'data_types', 'display_name_plural', 5, 'pt', 'Posts', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(8, 'data_types', 'display_name_plural', 6, 'pt', 'Páginas', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(9, 'data_types', 'display_name_plural', 1, 'pt', 'Utilizadores', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(10, 'data_types', 'display_name_plural', 4, 'pt', 'Categorias', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(11, 'data_types', 'display_name_plural', 2, 'pt', 'Menus', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(12, 'data_types', 'display_name_plural', 3, 'pt', 'Funções', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(13, 'categories', 'slug', 1, 'pt', 'categoria-1', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(14, 'categories', 'name', 1, 'pt', 'Categoria 1', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(15, 'categories', 'slug', 2, 'pt', 'categoria-2', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(16, 'categories', 'name', 2, 'pt', 'Categoria 2', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(17, 'pages', 'title', 1, 'pt', 'Olá Mundo', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(18, 'pages', 'slug', 1, 'pt', 'ola-mundo', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(19, 'pages', 'body', 1, 'pt', '<p>Olá Mundo. Scallywag grog swab Cat o\'nine tails scuttle rigging hardtack cable nipper Yellow Jack. Handsomely spirits knave lad killick landlubber or just lubber deadlights chantey pinnace crack Jennys tea cup. Provost long clothes black spot Yellow Jack bilged on her anchor league lateen sail case shot lee tackle.</p>\r\n<p>Ballast spirits fluke topmast me quarterdeck schooner landlubber or just lubber gabion belaying pin. Pinnace stern galleon starboard warp carouser to go on account dance the hempen jig jolly boat measured fer yer chains. Man-of-war fire in the hole nipperkin handsomely doubloon barkadeer Brethren of the Coast gibbet driver squiffy.</p>', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(20, 'menu_items', 'title', 1, 'pt', 'Painel de Controle', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(21, 'menu_items', 'title', 2, 'pt', 'Media', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(22, 'menu_items', 'title', 12, 'pt', 'Publicações', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(23, 'menu_items', 'title', 3, 'pt', 'Utilizadores', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(24, 'menu_items', 'title', 11, 'pt', 'Categorias', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(25, 'menu_items', 'title', 13, 'pt', 'Páginas', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(26, 'menu_items', 'title', 4, 'pt', 'Funções', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(27, 'menu_items', 'title', 5, 'pt', 'Ferramentas', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(28, 'menu_items', 'title', 6, 'pt', 'Menus', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(29, 'menu_items', 'title', 7, 'pt', 'Base de dados', '2020-06-17 09:43:45', '2020-06-17 09:43:45'),
(30, 'menu_items', 'title', 10, 'pt', 'Configurações', '2020-06-17 09:43:45', '2020-06-17 09:43:45');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$R5D363DYMV.3XYy7TKQWXuKq7bQFNXtxDvhWPlZQjalUMG4Gukxwe', '0JehtkJn2fp18FgeJBRPLdrUNC5wFriosfkabZpUsduSiOFL15w4b0hcvjHB', NULL, '2020-06-17 09:43:45', '2020-06-17 09:43:45');

-- --------------------------------------------------------

--
-- Структура таблицы `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `winemakers`
--

CREATE TABLE `winemakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(11) NOT NULL,
  `winery_id` int(11) NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `winemakers`
--

INSERT INTO `winemakers` (`id`, `full_name`, `description`, `region_id`, `winery_id`, `seo_title`, `meta_description`, `meta_keywords`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Андриенко Павелв', 'Российский винодел Павел Андриенко родился в 1974 году в Краснодарском крае. В 2004 году окончил Кубанский государственный технологический университет, в Краснодаре по специальности \"Технология бродильных производств и виноделие». С 2003 г. по 2005 г. работал в ЗАО АПФ «Мирный». Прошел путь от рабочего до технолога-винодела. Один из участников проекта по запуску цеха по производству игристых вин. С 2005 г. по 2013 г. работал в ООО «Кубанские вина» сначала в должности технолога, а затем - заместителем генерального директора, директором по производству. За все время работы основным направлением было улучшение качества выпускаемых вин с применением передовых технологий. Сохранение производства Хереса классическим способом. Непосредственное участие над выпуском вин Шардоне, Каберне, Мерло, серии «Звезда Тамани». В настоящее время работает на «Заводе марочных вин Коктебель» в качестве главного технолога-винодела. Основное направление - это сохранение заводских традиций виноделия с постоянным совершенствованием. Продолжение классического производства вина Мадера Коктебель, выпуска вина «Кагор Высшего качества», так же Шардоне, Каберне-Совиньон, Бастардо.', 1, 1, 'awdawd', 'daw', 'dawdaw', 'andrienko-pavelv', 'winemakers\\June2020\\fDuMzOzCEvDsmF5A5iB4.jpg', 'ACTIVE', '2020-06-18 12:42:56', '2020-06-20 04:47:58');

-- --------------------------------------------------------

--
-- Структура таблицы `winemaker_wine`
--

CREATE TABLE `winemaker_wine` (
  `winemaker_id` int(10) UNSIGNED NOT NULL,
  `wine_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `winemaker_wine`
--

INSERT INTO `winemaker_wine` (`winemaker_id`, `wine_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `wineries`
--

CREATE TABLE `wineries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region_id` int(11) NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_id` int(11) NOT NULL,
  `layout_id` int(11) NOT NULL,
  `subscribe_status` int(11) NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate_lon` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate_lat` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `wineries`
--

INSERT INTO `wineries` (`id`, `title`, `signature`, `description`, `header_image`, `logo_image`, `catalog_image`, `region_id`, `seo_title`, `type_id`, `layout_id`, `subscribe_status`, `slug`, `coordinate_lon`, `coordinate_lat`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Вилла Виктория', 'Краснодарский край, Новороссийск, х. Ленинский Путь', 'Реализованная идея семьи Яновых создать хозяйство бургундско-луарского стиля. Самая крайняя и самая высоко расположенная винодельня Анапской долины по пути к Новороссийску. Консультантом хозяйства выступил Джон Ворончак. Первые вина делались в «Мысхако» Романом Неборским.', 'wineries\\June2020\\8A6KWkh8j65vqNo36m6D.jpg', 'wineries\\June2020\\XT1kELsHnmmSuGXbaR0l.png', 'wineries\\June2020\\mHVnZ2SdPuZKq4l7HWTm.png', 1, 'Купить вино Вилла Виктория, каберне фран, рислинг, шардоне', 1, 8, 1, 'villa-viktoriya', '37.627732', '44.862104', 'ACTIVE', '2020-06-20 04:43:54', '2020-06-20 04:43:54');

-- --------------------------------------------------------

--
-- Структура таблицы `wines`
--

CREATE TABLE `wines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `production_feature` text COLLATE utf8mb4_unicode_ci,
  `combination` text COLLATE utf8mb4_unicode_ci,
  `feature` text COLLATE utf8mb4_unicode_ci,
  `innings` text COLLATE utf8mb4_unicode_ci,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `winery_id` int(11) NOT NULL,
  `grape_sort_id` int(11) NOT NULL,
  `edition` int(11) NOT NULL,
  `manufacturer_id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `fortress` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `volume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sugar_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'ACTIVE',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `wines`
--

INSERT INTO `wines` (`id`, `title`, `price`, `seo_title`, `description`, `production_feature`, `combination`, `feature`, `innings`, `model`, `winery_id`, `grape_sort_id`, `edition`, `manufacturer_id`, `region_id`, `color_id`, `fortress`, `year`, `volume`, `sugar_id`, `count`, `image`, `slug`, `meta_description`, `meta_keywords`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(2, '100 оттенков Каберне', 5000, 'a13123', 'awdaw', 'Вино выдерживается не менее одного года во французской дубовой бочке, а после розлива - 6 месяцев непосредственно в бутылке.', 'Станет идеальной парой для мясных блюд, твёрдых сыров. Особенно хорошо для говяжьих рёбрышек.', 'Вино обладает тёмно-рубиновым цветом. В сложном букете доминирует аромат специй, ванили на общем фоне \"дымки\" дубовой бочки. Вкус вина классический, сортовой с оттенками чёрной смородины, табака, чернослива, кожи. Отличная структура и хорошо сбалансированность делают вино необычайно изысканным.', 'Подавать при температуре 14 - 16 С .', 'Fanagoria 100 Cabernet 2013', 1, 1, 5670, 1, 1, 1, 13, 2013, '0.75', 1, 1000, 'wines\\June2020\\yTUMTzvki3AP4JJACcQK.png', '100-ottenkov-kaberne', '213231', '131231', 'ACTIVE', 1, '2020-06-18 08:49:49', '2020-06-20 01:10:44');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Индексы таблицы `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `grape_sorts`
--
ALTER TABLE `grape_sorts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Индексы таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Индексы таблицы `sets`
--
ALTER TABLE `sets`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Индексы таблицы `sugars`
--
ALTER TABLE `sugars`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- Индексы таблицы `winemakers`
--
ALTER TABLE `winemakers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wineries`
--
ALTER TABLE `wineries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wines`
--
ALTER TABLE `wines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `colors`
--
ALTER TABLE `colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT для таблицы `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `grape_sorts`
--
ALTER TABLE `grape_sorts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `sets`
--
ALTER TABLE `sets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `sugars`
--
ALTER TABLE `sugars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `winemakers`
--
ALTER TABLE `winemakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `wineries`
--
ALTER TABLE `wineries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `wines`
--
ALTER TABLE `wines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
