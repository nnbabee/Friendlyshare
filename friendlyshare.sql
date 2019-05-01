-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 01, 2019 at 02:31 PM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `friendlyshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_data`
--

CREATE TABLE `comment_data` (
  `id` int(11) NOT NULL,
  `id_title` int(11) NOT NULL,
  `comment` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment_data`
--

INSERT INTO `comment_data` (`id`, `id_title`, `comment`) VALUES
(1, 1, 'mai bok lokkkk'),
(2, 1, 'sgrdegdeah'),
(3, 1, 'vgadrgadrbg'),
(4, 2, 'DABFABFSGB');

-- --------------------------------------------------------

--
-- Table structure for table `member_data`
--

CREATE TABLE `member_data` (
  `id` int(11) NOT NULL,
  `id_title` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_data`
--

INSERT INTO `member_data` (`id`, `id_title`, `username`) VALUES
(4, 1, 'pakbung'),
(5, 2, 'pakbung'),
(6, 1, 'babe');

-- --------------------------------------------------------

--
-- Table structure for table `post_data`
--

CREATE TABLE `post_data` (
  `id` int(11) NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tag` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `member` int(11) NOT NULL,
  `total_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_data`
--

INSERT INTO `post_data` (`id`, `title`, `tag`, `content`, `member`, `total_member`) VALUES
(1, 'MK Paseo', 'food', 'yak kin MK', 6, 2),
(2, 'hghd', 'media', 'ehrtshjsrjy', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `username`, `password`, `email`) VALUES
(1, 'pakbung', '123456', 'pbeiei@gmail.com'),
(2, 'babe', '1234', '60010710@kmitl.ac.th');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_data`
--
ALTER TABLE `comment_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_data`
--
ALTER TABLE `member_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_data`
--
ALTER TABLE `post_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_data`
--
ALTER TABLE `comment_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `member_data`
--
ALTER TABLE `member_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `post_data`
--
ALTER TABLE `post_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
