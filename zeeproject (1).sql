-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2020 at 08:56 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zeeproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `barcode` varchar(255) DEFAULT NULL,
  `affect` varchar(255) NOT NULL COMMENT '1 for yes 0 for no',
  `cat_id` int(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `remiaing_qty` varchar(255) DEFAULT NULL,
  `alert_stock` int(255) NOT NULL,
  `product_cost` int(255) NOT NULL,
  `sale_price` int(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `product_place` varchar(255) DEFAULT NULL,
  `warehouse_num` varchar(255) DEFAULT NULL,
  `pur_place` varchar(255) DEFAULT NULL,
  `main_pic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `name`, `barcode`, `affect`, `cat_id`, `unit`, `qty`, `remiaing_qty`, `alert_stock`, `product_cost`, `sale_price`, `description`, `product_place`, `warehouse_num`, `pur_place`, `main_pic`) VALUES
(2, 'Dew', '2222', '1', 1, 'liter', 3, '-71', 5, 50, 100, 'This is dew', '02', '002', 'pindi', 'products/download (1).jpg'),
(3, 'burger', '3333', '0', 3, 'Pound', 2, '-74', 2, 110, 150, 'This is burger', '333', '003', 'islamabad', 'products/download (3).jpg'),
(4, 'pizza', '112211', '1', 3, 'Pound', 5, '-1', 5, 100, 200, 'djhfjdhfjdh', '1221', '005', 'lahore', 'products/'),
(5, 'pepsi', '1111', '1', 1, 'mili liter', 5, '1', 5, 100, 200, 'kddkfldkl', '9994309', '930394', 'lahore', 'products/'),
(6, 'chicken', '2398329', '1', 4, 'grams', 2, '-15', 5, 200, 500, 'mdlfldl', '920302', '930930', 'punjab', 'products/'),
(7, 'fanta1', '09302', '1', 1, 'mili liter', 2, '-2', 5, 100, 700, 'klldk', '29839', '98498', 'karachi', 'products/');

-- --------------------------------------------------------

--
-- Table structure for table `add_todo`
--

CREATE TABLE `add_todo` (
  `id` int(11) NOT NULL,
  `task_name` varchar(255) NOT NULL,
  `task_date` varchar(255) NOT NULL,
  `task_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_todo`
--

INSERT INTO `add_todo` (`id`, `task_name`, `task_date`, `task_description`) VALUES
(1, 'selling', '2020-11-10T14:37', 'This is selling task');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(1, 'Drinks'),
(2, 'Juice'),
(3, 'Fast Food'),
(4, 'Desi ');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cus_shop_name` varchar(255) DEFAULT NULL,
  `cus_name` varchar(255) DEFAULT NULL,
  `cus_phone` varchar(255) DEFAULT NULL,
  `cus_address` varchar(255) DEFAULT NULL,
  `cus_image` varchar(255) DEFAULT NULL,
  `cus_remaining_cash` int(11) NOT NULL,
  `cus_rating` varchar(255) DEFAULT NULL,
  `cus_fb` varchar(255) DEFAULT NULL,
  `cus_twitter` varchar(255) DEFAULT NULL,
  `cus_tiktok` varchar(255) DEFAULT NULL,
  `cus_web` varchar(255) DEFAULT NULL,
  `cus_youtube` varchar(255) DEFAULT NULL,
  `cus_insta` varchar(255) DEFAULT NULL,
  `cus_mail` varchar(255) DEFAULT NULL,
  `cus_other` varchar(255) DEFAULT NULL,
  `cus_ref` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cus_shop_name`, `cus_name`, `cus_phone`, `cus_address`, `cus_image`, `cus_remaining_cash`, `cus_rating`, `cus_fb`, `cus_twitter`, `cus_tiktok`, `cus_web`, `cus_youtube`, `cus_insta`, `cus_mail`, `cus_other`, `cus_ref`) VALUES
(1, 'Hello trader ', 'Mursil', '0596599560950', 'walton cantt', 'images/tiktok.png', 0, 'Rating 5', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '252r636235'),
(3, NULL, '67', '121212', 'jaffria', NULL, 600, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, 'imran', '456', '356r', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `cnic` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `started_date` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `ref_number` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `number`, `cnic`, `age`, `started_date`, `salary`, `image`, `address`, `ref_number`) VALUES
(1, 'Mursil', '9384934839', '95845904590459', '21', '2222-02-22', '10000', 'images/download.jpg', 'Lahore Cantt', 'ananmnmanama');

-- --------------------------------------------------------

--
-- Table structure for table `product_3d_img`
--

CREATE TABLE `product_3d_img` (
  `id` int(11) NOT NULL,
  `3d_img` varchar(255) DEFAULT NULL,
  `product_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_active_seller`
--

CREATE TABLE `product_active_seller` (
  `id` int(11) NOT NULL,
  `seller_id` varchar(255) DEFAULT NULL,
  `product_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `pro_other_img` varchar(255) DEFAULT NULL,
  `product_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `pro_other_img`, `product_id`) VALUES
(6, 'products/download.jpg', 2),
(7, 'products/download (4).jpg', 3),
(8, 'products/gourmet-burger-scaled.webp', 3),
(9, 'products/istockphoto-1188412964-612x612.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product_passive_seller`
--

CREATE TABLE `product_passive_seller` (
  `id` int(11) NOT NULL,
  `seller_id` varchar(255) DEFAULT NULL,
  `product_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `invoice_num` text NOT NULL,
  `cus_name` text NOT NULL,
  `total_bill` int(11) NOT NULL,
  `bill_date` text NOT NULL,
  `pay_amount` int(11) NOT NULL,
  `status` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `invoice_num`, `cus_name`, `total_bill`, `bill_date`, `pay_amount`, `status`, `created_at`) VALUES
(1, '23245', '2', 100, '12-12-12', 0, '', '2020-12-15 10:45:23'),
(2, '#46001', '0', 1000, '', 0, '', '2020-12-15 11:15:12'),
(3, '#46001', '0', 1000, '', 0, '', '2020-12-15 11:16:36'),
(4, '#46001', '0', 1200, '', 0, '', '2020-12-15 11:19:14'),
(5, '#46001', '0', 250, '', 0, '', '2020-12-15 11:20:56'),
(6, '#46001', '0', 950, '', 0, '', '2020-12-15 11:38:42'),
(7, '#46001', '0', 350, '', 0, '', '2020-12-15 11:40:08'),
(8, '#46001', '0', 250, '', 0, '', '2020-12-15 11:40:42'),
(9, '#46001', '0', 250, '', 0, '', '2020-12-15 11:40:44'),
(10, '#46001', '0', 250, '', 0, '', '2020-12-15 11:40:44'),
(11, '#46001', '0', 250, '', 0, '', '2020-12-15 11:40:45'),
(12, '#46001', '0', 350, '', 0, '', '2020-12-15 11:41:03'),
(13, '#46001', '0', 350, '', 0, '', '2020-12-15 11:41:14'),
(14, '#46001', '0', 350, '', 0, '', '2020-12-15 11:41:32'),
(15, '#46001', '0', 550, '', 0, '', '2020-12-15 11:42:31'),
(16, '#46001', '0', 150, '', 0, '', '2020-12-15 11:42:47'),
(17, '#46001', '0', 250, '', 0, '', '2020-12-15 11:43:05'),
(18, '#46001', '0', 450, '', 0, '', '2020-12-15 11:43:17'),
(19, '#46001', '0', 250, '', 0, '', '2020-12-15 11:44:58'),
(20, '#46001', '0', 250, '', 0, '', '2020-12-15 11:51:21'),
(21, '#46001', '0', 1200, '', 0, '', '2020-12-15 11:51:39'),
(22, '#46001', '0', 450, '', 0, '', '2020-12-15 11:54:08'),
(23, '#46001', '0', 450, '', 0, '', '2020-12-15 11:56:06'),
(24, '#46001', '0', 0, '', 0, '', '2020-12-15 11:56:23'),
(25, '#46001', '0', 1450, '', 0, '', '2020-12-15 11:56:33'),
(26, '#46001', '0', 1200, '', 0, '', '2020-12-15 11:57:27'),
(27, '#46001', '0', 1200, '', 0, '', '2020-12-15 11:57:47'),
(28, '#46001', '0', 1350, '', 0, '', '2020-12-15 11:58:13'),
(29, '#46001', '0', 1200, '', 0, '', '2020-12-15 11:58:42'),
(30, '#227692', '0', 1350, '', 0, '', '2020-12-16 07:18:02'),
(31, '#418579', '0', 1050, '', 0, '', '2020-12-16 07:18:35'),
(32, '#835919', '0', 350, '', 0, '', '2020-12-16 07:19:22'),
(33, '#457923', '0', 700, '', 0, '', '2020-12-16 07:57:03'),
(34, '#842651', '0', 250, '', 0, '', '2020-12-16 08:13:18'),
(35, '#302985', '0', 400, '', 0, '', '2020-12-16 08:14:36'),
(36, '#664021', '0', 250, '', 0, '', '2020-12-16 09:42:24'),
(37, '#813339', '0', 250, '', 0, '', '2020-12-16 10:16:01'),
(38, '#791197', '0', 100, '', 0, '', '2020-12-16 10:18:54'),
(39, '#587314', '0', 100, '', 0, '', '2020-12-16 10:19:25'),
(40, '#747070', '0', 100, '', 0, '', '2020-12-16 10:20:20'),
(41, '#33457', '0', 100, '', 0, '', '2020-12-16 10:20:58'),
(42, '#423373', '0', 100, '', 0, '', '2020-12-16 10:22:20'),
(43, '#592179', '0', 200, '', 0, '', '2020-12-16 10:25:06'),
(44, '#415386', '0', 100, '', 0, '', '2020-12-16 10:25:39'),
(45, '#282592', '0', 200, '', 0, '', '2020-12-16 10:26:11'),
(46, '#122993', '0', 100, '', 0, '', '2020-12-16 10:27:02'),
(47, '#732774', '0', 850, '', 0, '', '2020-12-16 10:27:33'),
(48, '#768238', '0', 200, '', 0, '', '2020-12-16 10:28:44'),
(49, '#664746', '0', 100, '', 0, '', '2020-12-16 10:29:16'),
(50, '#919442', '0', 350, '', 0, '', '2020-12-16 10:29:42'),
(51, '#504525', '0', 200, '', 0, '', '2020-12-16 10:44:18'),
(52, '#498528', '0', 250, '', 0, '', '2020-12-16 10:45:12'),
(53, '#587395', '0', 100, '', 0, '', '2020-12-16 10:46:22'),
(54, '#179650', '0', 100, '', 0, '', '2020-12-16 10:46:49'),
(55, '#228037', '0', 250, '', 0, '', '2020-12-16 10:47:46'),
(56, '#108767', 'Syed Ali Abbas Zaidi', 300, '', 0, '', '2020-12-17 08:44:25'),
(57, '#305250', '', 0, '', 0, '', '2020-12-17 10:57:39'),
(58, '#589105', '', 0, '', 0, '', '2020-12-17 10:59:25'),
(59, '#458528', '', 0, '', 0, '', '2020-12-17 10:59:35'),
(60, '#319086', 'Mursil', 250, '', 0, '', '2020-12-17 11:08:43'),
(61, '#521815', 'Mursil', 0, '', 0, '', '2020-12-17 11:12:34'),
(62, '#587763', 'Ali', 250, '', 0, '', '2020-12-17 11:14:08'),
(63, '#517235', '', 0, '', 0, '', '2020-12-17 11:16:55'),
(64, '#978951', '', 250, '', 0, '', '2020-12-17 11:17:57'),
(65, '#481817', 'imran', 250, '', 0, '', '2020-12-17 11:18:13'),
(66, '#830733', 'Syed Ali Abbas Zaidi', 0, '', 0, '', '2020-12-17 11:24:13'),
(67, '#608788', 'Syed Ali Abbas Zaidi', 250, '', 0, '', '2020-12-17 11:24:50'),
(68, '#880749', '', 0, '', 0, '', '2020-12-17 11:27:15'),
(69, '#336827', 'Mursil', 250, '', 0, '', '2020-12-17 11:28:41'),
(70, '#862028', 'Mursil', 250, '', 122, '', '2020-12-17 11:29:31'),
(71, '#594357', 'Syed Ali Abbas Zaidi', 950, '', 0, '', '2020-12-18 07:10:49'),
(72, '#565752', 'Mursil', 0, '', 0, '', '2020-12-18 08:02:09'),
(73, '#725315', 'Syed Ali Abbas Zaidi', 250, '', 0, '', '2020-12-18 10:39:37'),
(74, '#747821', 'Syed Ali Abbas Zaidi', 250, '', 0, '', '2020-12-18 10:41:05'),
(75, '#431962', 'Syed Ali Abbas Zaidi', 150, '', 0, '', '2020-12-18 10:42:08'),
(76, '#384879', 'Syed Ali Abbas Zaidi', 0, '', 0, '', '2020-12-18 10:55:43'),
(77, '#949208', 'Syed Ali Abbas Zaidi', 250, '', 0, '', '2020-12-18 10:57:31'),
(78, '#567890', 'Syed Ali Abbas Zaidi', 250, '', 0, '', '2020-12-18 11:03:45'),
(79, '#833926', 'Syed Ali Abbas Zaidi', 250, '', 0, '', '2020-12-18 11:05:23'),
(80, '#883817', '', 250, '', 0, '', '2020-12-18 11:06:00'),
(81, '#812072', '67', 250, '', 0, '', '2020-12-18 11:08:05'),
(82, '#741260', 'Mursil', 250, '', 0, '', '2020-12-18 11:10:38'),
(83, '#492756', '67', 250, '', 0, '', '2020-12-18 11:16:25'),
(84, '#889513', '67', 250, '', 0, '', '2020-12-18 11:16:58'),
(85, '#161972', '67', 250, '', 0, '', '2020-12-18 11:17:24'),
(86, '#435716', 'Mursil', 250, '', 0, '', '2020-12-18 11:19:42'),
(87, '#301242', '67', 250, '', 0, '', '2020-12-18 11:21:05'),
(88, '#277301', '67', 250, '', 0, '', '2020-12-18 11:22:28'),
(89, '#683579', '67', 100, '', 0, '', '2020-12-18 11:23:00'),
(90, '#278709', '67', 250, '', 0, '', '2020-12-18 11:25:13'),
(91, '#224041', '', 0, '', 33, '', '2020-12-18 11:26:44'),
(92, '#782730', '', 0, '', 222, '', '2020-12-18 11:27:09'),
(93, '#953150', 'Syed Ali Abbas Zaidi', 250, '', 12, '', '2020-12-18 11:27:42'),
(94, '#565366', 'Syed Ali Abbas Zaidi', 100, '', 11, '', '2020-12-18 11:30:12'),
(95, '#885849', 'Syed Ali Zaidi', 250, '', 89, '', '2020-12-18 11:31:03'),
(96, '#549058', 'Syed Ali Abbas Zaidi', 250, '', 11, '', '2020-12-18 11:40:27'),
(97, '#467311', '', 300, '', 0, '', '2020-12-19 06:55:20'),
(98, '#458969', '', 400, '', 0, '', '2020-12-19 06:55:38'),
(99, '#718133', '', 250, '', 0, '', '2020-12-19 06:55:53'),
(100, '#54711', '', 250, '', 0, '', '2020-12-19 06:56:28'),
(101, '#11156', '', 250, '', 0, '', '2020-12-19 07:03:42'),
(102, '#612190', '', 250, '', 11, '', '2020-12-19 07:04:15'),
(103, '#652259', '67', 150, '', 0, '', '2020-12-19 07:05:30'),
(104, '#516137', '67', 250, '', 111, '', '2020-12-19 07:08:01'),
(105, '#863937', '67', 250, '', 100, '', '2020-12-19 07:54:10'),
(106, '#498275', '67', 250, '', 150, '', '2020-12-19 07:55:45'),
(107, '#77554', '67', 250, '', 0, '', '2020-12-19 07:59:18'),
(108, '#94135', '67', 250, '', 0, '', '2020-12-19 08:00:03'),
(109, '#926703', '67', 250, '', 0, '', '2020-12-19 08:03:22'),
(110, '#895745', '67', 250, '', 0, '', '2020-12-19 08:10:38'),
(111, '#353914', '67', 250, '', 0, '', '2020-12-19 08:11:12'),
(112, '#125138', '67', 250, '', 0, '', '2020-12-19 08:12:14'),
(113, '#921494', '67', 250, '', 0, '', '2020-12-19 08:12:59'),
(114, '#133719', '67', 250, '', 0, '', '2020-12-19 08:14:30'),
(115, '#626052', '67', 250, '', 0, '', '2020-12-19 08:15:11'),
(116, '#991983', '67', 250, '', 0, '', '2020-12-19 08:16:46'),
(117, '#655938', '67', 250, '', 0, '', '2020-12-19 08:20:02'),
(118, '#694366', '67', 250, '', 0, '', '2020-12-19 08:22:52'),
(119, '#913427', '67', 250, '', 0, '', '2020-12-19 08:30:29'),
(120, '#718416', '67', 250, '', 0, '', '2020-12-19 08:30:54'),
(121, '#370044', '67', 250, '', 150, '', '2020-12-19 08:34:28'),
(122, '#370778', 'ddd', 250, '', 0, '', '2020-12-19 08:57:25'),
(123, '#701897', '', 250, '', 0, '', '2020-12-19 08:59:40'),
(124, '#701897', 'sddddf', 250, '', 1223, '', '2020-12-19 09:01:31'),
(125, '#194199', 'Syed Ali Abbas Zaidi', 400, '2020-12-31', 100, '', '2020-12-19 09:13:18'),
(126, '#194199', '', 650, '', 0, '', '2020-12-19 09:13:50'),
(127, '#976616', '', 250, '', 0, '', '2020-12-19 09:18:10'),
(128, '#998586', '', 250, '', 0, '', '2020-12-19 09:21:52'),
(129, '#124836', 'Syed Ali Abbas Zaidi', 250, '2020-12-31', 1234, '', '2020-12-19 09:25:36'),
(130, '#419103', '', 250, '', 0, '', '2020-12-19 09:30:25'),
(131, '#622972', '', 1900, '', 0, '', '2020-12-19 09:31:47'),
(132, '#399555', '', 250, '', 0, '', '2020-12-19 10:09:48'),
(133, '#690639', '', 600, '', 0, '', '2020-12-19 10:16:40'),
(134, '#329394', '', 1200, '', 0, '', '2020-12-19 10:18:43'),
(135, '#802226', '', 1200, '', 0, '', '2020-12-19 10:20:07'),
(136, '#802226', '', 1200, '', 0, '', '2020-12-19 10:20:09'),
(137, '#802226', '', 1200, '', 0, '', '2020-12-19 10:20:11'),
(138, '#697950', '', 1200, '', 0, '', '2020-12-19 10:20:19'),
(139, '#697950', '', 1200, '', 0, '', '2020-12-19 10:20:20'),
(140, '#697950', '', 1200, '', 0, '', '2020-12-19 10:20:34'),
(141, '#52596', '', 1200, '', 0, '', '2020-12-19 10:20:58'),
(142, '#359595', '', 1200, '', 0, '', '2020-12-19 10:21:36'),
(143, '#512840', '', 1200, '', 0, '', '2020-12-19 10:23:47'),
(144, '#512840', '', 2650, '', 0, '', '2020-12-19 10:24:22'),
(145, '#470327', '', 450, '', 0, '', '2020-12-19 10:27:47'),
(146, '#656077', '', 450, '', 0, '', '2020-12-19 10:28:56'),
(147, '#656077', '', 950, '', 0, '', '2020-12-19 10:29:06'),
(148, '#656077', '', 2550, '', 0, '', '2020-12-19 10:29:18'),
(149, '#697830', '', 1850, '', 0, '', '2020-12-19 10:29:50'),
(150, '#697830', '', 1200, '', 0, '', '2020-12-19 10:29:57'),
(165, '#111', '', 1400, '', 0, 'return', '2020-12-21 19:51:25'),
(166, '#111', '', 2900, '', 0, 'return', '2020-12-21 19:52:47'),
(167, '#111', '', 5800, '', 0, 'return', '2020-12-21 19:53:18'),
(168, '#111', '', 11600, '', 0, 'return', '2020-12-21 19:54:41'),
(169, '#240561', '', 250, '', 0, 'sale', '2020-12-21 19:55:08');

-- --------------------------------------------------------

--
-- Table structure for table `sale_details`
--

CREATE TABLE `sale_details` (
  `id` int(11) NOT NULL,
  `invoice_num` text NOT NULL,
  `status` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `price` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sale_details`
--

INSERT INTO `sale_details` (`id`, `invoice_num`, `status`, `product_id`, `product_name`, `price`, `quatity`, `total_price`) VALUES
(1, '#46001', '', 3, 'burger', 150, 1, 150),
(2, '#46001', '', 4, 'pizza', 200, 1, 200),
(3, '#46001', '', 6, 'chicken', 500, 1, 500),
(4, '#46001', '', 7, 'fanta1', 700, 1, 700),
(5, '#46001', '', 3, 'burger', 150, 1, 150),
(6, '#46001', '', 2, 'Dew', 100, 1, 100),
(7, '#46001', '', 7, 'fanta1', 700, 1, 700),
(8, '#46001', '', 3, 'burger', 150, 1, 150),
(9, '#46001', '', 2, 'Dew', 100, 1, 100),
(10, '#46001', '', 3, 'burger', 150, 1, 150),
(11, '#46001', '', 4, 'pizza', 200, 1, 200),
(12, '#46001', '', 2, 'Dew', 100, 1, 100),
(13, '#46001', '', 3, 'burger', 150, 1, 150),
(14, '#46001', '', 2, 'Dew', 100, 1, 100),
(15, '#46001', '', 3, 'burger', 150, 1, 150),
(16, '#46001', '', 2, 'Dew', 100, 1, 100),
(17, '#46001', '', 3, 'burger', 150, 1, 150),
(18, '#46001', '', 2, 'Dew', 100, 1, 100),
(19, '#46001', '', 3, 'burger', 150, 1, 150),
(20, '#46001', '', 3, 'burger', 150, 1, 150),
(21, '#46001', '', 4, 'pizza', 200, 1, 200),
(22, '#46001', '', 3, 'burger', 150, 1, 150),
(23, '#46001', '', 4, 'pizza', 200, 1, 200),
(24, '#46001', '', 3, 'burger', 150, 1, 150),
(25, '#46001', '', 4, 'pizza', 200, 1, 200),
(26, '#46001', '', 3, 'burger', 150, 1, 150),
(27, '#46001', '', 2, 'Dew', 100, 4, 400),
(28, '#46001', '', 3, 'burger', 150, 1, 150),
(29, '#46001', '', 2, 'Dew', 100, 1, 100),
(30, '#46001', '', 3, 'burger', 150, 1, 150),
(31, '#46001', '', 2, 'Dew', 100, 1, 100),
(32, '#46001', '', 3, 'burger', 150, 1, 150),
(33, '#46001', '', 4, 'pizza', 200, 1, 200),
(34, '#46001', '', 2, 'Dew', 100, 1, 100),
(35, '#46001', '', 3, 'burger', 150, 1, 150),
(36, '#46001', '', 2, 'Dew', 100, 1, 100),
(37, '#46001', '', 3, 'burger', 150, 1, 150),
(38, '#46001', '', 7, 'fanta1', 700, 1, 700),
(39, '#46001', '', 6, 'chicken', 500, 1, 500),
(40, '#46001', '', 2, 'Dew', 100, 1, 100),
(41, '#46001', '', 3, 'burger', 150, 1, 150),
(42, '#46001', '', 4, 'pizza', 200, 1, 200),
(43, '#46001', '', 2, 'Dew', 100, 1, 100),
(44, '#46001', '', 3, 'burger', 150, 1, 150),
(45, '#46001', '', 4, 'pizza', 200, 1, 200),
(46, '#46001', '', 7, 'fanta1', 700, 1, 700),
(47, '#46001', '', 6, 'chicken', 500, 1, 500),
(48, '#46001', '', 2, 'Dew', 100, 1, 100),
(49, '#46001', '', 3, 'burger', 150, 1, 150),
(50, '#46001', '', 7, 'fanta1', 700, 1, 700),
(51, '#46001', '', 6, 'chicken', 500, 1, 500),
(52, '#46001', '', 7, 'fanta1', 700, 1, 700),
(53, '#46001', '', 6, 'chicken', 500, 1, 500),
(54, '#46001', '', 6, 'chicken', 500, 1, 500),
(55, '#46001', '', 7, 'fanta1', 700, 1, 700),
(56, '#46001', '', 3, 'burger', 150, 1, 150),
(57, '#46001', '', 6, 'chicken', 500, 1, 500),
(58, '#46001', '', 7, 'fanta1', 700, 1, 700),
(59, '#227692', '', 7, 'fanta1', 700, 1, 700),
(60, '#227692', '', 6, 'chicken', 500, 1, 500),
(61, '#227692', '', 3, 'burger', 150, 1, 150),
(62, '#418579', '', 7, 'fanta1', 700, 1, 700),
(63, '#418579', '', 3, 'burger', 150, 1, 150),
(64, '#418579', '', 4, 'pizza', 200, 1, 200),
(65, '#835919', '', 3, 'burger', 150, 1, 150),
(66, '#835919', '', 4, 'pizza', 200, 1, 200),
(67, '#457923', '', 3, 'burger', 150, 2, 300),
(68, '#457923', '', 2, 'Dew', 100, 2, 200),
(69, '#457923', '', 4, 'pizza', 200, 1, 200),
(70, '#842651', '', 3, 'burger', 150, 1, 150),
(71, '#842651', '', 2, 'Dew', 100, 1, 100),
(72, '#302985', '', 3, 'burger', 150, 2, 300),
(73, '#302985', '', 2, 'Dew', 100, 1, 100),
(74, '#664021', '', 3, 'burger', 150, 1, 150),
(75, '#664021', '', 2, 'Dew', 100, 1, 100),
(76, '#813339', '', 2, 'Dew', 100, 1, 100),
(77, '#813339', '', 3, 'burger', 150, 1, 150),
(78, '#791197', '', 2, 'Dew', 100, 1, 100),
(79, '#587314', '', 2, 'Dew', 100, 1, 100),
(80, '#747070', '', 2, 'Dew', 100, 1, 100),
(81, '#33457', '', 2, 'Dew', 100, 1, 100),
(82, '#423373', '', 2, 'Dew', 100, 1, 100),
(83, '#592179', '', 2, 'Dew', 100, 2, 200),
(84, '#415386', '', 2, 'Dew', 100, 1, 100),
(85, '#282592', '', 2, 'Dew', 100, 2, 200),
(86, '#122993', '', 2, 'Dew', 100, 1, 100),
(87, '#732774', '', 2, 'Dew', 100, 7, 700),
(88, '#732774', '', 3, 'burger', 150, 1, 150),
(89, '#768238', '', 2, 'Dew', 100, 2, 200),
(90, '#664746', '', 2, 'Dew', 100, 1, 100),
(91, '#919442', '', 2, 'Dew', 100, 2, 200),
(92, '#919442', '', 3, 'burger', 150, 1, 150),
(93, '#504525', '', 2, 'Dew', 100, 2, 200),
(94, '#498528', '', 2, 'Dew', 100, 1, 100),
(95, '#498528', '', 3, 'burger', 150, 1, 150),
(96, '#587395', '', 2, 'Dew', 100, 1, 100),
(97, '#179650', '', 2, 'Dew', 100, 1, 100),
(98, '#228037', '', 2, 'Dew', 100, 1, 100),
(99, '#228037', '', 3, 'burger', 150, 1, 150),
(100, '#108767', '', 4, 'pizza', 200, 1, 200),
(101, '#108767', '', 2, 'Dew', 100, 1, 100),
(102, '#319086', '', 3, 'burger', 150, 1, 150),
(103, '#319086', '', 2, 'Dew', 100, 1, 100),
(104, '#587763', '', 3, 'burger', 150, 1, 150),
(105, '#587763', '', 2, 'Dew', 100, 1, 100),
(106, '#978951', '', 3, 'burger', 150, 1, 150),
(107, '#978951', '', 2, 'Dew', 100, 1, 100),
(108, '#481817', '', 3, 'burger', 150, 1, 150),
(109, '#481817', '', 2, 'Dew', 100, 1, 100),
(110, '#336827', '', 2, 'Dew', 100, 1, 100),
(111, '#336827', '', 3, 'burger', 150, 1, 150),
(112, '#862028', '', 2, 'Dew', 100, 1, 100),
(113, '#862028', '', 3, 'burger', 150, 1, 150),
(114, '#594357', '', 2, 'Dew', 100, 1, 100),
(115, '#594357', '', 3, 'burger', 150, 1, 150),
(116, '#594357', '', 7, 'fanta1', 700, 1, 700),
(117, '#725315', '', 2, 'Dew', 100, 1, 100),
(118, '#725315', '', 3, 'burger', 150, 1, 150),
(119, '#747821', '', 2, 'Dew', 100, 1, 100),
(120, '#747821', '', 3, 'burger', 150, 1, 150),
(121, '#431962', '', 3, 'burger', 150, 1, 150),
(122, '#949208', '', 2, 'Dew', 100, 1, 100),
(123, '#949208', '', 3, 'burger', 150, 1, 150),
(124, '#567890', '', 2, 'Dew', 100, 1, 100),
(125, '#567890', '', 3, 'burger', 150, 1, 150),
(126, '#833926', '', 3, 'burger', 150, 1, 150),
(127, '#833926', '', 2, 'Dew', 100, 1, 100),
(128, '#883817', '', 2, 'Dew', 100, 1, 100),
(129, '#883817', '', 3, 'burger', 150, 1, 150),
(130, '#812072', '', 2, 'Dew', 100, 1, 100),
(131, '#812072', '', 3, 'burger', 150, 1, 150),
(132, '#741260', '', 2, 'Dew', 100, 1, 100),
(133, '#741260', '', 3, 'burger', 150, 1, 150),
(134, '#492756', '', 2, 'Dew', 100, 1, 100),
(135, '#492756', '', 3, 'burger', 150, 1, 150),
(136, '#889513', '', 2, 'Dew', 100, 1, 100),
(137, '#889513', '', 3, 'burger', 150, 1, 150),
(138, '#161972', '', 3, 'burger', 150, 1, 150),
(139, '#161972', '', 2, 'Dew', 100, 1, 100),
(140, '#435716', '', 2, 'Dew', 100, 1, 100),
(141, '#435716', '', 3, 'burger', 150, 1, 150),
(142, '#301242', '', 2, 'Dew', 100, 1, 100),
(143, '#301242', '', 3, 'burger', 150, 1, 150),
(144, '#277301', '', 3, 'burger', 150, 1, 150),
(145, '#277301', '', 2, 'Dew', 100, 1, 100),
(146, '#683579', '', 2, 'Dew', 100, 1, 100),
(147, '#278709', '', 2, 'Dew', 100, 1, 100),
(148, '#278709', '', 3, 'burger', 150, 1, 150),
(149, '#953150', '', 2, 'Dew', 100, 1, 100),
(150, '#953150', '', 3, 'burger', 150, 1, 150),
(151, '#565366', '', 2, 'Dew', 100, 1, 100),
(152, '#885849', '', 2, 'Dew', 100, 1, 100),
(153, '#885849', '', 3, 'burger', 150, 1, 150),
(154, '#549058', '', 2, 'Dew', 100, 1, 100),
(155, '#549058', '', 3, 'burger', 150, 1, 150),
(156, '#467311', '', 2, 'Dew', 100, 1, 100),
(157, '#467311', '', 4, 'pizza', 200, 1, 200),
(158, '#458969', '', 2, 'Dew', 100, 1, 100),
(159, '#458969', '', 3, 'burger', 150, 2, 300),
(160, '#718133', '', 2, 'Dew', 100, 1, 100),
(161, '#718133', '', 3, 'burger', 150, 1, 150),
(162, '#54711', '', 2, 'Dew', 100, 1, 100),
(163, '#54711', '', 3, 'burger', 150, 1, 150),
(164, '#11156', '', 2, 'Dew', 100, 1, 100),
(165, '#11156', '', 3, 'burger', 150, 1, 150),
(166, '#612190', '', 2, 'Dew', 100, 1, 100),
(167, '#612190', '', 3, 'burger', 150, 1, 150),
(168, '#652259', '', 3, 'burger', 150, 1, 150),
(169, '#516137', '', 2, 'Dew', 100, 1, 100),
(170, '#516137', '', 3, 'burger', 150, 1, 150),
(171, '#863937', '', 2, 'Dew', 100, 1, 100),
(172, '#863937', '', 3, 'burger', 150, 1, 150),
(173, '#498275', '', 2, 'Dew', 100, 1, 100),
(174, '#498275', '', 3, 'burger', 150, 1, 150),
(175, '#77554', '', 2, 'Dew', 100, 1, 100),
(176, '#77554', '', 3, 'burger', 150, 1, 150),
(177, '#94135', '', 2, 'Dew', 100, 1, 100),
(178, '#94135', '', 3, 'burger', 150, 1, 150),
(179, '#926703', '', 2, 'Dew', 100, 1, 100),
(180, '#926703', '', 3, 'burger', 150, 1, 150),
(181, '#895745', '', 2, 'Dew', 100, 1, 100),
(182, '#895745', '', 3, 'burger', 150, 1, 150),
(183, '#353914', '', 2, 'Dew', 100, 1, 100),
(184, '#353914', '', 3, 'burger', 150, 1, 150),
(185, '#125138', '', 2, 'Dew', 100, 1, 100),
(186, '#125138', '', 3, 'burger', 150, 1, 150),
(187, '#921494', '', 2, 'Dew', 100, 1, 100),
(188, '#921494', '', 3, 'burger', 150, 1, 150),
(189, '#133719', '', 2, 'Dew', 100, 1, 100),
(190, '#133719', '', 3, 'burger', 150, 1, 150),
(191, '#626052', '', 2, 'Dew', 100, 1, 100),
(192, '#626052', '', 3, 'burger', 150, 1, 150),
(193, '#991983', '', 2, 'Dew', 100, 1, 100),
(194, '#991983', '', 3, 'burger', 150, 1, 150),
(195, '#655938', '', 2, 'Dew', 100, 1, 100),
(196, '#655938', '', 3, 'burger', 150, 1, 150),
(197, '#694366', '', 2, 'Dew', 100, 1, 100),
(198, '#694366', '', 3, 'burger', 150, 1, 150),
(199, '#913427', '', 2, 'Dew', 100, 1, 100),
(200, '#913427', '', 3, 'burger', 150, 1, 150),
(201, '#718416', '', 2, 'Dew', 100, 1, 100),
(202, '#718416', '', 3, 'burger', 150, 1, 150),
(203, '#370044', '', 2, 'Dew', 100, 1, 100),
(204, '#370044', '', 3, 'burger', 150, 1, 150),
(205, '#370778', '', 2, 'Dew', 100, 1, 100),
(206, '#370778', '', 3, 'burger', 150, 1, 150),
(207, '#701897', '', 2, 'Dew', 100, 1, 100),
(208, '#701897', '', 3, 'burger', 150, 1, 150),
(209, '#701897', '', 2, 'Dew', 100, 1, 100),
(210, '#701897', '', 3, 'burger', 150, 1, 150),
(211, '#194199', '', 2, 'Dew', 100, 1, 100),
(212, '#194199', '', 3, 'burger', 150, 2, 300),
(213, '#194199', '', 2, 'Dew', 100, 2, 200),
(214, '#194199', '', 3, 'burger', 150, 3, 450),
(215, '#976616', '', 2, 'Dew', 100, 1, 100),
(216, '#976616', '', 3, 'burger', 150, 1, 150),
(217, '#998586', '', 2, 'Dew', 100, 1, 100),
(218, '#998586', '', 3, 'burger', 150, 1, 150),
(219, '#124836', '', 2, 'Dew', 100, 1, 100),
(220, '#124836', '', 3, 'burger', 150, 1, 150),
(221, '#419103', '', 2, 'Dew', 100, 1, 100),
(222, '#419103', '', 3, 'burger', 150, 1, 150),
(223, '#622972', '', 6, 'chicken', 500, 1, 500),
(224, '#622972', '', 7, 'fanta1', 700, 2, 1400),
(225, '#399555', '', 2, 'Dew', 100, 1, 100),
(226, '#399555', '', 3, 'burger', 150, 1, 150),
(227, '#690639', '', 6, 'chicken', 500, 1, 500),
(228, '#111', '', 2, 'Dew', 100, 1, 100),
(229, '#329394', '', 6, 'chicken', 500, 1, 500),
(230, '#329394', '', 7, 'fanta1', 700, 1, 700),
(231, '#802226', '', 6, 'chicken', 500, 1, 500),
(232, '#802226', '', 7, 'fanta1', 700, 1, 700),
(233, '#802226', '', 6, 'chicken', 500, 1, 500),
(234, '#802226', '', 7, 'fanta1', 700, 1, 700),
(235, '#802226', '', 6, 'chicken', 500, 1, 500),
(236, '#802226', '', 7, 'fanta1', 700, 1, 700),
(237, '#697950', '', 7, 'fanta1', 700, 1, 700),
(238, '#697950', '', 6, 'chicken', 500, 1, 500),
(239, '#697950', '', 7, 'fanta1', 700, 1, 700),
(240, '#697950', '', 6, 'chicken', 500, 1, 500),
(241, '#697950', '', 7, 'fanta1', 700, 1, 700),
(242, '#697950', '', 6, 'chicken', 500, 1, 500),
(243, '#52596', '', 6, 'chicken', 500, 1, 500),
(244, '#52596', '', 7, 'fanta1', 700, 1, 700),
(245, '#359595', '', 6, 'chicken', 500, 1, 500),
(246, '#111', '', 7, 'fanta1', 700, 1, 700),
(247, '#111', '', 7, 'fanta1', 700, 1, 700),
(308, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(309, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(310, '#111', 'return', 2, 'Dew', 100, 1, 100),
(311, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(312, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(313, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(314, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(315, '#111', 'return', 2, 'Dew', 100, 1, 100),
(316, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(317, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(318, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(319, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(320, '#111', 'return', 2, 'Dew', 100, 1, 100),
(321, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(322, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(323, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(324, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(325, '#111', 'return', 2, 'Dew', 100, 1, 100),
(326, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(327, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(328, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(329, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(330, '#111', 'return', 2, 'Dew', 100, 1, 100),
(331, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(332, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(333, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(334, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(335, '#111', 'return', 2, 'Dew', 100, 1, 100),
(336, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(337, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(338, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(339, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(340, '#111', 'return', 2, 'Dew', 100, 1, 100),
(341, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(342, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(343, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(344, '#111', 'return', 7, 'fanta1', 700, 1, 700),
(345, '#240561', 'sale', 2, 'Dew', 100, 1, 100),
(346, '#240561', 'sale', 3, 'burger', 150, 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL COMMENT '1 for seller 2 for active',
  `name` varchar(255) DEFAULT NULL,
  `seller_phone` varchar(255) DEFAULT NULL,
  `seller_account` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `seller_cat` varchar(255) DEFAULT NULL,
  `rating` varchar(255) DEFAULT NULL,
  `refrence_num` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `insta` varchar(255) DEFAULT NULL,
  `mail_id` varchar(255) DEFAULT NULL,
  `other` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `type`, `name`, `seller_phone`, `seller_account`, `description`, `seller_cat`, `rating`, `refrence_num`, `fb`, `twitter`, `tiktok`, `web`, `youtube`, `insta`, `mail_id`, `other`) VALUES
(1, '2', 'Bakers', '55635353', 'ghfghfh', 'tHIS IS DHFH', 'drink ', 'Rating 4', '09090990', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(2, '2', 'demo', '98998999898', '65678766878', 'thisjijdklaslmddsml', 'fast food', 'Rating 5', 'sdksdks', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', '', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(3, '1', 'Pepsi ', '78678756t', 'y6r76r', 'dkljkgjkjjksj', 'fast food', 'Rating 3', 'sdnsnns', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(4, '1', 'afaq', '03025291559', '1283923782983929', '', '', 'Rating 1', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sellerinactive_products`
--

CREATE TABLE `sellerinactive_products` (
  `id` int(11) NOT NULL,
  `inactive_pro_id` varchar(255) DEFAULT NULL,
  `inactive_pro_price` varchar(255) DEFAULT NULL,
  `inactive_pro_phone` varchar(255) DEFAULT NULL,
  `seller_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellerinactive_products`
--

INSERT INTO `sellerinactive_products` (`id`, `inactive_pro_id`, `inactive_pro_price`, `inactive_pro_phone`, `seller_id`) VALUES
(3, 'Choose One...', '', '', '5'),
(4, 'Choose One...', '', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `seller_active_pro`
--

CREATE TABLE `seller_active_pro` (
  `id` int(11) NOT NULL,
  `seller_id` int(255) DEFAULT NULL,
  `product_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_active_pro`
--

INSERT INTO `seller_active_pro` (`id`, `seller_id`, `product_id`) VALUES
(6, 1, 2),
(7, 1, 3),
(8, 2, 2),
(9, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `seller_dealer`
--

CREATE TABLE `seller_dealer` (
  `id` int(11) NOT NULL,
  `s_dealer_name` varchar(255) DEFAULT NULL,
  `s_contact_number` varchar(255) DEFAULT NULL,
  `s_account_number` varchar(255) DEFAULT NULL,
  `seller_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_dealer`
--

INSERT INTO `seller_dealer` (`id`, `s_dealer_name`, `s_contact_number`, `s_account_number`, `seller_id`) VALUES
(5, '', '', '', 4),
(12, 'Mursil', '66667777789888', '278492829838', 1),
(13, 'Afaq1', '03025291559', '278492829838', 5),
(14, '', '', '', 5),
(15, 'mursil`', '3049034939490', '348938498938', 2),
(16, 'demoo', '388484848448', '2039434903', 3),
(17, 'test', '0495045904095', '0934909540459904', 3);

-- --------------------------------------------------------

--
-- Table structure for table `seller_img`
--

CREATE TABLE `seller_img` (
  `id` int(11) NOT NULL,
  `seller_id` varchar(255) DEFAULT NULL,
  `seller_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_img`
--

INSERT INTO `seller_img` (`id`, `seller_id`, `seller_img`) VALUES
(1, '1', 'images/download (1).png'),
(2, '2', 'images/download.png'),
(3, '3', 'images/download (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `seller_khata`
--

CREATE TABLE `seller_khata` (
  `id` int(11) NOT NULL,
  `seller_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `cash_type` varchar(255) DEFAULT NULL,
  `cash_total` varchar(255) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `type_add` varchar(255) DEFAULT NULL,
  `total` varchar(255) NOT NULL,
  `r_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_khata`
--

INSERT INTO `seller_khata` (`id`, `seller_id`, `date`, `product_id`, `quantity`, `rate`, `cash_type`, `cash_total`, `picture`, `type_add`, `total`, `r_total`) VALUES
(78, '2', '2020-01-01', 'burger', '2', '200', NULL, NULL, NULL, 'Add', '400', '400'),
(79, '2', '2020-01-01', '', '', '', 'Net Payment', '200', 'images/', 'Payment', '200', '200'),
(81, '2', '2020-01-01', 'burger', '1', '200', NULL, NULL, NULL, 'Refund', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `seller_location`
--

CREATE TABLE `seller_location` (
  `id` int(11) NOT NULL,
  `seller_loc` varchar(255) DEFAULT NULL,
  `seller_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_location`
--

INSERT INTO `seller_location` (`id`, `seller_loc`, `seller_id`) VALUES
(7, '', 4),
(16, 'lahore cantt', 1),
(17, 'wah CANTT', 1),
(18, '', 1),
(21, 'lahore cantt', 2),
(22, '', 2),
(23, 'pindi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `seller_notify`
--

CREATE TABLE `seller_notify` (
  `id` int(11) NOT NULL,
  `seller_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_notify`
--

INSERT INTO `seller_notify` (`id`, `seller_id`, `date`, `rate`) VALUES
(1, '', '2222-02-22', '11'),
(2, '', '2022-03-03', '22000'),
(3, '', '2022-02-01', '299'),
(4, '', '2222-02-22', '444'),
(5, '2', '2222-02-22', '300'),
(6, '2', '', ''),
(7, '4', '2020-12-23', '1000'),
(8, '4', '2020-12-09', '213');

-- --------------------------------------------------------

--
-- Table structure for table `seller_other_product`
--

CREATE TABLE `seller_other_product` (
  `id` int(11) NOT NULL,
  `other_product` varchar(255) DEFAULT NULL,
  `other_pro_price` varchar(255) DEFAULT NULL,
  `other_pro_date` varchar(255) DEFAULT NULL,
  `seller_id` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller_other_product`
--

INSERT INTO `seller_other_product` (`id`, `other_product`, `other_pro_price`, `other_pro_date`, `seller_id`) VALUES
(5, '', '', '', '4'),
(12, 'sprite', '455', '2222-02-22', '1'),
(13, 'dew', '6777', '1111-11-11', '1'),
(15, 'sprite', '455', '2020-11-19', '2'),
(16, 'sprite', '455', '2020-11-30', '3');

-- --------------------------------------------------------

--
-- Table structure for table `seller_payment`
--

CREATE TABLE `seller_payment` (
  `id` int(11) NOT NULL,
  `seller_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `cash_type` varchar(255) NOT NULL,
  `cash_total` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type_payment` varchar(255) NOT NULL DEFAULT 'Payment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_payment`
--

INSERT INTO `seller_payment` (`id`, `seller_id`, `date`, `cash_type`, `cash_total`, `pic`, `type_payment`) VALUES
(1, '', '2020-01-01', 'Net Payment', '22', 'images/', 'Payment'),
(2, '', '2020-01-22', 'Udhaar Payment', '2000', 'images/download (2).jpg', 'Payment'),
(3, '', '2020-11-27', 'Net Payment', '1000', 'images/', 'Payment'),
(4, '2', '2222-02-01', 'Net Payment', '200', 'images/', 'Payment'),
(5, '2', '2222-02-01', 'Net Payment', '200', 'images/', 'Payment'),
(6, '2', '1111-11-11', 'Udhaar Payment', '222', 'images/download (1).jpg', 'Payment');

-- --------------------------------------------------------

--
-- Table structure for table `seller_refund`
--

CREATE TABLE `seller_refund` (
  `id` int(11) NOT NULL,
  `seller_id` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `type_refund` varchar(255) NOT NULL DEFAULT 'Refund'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller_refund`
--

INSERT INTO `seller_refund` (`id`, `seller_id`, `date`, `product_id`, `quantity`, `rate`, `type_refund`) VALUES
(1, '3', '22222-02-22', 'NNDss', '1', '200', 'Refund'),
(2, '1', '2020-02-22', 'Burger', '1', '2', 'Refund'),
(3, '2', '2222-02-22', 'ksldfls', '2', '200', 'Refund'),
(4, '4', '2022-05-04', 'HELLO', '2', '20', 'Refund'),
(5, '2', '2222-02-22', '3', '1', '200', 'Refund'),
(6, '2', '2222-02-22', '2', '11', '200', 'Refund');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_todo`
--
ALTER TABLE `add_todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cus_name` (`cus_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_3d_img`
--
ALTER TABLE `product_3d_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_active_seller`
--
ALTER TABLE `product_active_seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_passive_seller`
--
ALTER TABLE `product_passive_seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_details`
--
ALTER TABLE `sale_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellerinactive_products`
--
ALTER TABLE `sellerinactive_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_active_pro`
--
ALTER TABLE `seller_active_pro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_dealer`
--
ALTER TABLE `seller_dealer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_img`
--
ALTER TABLE `seller_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_khata`
--
ALTER TABLE `seller_khata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_location`
--
ALTER TABLE `seller_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_notify`
--
ALTER TABLE `seller_notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_other_product`
--
ALTER TABLE `seller_other_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_payment`
--
ALTER TABLE `seller_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seller_refund`
--
ALTER TABLE `seller_refund`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `add_todo`
--
ALTER TABLE `add_todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_3d_img`
--
ALTER TABLE `product_3d_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_active_seller`
--
ALTER TABLE `product_active_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_passive_seller`
--
ALTER TABLE `product_passive_seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `sale_details`
--
ALTER TABLE `sale_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=347;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sellerinactive_products`
--
ALTER TABLE `sellerinactive_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seller_active_pro`
--
ALTER TABLE `seller_active_pro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `seller_dealer`
--
ALTER TABLE `seller_dealer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `seller_img`
--
ALTER TABLE `seller_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seller_khata`
--
ALTER TABLE `seller_khata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `seller_location`
--
ALTER TABLE `seller_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `seller_notify`
--
ALTER TABLE `seller_notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `seller_other_product`
--
ALTER TABLE `seller_other_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `seller_payment`
--
ALTER TABLE `seller_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller_refund`
--
ALTER TABLE `seller_refund`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
