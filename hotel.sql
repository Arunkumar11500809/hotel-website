-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2017 at 02:00 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_master`
--

CREATE TABLE `hotel_master` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(100) DEFAULT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `address` text,
  `total_rooms` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_master`
--

INSERT INTO `hotel_master` (`id`, `hotel_name`, `contact_number`, `image`, `address`, `total_rooms`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ramada Encore', '99887776655, 1234567890', 'ramada.jpg', 'Jawahar Nagar Area, Jalandhar', 56, '2017-11-19 06:30:43', NULL, NULL),
(2, 'Days Hotel', NULL, 'dayshotel.jpg', 'Jyoti Chowk, Jalandhar', 46, '2017-11-19 06:30:43', NULL, NULL),
(3, 'Leo Fort', NULL, 'leofort.jpg', 'Near B.M.C Chowk, Jalandhar', 31, '2017-11-19 06:30:43', NULL, NULL),
(4, 'Ambassador', NULL, 'ambassador.jpg', 'Bsf Chowk, G.T. Road, Jalandhar', 85, '2017-11-19 06:30:43', NULL, NULL),
(5, 'Radisson', '1234567890', 'ambassador.jpg', 'near bus stand', 89, '2017-11-21 13:03:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_package`
--

CREATE TABLE `hotel_package` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `detail` text,
  `image` varchar(200) DEFAULT NULL,
  `price` float DEFAULT '0',
  `package_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_package`
--

INSERT INTO `hotel_package` (`id`, `title`, `detail`, `image`, `price`, `package_id`, `hotel_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12 Night/13 Days\n', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.', 'iplace-2.jpg', 15000, 1, 1, '2017-11-19 15:22:47', NULL, NULL),
(2, '6 Night/7 Days', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.', 'iplace-1.jpg', 12000, 1, 1, '2017-11-19 15:22:47', NULL, NULL),
(3, '14 Night/15 Days', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.', 'iplace-3.jpg', 18000, 1, 1, '2017-11-19 15:22:47', NULL, NULL),
(4, '14 Night/15 Days', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.', 'iplace-5.jpg', 11400, 1, 1, '2017-11-19 15:22:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_master`
--

CREATE TABLE `package_master` (
  `id` int(11) NOT NULL,
  `package_name` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_master`
--

INSERT INTO `package_master` (`id`, `package_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Family Packages', '2017-11-19 06:08:14', NULL, NULL),
(2, 'Group Packages', '2017-11-19 06:08:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'user1', 'user1@gmail.com', '$2y$10$F0bItZZDfDTCdhAvtDO1RulVnmLAaLWwcyUSOjYXLSfRvFQaKLCpe', 'k18sqNuT0xvQTHUsQFyv493bfCTRWg4TKFBUIxZG2tHCfMwWYRBMwjh2EVs4', '2017-11-19 20:31:47', '2017-11-19 20:31:47'),
(2, 'user2', 'user2@gmail.com', '$2y$10$yFdkpyl/Oed3HHZqf2fBxef7xD86s/wCmhZrGMRF2EbtdY6cpeAcO', NULL, '2017-11-20 20:32:43', '2017-11-20 20:32:43'),
(6, 'user4', 'user4@gmail.com', '$2y$10$F0bItZZDfDTCdhAvtDO1RulVnmLAaLWwcyUSOjYXLSfRvFQaKLCpe', 'U25KlgWz2LFwXu7ONI3toZt6rBh6HIJ3UJxCGnjVFwArDlgDAws8qVdRoiQ8', '2017-11-20 21:03:16', '2017-11-20 21:03:16'),
(5, 'user3', 'user3@gmail.com', '$2y$10$EJ6uH8YbI0b8G4pZNoy07OJrxFotuYb66SMc1ukOhwTJqW1Ldqnge', 'V1OQwzsQrgPy65j4Yx8DOZcTzLRjZSBUfNCSJLoPZFAZg33V9x8l9hRtHgSH', '2017-11-20 21:00:14', '2017-11-20 21:00:14'),
(7, 'arun', 'arun@gmail.com', '$2y$10$w0IMWiLIgC5MVv9SKFI9guFl/GitxDc7xcSjRxA4gNDFxpvliygxm', '58Cxh9sAVv8d52VHNetJY72YSgZmlDpOViA713XHbLv9Vc27jOuwEcW9jNzj', '2017-11-21 07:02:35', '2017-11-21 07:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_booking`
--

CREATE TABLE `user_booking` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `hotel_package_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` float DEFAULT '0',
  `no_of_adult` int(11) DEFAULT '0',
  `no_of_children` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_booking`
--

INSERT INTO `user_booking` (`id`, `package_id`, `hotel_package_id`, `hotel_id`, `user_id`, `price`, `no_of_adult`, `no_of_children`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 3, 1, 4, 0, 10, 20, '2017-11-20 20:34:23', '2017-11-20 20:34:23', NULL),
(2, 1, 1, 1, 5, 0, 10, 40, '2017-11-20 21:00:14', '2017-11-20 21:00:14', NULL),
(3, 1, 1, 1, 6, 0, 1, 3, '2017-11-20 21:03:16', '2017-11-20 21:03:16', NULL),
(4, 1, 3, 1, 6, 0, 50, 60, '2017-11-20 21:07:01', '2017-11-20 21:07:01', NULL),
(5, 1, 3, 1, 6, 18000, 58, 55, '2017-11-20 21:08:34', '2017-11-20 21:08:34', NULL),
(6, 1, 1, 1, 7, 15000, 5, 2, '2017-11-21 07:02:35', '2017-11-21 07:02:35', NULL),
(7, 1, 1, 1, 7, 15000, 89, 5, '2017-11-21 07:03:09', '2017-11-21 07:03:09', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_master`
--
ALTER TABLE `hotel_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_package`
--
ALTER TABLE `hotel_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_master`
--
ALTER TABLE `package_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_booking`
--
ALTER TABLE `user_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_master`
--
ALTER TABLE `hotel_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hotel_package`
--
ALTER TABLE `hotel_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `package_master`
--
ALTER TABLE `package_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user_booking`
--
ALTER TABLE `user_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
