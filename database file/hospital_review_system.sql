-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2020 at 02:04 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_review_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `username` varchar(55) NOT NULL,
  `hospitalname` varchar(100) NOT NULL,
  `area` varchar(50) NOT NULL,
  `bg` varchar(10) NOT NULL,
  `comment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`username`, `hospitalname`, `area`, `bg`, `comment`) VALUES
('Rahim', 'Goodheal', 'Chittagong', 'A+', ' plz I need the blood before 6 pm');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `note` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `uid`, `title`, `note`, `created_at`, `updated_at`) VALUES
(1, 7, 'Apollo', 'very good', '2020-09-12 23:31:32', '2020-09-12 23:31:32'),
(2, 7, 'Apollo Hospital, Dhaka', 'well decorated.', '2020-09-12 23:39:20', '2020-09-12 23:39:20'),
(3, 7, 'dfdfd', 'sdsdsd', '2020-09-12 23:52:04', '2020-09-12 23:52:04'),
(4, 7, 'dfdfdd', 'dfdffdfdfd', '2020-09-12 23:52:55', '2020-09-12 23:52:55'),
(5, 7, 'dfdfd', 'ddfdfdf', '2020-09-12 23:53:19', '2020-09-12 23:53:19'),
(6, 7, 'DMC', 'Excellent', '2020-09-13 00:46:38', '2020-09-13 00:46:38'),
(7, 7, 'test', 'New Experience', '2020-09-13 09:07:59', '2020-09-13 09:07:59'),
(8, 7, 'United Hospita, Gulshan 2, Dhaka', 'Recomended', '2020-09-13 17:27:46', '2020-09-13 17:27:46'),
(9, 7, 'Kurmitola Hospital, Dhaka', 'New Experience', '2020-09-13 21:35:44', '2020-09-13 21:35:44'),
(10, 7, 'Bangladesh medical, Uttara', 'Services were good!!!', '2020-09-14 11:21:35', '2020-09-14 11:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `token_expire` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `gender`, `dob`, `photo`, `token`, `token_expire`, `created_at`, `verified`, `deleted`) VALUES
(6, 'mushfik', 'farsimarine@gmail.com', '$2y$10$C5mNXsPO3Lfy4PRjnI/5fOnve8xE66Yss.1zJbEJBAdKIUg1a8t4O', '', '', '', '', '65fd9cb03015a', '2020-09-12 19:10:25', '2020-09-11 20:54:07', 0, 1),
(7, 'bipasha', 'backstage707@gmail.com', '$2y$10$VYZlgg3og/QINEcI9T1pfeyNg3mZFcu5wcYII.L6xiJMiWVjWoMha', '', '', '', '', '59fb55fd1ff42', '2020-09-14 12:20:07', '2020-09-11 21:34:17', 0, 1),
(8, 'Simon', 'gdfsgfdg@gmail.com', '$2y$10$j7Nq2EEeekcTTNA/v5qvE.ELbTIglIBDMB/LH2B4K9mkPFvs1OZTm', '', '', '', '', '', '2020-09-13 11:47:59', '2020-09-13 11:47:59', 0, 1),
(9, 'nissan', 'nissan@gmail.com', '$2y$10$63Yclnyu6hvCv4OouQiyae45GdGJ3Fyq5NBEiU.BNGEe7DToN1EHC', '', '', '', '', '', '2020-09-14 11:16:43', '2020-09-14 11:16:43', 0, 1),
(10, 'Rifat Ahammed', 'reardj007@gmail.com', '$2y$10$6lpvCSHCFaemn.TUA1ZCaulOSEbfQECpPCbgtb4nN5.bjxALeKfEC', '', '', '', '', '', '2020-09-15 11:18:41', '2020-09-15 11:18:41', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
