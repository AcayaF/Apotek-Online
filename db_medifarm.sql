-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 09:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_medifarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_obat` int(11) NOT NULL,
  `jml_item` int(11) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id_keranjang`, `id_user`, `kode_obat`, `jml_item`, `status`) VALUES
(1, 9, 1062, 3, 'belum dibeli'),
(6, 9, 1006, 2, 'belum dibeli'),
(8, 9, 1020, 3, 'belum dibeli'),
(11, 10, 1016, 1, 'belum dibeli');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE `tb_obat` (
  `kode_obat` int(11) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `harga_obat` int(11) NOT NULL,
  `stok_obat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`kode_obat`, `nama_obat`, `harga_obat`, `stok_obat`) VALUES
(1001, 'sunmol tablet', 2000, 12),
(1002, 'paractamol pim', 3500, 10),
(1003, 'panadol biru', 12000, 8),
(1004, 'trimafol forte', 4500, 15),
(1005, 'buffet tablet', 4000, 20),
(1006, 'procold flu & batuk', 3000, 7),
(1007, 'siladex cough & cold sirup', 22000, 5),
(1008, 'decolgen flu', 2500, 10),
(1009, 'konidin', 3000, 9),
(1010, 'inza', 3000, 15),
(1011, 'omeprazole', 6000, 12),
(1012, 'mylanta tablet', 10500, 6),
(1013, 'promag', 7500, 16),
(1014, 'polysilane sirup', 27000, 15),
(1015, 'simvastatin', 11000, 10),
(1016, 'pravastatin novell', 39000, 6),
(1017, 'lipitor', 250000, 3),
(1018, 'acarbose', 15000, 15),
(1019, 'glucophage', 25000, 10),
(1020, 'metrix', 80000, 5),
(1021, 'festaric', 61000, 8),
(1022, 'recolfar', 88000, 3),
(1023, 'aclonac', 13000, 10),
(1024, 'profenid', 24000, 15),
(1025, 'paramex', 3000, 18),
(1026, 'oskadon', 2500, 12),
(1027, 'panadol extra', 15000, 8),
(1028, 'bodrex migra', 3000, 20),
(1029, 'proris', 10000, 6),
(1030, 'termofen sirup', 30000, 7),
(1031, 'entrostop', 8500, 15),
(1032, 'diapet', 3000, 6),
(1033, 'diatabs', 3000, 8),
(1034, 'dentasol', 17500, 12),
(1035, 'ponstan', 40000, 8),
(1036, 'cataflam', 70000, 5),
(1037, 'asam mefenamat', 4000, 15),
(1038, 'furosemide', 2000, 22),
(1039, 'captopril', 500, 41),
(1040, 'valsartan', 6000, 16),
(1041, 'spironolactone', 1500, 34),
(1042, 'amlodipine', 8000, 9),
(1043, 'bisoprolol', 1000, 20),
(1044, 'sangobion vita-tonik', 40000, 18),
(1045, 'tonikum bayer', 16500, 11),
(1046, 'iberet folic', 45000, 36),
(1047, 'hemobion strip', 30000, 40),
(1048, 'maltofer chewable strip', 21000, 22),
(1049, 'ipi vitamin a', 6000, 27),
(1050, 'blackmores vitamin a', 350000, 15),
(1051, 'swisse ultiboost zinc+', 50000, 9),
(1052, 'Glodisa Netravision', 25000, 32),
(1053, 'wellness mega b complex', 230000, 21),
(1054, 'ipi vitamin b', 6000, 18),
(1055, 'blackmores multi b perfomance', 175000, 3),
(1056, 'vitalong c', 35000, 36),
(1057, 'ipi vitamin c', 6000, 29),
(1058, 'holisticare super ester c', 69000, 7),
(1059, 'blackmores bio c', 144000, 17),
(1060, 'enervon c', 41000, 35),
(1061, 'insto regular', 17500, 13),
(1062, 'rohto eye flush', 33500, 26),
(1063, 'cendo cenfresh', 46500, 12),
(1064, 'y-rins', 22500, 5),
(1065, 'teofilin', 2500, 24),
(1066, 'ipatropium', 185000, 12),
(1067, 'steroid', 31000, 3),
(1068, 'licasma', 110000, 35),
(1069, 'canesten krim', 19000, 28),
(1070, 'fungiderm', 13500, 19),
(1071, 'salep miconazole', 8500, 15),
(1072, 'daktarin', 34000, 6),
(1073, 'kalpanax salep', 8000, 21),
(1074, 'salep 88', 16000, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `kode_obat` int(11) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `biaya_ongkir` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL,
  `metode_pembayaran` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_user`, `name`, `phone_number`, `address`, `kode_obat`, `jml_obat`, `tanggal_transaksi`, `id_pembayaran`, `biaya_ongkir`, `diskon`, `total_pembayaran`, `metode_pembayaran`, `status`) VALUES
(6, 9, 'user1', '08927456623', 'Surabaya', 1014, 4, '2023-06-11 22:45:10', 1, 5000, 0, 113000, 'cod', 'selesai'),
(9, 10, 'user2', '08927456623', 'Surabaya', 1021, 2, '2023-06-12 11:31:04', 2, 0, 0, 158000, 'cod', 'selesai'),
(12, 9, 'user1', '08927456623', 'Surabaya', 1009, 2, '2023-06-12 13:00:04', 4, 0, 0, 6000, 'cod', 'selesai'),
(13, 9, 'user1', '08927456623', 'Surabaya', 1004, 2, '2023-06-12 13:00:48', 5, 5000, 0, 14000, 'bank_transfer', 'selesai'),
(14, 10, 'user2', '08927456623', 'Surabaya', 1016, 1, '2023-06-12 13:41:10', 6, 5000, 0, 44000, 'bank_transfer', 'selesai'),
(22, 11, 'acaya fazrin', '08927456623', 'Surabaya', 1013, 3, '2023-06-12 14:34:26', 7, 0, 0, 162500, 'cod', 'selesai'),
(23, 11, 'acaya fazrin', '08927456623', 'Surabaya', 1036, 2, '2023-06-12 14:34:26', 7, 0, 0, 162500, 'cod', 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number_phone` varchar(20) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `email`, `number_phone`, `username`, `password`) VALUES
(9, '', '08954564654', 'user1', 'user1'),
(10, 'user2@gmail.com', '', 'user2', 'user2'),
(11, 'acayafazrin@gmail.com', '', 'acaya fazrin', '236');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`kode_obat`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
