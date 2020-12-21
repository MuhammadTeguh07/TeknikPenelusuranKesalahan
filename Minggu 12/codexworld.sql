-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2020 at 05:31 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codexworld`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE OR REPLACE TABLE `cities` (
  `city_id` INT(11) NOT NULL,
  `state_id` INT(11) NOT NULL,
  `city_name` VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `state_id`, `city_name`, `status`) VALUES
(1, 1, 'New York city', 1),
(2, 1, 'Buffalo', 1),
(3, 1, 'Albany', 1),
(4, 2, 'Birmingham', 1),
(5, 2, 'Montgomery', 1),
(6, 2, 'Huntsville', 1),
(7, 3, 'Los Angeles', 1),
(8, 3, 'San Francisco', 1),
(9, 3, 'San Diego', 1),
(10, 4, 'Toronto', 1),
(11, 4, 'Ottawa', 1),
(12, 5, 'Vancouver', 1),
(13, 5, 'Victoria', 1),
(14, 6, 'Sydney', 1),
(15, 6, 'Newcastle', 1),
(16, 7, 'City of Brisbane', 1),
(17, 7, 'Gold Coast', 1),
(18, 8, 'Bangalore', 1),
(19, 8, 'Mangalore', 1),
(20, 9, 'Hydrabad', 1),
(21, 9, 'Warangal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE OR REPLACE TABLE `countries` (
  `country_id` INT(11) NOT NULL,
  `country_name` VARCHAR(50) CHARACTER SET utf8 NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `country_name`, `status`) VALUES
(1, 'USA', 1),
(2, 'Canada', 1),
(3, 'Australia', 1),
(4, 'India', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE OR REPLACE TABLE `states` (
  `state_id` INT(11) NOT NULL,
  `country_id` INT(11) NOT NULL,
  `state_name` VARCHAR(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive'
) ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`state_id`, `country_id`, `state_name`, `status`) VALUES
(1, 1, 'New York', 1),
(2, 1, 'Alabama', 1),
(3, 1, 'California', 1),
(4, 2, 'Ontario', 1),
(5, 2, 'British Columbia', 1),
(6, 3, 'New South Wales', 1),
(7, 3, 'Queensland', 1),
(8, 4, 'Karnataka', 1),
(9, 4, 'Telangana', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`state_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `state_id` INT(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
