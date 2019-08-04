-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2018 at 12:46 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transaksi_apriori`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_barang`
--

INSERT INTO `daftar_barang` (`id_barang`, `nama_barang`) VALUES
(1, 'BantalTidur'),
(2, 'BantalCinta'),
(3, 'KasurQuilting'),
(4, 'KasurBusa1lbr'),
(5, 'Kasur Busa 1/2 lbr'),
(6, 'Baby Seet'),
(7, 'Bantal Cinta Mika'),
(8, 'Guling'),
(9, 'Bantal Anak'),
(10, 'Bantal Peang'),
(11, 'Bantal Kursi'),
(12, 'Seprei'),
(13, 'SarungBantal'),
(14, 'Sarung Guling'),
(15, 'Sarung Bantal Cinta'),
(16, 'Sarung BantalImut'),
(17, 'Sarung BantalKursi'),
(18, 'Bantal Polos');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_trnsksi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_barang`, `id_trnsksi`) VALUES
(1, 1, 1),
(2, 2, 1),
(4, 9, 2),
(5, 10, 2),
(6, 3, 3),
(7, 4, 3),
(8, 5, 3),
(9, 7, 4),
(10, 1, 4),
(11, 8, 4),
(12, 9, 5),
(13, 10, 5),
(14, 16, 5),
(15, 11, 6),
(16, 12, 6),
(17, 13, 7),
(18, 14, 7),
(19, 15, 8),
(20, 16, 8),
(21, 18, 8),
(22, 18, 9),
(23, 2, 9),
(24, 1, 10),
(25, 8, 10),
(26, 9, 10),
(27, 12, 10),
(28, 8, 11),
(29, 2, 11),
(30, 8, 12),
(31, 14, 12),
(32, 12, 12),
(33, 7, 13),
(34, 1, 13),
(35, 8, 13),
(36, 6, 14),
(37, 8, 14),
(38, 12, 14),
(39, 15, 15),
(40, 14, 15),
(41, 16, 15),
(42, 1, 16),
(43, 15, 16),
(44, 11, 16),
(45, 2, 17),
(46, 8, 17),
(47, 7, 18),
(48, 1, 18),
(49, 8, 18),
(53, 7, 19),
(54, 15, 19),
(55, 4, 20),
(56, 12, 20),
(57, 16, 20),
(58, 12, 21),
(59, 18, 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar_barang`
--
ALTER TABLE `daftar_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `daftar_barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
