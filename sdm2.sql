-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 02:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.1.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE `departemen` (
  `kode_departemen` char(4) NOT NULL,
  `nama_departemen` varchar(100) NOT NULL,
  `id_manajer` int(6) UNSIGNED DEFAULT NULL,
  `tanggal_mulai_manajer` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`kode_departemen`, `nama_departemen`, `id_manajer`, `tanggal_mulai_manajer`) VALUES
('D001', 'Sumber Daya Manusia ', 1, '2016-09-01'),
('D002', 'Keuangan', NULL, NULL),
('D003', 'Pemasaran dan Penjualan', NULL, NULL),
('D004', 'Penelitian dan Pengembangan ', 4, '2015-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(6) UNSIGNED NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('p','w') DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `gaji` int(8) UNSIGNED DEFAULT NULL,
  `supervisor` int(6) UNSIGNED DEFAULT NULL,
  `departemen` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_depan`, `nama_belakang`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `gaji`, `supervisor`, `departemen`) VALUES
(1, 'Abu', 'Bakar', '1988-11-15', 'p', NULL, NULL, NULL, 'D001'),
(2, 'Umar', 'Tsani', '1990-05-06', 'p', NULL, NULL, 4, 'D004'),
(3, 'Halimah', 'Sa\'diah', '1991-03-30', 'w', NULL, NULL, NULL, 'D004'),
(4, 'Ali', 'Akbar', '1985-01-14', 'p', NULL, NULL, NULL, 'D004'),
(5, 'Maryam', 'Mirzakhani', '1995-12-01', NULL, NULL, NULL, 1, 'D001'),
(8, 'Fauzan', 'Alviansyah', '2018-11-08', NULL, 'Wonogiri', 100000, NULL, 'D002'),
(10, 'Fauzan', 'Awanda', '2018-11-10', 'p', 'Wonogiri', 1, 4, 'D003');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departemen`
--
ALTER TABLE `departemen`
  ADD PRIMARY KEY (`kode_departemen`),
  ADD UNIQUE KEY `nama_departemen` (`nama_departemen`),
  ADD KEY `id_manajer` (`id_manajer`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `supervisor` (`supervisor`),
  ADD KEY `departemen` (`departemen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `departemen`
--
ALTER TABLE `departemen`
  ADD CONSTRAINT `departemen_ibfk_1` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `departemen_ibfk_2` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `departemen_ibfk_3` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `departemen_ibfk_4` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `departemen_ibfk_5` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `departemen_ibfk_6` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `departemen_ibfk_7` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `departemen_ibfk_8` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `departemen_ibfk_9` FOREIGN KEY (`id_manajer`) REFERENCES `pegawai` (`id_pegawai`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`supervisor`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `pegawai_ibfk_2` FOREIGN KEY (`departemen`) REFERENCES `departemen` (`kode_departemen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
