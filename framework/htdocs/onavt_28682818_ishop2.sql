-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql313.hostronavt.ru
-- Generation Time: Jun 22, 2021 at 09:02 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onavt_28682818_ishop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `attribute_group`
--

CREATE TABLE `attribute_group` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute_group`
--

INSERT INTO `attribute_group` (`id`, `title`) VALUES
(1, 'Цвет'),
(2, 'Гравировка'),
(3, 'Материал'),
(4, 'Корпус'),
(5, 'Индикация');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_product`
--

CREATE TABLE `attribute_product` (
  `attr_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute_product`
--

INSERT INTO `attribute_product` (`attr_id`, `product_id`) VALUES
(1, 1),
(1, 63),
(1, 67),
(2, 3),
(2, 5),
(2, 11),
(2, 60),
(3, 2),
(3, 66),
(7, 6),
(8, 3),
(8, 4),
(8, 5),
(8, 60),
(8, 61),
(9, 1),
(9, 2),
(9, 66),
(11, 7),
(15, 1),
(15, 3);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value`
--

CREATE TABLE `attribute_value` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `attr_group_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute_value`
--

INSERT INTO `attribute_value` (`id`, `value`, `attr_group_id`) VALUES
(1, 'Бирюзовый', 1),
(2, 'Желтый', 1),
(3, 'Розовый', 1),
(4, 'Синий', 1),
(5, 'Надписи', 2),
(6, 'Графити', 2),
(7, 'Рисунок', 2),
(8, 'Изолон', 3),
(9, 'Фамиран', 3),
(10, 'Стекло', 3),
(11, 'Полимерный', 3),
(12, 'Нержавеющая сталь', 4),
(13, 'Титановый сплав', 4),
(14, 'Латунь', 4),
(15, 'Полимер', 4),
(16, 'Керамика', 4),
(17, 'Алюминий', 4),
(18, 'Аналоговые', 5),
(19, 'Цифровые', 5);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'brand_no_image.jpg',
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `title`, `alias`, `img`, `description`) VALUES
(1, 'Роза', 'Roza', 'abt-1.jpg', NULL),
(2, 'Отличный Подарок', 'citizen', 'abt-2.jpg', NULL),
(3, 'Девушке', 'royal-london', 'abt-3.jpg', NULL),
(4, 'Seiko', 'seiko', 'seiko.png', NULL),
(5, 'Diesel', 'diesel', 'diesel.png', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `parent_id` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `alias`, `parent_id`, `keywords`, `description`) VALUES
(1, 'Меню', 'men', 0, 'Men', 'Men'),
(2, 'Бантики', 'bantiki', 0, 'Бантики', 'Бантики'),
(3, 'Бокалы', 'Bokali', 0, 'Kids', 'Kids'),
(4, 'Светильники Ночники', 'svetil-niki-nochniki', 1, 'Светильники Ночники', 'Светильники Ночники инструкция по эксплотации:1. Использование только светодиодных ламп 3-5 ватт 2. Для удаления пыли допускается протирание влажной салфеткой либо холодный душ предворительно снять электрическую часть светильника.Так же пыль можно убрать '),
(5, 'Светильники в подарок', 'svetil-niki-v-podarok', 1, 'Светильники в подарок', 'Светильники в подарок'),
(6, 'Ночники Пушистики', 'nochniki-pushistiki', 4, 'Ночники пушистики', ''),
(7, 'Цветы Ночники', 'cvety-nochniki-7', 4, 'Ночники Цветы', 'Ночники Цветы \"Гортензия\". Изготовлены из фоамирана в зефирно-розовом цвете. Иструкция по эксплотации:1. Использование только светодиодных ламп 3-5 ватт 2. Для удаления пыли допускается протирание влажной салфеткой либо холодный душ предворительно снять э'),
(8, 'Ночник Пивная кружка', 'nochnik-pivnaya-kruzhka', 5, 'Ночник  Пивная кружка', 'Ночник  Пивная кружка изготовлена из изолона ППЭ в темно-коричневом цвете. ИНСТРУКЦИЯ ПО ЭКСПЛОТАЦИИ ИЗДЕЛИЯ:1. Использование только светодиодных ламп 3-5 ватт 2. Для удаления пыли допускается протирание влажной салфеткой либо холодный душ предворительно '),
(9, 'Цветы Ночники', 'cvety-nochniki', 5, 'Ночники Цветы', 'Ночники Цветы'),
(10, 'Ночники для Детей', 'nochniki-dlya-detey', 5, 'Ночники для Детей', 'Ночник Беби-бум изготовлен из изолона ППЭ. Инструкция по эксплотации:1. Использование только светодиодных ламп 3-5 ватт 2. Для удаления пыли допускается протирание влажной салфеткой либо холодный душ предворительно снять электрическую часть светил'),
(11, 'Для детей', 'dlya-detey', 2, 'Для детей', 'Для детей'),
(12, 'Для взрослых', 'dlya-vzroslyh', 2, 'Для взрослых', 'Для взрослых'),
(30, 'Свадебные Бокалы', 'svadebnye-bokaly', 3, 'Свадебные Бокалы', 'Свадебные Бокалы'),
(31, 'Первый как второй', 'pervyy-kak-vtoroy', 30, 'Нет', 'Да'),
(33, 'Подарочные Бокалы', 'podarochnye-bokaly', 3, 'Подарочные Бокалы', 'Подарочные Бокалы'),
(34, ' Цветы ночники', 'cvety-nochniki-34', 7, 'Ночник \"Гортензия\"', 'Ночник- гортензия в цвете фуксия изготовлен из фоамирана. Инструкция по эксплотации:1. Использование только светодиодных ламп 3-5 ватт 2. Для удаления пыли допускается протирание влажной салфеткой либо холодный душ предворительно снять электрическую часть');

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

CREATE TABLE `currency` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `code` varchar(3) NOT NULL,
  `symbol_left` varchar(10) NOT NULL,
  `symbol_right` varchar(10) NOT NULL,
  `value` float(15,2) NOT NULL,
  `base` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `title`, `code`, `symbol_left`, `symbol_right`, `value`, `base`) VALUES
(1, 'гривна', 'UAH', '', 'грн.', 25.80, 0),
(2, 'доллар', 'USD', '$', '', 1.00, 1),
(3, 'Евро', 'EUR', '€', '', 0.88, 0),
(4, 'Рубль', 'RUB', 'рубль', '', 72.00, 0),
(5, 'Tess', 'TES', '', 'TES', 23.20, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `img`) VALUES
(8, 59, 'a3383d048ac44680340df31358666da4.jpg'),
(10, 3, 'ad404407981ad03b2b8e01e097e847ab.jpg'),
(12, 1, '1bff815218503c7495b3317cc1e752d0.jpg'),
(13, 6, 'efd86cd28792eba4841fa77afcf5a1a9.jpg'),
(14, 5, 'e74aa31dc66e56f8720973e7fa5a7e19.jpg'),
(15, 4, 'b1d937c260a69ae11f7979b30491d6ab.jpg'),
(16, 4, '73c51c460c8bc2aeb59b9d2df0f3b20c.jpg'),
(17, 7, '47dee68faa78e42d3c085aa773ac2941.jpg'),
(18, 7, '4b7b82d047d6f6572d8f72e7bfb1704a.jpg'),
(19, 7, '8314abcfa4b1e8ff2dc98900c8dc823c.jpg'),
(20, 60, 'bde1720ea9c5ddcfe3dd78214a5a373d.jpg'),
(21, 60, 'ee6da3a344e8492839f87583d33a3c0a.jpg'),
(22, 60, '3fa6bbd26838bea7a57bbc30ef2085ec.jpg'),
(23, 60, 'd8331ac6afd7d11c20c95cc0b5d30bbe.jpg'),
(24, 1, '5ec682bb02424dced7e854eff1876937.jpg'),
(25, 1, '9267ba50c55acc08019fa95de27e1f2e.jpg'),
(26, 63, '23af3819b9368a4088aded1a612306fe.jpg'),
(27, 64, 'af714068487b68e7509d554b2546a6bf.jpg'),
(29, 64, 'f7665c025a384224a9f68f80aef4a9be.jpg'),
(30, 62, '7dd559669b210990ed805bd1650774a0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `modification`
--

CREATE TABLE `modification` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `modification`
--

INSERT INTO `modification` (`id`, `product_id`, `title`, `price`) VALUES
(1, 1, 'Silver', 300),
(2, 1, 'Black', 300),
(3, 1, 'Dark Black', 305),
(4, 1, 'Red', 310),
(5, 2, 'Silver', 80),
(6, 2, 'Red', 70);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL,
  `currency` varchar(10) NOT NULL,
  `note` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `status`, `date`, `update_at`, `currency`, `note`) VALUES
(19, 4, 0, '2021-04-01 17:42:49', '2021-05-22 13:25:47', 'USD', '2134'),
(23, 7, 0, '2021-05-22 21:44:42', NULL, 'USD', ''),
(24, 7, 0, '2021-05-22 21:50:09', NULL, 'USD', ''),
(25, 7, 1, '2021-05-22 21:54:26', '2021-05-23 14:50:44', 'USD', '22'),
(26, 7, 0, '2021-05-22 21:56:31', NULL, 'USD', '22'),
(27, 8, 0, '2021-05-23 13:10:07', NULL, 'USD', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `qty`, `title`, `price`) VALUES
(43, 19, 2, 1, 'Casio MQ-24-7BUL', 70),
(46, 22, 3, 2, 'Пушистик', 50),
(47, 22, 6, 1, 'Бантик класитеческий', 1),
(48, 23, 3, 2, 'Пушистик', 50),
(49, 23, 6, 1, 'Бантик класитеческий', 1),
(50, 24, 3, 2, 'Пушистик', 50),
(51, 24, 6, 1, 'Бантик класитеческий', 1),
(52, 25, 3, 2, 'Пушистик', 50),
(53, 25, 6, 1, 'Бантик класитеческий', 1),
(54, 25, 4, 1, 'Пушистик класический', 20),
(55, 26, 3, 2, 'Пушистик', 50),
(56, 26, 6, 1, 'Бантик класитеческий', 1),
(57, 26, 4, 1, 'Пушистик класический', 20),
(58, 27, 1, 4, 'Роза Бирюзовая', 30),
(59, 27, 3, 4, 'Пушистик', 50);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `content` text,
  `price` float NOT NULL DEFAULT '0',
  `old_price` float NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT 'no_image.jpg',
  `hit` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `alias`, `content`, `price`, `old_price`, `status`, `keywords`, `description`, `img`, `hit`) VALUES
(1, 9, 'Роза Бирюзовая', 'roza-biryuzovaya-1', '', 30, 35, 1, 'Роза Бирюзовая', 'Роза Бирюзовая', '76f69343a3fb39135e3b1455cd3578bd.jpg', 1),
(2, 7, 'Роза', 'roza', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>\r\n\r\n<p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>\r\n', 20, 30, 1, 'Роза', 'Роза', '8cf54921b3334249cbae8bdf41afd715.jpg', 1),
(3, 6, 'Пушистик', 'pushistik-3', '<p>Ночник-пушистик &nbsp;Материал: изолон ППЭ безопасен для экологии и здоровья, мягкий, эластичный, долговечный, не токсичен. Цвет: желтый Высота: Ширина: Инструкция по эксплотации: 1. Использование только светодиодных ламп 3-5 ватт 2. Для удаления пыли допускае</p>\r\n', 50, 55, 1, '', '', '1fcfcbce923be04a94ff9bb19d4bcfab.jpg', 1),
(4, 6, 'Пушистик класический', 'pushistik-klasicheskiy', '', 20, 25, 1, 'Пушистик класический', 'Пушистик класический', '1c78ba735aeb31c4dfacb9149bb6426d.jpg', 1),
(5, 11, 'Бантик Бабочка', 'bantik-babochka', '', 1, 2, 1, 'Бантик Желтик', 'Бантик Желтик', 'c457906dc6f7971cff4635f9997d8aa9.jpg', 1),
(6, 11, 'Бантик класситеческий', 'bantik-klassitecheskiy', '', 1, 2, 1, 'Бантик класитеческий', 'Бантик класитеческий', '1fbb97f654ace0199310b114a8d84e0a.jpg', 1),
(7, 9, 'РозаМикс', 'rozamiks', '', 20, 23, 1, 'РозаМикс', 'РозаМикс', 'f560ad863afb963dad29a8d6b7cc3bd6.jpg', 1),
(11, 3, 'Тестовый товар', 'testovyy-tovar-11', '<p>контент...</p>\r\n', 10, 0, 0, '', '', 'no_image.jpg', 1),
(60, 8, 'Пивная Кружка', 'pivnaya-kruzhka', '', 25, 30, 1, 'Пивная Кружка', 'Пивная Кружка', '9d1d0b36398071be61514cbf95b01eeb.jpg', 0),
(61, 10, 'Ночник Маша', 'nochnik-masha', '', 15, 20, 1, 'Ночник Маша', 'Ночник Маша', '7aeac7f0e87bc0217709a8ce9bdaab2d.jpg', 0),
(63, 31, 'test121', 'test121', '', 434, 343, 1, 'test', 'test', '1b050419377293a0bec43d40cde27fd4.jpg', 0),
(67, 31, 'Diplom', 'diplom', '<p>Diplom</p>\r\n', 23, 21, 1, 'Diplom', 'Diplom', 'no_image.jpg', 1),
(66, 7, 'Гортензия', 'gortenziya-66', '<p>Ночник &quot;Гортензия&quot; в зефирно-розовом цвете. Изготовлен из фоамирана. Инструкция по эксплотации:1. Использование только светодиодных ламп 3-5 ватт 2. Для удаления пыли допускается протирание влажной салфеткой либо холодный душ предворительно снять электрич</p>\r\n', 20, 30, 1, 'Ночник \"Гортензия\"', '', 'no_image.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `related_product`
--

CREATE TABLE `related_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `related_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `related_product`
--

INSERT INTO `related_product` (`product_id`, `related_id`) VALUES
(1, 2),
(1, 5),
(2, 5),
(5, 1),
(5, 7),
(58, 1),
(58, 3),
(58, 7),
(58, 8),
(58, 10),
(58, 13),
(66, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`, `name`, `address`, `role`) VALUES
(1, 'dfd', '$2y$10$rBWl2fxWS.7kYRmA75vWCO2wLir9P4aViHdEbprZAFLxF4kNak4Fy', 'fdf@gmail.com', 'fsf', 'fdfdf', 'user'),
(2, 'user1', '$2y$10$lxKX3.2IXpH.Pyn5ou8kMelizjfs97ogVdZXLtqXLtCrH9cNh9suC', 'din@gmail.com', 'sd', '121', 'user'),
(3, 'user333', '$2y$10$QJFxUF6TqnVLVfXXNIEE2O3emrvMVqSGPU5Y1diu5M8/qCmOVaMrm', 'dimaSuper@gmail.com', 'DimaSuper', 'Minsk', 'user'),
(4, 'user4', '$2y$10$NYiMrej5rqIsX.m8foP/auwXvBEiaee8Iz64pJiuadnJanekZfKka', 'di@fg.com', 'sf', 'sfdfd', 'user'),
(5, 'user7', '$2y$10$1PTtUq/jYo58mnAbSEiXg.OEwfiULfuVUdNspcQ0wen3w0sthwxzq', 'dima@gmail.xom', 'sds', 'user1', 'user'),
(6, 'User123', '$2y$10$ez5Y09TNUcw.4GBoszHBo.d07wGr3N/jFUM0I/jALdA72687/gSC2', 'pety@gmail.com', 'pety', 'din', 'user'),
(7, 'dimobix', '$2y$10$Bdi177IS9J.mEa7c.aCdcePOVzyOJ9aFXahImn4h8f37q5ZsiKA/.', 'dimobix@gmail.com', 'Dimobix', 'Test', 'user'),
(8, 'Admin', '$2y$10$e1IOo4N5Z3.PnFYHGVa45eQQJiPhcz8CCFovCEcsga95aC/MEHrPy', 'admin@mail.ru', 'Admin', 'Admin', 'admin'),
(9, 'dfd2', '$2y$10$Ni8/07awemEV3knT0x1vEuDC6ePtYk/kTlFiZjyDedtXNS4Q5b/wS', 'fdfd@eff.tr', 'ffd', 'fdfd', 'user'),
(10, 'admin2', '$2y$10$JCI7jiPc2iBw0JOkuHi7Re.//oLYJGc/xJCwZ6BNkY4Z9wYH5RtOu', 'dima@gmail.com', 'Dima', 'dima@erei', 'admin'),
(11, 'User345', '$2y$10$MIS9q83i.skNgCjRn/Kb0eWGzn8WJRVacvvkd9Q3db8oKNTvWCitu', 'test@gmail.com', 'Дмитрий', '242', 'user'),
(12, 'Sd', '$2y$10$BxP8HcU3Gi9ILAvIlj8fUuTHSU4dDRiob1.7invuFBZv8rWpoWbq.', 'sd@gmail.com', 'Sd', 'sd', 'user'),
(13, 'Adminka', '$2y$10$i/XUEJiijCtGVO.zTcGjv.7iNaSAS16DfCTAb3j6gDxTFLuuE1jka', 'y@fg.ry', 'y', 'Admin', 'user'),
(14, 'TestUser', '$2y$10$ps6vY7qJlSkvJkwHtugVLOIFCApQADeVy7IolE5OuNUMbdctfEr82', 'test@test.ru', 'Test', 'test', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attribute_group`
--
ALTER TABLE `attribute_group`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_product`
--
ALTER TABLE `attribute_product`
  ADD PRIMARY KEY (`attr_id`,`product_id`);

--
-- Indexes for table `attribute_value`
--
ALTER TABLE `attribute_value`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `value` (`value`),
  ADD KEY `attr_group_id` (`attr_group_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`);

--
-- Indexes for table `currency`
--
ALTER TABLE `currency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modification`
--
ALTER TABLE `modification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alias` (`alias`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `hit` (`hit`);

--
-- Indexes for table `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`product_id`,`related_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attribute_group`
--
ALTER TABLE `attribute_group`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `attribute_value`
--
ALTER TABLE `attribute_value`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `currency`
--
ALTER TABLE `currency`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `modification`
--
ALTER TABLE `modification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
