-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 07:02 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `artwork`
--

CREATE TABLE `artwork` (
  `a_id` int(20) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `registration_no` varchar(20) NOT NULL,
  `title` varchar(40) NOT NULL,
  `description` text NOT NULL,
  `medium` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Painting` varchar(10) NOT NULL,
  `Sketches` varchar(10) NOT NULL,
  `Photographs` varchar(20) NOT NULL,
  `Best _out _of _waste` varchar(20) NOT NULL,
  `Statue` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `cr_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `registration_no` varchar(20) DEFAULT NULL,
  `title` varchar(40) NOT NULL,
  `category` varchar(10) NOT NULL,
  `description` text NOT NULL,
  `medium` varchar(20) NOT NULL,
  `published` varchar(10) NOT NULL,
  `area` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `authority` varchar(20) NOT NULL,
  `design_act` varchar(5) NOT NULL,
  `copyright_act` varchar(5) NOT NULL,
  `work_photo` varchar(100) DEFAULT NULL,
  `awards` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `copyright`
--

INSERT INTO `copyright` (`cr_id`, `user_id`, `registration_no`, `title`, `category`, `description`, `medium`, `published`, `area`, `year`, `authority`, `design_act`, `copyright_act`, `work_photo`, `awards`) VALUES
(0, 2, NULL, 'Clouds', 'Photograph', 'gdrg', 'ggedx', '', '', '0000', '', 'No', 'Yes', NULL, 'gfx'),
(0, 3, NULL, 'Tree', 'Statue', 'Artwork', 'Oil', 'Yes', 'ncbdnm', '2023', 'bdbfme', 'Yes', 'No', NULL, 'jdbfje');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(12) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` text NOT NULL,
  `address` text NOT NULL,
  `aadhar_no` bigint(12) NOT NULL,
  `passport_no` varchar(20) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `photo` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artwork`
--
ALTER TABLE `artwork`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artwork`
--
ALTER TABLE `artwork`
  MODIFY `a_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
