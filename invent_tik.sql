-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2019 at 11:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invent_tik`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_brg` int(5) NOT NULL,
  `nama_brg` varchar(35) DEFAULT NULL,
  `merk_brg` varchar(25) DEFAULT NULL,
  `id_tipe` int(5) DEFAULT NULL,
  `versi_brg` varchar(30) DEFAULT NULL,
  `SN` varchar(35) DEFAULT NULL,
  `umur_brg` varchar(15) DEFAULT NULL,
  `kondisi_brg` enum('--','Bagus','Rusak') NOT NULL DEFAULT '--',
  `lokasi_brg` varchar(35) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `foto_brg` varchar(50) DEFAULT NULL,
  `ket` text DEFAULT '--'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_brg`, `nama_brg`, `merk_brg`, `id_tipe`, `versi_brg`, `SN`, `umur_brg`, `kondisi_brg`, `lokasi_brg`, `tanggal_masuk`, `foto_brg`, `ket`) VALUES
(20, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00001', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(21, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00002', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(22, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00003', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(23, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00004', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(24, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00005', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(25, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00006', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(26, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00007', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(27, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00008', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(28, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00009', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(29, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00010', '-', 'Bagus', '-', '2018-10-27', '', '--'),
(30, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '2018100150001.00011', '-', 'Bagus', '-', '2018-10-27', '', '--');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_brg`
--

CREATE TABLE `kategori_brg` (
  `id_tipe` int(5) NOT NULL,
  `nama_tipe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_brg`
--

INSERT INTO `kategori_brg` (`id_tipe`, `nama_tipe`) VALUES
(25, 'Komputer'),
(26, 'Jaringan'),
(27, 'Elektronik'),
(28, 'Alat Kantor'),
(29, 'Alat Rumah Tangga Lainnya'),
(30, 'Microphone/Wireless MIC'),
(31, 'UPS'),
(32, 'Lensa Filter'),
(33, 'Camera Conference'),
(34, 'Mini Komputer'),
(35, 'PC Workstation'),
(36, 'PC Unit'),
(37, 'Laptop'),
(38, 'CPU (Peralatan Personal Komput'),
(39, 'Monitor'),
(40, 'Printer'),
(41, 'Server'),
(42, 'Router'),
(43, 'Rak Server'),
(44, 'Televisi');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_master`
--

CREATE TABLE `tabel_master` (
  `id_master` int(5) NOT NULL,
  `nama_master` varchar(35) DEFAULT NULL,
  `merk_master` varchar(30) DEFAULT NULL,
  `id_tipe` int(5) DEFAULT NULL,
  `versi_master` varchar(25) DEFAULT NULL,
  `umur_master` varchar(15) DEFAULT NULL,
  `foto_master` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_master`
--

INSERT INTO `tabel_master` (`id_master`, `nama_master`, `merk_master`, `id_tipe`, `versi_master`, `umur_master`, `foto_master`) VALUES
(21, 'P.C Unit DELL TIK', 'SHAFIRA BERKAH ABADI', 25, 'v', '-', NULL),
(22, 'Harddisk Server', 'PT. SIDOLA', 26, 'v', '-', NULL),
(23, 'Rack Server', 'PT. SIDOLA', 26, 'v', '-', NULL),
(24, 'Server', 'CV. Solusi Arya Prima', 27, 'v', '-', NULL),
(25, 'Server HP PROLIANT DL380G9', 'Bhineka.com', 26, 'v', '-', NULL),
(26, 'DELL server PE R730', 'PT. AIRMAS BERKATINDO TEKNOLOG', 26, 'v', '-', NULL),
(27, 'Server', 'PT. AIRMAS BERKATINDO TEKNOLOG', 26, 'v', '-', NULL),
(28, 'Server', 'GERAKAN BERBANGSA INDONESIA', 26, 'v', '-', NULL),
(29, 'Server', 'PT. ENGGAL BERSAUDARA JAYA', 26, 'v', '-', NULL),
(30, 'Laptop ASUS VIVO BOOK S14', 'BERKAH BERSAMA', 27, 'v', '-', NULL),
(31, 'Laptop LENOVO IDEPAD', 'BERKAH BERSAMA', 27, 'v', '-', NULL),
(32, 'Monitor LG TIK', 'SHAFIRA BERKAH ABADI', 27, 'v', '-', NULL),
(33, 'Tool Kit Box', '', 28, 'v', '-', NULL),
(34, 'Finger Print', '', 28, 'v', '-', NULL),
(35, 'Solution Barcode Scanner', '', 28, 'v', '-', NULL),
(36, 'Optical Power Meter', '', 44, 'v', '-', NULL),
(37, 'Standing Bracket', '', 29, 'v', '-', NULL),
(38, 'Mic Conference BOSCH ULTRO', '', 30, 'v', '-', NULL),
(39, 'APC SMART UPS SRT 10000KVA', '', 31, 'v', '-', NULL),
(40, 'Seymous Solar Filter', '', 32, 'v', '-', NULL),
(41, 'LOGITEC C525 HD', '', 33, 'v', '-', NULL),
(42, 'Kamera Telekonferensi Logitech BCC9', '', 33, 'v', '-', NULL),
(43, 'APC SMART UPS SRT 10KVA', '', 31, 'v', '-', NULL),
(44, 'APC SMART UPS 3000VA', '', 31, 'v', '-', NULL),
(45, 'Rashberry PI', '', 34, 'v', '-', NULL),
(46, 'Workstation HP Z2 Mini G3', '', 35, 'v', '-', NULL),
(47, 'ASUS WORKSTATION', '', 35, 'v', '-', NULL),
(49, 'DELL Inspiron 3252', '', 36, 'v', '-', NULL),
(50, 'Lenovo V310-14isk', '', 37, 'v', '-', NULL),
(51, 'CPU STANDAR', '', 38, 'v', '-', NULL),
(52, 'LG Touchscreen', '', 39, 'v', '-', NULL),
(53, 'LED Monitor LG', '', 39, 'v', '-', NULL),
(54, 'Epson L365 Print Scan Copy', '', 40, 'v', '-', NULL),
(55, 'Epson Printer (L485)', '', 40, 'v', '-', NULL),
(56, 'HP PROLIANT DL380G9-682', '', 41, 'v', '-', NULL),
(57, 'HP Proliant DL20G9-25A', '', 41, 'v', '-', NULL),
(58, 'DELL SERVER PE R730', '', 41, 'v', '-', NULL),
(59, 'Cisco ASA 5555-X', '', 42, 'v', '-', NULL),
(60, 'CCR1072-1G-8S+', '', 42, 'v', '-', NULL),
(61, 'MIKROTIK CCR1036', '', 42, 'v', '-', NULL),
(62, 'Rack Server FORTUNA 19\" Close Rack ', '', 43, 'v', '-', NULL),
(63, 'Rack Server FORTUNA Rack Server 9U ', '', 43, 'v', '-', NULL),
(64, 'Wallmount Rack 9U', '', 43, 'v', '-', NULL),
(67, 'tes', 'tes', 25, 'tes', 'tes', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `pass_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email_user`, `pass_user`) VALUES
(1, 'Administrator', 'admin@admin', '7001f92347ea212c16d1999298220b9b8796e7fd9c8b6a62ea00651454817d9f45b5d1514651cdec5f9399e924038f5956fb321ec0e522b4b20e0c850196deb1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`),
  ADD KEY `id_tipe` (`id_tipe`);

--
-- Indexes for table `kategori_brg`
--
ALTER TABLE `kategori_brg`
  ADD PRIMARY KEY (`id_tipe`);

--
-- Indexes for table `tabel_master`
--
ALTER TABLE `tabel_master`
  ADD PRIMARY KEY (`id_master`),
  ADD KEY `tabel_master_ibfk_1` (`id_tipe`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_brg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kategori_brg`
--
ALTER TABLE `kategori_brg`
  MODIFY `id_tipe` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tabel_master`
--
ALTER TABLE `tabel_master`
  MODIFY `id_master` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `kategori_brg` (`id_tipe`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `tabel_master`
--
ALTER TABLE `tabel_master`
  ADD CONSTRAINT `tabel_master_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `kategori_brg` (`id_tipe`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
