-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 02:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_example_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2024_02_11_094136_add_soft_delete_to_users_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `address`, `gender`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ggggggggggggggg', NULL, NULL, NULL, NULL, 'gggggggggggggg', '1', NULL, '2024-02-11 01:57:50', '2024-02-11 04:16:44', '2024-02-11 04:16:44'),
(2, 'Bikramjit Biswas', NULL, NULL, NULL, NULL, 'thakurnagar', '2', NULL, '2024-02-11 02:58:51', '2024-02-11 04:17:14', '2024-02-11 04:17:14'),
(3, 'sanjita halder', NULL, NULL, NULL, NULL, 'kolkata,wb,india', '2', NULL, '2024-02-11 03:00:29', '2024-02-11 04:17:18', '2024-02-11 04:17:18'),
(4, 'ustry\'s sta', NULL, NULL, NULL, 'images/tUJbFBgLWSyn892vEYciKRFzKTsNqoZKf2CBOiMp.jpg', 'um is that it has a more-or-less normal distribution of letters, as opposed', '1', NULL, '2024-02-11 03:15:26', '2024-02-11 04:19:52', '2024-02-11 04:19:52'),
(5, 'Bikramjit Biswas', NULL, NULL, NULL, 'images/VZ7Z38qRB5gZ6CI4vKCJnJ9xJ7uagD0Gl9fBSwPQ.jpg', 'a type specimen book. It has survived not only five centuries, but also the', '1', NULL, '2024-02-11 03:40:21', '2024-02-11 06:03:26', '2024-02-11 06:03:26'),
(6, 'amaal kumar', NULL, NULL, NULL, 'images/xbCwRHKrurapoJUWOM51iHVAIwi5YMkg8fsBnWDy.png', 'mumbai,india', '2', NULL, '2024-02-11 03:44:34', '2024-02-11 06:09:55', NULL),
(7, 'orem Ipsum is not', NULL, NULL, NULL, 'images/NSPMhR2j7ZcLBplxMIDwJzmdNBmUwa2PwmbBZhkY.jpg', 'orem Ipsum is notorem Ipsum is not', '2', NULL, '2024-02-11 04:19:42', '2024-02-11 06:03:34', '2024-02-11 06:03:34'),
(8, 'Bikrtamjit Biswas', NULL, NULL, NULL, 'images/EmjzFgLBPnclT9oISXwqRCVTfGIUhrCigvrSQQUo.png', 'kolkata,india', '1', NULL, '2024-02-11 05:22:02', '2024-02-11 07:29:41', '2024-02-11 07:29:41'),
(9, 'Sanjita Halder', NULL, NULL, NULL, 'images/qZ66u2u9L56AHg2S5ruL938z75vC6sF1CKeit9lF.png', 'industry\'s standard dummy text ever since the 1500s, when an unknown', '1', NULL, '2024-02-11 05:37:18', '2024-02-11 06:03:30', '2024-02-11 06:03:30'),
(10, 'Shamal', NULL, NULL, NULL, 'images/kx8H44w0zpZemF9ZFo24iQs7bJGFpHo1ZKClyXX1.png', 'Chennai,hello', '1', NULL, '2024-02-11 06:36:01', '2024-02-11 06:36:01', NULL),
(11, 'appukumar', NULL, NULL, NULL, 'images/EqBN49gk2bRpqawcIJxCDZrdIgPRWr6YnkCbNMno.png', 'Kolkata koljata', '1', NULL, '2024-02-11 07:25:38', '2024-02-11 07:26:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
