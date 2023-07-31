-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2023 at 11:33 PM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zpzen_gsgest`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `id` int(11) NOT NULL,
  `bank_name` varchar(32) NOT NULL,
  `account_title` varchar(32) NOT NULL,
  `account_number` varchar(50) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `created_at` int(5) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`id`, `bank_name`, `account_title`, `account_number`, `created_by`, `status`, `created_at`, `user_id`) VALUES
(12, 'gdfgdf', 'gdfgdf', 'gdfgdfg', NULL, NULL, 1687882874, NULL),
(13, 'gdfgdf', 'gdfgdf', 'gdfgdfg', NULL, NULL, 1687882979, NULL),
(14, 'gdfgdf', 'gdfgdf', 'gdfgdfg', NULL, NULL, 1687883053, NULL),
(15, 'gdfgdf', 'gdfgdf', 'gdfgdfg', NULL, NULL, 1687883124, NULL),
(16, 'gdfgdf', 'gdfgdf', 'gdfgdfg', NULL, NULL, 1687883143, NULL),
(17, 'gdfgdf', 'gdfgdf', 'gdfgdfg', NULL, NULL, 1687883149, NULL),
(18, 'gdfgdf', 'gdfgdf', 'gdfgdfg', NULL, NULL, 1687883305, 26),
(19, 'gdfgdf', 'gdfgdf', 'gdfgdfg', NULL, NULL, 1687883326, 27),
(20, 'dfghdf', 'dfghdf', 'dhgfhdf', NULL, NULL, 1687886059, 28),
(21, 'fsdfsdfsd', 'fsdfsdf', 'fsdfsd', NULL, NULL, 1687888926, 29),
(22, 'Sparkasse', 'Javed', '12345', NULL, NULL, 1687889947, 30);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name`, `postcode`, `status`, `created_at`, `created_by`) VALUES
(1, 'Berlin', 10115, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `letter`
--

CREATE TABLE `letter` (
  `id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `body` mediumtext,
  `created_by` int(11) DEFAULT NULL,
  `status` int(34) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `letter`
--

INSERT INTO `letter` (`id`, `title`, `body`, `created_by`, `status`, `created_at`, `user_id`) VALUES
(1, 'bcvbcv', 'bvcbcv', NULL, NULL, 1687881571, NULL),
(2, 'bcvbcv', 'bvcbcv', NULL, NULL, 1687881617, NULL),
(3, 'bcvbcv', 'bvcbcv', NULL, NULL, 1687881628, NULL),
(4, 'bcvbcv', 'bvcbcv', NULL, NULL, 1687881634, NULL),
(5, 'gdfg', 'dgdfgdf', NULL, NULL, 1687882030, NULL),
(6, 'gdfg', 'dgdfgdf', NULL, NULL, 1687882071, NULL),
(7, 'gdfg', 'dgdfgdf', NULL, NULL, 1687882081, NULL),
(8, 'gdfg', 'dgdfgdf', NULL, NULL, 1687882292, NULL),
(9, 'gdfg', 'dgdfgdf', NULL, NULL, 1687882412, NULL),
(10, 'fgdfg', 'gdfgdf', NULL, NULL, 1687882658, NULL),
(11, 'fgdfg', 'gdfgdf', NULL, NULL, 1687883326, NULL),
(12, 'fghdfhg', 'hdfgf', NULL, NULL, 1687886059, 28),
(13, 'fsdfsd', 'sfdsdf', NULL, NULL, 1687888926, 29),
(14, 'student', 'this is body ', NULL, NULL, 1687889947, 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '1',
  `gender` int(11) NOT NULL COMMENT '1 Male 2 Female 3 Diverse',
  `type_of_record` int(11) NOT NULL COMMENT '1 Customer 2 Supplier 3 Others',
  `unique_address_number` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(43) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(5446) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(6456) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `status`, `gender`, `type_of_record`, `unique_address_number`, `created_at`, `updated_at`, `access_token`) VALUES
(29, 'fsdfsd@dasdasm.dsadas', 1, 3, 2, 'AD-FVZT7U', '1687888926', '1687889167', NULL),
(30, 'comsian103@gmail.com', 1, 1, 1, 'AD-NV94MO', '1687889947', '1687889947', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `street_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lng` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suburb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `user_id`, `name`, `mobile`, `profile_image`, `city_id`, `street_address`, `zip`, `lat`, `lng`, `suburb`) VALUES
(1, 12, 'gdfg', '4564566', NULL, 1, 'gdfg', '6456546', NULL, NULL, NULL),
(2, 14, 'gdfg', '4564566', NULL, 1, 'gdfg', '6456546', NULL, NULL, NULL),
(3, 15, 'gdfg', '4564566', NULL, 1, 'gdfg', '6456546', NULL, NULL, NULL),
(4, 16, 'gdfgdf', '5646456', NULL, 1, 'fdgfdg', '645645', NULL, NULL, NULL),
(5, 27, 'gdfgdf', '5646456', NULL, 1, 'fdgfdg', '645645', NULL, NULL, NULL),
(6, 28, 'yrtyrt', '53453454', NULL, 1, 'dfgdfg', '56456', NULL, NULL, NULL),
(7, 29, 'fdsfsd', '5345345345', NULL, 1, 'dsfsdfd', '12345', NULL, NULL, NULL),
(8, 30, 'Javed Amin', '+4917677880390', NULL, 1, 'Rutscherstr 165', '52072', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `letter`
--
ALTER TABLE `letter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`city_id`),
  ADD KEY `city_id` (`city_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `letter`
--
ALTER TABLE `letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `letter`
--
ALTER TABLE `letter`
  ADD CONSTRAINT `letter_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `user_details_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
