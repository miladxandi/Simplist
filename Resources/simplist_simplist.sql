-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 02:53 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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

--
-- Dumping data for table `posts`
--


-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `Id` int(50) NOT NULL,
  `url` varchar(250) NOT NULL,
  `target` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `urls`
--


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_Id` int(11) NOT NULL,
  `u_FName` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `u_LName` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `u_Nickname` varchar(100) COLLATE utf8_persian_ci DEFAULT NULL,
  `u_Username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `u_Password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `u_Type` varchar(10) COLLATE utf8_persian_ci NOT NULL DEFAULT 'Visitor',
  `u_Email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `u_Phone` varchar(20) COLLATE utf8_persian_ci DEFAULT NULL,
  `u_Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_Expired` date NOT NULL DEFAULT '2020-00-00',
  `u_Status` tinyint(4) NOT NULL DEFAULT '1',
  `u_Image` varchar(100) COLLATE utf8_persian_ci NOT NULL DEFAULT 'Avatar',
  `u_Bio` text COLLATE utf8_persian_ci,
  `u_IsPaid` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `user`
--



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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_Id`),
  ADD UNIQUE KEY `u_Username` (`u_Username`),
  ADD UNIQUE KEY `u_Email` (`u_Email`),
  ADD UNIQUE KEY `u_Nickname` (`u_Nickname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `Post_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `urls`
--
ALTER TABLE `urls`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
