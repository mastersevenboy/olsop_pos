-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 03:48 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ameng`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `barang_id` varchar(15) NOT NULL,
  `barang_nama` varchar(150) DEFAULT NULL,
  `barang_satuan` varchar(30) DEFAULT NULL,
  `barang_harpok` double DEFAULT NULL,
  `barang_harjul` double DEFAULT NULL,
  `barang_harjul_grosir` double DEFAULT NULL,
  `barang_stok` int(11) DEFAULT '0',
  `barang_min_stok` int(11) DEFAULT '0',
  `barang_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `barang_tgl_last_update` datetime DEFAULT NULL,
  `barang_kategori_id` int(11) DEFAULT NULL,
  `barang_user_id` int(11) DEFAULT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`barang_id`, `barang_nama`, `barang_satuan`, `barang_harpok`, `barang_harjul`, `barang_harjul_grosir`, `barang_stok`, `barang_min_stok`, `barang_tgl_input`, `barang_tgl_last_update`, `barang_kategori_id`, `barang_user_id`, `foto`) VALUES
('BR000001', 'fur', 'Kilogram', 6600, 10000, 8000, 23, 1, '2020-01-06 12:40:03', '2020-03-26 20:05:06', 2, 1, '20200326_140505.png'),
('BR000002', 'tikus putih', 'PCS', 3500, 5000, 4000, 44, 1, '2020-03-26 08:53:06', '2020-03-26 20:09:10', 4, 1, '20200326_095303.png'),
('BR000004', 'merang', 'Kilogram', 5000, 6000, 5500, 45, 1, '2020-03-26 08:54:56', NULL, 2, 1, '20200326_095454.png'),
('BR000005', 'baskom', 'PCS', 10000, 15000, 12500, 2, 1, '2020-03-26 12:58:33', '2020-03-26 20:03:42', 3, 1, '20200326_140341.png'),
('BR000006', 'tikus coklat', 'PCS', 5000, 6500, 6000, 37, 1, '2020-03-26 13:08:54', NULL, 4, 1, '20200326_140851.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_beli`
--

CREATE TABLE `tbl_beli` (
  `beli_nofak` varchar(15) DEFAULT NULL,
  `beli_tanggal` date DEFAULT NULL,
  `beli_suplier_id` int(11) DEFAULT NULL,
  `beli_user_id` int(11) DEFAULT NULL,
  `beli_kode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_beli`
--

INSERT INTO `tbl_beli` (`beli_nofak`, `beli_tanggal`, `beli_suplier_id`, `beli_user_id`, `beli_kode`) VALUES
('00001', '2020-01-06', 1, 1, 'BL060120000001'),
('00001', '2020-03-08', 1, 1, 'BL080320000001'),
('00002', '2020-03-12', 1, 1, 'BL120320000001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_costumer`
--

CREATE TABLE `tbl_costumer` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `kd_pos` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_costumer`
--

INSERT INTO `tbl_costumer` (`username`, `nama`, `alamat`, `no_hp`, `password`, `kd_pos`, `email`, `status`, `created_at`, `level`) VALUES
('anisa', 'bagas candra permana', 'jatilawang', '083213156211', '843d337108bb6dc183263a38a72a7d85', '54221', 'bawor@gmail.com', 1, '2020-04-25 04:34:54', '3'),
('niarpuas', 'Yuniar Ode', 'mersi rt 03/05', '08267778161', '843d337108bb6dc183263a38a72a7d85', '53321', 'puastriawan@gmail.com', 1, '2020-04-25 04:35:01', '3'),
('puasniar', 'Puas Triawan', 'kemutug lor rt 02/03', '0873635322', '843d337108bb6dc183263a38a72a7d85', '53151', 'puastriawan@gmail.com', 1, '2020-04-25 04:35:07', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_beli`
--

CREATE TABLE `tbl_detail_beli` (
  `d_beli_id` int(11) NOT NULL,
  `d_beli_nofak` varchar(15) DEFAULT NULL,
  `d_beli_barang_id` varchar(15) DEFAULT NULL,
  `d_beli_harga` double DEFAULT NULL,
  `d_beli_jumlah` int(11) DEFAULT NULL,
  `d_beli_total` double DEFAULT NULL,
  `d_beli_kode` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_beli`
--

INSERT INTO `tbl_detail_beli` (`d_beli_id`, `d_beli_nofak`, `d_beli_barang_id`, `d_beli_harga`, `d_beli_jumlah`, `d_beli_total`, `d_beli_kode`) VALUES
(1, '00001', 'BR000001', 5700, 5, 28500, 'BL060120000001'),
(2, '00001', 'BR000001', 5700, 2, 11400, 'BL080320000001'),
(3, '00002', 'BR000001', 6600, 6, 39600, 'BL120320000001');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_jual`
--

CREATE TABLE `tbl_detail_jual` (
  `d_jual_id` int(11) NOT NULL,
  `d_jual_nofak` varchar(15) DEFAULT NULL,
  `d_jual_barang_id` varchar(15) DEFAULT NULL,
  `d_jual_barang_nama` varchar(150) DEFAULT NULL,
  `d_jual_barang_satuan` varchar(30) DEFAULT NULL,
  `d_jual_barang_harpok` double DEFAULT NULL,
  `d_jual_barang_harjul` double DEFAULT NULL,
  `d_jual_qty` int(11) DEFAULT NULL,
  `d_jual_diskon` double DEFAULT NULL,
  `d_jual_total` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_jual`
--

INSERT INTO `tbl_detail_jual` (`d_jual_id`, `d_jual_nofak`, `d_jual_barang_id`, `d_jual_barang_nama`, `d_jual_barang_satuan`, `d_jual_barang_harpok`, `d_jual_barang_harjul`, `d_jual_qty`, `d_jual_diskon`, `d_jual_total`) VALUES
(3, '250420000001', 'BR000001', 'fur', 'Kilogram', 6600, 10000, 1, 0, 10000),
(4, '290420000001', 'BR000001', 'fur', 'Kilogram', 6600, 10000, 2, 0, 20000),
(5, '290420000002', 'BR000006', 'tikus coklat', 'PCS', 5000, 6500, 2, 0, 13000),
(6, '290420000003', 'BR000006', 'tikus coklat', 'PCS', 5000, 6500, 1, 0, 6500),
(7, '290420000004', 'BR000002', 'tikus putih', 'PCS', 3500, 5000, 2, 0, 10000),
(8, '290420000005', 'BR000006', 'tikus coklat', 'PCS', 5000, 6500, 1, 0, 6500),
(9, '290420000006', 'BR000004', 'merang', 'Kilogram', 5000, 6000, 2, 0, 12000),
(10, '290420000007', 'BR000006', 'tikus coklat', 'PCS', 5000, 6500, 5, 0, 32500),
(11, '300420000001', 'BR000005', 'baskom', 'PCS', 10000, 15000, 3, 0, 45000),
(12, '300420000001', 'BR000002', 'tikus putih', 'PCS', 3500, 5000, 2, 0, 10000),
(13, '300420000002', 'BR000005', 'baskom', 'PCS', 10000, 15000, 2, 0, 30000),
(14, '300420000002', 'BR000002', 'tikus putih', 'PCS', 3500, 5000, 1, 0, 5000),
(15, '300420000004', 'BR000005', 'baskom', 'PCS', 10000, 15000, 1, 0, 15000),
(16, '020520000001', 'BR000002', 'tikus putih', 'PCS', 3500, 5000, 1, 0, 5000),
(17, '030520000001', 'BR000005', 'baskom', 'PCS', 10000, 15000, 1, 0, 15000),
(18, '030520000002', 'BR000005', 'baskom', 'PCS', 10000, 15000, 1, 0, 15000),
(19, '030520000003', 'BR000006', 'tikus coklat', 'PCS', 5000, 6500, 2, 0, 13000),
(20, '030520000004', 'BR000006', 'tikus coklat', 'PCS', 5000, 6500, 2, 0, 13000),
(21, '030520000005', 'BR000004', 'merang', 'Kilogram', 5000, 6000, 3, 0, 18000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jual`
--

CREATE TABLE `tbl_jual` (
  `jual_nofak` varchar(15) NOT NULL,
  `jual_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `jual_total` double DEFAULT NULL,
  `jual_jml_uang` double DEFAULT NULL,
  `jual_kembalian` double DEFAULT NULL,
  `jual_user_id` int(11) DEFAULT NULL,
  `jual_keterangan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jual`
--

INSERT INTO `tbl_jual` (`jual_nofak`, `jual_tanggal`, `jual_total`, `jual_jml_uang`, `jual_kembalian`, `jual_user_id`, `jual_keterangan`) VALUES
('020520000001', '2020-05-02 12:01:16', 5000, NULL, NULL, NULL, 'eceran'),
('030520000001', '2020-05-03 03:30:27', 15000, NULL, NULL, NULL, 'eceran'),
('030520000002', '2020-05-03 06:10:56', 15000, NULL, NULL, NULL, 'eceran'),
('030520000003', '2020-05-03 09:43:21', 13000, NULL, NULL, NULL, 'eceran'),
('030520000004', '2020-05-03 13:27:58', 13000, NULL, NULL, NULL, 'eceran'),
('030520000005', '2020-05-03 16:54:13', 18000, NULL, NULL, NULL, 'eceran'),
('090320000001', '2020-03-09 01:18:59', 60000, 100000, 40000, 1, 'eceran'),
('170320000001', '2020-03-17 00:24:18', 10000, 20000, 10000, 1, 'eceran'),
('170320000002', '2020-03-17 00:29:48', 10000, 20000, 10000, 1, 'eceran'),
('170320000003', '2020-03-17 00:30:50', 10000, 20000, 10000, 1, 'eceran'),
('170320000004', '2020-03-17 00:32:14', 10000, 20000, 10000, 1, 'eceran'),
('170320000005', '2020-03-17 00:33:15', 10000, 20000, 10000, 1, 'eceran'),
('170320000006', '2020-03-17 00:33:47', 10000, 20000, 10000, 1, 'eceran'),
('170320000007', '2020-03-17 00:35:55', 10000, 20000, 10000, 1, 'eceran'),
('170320000008', '2020-03-17 00:38:46', 10000, 20000, 10000, 1, 'eceran'),
('190320000001', '2020-03-19 07:09:06', 6500, 20000, 13500, 1, 'grosir'),
('210919000001', '2019-09-21 03:29:22', 10000, 20000, 10000, 1, 'grosir'),
('240117000001', '2017-01-24 15:07:07', 10000, 20000, 10000, 1, 'eceran'),
('240117000002', '2017-01-24 15:07:26', 10000, 20000, 10000, 1, 'eceran'),
('241116000001', '2016-11-24 17:42:06', 20000, 20000, 0, 1, 'eceran'),
('241116000002', '2016-11-24 17:49:58', 20000, 20000, 0, 1, 'eceran'),
('241116000003', '2016-11-24 17:55:48', 22000, 22000, 0, 1, 'eceran'),
('241116000004', '2016-11-24 17:59:38', 10000, 10000, 0, 1, 'eceran'),
('241116000005', '2016-11-24 18:21:24', 5000, 20000, 15000, 1, 'eceran'),
('241116000006', '2016-11-24 18:27:01', 6000, 7000, 1000, 1, 'eceran'),
('241116000007', '2016-11-24 18:29:43', 8000, 10000, 2000, 1, 'eceran'),
('241116000008', '2016-11-24 18:32:01', 13000, 15000, 2000, 1, 'eceran'),
('241116000009', '2016-11-24 19:47:50', 6000, 7000, 1000, 1, 'grosir'),
('250420000001', '2020-04-25 04:11:16', 10000, 20000, 10000, 1, 'eceran'),
('250420000002', '2020-04-25 04:16:02', 10000, 20000, 10000, 1, 'eceran'),
('250420000003', '2020-04-25 04:21:47', 10000, 20000, 10000, 1, 'eceran'),
('251116000001', '2016-11-25 22:07:15', 19000, 60000, 41000, 1, 'eceran'),
('271219000001', '2019-12-27 06:23:49', 70000, 100000, 30000, 1, 'eceran'),
('271219000002', '2019-12-27 06:25:03', 75000, 100000, 25000, 1, 'eceran'),
('271219000003', '2019-12-27 07:03:50', 12000, 20000, 8000, 1, 'eceran'),
('290317000001', '2017-03-29 13:35:49', 22000, 56000, 34000, 1, 'eceran'),
('290420000001', '2020-04-29 10:35:17', 20000, NULL, NULL, NULL, 'eceran'),
('290420000002', '2020-04-29 11:14:09', 13000, NULL, NULL, NULL, 'eceran'),
('290420000003', '2020-04-29 11:18:18', 6500, NULL, NULL, NULL, 'eceran'),
('290420000004', '2020-04-29 11:19:06', 10000, NULL, NULL, NULL, 'eceran'),
('290420000005', '2020-04-29 11:26:13', 6500, NULL, NULL, NULL, 'eceran'),
('290420000006', '2020-04-29 11:31:52', 12000, NULL, NULL, NULL, 'eceran'),
('290420000007', '2020-04-29 13:21:07', 32500, NULL, NULL, NULL, 'eceran'),
('291116000001', '2016-11-29 19:11:48', 105000, 120000, 15000, 1, 'eceran'),
('291116000002', '2016-11-29 19:49:20', 68000, 70000, 2000, 1, 'eceran'),
('291116000003', '2016-11-29 19:57:17', 8000, 10000, 2000, 1, 'eceran'),
('291116000004', '2016-11-29 19:58:35', 10000, 12000, 2000, 1, 'eceran'),
('291116000005', '2016-11-29 22:10:10', 10000, 10000, 0, 1, 'eceran'),
('291116000006', '2016-11-29 22:23:40', 29000, 30000, 1000, 1, 'eceran'),
('291116000007', '2016-11-29 22:41:08', 9000, 10000, 1000, 2, 'eceran'),
('300420000001', '2020-04-30 06:56:08', 55000, NULL, NULL, NULL, 'eceran'),
('300420000002', '2020-04-30 07:13:10', 35000, NULL, NULL, NULL, 'eceran'),
('300420000003', '2020-04-30 07:36:03', 0, NULL, NULL, NULL, 'eceran'),
('300420000004', '2020-04-30 08:12:21', 15000, NULL, NULL, NULL, 'eceran'),
('300919000001', '2019-09-30 08:37:47', 20000, 20000, 0, 1, 'eceran');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`) VALUES
(1, 'alat'),
(2, 'pakan'),
(3, 'kandang'),
(4, 'mencit'),
(5, 'tikus');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_retur`
--

CREATE TABLE `tbl_retur` (
  `retur_id` int(11) NOT NULL,
  `retur_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `retur_barang_id` varchar(15) DEFAULT NULL,
  `retur_barang_nama` varchar(150) DEFAULT NULL,
  `retur_barang_satuan` varchar(30) DEFAULT NULL,
  `retur_harjul` double DEFAULT NULL,
  `retur_qty` int(11) DEFAULT NULL,
  `retur_subtotal` double DEFAULT NULL,
  `retur_keterangan` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suplier`
--

CREATE TABLE `tbl_suplier` (
  `suplier_id` int(11) NOT NULL,
  `suplier_nama` varchar(35) DEFAULT NULL,
  `suplier_alamat` varchar(60) DEFAULT NULL,
  `suplier_notelp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_suplier`
--

INSERT INTO `tbl_suplier` (`suplier_id`, `suplier_nama`, `suplier_alamat`, `suplier_notelp`) VALUES
(1, 'PT DIRGANTARA', 'JAKARTA N0.12', '08828828111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_nama` varchar(35) DEFAULT NULL,
  `user_username` varchar(30) DEFAULT NULL,
  `user_password` varchar(35) DEFAULT NULL,
  `user_level` varchar(2) DEFAULT NULL,
  `user_status` varchar(2) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_nama`, `user_username`, `user_password`, `user_level`, `user_status`) VALUES
(1, 'Amelia', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '1'),
(2, 'Anjar', 'kasir', '21232f297a57a5a743894a0e4a801fc3', '2', '1'),
(3, 'Putri', 'kasir', 'c7911af3adbd12a035b289556d96470a', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `id` int(15) NOT NULL,
  `k_username` varchar(20) NOT NULL,
  `k_jual_nofak` varchar(15) NOT NULL,
  `ft_bukti_bayar` varchar(100) NOT NULL,
  `status_bayar` varchar(5) NOT NULL,
  `status_pengiriman` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`id`, `k_username`, `k_jual_nofak`, `ft_bukti_bayar`, `status_bayar`, `status_pengiriman`, `created_at`) VALUES
(14, 'anisa', '030520000005', 'kwintasi.jpeg', '1', 2, '2020-05-04 01:33:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`barang_id`),
  ADD KEY `barang_user_id` (`barang_user_id`),
  ADD KEY `barang_kategori_id` (`barang_kategori_id`);

--
-- Indexes for table `tbl_beli`
--
ALTER TABLE `tbl_beli`
  ADD PRIMARY KEY (`beli_kode`),
  ADD KEY `beli_user_id` (`beli_user_id`),
  ADD KEY `beli_suplier_id` (`beli_suplier_id`),
  ADD KEY `beli_id` (`beli_kode`);

--
-- Indexes for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `tbl_detail_beli`
--
ALTER TABLE `tbl_detail_beli`
  ADD PRIMARY KEY (`d_beli_id`),
  ADD KEY `d_beli_barang_id` (`d_beli_barang_id`),
  ADD KEY `d_beli_nofak` (`d_beli_nofak`),
  ADD KEY `d_beli_kode` (`d_beli_kode`);

--
-- Indexes for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  ADD PRIMARY KEY (`d_jual_id`),
  ADD KEY `d_jual_barang_id` (`d_jual_barang_id`),
  ADD KEY `d_jual_nofak` (`d_jual_nofak`);

--
-- Indexes for table `tbl_jual`
--
ALTER TABLE `tbl_jual`
  ADD PRIMARY KEY (`jual_nofak`),
  ADD KEY `jual_user_id` (`jual_user_id`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `tbl_retur`
--
ALTER TABLE `tbl_retur`
  ADD PRIMARY KEY (`retur_id`);

--
-- Indexes for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  ADD PRIMARY KEY (`suplier_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`k_username`),
  ADD KEY `barang_id` (`k_jual_nofak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_detail_beli`
--
ALTER TABLE `tbl_detail_beli`
  MODIFY `d_beli_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  MODIFY `d_jual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_retur`
--
ALTER TABLE `tbl_retur`
  MODIFY `retur_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  MODIFY `suplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD CONSTRAINT `tbl_barang_ibfk_1` FOREIGN KEY (`barang_user_id`) REFERENCES `tbl_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_barang_ibfk_2` FOREIGN KEY (`barang_kategori_id`) REFERENCES `tbl_kategori` (`kategori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_beli`
--
ALTER TABLE `tbl_beli`
  ADD CONSTRAINT `tbl_beli_ibfk_1` FOREIGN KEY (`beli_user_id`) REFERENCES `tbl_user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_beli_ibfk_2` FOREIGN KEY (`beli_suplier_id`) REFERENCES `tbl_suplier` (`suplier_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail_beli`
--
ALTER TABLE `tbl_detail_beli`
  ADD CONSTRAINT `tbl_detail_beli_ibfk_1` FOREIGN KEY (`d_beli_barang_id`) REFERENCES `tbl_barang` (`barang_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_detail_beli_ibfk_2` FOREIGN KEY (`d_beli_kode`) REFERENCES `tbl_beli` (`beli_kode`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_detail_jual`
--
ALTER TABLE `tbl_detail_jual`
  ADD CONSTRAINT `tbl_detail_jual_ibfk_1` FOREIGN KEY (`d_jual_barang_id`) REFERENCES `tbl_barang` (`barang_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_detail_jual_ibfk_2` FOREIGN KEY (`d_jual_nofak`) REFERENCES `tbl_jual` (`jual_nofak`) ON UPDATE CASCADE;

--
-- Constraints for table `tbl_jual`
--
ALTER TABLE `tbl_jual`
  ADD CONSTRAINT `tbl_jual_ibfk_1` FOREIGN KEY (`jual_user_id`) REFERENCES `tbl_user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `tb_keranjang_ibfk_2` FOREIGN KEY (`k_username`) REFERENCES `tbl_costumer` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
