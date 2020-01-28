SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `tersedia` (
  `id_tersedia` int(11) NOT NULL,
  `jml_tersedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `tersedia` (`id_tersedia`, `jml_tersedia`) VALUES
(1,100);


-- --------------------------------------------------------

--
-- Table structure for table `posko`
--

CREATE TABLE `posko` (
  `id_posko` int(11) NOT NULL,
  `nama_posko` varchar(100) NOT NULL,
  `alamat_posko` text NOT NULL,
  `telp_posko` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posko`
--

INSERT INTO `posko` (`id_posko`, `nama_posko`, `alamat_posko`, `telp_posko`) VALUES
(1,'POSKO KOTO PANJANG 1','KOTO PANJANG','085282489336');
-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan`
--

CREATE TABLE `kebutuhan` (
  `id_kebutuhan` int(11) NOT NULL,
  `nama_kebutuhan` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` text NOT NULL,
  `id_posko` int(11) NOT NULL,
  `id_tersedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kebutuhan`
--

INSERT INTO `kebutuhan` (`id_kebutuhan`, `nama_kebutuhan`, `jumlah`, `satuan`, `id_posko`, `id_tersedia`) VALUES
(6, 'Beras',10, 'Kg', 1,1);

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE `bencana` (
  `id_bencana` int(11) NOT NULL,
  `nama_bencana` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `korban_meninggal` text NOT NULL,
  `korban_luka` text NOT NULL,
  `id_posko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id_bencana`, `nama_bencana`, `tanggal`, `korban_meninggal`,`korban_luka`,`id_posko`) VALUES
(11,'LONGSOR','2018-12-27 16:39:40','1','9',1);
-- --------------------------------------------------------

--
-- Table structure for table `masuk`
--

CREATE TABLE `masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_tersedia` int(11) NOT NULL,
  `nama` text NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` text NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `masuk`
--

INSERT INTO `masuk` (`id_masuk`,`id_tersedia`, `nama`, `jumlah`,`satuan`,`tanggal`) VALUES
(2, 1, 'Beras', 100, 'Kg', '2018-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `keluar`
--

CREATE TABLE `keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_posko` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` text NOT NULL,
  `tanggal` date NOT NULL,
  `id_tersedia` int(11) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bencana`
--

INSERT INTO `keluar` (`id_keluar`, `id_posko`, `nama`, `jumlah`, `satuan`, `tanggal`, `id_tersedia`) VALUES
(4,1,'Beras',50,'Kg','2019-12-26',1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` enum('admin','operator') NOT NULL,
  `id_posko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`,`level`,`id_posko`) VALUES
('admin', 'admin', 'Administrator', 'admin', NULL),
('petugas', 'petugas', 'Ade Al YAzid','operator',1);

--
-- Indexes for dumped tables
--


ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id_bencana`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

ALTER TABLE `posko`
  ADD PRIMARY KEY (`id_posko`);

ALTER TABLE `masuk`
  ADD PRIMARY KEY (`id_masuk`);

ALTER TABLE `keluar`
  ADD PRIMARY KEY (`id_keluar`);

ALTER TABLE `kebutuhan`
  ADD PRIMARY KEY (`id_kebutuhan`);
ALTER TABLE `tersedia`
  ADD PRIMARY KEY (`id_tersedia`);


ALTER TABLE `bencana`
  MODIFY `id_bencana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
ALTER TABLE `posko`
  MODIFY `id_posko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
ALTER TABLE `keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
ALTER TABLE `kebutuhan`
  MODIFY `id_kebutuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
  
ALTER TABLE `user`
  ADD CONSTRAINT `useridposko` FOREIGN KEY (`id_posko`) REFERENCES `posko` (`id_posko`) ON DELETE SET NULL ON UPDATE CASCADE;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
