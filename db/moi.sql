-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 06:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moi`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Announcement', 1, '2021-11-20 03:37:21', '2021-11-20 03:37:21'),
(2, 'News', 2, '2021-11-20 03:37:21', '2021-11-20 03:37:21');

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_id` bigint(20) UNSIGNED NOT NULL,
  `softDelete` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `softDelete` int(11) DEFAULT NULL,
  `published` int(11) NOT NULL,
  `artId` bigint(20) DEFAULT NULL,
  `resource` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `information_categories`
--

CREATE TABLE `information_categories` (
  `information_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, '2021-11-20 18:32:51', '2021-11-20 18:32:51'),
(2, 2, '2021-11-20 18:34:44', '2021-11-20 18:34:44'),
(3, 2, '2021-11-20 18:34:55', '2021-11-20 18:34:55'),
(4, 1, '2021-11-20 18:35:35', '2021-11-20 18:35:35'),
(5, 2, '2021-11-20 18:35:48', '2021-11-20 18:35:48'),
(6, 2, '2021-11-20 18:35:58', '2021-11-20 18:35:58'),
(7, 1, '2021-11-20 18:36:06', '2021-11-20 18:36:06'),
(8, 2, '2021-11-20 18:36:37', '2021-11-20 18:36:37'),
(9, 2, '2021-11-20 18:36:45', '2021-11-20 18:36:45'),
(10, 1, '2021-11-20 18:36:54', '2021-11-20 18:36:54'),
(11, 1, '2021-11-20 18:37:35', '2021-11-20 18:37:35'),
(12, 2, '2021-11-20 18:37:53', '2021-11-20 18:37:53'),
(13, 2, '2021-11-20 18:40:10', '2021-11-20 18:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `information_id` bigint(20) UNSIGNED NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(337, '2014_10_12_100000_create_password_resets_table', 1),
(338, '2019_08_19_000000_create_failed_jobs_table', 1),
(339, '2020_04_22_171334_create_roles_table', 1),
(340, '2020_10_12_000000_create_users_table', 1),
(341, '2021_04_22_172146_create_categories_table', 1),
(342, '2021_04_22_174047_create_information_table', 1),
(343, '2021_04_22_174238_create_videos_table', 1),
(344, '2021_04_22_174443_create_files_table', 1),
(345, '2021_04_22_175143_create_photos_table', 1),
(346, '2021_04_22_175318_create_logs_table', 1),
(347, '2021_04_22_175600_create_login_logs_table', 1),
(348, '2021_06_07_031038_create_information_categories_table', 1);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_id` bigint(20) UNSIGNED NOT NULL,
  `softDelete` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-11-20 03:37:15', '2021-11-20 03:37:15'),
(2, 'moderator', '2021-11-20 03:37:15', '2021-11-20 03:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activation` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `phone`, `username`, `password`, `activation`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, '094585', 'admin', '$2y$10$gJTujNah7HSLnLULOHkW3e9wlPEHP6YYGNkZIx.2sVTnqTT7ME2cO', 1, '2021-11-20 03:37:20', '2021-11-20 18:37:26'),
(2, 'user', 2, '094585', 'user', '$2y$10$AnOnnjL2S5iAejf4cP3Q3uzXPL42KvtNwTYAwAAwjoQBU2zla06pa', 1, '2021-11-20 03:37:20', '2021-11-20 18:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_id` bigint(20) UNSIGNED NOT NULL,
  `softDelete` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_files`
-- (See below for the actual view)
--
CREATE TABLE `view_files` (
`name` varchar(255)
,`information_id` bigint(20) unsigned
,`created_at` timestamp
,`category_id` bigint(20) unsigned
,`user_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_information`
-- (See below for the actual view)
--
CREATE TABLE `view_information` (
`id` bigint(20) unsigned
,`title` text
,`content` longtext
,`date` date
,`published` int(11)
,`user_id` bigint(20) unsigned
,`category_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_photos`
-- (See below for the actual view)
--
CREATE TABLE `view_photos` (
`name` varchar(255)
,`information_id` bigint(20) unsigned
,`created_at` timestamp
,`category_id` bigint(20) unsigned
,`user_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_videos`
-- (See below for the actual view)
--
CREATE TABLE `view_videos` (
`name` varchar(255)
,`information_id` bigint(20) unsigned
,`created_at` timestamp
,`category_id` bigint(20) unsigned
,`user_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Structure for view `view_files`
--
DROP TABLE IF EXISTS `view_files`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_files`  AS SELECT `files`.`name` AS `name`, `files`.`information_id` AS `information_id`, `files`.`created_at` AS `created_at`, `information_categories`.`category_id` AS `category_id`, `information`.`user_id` AS `user_id` FROM ((`files` left join `information` on(`files`.`information_id` = `information`.`id`)) left join `information_categories` on(`information`.`id` = `information_categories`.`information_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_information`
--
DROP TABLE IF EXISTS `view_information`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_information`  AS SELECT `i`.`id` AS `id`, `i`.`title` AS `title`, `i`.`content` AS `content`, `i`.`date` AS `date`, `i`.`published` AS `published`, `i`.`user_id` AS `user_id`, `ic`.`category_id` AS `category_id` FROM (`information` `i` left join `information_categories` `ic` on(`i`.`id` = `ic`.`information_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_photos`
--
DROP TABLE IF EXISTS `view_photos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_photos`  AS SELECT `photos`.`name` AS `name`, `photos`.`information_id` AS `information_id`, `photos`.`created_at` AS `created_at`, `information_categories`.`category_id` AS `category_id`, `information`.`user_id` AS `user_id` FROM ((`photos` left join `information` on(`photos`.`information_id` = `information`.`id`)) left join `information_categories` on(`information`.`id` = `information_categories`.`information_id`)) WHERE `photos`.`softDelete` is null ;

-- --------------------------------------------------------

--
-- Structure for view `view_videos`
--
DROP TABLE IF EXISTS `view_videos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_videos`  AS SELECT `videos`.`name` AS `name`, `videos`.`information_id` AS `information_id`, `videos`.`created_at` AS `created_at`, `information_categories`.`category_id` AS `category_id`, `information`.`user_id` AS `user_id` FROM ((`videos` left join `information` on(`videos`.`information_id` = `information`.`id`)) left join `information_categories` on(`information`.`id` = `information_categories`.`information_id`)) WHERE `videos`.`softDelete` is null ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_information_id_foreign` (`information_id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `information_artid_unique` (`artId`),
  ADD KEY `information_user_id_foreign` (`user_id`),
  ADD KEY `information_date_index` (`date`);

--
-- Indexes for table `information_categories`
--
ALTER TABLE `information_categories`
  ADD KEY `information_categories_information_id_foreign` (`information_id`),
  ADD KEY `information_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_logs_user_id_foreign` (`user_id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logs_user_id_foreign` (`user_id`),
  ADD KEY `logs_information_id_foreign` (`information_id`);

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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `photos_information_id_foreign` (`information_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `videos_information_id_foreign` (`information_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=349;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `files`
--
ALTER TABLE `files`
  ADD CONSTRAINT `files_information_id_foreign` FOREIGN KEY (`information_id`) REFERENCES `information` (`id`);

--
-- Constraints for table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `information_categories`
--
ALTER TABLE `information_categories`
  ADD CONSTRAINT `information_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `information_categories_information_id_foreign` FOREIGN KEY (`information_id`) REFERENCES `information` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD CONSTRAINT `login_logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_information_id_foreign` FOREIGN KEY (`information_id`) REFERENCES `information` (`id`),
  ADD CONSTRAINT `logs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_information_id_foreign` FOREIGN KEY (`information_id`) REFERENCES `information` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `videos`
--
ALTER TABLE `videos`
  ADD CONSTRAINT `videos_information_id_foreign` FOREIGN KEY (`information_id`) REFERENCES `information` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
