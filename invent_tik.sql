-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 10:43 AM
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
  `id_tipe` int(5) NOT NULL,
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
(15, 'PC 2', 'ASUS', 23, 'V1', '123456789', '34 Bulan', 'Bagus', 'GKU Lantai 3', '2019-08-08', '23.jpg', '--'),
(16, 'PC 2', 'ASUS', 23, 'V1', '123345456', '34 Bulan', 'Bagus', 'GKU Lantai 3', '2019-08-08', '23.jpg', '--'),
(17, 'Kursi', 'Futura', 1, 'V1', '123456', '36 Bulan', 'Bagus', 'GKU Lantai 3', '2019-08-12', 'Kursi-Lipat1.jpg', '--'),
(18, 'Kursi', 'Futura', 1, 'V1', '123456', '36 Bulan', 'Bagus', 'GKU Lantai 3', '2019-08-12', 'Kursi-Lipat1.jpg', '--');

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
(1, 'Furniture'),
(23, 'Elektronik');

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
(18, 'PC 2', 'ASUS', 23, 'V1', '34', '23.jpg'),
(19, 'Kursi', 'Futura', 1, 'V1', '36', 'Kursi-Lipat1.jpg');

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
(1, 'Admin', 'admin@tik.itera.ac.id', '7001f92347ea212c16d1999298220b9b8796e7fd9c8b6a62ea00651454817d9f45b5d1514651cdec5f9399e924038f5956fb321ec0e522b4b20e0c850196deb1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_brg`),
  ADD KEY `barang_ibfk_1` (`id_tipe`);

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
  ADD KEY `id_tipe` (`id_tipe`);

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
  MODIFY `id_brg` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori_brg`
--
ALTER TABLE `kategori_brg`
  MODIFY `id_tipe` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tabel_master`
--
ALTER TABLE `tabel_master`
  MODIFY `id_master` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `kategori_brg` (`id_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tabel_master`
--
ALTER TABLE `tabel_master`
  ADD CONSTRAINT `tabel_master_ibfk_1` FOREIGN KEY (`id_tipe`) REFERENCES `kategori_brg` (`id_tipe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
