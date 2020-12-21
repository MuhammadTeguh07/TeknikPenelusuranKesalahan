-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 02:20 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jadwal_baru2`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailajar`
--

CREATE TABLE `detailajar` (
  `NIP` varchar(12) NOT NULL,
  `KODEMATKUL` varchar(20) NOT NULL,
  `KODETHNAJARAN` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL,
  `statusajar` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailajar`
--

INSERT INTO `detailajar` (`NIP`, `KODEMATKUL`, `KODETHNAJARAN`, `KODESEMESTER`, `statusajar`) VALUES
('1904', 'mk015', 'thn003', 'sem001', 1),
('1905', 'mk058', 'thn003', 'sem001', 1),
('1906', 'mk016', 'thn003', 'sem001', 1),
('1907', 'mk011', 'thn003', 'sem001', 1),
('1907', 'mk012', 'thn003', 'sem001', 1),
('1908', 'mk014', 'thn003', 'sem001', 1),
('1908', 'mk028', 'thn003', 'sem001', 1),
('1908', 'mk029', 'thn003', 'sem001', 1),
('1909', 'mk053', 'thn003', 'sem001', 1),
('1910', 'mk009', 'thn003', 'sem001', 1),
('1910', 'mk010', 'thn003', 'sem001', 1),
('1911', 'mk013', 'thn003', 'sem001', 1),
('1911', 'mk031', 'thn003', 'sem001', 1),
('1912', 'mk013', 'thn003', 'sem001', 1),
('1912', 'mk014', 'thn003', 'sem001', 1),
('1912', 'mk049', 'thn003', 'sem001', 1),
('1913', 'mk014', 'thn003', 'sem001', 1),
('1913', 'mk029', 'thn003', 'sem001', 1),
('1913', 'mk049', 'thn003', 'sem001', 1),
('1914', 'mk016', 'thn003', 'sem001', 1),
('1914', 'mk033', 'thn003', 'sem001', 1),
('1914', 'mk036', 'thn003', 'sem001', 1),
('1914', 'mk037', 'thn003', 'sem001', 1),
('1914', 'mk051', 'thn003', 'sem001', 1),
('1914', 'mk057', 'thn003', 'sem001', 1),
('1915', 'mk034', 'thn003', 'sem001', 1),
('1915', 'mk035', 'thn003', 'sem001', 1),
('1931', 'mk008', 'thn003', 'sem001', 1),
('1931', 'mk052', 'thn003', 'sem001', 1),
('1932', 'mk048', 'thn003', 'sem001', 1),
('1933', 'mk055', 'thn003', 'sem001', 1),
('1933', 'mk056', 'thn003', 'sem001', 1),
('1934', 'mk030', 'thn003', 'sem001', 1),
('1934', 'mk031', 'thn003', 'sem001', 1),
('1936', 'mk015', 'thn003', 'sem001', 1),
('1936', 'mk016', 'thn003', 'sem001', 1),
('1936', 'mk032', 'thn003', 'sem001', 1),
('1936', 'mk033', 'thn003', 'sem001', 1),
('1936', 'mk035', 'thn003', 'sem001', 1),
('1937', 'mk017', 'thn003', 'sem001', 1),
('1938', 'mk030', 'thn003', 'sem001', 1),
('1938', 'mk031', 'thn003', 'sem001', 1),
('1938', 'mk035', 'thn003', 'sem001', 1),
('1938', 'mk037', 'thn003', 'sem001', 1),
('1938', 'mk050', 'thn003', 'sem001', 1),
('1938', 'mk051', 'thn003', 'sem001', 1),
('1938', 'mk056', 'thn003', 'sem001', 1),
('1939', 'mk031', 'thn003', 'sem001', 1),
('1939', 'mk034', 'thn003', 'sem001', 1),
('1939', 'mk035', 'thn003', 'sem001', 1),
('1939', 'mk037', 'thn003', 'sem001', 1),
('1939', 'mk050', 'thn003', 'sem001', 1),
('1939', 'mk051', 'thn003', 'sem001', 1),
('1939', 'mk056', 'thn003', 'sem001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detailjadwal`
--

CREATE TABLE `detailjadwal` (
  `KODEJAM2` varchar(6) DEFAULT NULL,
  `IDDETAIL` int(11) NOT NULL,
  `KODERUANG` varchar(20) NOT NULL,
  `KODEJADWAL` varchar(20) NOT NULL,
  `KODEJAM` varchar(6) NOT NULL,
  `KODEHARI` varchar(7) NOT NULL,
  `NIP` varchar(12) NOT NULL,
  `KODEMATKUL` varchar(20) NOT NULL,
  `KODEPRODI` varchar(20) NOT NULL,
  `KODEKELAS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detailkelas`
--

CREATE TABLE `detailkelas` (
  `KODEPRODI` varchar(20) NOT NULL,
  `KODEKELAS` varchar(20) NOT NULL,
  `kdpecah` int(11) NOT NULL,
  `KODETHNAJARAN` varchar(20) NOT NULL,
  `KODEMATKUL` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `JUMLAHMAHASISWA` int(11) DEFAULT NULL,
  `TAHUNANGKATAN` int(11) DEFAULT NULL,
  `kodefakultas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detailkelas`
--

INSERT INTO `detailkelas` (`KODEPRODI`, `KODEKELAS`, `kdpecah`, `KODETHNAJARAN`, `KODEMATKUL`, `KODESEMESTER`, `NIP`, `JUMLAHMAHASISWA`, `TAHUNANGKATAN`, `kodefakultas`) VALUES
('pro001', 'kls001', 1, 'thn003', 'mk007', 'sem001', '19101234', 60, 2016, 'fak001'),
('pro001', 'kls001', 1, 'thn003', 'mk010', 'sem001', '1910', 30, 2016, 'fak001'),
('pro001', 'kls001', 1, 'thn003', 'mk012', 'sem001', '1907', 30, 2016, 'fak001'),
('pro001', 'kls001', 1, 'thn003', 'mk014', 'sem001', '1908', 30, 2016, 'fak001'),
('pro001', 'kls001', 1, 'thn003', 'mk014', 'sem001', '1913', 30, 2016, 'fak001'),
('pro001', 'kls001', 1, 'thn003', 'mk016', 'sem001', '1906', 30, 2016, 'fak001'),
('pro001', 'kls001', 1, 'thn003', 'mk016', 'sem001', '1936', 30, 2016, 'fak001'),
('pro001', 'kls001', 2, 'thn003', 'mk014', 'sem001', '1908', 30, 2016, 'fak001'),
('pro001', 'kls001', 2, 'thn003', 'mk014', 'sem001', '1913', 30, 2016, 'fak001'),
('pro001', 'kls001', 2, 'thn003', 'mk016', 'sem001', '1906', 30, 2016, 'fak001'),
('pro001', 'kls001', 2, 'thn003', 'mk016', 'sem001', '1936', 30, 2016, 'fak001'),
('pro001', 'kls001', 3, 'thn003', 'mk014', 'sem001', '1908', 30, 2016, 'fak001'),
('pro001', 'kls001', 3, 'thn003', 'mk014', 'sem001', '1913', 30, 2016, 'fak001'),
('pro001', 'kls002', 1, 'thn003', 'mk010', 'sem001', '1910', 30, 2016, 'fak001'),
('pro001', 'kls002', 1, 'thn003', 'mk012', 'sem001', '1907', 30, 2016, 'fak001'),
('pro001', 'kls002', 1, 'thn003', 'mk014', 'sem001', '1912', 30, 2016, 'fak001'),
('pro001', 'kls002', 1, 'thn003', 'mk016', 'sem001', '1906', 30, 2016, 'fak001'),
('pro001', 'kls002', 1, 'thn003', 'mk016', 'sem001', '1914', 30, 2016, 'fak001'),
('pro001', 'kls002', 2, 'thn003', 'mk014', 'sem001', '1912', 30, 2016, 'fak001'),
('pro001', 'kls002', 2, 'thn003', 'mk016', 'sem001', '1906', 30, 2016, 'fak001'),
('pro001', 'kls002', 2, 'thn003', 'mk016', 'sem001', '1914', 30, 2016, 'fak001'),
('pro001', 'kls002', 3, 'thn003', 'mk014', 'sem001', '1912', 30, 2016, 'fak001'),
('pro001', 'kls003', 1, 'thn003', 'mk029', 'sem001', '1913', 30, 2015, 'fak001'),
('pro001', 'kls003', 1, 'thn003', 'mk031', 'sem001', '1934', 30, 2015, 'fak001'),
('pro001', 'kls003', 1, 'thn003', 'mk031', 'sem001', '1939', 30, 2015, 'fak001'),
('pro001', 'kls003', 1, 'thn003', 'mk033', 'sem001', '1914', 30, 2015, 'fak001'),
('pro001', 'kls003', 1, 'thn003', 'mk035', 'sem001', '1915', 30, 2015, 'fak001'),
('pro001', 'kls003', 1, 'thn003', 'mk035', 'sem001', '1939', 30, 2015, 'fak001'),
('pro001', 'kls003', 1, 'thn003', 'mk037', 'sem001', '1914', 30, 2015, 'fak001'),
('pro001', 'kls003', 1, 'thn003', 'mk037', 'sem001', '1938', 30, 2015, 'fak001'),
('pro001', 'kls003', 2, 'thn003', 'mk029', 'sem001', '1913', 30, 2015, 'fak001'),
('pro001', 'kls003', 2, 'thn003', 'mk031', 'sem001', '1934', 30, 2015, 'fak001'),
('pro001', 'kls003', 2, 'thn003', 'mk031', 'sem001', '1939', 30, 2015, 'fak001'),
('pro001', 'kls003', 2, 'thn003', 'mk033', 'sem001', '1914', 30, 2015, 'fak001'),
('pro001', 'kls003', 2, 'thn003', 'mk035', 'sem001', '1915', 30, 2015, 'fak001'),
('pro001', 'kls003', 2, 'thn003', 'mk035', 'sem001', '1939', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk029', 'sem001', '1908', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk031', 'sem001', '1911', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk031', 'sem001', '1938', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk033', 'sem001', '1936', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk035', 'sem001', '1936', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk035', 'sem001', '1938', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk037', 'sem001', '1914', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk037', 'sem001', '1939', 30, 2015, 'fak001'),
('pro001', 'kls004', 1, 'thn003', 'mk052', 'sem002', '1904', 60, 2020, 'fak001'),
('pro001', 'kls004', 2, 'thn003', 'mk029', 'sem001', '1908', 30, 2015, 'fak001'),
('pro001', 'kls004', 2, 'thn003', 'mk031', 'sem001', '1911', 30, 2015, 'fak001'),
('pro001', 'kls004', 2, 'thn003', 'mk031', 'sem001', '1938', 30, 2015, 'fak001'),
('pro001', 'kls004', 2, 'thn003', 'mk033', 'sem001', '1936', 30, 2015, 'fak001'),
('pro001', 'kls004', 2, 'thn003', 'mk035', 'sem001', '1936', 30, 2015, 'fak001'),
('pro001', 'kls004', 2, 'thn003', 'mk035', 'sem001', '1938', 30, 2015, 'fak001'),
('pro001', 'kls005', 1, 'thn003', 'mk049', 'sem001', '1913', 30, 2014, 'fak001'),
('pro001', 'kls005', 1, 'thn003', 'mk051', 'sem001', '1914', 30, 2014, 'fak001'),
('pro001', 'kls005', 1, 'thn003', 'mk051', 'sem001', '1938', 30, 2014, 'fak001'),
('pro001', 'kls005', 1, 'thn003', 'mk053', 'sem001', '1909', 30, 2014, 'fak001'),
('pro001', 'kls005', 1, 'thn003', 'mk056', 'sem001', '1933', 30, 2014, 'fak001'),
('pro001', 'kls005', 1, 'thn003', 'mk056', 'sem001', '1938', 30, 2014, 'fak001'),
('pro001', 'kls005', 1, 'thn003', 'mk058', 'sem001', '1905', 30, 2014, 'fak001'),
('pro001', 'kls005', 2, 'thn003', 'mk053', 'sem001', '1909', 30, 2014, 'fak001'),
('pro001', 'kls005', 2, 'thn003', 'mk058', 'sem001', '1905', 30, 2014, 'fak001'),
('pro001', 'kls006', 1, 'thn003', 'mk049', 'sem001', '1912', 30, 2014, 'fak001'),
('pro001', 'kls006', 1, 'thn003', 'mk051', 'sem001', '1914', 30, 2014, 'fak001'),
('pro001', 'kls006', 1, 'thn003', 'mk051', 'sem001', '1939', 30, 2014, 'fak001'),
('pro001', 'kls006', 1, 'thn003', 'mk053', 'sem001', '1909', 30, 2014, 'fak001'),
('pro001', 'kls006', 1, 'thn003', 'mk056', 'sem001', '1933', 30, 2014, 'fak001'),
('pro001', 'kls006', 1, 'thn003', 'mk056', 'sem001', '1939', 30, 2014, 'fak001'),
('pro001', 'kls006', 1, 'thn003', 'mk058', 'sem001', '1905', 30, 2014, 'fak001'),
('pro001', 'kls006', 2, 'thn003', 'mk053', 'sem001', '1909', 30, 2014, 'fak001'),
('pro001', 'kls006', 2, 'thn003', 'mk058', 'sem001', '1905', 30, 2014, 'fak001'),
('pro001', 'kls007', 1, 'thn003', 'mk008', 'sem001', '1931', 70, 2016, 'fak001'),
('pro001', 'kls007', 1, 'thn003', 'mk009', 'sem001', '1910', 60, 2016, 'fak001'),
('pro001', 'kls007', 1, 'thn003', 'mk011', 'sem001', '1907', 60, 2016, 'fak001'),
('pro001', 'kls007', 1, 'thn003', 'mk013', 'sem001', '1911', 60, 2016, 'fak001'),
('pro001', 'kls007', 1, 'thn003', 'mk013', 'sem001', '1912', 60, 2016, 'fak001'),
('pro001', 'kls007', 1, 'thn003', 'mk015', 'sem001', '1904', 60, 2016, 'fak001'),
('pro001', 'kls007', 1, 'thn003', 'mk015', 'sem001', '1936', 60, 2016, 'fak001'),
('pro001', 'kls008', 1, 'thn003', 'mk028', 'sem001', '1908', 60, 2015, 'fak001'),
('pro001', 'kls008', 1, 'thn003', 'mk030', 'sem001', '1934', 60, 2015, 'fak001'),
('pro001', 'kls008', 1, 'thn003', 'mk030', 'sem001', '1938', 60, 2015, 'fak001'),
('pro001', 'kls008', 1, 'thn003', 'mk032', 'sem001', '1936', 60, 2015, 'fak001'),
('pro001', 'kls008', 1, 'thn003', 'mk034', 'sem001', '1915', 60, 2015, 'fak001'),
('pro001', 'kls008', 1, 'thn003', 'mk034', 'sem001', '1939', 60, 2015, 'fak001'),
('pro001', 'kls008', 1, 'thn003', 'mk036', 'sem001', '1914', 60, 2015, 'fak001'),
('pro001', 'kls009', 1, 'thn003', 'mk048', 'sem001', '1932', 60, 2014, 'fak001'),
('pro001', 'kls009', 1, 'thn003', 'mk050', 'sem001', '1938', 60, 2014, 'fak001'),
('pro001', 'kls009', 1, 'thn003', 'mk050', 'sem001', '1939', 60, 2014, 'fak001'),
('pro001', 'kls009', 1, 'thn003', 'mk052', 'sem001', '1931', 60, 2014, 'fak001'),
('pro001', 'kls009', 1, 'thn003', 'mk055', 'sem001', '1933', 60, 2014, 'fak001'),
('pro001', 'kls009', 1, 'thn003', 'mk057', 'sem001', '1914', 60, 2014, 'fak001'),
('pro003', 'kls003', 1, 'thn003', 'mk035', 'sem002', '1904', 60, 2020, 'fak003');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE `fakultas` (
  `KODEFAKULTAS` varchar(20) NOT NULL,
  `NAMAFAKULTAS` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`KODEFAKULTAS`, `NAMAFAKULTAS`) VALUES
('fak001', 'vokasi'),
('fak002', 'sains dan teknologi'),
('fak003', 'ekonomi dan bisnis'),
('fak004', 'FISIP'),
('fak005', 'fakultas ilmu bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE `hari` (
  `KODEHARI` varchar(7) NOT NULL,
  `NAMAHARI` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`KODEHARI`, `NAMAHARI`) VALUES
('hari01', 'Senin'),
('hari02', 'Selasa'),
('hari03', 'Rabu'),
('hari04', 'Kamis'),
('hari05', 'Jumat');

-- --------------------------------------------------------

--
-- Table structure for table `hariujian`
--

CREATE TABLE `hariujian` (
  `KODEHARIUJIAN` int(11) NOT NULL,
  `KODEHARI` varchar(7) NOT NULL,
  `TANGGALUJIAN` date NOT NULL,
  `KODETHNAJARAN` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hariujian`
--

INSERT INTO `hariujian` (`KODEHARIUJIAN`, `KODEHARI`, `TANGGALUJIAN`, `KODETHNAJARAN`, `KODESEMESTER`) VALUES
(1, 'hari01', '2017-06-05', 'thn003', 'sem001'),
(2, 'hari02', '2017-06-06', 'thn003', 'sem001'),
(3, 'hari03', '2017-06-07', 'thn003', 'sem001'),
(4, 'hari04', '2017-06-08', 'thn003', 'sem001'),
(5, 'hari05', '2017-06-09', 'thn003', 'sem001'),
(6, 'hari01', '2017-06-12', 'thn003', 'sem001'),
(7, 'hari02', '2017-06-13', 'thn003', 'sem001'),
(8, 'hari03', '2017-06-14', 'thn003', 'sem001'),
(9, 'hari04', '2017-06-15', 'thn003', 'sem001'),
(10, 'hari05', '2017-06-16', 'thn003', 'sem001');

-- --------------------------------------------------------

--
-- Table structure for table `hariujian2`
--

CREATE TABLE `hariujian2` (
  `KODEHARIUJIAN` int(11) NOT NULL,
  `KODEHARI` varchar(7) NOT NULL,
  `TANGGALUJIAN` date NOT NULL,
  `KODETHNAJARAN` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hariujian2`
--

INSERT INTO `hariujian2` (`KODEHARIUJIAN`, `KODEHARI`, `TANGGALUJIAN`, `KODETHNAJARAN`, `KODESEMESTER`) VALUES
(1, 'hari01', '2017-06-05', 'thn003', 'sem001'),
(2, 'hari02', '2017-06-06', 'thn003', 'sem001'),
(3, 'hari03', '2017-06-07', 'thn003', 'sem001'),
(4, 'hari04', '2017-06-08', 'thn003', 'sem001'),
(5, 'hari05', '2017-06-09', 'thn003', 'sem001');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `KODEJABATAN` varchar(20) NOT NULL,
  `NAMAJABATAN` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`KODEJABATAN`, `NAMAJABATAN`) VALUES
('jab001', 'staff'),
('jab002', 'dosen'),
('jab003', 'dekan'),
('jab004', 'KPS');

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE `jam` (
  `KODEJAM` varchar(6) NOT NULL,
  `RANGEWAKTU1` time DEFAULT NULL,
  `RANGEWAKTU2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`KODEJAM`, `RANGEWAKTU1`, `RANGEWAKTU2`) VALUES
('jam001', '07:00:00', '08:40:00'),
('jam002', '08:50:00', '10:30:00'),
('jam003', '10:40:00', '12:20:00'),
('jam004', '13:00:00', '14:40:00'),
('jam005', '14:50:00', '16:30:00'),
('jam006', '16:40:00', '18:20:00');

-- --------------------------------------------------------

--
-- Table structure for table `jam50`
--

CREATE TABLE `jam50` (
  `KODEJAM` varchar(6) NOT NULL,
  `RANGEWAKTU1` time DEFAULT NULL,
  `RANGEWAKTU2` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam50`
--

INSERT INTO `jam50` (`KODEJAM`, `RANGEWAKTU1`, `RANGEWAKTU2`) VALUES
('jam001', '07:00:00', '07:50:00'),
('jam002', '07:50:00', '08:40:00'),
('jam003', '08:50:00', '09:40:00'),
('jam004', '09:40:00', '10:30:00'),
('jam005', '10:40:00', '11:30:00'),
('jam006', '11:30:00', '12:20:00'),
('jam007', '13:00:00', '13:50:00'),
('jam008', '13:50:00', '14:40:00'),
('jam009', '14:50:00', '15:40:00'),
('jam010', '15:40:00', '16:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `KODEKELAS` varchar(10) NOT NULL,
  `NAMAKELAS` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`KODEKELAS`, `NAMAKELAS`) VALUES
('kls001', 'A1'),
('kls002', 'A2'),
('kls003', 'B1'),
('kls004', 'B2'),
('kls005', 'C1'),
('kls006', 'C2'),
('kls007', 'A'),
('kls008', 'B'),
('kls009', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `labkom`
--

CREATE TABLE `labkom` (
  `KODELAB` int(11) NOT NULL,
  `KAPASITASLAB` int(11) DEFAULT NULL,
  `NAMALAB` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labkom`
--

INSERT INTO `labkom` (`KODELAB`, `KAPASITASLAB`, `NAMALAB`) VALUES
(1, 35, 'labkom 1'),
(2, 20, 'labkom 2'),
(3, 35, 'labkom 3'),
(4, 35, 'labkom 4');

-- --------------------------------------------------------

--
-- Table structure for table `labkomujian`
--

CREATE TABLE `labkomujian` (
  `KODELABUJIAN` int(11) NOT NULL,
  `KODELAB` int(11) NOT NULL,
  `KODETHNAJARAN` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labkomujian`
--

INSERT INTO `labkomujian` (`KODELABUJIAN`, `KODELAB`, `KODETHNAJARAN`, `KODESEMESTER`) VALUES
(1, 1, 'thn003', 'sem001'),
(2, 3, 'thn003', 'sem001'),
(3, 3, 'thn001', 'sem002'),
(4, 4, 'thn001', 'sem001');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `KODEMATKUL` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL,
  `NAMAMATKUL` varchar(50) DEFAULT NULL,
  `kataup` varchar(2) NOT NULL,
  `SKS` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `TAHUNKURIKULUM` int(11) DEFAULT NULL,
  `STATUSAKTIF` varchar(12) DEFAULT NULL,
  `statustawar` varchar(1) DEFAULT NULL,
  `kodeprodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`KODEMATKUL`, `KODESEMESTER`, `NAMAMATKUL`, `kataup`, `SKS`, `semester`, `TAHUNKURIKULUM`, `STATUSAKTIF`, `statustawar`, `kodeprodi`) VALUES
('mk007', 'sem001', 'Bahasa Inggris 1', '<b', 2, 1, 2013, 'Aktif', '1', 'pro001'),
('mk008', 'sem001', 'Pengantar Manajemen', 'k', 2, 1, 2013, 'Aktif', '1', 'pro001'),
('mk009', 'sem001', 'Matematika Dasar', 'k', 2, 1, 2013, 'Aktif', '1', 'pro001'),
('mk010', 'sem001', 'Prakt. Matematika Dasar', 'p', 1, 1, 2013, 'Aktif', '1', 'pro001'),
('mk011', 'sem001', 'Matematika Diskrit', 'k', 2, 1, 2013, 'Aktif', '1', 'pro001'),
('mk012', 'sem001', 'Prakt. Matematika Diskrit', 'p', 1, 1, 2013, 'Aktif', '1', 'pro001'),
('mk013', 'sem001', 'Otomasi Perkantoran', 'k', 1, 1, 2013, 'Aktif', '1', 'pro001'),
('mk014', 'sem001', 'Prakt. Otomasi Perkantoran', 'p', 3, 1, 2013, 'Aktif', '1', 'pro001'),
('mk015', 'sem001', 'Logika & Pemrograman', 'k', 2, 1, 2013, 'Aktif', '1', 'pro001'),
('mk016', 'sem001', 'Prakt. Logika & Pemrograman', 'p', 2, 1, 2013, 'Aktif', '1', 'pro001'),
('mk017', 'sem002', 'Pengantar Teknologi Informasi ', 'k', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk018', 'sem002', 'Pancasila ', 'k', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk019', 'sem002', 'Kewarganegaraan', 'k', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk020', 'sem002', 'Statistika Dasar', 'k', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk021', 'sem002', 'Prakt. Statistika Dasar', 'p', 1, 2, 2013, 'Aktif', '0', 'pro001'),
('mk022', 'sem002', 'Basis Data', 'k', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk023', 'sem002', 'Prakt. Basis Data', 'p', 4, 2, 2013, 'Aktif', '0', 'pro001'),
('mk024', 'sem002', 'Permrograman Berorientasi Obyek', 'k', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk025', 'sem002', 'Prakt. Permrograman Berorientasi Obyek', 'p', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk026', 'sem002', 'Sistem Operasi', 'k', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk027', 'sem002', 'Prakt. Sistem Operasi', 'p', 2, 2, 2013, 'Aktif', '0', 'pro001'),
('mk028', 'sem001', 'Manajemen Basis Data', 'k', 2, 3, 2008, 'Tidak Aktif', '1', 'pro001'),
('mk029', 'sem001', 'Prakt. Manajemen Basis Data', 'p', 2, 3, 2013, 'Aktif', '1', 'pro001'),
('mk030', 'sem001', 'Analisis Sistem Informasi', 'k', 2, 3, 2013, 'Aktif', '1', 'pro001'),
('mk031', 'sem001', 'Prakt. Analisis Sistem Informasi', 'p', 2, 3, 2013, 'Aktif', '1', 'pro001'),
('mk032', 'sem001', 'Rekayasa Perangkat Lunak', 'k', 2, 3, 2013, 'Aktif', '1', 'pro001'),
('mk033', 'sem001', 'Prakt. Rekayasa Perangkat Lunak', 'p', 1, 3, 2013, 'Aktif', '1', 'pro001'),
('mk034', 'sem001', 'Pemrograman Berbasis Web', 'k', 2, 3, 2013, 'Aktif', '1', 'pro001'),
('mk035', 'sem001', 'Prakt. Pemrograman Berbasis Web', 'p', 2, 3, 2013, 'Aktif', '1', 'pro001'),
('mk036', 'sem001', 'Manajemen Jaringan', 'k', 2, 3, 2013, 'Aktif', '1', 'pro001'),
('mk037', 'sem001', 'Prakt. Manajemen Jaringan', 'p', 1, 3, 2013, 'Aktif', '1', 'pro001'),
('mk038', 'sem002', 'Perancangan Sistem Informasi', '', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk039', 'sem002', 'Prakt. Perancangan Sistem Informasi', 'p', 3, 4, 2013, 'Aktif', '0', 'pro001'),
('mk040', 'sem002', 'Mobile Programming', 'k', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk041', 'sem002', 'Prakt. Mobile Programming', 'p', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk042', 'sem002', 'Interaksi Manusia & Komputer', 'k', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk043', 'sem002', 'Prakt. Interaksi Manusia & Komputer', 'p', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk044', 'sem002', 'Kewirausahaan dan Bisnis Informasi', 'k', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk045', 'sem002', 'prakt. Kewirausahaan dan Bsinis informasi', 'p', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk046', 'sem002', 'Bahasa Inggris 2', 'k', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk047', 'sem002', 'Komunikasi Interpersonal', 'k', 2, 4, 2013, 'Aktif', '0', 'pro001'),
('mk048', 'sem001', 'Sistem Informasi Manajemen', 'k', 2, 5, 2013, 'Aktif', '1', 'pro001'),
('mk049', 'sem001', 'Prakt. Sistem Informasi Manajemen', 'p', 1, 5, 2013, 'Aktif', '1', 'pro001'),
('mk050', 'sem001', 'Sistem Informasi Akutansi', 'k', 2, 5, 2013, 'Aktif', '1', 'pro001'),
('mk051', 'sem001', 'Prakt. Sistem Informasi Akutansi', 'p', 1, 5, 2013, 'Aktif', '1', 'pro001'),
('mk052', 'sem001', 'Multimedia', 'k', 2, 5, 2013, 'Aktif', '1', 'pro001'),
('mk053', 'sem001', 'Prakt. Multimedia', 'p', 2, 5, 2013, 'Aktif', '1', 'pro001'),
('mk054', 'sem001', 'Proyek Sistem Informasi', 'p', 3, 5, 2013, 'Aktif', '1', 'pro001'),
('mk055', 'sem001', 'Pengelolaan Sistem Informasi', 'k', 2, 5, 2013, 'Aktif', '1', 'pro001'),
('mk056', 'sem001', 'Prakt. Pengelolaan Sistem Informasi', 'p', 1, 5, 2013, 'Aktif', '1', 'pro001'),
('mk057', 'sem001', 'Keamanan Data dan Jaringan', 'k', 2, 5, 2013, 'Aktif', '1', 'pro001'),
('mk058', 'sem001', 'Prakt. Kemanan Data dan Jaringan', 'p', 2, 5, 2013, 'Aktif', '1', 'pro001'),
('mk059', 'sem002', 'Etika Profesi', 'k', 2, 6, 2013, 'Aktif', '0', 'pro001'),
('mk060', 'sem002', 'Agama', 'k', 2, 6, 2013, 'Aktif', '0', 'pro001'),
('mk061', 'sem002', 'Tugas Akhir', 'p', 4, 6, 2013, 'Aktif', '0', 'pro001');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `NIP` varchar(12) NOT NULL,
  `KODEFAKULTAS` varchar(20) NOT NULL,
  `KODEJABATAN` varchar(20) NOT NULL,
  `NAMAPEGAWAI` mediumtext,
  `ALAMATPEGAWAI` varchar(50) DEFAULT NULL,
  `TANGGALLAHIR` date DEFAULT NULL,
  `TELPPEGAWAI` varchar(13) DEFAULT NULL,
  `JK` varchar(10) DEFAULT NULL,
  `AGAMA` varchar(10) DEFAULT NULL,
  `PASSWORD` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`NIP`, `KODEFAKULTAS`, `KODEJABATAN`, `NAMAPEGAWAI`, `ALAMATPEGAWAI`, `TANGGALLAHIR`, `TELPPEGAWAI`, `JK`, `AGAMA`, `PASSWORD`) VALUES
('081310113028', 'fak001', 'jab001', 'Nur Walendah', 'Jalan karah', '1995-03-16', '085852525003', 'P', 'islam', 'admin'),
('081310113031', 'fak001', 'jab001', 'Alma Gustafianto Putra', 'gayungsari barat no 119', '1996-01-01', '08563351991', 'L', 'k', '047aeeb234644b9e2d4138ed3bc7976a'),
('081310113035', 'fak001', 'jab001', 'Muh Nur Tantyo', 'Jalan Karah agung', '1995-07-07', '08156553003', 'L', 'H', '047aeeb234644b9e2d4138ed3bc7976a'),
('081310113040', 'fak004', 'jab004', 'Imam Syafii', 'Jalan Jalan ke pasar', '1995-10-10', '08553003003', 'L', 'B', '047aeeb234644b9e2d4138ed3bc7976a'),
('1904', 'fak002', 'jab002', 'KARTONO, M.Kom.,Drs.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1905', 'fak002', 'jab002', 'FARIED EFFENDY, S.Si., M.Kom.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1906', 'fak002', 'jab002', 'ETO WURYANTO, DEA., Drs.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1907', 'fak002', 'jab002', 'DYAH HERAWATIE, Ir.M.Si.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1908', 'fak002', 'jab002', 'ARMY JUSTITIA, S.Kom., M.Kom.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1909', 'fak002', 'jab002', 'BARRY NUQOBA, S.Si, M.Kom.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1910', 'fak002', 'jab002', 'RINI SEMIATI, Dra., M.Si.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1911', 'fak002', 'jab002', 'ENDAH PURWANTI, S.Si., M.Kom.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1912', 'fak002', 'jab002', 'INDAH WERDININGSIH, S.Si., M.Kom.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1913', 'fak002', 'jab002', 'PURBANDINI, S.Si., M.Kom.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1914', 'fak001', 'jab002', 'RACHMAN SINATRIYA MARJIANTO, B.Eng., M.Sc.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1915', 'fak002', 'jab002', 'TAUFIK, S.T., M.Kom.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1916', 'fak002', 'jab002', 'PANDITA KHEMAWATI', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1917', 'fak002', 'jab002', 'I KETUT ARTA, DRS.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1918', 'fak002', 'jab002', 'Dr. SUYANTO, Ir.M.Si.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1919', 'fak002', 'jab002', 'Drs. SALAMUN, M.Kes.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1920', 'fak002', 'jab002', 'Drs. Ec. BAMBANG KARNAIN, M.M.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1921', 'fak002', 'jab002', 'Prof. Dr. AFAF BAKTIR, M.S.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1922', 'fak002', 'jab002', 'Drs. R. ARIF WIBOWO, M.Si.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1923', 'fak002', 'jab002', 'Dr. KHUSNUL AIN, S.T, M.Si.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1924', 'fak002', 'jab002', 'Drs. SEDIONO, M.Si.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1925', 'fak002', 'jab002', 'AKIF RAHMATILLAH, S.T., M.T.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1926', 'fak002', 'jab002', 'MOSES GLORINO RUMAMBO PANDIN, M.Si.,M.Psi., m.Phil.,Psi.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1927', 'fak002', 'jab002', 'Dr. HARI BASUKI NOTOBROTO, dr. M.Kes.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1928', 'fak002', 'jab002', 'Dr. ALFINDA NOVI KRISTANTI, DEA.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1929', 'fak002', 'jab002', 'Dr. DWI WINARNI, M.Si.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1930', 'fak002', 'jab002', 'Prof.Dr. RETNA APSARI, M.Si.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1931', 'fak002', 'jab002', 'BADRUS ZAMAN, S.Kom., M.Cs.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1932', 'fak002', 'jab002', 'IRA PUSPITASARI, S.T., M.T., Ph.D.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1933', 'fak002', 'jab002', 'INDRA KHARISMA RAHARJANA, S.Kom., M.T.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1934', 'fak002', 'jab002', 'EVA HARIYANTI, S.Si., MT.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1935', 'fak002', 'jab002', 'NISA KURNIA ILLAHIATI, S.Sos., M.Med.Kom.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1936', 'fak001', 'jab002', 'Nasa Zata Dina, S.Kom., M.Sc.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1937', 'fak002', 'jab002', 'Rimuljo Hendradi, Dr.', 'Jalan', '1995-03-16', '08', 'L', 'i', ''),
('1938', 'fak001', 'jab002', 'Tessa, S.Kom., M.Kom.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('1939', 'fak001', 'jab002', 'Wilda, S.Kom., M.Kom.', 'Jalan', '1995-03-16', '08', 'P', 'i', ''),
('9318219381', 'fak001', 'jab001', 'Dhimas Arga', 'jalan jalan dikuburan', '1998-10-10', '012912', 'L', 'h', '3da2f457ad7c0edf1c94e1ea87b0818d');

-- --------------------------------------------------------

--
-- Table structure for table `pembagiankelas`
--

CREATE TABLE `pembagiankelas` (
  `KODEPRODI` varchar(20) NOT NULL,
  `KODEKELAS` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembagiankelas`
--

INSERT INTO `pembagiankelas` (`KODEPRODI`, `KODEKELAS`) VALUES
('pro001', 'kls001'),
('pro001', 'kls002'),
('pro001', 'kls003'),
('pro001', 'kls004'),
('pro001', 'kls005'),
('pro001', 'kls006'),
('pro001', 'kls007'),
('pro001', 'kls008'),
('pro001', 'kls009');

-- --------------------------------------------------------

--
-- Table structure for table `pengawasdosen`
--

CREATE TABLE `pengawasdosen` (
  `nip` varchar(12) NOT NULL,
  `kd_thn_ajaran` varchar(10) NOT NULL,
  `kd_semester` varchar(10) NOT NULL,
  `uts_or_uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengawasdosen`
--

INSERT INTO `pengawasdosen` (`nip`, `kd_thn_ajaran`, `kd_semester`, `uts_or_uas`) VALUES
('1904', 'thn002', 'sem001', 1),
('1915', 'thn001', 'sem001', 1),
('1936', 'thn003', 'sem001', 0),
('1938', 'thn003', 'sem001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pengawaspegawai`
--

CREATE TABLE `pengawaspegawai` (
  `nip` varchar(12) NOT NULL,
  `kd_thn_ajaran` varchar(10) NOT NULL,
  `kd_semester` varchar(10) NOT NULL,
  `uts_or_uas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengawaspegawai`
--

INSERT INTO `pengawaspegawai` (`nip`, `kd_thn_ajaran`, `kd_semester`, `uts_or_uas`) VALUES
('081310113028', 'thn003', 'sem001', 0),
('081310113035', 'thn003', 'sem001', 0),
('81310113035', 'thn003', 'sem001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan`
--

CREATE TABLE `penjadwalan` (
  `KODEJADWAL` varchar(20) NOT NULL,
  `tanggal` text NOT NULL,
  `NIP` varchar(12) NOT NULL,
  `kodefakultas` varchar(20) NOT NULL,
  `kodeprodi` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL,
  `KODETHNAJARAN` varchar(20) NOT NULL,
  `masaujian` int(11) NOT NULL,
  `STATUS` mediumtext,
  `statuspakai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjadwalan`
--

INSERT INTO `penjadwalan` (`KODEJADWAL`, `tanggal`, `NIP`, `kodefakultas`, `kodeprodi`, `KODESEMESTER`, `KODETHNAJARAN`, `masaujian`, `STATUS`, `statuspakai`) VALUES
('jwl001', '13-08-2017 06:40:44 pm', '081310113035', 'fak001', 'pro001', 'sem001', 'thn003', 0, 'MENUNGGU', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `KODEPRODI` varchar(20) NOT NULL,
  `KODEFAKULTAS` varchar(20) NOT NULL,
  `NAMAPRODI` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`KODEPRODI`, `KODEFAKULTAS`, `NAMAPRODI`) VALUES
('pro001', 'fak001', 'D3 Sistem Informasi '),
('pro002', 'fak002', 'Statistika'),
('pro003', 'fak003', 'Akuntansi'),
('pro004', 'fak002', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `ruangan`
--

CREATE TABLE `ruangan` (
  `KODERUANG` varchar(20) NOT NULL,
  `KAPASITASRUANG` int(11) DEFAULT NULL,
  `kapasitasujian` int(11) NOT NULL,
  `NAMARUANGAN` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangan`
--

INSERT INTO `ruangan` (`KODERUANG`, `KAPASITASRUANG`, `kapasitasujian`, `NAMARUANGAN`) VALUES
('rng101', 90, 60, 'ruang 101'),
('rng103', 60, 60, 'ruang 103'),
('rng301', 120, 100, 'ruang 301'),
('rng306', 70, 40, 'ruang 306'),
('rng307', 70, 40, 'ruang 307');

-- --------------------------------------------------------

--
-- Table structure for table `ruangujian`
--

CREATE TABLE `ruangujian` (
  `KODERU` int(11) NOT NULL,
  `KODERUANG1` varchar(20) NOT NULL,
  `KODERUANG2` varchar(20) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `KODETHNAJARAN` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruangujian`
--

INSERT INTO `ruangujian` (`KODERU`, `KODERUANG1`, `KODERUANG2`, `kapasitas`, `KODETHNAJARAN`, `KODESEMESTER`) VALUES
(1, 'rng306', 'rng307', 80, 'thn003', 'sem001'),
(2, 'rng101', '-', 60, 'thn003', 'sem001'),
(3, 'rng301', '-', 0, 'thn004', 'sem001');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `KODESEMESTER` varchar(10) NOT NULL,
  `NAMASEMESTER` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`KODESEMESTER`, `NAMASEMESTER`) VALUES
('sem001', 'Gasal'),
('sem002', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `slotisi`
--

CREATE TABLE `slotisi` (
  `id` int(11) NOT NULL,
  `noslot` int(11) NOT NULL,
  `noruang` int(11) NOT NULL,
  `nohari` int(11) NOT NULL,
  `nojam` int(11) NOT NULL,
  `nomk` varchar(10) CHARACTER SET latin1 NOT NULL,
  `kp` varchar(2) CHARACTER SET latin1 NOT NULL,
  `KODEPRODI` varchar(20) CHARACTER SET latin1 NOT NULL,
  `KODEKELAS` varchar(20) CHARACTER SET latin1 NOT NULL,
  `kdpecah` int(11) NOT NULL,
  `KODEMATKUL` varchar(20) CHARACTER SET latin1 NOT NULL,
  `semester` int(11) NOT NULL,
  `NIPDosen1` varchar(18) CHARACTER SET latin1 NOT NULL,
  `NIPDosen2` varchar(18) CHARACTER SET latin1 NOT NULL,
  `NIPpeg1` varchar(18) CHARACTER SET latin1 NOT NULL,
  `NIPpeg2` varchar(18) CHARACTER SET latin1 NOT NULL,
  `JUMLAHMAHASISWA` int(11) DEFAULT NULL,
  `TAHUNANGKATAN` int(11) DEFAULT NULL,
  `KODETHNAJARAN` varchar(20) CHARACTER SET latin1 NOT NULL,
  `KODESEMESTER` varchar(20) CHARACTER SET latin1 NOT NULL,
  `masaujian` int(11) NOT NULL,
  `nilaifitness` double NOT NULL,
  `kodejadwal` varchar(20) CHARACTER SET latin1 NOT NULL,
  `ket` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `slotisi`
--

INSERT INTO `slotisi` (`id`, `noslot`, `noruang`, `nohari`, `nojam`, `nomk`, `kp`, `KODEPRODI`, `KODEKELAS`, `kdpecah`, `KODEMATKUL`, `semester`, `NIPDosen1`, `NIPDosen2`, `NIPpeg1`, `NIPpeg2`, `JUMLAHMAHASISWA`, `TAHUNANGKATAN`, `KODETHNAJARAN`, `KODESEMESTER`, `masaujian`, `nilaifitness`, `kodejadwal`, `ket`) VALUES
(236, 115, 1, 9, 1, '73', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(237, 116, 1, 9, 2, '33', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(238, 117, 1, 9, 3, '-', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(239, 118, 1, 9, 4, '92', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(240, 119, 1, 9, 5, '36', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(232, 111, 1, 8, 3, '87', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(233, 112, 1, 8, 4, '109', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(234, 113, 1, 8, 5, '4', 'p', 'pro001', 'kls001', 1, 'mk014', 1, '1908', '1913', '-', '-', 30, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(235, 114, 1, 9, 0, '67', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(229, 108, 1, 8, 0, '90', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(230, 109, 1, 8, 1, '79', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(231, 110, 1, 8, 2, '72', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(227, 106, 1, 7, 4, '26', 'p', 'pro001', 'kls006', 1, 'mk056', 5, '1933', '1939', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(228, 107, 1, 7, 5, '104', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(226, 105, 1, 7, 3, '45', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(224, 103, 1, 7, 1, '10', 'p', 'pro001', 'kls003', 1, 'mk031', 3, '1939', '1934', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(225, 104, 1, 7, 2, '105', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(221, 100, 1, 6, 4, '89', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(222, 101, 1, 6, 5, '8', 'p', 'pro001', 'kls003', 1, 'mk029', 3, '1913', '1938', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(223, 102, 1, 7, 0, '17', 'p', 'pro001', 'kls003', 1, 'mk037', 3, '1938', '1914', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(220, 99, 1, 6, 3, '7', 'p', 'pro001', 'kls002', 1, 'mk016', 1, '1914', '1906', '-', '-', 30, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(219, 98, 1, 6, 2, '5', 'p', 'pro001', 'kls002', 1, 'mk014', 1, '1912', '1904', '-', '-', 30, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(218, 97, 1, 6, 1, '23', 'p', 'pro001', 'kls005', 1, 'mk053', 5, '1909', '1915', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(216, 95, 1, 5, 5, '76', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(217, 96, 1, 6, 0, '86', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(211, 90, 1, 5, 0, '64', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(212, 91, 1, 5, 1, '102', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(213, 92, 1, 5, 2, '37', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(214, 93, 1, 5, 3, '55', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(215, 94, 1, 5, 4, '30', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(209, 88, 1, 4, 4, '62', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(210, 89, 1, 4, 5, '13', 'p', 'pro001', 'kls004', 1, 'mk033', 3, '1936', '1938', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(206, 85, 1, 4, 1, '51', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(207, 86, 1, 4, 2, '101', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(208, 87, 1, 4, 3, '-', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(205, 84, 1, 4, 0, '93', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(204, 83, 1, 3, 5, '91', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(203, 82, 1, 3, 4, '20', 'p', 'pro001', 'kls006', 1, 'mk049', 5, '1912', '1915', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(201, 80, 1, 3, 2, '11', 'p', 'pro001', 'kls004', 1, 'mk031', 3, '1938', '1911', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(202, 81, 1, 3, 3, '70', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(200, 79, 1, 3, 1, '114', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(199, 78, 1, 3, 0, '32', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(198, 77, 1, 2, 5, '112', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(195, 74, 1, 2, 2, '22', 'p', 'pro001', 'kls006', 1, 'mk051', 5, '1914', '1939', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(196, 75, 1, 2, 3, '43', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(197, 76, 1, 2, 4, '95', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(194, 73, 1, 2, 1, '1', 'p', 'pro001', 'kls002', 1, 'mk010', 1, '1910', '1936', '-', '-', 30, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(192, 71, 1, 1, 5, '85', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(193, 72, 1, 2, 0, '38', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(187, 66, 1, 1, 0, '46', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(188, 67, 1, 1, 1, '75', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(189, 68, 1, 1, 2, '83', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(190, 69, 1, 1, 3, '0', 'p', 'pro001', 'kls001', 1, 'mk010', 1, '1910', '1915', '-', '-', 30, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(191, 70, 1, 1, 4, '111', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(185, 64, 1, 0, 4, '96', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(186, 65, 1, 0, 5, '81', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(182, 61, 1, 0, 1, '12', 'p', 'pro001', 'kls003', 1, 'mk033', 3, '1914', '1904', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(184, 63, 1, 0, 3, '28', 'p', 'pro001', 'kls006', 1, 'mk058', 5, '1905', '1915', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(183, 62, 1, 0, 2, '47', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(179, 58, 0, 9, 4, '15', 'p', 'pro001', 'kls003', 1, 'mk035', 3, '1915', '1939', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(180, 59, 0, 9, 5, '115', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(181, 60, 1, 0, 0, '107', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(177, 56, 0, 9, 2, '31', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(178, 57, 0, 9, 3, '-', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(175, 54, 0, 9, 0, '48', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(176, 55, 0, 9, 1, '80', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(170, 49, 0, 8, 1, '35', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(171, 50, 0, 8, 2, '9', 'p', 'pro001', 'kls004', 1, 'mk029', 3, '1908', '1904', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(172, 51, 0, 8, 3, '49', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(173, 52, 0, 8, 4, '44', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(174, 53, 0, 8, 5, '106', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(169, 48, 0, 8, 0, '61', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(162, 41, 0, 6, 5, '58', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(163, 42, 0, 7, 0, '6', 'p', 'pro001', 'kls001', 1, 'mk016', 1, '1906', '1936', '-', '-', 30, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(164, 43, 0, 7, 1, '84', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(165, 44, 0, 7, 2, '3', 'p', 'pro001', 'kls002', 1, 'mk012', 1, '1907', '1938', '-', '-', 30, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(168, 47, 0, 7, 5, '14', 'p', 'pro003', 'kls003', 1, 'mk035', 3, '1904', '1936', '-', '-', 60, 2020, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(167, 46, 0, 7, 4, '113', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(166, 45, 0, 7, 3, '82', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(159, 38, 0, 6, 2, '100', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(160, 39, 0, 6, 3, '56', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(161, 40, 0, 6, 4, '77', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(158, 37, 0, 6, 1, '40', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(155, 34, 0, 5, 4, '103', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(157, 36, 0, 6, 0, '39', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(156, 35, 0, 5, 5, '88', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(154, 33, 0, 5, 3, '19', 'p', 'pro001', 'kls005', 1, 'mk049', 5, '1913', '1938', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(153, 32, 0, 5, 2, '53', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(149, 28, 0, 4, 4, '42', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(150, 29, 0, 4, 5, '99', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(151, 30, 0, 5, 0, '74', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(152, 31, 0, 5, 1, '24', 'p', 'pro001', 'kls006', 1, 'mk053', 5, '1909', '1936', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(147, 26, 0, 4, 2, '2', 'p', 'pro001', 'kls001', 1, 'mk012', 1, '1907', '1904', '-', '-', 30, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(148, 27, 0, 4, 3, '-', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(139, 18, 0, 3, 0, '18', 'p', 'pro001', 'kls004', 1, 'mk037', 3, '1914', '1939', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(140, 19, 0, 3, 1, '50', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(141, 20, 0, 3, 2, '60', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(142, 21, 0, 3, 3, '57', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(143, 22, 0, 3, 4, '27', 'p', 'pro001', 'kls005', 1, 'mk058', 5, '1905', '1936', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(144, 23, 0, 3, 5, '65', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(145, 24, 0, 4, 0, '78', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(146, 25, 0, 4, 1, '34', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(138, 17, 0, 2, 5, '29', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(137, 16, 0, 2, 4, '63', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(135, 14, 0, 2, 2, '68', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(136, 15, 0, 2, 3, '41', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(134, 13, 0, 2, 1, '98', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(133, 12, 0, 2, 0, '66', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(132, 11, 0, 1, 5, '69', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(130, 9, 0, 1, 3, '54', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(131, 10, 0, 1, 4, '71', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(129, 8, 0, 1, 2, '110', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(128, 7, 0, 1, 1, '21', 'p', 'pro001', 'kls005', 1, 'mk051', 5, '1914', '1938', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(126, 5, 0, 0, 5, '52', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(127, 6, 0, 1, 0, '108', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(123, 2, 0, 0, 2, '59', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(124, 3, 0, 0, 3, '16', 'p', 'pro001', 'kls004', 1, 'mk035', 3, '1938', '1936', '-', '-', 30, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(120, 119, 1, 9, 5, '19', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(121, 0, 0, 0, 0, '97', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(122, 1, 0, 0, 1, '25', 'p', 'pro001', 'kls005', 1, 'mk056', 5, '1938', '1933', '-', '-', 30, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(125, 4, 0, 0, 4, '94', 'p', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(117, 116, 1, 9, 2, '113', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(118, 117, 1, 9, 3, '-', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(119, 118, 1, 9, 4, '79', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(112, 111, 1, 8, 3, '7', 'k', 'pro001', 'kls008', 1, 'mk032', 3, '1936', '1938', '81310113035', '081310113028', 60, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(113, 112, 1, 8, 4, '3', 'k', 'pro001', 'kls007', 1, 'mk013', 1, '1911', '1912', '081310113035', '81310113035', 60, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(116, 115, 1, 9, 1, '88', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(115, 114, 1, 9, 0, '87', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(114, 113, 1, 8, 5, '104', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(111, 110, 1, 8, 2, '34', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(110, 109, 1, 8, 1, '27', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(109, 108, 1, 8, 0, '35', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(108, 107, 1, 7, 5, '55', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(103, 102, 1, 7, 0, '36', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(104, 103, 1, 7, 1, '109', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(105, 104, 1, 7, 2, '45', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(106, 105, 1, 7, 3, '26', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(107, 106, 1, 7, 4, '43', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(95, 94, 1, 5, 4, '115', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(96, 95, 1, 5, 5, '38', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(97, 96, 1, 6, 0, '56', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(98, 97, 1, 6, 1, '63', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(99, 98, 1, 6, 2, '44', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(100, 99, 1, 6, 3, '111', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(101, 100, 1, 6, 4, '72', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(102, 101, 1, 6, 5, '74', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(94, 93, 1, 5, 3, '46', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(92, 91, 1, 5, 1, '40', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(93, 92, 1, 5, 2, '114', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(89, 88, 1, 4, 4, '62', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(90, 89, 1, 4, 5, '86', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(91, 90, 1, 5, 0, '101', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(88, 87, 1, 4, 3, '-', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(87, 86, 1, 4, 2, '11', 'k', 'pro001', 'kls009', 1, 'mk050', 5, '1939', '1938', '081310113035', '81310113035', 60, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(86, 85, 1, 4, 1, '73', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(85, 84, 1, 4, 0, '41', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(83, 82, 1, 3, 4, '103', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(84, 83, 1, 3, 5, '52', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(82, 81, 1, 3, 3, '90', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(81, 80, 1, 3, 2, '102', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(80, 79, 1, 3, 1, '1', 'k', 'pro001', 'kls007', 1, 'mk009', 1, '1910', '1938', '081310113035', '81310113035', 60, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(77, 76, 1, 2, 4, '28', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(78, 77, 1, 2, 5, '8', 'k', 'pro001', 'kls008', 1, 'mk034', 3, '1915', '1939', '081310113028', '81310113035', 60, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(79, 78, 1, 3, 0, '32', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(76, 75, 1, 2, 3, '89', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(74, 73, 1, 2, 1, '106', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(75, 74, 1, 2, 2, '67', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(72, 71, 1, 1, 5, '54', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(73, 72, 1, 2, 0, '30', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(71, 70, 1, 1, 4, '64', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(70, 69, 1, 1, 3, '98', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(69, 68, 1, 1, 2, '49', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(68, 67, 1, 1, 1, '97', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(67, 66, 1, 1, 0, '33', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(66, 65, 1, 0, 5, '24', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(65, 64, 1, 0, 4, '65', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(64, 63, 1, 0, 3, '77', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(62, 61, 1, 0, 1, '99', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(63, 62, 1, 0, 2, '59', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(61, 60, 1, 0, 0, '10', 'k', 'pro001', 'kls009', 1, 'mk048', 5, '1932', '1904', '081310113028', '081310113035', 60, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(59, 58, 0, 9, 4, '42', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(60, 59, 0, 9, 5, '18', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(58, 57, 0, 9, 3, '-', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(57, 56, 0, 9, 2, '53', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(56, 55, 0, 9, 1, '0', 'k', 'pro001', 'kls007', 1, 'mk008', 1, '1931', '1915', '81310113035', '081310113035', 70, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(50, 49, 0, 8, 1, '91', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(51, 50, 0, 8, 2, '82', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(52, 51, 0, 8, 3, '100', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(53, 52, 0, 8, 4, '48', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(54, 53, 0, 8, 5, '12', 'k', 'pro001', 'kls004', 1, 'mk052', 5, '1904', '1915', '081310113035', '081310113028', 60, 2020, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(55, 54, 0, 9, 0, '71', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(49, 48, 0, 8, 0, '66', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(48, 47, 0, 7, 5, '75', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(47, 46, 0, 7, 4, '13', 'k', 'pro001', 'kls009', 1, 'mk052', 5, '1931', '1904', '081310113028', '081310113035', 60, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(46, 45, 0, 7, 3, '17', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(42, 41, 0, 6, 5, '50', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(43, 42, 0, 7, 0, '107', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(45, 44, 0, 7, 2, '92', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(44, 43, 0, 7, 1, '21', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(41, 40, 0, 6, 4, '108', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(38, 37, 0, 6, 1, '5', 'k', 'pro001', 'kls008', 1, 'mk028', 3, '1908', '1936', '81310113035', '081310113028', 60, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(39, 38, 0, 6, 2, '20', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(40, 39, 0, 6, 3, '68', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(36, 35, 0, 5, 5, '29', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(37, 36, 0, 6, 0, '31', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(30, 29, 0, 4, 5, '51', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(31, 30, 0, 5, 0, '96', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(32, 31, 0, 5, 1, '83', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(33, 32, 0, 5, 2, '84', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(34, 33, 0, 5, 3, '69', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(35, 34, 0, 5, 4, '16', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(28, 27, 0, 4, 3, '-', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(29, 28, 0, 4, 4, '93', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(27, 26, 0, 4, 2, '110', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(26, 25, 0, 4, 1, '94', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(25, 24, 0, 4, 0, '37', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(20, 19, 0, 3, 1, '80', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(21, 20, 0, 3, 2, '105', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(22, 21, 0, 3, 3, '47', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(23, 22, 0, 3, 4, '112', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(24, 23, 0, 3, 5, '2', 'k', 'pro001', 'kls007', 1, 'mk011', 1, '1907', '1938', '081310113028', '81310113035', 60, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(19, 18, 0, 3, 0, '81', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(18, 17, 0, 2, 5, '22', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(17, 16, 0, 2, 4, '85', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(16, 15, 0, 2, 3, '25', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(15, 14, 0, 2, 2, '60', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(14, 13, 0, 2, 1, '23', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(13, 12, 0, 2, 0, '6', 'k', 'pro001', 'kls008', 1, 'mk030', 3, '1938', '1934', '081310113028', '081310113035', 60, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(12, 11, 0, 1, 5, '95', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(11, 10, 0, 1, 4, '4', 'k', 'pro001', 'kls007', 1, 'mk015', 1, '1936', '1904', '081310113035', '081310113028', 60, 2016, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(10, 9, 0, 1, 3, '70', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(9, 8, 0, 1, 2, '14', 'k', 'pro001', 'kls009', 1, 'mk055', 5, '1933', '1936', '81310113035', '081310113028', 60, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(8, 7, 0, 1, 1, '78', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(7, 6, 0, 1, 0, '15', 'k', 'pro001', 'kls009', 1, 'mk057', 5, '1914', '1904', '81310113035', '081310113035', 60, 2014, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(6, 5, 0, 0, 5, '76', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(1, 0, 0, 0, 0, '39', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(2, 1, 0, 0, 1, '58', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(3, 2, 0, 0, 2, '61', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(4, 3, 0, 0, 3, '57', 'k', '0', '0', 0, '0', 0, '0', '0', '0', '0', 0, 0, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1),
(5, 4, 0, 0, 4, '9', 'k', 'pro001', 'kls008', 1, 'mk036', 3, '1914', '1936', '081310113035', '81310113035', 60, 2015, 'thn003', 'sem001', 0, 0.00039984006397441024, 'jwl001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tahunajaran`
--

CREATE TABLE `tahunajaran` (
  `KODETHNAJARAN` varchar(10) NOT NULL,
  `tahunajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunajaran`
--

INSERT INTO `tahunajaran` (`KODETHNAJARAN`, `tahunajaran`) VALUES
('thn001', '2014-2015'),
('thn002', '2015-2016'),
('thn003', '2016-2017');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailajar`
--
ALTER TABLE `detailajar`
  ADD PRIMARY KEY (`NIP`,`KODEMATKUL`,`KODETHNAJARAN`);

--
-- Indexes for table `detailjadwal`
--
ALTER TABLE `detailjadwal`
  ADD PRIMARY KEY (`IDDETAIL`);

--
-- Indexes for table `detailkelas`
--
ALTER TABLE `detailkelas`
  ADD PRIMARY KEY (`KODEPRODI`,`KODEKELAS`,`kdpecah`,`KODETHNAJARAN`,`KODEMATKUL`,`NIP`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`KODEFAKULTAS`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`KODEHARI`);

--
-- Indexes for table `hariujian`
--
ALTER TABLE `hariujian`
  ADD PRIMARY KEY (`KODEHARIUJIAN`);

--
-- Indexes for table `hariujian2`
--
ALTER TABLE `hariujian2`
  ADD PRIMARY KEY (`KODEHARIUJIAN`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`KODEJABATAN`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`KODEJAM`);

--
-- Indexes for table `jam50`
--
ALTER TABLE `jam50`
  ADD PRIMARY KEY (`KODEJAM`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`KODEKELAS`);

--
-- Indexes for table `labkom`
--
ALTER TABLE `labkom`
  ADD PRIMARY KEY (`KODELAB`);

--
-- Indexes for table `labkomujian`
--
ALTER TABLE `labkomujian`
  ADD PRIMARY KEY (`KODELABUJIAN`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`KODEMATKUL`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`NIP`);

--
-- Indexes for table `pembagiankelas`
--
ALTER TABLE `pembagiankelas`
  ADD PRIMARY KEY (`KODEPRODI`,`KODEKELAS`);

--
-- Indexes for table `pengawasdosen`
--
ALTER TABLE `pengawasdosen`
  ADD PRIMARY KEY (`nip`,`kd_thn_ajaran`,`kd_semester`,`uts_or_uas`);

--
-- Indexes for table `pengawaspegawai`
--
ALTER TABLE `pengawaspegawai`
  ADD PRIMARY KEY (`nip`,`kd_thn_ajaran`,`kd_semester`,`uts_or_uas`);

--
-- Indexes for table `penjadwalan`
--
ALTER TABLE `penjadwalan`
  ADD PRIMARY KEY (`KODEJADWAL`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`KODEPRODI`);

--
-- Indexes for table `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`KODERUANG`);

--
-- Indexes for table `ruangujian`
--
ALTER TABLE `ruangujian`
  ADD PRIMARY KEY (`KODERU`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`KODESEMESTER`);

--
-- Indexes for table `slotisi`
--
ALTER TABLE `slotisi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  ADD PRIMARY KEY (`KODETHNAJARAN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ruangujian`
--
ALTER TABLE `ruangujian`
  MODIFY `KODERU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
