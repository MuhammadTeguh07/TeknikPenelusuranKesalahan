CREATE TABLE `slotisi` (
  `id` int(11) NOT NULL,
  `noslot` int(11) NOT NULL,
  `noruang` int(11) NOT NULL,
  `nohari` int(11) NOT NULL,
  `nojam` int(11) NOT NULL,  
  `nomk` varchar(10) COLLATE latin1_general_ci NOT NULL,
  `kp` varchar(2) COLLATE latin1_general_ci NOT NULL,
  `KODEPRODI` varchar(20) NOT NULL,
  `KODEKELAS` varchar(20) NOT NULL,
  `kdpecah` int(11) NOT NULL,
  `KODEMATKUL` varchar(20) NOT NULL,
  `semester` int(11) NOT NULL,
  `NIPDosen1` varchar(18) NOT NULL,
  `NIPDosen2` varchar(18) NOT NULL,
  `NIPpeg1` varchar(18) NOT NULL,
  `NIPpeg2` varchar(18) NOT NULL,  
  `JUMLAHMAHASISWA` int(11) DEFAULT NULL,
  `TAHUNANGKATAN` int(11) DEFAULT NULL,
  `KODETHNAJARAN` varchar(20) NOT NULL,
  `KODESEMESTER` varchar(20) NOT NULL,
  `masaujian` int(11) DEFAULT NULL,
  `nilaifitness` double DEFAULT NULL,
  `ket` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `slotisi`
--

INSERT INTO `slotisi` (`id`, `noslot`,`noruang`,`nohari`,`nojam`, `nomk`,`kp`,
  `KODEPRODI`,`KODEKELAS`, `kdpecah`, `KODEMATKUL`,`semester`, `NIPDosen1`,`NIPDosen2`, 
  `NIPpeg1`, `NIPpeg2`, `JUMLAHMAHASISWA`,`TAHUNANGKATAN`, `KODETHNAJARAN`, 
  `KODESEMESTER`,`masaujian`, `nilaifitness`,`ket`) VALUES
(1, 0, 0, 0,0 , '-', 'k','pro001', 'kls001', 1, 'mk007', 1,
 '1910','1912', '19101234','19105678',60, 2016 , 'thn003', 'sem001',0,0,0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slotisi`
--
ALTER TABLE `slotisi`
  ADD PRIMARY KEY (`id`);