-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 20, 2020 at 03:27 AM
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
(2, '2020-02-20 06:47:20', '2020-02-20 06:47:20', 'php');

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
(1, '2020-02-16 09:16:36', '2020-02-16 09:16:36', 'uploads/post/1581826596qLsal9pMEwBNO2JncPoonalsv3OwwDc3mz5Zb0yc.jpeg', 2, 'uploads/post/1581826596qLsal9pMEwBNO2JncPoonalsv3OwwDc3mz5Zb0yc.jpeg', 'uploads/post/1581826596QNti0SR8EN81Z56vb0O9VqYCk4lpC5NKJDj1EhR8.jpeg', 'dgjn', 'mm', 23, 'uploads/post/1581826596QNti0SR8EN81Z56vb0O9VqYCk4lpC5NKJDj1EhR8.jpeg', 'uploads/post/1581826596QNti0SR8EN81Z56vb0O9VqYCk4lpC5NKJDj1EhR8.jpeg', 88.00, 'desactive');

-- --------------------------------------------------------

--
-- Table structure for table `car_modals`
--

CREATE TABLE `car_modals` (
  `id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(191) NOT NULL,
  `car_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car_modals`
--

INSERT INTO `car_modals` (`id`, `created_at`, `updated_at`, `name`, `car_id`) VALUES
(5, '2020-02-20 01:33:44', '0000-00-00 00:00:00', 'سءسي', 1),
(6, '2020-02-20 02:15:34', '2020-02-20 07:15:34', 'phpتتت', 1);

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
(1, NULL, '2020-02-20 04:58:01', 'كسم احمد حمدى ةةة');

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
(1, '2020-02-16 09:15:34', '2020-02-16 09:15:34', 1, 1, 'uploads/post/1581826534GokA6LVRXbM3yxk0Uf2B8R1YkdURwHaL3cj4LVuy.jpeg', 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `cridtes`
--

CREATE TABLE `cridtes` (
  `id` int(11) NOT NULL,
  `client_profile_id` int(11) NOT NULL,
  `img_payments` varchar(191) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cridtes`
--

INSERT INTO `cridtes` (`id`, `client_profile_id`, `img_payments`, `date`) VALUES
(1, 1, 'uploads/post/1581826626LzJw2PBTZ24L4gsDRR44xZ3c6FCCM9MCxSOOgHPL.jpeg', '2020-02-16 04:17:17');

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
(3, '2020-02-20 06:08:35', '2020-02-20 06:16:20', 'كسم احمد حمدى', 'كسم احمد حمدى');

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
(1, '2020-02-16 09:14:04', '2020-02-16 09:14:05', 'mhmd', '2121', 111111, 'male', 'mhmd@m.comddd', NULL, NULL, 'active', 'client', '4D0o58KzFAolJrI83mj5bA3WyLynJFOAfyXIZzk9X0cIkXoJxZsufTwyNbU9'),
(2, '2020-02-16 09:14:19', '2020-02-20 03:23:54', 'mhmd', '2121', 11111111, 'male', 'mhmd@m.csssomddd', NULL, NULL, 'desactive', 'driver', 'Ly8FjzqIOgmcbq12SKnk0bcXtZcarlgvWcbk09qZNAuWy1wYymB52NN0e669'),
(3, '2020-02-20 04:52:41', '2020-02-20 04:52:41', 'php', NULL, 231, NULL, 'ahmed@dn.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `driver_profiles`
--

CREATE TABLE `driver_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `driclient_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` double(8,2) DEFAULT NULL,
  `bloode_type_id` int(11) DEFAULT NULL,
  `nidimg` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `statue` enum('تم الانزال','فى الطريق','عائد الى المنزل','لم يركب بعد','رحلة فائتة','على متن المركبة') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_profiles`
--

INSERT INTO `driver_profiles` (`id`, `created_at`, `updated_at`, `driclient_id`, `city_id`, `image`, `rate`, `bloode_type_id`, `nidimg`, `dl`, `age`, `statue`) VALUES
(1, '2020-02-16 09:15:01', '2020-02-16 09:15:01', 2, 1, 'uploads/post/1581826501PxThTErpUeiStAyIzpCwnbuTfzVsvNBT7blagAlL.jpeg', NULL, 1, 'uploads/post/1581826501QNti0SR8EN81Z56vb0O9VqYCk4lpC5NKJDj1EhR8.jpeg', 'uploads/post/1581826501PxThTErpUeiStAyIzpCwnbuTfzVsvNBT7blagAlL.jpeg', 1, 'لم يركب بعد'),
(3, '2020-02-16 09:15:01', '2020-02-16 09:15:01', 1, 1, 'uploads/post/1581826501PxThTErpUeiStAyIzpCwnbuTfzVsvNBT7blagAlL.jpeg', NULL, 1, 'uploads/post/1581826501QNti0SR8EN81Z56vb0O9VqYCk4lpC5NKJDj1EhR8.jpeg', 'uploads/post/1581826501PxThTErpUeiStAyIzpCwnbuTfzVsvNBT7blagAlL.jpeg', 1, 'رحلة فائتة');

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
  `driclient_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`id`, `created_at`, `updated_at`, `name`, `age`, `bloode_type_id`, `gender`, `destination_id`, `image`, `driclient_id`, `city_id`) VALUES
(1, '2020-02-16 09:16:03', '2020-02-16 09:16:03', 'fwek', 1, 1, 'male', 1, 'uploads/post/1581826563pvhppOgIZGzDbzP3MdbK4is7oRJsS7ByMmewPSTB.jpeg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `client_profile_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `driver_profile_id` int(11) NOT NULL,
  `driclient_id` int(11) NOT NULL,
  `kid_id` int(11) NOT NULL,
  `statue` enum('active','desactive') NOT NULL DEFAULT 'desactive',
  `request_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `request_img` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `driver_profile_id` int(11) NOT NULL,
  `client_profile_id` int(11) NOT NULL,
  `kid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `driver_profile_id`, `client_profile_id`, `kid_id`) VALUES
(1, 1, 1, 1);

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
(1, 'php', 'php@any.com', NULL, '$2y$10$UC8gHea3DdO604PmufGWfuZiyw1thSlZslyMEZvnyUMlkPpAHGI9O', NULL, '2020-02-10 06:50:22', '2020-02-10 06:50:22');

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
-- Indexes for table `cridtes`
--
ALTER TABLE `cridtes`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bloode_types`
--
ALTER TABLE `bloode_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `car_modals`
--
ALTER TABLE `car_modals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_profiles`
--
ALTER TABLE `client_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cridtes`
--
ALTER TABLE `cridtes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driclients`
--
ALTER TABLE `driclients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver_profiles`
--
ALTER TABLE `driver_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kids`
--
ALTER TABLE `kids`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
