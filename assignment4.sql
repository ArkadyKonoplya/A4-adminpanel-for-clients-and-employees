-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 02:12 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment4`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(255) NOT NULL,
  `Company_name` varchar(255) NOT NULL,
  `Business_number` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Phone_number` varchar(255) NOT NULL,
  `Cell_number` varchar(255) NOT NULL,
  `Carriers` varchar(255) NOT NULL,
  `HST_number` varchar(255) DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL,
  `Status` enum('0','1') NOT NULL DEFAULT '0',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `Company_name`, `Business_number`, `first_name`, `last_name`, `Phone_number`, `Cell_number`, `Carriers`, `HST_number`, `Website`, `Status`, `updated_at`, `created_at`) VALUES
(2, 'Red hat', '2910209392192', 'Red', 'Hat', '21938219320', '23423523412', 'Carrier1', '4032939421', 'https://www.google.com', '0', '2021-12-09 20:20:05', '2021-12-09 20:05:01'),
(3, 'Student Education', '3920120939219', 'Student1', 'Name', '30210923921', '21341231233', 'Carrier2', '3012939121', 'https://www.google.com', '1', '2021-12-10 03:55:13', '2021-12-10 03:34:30'),
(4, 'Snow Company', '3912029392192', 'Snow', 'Man', '39210239212', '23423423423', 'Carrier3', '3240129321', 'https://www.google.com', '0', '2021-12-10 03:35:03', '2021-12-10 03:35:03'),
(5, 'Red Company', '1029392192392', 'Hat', 'Red', '49382349292', '12312312312', 'Carrier4', '1023012932', 'https://www.google.com', '0', '2021-12-10 03:35:24', '2021-12-10 03:35:24'),
(6, 'Amazon ', '3021923892182', 'Amazon', 'SEO', '30219239821', '1234567890', 'Carrier5', '1982392198', 'https://www.google.com', '0', '2021-12-10 03:54:59', '2021-12-10 03:54:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(255) NOT NULL,
  `objects` varchar(255) NOT NULL,
  `actions` enum('create','update','delete') NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `objects`, `actions`, `updated_at`, `created_at`) VALUES
(1, 'client', 'create', '2021-12-10 03:35:24', '2021-12-10 03:35:24'),
(2, 'Employee', 'delete', '2021-12-10 03:37:49', '2021-12-10 03:37:49'),
(3, 'client', 'create', '2021-12-10 03:54:59', '2021-12-10 03:54:59'),
(4, 'client', 'update', '2021-12-10 03:55:13', '2021-12-10 03:55:13'),
(5, 'Employee', 'update', '2021-12-10 04:24:07', '2021-12-10 04:24:07'),
(6, 'Employee', 'update', '2021-12-10 04:24:42', '2021-12-10 04:24:42'),
(7, 'Employee', 'update', '2021-12-10 04:26:46', '2021-12-10 04:26:46'),
(8, 'Employee', 'update', '2021-12-10 04:27:00', '2021-12-10 04:27:00'),
(9, 'Employee', 'update', '2021-12-10 04:27:27', '2021-12-10 04:27:27'),
(10, 'client', 'create', '2021-12-10 04:30:33', '2021-12-10 04:30:33'),
(11, 'Employee', 'update', '2021-12-10 05:47:37', '2021-12-10 05:47:37'),
(12, 'Employee', 'update', '2021-12-10 06:01:38', '2021-12-10 06:01:38'),
(13, 'Employee', 'update', '2021-12-10 06:02:08', '2021-12-10 06:02:08'),
(14, 'Employee', 'update', '2021-12-10 06:02:16', '2021-12-10 06:02:16'),
(15, 'Employee', 'create', '2021-12-10 06:02:48', '2021-12-10 06:02:48'),
(16, 'Client', 'delete', '2021-12-10 06:13:00', '2021-12-10 06:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('smartmine227@gmail.com', '$2y$10$HzY6u.GckMXUIT8ophw21OOj55oD9PALKWRfRmvDuLsxl/A5hSVn6', '2020-08-19 09:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT '1_avatar1639061958.png',
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `First_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Last_Name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Cell_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position` enum('Manager','Senior Accountant','Junior Accountant','Chartered Accountant','Book Keeper') COLLATE utf8mb4_unicode_ci DEFAULT 'Manager',
  `Status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `country` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `image`, `phone`, `comment`, `First_Name`, `Last_Name`, `Cell_number`, `Position`, `Status`, `country`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$dYrhGz6SNcHv/X7mVbkgauZCTctAJ3yZDmhVtPRzMUayL6NMTIQLe', NULL, '1_avatar1639139137.png', '34567890', NULL, 'Admin', 'Manager', '34567890', 'Manager', '0', 'Belarus', '2020-08-19 09:22:26', '2021-12-10 06:01:38'),
(3, 'first last', 'mail@gmail.com', NULL, '$2y$10$ngP1v9CVklYO1LfrelZXXePZFdLLBVwUq3SSvrpBiKhemtwCwv0Re', NULL, '1_avatar1639061958.png', '12039219232', NULL, 'Stuff', 'Manager', '12039219232', 'Book Keeper', '1', NULL, '2021-12-09 21:38:09', '2021-12-10 06:02:16'),
(5, 'Test Name', 'test@name.com', NULL, '$2y$10$16FDtGQ6AaeD9N5IoWSEOOdNEr4eL3fI9M6eV9tFEqHNMEHyPkqwu', NULL, '1_avatar1639061958.png', '20391293921', NULL, 'Test', 'Name', '20391293921', 'Manager', '0', NULL, '2021-12-10 06:02:48', '2021-12-10 06:02:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
