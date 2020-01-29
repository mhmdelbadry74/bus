-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2020 at 09:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cars`
--

CREATE TABLE `admin_cars` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_cars`
--

INSERT INTO `admin_cars` (`id`, `created_at`, `updated_at`, `name`) VALUES
(3, '2019-12-27 02:02:05', '2019-12-27 07:02:05', 'تت'),
(4, '2019-12-27 07:43:46', '2019-12-27 07:43:46', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `bloode_types`
--

CREATE TABLE `bloode_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bloode_types`
--

INSERT INTO `bloode_types` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'A'),
(2, NULL, NULL, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `img1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driclient_id` int(11) NOT NULL,
  `img2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passenger` int(11) NOT NULL,
  `car_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `statue` enum('active','desactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'desactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `created_at`, `updated_at`, `img1`, `driclient_id`, `img2`, `img3`, `type`, `modal`, `passenger`, `car_number`, `lc`, `price`, `statue`) VALUES
(4, NULL, NULL, 'uploads/post/1577151226google-200x200.png', 10, 'uploads/post/157708385918x36_thumbnail_images_eco.jpg', 'uploads/post/157708385918x36_thumbnail_images_eco.jpg', 'fmmds', 'mkkfw', 12, '122', 'uploads/post/157708385918x36_thumbnail_images_eco.jpg', 21.00, 'desactive'),
(5, NULL, NULL, 'uploads/post/157708385918x36_thumbnail_images_eco.jpg', 15, 'uploads/post/157708385918x36_thumbnail_images_eco.jpg', 'uploads/post/157708385918x36_thumbnail_images_eco.jpg', 'fmmdsrgggrger', 'mkkfw', 12, '122', 'uploads/post/157708385918x36_thumbnail_images_eco.jpg', 21.00, 'desactive');

-- --------------------------------------------------------

--
-- Table structure for table `car_modals`
--

CREATE TABLE `car_modals` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(191) NOT NULL,
  `admin_car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_modals`
--

INSERT INTO `car_modals` (`id`, `created_at`, `updated_at`, `name`, `admin_car_id`) VALUES
(2, '2019-12-27 07:13:29', '2019-12-27 07:13:29', 'image', 3),
(3, '2019-12-27 07:38:41', '2019-12-27 07:38:41', 'image', 3),
(4, '2019-12-27 07:43:56', '2019-12-27 07:43:56', 'image', 4);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `created_at`, `updated_at`, `name`) VALUES
(1, NULL, NULL, 'eg'),
(2, NULL, NULL, 'aa'),
(3, '2019-12-25 08:47:12', '2019-12-25 08:47:12', 'image'),
(4, '2019-12-27 07:43:13', '2019-12-27 07:43:13', 'image');

-- --------------------------------------------------------

--
-- Table structure for table `client_profiles`
--

CREATE TABLE `client_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `driclient_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bloode_type_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `home_gps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client_profiles`
--

INSERT INTO `client_profiles` (`id`, `created_at`, `updated_at`, `driclient_id`, `city_id`, `image`, `bloode_type_id`, `age`, `home_gps`) VALUES
(22, '2019-12-25 05:40:48', '2019-12-25 05:40:49', 8, 1, 'uploads/post/1577234449module_table_bottom.png', 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gps` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `created_at`, `updated_at`, `name`, `gps`) VALUES
(1, '2019-12-27 08:45:13', '2019-12-27 08:45:13', 'image', '212'),
(2, '2019-12-27 08:45:21', '2019-12-27 08:45:21', 'wqw', 'ewe');

-- --------------------------------------------------------

--
-- Table structure for table `driclients`
--

CREATE TABLE `driclients` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `gender` enum('male','fmale') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code_phone` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin_code_email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statue` enum('active','desactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('client','driver') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driclients`
--

INSERT INTO `driclients` (`id`, `created_at`, `updated_at`, `name`, `nid`, `phone`, `gender`, `email`, `pin_code_phone`, `pin_code_email`, `statue`, `type`, `api_token`) VALUES
(10, '2019-12-27 09:04:12', '2020-01-29 06:55:26', 'mhmd', '482823082', 1067803033, 'male', 'mdumsdd@gamf.com', NULL, NULL, 'desactive', 'driver', 'CcZ4hZB1ySPkLPgVC3pZ3tdKtLPKoFR4ZSywibNBGJoWPu8uMJyA5UnG1Et2'),
(15, '2019-12-27 09:04:12', '2019-12-27 11:15:25', 'mhmd', '482823082', 1067803033, 'male', 'mdumsdd@gamf.com', NULL, NULL, 'desactive', 'driver', 'CcZ4hZB1ySPkLPgVC3pZ3tdKtLPKoFR4ZSywibNBGJoWPu8uMJyA5UnG1Et2');

-- --------------------------------------------------------

--
-- Table structure for table `driver_profiles`
--

CREATE TABLE `driver_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `driclient_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` double(8,2) DEFAULT NULL,
  `bloode_type_id` int(11) NOT NULL,
  `nidimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `statue` enum('active','desactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_profiles`
--

INSERT INTO `driver_profiles` (`id`, `created_at`, `updated_at`, `driclient_id`, `city_id`, `image`, `rate`, `bloode_type_id`, `nidimg`, `dl`, `age`, `statue`) VALUES
(21, '2019-12-23 11:50:58', '2019-12-23 11:50:59', 10, 1, 'uploads/post/1577151226image.png', NULL, 1, 'uploads/post/15770838592-1.png', 'uploads/post/1577083859module_table_bottom.png', 10, NULL),
(22, '2019-12-23 11:50:58', '2019-12-23 11:50:59', 15, 1, 'uploads/post/157708385918x36_thumbnail_images_eco.jpg', NULL, 1, 'uploads/post/15770838592-1.png', 'uploads/post/1577083859module_table_bottom.png', 99, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

CREATE TABLE `kids` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `bloode_type_id` int(11) NOT NULL,
  `gender` enum('male','fmale') COLLATE utf8mb4_unicode_ci NOT NULL,
  `destination_id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_profile_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `created_at`, `updated_at`, `name`, `age`, `bloode_type_id`, `gender`, `destination_id`, `image`, `client_profile_id`, `city_id`) VALUES
(1, '2019-12-24 06:07:51', '2019-12-24 06:07:52', 'fwek', 1, 1, 'male', 1, 'uploads/post/1577149672module_table_bottom.png', 20, 1);

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
(3, '2019_12_18_230219_create_bloode_types_table', 1),
(4, '2019_12_18_230219_create_cars_table', 1),
(5, '2019_12_18_230219_create_cities_table', 1),
(6, '2019_12_18_230219_create_client_profiles_table', 1),
(7, '2019_12_18_230219_create_destinations_table', 1),
(8, '2019_12_18_230219_create_driclients_table', 1),
(9, '2019_12_18_230219_create_driver_profiles_table', 1),
(10, '2019_12_18_230219_create_kids_table', 1);

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'bus', 'bus@php.com', NULL, '$2y$10$mhm1yvWef99ZUOj1mHOiFuuJdFvh/FN5fhSjBLIJkL/57sZq8R2j2', NULL, '2019-12-25 07:28:46', '2019-12-25 08:05:21'),
(2, 'php', 'php@any.com', NULL, '$2y$10$25J/OjZjw0/GSFh6fdahSOHBlUKcgVq6nq54A4EDFMvnnOLBe8zGm', NULL, '2020-01-29 06:53:30', '2020-01-29 06:53:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cars`
--
ALTER TABLE `admin_cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloode_types`
--
ALTER TABLE `bloode_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_modals`
--
ALTER TABLE `car_modals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_profiles`
--
ALTER TABLE `client_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driclients`
--
ALTER TABLE `driclients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver_profiles`
--
ALTER TABLE `driver_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kids`
--
ALTER TABLE `kids`
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cars`
--
ALTER TABLE `admin_cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bloode_types`
--
ALTER TABLE `bloode_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car_modals`
--
ALTER TABLE `car_modals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `client_profiles`
--
ALTER TABLE `client_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `driclients`
--
ALTER TABLE `driclients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `driver_profiles`
--
ALTER TABLE `driver_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
