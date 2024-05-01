-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2023 at 09:42 AM
-- Server version: 10.5.16-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16718444_tiuklv`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_users`
--

CREATE TABLE `auth_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auth_users`
--

INSERT INTO `auth_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(4, 'Rootadmin', 'admin@tiuk.com', 'ae443f20ff805948e5caa684853c3325', '2022-06-20 03:33:57', '2022-06-20 03:33:57'),
(5, 'uday', 'uday@tiuk.com', '$2y$10$yny8lJQFbEjdDqa8EW63duac1aLn62SIZM1FTPPG2222rWmjtwPtW', '2022-07-26 04:49:46', '2022-07-26 04:49:46'),
(6, 'system', 'system01@tiuk.com', '$2y$10$LEQPvUYJoz2pH7Z8Z1jBU.uLm1UPR6tzT4ATQjfTLyj.9OTSU8TyO', '2022-08-03 09:56:35', '2022-08-03 09:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` enum('none','feedback','Say Hello') COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `msg`, `created_at`, `updated_at`) VALUES
(7, 'Uday Kant', 'udaykant187@gmail.com', 'feedback', 'Hello Uday,\r\n Just now i have visited this webpage and im really impressed with the design then the pervious one.\r\nBest of luck for improvement\r\nThank you\r\nwith regards \r\nUday Kant Thakur', '2022-06-20 04:20:05', '2022-06-20 04:20:05'),
(8, 'thisisudaykant', 'tiuk@tiuk.com', 'none', 'Namaskara Uday \r\nHow are you boss?\r\nYour main system', '2022-06-20 06:15:14', '2022-06-20 06:15:14'),
(10, 'Nivedita Sharma', 'nivi@gmail.com', 'Say Hello', 'hello uday how are you?', '2022-06-20 07:31:32', '2022-06-20 07:31:32'),
(11, 'Abhijeet Kumar', 'abhithaks2@gmail.com', 'Say Hello', 'hello uday sir glad to see your webpage best wishes for all the achievements .', '2022-06-20 07:33:44', '2022-06-20 07:33:44'),
(13, 'Nitin Vergish', 'nitin@outlook.com', 'feedback', 'Hello Uday, this webpage is good but i felt it should look more user friendly \r\nthank you', '2022-06-20 07:35:30', '2022-06-20 07:35:30'),
(15, 'Pratyush Kumar Thakur', 'pratyush@gmail.com', 'Say Hello', 'Hello mama ji', '2022-06-20 07:36:41', '2022-06-20 07:36:41'),
(17, 'Shivam Sharma', 'shivam@gmail.com', 'Say Hello', 'hello bhai kaisa hai tu', '2022-06-20 07:50:30', '2022-06-20 07:50:30'),
(18, 'Jeewan', 'Jeewan@hotmail.com', 'none', 'Heyyyyyyy', '2022-06-20 07:50:53', '2022-06-20 07:50:53'),
(20, 'Kabit Shingh', 'kabir@yahoo.com', 'Say Hello', 'hELLO BOSS', '2022-06-20 07:52:17', '2022-06-20 07:52:17'),
(21, 'Dell Laptop', 'system@tiuk.com', 'Say Hello', 'Automated message:Hello robot', '2022-06-20 07:53:05', '2022-06-20 07:53:05'),
(22, 'Samsung Mobile', 'samsungIndia@gmail.com', 'Say Hello', 'Hello robot', '2022-06-20 07:53:47', '2022-06-20 07:53:47'),
(23, 'BoatWatch', 'boat@gmail.com', 'none', 'hello hello hello how are you?', '2022-06-20 07:54:17', '2022-06-20 07:54:17'),
(24, 'Demo', 'demo@demo.com', 'none', 'demo', '2022-06-20 08:02:56', '2022-06-20 08:02:56'),
(25, 'thisisudaykant', 'tiuk@tiuk.com', 'feedback', 'Hello uday kant thakur', '2022-06-27 01:39:41', '2022-06-27 01:39:41'),
(26, 'Shree Uday Kant', 'udaykant187@gmail.com', 'Say Hello', 'Hello ji', '2022-07-01 01:40:33', '2022-07-01 01:40:33'),
(27, 'thisisudaykant', 'thisisudaykant@gmail.com', 'none', 'Namaskara Yellaruke,\r\nDhanyabada', '2022-07-10 05:19:30', '2022-07-10 05:19:30'),
(28, 'hu', 'h@w.v', 'feedback', 'gjhkj', '2022-10-24 01:18:58', '2022-10-24 01:18:58');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_05_30_071955_create_feedback_table', 1),
(3, '2022_06_19_150836_create_auth_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_users`
--
ALTER TABLE `auth_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `auth_users_email_unique` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_users`
--
ALTER TABLE `auth_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
