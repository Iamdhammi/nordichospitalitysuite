-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2019 at 01:36 PM
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
(8, 'Bello', 'admin@cmg.com', '09020080723', 'Nordic Suite', '1', '1', '08/24/2019', '08/25/2019', '35500', '2019-08-10 11:10:07', '2019-08-10 11:10:07'),
(9, 'Bello Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '09/02/2019', '09/24/2019', '561000', '2019-08-12 06:56:10', '2019-08-12 06:56:10'),
(10, 'Damilola', 'samuel@astract.com.ng', '08105389434', 'Deluxe Room', '1', '1', '08/17/2019', '08/18/2019', '25500', '2019-08-12 09:33:53', '2019-08-12 09:33:53'),
(11, 'Bello', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Balcony', '1', '1', '08/17/2019', '08/18/2019', '29500', '2019-08-12 09:58:04', '2019-08-12 09:58:04'),
(12, 'Bello', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Balcony', '1', '1', '08/17/2019', '08/18/2019', '29500', '2019-08-12 10:00:24', '2019-08-12 10:00:24'),
(13, 'Bello', 'damilolabello4real@gmail.com', '08105389434', 'Nordic Suite', '1', '1', '08/24/2019', '08/25/2019', '35500', '2019-08-12 10:09:32', '2019-08-12 10:09:32'),
(14, 'MUSIC', 'samuel@astract.com.ng', '08105389434', 'Nordic Suite', '1', '1', '08/14/2019', '08/15/2019', '35500', '2019-08-12 10:10:43', '2019-08-12 10:10:43'),
(15, 'nmj', 'damilolabello4real@gmail.com', '08105389434', 'Nordic Suite', '1', '1', '08/14/2019', '08/15/2019', '35500', '2019-08-12 10:15:01', '2019-08-12 10:15:01'),
(16, 'MUSIC', 'test@test.com', '08105389434', 'Nordic Suite', '1', '1', '08/13/2019', '08/14/2019', '35500', '2019-08-12 10:32:09', '2019-08-12 10:32:09'),
(17, 'Bello', 'test@test.com', '08105398754', 'Deluxe Room', '1', '1', '08/13/2019', '08/14/2019', '25500', '2019-08-12 11:35:27', '2019-08-12 11:35:27'),
(18, 'Bello Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:17:00', '2019-08-15 09:17:00'),
(19, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:21:12', '2019-08-15 09:21:12'),
(20, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:27:32', '2019-08-15 09:27:32'),
(21, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:28:14', '2019-08-15 09:28:14'),
(22, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:30:51', '2019-08-15 09:30:51'),
(23, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:32:03', '2019-08-15 09:32:03'),
(24, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:34:16', '2019-08-15 09:34:16'),
(25, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:35:00', '2019-08-15 09:35:00'),
(26, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:40:12', '2019-08-15 09:40:12'),
(27, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 09:40:46', '2019-08-15 09:40:46'),
(28, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 11:24:44', '2019-08-15 11:24:44'),
(29, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '25500', '2019-08-15 11:25:44', '2019-08-15 11:25:44'),
(30, 'MUSIC', 'admin@admin.com', '08105389434', 'Deluxe Balcony', '1', '1', '08/15/2019', '08/16/2019', '29500', '2019-08-15 12:31:08', '2019-08-15 12:31:08'),
(31, 'Bello', 'test@test.com', '08105389434', 'Deluxe Room', '5', '1', '08/15/2019', '08/16/2019', '127500', '2019-08-15 13:09:34', '2019-08-15 13:09:34'),
(32, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '3', '1', '08/15/2019', '08/16/2019', '76500', '2019-08-15 13:34:32', '2019-08-15 13:34:32'),
(33, 'Damilola', 'samuel@astract.com.ng', '08105389434', 'Nordic Suite', '1', '1', '08/15/2019', '08/16/2019', '35500', '2019-08-15 13:52:29', '2019-08-15 13:52:29'),
(34, 'Bello', 'test@test.com', '09020080723', 'Standard Room', '2', '1', '08/17/2019', '08/18/2019', '37000', '2019-08-16 09:46:09', '2019-08-16 09:46:09'),
(35, 'Bello Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-19 22:26:19', '2019-08-19 22:26:19'),
(36, 'Bello Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/26/2019', '51000', '2019-08-22 12:03:45', '2019-08-22 12:03:45'),
(37, 'Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 18:16:03', '2019-08-22 18:16:03'),
(38, 'Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 18:16:42', '2019-08-22 18:16:42'),
(39, 'Bello Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Room', '2', '1', '08/22/2019', '08/25/2019', '153000', '2019-08-22 19:54:19', '2019-08-22 19:54:19'),
(40, 'Bello Damilola', 'damilolabello4real@gmail.com', '09020080723', 'Deluxe Room', '2', '1', '08/24/2019', '08/26/2019', '102000', '2019-08-22 19:57:51', '2019-08-22 19:57:51'),
(41, 'Bello Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/26/2019', '51000', '2019-08-22 20:00:31', '2019-08-22 20:00:31'),
(42, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:09:52', '2019-08-22 20:09:52'),
(43, 'Bello Damilola', 'damilolabello4real@gmail.com', '09020080723', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:15:49', '2019-08-22 20:15:49'),
(44, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:16:40', '2019-08-22 20:16:40'),
(45, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:21:47', '2019-08-22 20:21:47'),
(46, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:25:22', '2019-08-22 20:25:22'),
(47, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:29:07', '2019-08-22 20:29:07'),
(48, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:36:40', '2019-08-22 20:36:40'),
(49, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:38:13', '2019-08-22 20:38:13'),
(50, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:39:32', '2019-08-22 20:39:32'),
(51, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:45:33', '2019-08-22 20:45:33'),
(52, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 20:58:40', '2019-08-22 20:58:40'),
(53, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 21:16:31', '2019-08-22 21:16:31'),
(54, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 21:16:56', '2019-08-22 21:16:56'),
(55, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 21:17:03', '2019-08-22 21:17:03'),
(56, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 22:29:07', '2019-08-22 22:29:07'),
(57, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 22:29:27', '2019-08-22 22:29:27'),
(58, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 23:20:40', '2019-08-22 23:20:40'),
(59, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 23:21:51', '2019-08-22 23:21:51'),
(60, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 23:22:44', '2019-08-22 23:22:44'),
(61, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 23:23:25', '2019-08-22 23:23:25'),
(62, 'Bello Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '25500', '2019-08-22 23:40:46', '2019-08-22 23:40:46'),
(63, 'Bello', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Balcony', '1', '1', '08/24/2019', '08/26/2019', '59000', '2019-08-23 00:08:40', '2019-08-23 00:08:40');

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
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room_type` varchar(191) NOT NULL,
  `price` varchar(191) NOT NULL,
  `room_no` varchar(191) NOT NULL,
  `no_rooms_available` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room_type`, `price`, `room_no`, `no_rooms_available`, `created_at`, `updated_at`) VALUES
(1, 'Deluxe Room', '25500', '8', '8', '2019-08-22 12:31:59', '2019-08-22 11:31:59'),
(2, 'Deluxe Balcony', '29500', '4', '4', '2019-08-22 12:31:59', '2019-08-22 11:31:59'),
(3, 'Nordic Suite', '35500', '2', '2', '2019-08-22 12:32:00', '2019-08-22 11:32:00'),
(4, 'Nordic Suite Balcony', '39500', '4', '4', '2019-08-22 12:32:00', '2019-08-22 11:32:00'),
(5, 'Standard Room', '18500', '2', '2', '2019-08-22 12:31:59', '2019-08-22 11:31:59');

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
(16, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/17/2019', '680280', '239395286', '25500', '2019-08-15 17:59:05', '2019-08-15 09:31:06'),
(17, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '1', '1', '08/15/2019', '08/16/2019', '789680', '239457332', '25500', '2019-08-16 09:18:45', '2019-08-15 11:25:59'),
(18, 'MUSIC', 'admin@admin.com', '08105389434', 'Deluxe Balcony', '1', '1', '08/15/2019', '08/16/2019', '594691', '239489447', '29500', '2019-08-15 12:32:20', '2019-08-15 12:32:20'),
(20, 'Damilola', 'test@test.com', '08105389434', 'Deluxe Room', '3', '1', '08/15/2019', '08/16/2019', '378439', '239590957', '76500', '2019-08-15 13:35:03', '2019-08-15 13:35:03'),
(21, 'Damilola', 'samuel@astract.com.ng', '08105389434', 'Nordic Suite', '1', '1', '08/15/2019', '08/16/2019', '104612', '239627152', '35500', '2019-08-15 13:53:33', '2019-08-15 13:53:33'),
(22, 'Bello', 'test@test.com', '09020080723', 'Standard Room', '2', '1', '08/17/2019', '08/18/2019', '986240', '240480618', '37000', '2019-08-16 09:46:30', '2019-08-16 09:46:30'),
(23, 'Bello Damilola', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '329628', '243735227', '25500', '2019-08-19 22:26:46', '2019-08-19 22:26:46'),
(24, 'Bello Damilola', 'damilolabelloforeal@gmail.com', '08105389434', 'Deluxe Room', '1', '1', '08/24/2019', '08/25/2019', '164294', '246228609', '25500', '2019-08-22 23:38:28', '2019-08-22 23:38:28'),
(25, 'Bello', 'damilolabello4real@gmail.com', '08105389434', 'Deluxe Balcony', '1', '1', '08/24/2019', '08/26/2019', '735174', '246241183', '59000', '2019-08-23 00:09:54', '2019-08-23 00:09:54');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bello Damilola', 'admin@admin.com', '$2y$10$E8o99J4dRH0RPc8I3bOwt.Nh9UP26JGGes6BjQviXl4ONWfwtk67S', 'yp5l0Z4mcip48njjidoFIsg2Fvf6uOXiGCb4JwZxUxJ7SqR2mTY0khzE1be1', '2019-08-15 20:13:07', '2019-08-15 20:13:07');

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
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
