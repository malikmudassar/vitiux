-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 28, 2020 at 02:13 PM
-- Server version: 5.7.32
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mediblec_vitiux`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `text`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Aprovecha tus videos favoritos a sólo $9.000', 'google.cl', NULL, NULL),
(2, 'Aprovecha tus facebook favoritos a sólo $9.000', 'facebook.com', NULL, NULL),
(3, 'Aprovecha tus youtube favoritos a sólo $9.000', 'youtube.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'amateur', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'amateur', NULL, NULL),
(2, 'cosplay', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'cosplay', NULL, NULL),
(3, 'chilena', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'chilena', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_video`
--

CREATE TABLE `category_video` (
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_video`
--

INSERT INTO `category_video` (`category_id`, `video_id`) VALUES
(1, 1),
(3, 1),
(1, 2),
(2, 2),
(3, 2);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_07_07_152445_create_videos_table', 1),
(4, '2020_07_07_153147_create_packs_table', 1),
(5, '2020_07_07_153158_create_staff_table', 1),
(6, '2020_07_07_153207_create_categories_table', 1),
(7, '2020_07_07_155740_create_staff_video_table', 1),
(8, '2020_07_07_155754_create_category_video_table', 1),
(9, '2020_07_08_032203_create_advertisements_table', 1),
(10, '2020_07_08_163107_create_tags_table', 1),
(11, '2020_07_08_170650_create_tag_video_table', 1),
(12, '2020_07_08_185345_create_pack_staff_table', 1),
(13, '2020_07_08_191715_create_pack_video_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `packs`
--

CREATE TABLE `packs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL,
  `promoted` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packs`
--

INSERT INTO `packs` (`id`, `name`, `description`, `slug`, `featured`, `promoted`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Martina Queen en casa', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'martina-queen-en-casa', 0, 0, 3000, NULL, NULL),
(2, 'Martina Queen en el trabajo', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'martina-queen-en-el-trabajo', 0, 0, 3000, NULL, NULL),
(3, 'Martina Queen en el patio', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'martina-queen-en-el-patio', 0, 0, 3000, NULL, NULL),
(4, 'Martina Queen en la playa', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'martina-queen-en-el-playa', 0, 0, 3000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pack_staff`
--

CREATE TABLE `pack_staff` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `pack_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pack_staff`
--

INSERT INTO `pack_staff` (`staff_id`, `pack_id`) VALUES
(2, 1),
(3, 1),
(2, 2),
(3, 2),
(2, 3),
(3, 3),
(2, 4),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pack_video`
--

CREATE TABLE `pack_video` (
  `pack_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pack_video`
--

INSERT INTO `pack_video` (`pack_id`, `video_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(2, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Dana Spice', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'dana-spice', NULL, NULL),
(2, 'MartinaQueen', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'martinaqueen', NULL, NULL),
(3, 'Skin', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'skin', NULL, NULL),
(4, 'Dana Ipsum', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'dana-ipsum', NULL, NULL),
(5, 'Dana Lorem', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'dana-lorem', NULL, NULL),
(6, 'Lorem Ipsum', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'lorem-ipsum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff_video`
--

CREATE TABLE `staff_video` (
  `staff_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_video`
--

INSERT INTO `staff_video` (`staff_id`, `video_id`) VALUES
(2, 1),
(3, 1),
(2, 2),
(3, 2),
(2, 3),
(2, 4),
(2, 5),
(2, 6),
(2, 7),
(2, 8),
(2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'amateur', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'amateur', NULL, NULL),
(2, 'cosplay', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'cosplay', NULL, NULL),
(3, 'chilena', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'chilena', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tag_video`
--

CREATE TABLE `tag_video` (
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `video_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tag_video`
--

INSERT INTO `tag_video` (`tag_id`, `video_id`) VALUES
(1, 1),
(3, 1),
(1, 2),
(2, 2),
(1, 3),
(3, 4),
(2, 5),
(3, 5),
(3, 6),
(3, 7),
(2, 8),
(1, 9);

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
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'oZK7rAWUml', 'YAvaM4aszm@gmail.com', NULL, '$2y$10$iIgg48yHltASr57oAaXJu.l4aTeTwBaDOILHM6mnVlnR2oQRsi01y', 'admin', NULL, NULL, NULL),
(2, 'vtd0yohAc6', 'gABsiGGN3T@gmail.com', NULL, '$2y$10$.B7R8jhcgu9N7ry2ArBVve0oXtfRVZS80AttgVsbXrpeqkMvgdhfG', 'customer', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL,
  `promoted` int(11) NOT NULL,
  `boosted` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `description`, `slug`, `featured`, `promoted`, `boosted`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Con el vecino de al lado', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'con-el-vecino-de-al-lado', 1, 0, 0, 2500, NULL, NULL),
(2, 'Al aire libre', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'al-aire-libre', 0, 1, 0, 2500, NULL, NULL),
(3, 'Probando al aire libre', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'probando-al-aire-libre', 0, 0, 1, 2500, NULL, NULL),
(4, 'Disfrutando mientras hago cosplay', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'disfrutando-mientras-hago-cosplay', 0, 0, 1, 2500, NULL, NULL),
(5, 'La primera vez', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'la-primera-vez', 0, 0, 1, 2500, NULL, NULL),
(6, 'La fantasía de mi pololo', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'la-fantasia-de-mi-pololo', 0, 0, 1, 2500, NULL, NULL),
(7, 'Que no se sepa', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'que-no-se-sepa', 0, 0, 0, 2500, NULL, NULL),
(8, 'Experimentando con mi amigo', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'experimentando-con-mi-amigo', 0, 0, 0, 2500, NULL, NULL),
(9, 'Una sesión de fotos muy entretenida', 'Una chica, cansada de estar aburrida sola en su casa, se propone tener sexo con su vecino de al lado. Pero claro, primero deberá prepararse para darle una que otra sorpresita.', 'una-sesion-de-fotos-muy-entretenida', 0, 0, 0, 2500, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `category_video`
--
ALTER TABLE `category_video`
  ADD KEY `category_video_category_id_index` (`category_id`),
  ADD KEY `category_video_video_id_index` (`video_id`);

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
-- Indexes for table `packs`
--
ALTER TABLE `packs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `packs_slug_unique` (`slug`);

--
-- Indexes for table `pack_staff`
--
ALTER TABLE `pack_staff`
  ADD KEY `pack_staff_staff_id_index` (`staff_id`),
  ADD KEY `pack_staff_pack_id_index` (`pack_id`);

--
-- Indexes for table `pack_video`
--
ALTER TABLE `pack_video`
  ADD KEY `pack_video_pack_id_index` (`pack_id`),
  ADD KEY `pack_video_video_id_index` (`video_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_slug_unique` (`slug`);

--
-- Indexes for table `staff_video`
--
ALTER TABLE `staff_video`
  ADD KEY `staff_video_staff_id_index` (`staff_id`),
  ADD KEY `staff_video_video_id_index` (`video_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_slug_unique` (`slug`);

--
-- Indexes for table `tag_video`
--
ALTER TABLE `tag_video`
  ADD KEY `tag_video_tag_id_index` (`tag_id`),
  ADD KEY `tag_video_video_id_index` (`video_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `videos_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `packs`
--
ALTER TABLE `packs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
