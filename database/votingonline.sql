-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2019 at 10:08 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `votingonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `calons`
--

CREATE TABLE `calons` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengalaman` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calons`
--

INSERT INTO `calons` (`id`, `nik`, `nama`, `foto`, `deskripsi`, `pendidikan`, `pengalaman`, `keterangan`, `status`, `created_at`, `updated_at`) VALUES
(1, '12345678965', 'khani`123456', 'C:\\xampp\\tmp\\php40E7.tmp', 'assulkhani', 'AXSDVCDSDVXC', 'pernah', 'ahahahah', '0', '2019-07-09 00:35:47', '2019-07-09 01:03:22'),
(2, '1234567896543246', ';ksadnfkjankl`', 'calon/GFvLZOjhxmQSlDJFqMppd0PqIKi8wpQ6eFgL7giq.png', 'assulkhani', 'AXSDVCDSDVXC', 'pernah', 'ahahahah', '0', '2019-07-09 00:43:39', '2019-07-10 05:17:00'),
(3, '1234567', 'werfgthjk', 'calon/79OR63e0KElIHJo9EZ6YGXQfYo6e5thAU1sV1Hs9.png', 'sdfghjk', 'wertyujio', 'ertyuikol', 'ertyui', '0', '2019-07-09 00:45:37', '2019-07-10 05:17:04'),
(4, '1234567896', 'khani', 'calon/UiJqP464n2Z5YM5RQaPvz1Yf0HAU575xnvAKTido.png', 'asda', 'asdsf', 'asdfs', 'asfsdgfas', '0', '2019-07-10 02:26:39', '2019-07-10 05:17:08'),
(5, '1234567890987', 'Abu Muslih Assulkhani', 'calon/T6tsMsgpgAzXQLk6RkZHzYsfunSlwlAooy6jfGIp.jpeg', 'Ingin mensejaterakan masyarakat', 'SMA', 'Pernah bekerja di PT', 'blablabla', '1', '2019-07-10 05:18:38', '2019-07-10 05:18:38'),
(7, '123456789', 'Angga Dwiyono', 'calon/JLRpQZtUmilllKJvwAVL7RrWDNPaQDuoUhhsQ7mI.jpeg', 'meningkatkan pembanguna desa', 'SMK', 'Pernah bekerja di PT', 'blablabla', '1', '2019-07-10 05:20:38', '2019-07-10 05:20:38'),
(8, '09876543', 'Supriyuda', 'calon/f21M5FNLKCrrkUEs71jsMRciKsIo1bmbso3cf7aS.jpeg', 'Ingin mensejaterakan masyarakat pesisir', 'SMK', 'Pernah bekerja di PT', 'hahahaha', '1', '2019-07-10 05:22:50', '2019-07-10 05:22:50'),
(9, '0987654321123', 'Abu Muslih Assulkhani 1234567', 'calon/QYKiPWBB5wiLp7meJ2XoJPk0wp07lTpsWPqepFYH.jpeg', 'Ingin mensejaterakan masyarakat sekitar', 'SMA', 'Pernah bekerja di PT', 'blablabla', '0', '2019-07-13 23:07:23', '2019-07-13 23:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_09_035939_create_calons_table', 1),
(4, '2019_07_09_042302_create_pemilihs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemilihs`
--

CREATE TABLE `pemilihs` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat_lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemilihs`
--

INSERT INTO `pemilihs` (`id`, `nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `jenis_kelamin`, `status`, `created_at`, `updated_at`) VALUES
(1, '12345678965', 'Abu Muslih Assulkhani', 'Tegal', '1998-08-10', 'balamoa', 'laki-laki', '1', '2019-07-09 01:05:45', '2019-07-09 01:05:45'),
(2, '12234564324', 'sakjdhhsh', 'askjbdjawb', '2019-07-10', 'sadfsefg', 'laki-laki', '0', '2019-07-10 02:26:03', '2019-07-10 05:11:09'),
(3, '0987654321', 'Abu Muslih Assulkhani', 'Tegal', '1998-07-20', 'jl. Raya Balamoa Timur No.2 ds. Karangjati kec. Tarub Kab. Tegal', 'laki-laki', '1', '2019-07-10 05:12:35', '2019-07-10 05:12:35'),
(4, '098765432112345', 'Angga Dwiyono 12345', 'Brebes', '2019-06-12', 'Jl.in aja saja dulu no. 08 Kab. Brebes', 'laki-laki', '0', '2019-07-13 23:03:51', '2019-07-13 23:04:45');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'assulkhani', 'assulkhani08@gmail.com', NULL, '$2y$10$9l0dsZ3/TFXb/YsA1lcTZeAEDpemEboOTFer4SLzXh7uiM7JXjt/u', NULL, '2019-07-10 02:11:33', '2019-07-10 02:11:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calons`
--
ALTER TABLE `calons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `calons_nik_unique` (`nik`);

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
-- Indexes for table `pemilihs`
--
ALTER TABLE `pemilihs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pemilihs_nik_unique` (`nik`);

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
-- AUTO_INCREMENT for table `calons`
--
ALTER TABLE `calons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pemilihs`
--
ALTER TABLE `pemilihs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
