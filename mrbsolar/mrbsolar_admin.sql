-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 09:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrbsolar_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `discription` varchar(10000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `date`, `title`, `discription`, `created_at`, `updated_at`) VALUES
(2, 'storage/images/c502ca78-ed5d-4edc-b21b-028349c85e6f.jpg', '15-Sep-1993', 'Aut ullam cumque mai Aut ullam cumque mai', '<p>&nbsp;</p>\r\n\r\n<p>As an AI language model, I don&#39;t have direct access to specific content or paragraphs. However, I can help you generate content for a paragraph based on a given topic or subject. Please provide me with more information about the topic or subject you want the paragraph to be about, and I&#39;ll be glad to assist you in generating the content.</p>\r\n\r\n<p>As an AI language model, I don&#39;t have direct access to sp</p>\r\n\r\n<p>As an AI language model, I don&#39;t have direct access to specific content or paragraphs. However, I can help you generate content for a paragraph based on a given topic or subject. Please provide me with more information about the topic or subject you want the paragraph to be about, and I&#39;ll be glad to assist you in generating the content.ecific content or paragraphs. However, I can help you generate content for a paragraph based on a given topic or subject. Please provide me with more information about the topic or subject you want the paragraph to be about, and I&#39;ll be glad to assist you in generating the content.</p>', '2023-08-03 01:30:37', '2023-08-04 01:44:27'),
(4, 'storage/images/92e9adc2-b713-4cc1-98bd-64137be91faa.png', '1998-11-24', 'Velit quo non aspern', '<p>To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:</p>', '2023-08-04 03:06:16', '2023-08-04 03:06:16'),
(5, 'storage/images/8531b34f-6cd1-4440-bd49-f215eb17e03a.jpg', '2001-11-02', 'Do consequatur lauda', '<p>To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:</p>', '2023-08-04 03:11:28', '2023-08-04 03:11:28'),
(6, 'storage/images/64952012-09c5-450e-8a84-b25e4909021f.jpeg', '2011-09-13', 'Similique est et ven', '<p>To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:</p>', '2023-08-04 03:11:45', '2023-08-04 03:11:45'),
(7, 'storage/images/bc69c543-bd62-4f28-b742-0eadeb4cb085.jpg', '2013-05-26', 'Enim qui reiciendis', '<p>To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:</p>', '2023-08-04 03:11:57', '2023-08-04 03:11:57'),
(8, 'storage/images/a59b2d89-1d54-40c2-b2b2-1cd594f2346c.png', '1985-03-11', 'Totam delectus qui', '<p>To apply a light green color to the <code>box-shadow</code>, you can modify the <code>rgba</code> value to use green color with an alpha channel. The alpha channel controls the opacity, so you can make it lighter or darker as per your preference. For a light green color, you can use an appropriate combination of RGB values and an alpha channel. For example:</p>', '2023-08-04 03:14:51', '2023-08-04 03:14:51');

-- --------------------------------------------------------

--
-- Table structure for table `carousels`
--

CREATE TABLE `carousels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carousels`
--

INSERT INTO `carousels` (`id`, `image`, `created_at`, `updated_at`) VALUES
(18, 'backend/images/2e4bfef9-afc7-47be-906f-792573e7fd2e.jpg', '2023-08-12 01:38:54', '2023-08-12 01:38:54'),
(19, 'backend/images/fcb2138b-75e1-42c2-93c8-952b39f9ac4e.png', '2023-08-12 01:39:00', '2023-08-12 01:39:00'),
(20, 'backend/images/b9d02bf1-5243-4639-a2d7-547ac99cb514.jpg', '2023-08-12 01:39:05', '2023-08-12 01:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `interest` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gird__tie_systems`
--

CREATE TABLE `gird__tie_systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roof_of_area` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gird__tie_systems`
--

INSERT INTO `gird__tie_systems` (`id`, `roof_of_area`, `title`, `points`, `created_at`, `updated_at`) VALUES
(3, '100-200 Sq. Ft.', 'Solution 1', '<ul>\r\n	<li>1 kVA Grid Tie Solar Inverter (Single Phase)</li>\r\n	<li>4nos Modules of 320Wp each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 1,400 units annually.</li>\r\n</ul>', '2023-07-23 23:39:03', '2023-07-24 07:29:25'),
(4, '200-300 Sq. Ft.', 'Solution 2', '<ul>\r\n	<li>2 kVA Grid Tie Solar inverter (Single Phase)</li>\r\n	<li>7nos Modules of 320Wp each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 2,800 units annually</li>\r\n</ul>', '2023-08-02 03:49:48', '2023-08-02 03:49:48'),
(5, '300-500 Sq. Ft.', 'Solution 3', '<ul>\r\n	<li>3 kVA Grid Tie Solar inverter (Single / Three Phase)</li>\r\n	<li>10nos Modules of 320Wp each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 4,200 units annually</li>\r\n</ul>', '2023-08-02 03:50:47', '2023-08-02 03:50:47'),
(6, '500-700 Sq. Ft.', 'Solution 4', '<ul>\r\n	<li>5 kVA Grid Tie Solar inverter (Single / Three Phase)</li>\r\n	<li>16nos Modules of 320Wp each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 7,000 units annually</li>\r\n</ul>', '2023-08-02 03:51:25', '2023-08-02 03:51:25'),
(7, '700-1000 Sq. Ft.', 'Solution 5', '<ul>\r\n	<li>8 kVA Grid Tie Solar inverter (Three Phase)</li>\r\n	<li>24nos Modules of 320Wp each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 8,400 units annually</li>\r\n</ul>', '2023-08-02 03:52:06', '2023-08-02 03:52:06'),
(8, '1000-1200 Sq. Ft.', 'Solution 6', '<ul>\r\n	<li>10 kVA Grid Tie Solar inverter (Three Phase)</li>\r\n	<li>32nos Modules of 320Wp each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 14,000 units annually</li>\r\n</ul>', '2023-08-02 03:52:52', '2023-08-02 03:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(4, 'ecc8c156-ca88-44a9-8c76-b2b75884c7eb.jpg', 'Aliqua Velit necess', '2023-08-04 00:29:13', '2023-08-04 00:29:13'),
(5, '60051cab-da48-4e80-af98-10a7ae882fb2.jpeg', 'Do nulla occaecat ad', '2023-08-04 00:29:23', '2023-08-04 00:29:23'),
(6, '133c07e1-22d5-421a-b5b8-07fb75abf775.png', 'Reprehenderit at vo', '2023-08-04 01:38:48', '2023-08-04 01:38:48'),
(7, '1b13f66f-dbcf-4951-ac6c-e8221ec51e98.png', 'akdsfjkasjkf', '2023-08-04 01:39:05', '2023-08-04 01:39:05'),
(8, 'cbfad392-9cc6-46cb-b49c-1359ee368490.jpeg', 'jdasjkfakjsd', '2023-08-04 01:39:18', '2023-08-04 01:39:18'),
(9, '1468bb75-4169-4b13-8cea-581af56236d0.png', 'Qui dolor architecto', '2023-08-04 01:39:31', '2023-08-04 01:39:31'),
(10, '8f43bf1b-b354-45d3-8610-9870131e9e06.png', 'Molestias veniam si', '2023-08-04 01:39:38', '2023-08-04 01:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE `interests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `interest` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `interest`, `created_at`, `updated_at`) VALUES
(3, 'Grid Tie Rooftop', '2023-07-28 06:57:42', '2023-07-28 06:57:42'),
(4, 'Off Grid Rooftop', '2023-07-28 06:57:53', '2023-07-28 06:57:53'),
(5, 'AC Pumps', '2023-07-28 06:58:14', '2023-07-28 06:58:14'),
(6, 'DC Pumps', '2023-07-28 06:58:21', '2023-07-28 06:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_17_101327_create_permission_tables', 1),
(7, '2023_07_18_092456_create_solar_pumps_table', 2),
(8, '2023_07_18_094215_add_columns_to_solar_pumps_table', 3),
(9, '2023_07_21_055109_create_gird__tie_systems_table', 4),
(10, '2023_07_25_044412_create_off__gird_systems_table', 5),
(11, '2023_07_25_055301_add_columns_to_off__gird_systems_table', 6),
(12, '2023_07_25_072513_create_image_galleries_table', 7),
(13, '2023_07_25_114752_create_video_galleries_table', 8),
(14, '2023_07_28_063143_create_interests_table', 9),
(15, '2023_07_29_060502_create_enquiries_table', 10),
(16, '2023_07_29_100431_create_rquirements_table', 11),
(17, '2023_08_02_094713_create_corousels_table', 12),
(18, '2023_08_02_095001_create_carousels_table', 13),
(19, '2023_08_03_060418_create_blogs_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 3),
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3),
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 1),
(5, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 1),
(6, 'App\\Models\\User', 3),
(7, 'App\\Models\\User', 1),
(8, 'App\\Models\\User', 1),
(9, 'App\\Models\\User', 1),
(10, 'App\\Models\\User', 1),
(11, 'App\\Models\\User', 1),
(12, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Table structure for table `off__gird_systems`
--

CREATE TABLE `off__gird_systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roof_of_area` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `points` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `off__gird_systems`
--

INSERT INTO `off__gird_systems` (`id`, `created_at`, `updated_at`, `roof_of_area`, `title`, `points`) VALUES
(2, '2023-07-25 00:57:54', '2023-07-25 00:57:54', '100-200 Sq. Ft', 'Solution 1', '<ul>\r\n	<li>2 kVA PCU (Single Phase)</li>\r\n	<li>4nos Modules of 320Wp each</li>\r\n	<li>2nos Batteries of 12V / 150Ah each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 1,400 units annually</li>\r\n</ul>'),
(3, '2023-08-02 03:55:29', '2023-08-02 03:55:29', '200-300 Sq. Ft.', 'Solution 2', '<ul>\r\n	<li>3.75 kVA PCU (Single Phase)</li>\r\n	<li>6nos Modules of 320Wp each</li>\r\n	<li>4nos Batteries of 12V / 150Ah each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 2,600 units annually</li>\r\n</ul>'),
(4, '2023-08-02 03:56:17', '2023-08-02 03:56:17', '300-500 Sq. Ft.', 'Solution 3', '<ul>\r\n	<li>6.5 kVA PCU (Single Phase)</li>\r\n	<li>12nos Modules of 320Wp each</li>\r\n	<li>8nos Batteries of 12V / 150Ah each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 5,000 units annually</li>\r\n</ul>'),
(5, '2023-08-02 03:57:02', '2023-08-02 03:57:02', '500-700 Sq. Ft.', 'Solution 4', '<ul>\r\n	<li>7.5 kVA PCU (Single Phase)</li>\r\n	<li>16nos Modules of 320Wp each</li>\r\n	<li>10nos Batteries of 12V / 150Ah each</li>\r\n	<li>Cables &amp; Other Accessories</li>\r\n	<li>You generate 7,000 units annually</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Add User', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(2, 'View Users', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(3, 'Solar Pump Product', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(4, 'Grid Tie System', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(5, 'Off Grid System', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(6, 'Image Gallery', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(7, 'Video Gallery', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(8, 'Slider Image', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(9, 'Blog', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(10, 'Interest', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(11, 'Enquiry', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(12, 'Buy Requirement', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12'),
(2, 'user', 'web', '2023-08-04 05:37:12', '2023-08-04 05:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rquirements`
--

CREATE TABLE `rquirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `piece` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solar_pumps`
--

CREATE TABLE `solar_pumps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `card_image` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `solar_module` varchar(255) NOT NULL,
  `dynamic_pump_head` varchar(255) NOT NULL,
  `water_discharge` varchar(255) NOT NULL,
  `features` varchar(10000) NOT NULL,
  `components` varchar(1000) NOT NULL,
  `benefits` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `solar_pumps`
--

INSERT INTO `solar_pumps` (`id`, `card_image`, `banner_image`, `title`, `solar_module`, `dynamic_pump_head`, `water_discharge`, `features`, `components`, `benefits`, `created_at`, `updated_at`, `type`) VALUES
(19, '41f9e473-14a3-4fda-9c40-e221f251da6c.jpg', '31fdec1a-77b4-4ebf-ad4c-30ba22e43f1b.jpg', 'MRB Solar 1HP-AC', '1200', '30', '38400', '<ul>\r\n	<li>IEC certified modules with 25 years warranty</li>\r\n	<li>Advance System Safety Protection features like dry run, reverse&nbsp;polarity, low voltage and lightening arrest -or</li>\r\n	<li>Longevity Corrosion resistant galvanized iron mounting structures for longer life, withstand wind speed of 150 kmph</li>\r\n</ul>', '<ul>\r\n	<li>Solar Module: 1200Wp</li>\r\n	<li>Pump Capacity: 1HP</li>\r\n	<li>Galvanized iron module mounting structure</li>\r\n	<li>Variable Frequency Drive</li>\r\n	<li>Suitable accessories pipe, cable, rope, etc.</li>\r\n</ul>', '<ul>\r\n	<li>Grid change over option available to operate with grid power</li>\r\n	<li>Auto ON/OFF feature for utilizing maximum solar energy</li>\r\n	<li>Payback period (as compared to equivalent water from diesel pump) of 2 to 3 years</li>\r\n	<li>Ideal for areas with low or minimum grid power</li>\r\n	<li>25 years warranty for the modules and 5 years warranty on pump and controller</li>\r\n</ul>', '2023-08-12 03:24:20', '2023-08-12 03:24:20', 'Ac'),
(20, '614bfc7a-c61d-4fb2-af7f-ba2d8311081d.jpg', '43ee805f-44c3-4bdf-a4a7-2d4d764db2de.jpg', 'MRB Solar 1HP-DC', '1200', '30', '42000', '<ul>\r\n	<li>IEC certified modules with 25 years warranty</li>\r\n	<li>Advance System Safety Protection features like dry run, reverse polarity, low voltage and lightening arrestor</li>\r\n	<li>Longevity Corrosion resistant galvanized iron mounting structures for longer life, withstand wind speed of 150 kmph</li>\r\n</ul>', '<ul>\r\n	<li>Solar Module: 1200Wp</li>\r\n	<li>Pump Capacity: 1HP</li>\r\n	<li>Galvanized iron module mounting structure</li>\r\n	<li>Pump Controller</li>\r\n	<li>Suitable accessories pipe, cable, rope, etc</li>\r\n</ul>', '<ul>\r\n	<li>Grid change over option available to operate with grid power</li>\r\n	<li>Auto ON/OFF feature for utilizing maximum solar energy</li>\r\n	<li>Payback period (as compared to equivalent water from diesel pump) of 2 to 3 years</li>\r\n	<li>Ideal for areas with low or minimum grid power</li>\r\n	<li>25 years warranty for the modules and 5 years warranty on pump and controller</li>\r\n</ul>', '2023-08-12 03:29:34', '2023-08-12 03:29:34', 'Dc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'System Admin', 'admin@admin.com', '2023-08-04 05:37:01', '$2y$10$Succ3Er5jzFrqkr82RXuqujLe05.XlUzC51r7gRpXj4.xULNTbwBa', NULL, '2023-08-04 05:37:01', '2023-08-04 05:37:01');

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `video`, `created_at`, `updated_at`) VALUES
(3, 'FOa68Hchtoc', '2023-07-25 07:52:27', '2023-07-27 00:10:39'),
(4, 'JkWP1pZWwOQ', '2023-07-25 07:54:53', '2023-07-25 07:54:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousels`
--
ALTER TABLE `carousels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gird__tie_systems`
--
ALTER TABLE `gird__tie_systems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interests`
--
ALTER TABLE `interests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `off__gird_systems`
--
ALTER TABLE `off__gird_systems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `rquirements`
--
ALTER TABLE `rquirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `solar_pumps`
--
ALTER TABLE `solar_pumps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carousels`
--
ALTER TABLE `carousels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gird__tie_systems`
--
ALTER TABLE `gird__tie_systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `interests`
--
ALTER TABLE `interests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `off__gird_systems`
--
ALTER TABLE `off__gird_systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rquirements`
--
ALTER TABLE `rquirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solar_pumps`
--
ALTER TABLE `solar_pumps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
