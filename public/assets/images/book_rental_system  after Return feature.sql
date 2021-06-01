-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 09:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_rental_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `requested_books`
--

CREATE TABLE `requested_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requested_books`
--

INSERT INTO `requested_books` (`id`, `status`, `book_id`, `user_id`, `created_at`, `updated_at`) VALUES
(19, 0, 29, 7, '2021-05-30 10:46:41', '2021-05-30 14:09:38'),
(20, 0, 32, 7, '2021-05-30 10:56:12', '2021-05-30 14:10:12'),
(22, -1, 32, 8, '2021-05-30 11:49:47', '2021-05-31 16:59:25'),
(24, 0, 31, 8, '2021-05-30 14:12:55', '2021-05-30 14:12:55'),
(25, 1, 27, 8, '2021-05-31 06:30:28', '2021-05-31 06:41:59'),
(26, 1, 22, 8, '2021-05-31 16:53:30', '2021-05-31 16:53:59'),
(27, 0, 27, 8, '2021-05-31 16:54:35', '2021-05-31 16:54:35'),
(28, 0, 29, 8, '2021-05-31 16:55:20', '2021-05-31 16:55:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requested_books`
--
ALTER TABLE `requested_books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requested_books_book_id_foreign` (`book_id`),
  ADD KEY `requested_books_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `requested_books`
--
ALTER TABLE `requested_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requested_books`
--
ALTER TABLE `requested_books`
  ADD CONSTRAINT `requested_books_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `requested_books_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
