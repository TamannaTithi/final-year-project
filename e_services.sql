-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2021 at 05:07 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `combo_offers`
--

CREATE TABLE `combo_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_name` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_and_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile_no`, `email`, `service_type`, `service_name`, `time_and_date`, `message`, `footer_email`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Tulip', '01798654389', 'tahmina@gmail.com', NULL, NULL, NULL, 'this is it', NULL, NULL, '2021-03-10 07:23:07', '2021-03-10 07:23:07'),
(5, 'Gri', '01797876543', 'fupy@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 13:08:44', '2021-03-10 13:08:44'),
(6, 'Salvador Leonard123', '01234567094', 'bolozafig@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 13:33:16', '2021-03-10 13:33:16'),
(7, 'Octavia Perry123', '01789657543', 'gesocol@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 13:34:20', '2021-03-10 13:34:20'),
(8, 'Rose Vasquez', '01345679078', 'jegefy@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 13:59:12', '2021-03-10 13:59:12'),
(9, 'Nerea Taylor', '01237869098', 'pejypa@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 13:59:58', '2021-03-10 13:59:58'),
(10, 'Lee Roth', '01678998678', 'hiponos@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:01:06', '2021-03-10 14:01:06'),
(11, 'Merritt Burris', '01567895467', 'lubito@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:01:50', '2021-03-10 14:01:50'),
(12, 'Charlotte Whitney', '09345678989', 'nycaloso@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:02:37', '2021-03-10 14:02:37'),
(13, 'Jenette Ferrell', '01245678908', 'sokidip@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:12:21', '2021-03-10 14:12:21'),
(14, 'MacKensie Cabrera', '05678098876', 'kezaxuv@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:21:38', '2021-03-10 14:21:38'),
(15, 'Cara Dominguez', '09876598765', 'medim@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:27:30', '2021-03-10 14:27:30'),
(16, 'Matthew Shelton', '01234567897', 'mepajonaq@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:36:02', '2021-03-10 14:36:02'),
(17, 'Myles Pope', '09785679098', 'lagu@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:37:57', '2021-03-10 14:37:57'),
(18, 'Lavinia Young', '09876457809', 'puhohato@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:39:13', '2021-03-10 14:39:13'),
(19, 'Shannon Yang', '09876544356', 'nyjisabivi@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:41:59', '2021-03-10 14:41:59'),
(20, 'Women World', '68990008895', 'tahmi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:43:03', '2021-03-10 14:43:03'),
(21, 'Ciara Myers', '07896549867', 'buwob@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:43:53', '2021-03-10 14:43:53'),
(22, 'Quemby Gibson', '09876543123', 'welijyme@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:45:09', '2021-03-10 14:45:09'),
(23, 'Clark Frazier', '09876549090', 'cozefobu@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:48:01', '2021-03-10 14:48:01'),
(24, 'Jolene Ellison', '09876548989', 'mikuw@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:48:33', '2021-03-10 14:48:33'),
(25, 'Cadman Emerson', '09876549090', 'vutedaga@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 14:49:54', '2021-03-10 14:49:54'),
(26, 'Yol', '01234565781', 'teqaqiwuko@mailinator.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 23:43:28', '2021-03-10 23:43:28'),
(27, 'et', '12345678901', 'tahmi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-10 23:45:29', '2021-03-10 23:45:29'),
(28, 'Women World', '1346899990', 'tahmi@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-11 01:18:20', '2021-03-11 01:18:20');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_lists`
--

CREATE TABLE `event_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_lists`
--

INSERT INTO `event_lists` (`id`, `name`, `email`, `date`, `time`, `option_id`, `message`, `slug`, `created_at`, `updated_at`) VALUES
(3, 'Omar Harper', 'dirafer@mailinator.com', NULL, NULL, NULL, NULL, NULL, '2021-03-11 07:11:25', '2021-03-11 07:11:25'),
(4, 'Jordan Lester', 'kelahobywo@mailinator.com', NULL, NULL, NULL, 'Nihil sed voluptas q', NULL, '2021-03-11 08:17:33', '2021-03-11 08:17:33'),
(5, 'Martina Kline', 'qoxinelum@mailinator.com', NULL, NULL, NULL, 'Sunt natus est quia', NULL, '2021-03-11 08:32:45', '2021-03-11 08:32:45'),
(6, 'Jael Carroll', 'senem@mailinator.com', NULL, NULL, NULL, 'Qui amet praesentiu', NULL, '2021-03-12 01:47:29', '2021-03-12 01:47:29'),
(7, 'Cheryl Orr', 'xijudo@mailinator.com', NULL, NULL, NULL, 'Id assumenda ex natu', NULL, '2021-03-12 01:57:40', '2021-03-12 01:57:40'),
(8, 'Jael Neal', 'fifumyzi@mailinator.com', NULL, NULL, NULL, 'Quia alias quia ex d', NULL, '2021-03-12 02:04:56', '2021-03-12 02:04:56'),
(9, 'Alden Kramer', 'hyzurafyh@mailinator.com', NULL, NULL, NULL, 'Debitis quia sit op', NULL, '2021-03-12 02:07:56', '2021-03-12 02:07:56'),
(10, 'Nerea Burton', 'vyki@mailinator.com', NULL, NULL, NULL, 'Sint saepe consequat', NULL, '2021-03-12 02:13:22', '2021-03-12 02:13:22'),
(11, 'Cassidy Marsh', 'cuwytesi@mailinator.com', NULL, NULL, NULL, NULL, NULL, '2021-03-12 02:41:25', '2021-03-12 02:41:25'),
(12, 'Chaney Davis', 'fegekacedy@mailinator.com', NULL, NULL, NULL, NULL, NULL, '2021-03-12 02:41:59', '2021-03-12 02:41:59');

-- --------------------------------------------------------

--
-- Table structure for table `event_venues`
--

CREATE TABLE `event_venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `eventvenue_type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `event_venues`
--

INSERT INTO `event_venues` (`id`, `name`, `description`, `image`, `price`, `eventvenue_type`, `slug`, `created_at`, `updated_at`) VALUES
(9, 'Kushiara', 'This is the largest Event Hall in Sylhet.It is located on Chondipul,Daksin Surma,Sylhet and  we invite you to a welcoming atmosphere in which privacy and luxury are all important.For more info,visit our page:https://www.kichall.com/ or call:+8801798558762', '_7fc0a873c8875c510b6e360748382c6c.jpg', 56, 'Luxury Venue', NULL, '2021-02-23 09:17:34', '2021-02-23 09:32:00'),
(10, 'Khan Palace', '.It is located on sunamgonj road,Sylhet and  we invite you to a welcoming atmosphere in which privacy and luxury are all important.For more info,visit our page:http://kpchbd.com/ or call:+8801730591391', '_d0a3dbc4362752eade62910bd20eff34.jpg', 34, 'Luxury Venue', NULL, '2021-02-23 09:26:09', '2021-02-23 09:32:36'),
(11, 'Hotel Star Pacific', 'This is a premium hotel. It is located at  East Dargah Gate,Sylhet.We can oraganise different oaccasion with beautiful decoration and delicious food items for your special day.', '_20390e3deb4c0a89578cb83172c05a0d.jpg', 25, 'Premium Venue', NULL, '2021-02-23 10:14:46', '2021-02-23 13:50:56'),
(12, 'Hotel Supreme', 'This is a premium hotel. We can oraganise different oaccasion with beautiful decoration and delicious food items for your special day.This is located at Tamabil Road, Mirabazar, Sylhet.', '_50e9dc97cd15659a25b806ea02907570.jpg', 20, 'Premium Venue', NULL, '2021-02-23 10:35:28', '2021-02-23 13:52:29'),
(13, 'Hotel Noorjahan Grand', 'This is a premium hotel. We can oraganise different oaccasion with beautiful decoration and delicious food items for your special day.This is located  Ritz Tower, Dargah Gate, Sylhet.', '_4deba18c6b4517775293ad5e0b125a97.jpg', 25, 'Premium Venue', NULL, '2021-02-23 10:43:53', '2021-02-23 13:53:35'),
(14, 'Rainbow Chinese Restaurant', 'Located at Mirboxtula,Sylhet.The classic combination of warm colours and traditional features help create an intimate and restful environment', '_0b61121305dd9a4aa92bd3369c05fda3.jpg', 22, 'Budget Friendly Venue', NULL, '2021-02-23 11:38:53', '2021-02-23 13:56:18'),
(15, 'Hotel Mira Garden', 'Located at Mira Tower,Mirabazar, Sylhet.The classic combination of warm colours and traditional features help create an intimate and restful environment', '_1c29d87a351fdfd0deb8666ada26663a.jpg', 22, 'Budget Friendly Venue', NULL, '2021-02-23 11:47:29', '2021-02-23 14:02:14'),
(16, 'Garden Inn', 'Located at Shahjalal Uposhohor, Sylhet.The classic combination of warm colours and traditional features help create an intimate and restful environment', '_d482d741d1ffbfe02bb6df1c6b9dfb70.jpg', 20, 'Budget Friendly Venue', NULL, '2021-02-23 11:56:34', '2021-02-23 13:59:19'),
(17, 'Sunrise', 'Located at Pathantula Road,Sylhet.The classic combination of warm colours and traditional features help create an intimate and restful environment', '_9391a33a695e381638396336577e9256.jpg', 22, 'Budget Friendly Venue', NULL, '2021-02-23 12:17:44', '2021-02-23 14:00:40'),
(18, 'Spicy Restaurant', 'Located at City Center, Zindabazar, Sylhet.The classic combination of warm colours and traditional features help create an intimate and restful environment', '_accc8e393ff9de3a4866c67924b3111c.jpg', 20, 'Budget Friendly Venue', NULL, '2021-02-23 12:23:09', '2021-02-23 14:03:08'),
(19, 'Hotel Valley Garden', 'Located at Sobhani, Sylhet.The classic combination of warm colours and traditional features help create an intimate and restful environment', '_ef510982f11a9de748ac74c9b5719be9.jpg', 25, 'Budget Friendly Venue', NULL, '2021-02-23 12:29:48', '2021-02-23 14:04:11'),
(20, 'Ishtikutum Chinese Restaurant', 'Located at Blue Water Shopping Mall,Zindabazar, Sylhet.The classic combination of warm colours and traditional features help create an intimate and restful environment', '_706ba9e5ad68788007a53fdc2bb1dc47.jpg', 28, 'Budget Friendly Venue', NULL, '2021-02-23 12:39:15', '2021-02-23 14:05:29'),
(21, 'Nirvana Inn Hotel-Complex', 'Located at Mirzajungle Road, Sylhet.The classic combination of warm colours and traditional features help create an intimate and restful environment', '_b16597ecfbce650787f58fc1a2be92ee.jpg', 20, 'Budget Friendly Venue', NULL, '2021-02-23 12:45:56', '2021-02-23 14:06:25'),
(22, 'Khan\'s Palace Convention Hall', 'Located at Pathantula Road.We can guarantee that you and your guests will receive first class service and our full attention to ensure that yours is truly a day to remember!', '_e1e53f41c90d7dd483ad217b8733050a.jpg', 20, 'Decoration', NULL, '2021-02-23 13:43:16', '2021-02-23 14:09:47'),
(23, 'Kushiara Convention Hall', 'Located at Chondipul,Daksin Surma,Sylhet We can guarantee that you and your guests will receive first class service and our full attention to ensure that yours is truly a day to remember!', '_d73aa322ccaf693045b2cda6b7e41767.jpg', 34, 'Decoration', NULL, '2021-02-23 14:12:16', '2021-02-23 14:20:54'),
(25, 'Amanullah', 'Located at Arambag,Sylhet. We can guarantee that you and your guests will receive first class service and our full attention to ensure that yours is truly a day to remember!', '_0ff1f46c455d3c62db9b9a36de9f47a0.jpg', 25, 'Decoration', NULL, '2021-02-23 14:18:57', '2021-02-23 14:21:10'),
(26, 'Hotel Noorjahan Grand', 'Located at  Ritz Tower, Dargah Gate, Sylhet.We can guarantee that you and your guests will receive first class service and our full attention to ensure that yours is truly a day to remember!', '_674d2f04e125aa4d056747213cab18fc.jpg', 25, 'Decoration', NULL, '2021-02-23 14:20:19', '2021-02-23 14:20:19'),
(27, 'Hotel Star Pacific', 'Located at East Dargah Gate, Sylhet.We can guarantee that you and your guests will receive first class service and our full attention to ensure that yours is truly a day to remember!', '_0fdacccfd7d944258dbf154d00d1d595.jpg', 22, 'Decoration', NULL, '2021-02-23 14:31:26', '2021-02-23 14:31:26'),
(28, 'Hotel Mira Garden', 'Located at  Mira Tower, Mirabazar, Sylhet.We can guarantee that you and your guests will receive first class service and our full attention to ensure that yours is truly a day to remember!', '_cc8b07a2dd279a121ab6f316b1bde86c.jpg', 20, 'Decoration', NULL, '2021-02-23 14:33:22', '2021-02-23 14:33:22'),
(29, 'Hotel Valley Garrden', 'Located at  Sobhanighat, Sylhet.We can guarantee that you and your guests will receive first class service and our full attention to ensure that yours is truly a day to remember!', '_20b8eb45978296b31d25aabe99830355.jpg', 25, 'Decoration', NULL, '2021-02-23 14:35:02', '2021-02-23 14:35:02'),
(30, 'Rose View Hotel', 'Located at  Uposhohor,Sylhet.We can guarantee that you and your guests will receive first class service and our full attention to ensure that yours is truly a day to remember!', '_6790ec3305744c3f6990d2e43e417c94.jpg', 22, 'Decoration', NULL, '2021-02-23 14:36:15', '2021-02-23 14:36:15'),
(31, NULL, 'When you think of a tropical gateway with your friends or loved ones, when mood is for party, we are here to serve you with our best try', '_0ea3c7eab6287264a1e7d96d363dc045.jpg', 0, 'Last_Slider', NULL, '2021-02-23 15:30:20', '2021-02-23 15:30:20'),
(32, NULL, 'When you think of a tropical gateway with your friends or loved ones, when mood is for party, we are here to serve you with our best try', '_1b25ba69e56d381e8caa4804a9cd58f8.jpg', 0, 'Last_Slider', NULL, '2021-02-23 15:31:53', '2021-02-23 15:31:53'),
(33, NULL, 'When you think of a tropical gateway with your friends or loved ones, when mood is for party, we are here to serve you with our best try', '_f6f942868897fdc77c0aeceec4877a74.jpg', 0, 'Last_Slider', NULL, '2021-02-23 15:32:28', '2021-02-23 15:32:28'),
(34, NULL, 'When you think of a tropical gateway with your friends or loved ones, when mood is for party, we are here to serve you with our best try', '_177926f7dff5944aa8da54bd6492f500.jpg', 0, 'Last_Slider', NULL, '2021-02-23 15:32:52', '2021-02-23 15:32:52'),
(35, NULL, 'When you think of a tropical gateway with your friends or loved ones, when mood is for party, we are here to serve you with our best try', '_f95dcf6939a3448817568fb9f754b535.jpg', 0, 'Last_Slider', NULL, '2021-02-23 15:33:18', '2021-02-23 15:33:18'),
(36, NULL, 'When you think of a tropical gateway with your friends or loved ones, when mood is for party, we are here to serve you with our best try', '_286595c8b645bf1a6da5e857d4aaa984.jpg', 0, 'Last_Slider', NULL, '2021-02-23 15:33:41', '2021-02-23 15:34:55'),
(37, NULL, 'When you think of a tropical gateway with your friends or loved ones, when mood is for party, we are here to serve you with our best try', '_ef9ebff53ca6c71d885e47b3afd204b8.jpg', 0, 'Last_Slider', NULL, '2021-02-23 15:34:05', '2021-03-03 06:59:11'),
(38, NULL, 'When you think of a tropical gateway with your friends or loved ones, when mood is for party, we are here to serve you with our best try', '_dfbad85cd7eecd75acdccd286f134ed5.jpg', 0, 'Last_Slider', NULL, '2021-02-23 15:34:30', '2021-02-23 15:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `hall_type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hall_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_16_101100_create_events_table', 1),
(4, '2020_12_16_101208_create_parlours_table', 1),
(5, '2020_12_16_101237_create_vanues_table', 1),
(6, '2020_12_16_101254_create_photographers_table', 1),
(7, '2020_12_21_084741_create_photographers_images_table', 1),
(8, '2020_12_21_091521_create_parlour_services_table', 1),
(9, '2020_12_21_093959_create_photographer_services_table', 1),
(10, '2020_12_21_094809_create_venue_services_table', 1),
(11, '2021_01_30_094209_create_parlour_images_table', 1),
(12, '2021_02_15_084219_create_offers_table', 1),
(13, '2021_02_17_152958_create_offer2s_table', 1),
(14, '2021_02_17_170504_create_offer_details_table', 1),
(15, '2021_02_17_170550_create_offer_images_table', 1),
(16, '2021_02_19_090202_create_shoppings_table', 1),
(17, '2021_02_19_155540_create_shopping_images_table', 1),
(18, '2021_02_19_155737_create_shopping_details_table', 1),
(19, '2021_02_20_121850_create_special_offers_table', 1),
(20, '2021_02_20_121939_create_combo_offers_table', 1),
(21, '2021_02_20_122117_create_summer_sales_table', 1),
(22, '2021_02_20_135501_create_profile_images_table', 1),
(23, '2021_02_21_103510_create_parlour_books_table', 1),
(24, '2021_02_22_213724_create_venues_table', 2),
(25, '2021_02_23_112047_create_halls_table', 3),
(26, '2021_02_23_113815_create_event_venues_table', 4),
(27, '2021_02_24_160515_create_event_lists_table', 5),
(28, '2021_03_03_150723_create_contacts_table', 6),
(29, '2021_03_10_105321_create_photography_books_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `offer2s`
--

CREATE TABLE `offer2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `name`, `description`, `image`, `offer_type`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Sales On Too Faced', 'Get 50% discount on Too Faced products.Limited offer so hurry up.You will get this offer on kaashmir stall,Al-Hamra shopping mall.Shop no 11.For Details call:01796754661', '_846b0d4e5f5c4ad3f14ba5679832f62c.webp', 'Special Offer', 'sales_on_too_faced', '2021-02-22 13:01:29', '2021-02-22 13:01:29'),
(2, 'Sales On Mac', 'Get 50% discount on all Mac products .Limited offer so hurry up.You will get this offer on Maha,Noyasorok.For Details call:01796754660', '_2d8c668553f3088f612ac483e845420f.webp', 'Special Offer', 'sales_on_mac', '2021-02-22 13:04:31', '2021-02-22 13:07:44'),
(3, 'Sales On Glossier', 'Get 50% discount on all Glossier items.Limited offer so hurry up.You will get this offer on Sylhet Online Shop,ELegance shopping mall.For Details call:01796754606', '_40a247b803a4807935eef6b4a3180a1f.webp', 'Special Offer', 'sales_on_glossier', '2021-02-22 13:10:44', '2021-02-22 13:10:44'),
(4, 'Sales On Gold', 'Get 50% discount on gold jewlleries.Limited offer so hurry up.You will get this offer on Gohona stall.Shop no 11, Al-Hamra shopping mall,7th floor,zindabazar,sylhet,.For Details call:01779675466', '_15d33d785db27c7ec110152d5c09365a.webp', 'Special Offer', 'sales_on_gold', '2021-02-22 13:18:11', '2021-02-22 13:18:11'),
(5, 'Sales On NYX', 'Get 50% discount on Nyx products.Limited offer so hurry up.You will get this offer on Neha stall,Al-Hamra shopping mall.Shop no 11.For Details call:01796075466', '_559ff161315534cbc399249973f80e9a.webp', 'Special Offer', 'sales_on_nyx', '2021-02-22 13:20:34', '2021-02-22 13:20:34'),
(6, 'Sales On Diamond', 'Get 50% discount on diamond jewellaries.Limited offer so hurry up.You will get this offer on Nigar stall,Blue Water shopping mall,Shop no 12,6th floor.For Details call:017936754661', '_9fff0e3c247736b0d8327bca2b5a4bb6.jpg', 'Special Offer', 'sales_on_diamond', '2021-02-22 13:23:15', '2021-02-22 13:23:15'),
(7, 'Upto 50% Discount', 'Get 50% discount on makeup products.Limited offer so hurry up.You will get this offer on Blue Water shopping mall,kaashmir stall.Shop no 18.For Details call:0179675466', '_c12ef0649ec3a64eb445fd0d3d607945.webp', 'Summer Sale', 'upto_50_discount', '2021-02-22 13:26:02', '2021-02-22 13:26:02'),
(8, 'Upto 75% Discount', 'Get 75% discount in this summer on women clothes.Limited offer so hurry up.You will get this offer on Maha,Noyasorok.For Details call:0179675466', '_c62f0547358f26e646406e55ebebb855.jpg', 'Summer Sale', 'upto_75_discount', '2021-02-22 13:28:34', '2021-02-22 14:16:49'),
(9, 'Upto 75% Discount', 'Get 75% discount in this summer on makeup products.Limited offer so hurry up.You will get this offer on City center,niharika store.Shop no 16.For Details call:0179675466', '_8c697f4083266462d6a646ca7ca160b2.webp', 'Summer Sale', 'upto_75_discount', '2021-02-22 14:18:51', '2021-02-22 14:18:51'),
(10, 'Upto 70% Discount', 'Get 70% discount in this summer on bags.Limited offer so hurry up.You will get this offer on Maha,Noyasorok.For Details call:0179675466', '_4430ebbe51fed0011c04a8c0b448c0ab.webp', 'Summer Sale', 'upto_70_discount', '2021-02-22 14:20:23', '2021-02-22 14:22:49'),
(11, 'Upto 60% Discount', 'Get 60% discount in this summer on men clothes.Limited offer so hurry up.You will get this offer on Westecs,Baruthkhana.For Details call:0179675466', '_fc789c11d973bc4db4414163509f3d3d.jpg', 'Summer Sale', 'upto_60_discount', '2021-02-22 14:25:17', '2021-02-22 14:25:17'),
(12, 'Upto 65% Discount', 'Get 65% discount in this summer on gold jewlleries.Limited offer so hurry up.You will get this offer on jewels shop,Noyasorok.For Details call:0179675466', '_94670d25b4f303f00490782a431c39fb.webp', 'Summer Sale', 'upto_65_discount', '2021-02-22 14:31:32', '2021-02-22 15:10:10'),
(13, 'Combo Offer', 'Get 50% discount on combo items.In this combo, you will get rimmel foundation,lipsticks,pressed powder.Limited offer so hurry up.You will get this offer on shajgoj online shop.For Details call:0179675466 or message on shajgoj.com', '_c0195ce4cd55bf686c02998acccec655.webp', 'Combo Offer', 'combo_offer', '2021-02-22 14:34:47', '2021-02-22 14:34:47'),
(14, 'Combo Offer', 'Get 40% discount on combo items.In this combo, you will get huda beauty eyeshadow,lipsticks,makeup brushes.Limited offer so hurry up.You will get this offer on shajgoj online shop.For Details call:0179675466 or message on shajgoj.com', '_3f1a363e20a01306810efd1b503ece29.webp', 'Combo Offer', 'combo_offer', '2021-02-22 14:37:14', '2021-02-22 14:37:14'),
(15, 'Combo Offer', 'Get 70% discount on combo items.In this combo, you will get three differnt size Dior bags.Limited offer so hurry up.You will get this offer on Blue Water shopping mall,shop no:13, 1st floor.For Details call:0179675466', '_b66cc142fcc0cec3d3be8ff05d096fec.webp', 'Combo Offer', 'combo_offer', '2021-02-22 14:38:25', '2021-02-22 14:38:25'),
(16, 'Combo Offer', 'Get 60% discount on combo items.In this combo, you will get sleek eyeshadow,huda beauty lipsticks,naked brushes,meish blusher.Limited offer so hurry up.You will get this offer on sylhet online shop.For Details call:0179675466 or message on facebook page:sylhet online shop', '_f6964345f5a5c9c230c5b0ee5d7ee543.webp', 'Combo Offer', 'combo_offer', '2021-02-22 14:39:23', '2021-02-22 14:39:23'),
(17, 'Combo Offer', 'Get 60% discount on combo items.In this combo, you will get neauthy day cream, night cream and serum.Limited offer so hurry up.You will get this offer on sylhet online shop.For Details call:0179675466 or message on facebook page:sylhet online shop', '_dde27c1cd993d79baf53e77ba842df1f.webp', 'Combo Offer', 'combo_offer', '2021-02-22 14:40:32', '2021-03-03 06:05:11'),
(18, 'Combo Offer', 'Get 60% discount on combo items.In this combo, you will get neauthy day cream, night cream and serum.Limited offer so hurry up.You will get this offer on sylhet online shop.For Details call:0179675466 or message on facebook page:sylhet online shop', '_b7a96adc4b12bc75ffaaff3f85b526b6.webp', 'Combo Offer', 'combo_offer', '2021-02-22 14:49:19', '2021-02-22 14:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `offer_details`
--

CREATE TABLE `offer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_images`
--

CREATE TABLE `offer_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parlours`
--

CREATE TABLE `parlours` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parlours`
--

INSERT INTO `parlours` (`id`, `name`, `description`, `address`, `mobile_no`, `email`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Women World', 'Towns best parlours.we also maintain the safety rules and provide you the best service', 'Noyasorok,Sylhet', '01798654389', 'womens@gmail.com', 'women_world_72071eaccb1b4b26e51ae51229c8f1d9.jpg', 'sierra_bowen', '2021-02-27 02:50:24', '2021-03-09 09:30:40'),
(3, 'Beautiful Faces', 'Towns best parlours.we also maintain the safety rules and provide you the best service', 'South Surma,Sylhet', '01789812561', 'beauty@gmail.com', '_4f2a0ccdb211673e7b120bad12143bfd.jpg', 'beautiful_faces', '2021-02-28 05:21:48', '2021-03-09 10:24:00'),
(4, 'Glum Up', 'Towns best parlours.we also maintain the safety rules and provide you the best service', 'Zindabazar,Sylhet', '01789812540', 'glumup@gmail.com', '_1e859ea075bcba9b666c6f03ae2ffff1.jpg', 'glum_up', '2021-02-28 05:24:22', '2021-03-09 10:32:15'),
(5, 'Elegant You', 'Towns best parlours.we also maintain the safety rules and provide you the best service', 'Zindabazar,Sylhet', '01789812520', 'elegant@gmail.com', 'elegant_you_f4625bf39718a0596beb204108bcd5d0.jpg', 'elegant_you', '2021-02-28 05:26:16', '2021-03-09 10:43:46'),
(6, 'Fairy Look', 'Towns best parlours.we also maintain the safety rules and provide you the best service', 'Noyasorok,Sylhet', '01789812510', 'fairy@gmail.com', '_1a3229ca546c8676c7538bb5a328e41a.jpg', 'fairy_look', '2021-02-28 05:28:10', '2021-03-09 10:47:45'),
(11, 'She', 'Towns best parlours.we also maintain the safety rules and provide you the best service', 'Pathantula,Sylhet', '01798654330', 'she@gmail.com', '_173c1b5b34a3c3dd2213deb3f9ad4f40.jpg', 'she', '2021-03-07 20:20:22', '2021-03-09 10:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `parlour_books`
--

CREATE TABLE `parlour_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_and_date` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parlour_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parlour_books`
--

INSERT INTO `parlour_books` (`id`, `name`, `mobile_no`, `email`, `package_name`, `time_and_date`, `message`, `parlour_id`, `package_id`, `created_at`, `updated_at`) VALUES
(6, 'Paul Rodriguez', '+1 (996) 425-1832', 'vewu@mailinator.com', 'Bridal Makeover', '2011-10-12 10:10:00', 'Sit amet libero dol', 11, 25, '2021-03-09 12:55:29', '2021-03-09 12:55:29'),
(7, 'Paul Rodriguez', '+1 (996) 425-1832', 'vewu@mailinator.com', 'Bridal Makeover', '2011-10-12 10:10:00', 'Sit amet libero dol', 11, 25, NULL, NULL),
(8, 'Katell Kane', '+1 (849) 923-7286', 'nuvykape@mailinator.com', 'Hair Makeover', '1991-09-10 02:09:00', 'Animi dolores expli', 11, 27, '2021-03-09 12:57:53', '2021-03-09 12:57:53'),
(9, 'Katell Kane', '+1 (849) 923-7286', 'nuvykape@mailinator.com', 'Hair Makeover', '1991-09-10 02:09:00', 'Animi dolores expli', 11, 27, NULL, NULL),
(10, 'Gannon Delgado', '+1 (198) 282-8309', 'qenocipevy@mailinator.com', 'Hair Makeover', '1974-06-15 13:06:00', 'Duis molestiae volup', 11, 27, '2021-03-09 12:58:39', '2021-03-09 12:58:39'),
(11, 'Gannon Delgado', '+1 (198) 282-8309', 'qenocipevy@mailinator.com', 'Hair Makeover', '1974-06-15 13:06:00', 'Duis molestiae volup', 11, 27, NULL, NULL),
(12, 'Dean Kirk', '+1 (674) 382-3442', 'hate@mailinator.com', 'Bridal Makeover', '1999-05-24 02:05:00', 'Ab omnis et laborios', 11, 25, '2021-03-09 12:59:16', '2021-03-09 12:59:16'),
(13, 'Dean Kirk', '+1 (674) 382-3442', 'hate@mailinator.com', 'Bridal Makeover', '1999-05-24 02:05:00', 'Ab omnis et laborios', 11, 25, NULL, NULL),
(14, 'Wanda Brady', '+1 (927) 429-4452', 'busexihy@mailinator.com', 'Hair Makeover', '2010-06-28 13:06:00', 'Voluptatem provident', 11, 27, '2021-03-09 12:59:56', '2021-03-09 12:59:56'),
(15, 'Wanda Brady', '+1 (927) 429-4452', 'busexihy@mailinator.com', 'Hair Makeover', '2010-06-28 13:06:00', 'Voluptatem provident', 11, 27, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parlour_images`
--

CREATE TABLE `parlour_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `parlour_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parlour_services`
--

CREATE TABLE `parlour_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packages` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `parlour_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parlour_services`
--

INSERT INTO `parlour_services` (`id`, `name`, `packages`, `price`, `parlour_id`, `created_at`, `updated_at`) VALUES
(12, 'Hair Makeover', '[{\"name\":\"Hair Wash & Blow Dry\"},{\"name\":\"Cut & Style\"},{\"name\":\"Highlight Colour\"}]', 39, 2, '2021-03-09 08:22:33', '2021-03-09 08:22:33'),
(16, 'Full Makeover', '[{\"name\":\"Hairstyle\"},{\"name\":\"Full Makeup With Kryolan & Maybelline Brands\"}]', 55, 2, '2021-03-09 09:03:38', '2021-03-09 09:03:38'),
(17, 'Full Makeover', '[{\"name\":\"Blowdry\"},{\"name\":\"Brightening Face Polish\"},{\"name\":\"Nail Polish\"}]', 49, 3, '2021-03-09 10:26:37', '2021-03-09 10:26:37'),
(18, 'Bridal Makeover', '[{\"name\":\"Full Makeup\"},{\"name\":\"Hair Style\"},{\"name\":\"Threading\"}]', 49, 3, '2021-03-09 10:29:07', '2021-03-09 10:29:07'),
(19, 'Rose', '[{\"name\":\"L\'Oreal Hair Spa\"},{\"name\":\"Foot Spa\"},{\"name\":\"Hand Spa\"}]', 40, 4, '2021-03-09 10:35:36', '2021-03-09 10:35:36'),
(20, 'Tulip', '[{\"name\":\"Full Hand & Leg Wax\"},{\"name\":\"Full Face Threading\"},{\"name\":\"Full Body Spa with Stream & Jacuzzi\"}]', 39, 4, '2021-03-09 10:38:07', '2021-03-09 10:38:07'),
(21, 'Full Makeover', '[{\"name\":\"Full Body Spa\"},{\"name\":\"Full Makeup\"},{\"name\":\"Hairstyle\"}]', 59, 5, '2021-03-09 10:45:02', '2021-03-09 10:45:02'),
(22, 'Bridal Makeover', '[{\"name\":\"Hairstyle\"},{\"name\":\"Mehedi Design\"},{\"name\":\"Full Makeup\"}]', 49, 5, '2021-03-09 10:46:15', '2021-03-09 10:46:15'),
(23, 'Gold', '[{\"name\":\"Full Makeup\"},{\"name\":\"HairStyle\"},{\"name\":\"Full Body Spa\"}]', 39, 6, '2021-03-09 10:48:47', '2021-03-09 10:48:47'),
(24, 'Platinum', '[{\"name\":\"Waxing\"},{\"name\":\"Full Body Spa\"},{\"name\":\"Face Bleach\"}]', 29, 6, '2021-03-09 10:51:34', '2021-03-09 10:51:34'),
(25, 'Bridal Makeover', '[{\"name\":\"Full Makeup\"},{\"name\":\"Hair Wash & Blow Dry\"},{\"name\":\"Hairstyle\"}]', 49, 11, '2021-03-09 10:54:20', '2021-03-09 10:54:20'),
(27, 'Hair Makeover', '[{\"name\":\"Hair Wash & Blow Dry\"},{\"name\":\"Hairstyle\"},{\"name\":\"Highlight Colour\"}]', 39, 11, '2021-03-09 10:57:01', '2021-03-09 10:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photographers`
--

CREATE TABLE `photographers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_img` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographers`
--

INSERT INTO `photographers` (`id`, `name`, `address`, `description`, `experience`, `image`, `profile_img`, `background_img`, `slug`, `created_at`, `updated_at`) VALUES
(23, 'Abdur Rafi Joy', 'Chararpar,Sylhet', 'I have been a  photographer since 2013. What is important to my work is the individual picture. I photograph stories on assignment, and of course they have to be put together coherently. But what matters most is that each picture stands on its own, with its own place and feeling.', '8 years experience', 'abdur_rafi_joy_16c0316495912d5467639a20ae7e3be8.jpg', '_7afaf1255bbc696d4a91c87c74d960ef.jpg', '_2d32ab09e3f77aefd99581b1d600a7f9.jpg', 'ashley_ross', '2021-02-28 09:01:26', '2021-03-11 17:34:56'),
(24, 'Rabiul Hasan Chy.', 'Zindabazar,Sylhet', 'I fell in love with the process of taking pictures, with wandering around finding things. To me it feels like a kind of performance. The picture is a document of that performance', '4 years experience', 'rabiul_hasan_chy_478c62b7306370dac084543921d93f0b.jpg', '_d4b61f117b0b785b8a46d4605c179ca0.jpg', '_d4b61f117b0b785b8a46d4605c179ca0.jpg', 'alec_soth', '2021-02-28 11:37:43', '2021-03-11 17:32:33'),
(25, 'Mahmudul Hasan Tuhin', 'Shahporan,Sylhet', 'Confident and dedicated photographer with experience in both professional and freelance photography.Intimately familiar taking high quality digital photographs, including framing, selecting and setting up lighting, and determining advanced shutter and lens options.', '4 years experience', 'mahmudul_hasan_tuhin_49d0503c48e849ea3ee69d4b81c4d011.jpg', '_8f5748c1632b8fe23e1ee037cfbd7d23.jpg', '_8f5748c1632b8fe23e1ee037cfbd7d23.jpg', 'mikhael_subotzky', '2021-02-28 12:51:56', '2021-03-11 17:32:57'),
(26, 'Humayra Jebin', NULL, 'Experienced in all different kinds of photography -Strong aesthetic sense -Technical knowledge of multiple camera technologies -Extensive communication, cooperation, and service skills -Critical thinking, analysis, and strong attention to small details', '10 years experience', '_b55874fe7277a92d7c31d48012c719ac.jpg', '_b55874fe7277a92d7c31d48012c719ac.jpg', '_b55874fe7277a92d7c31d48012c719ac.jpg', 'humayra_jebin', '2021-02-28 13:10:13', '2021-02-28 13:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `photographers_images`
--

CREATE TABLE `photographers_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `photographer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographers_images`
--

INSERT INTO `photographers_images` (`id`, `image`, `photographer_id`, `created_at`, `updated_at`) VALUES
(11, '64990.jpg', 23, '2021-02-28 09:28:26', '2021-02-28 09:28:26'),
(13, '4728.jpg', 23, '2021-02-28 09:33:26', '2021-02-28 09:33:26'),
(15, '139348.jpg', 23, '2021-02-28 09:33:26', '2021-02-28 09:33:26'),
(16, '172673.jpg', 23, '2021-02-28 09:33:26', '2021-02-28 09:33:26'),
(17, '88596.jpg', 23, '2021-02-28 09:33:27', '2021-02-28 09:33:27'),
(18, '9401.jpg', 23, '2021-02-28 09:34:18', '2021-02-28 09:34:18'),
(20, '70731.jpg', 24, '2021-02-28 12:05:23', '2021-02-28 12:05:23'),
(21, '75682.jpg', 24, '2021-02-28 12:05:23', '2021-02-28 12:05:23'),
(22, '37769.jpg', 24, '2021-02-28 12:05:23', '2021-02-28 12:05:23'),
(25, '5846.jpg', 24, '2021-02-28 12:05:23', '2021-02-28 12:05:23'),
(26, '128665.jpg', 24, '2021-02-28 12:05:23', '2021-02-28 12:05:23'),
(27, '155590.jpg', 24, '2021-02-28 12:07:52', '2021-02-28 12:07:52'),
(28, '2170.jpg', 25, '2021-02-28 12:54:59', '2021-02-28 12:54:59'),
(29, '172391.jpg', 25, '2021-02-28 12:54:59', '2021-02-28 12:54:59'),
(30, '62829.jpg', 25, '2021-02-28 12:54:59', '2021-02-28 12:54:59'),
(31, '137722.jpg', 25, '2021-02-28 12:54:59', '2021-02-28 12:54:59'),
(32, '25994.jpg', 25, '2021-02-28 12:54:59', '2021-02-28 12:54:59'),
(33, '69190.jpg', 25, '2021-02-28 12:54:59', '2021-02-28 12:54:59'),
(34, '46779.jpg', 26, '2021-02-28 13:32:50', '2021-02-28 13:32:50'),
(35, '174642.jpg', 26, '2021-02-28 13:32:50', '2021-02-28 13:32:50'),
(36, '172501.jpg', 26, '2021-02-28 13:32:50', '2021-02-28 13:32:50'),
(37, '88848.jpg', 26, '2021-02-28 13:32:50', '2021-02-28 13:32:50'),
(38, '23985.jpg', 26, '2021-02-28 13:32:50', '2021-02-28 13:32:50'),
(39, '98868.jpg', 26, '2021-02-28 13:32:50', '2021-02-28 13:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `photographer_services`
--

CREATE TABLE `photographer_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `packages` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `photographer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photographer_services`
--

INSERT INTO `photographer_services` (`id`, `name`, `packages`, `price`, `photographer_id`, `created_at`, `updated_at`) VALUES
(15, 'BIRTHEDAY PACKAGE', '[{\"name\":\"4 Hours\"},{\"name\":\"Up to 10 Persons\"},{\"name\":\"Decoration\"},{\"name\":\"Catering\"}]', 49, 23, '2021-02-28 09:36:04', '2021-02-28 09:36:04'),
(17, 'ANNIVERSARY PACKAGES', '[{\"name\":\"4 Hours\"},{\"name\":\"Up to 10 Persons\"},{\"name\":\"Decoration\"},{\"name\":\"Catering\"}]', 29, 23, '2021-02-28 09:39:58', '2021-02-28 09:39:58'),
(18, 'BIRTHDAY PACKAGE', '[{\"name\":\"4 Hours Photo Coverage\"},{\"name\":\"Upto 150 Images\"},{\"name\":\"1 Web Gallery to share & Print\"},{\"name\":\"1 Digital Download Link\"}]', 39, 24, '2021-02-28 11:47:14', '2021-02-28 11:47:14'),
(22, 'ANNIVERSARY PACKAGES', '[{\"name\":\"4 Hours Coverage\"},{\"name\":\"Upto 100 Images\"},{\"name\":\"Online Gallery\"},{\"name\":\"2 Photographers\"}]', 39, 24, '2021-02-28 12:46:18', '2021-02-28 12:46:18'),
(23, 'WEDDING PACKAGE', '[{\"name\":\"12 Hours Coverage\"},{\"name\":\"Bridal Session\"},{\"name\":\"Online Gallery\"},{\"name\":\"2 Photographers\"}]', 29, 24, '2021-02-28 12:50:18', '2021-02-28 12:50:18'),
(24, 'BIRTHDAY PACKAGE', '[{\"name\":\"2 Hours\"},{\"name\":\"Unlimited Shots For 2 Hours\"},{\"name\":\"Customized Layouts Prints\"},{\"name\":\"Soft Copy Of All Photos\"}]', 39, 25, '2021-02-28 12:57:39', '2021-02-28 12:57:39'),
(25, 'WEDDING PACKAGE', '[{\"name\":\"6 Hours\"},{\"name\":\"All Digital Images\"},{\"name\":\"Online Gallery\"},{\"name\":\"2 Photographers\"}]', 59, 25, '2021-02-28 13:00:00', '2021-02-28 13:00:00'),
(26, 'ANNIVERSARY PACKAGES', '[{\"name\":\"4 Hours Coverage\"},{\"name\":\"Upto 200 Images\"},{\"name\":\"Online Gallery\"},{\"name\":\"2 Photographers\"}]', 49, 25, '2021-02-28 13:02:27', '2021-02-28 13:02:27'),
(27, 'BIRTHDAY PACKAGE', '[{\"name\":\"4 Hours Coverage\"},{\"name\":\"Unlimited Shots\"},{\"name\":\"Unlimited Prints\"},{\"name\":\"Soft Copy Of All Photos\"}]', 29, 26, '2021-02-28 13:21:34', '2021-02-28 13:21:34'),
(28, 'WEDDING PACKAGE', '[{\"name\":\"24 Hours Coverage\"},{\"name\":\"Upto 500 Images\"},{\"name\":\"Online Gallery\"},{\"name\":\"Printed Copies\"}]', 39, 26, '2021-02-28 13:29:08', '2021-02-28 13:29:08'),
(29, 'ANNIVERSARY PACKAGES', '[{\"name\":\"4 Hours Coverage\"},{\"name\":\"Upto 200 Images\"},{\"name\":\"Online Gallery\"},{\"name\":\"Printed Copies\"}]', 39, 26, '2021-02-28 13:30:40', '2021-02-28 13:30:40'),
(30, 'WEDDING SESSIONS', '[{\"name\":\"5 Hours Cover\"},{\"name\":\"unlimited photos & location\"},{\"name\":\"shooting and editing\"},{\"name\":\"cinematography\"}]', 199, 23, '2021-03-07 22:16:35', '2021-03-07 22:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `photography_books`
--

CREATE TABLE `photography_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photographer_id` bigint(20) UNSIGNED NOT NULL,
  `package_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photography_books`
--

INSERT INTO `photography_books` (`id`, `first_name`, `last_name`, `mobile_no`, `email`, `package_name`, `start`, `end`, `message`, `photographer_id`, `package_id`, `created_at`, `updated_at`) VALUES
(11, 'Eaton Meyers', NULL, '+1 (566) 789-5944', 'fivosuz@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'In exercitationem an', 23, '30', '2021-03-11 11:00:31', '2021-03-11 11:00:31'),
(12, 'Eaton Meyers', NULL, '+1 (566) 789-5944', 'fivosuz@mailinator.com', 'WEDDING SESSIONS', '1993-09-05 20:09:00', '1993-09-05 20:09:00', 'In exercitationem an', 23, '30', NULL, NULL),
(13, 'Tara Rodgers', NULL, '+1 (393) 969-2231', 'diconocy@mailinator.com', 'BIRTHEDAY PACKAGE', NULL, NULL, 'Qui eveniet aut sit', 23, '15', '2021-03-11 11:03:46', '2021-03-11 11:03:46'),
(14, 'Tara Rodgers', NULL, '+1 (393) 969-2231', 'diconocy@mailinator.com', 'BIRTHEDAY PACKAGE', '2011-11-12 08:11:00', '2011-11-12 08:11:00', 'Qui eveniet aut sit', 23, '15', NULL, NULL),
(15, 'Sharon Good', NULL, '+1 (532) 651-1562', 'nomomajahe@mailinator.com', 'BIRTHEDAY PACKAGE', NULL, NULL, 'Ea in possimus veri', 23, '15', '2021-03-11 14:09:16', '2021-03-11 14:09:16'),
(16, 'Sharon Good', NULL, '+1 (532) 651-1562', 'nomomajahe@mailinator.com', 'BIRTHEDAY PACKAGE', '1981-01-11 18:01:00', '1981-01-11 18:01:00', 'Ea in possimus veri', 23, '15', NULL, NULL),
(17, 'Rowan Franco', NULL, '+1 (492) 152-6291', 'qenunab@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Mollit delectus nih', 23, '30', '2021-03-11 14:09:53', '2021-03-11 14:09:53'),
(18, 'Rowan Franco', NULL, '+1 (492) 152-6291', 'qenunab@mailinator.com', 'WEDDING SESSIONS', '2019-03-06 00:03:00', '2019-03-06 00:03:00', 'Mollit delectus nih', 23, '30', NULL, NULL),
(19, 'Charles Simmons', NULL, '+1 (687) 846-7879', 'dyly@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Voluptatem pariatur', 23, '30', '2021-03-11 14:10:44', '2021-03-11 14:10:44'),
(20, 'Charles Simmons', NULL, '+1 (687) 846-7879', 'dyly@mailinator.com', 'WEDDING SESSIONS', '1999-07-06 19:07:00', '1999-07-06 19:07:00', 'Voluptatem pariatur', 23, '30', NULL, NULL),
(21, 'Prescott Salas', NULL, '+1 (184) 761-8994', 'gesosyt@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Doloribus et quos mo', 23, '30', '2021-03-11 14:13:54', '2021-03-11 14:13:54'),
(22, 'Prescott Salas', NULL, '+1 (184) 761-8994', 'gesosyt@mailinator.com', 'WEDDING SESSIONS', '2003-10-22 18:10:00', '1998-01-28 22:01:00', 'Doloribus et quos mo', 23, '30', NULL, NULL),
(23, 'Jakeem Garza', NULL, '+1 (387) 328-8906', 'sizeluduva@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Accusamus et perspic', 23, '30', '2021-03-11 14:17:36', '2021-03-11 14:17:36'),
(24, 'Jakeem Garza', NULL, '+1 (387) 328-8906', 'sizeluduva@mailinator.com', 'WEDDING SESSIONS', '2013-09-01 11:09:00', '2013-09-01 11:09:00', 'Accusamus et perspic', 23, '30', NULL, NULL),
(25, 'Ann Ware', NULL, '1', 'cosopoty@mailinator.com', NULL, NULL, NULL, 'Labore aliquid ratio', 23, '17', '2021-03-12 05:22:23', '2021-03-12 05:22:23'),
(26, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', NULL, NULL, NULL, 'Nisi dolorem ipsum', 23, '17', '2021-03-12 05:25:36', '2021-03-12 05:25:36'),
(27, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Architecto aute magn', 23, '30', '2021-03-12 07:09:53', '2021-03-12 07:09:53'),
(28, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', '1988-06-15 18:06:00', '1988-06-15 18:06:00', 'Architecto aute magn', 23, '30', NULL, NULL),
(29, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'ANNIVERSARY PACKAGES', NULL, NULL, 'Error tenetur magna', 23, '17', '2021-03-12 07:42:46', '2021-03-12 07:42:46'),
(30, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'ANNIVERSARY PACKAGES', '1975-11-22 13:11:00', '1975-11-22 13:11:00', 'Error tenetur magna', 23, '17', NULL, NULL),
(31, 'Yoshi Beard123', NULL, '+8807878787878', 'hynate@mailinator.com', 'BIRTHEDAY PACKAGE', NULL, NULL, '123', 23, '15', '2021-03-12 07:44:30', '2021-03-12 07:44:30'),
(32, 'Yoshi Beard123', NULL, '+8807878787878', 'hynate@mailinator.com', 'BIRTHEDAY PACKAGE', '1991-09-22 22:09:00', '1991-09-22 22:09:00', '123', 23, '15', NULL, NULL),
(33, 'AnnWare', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Omnis et quisquam mo', 23, '30', '2021-03-12 07:51:24', '2021-03-12 07:51:24'),
(34, 'AnnWare', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', '2016-12-14 00:12:00', '2016-12-14 00:12:00', 'Omnis et quisquam mo', 23, '30', NULL, NULL),
(35, 'Violet Thompson', NULL, '+8801367367862', 'nipidifyd@mailinator.com', 'ANNIVERSARY PACKAGES', NULL, NULL, 'Excepteur quia delen', 23, '17', '2021-03-12 07:55:05', '2021-03-12 07:55:05'),
(36, 'Violet Thompson', NULL, '+8801367367862', 'nipidifyd@mailinator.com', 'ANNIVERSARY PACKAGES', '1972-08-08 10:08:00', '1972-08-08 10:08:00', 'Excepteur quia delen', 23, '17', NULL, NULL),
(37, 'Emery Sellers325', NULL, '+8805678905659', 'cegygu@mailinator.com', 'ANNIVERSARY PACKAGES', NULL, NULL, 'Aliquip tempora modi', 23, '17', '2021-03-12 07:56:20', '2021-03-12 07:56:20'),
(38, 'Emery Sellers325', NULL, '+8805678905659', 'cegygu@mailinator.com', 'ANNIVERSARY PACKAGES', '2018-01-19 06:01:00', '2018-01-19 06:01:00', 'Aliquip tempora modi', 23, '17', NULL, NULL),
(39, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'BIRTHEDAY PACKAGE', NULL, NULL, 'Ea repudiandae aut e', 23, '15', '2021-03-12 08:04:08', '2021-03-12 08:04:08'),
(40, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'BIRTHEDAY PACKAGE', '2018-02-04 15:02:00', '2018-02-04 15:02:00', 'Ea repudiandae aut e', 23, '15', NULL, NULL),
(41, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'BIRTHEDAY PACKAGE', NULL, NULL, 'Ea repudiandae aut e', 23, '15', '2021-03-12 08:06:14', '2021-03-12 08:06:14'),
(42, 'Ann Ware', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'BIRTHEDAY PACKAGE', '2018-02-15 15:02:00', '2018-02-15 15:02:00', 'Ea repudiandae aut e', 23, '15', NULL, NULL),
(43, 'Oleg Sanford', NULL, '+8807878787878', 'hoviturap@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Molestiae veniam es', 23, '30', '2021-03-12 08:08:00', '2021-03-12 08:08:00'),
(44, 'Oleg Sanford', NULL, '+8807878787878', 'hoviturap@mailinator.com', 'WEDDING SESSIONS', '1982-02-08 01:02:00', '1982-02-08 01:02:00', 'Molestiae veniam es', 23, '30', NULL, NULL),
(45, 'islam', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Nam placeat maiores', 23, '30', '2021-03-12 08:31:01', '2021-03-12 08:31:01'),
(46, 'islam', NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', '2001-09-02 20:09:00', '2001-09-02 20:09:00', 'Nam placeat maiores', 23, '30', NULL, NULL),
(47, NULL, NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Est unde impedit ex', 23, '30', '2021-03-12 08:39:28', '2021-03-12 08:39:28'),
(48, 'ann', 'ware', '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', '1987-10-03 21:10:00', '1987-10-03 21:10:00', 'Est unde impedit ex', 23, '30', NULL, NULL),
(49, NULL, NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Dolorem reiciendis a', 23, '30', '2021-03-12 08:43:48', '2021-03-12 08:43:48'),
(50, 'ann', 'ware', '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', '2020-08-10 08:08:00', '2020-08-10 08:08:00', 'Dolorem reiciendis a', 23, '30', NULL, NULL),
(51, NULL, NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Voluptatem Ut lorem', 23, '30', '2021-03-12 08:46:58', '2021-03-12 08:46:58'),
(52, 'ann', 'ware', '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', '2008-03-16 04:03:00', '2008-03-16 04:03:00', 'Voluptatem Ut lorem', 23, '30', NULL, NULL),
(53, NULL, NULL, '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', NULL, NULL, 'Facilis id ut tempor', 23, '30', '2021-03-12 09:06:55', '2021-03-12 09:06:55'),
(54, 'ann', 'ware', '+8807878787878', 'cosopoty@mailinator.com', 'WEDDING SESSIONS', '1978-10-14 23:10:00', '1978-10-14 23:10:00', 'Facilis id ut tempor', 23, '30', NULL, NULL),
(55, NULL, NULL, '+8807878787878', 'cosopoty@mailinator.com', 'BIRTHEDAY PACKAGE', NULL, NULL, 'Et aliquam similique', 23, '15', '2021-03-12 09:19:52', '2021-03-12 09:19:52'),
(56, 'ann', 'ware', '+8807878787878', 'cosopoty@mailinator.com', 'BIRTHEDAY PACKAGE', '1989-08-21 05:08:00', '1989-08-21 05:08:00', 'Et aliquam similique', 23, '15', NULL, NULL),
(57, NULL, NULL, '+8801671732364', 'tahmi@gmail.com', 'ANNIVERSARY PACKAGES', NULL, NULL, 'leoremmmmmm', 23, '17', '2021-03-12 09:27:55', '2021-03-12 09:27:55'),
(58, 'yon', 'amme', '+8801671732364', 'tahmi@gmail.com', 'ANNIVERSARY PACKAGES', '2017-06-13 13:06:00', '2017-06-13 13:06:00', 'leoremmmmmm', 23, '17', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile_images`
--

CREATE TABLE `profile_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoppings`
--

CREATE TABLE `shoppings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL DEFAULT 0,
  `type` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoppings`
--

INSERT INTO `shoppings` (`id`, `name`, `image`, `slider_image`, `description`, `details`, `price`, `type`, `slug`, `created_at`, `updated_at`) VALUES
(15, NULL, '_818a90c9794baac987f88329733ff905.webp', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:108\"},{\"name\":\"For more info, call:+880176988377\"}]', NULL, 28, 'Women', '', '2021-02-26 02:20:06', '2021-02-26 11:48:16'),
(16, NULL, '_384e6320ae5e1e7746b8654bd75d3d33.webp', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:14\"},{\"name\":\"For more info, call:+8801769883001\"}]', NULL, 30, 'Women', '', '2021-02-26 02:46:26', '2021-02-26 11:50:50'),
(17, NULL, '_e657a163a6fb5dbdf3a188f259e723f8.jpg', NULL, '[{\"name\":\"Al-Hamra shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:78,\"},{\"name\":\"For more info, call:+880176988390\"}]', NULL, 28, 'Women', '', '2021-02-26 02:48:21', '2021-02-26 11:53:43'),
(18, NULL, '_686ee431e1db12e1411cc59c1c4dd71e.jpg', NULL, '[{\"name\":\"City Center,shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:35,\"},{\"name\":\"For more info, call:+880176988994\"}]', NULL, 25, 'Women', '', '2021-02-26 02:53:27', '2021-02-26 11:55:38'),
(19, NULL, '_24d19163993d2c78964fecd5097d84c3.jpg', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:37,\"},{\"name\":\"For more info, call:+880176988399\"}]', NULL, 30, 'Women', '', '2021-02-26 03:12:27', '2021-02-26 11:57:21'),
(20, NULL, '_9af2fc9de3dbbd6938cf3b2ff8e0f5c1.jpg', NULL, '[{\"name\":\"City Center,shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:55,\"},{\"name\":\"For more info, call:+880176988379\"}]', NULL, 28, 'Women', '', '2021-02-26 03:20:16', '2021-02-26 12:04:24'),
(21, 'Branded Watches', '_afe0e4950f9e44f1d0a0f53b03010d9f.webp', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:14\"},{\"name\":\"For more info, call:+880176988350\"}]', NULL, 22, 'Men', 'branded_watches', '2021-02-26 03:26:11', '2021-02-26 12:13:42'),
(22, 'Suits', '_cbb302b132a104acae5edaadfb94c86d.jpg', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:97\"},{\"name\":\"For more info, call:+880176988309\"}]', NULL, 30, 'Men', 'suits', '2021-02-26 03:29:35', '2021-02-26 12:16:58'),
(23, 'Men Shoes', '_ab8bf349b86d6686c9100364161d2f3b.jpg', NULL, '[{\"name\":\"City Center,shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:67\"},{\"name\":\"For more info, call:+880176988999\"}]', NULL, 26, 'Men', 'men_shoes', '2021-02-26 03:54:42', '2021-02-26 12:18:49'),
(24, 'Men Perfume', '_a400336316dd5f03325303305f44df1a.jpg', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:34\"},{\"name\":\"For more info, call:+880176988340\"}]', NULL, 30, 'Men', '', '2021-02-26 04:01:24', '2021-02-26 12:24:36'),
(25, NULL, '_1d93b271a5d9568258a972096827a7b4.webp', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:56\"},{\"name\":\"For more info, call:+880176988371\"}]', NULL, 30, 'Kids', '', '2021-02-26 05:03:01', '2021-02-26 05:03:01'),
(27, NULL, '_c45ddc2d472f913cc361138414221962.webp', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:76\"},{\"name\":\"For more info, call:+8801769980371\"}]', NULL, 28, 'Kids', '', '2021-02-26 05:15:27', '2021-02-26 05:15:27'),
(28, NULL, '_1efde5875bd4594654caa92333d23636.webp', NULL, '[{\"name\":\"Al-Hamra shopping mall,\"},{\"name\":\"Zindabazar,Sylhet,\"},{\"name\":\"shop no:64,\"},{\"name\":\"For more info, call:+880176988090\"}]', NULL, 22, 'Kids', '', '2021-02-26 05:20:46', '2021-02-26 12:34:16'),
(29, NULL, '_6cfe25b37fb7e88336e632ad4ac62182.webp', NULL, '[{\"name\":\"Kids Shop\"},{\"name\":\"Noyasorok,Sylhet\"},{\"name\":\"For more info, call:+880176988371\"}]', NULL, 25, 'Kids', '', '2021-02-26 05:23:03', '2021-02-26 05:23:03'),
(30, NULL, '_5cd271a257a0ae383095573168abb62c.webp', NULL, '[{\"name\":\"City Center,shopping mall\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:75\"},{\"name\":\"For more info, call:+8801769898760\"}]', NULL, 28, 'Kids', '', '2021-02-26 05:25:30', '2021-02-26 05:25:30'),
(31, NULL, '_5ad510c5988e7e9214c5037bdccecb45.webp', NULL, '[{\"name\":\"City Center,shopping mall\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:86\"},{\"name\":\"For more info, call:+8801769786565\"}]', NULL, 25, 'Kids', '', '2021-02-26 05:33:22', '2021-02-26 05:33:22'),
(32, NULL, '_5af3f093c18026bf338cf516dff2794f.jpg', NULL, '[{\"name\":\"Blue-Water shopping mall,\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:76\"},{\"name\":\"For more info, call:+8801769998674\"}]', NULL, 30, 'New Arrival', '', '2021-02-26 10:37:44', '2021-02-26 10:44:22'),
(33, NULL, '_23790e19b0fa10d695ad44455a06268b.jpg', NULL, '[{\"name\":\"City Center,shopping mall\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:98\"},{\"name\":\"For more info, call:+880176988390\"}]', NULL, 25, 'New Arrival', '', '2021-02-26 10:46:25', '2021-02-26 10:46:25'),
(34, NULL, '_ec75437a9574c3688cffc41e3127cffa.webp', NULL, '[{\"name\":\"Al-Hamra shopping mall,Sylhet\"},{\"name\":\"shop no:99\"},{\"name\":\"For more info, call:+880176988308\"}]', NULL, 20, 'New Arrival', '', '2021-02-26 10:48:56', '2021-02-26 10:48:56'),
(35, NULL, '_8c67a294565dbb655729c61e03758e3b.webp', NULL, '[{\"name\":\"City Center,shopping mall,\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:34\"},{\"name\":\"For more info, call:+880176988311\"}]', NULL, 28, 'New Arrival', '', '2021-02-26 10:53:34', '2021-02-26 12:57:04'),
(36, NULL, '_cfb54ab59d6b179d1397f5659070c0ca.webp', NULL, '[{\"name\":\"Maha\"},{\"name\":\"Noyasorok,Sylhet\"},{\"name\":\"For more info, call:+880176988097\"}]', NULL, 30, 'New Arrival', '', '2021-02-26 10:55:54', '2021-02-26 10:55:54'),
(37, NULL, '_12c4bcd85f9b46de20883f16ac65a7ff.webp', NULL, '[{\"name\":\"Mummy\"},{\"name\":\"Noyasorok,Sylhet\"},{\"name\":\"For more info, call:+880176988954\"}]', NULL, 28, 'New Arrival', '', '2021-02-26 10:57:46', '2021-02-26 10:57:46'),
(38, NULL, '_94ac4308593ca23076f240b017d53623.webp', NULL, '[{\"name\":\"Addition\"},{\"name\":\"Noyasorok,Sylhet\"},{\"name\":\"For more info, call:+8801769880800\"}]', NULL, 30, 'New Arrival', '', '2021-02-26 10:59:50', '2021-02-26 10:59:50'),
(39, NULL, '_013dc10e010214786bdd47d667924930.webp', NULL, '[{\"name\":\"City Center,shopping mall\"},{\"name\":\"Zindabazar,Sylhet\"},{\"name\":\"shop no:55\"},{\"name\":\"For more info, call:+880176988399\"}]', NULL, 25, 'New Arrival', '', '2021-02-26 11:01:11', '2021-03-03 07:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_details`
--

CREATE TABLE `shopping_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopping_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_images`
--

CREATE TABLE `shopping_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `shopping_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `special_offers`
--

CREATE TABLE `special_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `summer_sales`
--

CREATE TABLE `summer_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_type`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aurora Delgado', 'lurydavyvu@mailinator.com', 'user', NULL, '$2y$10$ph/Z9sBlWSy.f8a69TGcv.UhFNIXVBIMpM1/MkJjoAX/rn.tgLOSy', NULL, '2021-03-01 10:41:57', '2021-03-02 06:00:42'),
(2, 'Porter Whitehead', 'zoje@mailinator.com', 'admin', NULL, '$2y$10$mXO1JdNBn6to97NfOxTbZOgel7m4Ru9drgS1MJMAMfeRE0fgPqCmy', NULL, '2021-03-01 11:18:46', '2021-03-01 11:18:46'),
(7, 'Clayton Wheeler', 'qetujo@mailinator.com', 'user', NULL, '$2y$10$W2ahaGrxEBRVt6eURXa0cunJrcvRHStLgj2QcpAJI1szHm6MDPizK', NULL, '2021-03-02 05:42:27', '2021-03-02 06:04:06'),
(8, 'tahmina', 'tahmi@gmail.com', 'admin', NULL, '$2y$10$eYKLTHLSmDzm1q5a3xUKley1FtNGjoFcbMAH5gNmXSr.aI36tMaWi', 'JiOmk1fzKa7RCAfXlgxtXglbLmAeVogSOqI3fs0eXqWiAG7qmlxV3tb2FEps', '2021-03-02 07:16:59', '2021-03-02 07:16:59'),
(9, 'Mason Case', 'juloxyba@mailinator.com', 'user', NULL, '$2y$10$9hYXWQwrn4JH7BMKIGUjx.myl4.LLpjD3f.PPXsX8VCYKDZ0TevY2', NULL, '2021-03-02 07:17:48', '2021-03-02 07:17:48'),
(10, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$10$NCbXn4a7bJVDDhLTdtLn5.AOq/Bl.MQO7QpeUGF7D38RiKhD/xPdW', NULL, '2021-03-02 07:40:01', '2021-03-02 07:45:39'),
(11, 'Sydnee Woodward', 'tepa@mailinator.com', 'user', NULL, '$2y$10$/xrl3RprJEMPwNrVoEWm2uaBR0hToSxC2P3C4InaEU61rDRdpq62K', NULL, '2021-03-07 00:58:02', '2021-03-07 00:58:02'),
(12, 'Chava Snow', 'retyhu@mailinator.com', 'user', NULL, '$2y$10$2C8wILGQ0Z/GBtzZ39eyuumMAN2ar9W4s2NEX.GIIXvLJYu15lDcq', NULL, '2021-03-07 01:02:09', '2021-03-07 01:02:09'),
(13, 'Kessie Bush', 'ruta@mailinator.com', 'user', NULL, '$2y$10$9o6sdC8UmGj2ID7bfvv0pukSMZ1v1BmjuvBmEPeTzGbMY2f/n.eYa', NULL, '2021-03-07 01:08:56', '2021-03-07 01:08:56'),
(14, 'Ursa Woods', 'behut@mailinator.com', 'user', NULL, '$2y$10$Zzeyyr05Y0tDDvPjAI1J2uYxzDN7iMyFbJHH3rmVD82kFdoXHb0wm', NULL, '2021-03-07 01:26:15', '2021-03-07 01:26:15'),
(15, 'Brynn Velez', 'syqymik@mailinator.com', 'user', NULL, '$2y$10$BLY90BsPhZ19/MgYs9B1i.r2W.IXcIXqXsi71zCbgI.s5Y.qvC/i6', NULL, '2021-03-07 01:40:02', '2021-03-07 01:40:02'),
(16, 'Melissa Turner', 'xepora@mailinator.com', 'user', NULL, '$2y$10$PtKtISv/gdBa9mhzU3BgKu6PvoyIYC9gkWJXZMcAZAkC4swp/8wni', NULL, '2021-03-07 01:41:03', '2021-03-07 01:41:03'),
(17, 'Clementine Chapman', 'jutaxi@mailinator.com', 'user', NULL, '$2y$10$GCWUtA.ACmMl4FBg6XyI2uoN2YClhDK380PNts7xpm4o2sgIUUXjG', NULL, '2021-03-07 01:41:22', '2021-03-07 01:41:22'),
(18, 'Signe Everett', 'bygejoma@mailinator.com', 'user', NULL, '$2y$10$x9kU7x1Bf4AKRMb7EdVDa.k09adF.i/P1h9vGkaNwGHbsNgG/.OS6', NULL, '2021-03-07 08:13:13', '2021-03-07 08:13:13');

-- --------------------------------------------------------

--
-- Table structure for table `vanues`
--

CREATE TABLE `vanues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `venue_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venue_services`
--

CREATE TABLE `venue_services` (
  `vanue_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `combo_offers`
--
ALTER TABLE `combo_offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_lists`
--
ALTER TABLE `event_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_venues`
--
ALTER TABLE `event_venues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `halls_hall_id_foreign` (`hall_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer2s`
--
ALTER TABLE `offer2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_details`
--
ALTER TABLE `offer_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_details_offer_id_foreign` (`offer_id`);

--
-- Indexes for table `offer_images`
--
ALTER TABLE `offer_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offer_images_offer_id_foreign` (`offer_id`);

--
-- Indexes for table `parlours`
--
ALTER TABLE `parlours`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parlour_books`
--
ALTER TABLE `parlour_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parlour_books_parlour_id_foreign` (`parlour_id`),
  ADD KEY `package_id` (`package_id`);

--
-- Indexes for table `parlour_images`
--
ALTER TABLE `parlour_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parlour_images_parlour_id_foreign` (`parlour_id`);

--
-- Indexes for table `parlour_services`
--
ALTER TABLE `parlour_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parlour_services_parlour_id_foreign` (`parlour_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photographers`
--
ALTER TABLE `photographers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photographers_images`
--
ALTER TABLE `photographers_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photographers_images_photographer_id_foreign` (`photographer_id`);

--
-- Indexes for table `photographer_services`
--
ALTER TABLE `photographer_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photographer_services_photographer_id_foreign` (`photographer_id`);

--
-- Indexes for table `photography_books`
--
ALTER TABLE `photography_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photography_books_photographer_id_foreign` (`photographer_id`);

--
-- Indexes for table `profile_images`
--
ALTER TABLE `profile_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppings`
--
ALTER TABLE `shoppings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_details`
--
ALTER TABLE `shopping_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_details_shopping_id_foreign` (`shopping_id`);

--
-- Indexes for table `shopping_images`
--
ALTER TABLE `shopping_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shopping_images_shopping_id_foreign` (`shopping_id`);

--
-- Indexes for table `special_offers`
--
ALTER TABLE `special_offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `special_offers_offer_id_foreign` (`offer_id`);

--
-- Indexes for table `summer_sales`
--
ALTER TABLE `summer_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vanues`
--
ALTER TABLE `vanues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `venues_venue_id_foreign` (`venue_id`);

--
-- Indexes for table `venue_services`
--
ALTER TABLE `venue_services`
  ADD KEY `venue_services_vanue_id_foreign` (`vanue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `combo_offers`
--
ALTER TABLE `combo_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_lists`
--
ALTER TABLE `event_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `event_venues`
--
ALTER TABLE `event_venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `offer2s`
--
ALTER TABLE `offer2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `offer_details`
--
ALTER TABLE `offer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offer_images`
--
ALTER TABLE `offer_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parlours`
--
ALTER TABLE `parlours`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `parlour_books`
--
ALTER TABLE `parlour_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `parlour_images`
--
ALTER TABLE `parlour_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parlour_services`
--
ALTER TABLE `parlour_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `photographers`
--
ALTER TABLE `photographers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `photographers_images`
--
ALTER TABLE `photographers_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `photographer_services`
--
ALTER TABLE `photographer_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `photography_books`
--
ALTER TABLE `photography_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `profile_images`
--
ALTER TABLE `profile_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shoppings`
--
ALTER TABLE `shoppings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `shopping_details`
--
ALTER TABLE `shopping_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `shopping_images`
--
ALTER TABLE `shopping_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `special_offers`
--
ALTER TABLE `special_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `summer_sales`
--
ALTER TABLE `summer_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `vanues`
--
ALTER TABLE `vanues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `halls`
--
ALTER TABLE `halls`
  ADD CONSTRAINT `halls_hall_id_foreign` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `offer_details`
--
ALTER TABLE `offer_details`
  ADD CONSTRAINT `offer_details_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `offer_images`
--
ALTER TABLE `offer_images`
  ADD CONSTRAINT `offer_images_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parlour_books`
--
ALTER TABLE `parlour_books`
  ADD CONSTRAINT `parlour_books_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `parlour_services` (`id`),
  ADD CONSTRAINT `parlour_books_parlour_id_foreign` FOREIGN KEY (`parlour_id`) REFERENCES `parlours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parlour_images`
--
ALTER TABLE `parlour_images`
  ADD CONSTRAINT `parlour_images_parlour_id_foreign` FOREIGN KEY (`parlour_id`) REFERENCES `parlours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `parlour_services`
--
ALTER TABLE `parlour_services`
  ADD CONSTRAINT `parlour_services_parlour_id_foreign` FOREIGN KEY (`parlour_id`) REFERENCES `parlours` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `photographers_images`
--
ALTER TABLE `photographers_images`
  ADD CONSTRAINT `photographers_images_photographer_id_foreign` FOREIGN KEY (`photographer_id`) REFERENCES `photographers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `photographer_services`
--
ALTER TABLE `photographer_services`
  ADD CONSTRAINT `photographer_services_photographer_id_foreign` FOREIGN KEY (`photographer_id`) REFERENCES `photographers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `photography_books`
--
ALTER TABLE `photography_books`
  ADD CONSTRAINT `photography_books_photographer_id_foreign` FOREIGN KEY (`photographer_id`) REFERENCES `photographers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shopping_details`
--
ALTER TABLE `shopping_details`
  ADD CONSTRAINT `shopping_details_shopping_id_foreign` FOREIGN KEY (`shopping_id`) REFERENCES `shoppings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `shopping_images`
--
ALTER TABLE `shopping_images`
  ADD CONSTRAINT `shopping_images_shopping_id_foreign` FOREIGN KEY (`shopping_id`) REFERENCES `shoppings` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `special_offers`
--
ALTER TABLE `special_offers`
  ADD CONSTRAINT `special_offers_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `venues`
--
ALTER TABLE `venues`
  ADD CONSTRAINT `venues_venue_id_foreign` FOREIGN KEY (`venue_id`) REFERENCES `venues` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `venue_services`
--
ALTER TABLE `venue_services`
  ADD CONSTRAINT `venue_services_vanue_id_foreign` FOREIGN KEY (`vanue_id`) REFERENCES `vanues` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
