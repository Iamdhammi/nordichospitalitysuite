-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2019 at 11:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nordic`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `author` varchar(191) NOT NULL,
  `date` varchar(191) NOT NULL,
  `comment` varchar(191) NOT NULL,
  `postcontent` text NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`id`, `title`, `author`, `date`, `comment`, `postcontent`, `content`, `created_at`, `updated_at`) VALUES
(1, 'CRAS JUSTO ODIO DAPIBUS AC FACILISIS', 'ADMIN', '24 MAY 2013', '13 COMMENTS', 'Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at nulla vre consectetur est at lobortis.', 'Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at nulla vre consectetur est at lobortis.', '2019-08-09 19:12:01', '2019-08-09 19:12:01'),
(2, 'CRAS JUSTO ODIO DAPIBUS AC FACILISIS', 'ADMIN', '24 MAY 2013', '13 COMMENTS', 'Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at nulla vre consectetur est at lobortis.', 'Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Sed posuere consectetur est at nulla vre consectetur est at lobortis.', '2019-08-09 19:13:23', '2019-08-09 19:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `room_type` varchar(191) NOT NULL,
  `room_no` varchar(191) NOT NULL,
  `guests` varchar(191) NOT NULL,
  `arrival` varchar(191) NOT NULL,
  `depart` varchar(191) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `email`, `phone`, `room_type`, `room_no`, `guests`, `arrival`, `depart`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Damilola', 'test@test.com', '09020080723', 'Deluxe Room', '1', '1', '08/13/2019', '08/15/2019', '51000', '2019-08-10 09:35:04', '2019-08-10 09:35:04'),
(2, 'Samuelo Bello', 'test@test.com', '08105389434', 'Deluxe Room', '2', '1', '08/17/2019', '08/18/2019', '59000', '2019-08-10 10:10:27', '2019-08-10 10:10:27'),
(3, 'Bello', 'samuel@astract.com.ng', '09020080723', 'Deluxe Room', '1', '1', '08/21/2019', '08/23/2019', '51000', '2019-08-10 10:35:51', '2019-08-10 10:35:51'),
(4, 'Damilola', 'damilolabelloforeal@gmail.com', '09020080723', 'Nordic Suite Balcony', '1', '1', '08/17/2019', '08/18/2019', '39500', '2019-08-10 10:50:01', '2019-08-10 10:50:01'),
(5, 'Damilola', 'damilolabelloforeal@gmail.com', '09020080723', 'Nordic Suite Balcony', '2', '1', '08/17/2019', '08/18/2019', '79000', '2019-08-10 10:50:59', '2019-08-10 10:50:59'),
(6, 'Bello', 'admin@cmg.com', '08105389434', 'Standard Room', '1', '1', '08/24/2019', '08/25/2019', '18500', '2019-08-10 11:07:08', '2019-08-10 11:07:08'),
(7, 'Bello', 'admin@cmg.com', '08105389434', 'Standard Room', '1', '1', '08/24/2019', '08/25/2019', '18500', '2019-08-10 11:09:34', '2019-08-10 11:09:34'),
(8, 'Bello', 'admin@cmg.com', '09020080723', 'Nordic Suite', '1', '1', '08/24/2019', '08/25/2019', '35500', '2019-08-10 11:10:07', '2019-08-10 11:10:07');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `room_type` varchar(191) NOT NULL,
  `room_no` varchar(191) NOT NULL,
  `guests` varchar(191) NOT NULL,
  `arrival` varchar(191) NOT NULL,
  `depart` varchar(191) NOT NULL,
  `payment_ref` varchar(191) NOT NULL,
  `payment_id` varchar(191) NOT NULL,
  `amount` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `email`, `phone`, `room_type`, `room_no`, `guests`, `arrival`, `depart`, `payment_ref`, `payment_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'Bello Damilola', 'samuel@astract.com.ng', '08105389434', 'Deluxe Room', '1', '1', '08/06/2019', '08/07/2019', '467100003', '229283331', '25500', '2019-08-02 12:10:02', '2019-08-02 12:10:02'),
(2, 'Bello Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/07/2019', '08/08/2019', '692368806', '229468040', '25500', '2019-08-02 17:08:13', '2019-08-02 17:08:13'),
(3, 'Bello Damilola', 'damilolabello4real@gmail.com', '09020080723', 'Deluxe Balcony', '2', '1', '08/21/2019', '08/22/2019', '312150916', '229486617', '59000', '2019-08-02 17:29:19', '2019-08-02 17:29:19'),
(4, 'Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Standard Room', '1', '1', '08/28/2019', '08/29/2019', '75667797', '229512419', '18500', '2019-08-02 17:51:41', '2019-08-02 17:51:41'),
(5, 'THE BlOG WITH FLAYK', 'test@test.com', '09020080723', 'Deluxe Balcony', '1', '1', '08/09/2019', '08/10/2019', '864487', '234197199', '29500', '2019-08-08 20:22:16', '2019-08-08 20:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
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
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
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
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
