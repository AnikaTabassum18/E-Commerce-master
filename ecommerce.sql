-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 12:13 PM
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
-- Database: `ecommerce`
--

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
(1, '2022_12_01_090537_create_users_table', 1),
(2, '2022_12_03_100043_create_table_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `table_products`
--

CREATE TABLE `table_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_products`
--

INSERT INTO `table_products` (`id`, `name`, `price`, `description`, `category`, `gallery`, `created_at`, `updated_at`) VALUES
(6, 'LG K22 Mobile', '15,000', 'Cleaning your smartphone – while always recommended – is now more important than ever. It’s estimated that we touch our phone every 12 minutes, so our hygiene needs to extend to the device we use most.', 'smart-phone', 'https://www.lg.com/us/cell-phones/lg-lmk200qm0aucltn-us-cellular-k22#', NULL, NULL),
(7, 'LG UP7750 55\'\' UHD 4K TV', '45,000', 'LG UHD TVs surpass your expectations every time. Experience lifelike picture quality and vivid colours with four times more pixel accuracy than Full HD.', 'smart-TV', 'https://www.lg.com/bd/tvs/lg-55up7750ptb', NULL, NULL),
(8, 'LG WQXGA', '55,000', 'WQXGA (2560x1600) display provides clear and vivid color, featuring twice the resolution of Full HD. So it enables you to perform tasks efficiently – such as typing, retouching or even coding.', 'Laptop', 'https://www.lg.com/bd/laptops', NULL, NULL),
(9, 'LG UHD 4K 27\'\' IPS Display Monitor', '75,000', 'Enjoy flawless visuals and the true vibrancy of color with LG UHD 4K HDR Monitor. Content creators working on HDR content will appreciate its capability to reproduce brightness and contrast for previews and editing.', 'IPS Display Monitor', 'https://www.lg.com/bd/consumer-monitors/lg-27up850-w', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Anika Tabassum', 'anika123@gmail.com', '$2y$10$6Z.NKG526PwsFpUqwnJF7.B9bv5YNqVpN2.rMkeFL5Nf.8SVpyflO', NULL, NULL),
(2, 'Akash Mia', 'akash@gmail.com', '$2y$10$Lac.M/2h.gwXflo7PfP3cu5LagANUdK/xo6MELFo9bgvOpcUSzgga', NULL, NULL),
(3, 'Md Jahid', 'jahid@gmail.com', '$2y$10$UH9pO1Mx61MgCQQ3kRwe1.d1x9qxxqGHnWGmBM0p4ot337B/5hXca', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_products`
--
ALTER TABLE `table_products`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_products`
--
ALTER TABLE `table_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
