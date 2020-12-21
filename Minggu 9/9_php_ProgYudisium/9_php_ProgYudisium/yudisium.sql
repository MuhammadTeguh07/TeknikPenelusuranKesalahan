-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 04:47 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yudisium`
--

-- --------------------------------------------------------

--
-- Table structure for table `bidangilmu`
--

CREATE TABLE IF NOT EXISTS `bidangilmu` (
  `ID_BIDANGILMU` varchar(10) NOT NULL,
  `ID_PRODI` varchar(10) NOT NULL,
  `NAMA_BIDANGILMU` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidangilmu`
--

INSERT INTO `bidangilmu` (`ID_BIDANGILMU`, `ID_PRODI`, `NAMA_BIDANGILMU`) VALUES
('bi0001', 'p0001', 'Sistem Informasi'),
('bi0002', 'p0002', 'Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `ID_DEPARTEMEN` varchar(10) NOT NULL,
  `ID_FAKULTAS` varchar(10) NOT NULL,
  `NAMA_DEPARTEMEN` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`ID_DEPARTEMEN`, `ID_FAKULTAS`, `NAMA_DEPARTEMEN`) VALUES
('d0001', 'f0001', 'Teknik'),
('d0002', 'f0002', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `detail_berkas`
--

CREATE TABLE IF NOT EXISTS `detail_berkas` (
  `ID_JENIS` varchar(10) NOT NULL,
  `ID_PENDAFTARAN` varchar(25) NOT NULL,
  `FILE` varchar(20) DEFAULT NULL,
  `STATUS_VALIDASI` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_berkas`
--

INSERT INTO `detail_berkas` (`ID_JENIS`, `ID_PENDAFTARAN`, `FILE`, `STATUS_VALIDASI`) VALUES
('b0001', 'IDPEND20170612012201', '151411513001-1.png', '1'),
('b0001', 'IDPEND20170613035430', '151411513042-1.png', '1'),
('b0001', 'IDPEND20170619014859', '151411513059-1.png', '1'),
('b0001', 'IDPEND20170701023400', '151411513066-1.jpg', '1'),
('b0001', 'IDPEND20170703030858', '151411513049-1.jpg', '1'),
('b0001', 'IDPEND20170705103301', '151411513040-1.jpg', '1'),
('b0001', 'IDPEND20170717101533', '151411513099-1.png', '1'),
('b0002', 'IDPEND20170612012201', '151411513001-3.png', '1'),
('b0002', 'IDPEND20170613035430', '151411513042-2.png', '1'),
('b0002', 'IDPEND20170701023400', '151411513066-2.jpg', '1'),
('b0002', 'IDPEND20170703030858', '151411513049-2.jpg', '1'),
('b0002', 'IDPEND20170705103301', '151411513040-2.pdf', '1'),
('b0003', 'IDPEND20170612012201', '151411513001-2.png', '1'),
('b0003', 'IDPEND20170613035430', '151411513042-4.png', '1'),
('b0003', 'IDPEND20170701023400', '151411513066-3.jpg', '1'),
('b0003', 'IDPEND20170703030858', '151411513049-3.jpg', '1'),
('b0003', 'IDPEND20170705103301', '151411513040-3.pdf', '1'),
('b0004', 'IDPEND20170612012201', '151411513001-4.png', '1'),
('b0004', 'IDPEND20170613035430', '151411513042-4.png', '1'),
('b0004', 'IDPEND20170701023400', '151411513066-6.jpg', '1'),
('b0004', 'IDPEND20170703030858', '151411513049-4.jpg', '1'),
('b0004', 'IDPEND20170705103301', '151411513040-4.pdf', '1'),
('b0005', 'IDPEND20170612012201', '151411513001-5.png', '1'),
('b0005', 'IDPEND20170613035430', '151411513042-5.jpg', '1'),
('b0005', 'IDPEND20170701023400', '151411513066-4.jpg', '1'),
('b0005', 'IDPEND20170703030858', '151411513049-5.jpg', '1'),
('b0005', 'IDPEND20170705103301', '151411513040-5.pdf', '1'),
('b0006', 'IDPEND20170612012201', '151411513001-6.png', '1'),
('b0006', 'IDPEND20170613035430', '151411513042-6.jpg', '1'),
('b0006', 'IDPEND20170701023400', '151411513066-5.jpg', '1'),
('b0006', 'IDPEND20170703030858', '151411513049-6.jpg', '1'),
('b0006', 'IDPEND20170705103301', '151411513040-6.pdf', '1'),
('b0007', 'IDPEND20170612012201', '151411513001-7.png', '1'),
('b0007', 'IDPEND20170613035430', '151411513042-7.jpg', '1'),
('b0007', 'IDPEND20170701023400', '151411513066-7.jpg', '1'),
('b0007', 'IDPEND20170703030858', '151411513049-7.jpg', '1'),
('b0007', 'IDPEND20170705103301', '151411513040-7.pdf', '1'),
('b0008', 'IDPEND20170612012201', '151411513001-8.png', '1'),
('b0008', 'IDPEND20170613035430', '151411513042-8.jpg', '1'),
('b0008', 'IDPEND20170701023400', '151411513066-9.jpg', '1'),
('b0008', 'IDPEND20170703030858', '151411513049-8.jpg', '1'),
('b0008', 'IDPEND20170705103301', '151411513040-8.pdf', '1'),
('b0009', 'IDPEND20170612012201', '151411513001-9.png', '1'),
('b0009', 'IDPEND20170613035430', '151411513042-9.jpg', '1'),
('b0009', 'IDPEND20170701023400', '151411513066-11.jpg', '1'),
('b0009', 'IDPEND20170703030858', '151411513049-9.jpg', '1'),
('b0009', 'IDPEND20170705103301', '151411513040-9.pdf', '1'),
('b0010', 'IDPEND20170612012201', '151411513001-10.png', '1'),
('b0010', 'IDPEND20170613035430', '151411513042-10.jpg', '1'),
('b0010', 'IDPEND20170701023400', '151411513066-10.jpg', '1'),
('b0010', 'IDPEND20170703030858', '151411513049-10.jpg', '1'),
('b0010', 'IDPEND20170705103301', '151411513040-10.pdf', '1'),
('b0011', 'IDPEND20170612012201', '151411513001-11.png', '1'),
('b0011', 'IDPEND20170613035430', '151411513042-12.jpg', '1'),
('b0011', 'IDPEND20170701023400', '151411513066-12.jpg', '1'),
('b0011', 'IDPEND20170703030858', '151411513049-11.jpg', '1'),
('b0011', 'IDPEND20170705103301', '151411513040-11.pdf', '1'),
('b0012', 'IDPEND20170612012201', '151411513001-12.png', '1'),
('b0012', 'IDPEND20170613035430', '151411513042-13.jpg', '1'),
('b0012', 'IDPEND20170701023400', '151411513066-13.jpg', '1'),
('b0012', 'IDPEND20170703030858', '151411513049-12.jpg', '1'),
('b0012', 'IDPEND20170705103301', '151411513040-12.png', '1'),
('b0013', 'IDPEND20170612012201', '151411513001-13.png', '1'),
('b0013', 'IDPEND20170613035430', '151411513042-14.jpg', '1'),
('b0013', 'IDPEND20170701023400', '151411513066-8.jpg', '1'),
('b0013', 'IDPEND20170703030858', '151411513049-14.jpg', '1'),
('b0013', 'IDPEND20170705103301', '151411513040-13.pdf', '1'),
('b0014', 'IDPEND20170612012201', '151411513001-14.png', '1'),
('b0014', 'IDPEND20170613035430', '151411513042-11.jpg', '1'),
('b0014', 'IDPEND20170701023400', '151411513066-15.pdf', '1'),
('b0014', 'IDPEND20170703030858', '151411513049-13.jpg', '1'),
('b0014', 'IDPEND20170705103301', '151411513040-14.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `detail_dosen_pembimbing`
--

CREATE TABLE IF NOT EXISTS `detail_dosen_pembimbing` (
  `ID_PENDAFTARAN` varchar(25) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `STATUS_DOSEN_PEMBIMBING` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_dosen_pembimbing`
--

INSERT INTO `detail_dosen_pembimbing` (`ID_PENDAFTARAN`, `NIP`, `STATUS_DOSEN_PEMBIMBING`) VALUES
('IDPEND20170612012201', '197812172005012001', 'Dosen Pembimbing I'),
('IDPEND20170612012201', '198206062007101001', 'Dosen Pembimbing II'),
('IDPEND20170613035430', '198206062007101001', 'Dosen Pembimbing I'),
('IDPEND20170613035430', '198410272010122005', 'Dosen Pembimbing II'),
('IDPEND20170619014859', '197812172005012001', 'Dosen Pembimbing II'),
('IDPEND20170619014859', '198206062007101001', 'Dosen Pembimbing I'),
('IDPEND20170701023400', '197812172005012001', 'Dosen Pembimbing I'),
('IDPEND20170701023400', '198410272010122005', 'Dosen Pembimbing II'),
('IDPEND20170703030858', '197812172005012001', 'Dosen Pembimbing I'),
('IDPEND20170703030858', '198410272010122005', 'Dosen Pembimbing II'),
('IDPEND20170705103301', '197812172005012001', 'Dosen Pembimbing I'),
('IDPEND20170705103301', '198410272010122005', 'Dosen Pembimbing II'),
('IDPEND20170717101533', '198206062007101001', 'Dosen Pembimbing I'),
('IDPEND20170717101533', '198410272010122005', 'Dosen Pembimbing II');

-- --------------------------------------------------------

--
-- Table structure for table `detail_pelaksanaan`
--

CREATE TABLE IF NOT EXISTS `detail_pelaksanaan` (
  `ID_DETAIL_PELAKSANAAN` varchar(10) NOT NULL,
  `ID_PELAKSANAAN` varchar(18) NOT NULL,
  `ID_PENDAFTARAN` varchar(25) NOT NULL,
  `TGL_KEPUTUSAN_YUDISIUM` date DEFAULT NULL,
  `STATUS_LULUS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pelaksanaan`
--

INSERT INTO `detail_pelaksanaan` (`ID_DETAIL_PELAKSANAAN`, `ID_PELAKSANAAN`, `ID_PENDAFTARAN`, `TGL_KEPUTUSAN_YUDISIUM`, `STATUS_LULUS`) VALUES
('DP0002', 'pl0001', 'IDPEND20170612012201', '2017-06-12', '0'),
('DP0006', 'pl0001', 'IDPEND20170612012201', '2017-06-16', '1'),
('DP0005', 'pl0001', 'IDPEND20170613035430', '2017-06-13', '0'),
('DP0013', 'pl0001', 'IDPEND20170613035430', '2017-07-20', '1'),
('DP0010', 'pl0001', 'IDPEND20170619014859', '2017-06-19', '0'),
('DP0012', 'pl0001', 'IDPEND20170619014859', '2017-06-20', '1'),
('DP0014', 'pl0002', 'IDPEND20170701023400', '2017-07-01', '0'),
('DP0015', 'pl0002', 'IDPEND20170703030858', '2017-07-03', '0'),
('DP0017', 'pl0002', 'IDPEND20170705103301', '2017-07-19', '0'),
('DP0016', 'pl0002', 'IDPEND20170717101533', '2017-07-17', '0');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE IF NOT EXISTS `dosen` (
  `NIP` varchar(18) NOT NULL,
  `ID_KOTA` varchar(8) NOT NULL,
  `ID_PRODI` varchar(10) NOT NULL,
  `ID_JABATAN` varchar(10) NOT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `NAMA_DOSEN` varchar(30) DEFAULT NULL,
  `TGL_LAHIR_DOSEN` date DEFAULT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `NO_TELP` varchar(15) DEFAULT NULL,
  `JK` char(1) DEFAULT NULL,
  `EMAIL` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIP`, `ID_KOTA`, `ID_PRODI`, `ID_JABATAN`, `PASSWORD`, `NAMA_DOSEN`, `TGL_LAHIR_DOSEN`, `ALAMAT`, `NO_TELP`, `JK`, `EMAIL`) VALUES
('196806261993032003', 'k0001', 'p0001', 'j0003', '1514', 'Prof. Dr. Retna Apsari, M.Si', '1985-06-30', 'nnn', '0808', 'P', 'retna@gmail.com'),
('197812172005012001', 'k0001', 'p0001', 'j0002', '1514', 'Endah Purwanti, S.Si, M.Kom', '1985-06-15', 'Jl Manyar Sabrangan gg VIIIb / 25', '08888', 'P', 'endah@gmail.com'),
('198206062007101001', 'k0001', 'p0001', 'j0001', '1514', 'Faried Effendy,S.Si, M.Kom', '1980-06-22', 'JL', '08888', 'L', 'farief@gmail.com'),
('198410272010122005', 'k0001', 'p0001', 'j0001', 'vv', 'Ira Puspitasari, Ph.D', '2017-06-14', 'JL', '08888', 'P', 'irapus@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `ID_FAKULTAS` varchar(10) NOT NULL,
  `NAMA_FAKULTAS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`ID_FAKULTAS`, `NAMA_FAKULTAS`) VALUES
('f0001', 'Vokasi'),
('f0002', 'Sains dan Teknologi');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE IF NOT EXISTS `jabatan` (
  `ID_JABATAN` varchar(10) NOT NULL,
  `NAMA_JABATAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`ID_JABATAN`, `NAMA_JABATAN`) VALUES
('j0001', 'Dosbim'),
('j0002', 'Koordinator Program Studi'),
('j0003', 'Wakil Dekan 1');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_berkas`
--

CREATE TABLE IF NOT EXISTS `jenis_berkas` (
  `ID_JENIS` varchar(10) NOT NULL,
  `NAMA_JENIS` varchar(50) DEFAULT NULL,
  `KETERANGAN` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_berkas`
--

INSERT INTO `jenis_berkas` (`ID_JENIS`, `NAMA_JENIS`, `KETERANGAN`) VALUES
('b0001', 'Surat Keterangan Bebas Pinjam dari Perpustakaan UA', '-'),
('b0002', 'Surat Bukti Penyerahan Hardcover dari Vokasi', '-'),
('b0003', 'Tanda Bukti Penyerahan Hardcover dari Perpustakaan', '-'),
('b0004', 'Tanda Bukti Pembayaran SPP (cybercampus)', '-'),
('b0005', 'Surat Keterangan Bebas Pinjam Alat dan Buku', '-'),
('b0006', 'ELPT Legalisir', '-'),
('b0007', 'Akta Kelahiran', '-'),
('b0008', 'Lembar Pengesahan', '-'),
('b0009', 'Bukti Telah Foto Wisuda di Rektorat', '-'),
('b0010', 'Surat Validasi SKP ( Sistem Kredit Prestasi )', '-'),
('b0011', 'KHS Semester 1-5', '-'),
('b0012', 'KRS Semester 6', '-'),
('b0013', 'Sertifikat PPKMB', '-'),
('b0014', 'Ijazah', '-');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `ID_KOTA` varchar(8) NOT NULL,
  `NAMA_KOTA` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`ID_KOTA`, `NAMA_KOTA`) VALUES
('k0001', 'Surabaya'),
('k0002', 'Madiun'),
('k0003', 'Malang');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `NIM` varchar(12) NOT NULL,
  `ID_BIDANGILMU` varchar(10) NOT NULL,
  `ID_KOTA` varchar(8) DEFAULT NULL,
  `NAMA` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` char(1) DEFAULT NULL,
  `AGAMA` varchar(15) DEFAULT NULL,
  `ALAMAT_RUMAH` varchar(100) DEFAULT NULL,
  `NO_TELP` varchar(15) DEFAULT NULL,
  `NO_HP` varchar(15) DEFAULT NULL,
  `FOTO` varchar(200) DEFAULT NULL,
  `TGL_LAHIR` date DEFAULT NULL,
  `EMAIL` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `ID_BIDANGILMU`, `ID_KOTA`, `NAMA`, `PASSWORD`, `JENIS_KELAMIN`, `AGAMA`, `ALAMAT_RUMAH`, `NO_TELP`, `NO_HP`, `FOTO`, `TGL_LAHIR`, `EMAIL`) VALUES
('151411513001', 'bi0001', 'k0001', 'Bunga Fitra Annasyah', 'vv', 'P', 'Islam', 'jl', '088', '08888', '151411513001-1 (1).png', '1997-07-27', 'rizkydarise94@gmail.com'),
('151411513040', 'bi0001', 'k0002', 'Tri Puspa Rinjeni', 'adipati', 'P', 'Islam', 'RT 30 RW 10 Tanjung Rejo, Kebun Sari', '0313097988', '082141562596', 'Penguins.jpg', '1996-02-03', 'puspa@gmail.com'),
('151411513042', 'bi0001', 'k0001', 'A. Khoiruddin I.', 'vv', 'L', 'Islam', 'JL', '08888', '0888888', '151411513001-14.png', '1996-07-24', 'udin@gmail.com'),
('151411513045', 'bi0001', 'k0001', 'Agnes Bella Ayu A.', '151411513045', 'P', 'Islam', NULL, NULL, NULL, NULL, '1996-04-23', NULL),
('151411513049', 'bi0001', 'k0001', 'Yuliana Suci R.', 'kendall', 'P', 'Islam', 'Jl. Dapuan Baru, Krembangan Utara', '0313097988', '085707982192', 'Desert.jpg', '1997-01-28', 'yulianasuci27@gmail.com'),
('151411513054', 'bi0001', 'k0001', 'Epridianto Ilham P.P', '151411513054', 'L', 'Islam', NULL, NULL, NULL, NULL, '1997-01-28', NULL),
('151411513055', 'bi0001', 'k0001', 'Reydita Purnama S.', '151411513055', 'P', 'Islam', NULL, NULL, NULL, NULL, '1996-05-20', NULL),
('151411513059', 'bi0001', 'k0001', 'M. Aufal Marom', 'abcde', 'L', 'Islam', 'Jl', '08888', '08888', '1514115-1.png', '1996-06-01', 'anga896@gmail.com'),
('151411513065', 'bi0001', 'k0001', 'Addin Cendekia W', '151411513065', 'L', 'Islam', NULL, NULL, NULL, NULL, '1996-05-22', NULL),
('151411513066', 'bi0001', 'k0001', 'Iva Nur Aisyah P.', 'abcd', 'P', 'Islam', 'Jl. Indrakila', '0888', '088888', 'Tulips.jpg', '1997-02-02', 'mitha@gmail.com'),
('151411513099', 'bi0001', 'k0001', 'Indra', 'deu', 'L', 'Islam', 'Jl. Manyar', '0313097988', '082141562596', '151411513001-1 (1).png', '1997-05-22', 'indra@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pelaksanaan_yudisium`
--

CREATE TABLE IF NOT EXISTS `pelaksanaan_yudisium` (
  `ID_PELAKSANAAN` varchar(18) NOT NULL,
  `ID_PEG` varchar(18) NOT NULL,
  `ID_PERIODE` varchar(10) NOT NULL,
  `NAMA_PELAKSANAAN` varchar(30) DEFAULT NULL,
  `BATAS_AWAL` date DEFAULT NULL,
  `BATAS_AKHIR` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelaksanaan_yudisium`
--

INSERT INTO `pelaksanaan_yudisium` (`ID_PELAKSANAAN`, `ID_PEG`, `ID_PERIODE`, `NAMA_PELAKSANAAN`, `BATAS_AWAL`, `BATAS_AKHIR`) VALUES
('pl0001', '1514155', 'pr0001', 'ke-1', '2017-06-01', '2017-06-30'),
('pl0002', '1514155', 'pr0003', 'ke-1', '2017-07-01', '2017-07-31'),
('pl0003', '1514155', 'pr0004', 'ke-1', '2017-08-03', '2017-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran`
--

CREATE TABLE IF NOT EXISTS `pendaftaran` (
  `ID_PENDAFTARAN` varchar(25) NOT NULL,
  `NIM` varchar(12) NOT NULL,
  `STATUS_MHS` char(1) DEFAULT NULL,
  `TANGGAL_DITERIMA` date DEFAULT NULL,
  `NAMA_ORTU` varchar(30) DEFAULT NULL,
  `PEKERJAAN` varchar(30) DEFAULT NULL,
  `JUDUL_TA` varchar(200) DEFAULT NULL,
  `TANGGAL_UJIAN_TA` date NOT NULL,
  `IPK` float DEFAULT NULL,
  `TOTAL_SKS` int(11) DEFAULT NULL,
  `TGL_DAFTAR` date DEFAULT NULL,
  `SKOR_ELPT` int(11) DEFAULT NULL,
  `NILAI_SKP` int(11) DEFAULT NULL,
  `JUMLAH_SKS_NILAI_D` varchar(2) NOT NULL,
  `PRESENTASE_NILAI_D` float DEFAULT NULL,
  `LULUS_PPKMB` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran`
--

INSERT INTO `pendaftaran` (`ID_PENDAFTARAN`, `NIM`, `STATUS_MHS`, `TANGGAL_DITERIMA`, `NAMA_ORTU`, `PEKERJAAN`, `JUDUL_TA`, `TANGGAL_UJIAN_TA`, `IPK`, `TOTAL_SKS`, `TGL_DAFTAR`, `SKOR_ELPT`, `NILAI_SKP`, `JUMLAH_SKS_NILAI_D`, `PRESENTASE_NILAI_D`, `LULUS_PPKMB`) VALUES
('IDPEND20170612012201', '151411513001', '1', '2014-01-01', 'DD', 'Ibu Rumah Tangga', 'Sistem Informasi', '2017-01-01', 3.5, 110, '2017-06-12', 499, 77, '0', 0, '1'),
('IDPEND20170613035430', '151411513042', '1', '2014-01-01', 'KK', 'Ibu Rumah Tangga', 'Sistem Informasi', '2017-07-07', 3.55, 110, '2017-06-13', 450, 78, '0', 0, '1'),
('IDPEND20170619014859', '151411513059', '1', '2014-01-01', 'Siti', 'Ibu Rumah Tangga', 'Sistem Informasi', '2017-01-01', 3.4, 110, '2017-06-19', 400, 75, '2', 1.82, '1'),
('IDPEND20170701023400', '151411513066', '1', '2014-09-01', 'KK', 'Ibu Rumah Tangga', 'Sistem Informasi Rekam Medis UNAIR', '2017-07-06', 3.5, 110, '2017-07-01', 434, 150, '8', 7.27, '1'),
('IDPEND20170703030858', '151411513049', '1', '2014-09-14', 'Kendall Jenner', 'Model', 'Sistem Informasi Pengarsipan Data Pengabdian Masyarakat Program Studi D3/S1 Sistem Informasi', '2017-07-13', 3.5, 110, '2017-07-03', 410, 178, '0', 0, '1'),
('IDPEND20170705103301', '151411513040', '1', '2014-09-09', 'Abdul Jaelani', 'Dosen', 'Sistem Informasi e-Library Program Studi D3/S1 Sistem Informasi Universitas Airlangga', '2017-07-11', 3.6, 110, '2017-07-05', 450, 200, '0', 0, '1'),
('IDPEND20170717101533', '151411513099', '0', '2014-09-01', 'Ismail', 'Dosen', 'Sistem Informasi Yudisium', '2017-05-07', 3.5, 110, '2017-07-17', 450, 78, '4', 3.64, '1');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `ID_PERIODE` varchar(10) NOT NULL,
  `NAMA_PERIODE` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`ID_PERIODE`, `NAMA_PERIODE`) VALUES
('pr0001', 'Juli'),
('pr0002', 'Februari'),
('pr0003', 'Agustus'),
('pr0004', 'November');

-- --------------------------------------------------------

--
-- Table structure for table `program_studi`
--

CREATE TABLE IF NOT EXISTS `program_studi` (
  `ID_PRODI` varchar(10) NOT NULL,
  `ID_DEPARTEMEN` varchar(10) NOT NULL,
  `NAMA_PRODI` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program_studi`
--

INSERT INTO `program_studi` (`ID_PRODI`, `ID_DEPARTEMEN`, `NAMA_PRODI`) VALUES
('p0001', 'd0001', 'D3 Sistem Informasi'),
('p0002', 'd0002', 'S1 Sistem Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `tata_usaha`
--

CREATE TABLE IF NOT EXISTS `tata_usaha` (
  `ID_PEG` varchar(18) NOT NULL,
  `ID_KOTA` varchar(8) NOT NULL,
  `ID_PRODI` varchar(10) NOT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  `NAMA_PEG` varchar(30) DEFAULT NULL,
  `TGL_LAHIR_TU` date NOT NULL,
  `ALAMAT` varchar(100) DEFAULT NULL,
  `NO_TELP` varchar(15) DEFAULT NULL,
  `JK` char(1) DEFAULT NULL,
  `EMAIL` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tata_usaha`
--

INSERT INTO `tata_usaha` (`ID_PEG`, `ID_KOTA`, `ID_PRODI`, `PASSWORD`, `NAMA_PEG`, `TGL_LAHIR_TU`, `ALAMAT`, `NO_TELP`, `JK`, `EMAIL`) VALUES
('139101151', 'k0003', 'p0001', '1514155', 'Hesti Ningrum', '1987-07-20', 'Jl Semolowaru', '0838300304', 'P', 'hesti@gmail.com'),
('1514155', 'k0001', 'p0001', '1514155', 'Nurul Aini', '1990-06-23', 'Jl. Manyar Sabrangan', '08888', 'P', 'nurul@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bidangilmu`
--
ALTER TABLE `bidangilmu`
  ADD PRIMARY KEY (`ID_BIDANGILMU`),
  ADD UNIQUE KEY `BIDANGILMU_PK` (`ID_BIDANGILMU`),
  ADD KEY `MEMPUNYAI_FK` (`ID_PRODI`);

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`ID_DEPARTEMEN`),
  ADD UNIQUE KEY `DEPARTEMEN_PK` (`ID_DEPARTEMEN`),
  ADD KEY `MEMILIKI_FK` (`ID_FAKULTAS`);

--
-- Indexes for table `detail_berkas`
--
ALTER TABLE `detail_berkas`
  ADD PRIMARY KEY (`ID_JENIS`,`ID_PENDAFTARAN`),
  ADD UNIQUE KEY `DETAIL_BERKAS_PK` (`ID_JENIS`,`ID_PENDAFTARAN`),
  ADD KEY `BERKAS_MAHASISWA_FK` (`ID_JENIS`),
  ADD KEY `DETAIL_BERKAS_FK` (`ID_PENDAFTARAN`);

--
-- Indexes for table `detail_dosen_pembimbing`
--
ALTER TABLE `detail_dosen_pembimbing`
  ADD PRIMARY KEY (`ID_PENDAFTARAN`,`NIP`),
  ADD UNIQUE KEY `DETAIL_DOSEN_PEMBIMBING_PK` (`ID_PENDAFTARAN`,`NIP`),
  ADD KEY `MEMBIMBING1_FK` (`NIP`),
  ADD KEY `DETAIL_DOSEN_FK` (`ID_PENDAFTARAN`);

--
-- Indexes for table `detail_pelaksanaan`
--
ALTER TABLE `detail_pelaksanaan`
  ADD PRIMARY KEY (`ID_PELAKSANAAN`,`ID_PENDAFTARAN`,`ID_DETAIL_PELAKSANAAN`),
  ADD UNIQUE KEY `DETAIL_PELAKSANAAN_PK` (`ID_PELAKSANAAN`,`ID_PENDAFTARAN`,`ID_DETAIL_PELAKSANAAN`),
  ADD KEY `PELAKSANAAN_YUDISIUM_FK` (`ID_PELAKSANAAN`),
  ADD KEY `DETAIL_PELAKSANAAN_FK` (`ID_PENDAFTARAN`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIP`),
  ADD UNIQUE KEY `DOSEN_PK` (`NIP`),
  ADD KEY `KOTA_LAHIR4_FK` (`ID_KOTA`),
  ADD KEY `MEMPUNYAI5_FK` (`ID_PRODI`),
  ADD KEY `MENJABAT1_FK` (`ID_JABATAN`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`ID_FAKULTAS`),
  ADD UNIQUE KEY `FAKULTAS_PK` (`ID_FAKULTAS`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`ID_JABATAN`),
  ADD UNIQUE KEY `JABATAN_PK` (`ID_JABATAN`);

--
-- Indexes for table `jenis_berkas`
--
ALTER TABLE `jenis_berkas`
  ADD PRIMARY KEY (`ID_JENIS`),
  ADD UNIQUE KEY `JENIS_BERKAS_PK` (`ID_JENIS`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`ID_KOTA`),
  ADD UNIQUE KEY `KOTA_PK` (`ID_KOTA`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD UNIQUE KEY `MAHASISWA_PK` (`NIM`),
  ADD KEY `JURUSAN_FK` (`ID_BIDANGILMU`),
  ADD KEY `KOTA_LAHIR_FK` (`ID_KOTA`);

--
-- Indexes for table `pelaksanaan_yudisium`
--
ALTER TABLE `pelaksanaan_yudisium`
  ADD PRIMARY KEY (`ID_PELAKSANAAN`),
  ADD UNIQUE KEY `PELAKSANAAN_YUDISIUM_PK` (`ID_PELAKSANAAN`),
  ADD KEY `MELAKUKAN_FK` (`ID_PEG`),
  ADD KEY `MEMPUNYAI_PERIODE_FK` (`ID_PERIODE`);

--
-- Indexes for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`ID_PENDAFTARAN`),
  ADD UNIQUE KEY `PENDAFTARAN_PK` (`ID_PENDAFTARAN`),
  ADD KEY `MENDAFTAR_FK` (`NIM`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`ID_PERIODE`),
  ADD UNIQUE KEY `PERIODE_PK` (`ID_PERIODE`);

--
-- Indexes for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD PRIMARY KEY (`ID_PRODI`),
  ADD UNIQUE KEY `PROGRAM_STUDI_PK` (`ID_PRODI`),
  ADD KEY `MEMBUTUHKAN_FK` (`ID_DEPARTEMEN`);

--
-- Indexes for table `tata_usaha`
--
ALTER TABLE `tata_usaha`
  ADD PRIMARY KEY (`ID_PEG`),
  ADD UNIQUE KEY `TATA_USAHA_PK` (`ID_PEG`),
  ADD KEY `KOTA_LAHIR2_FK` (`ID_KOTA`),
  ADD KEY `MEMPUNYAI4_FK` (`ID_PRODI`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bidangilmu`
--
ALTER TABLE `bidangilmu`
  ADD CONSTRAINT `bidangilmu_ibfk_1` FOREIGN KEY (`ID_PRODI`) REFERENCES `program_studi` (`ID_PRODI`);

--
-- Constraints for table `departemen`
--
ALTER TABLE `departemen`
  ADD CONSTRAINT `departemen_ibfk_1` FOREIGN KEY (`ID_FAKULTAS`) REFERENCES `fakultas` (`ID_FAKULTAS`);

--
-- Constraints for table `detail_berkas`
--
ALTER TABLE `detail_berkas`
  ADD CONSTRAINT `detail_berkas_ibfk_1` FOREIGN KEY (`ID_JENIS`) REFERENCES `jenis_berkas` (`ID_JENIS`),
  ADD CONSTRAINT `detail_berkas_ibfk_2` FOREIGN KEY (`ID_PENDAFTARAN`) REFERENCES `pendaftaran` (`ID_PENDAFTARAN`);

--
-- Constraints for table `detail_dosen_pembimbing`
--
ALTER TABLE `detail_dosen_pembimbing`
  ADD CONSTRAINT `detail_dosen_pembimbing_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `dosen` (`NIP`),
  ADD CONSTRAINT `detail_dosen_pembimbing_ibfk_2` FOREIGN KEY (`ID_PENDAFTARAN`) REFERENCES `pendaftaran` (`ID_PENDAFTARAN`);

--
-- Constraints for table `detail_pelaksanaan`
--
ALTER TABLE `detail_pelaksanaan`
  ADD CONSTRAINT `detail_pelaksanaan_ibfk_1` FOREIGN KEY (`ID_PELAKSANAAN`) REFERENCES `pelaksanaan_yudisium` (`ID_PELAKSANAAN`),
  ADD CONSTRAINT `detail_pelaksanaan_ibfk_2` FOREIGN KEY (`ID_PENDAFTARAN`) REFERENCES `pendaftaran` (`ID_PENDAFTARAN`);

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`ID_KOTA`) REFERENCES `kota` (`ID_KOTA`),
  ADD CONSTRAINT `dosen_ibfk_2` FOREIGN KEY (`ID_PRODI`) REFERENCES `program_studi` (`ID_PRODI`),
  ADD CONSTRAINT `dosen_ibfk_3` FOREIGN KEY (`ID_JABATAN`) REFERENCES `jabatan` (`ID_JABATAN`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`ID_BIDANGILMU`) REFERENCES `bidangilmu` (`ID_BIDANGILMU`),
  ADD CONSTRAINT `mahasiswa_ibfk_2` FOREIGN KEY (`ID_KOTA`) REFERENCES `kota` (`ID_KOTA`);

--
-- Constraints for table `pelaksanaan_yudisium`
--
ALTER TABLE `pelaksanaan_yudisium`
  ADD CONSTRAINT `pelaksanaan_yudisium_ibfk_1` FOREIGN KEY (`ID_PEG`) REFERENCES `tata_usaha` (`ID_PEG`),
  ADD CONSTRAINT `pelaksanaan_yudisium_ibfk_2` FOREIGN KEY (`ID_PERIODE`) REFERENCES `periode` (`ID_PERIODE`);

--
-- Constraints for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD CONSTRAINT `pendaftaran_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`);

--
-- Constraints for table `program_studi`
--
ALTER TABLE `program_studi`
  ADD CONSTRAINT `program_studi_ibfk_1` FOREIGN KEY (`ID_DEPARTEMEN`) REFERENCES `departemen` (`ID_DEPARTEMEN`);

--
-- Constraints for table `tata_usaha`
--
ALTER TABLE `tata_usaha`
  ADD CONSTRAINT `tata_usaha_ibfk_1` FOREIGN KEY (`ID_KOTA`) REFERENCES `kota` (`ID_KOTA`),
  ADD CONSTRAINT `tata_usaha_ibfk_2` FOREIGN KEY (`ID_PRODI`) REFERENCES `program_studi` (`ID_PRODI`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
