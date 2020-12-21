-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2017 at 06:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba_jadwalmk`
--

-- --------------------------------------------------------

--
-- Table structure for table `mkjalan`
--

CREATE TABLE `mkjalan` (
  `id` int(11) NOT NULL,
  `mk` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `dos1` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `dos2` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `dos3` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `sem` int(11) NOT NULL,
  `peserta` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `mkjalan`
--

INSERT INTO `mkjalan` (`id`, `mk`, `dos1`, `dos2`, `dos3`, `sem`, `peserta`) VALUES
(1, 'MK1', 'dosen1', 'dosen2', '-', 2, 60),
(2, 'MK2', 'dosen2', '-', '-', 2, 50),
(3, 'MK3', 'dosen3', 'dosen7', 'dosen12', 2, 70),
(4, 'MK4', 'dosen4', 'dosen8', 'dosen13', 2, 70),
(5, 'MK5', 'dosen5', 'dosen9', '-', 2, 75),
(6, 'MK6', 'dosen6', 'dosen10', '-', 2, 80),
(7, 'MK7', 'dosen7', '-', '-', 2, 60),
(8, 'MK8', 'dosen8', '-', '-', 2, 65),
(9, 'MK9', 'dosen9', '-', '-', 2, 70),
(10, 'MK10', 'dosen10', '-', '-', 2, 75),
(11, 'MK11', 'dosen11', '-', '-', 2, 80),
(12, 'MK12', 'dosen12', '-', '-', 2, 60),
(13, 'MK13', 'dosen13', '-', '-', 2, 65),
(14, 'MK14', 'dosen14', '-', '-', 2, 70),
(15, 'MK15', 'dosen1', 'dosen7', '-', 2, 75),
(16, 'MK16', 'dosen3', 'dosen9', '-', 2, 60),
(17, 'MK17', 'dosen3', 'dosen9', '-', 2, 65),
(18, 'MK18', 'dosen4', 'dosen10', '-', 2, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mkjalan`
--
ALTER TABLE `mkjalan`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
