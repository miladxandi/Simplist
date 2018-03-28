-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 06:58 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simplist_simplist`
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

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_Id` int(100) NOT NULL,
  `Post_Name` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Post_Url` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Post_Summary` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Post_Content` text COLLATE utf8_persian_ci NOT NULL,
  `Post_Author` varchar(150) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_Id`, `Post_Name`, `Post_Url`, `Post_Summary`, `Post_Content`, `Post_Author`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_Id` int(15) NOT NULL,
  `user_Firstname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `user_Lastname` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `user_Nickname` varchar(20) COLLATE utf8_persian_ci NOT NULL DEFAULT 'Visitor',
  `user_Username` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `user_Password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `user_Type` varchar(10) COLLATE utf8_persian_ci NOT NULL DEFAULT 'Visitor',
  `user_Email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `user_Phone` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `user_CreatedAt` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_ExpiredAt` date DEFAULT '2020-01-01',
  `user_Status` tinyint(1) NOT NULL DEFAULT '0',
  `user_Image` varchar(200) COLLATE utf8_persian_ci DEFAULT NULL,
  `user_Bio` text COLLATE utf8_persian_ci,
  `user_IsPaid` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_Id`, `user_Firstname`, `user_Lastname`, `user_Nickname`, `user_Username`, `user_Password`, `user_Type`, `user_Email`, `user_Phone`, `user_CreatedAt`, `user_ExpiredAt`, `user_Status`, `user_Image`, `user_Bio`, `user_IsPaid`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_Id`),
  ADD UNIQUE KEY `Post_Url` (`Post_Url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`),
  ADD UNIQUE KEY `user_Username` (`user_Username`),
  ADD UNIQUE KEY `user_Email` (`user_Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
