-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jun 2018 pada 04.35
-- Versi Server: 10.1.22-MariaDB
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
-- Struktur dari tabel `daftar_barang`
--

CREATE TABLE `daftar_barang` (
  `id_barang` int(10) NOT NULL,
  `nama_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar_barang`
--

INSERT INTO `daftar_barang` (`id_barang`, `nama_barang`) VALUES
(1, 'BantalTidur'),
(2, 'BantalCinta'),
(3, 'KasurQuilting'),
(4, 'KasurBusa1lbr'),
(5, 'Kasur Busa 1/2 lbr'),
(6, 'Baby Seet'),
(7, 'BantalCinta Mika'),
(8, 'Guling'),
(9, 'BantalAnak'),
(10, 'BantalPeang'),
(11, 'BantalKursi'),
(12, 'Seprei'),
(13, 'SarungBantal'),
(14, 'SarungGuling'),
(15, 'SarungBantal Cinta'),
(16, 'Sarung BantalImut'),
(17, 'Sarung BantalKursi'),
(18, 'BantalPolos'),
(19, 'Taplak meja'),
(20, 'Mika'),
(21, 'Jok Kursi'),
(22, 'Rel Korden'),
(23, 'Tutup kulkas'),
(24, 'BantalBayi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `id_barang` int(10) NOT NULL,
  `id_trnsksi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
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
(59, 18, 21),
(60, 11, 27),
(61, 19, 27),
(62, 20, 27),
(63, 21, 27),
(64, 11, 28),
(65, 22, 28),
(66, 1, 28),
(67, 8, 28),
(68, 1, 29),
(69, 8, 29),
(70, 1, 30),
(71, 8, 30),
(72, 2, 30),
(73, 1, 31),
(74, 8, 31),
(75, 11, 31),
(76, 2, 33),
(77, 1, 33),
(78, 8, 33),
(79, 11, 34),
(80, 1, 34),
(81, 13, 34),
(82, 17, 35),
(83, 11, 35),
(84, 11, 36),
(85, 17, 36),
(86, 19, 36),
(87, 21, 36),
(88, 23, 37),
(89, 19, 37),
(90, 20, 37),
(91, 24, 39),
(92, 10, 39),
(93, 2, 39),
(94, 24, 40),
(95, 16, 40),
(96, 1, 41),
(97, 8, 41),
(98, 4, 42),
(99, 5, 42),
(100, 12, 44),
(101, 1, 44),
(102, 2, 44),
(103, 13, 45),
(104, 18, 45),
(105, 12, 45),
(106, 1, 60),
(107, 8, 60),
(108, 1, 61),
(109, 8, 61),
(110, 7, 61),
(111, 1, 62),
(112, 8, 62),
(113, 1, 63),
(114, 8, 63),
(115, 3, 63),
(116, 7, 64),
(117, 2, 64),
(118, 1, 65),
(119, 8, 65),
(120, 1, 66),
(121, 8, 66),
(122, 14, 67),
(123, 13, 67),
(124, 4, 67),
(125, 3, 67);

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
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `daftar_barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
