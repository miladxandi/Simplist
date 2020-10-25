-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 03:13 PM
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
-- Database: `simplist_simplist`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `Post_Id` int(11) NOT NULL,
  `Post_Name` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Post_Url` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Post_Summary` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Post_Content` text COLLATE utf8_persian_ci NOT NULL,
  `Post_Author` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Post_Date` varchar(30) COLLATE utf8_persian_ci NOT NULL,
  `Post_Image` varchar(200) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `Id` int(50) NOT NULL,
  `url` varchar(250) NOT NULL,
  `target` varchar(500) NOT NULL,
  `clicks` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Firstname` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Lastname` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Username` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Email` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `Password` text COLLATE utf8_persian_ci NOT NULL,
  `LoginToken` varchar(50) COLLATE utf8_persian_ci DEFAULT NULL,
  `Type` varchar(70) COLLATE utf8_persian_ci NOT NULL DEFAULT 'Visitor',
  `Status` tinyint(1) NOT NULL DEFAULT '1',
  `Image` varchar(150) COLLATE utf8_persian_ci NOT NULL DEFAULT 'Avatar',
  `CreatedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`Post_Id`),
  ADD UNIQUE KEY `Post_Url` (`Post_Url`);

--
-- Indexes for table `urls`
--
ALTER TABLE `urls`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
