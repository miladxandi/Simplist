-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2018 at 04:57 PM
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
  `Post_Date` varchar(30) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_Id`, `Post_Name`, `Post_Url`, `Post_Summary`, `Post_Content`, `Post_Author`, `Post_Date`) VALUES
(2, 'Simplist Documentations', 'simplist-connection-documentation', 'Documentation\r\n\r\nRemember your PHP version should be upper', 'Documentation\r\n\r\nRemember your PHP version should be upper than 7 and the local request address should be set on:\r\n<code> \r\n    public_html/ \r\n</code>\r\n\r\nAfter that, you have to set the username & table of your Database! in a local project for first use, these values should be just like this:\r\n<code>\r\n    Table: simplist_simplist\r\n\r\n    Username: root\r\n\r\n    Password: Empty ( without value or an empty string)\r\n</code>\r\nYou can change these values by going to Model layer and change them in Database.phtml in Connection folder, or go to this address:\r\n<code>\r\n    Model/Connection/Database.phtml\r\n</code>\r\nNote: There is a SQL Table file in “<Strong> Resources </Strong>” folder that you can easily import it to your local or online MySQL database\r\n\r\nUntil you`re working on local a working directory, the HTTPS protocol is turned off,\r\nbut if you want to upload it on your server, the HTTPS protocol can be turned on by making the “<code> SecureProtocol </code>” true in the Middleware list,\r\n at the Important Folder you can find a Security file, or go to this address:\r\n<code>\r\n    Middleware/Important/Security.phtml \r\n</code>\r\n\r\nYou can change the <code> $this->CoreSecurity->SecureProtocol(false); </code> to <code> $this->CoreSecurity->SecureProtocol(true); </code>\r\n\r\nIt`s completely installed and ready for use.', 'Milad', '13 April, 2018');

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE `urls` (
  `Id` int(50) NOT NULL,
  `url` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `target` varchar(500) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `urls`
--

INSERT INTO `urls` (`Id`, `url`, `target`) VALUES
(5, 'CH5eW', 'https://miladzandi.ir');

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

INSERT INTO `user` (`u_Id`, `u_FName`, `u_LName`, `u_Nickname`, `u_Username`, `u_Password`, `u_Type`, `u_Email`, `u_Phone`, `u_Created`, `u_Expired`, `u_Status`, `u_Image`, `u_Bio`, `u_IsPaid`) VALUES
(0, 'Milad', 'Xandi', 'Admin', 'miladxandi', 'Milad&zandi&0937', 'Admin', 'info@miladzandi.ir', NULL, '2018-04-12 18:09:57', '2020-00-00', 1, 'Avatar', NULL, 0);

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
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
