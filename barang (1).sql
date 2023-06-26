-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 04:16 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbarang`
--

CREATE TABLE `tbbarang` (
  `id_alat` int(10) NOT NULL,
  `no_inv` int(10) NOT NULL,
  `nama_alat` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `kondisi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbbarang`
--

INSERT INTO `tbbarang` (`id_alat`, `no_inv`, `nama_alat`, `jumlah`, `kondisi`, `gambar`) VALUES
(6, 3, 'Meteran', '2', 'baru', '6486eb3d5042c.jpg'),
(7, 4, 'palu', '5', 'baik', '6486ec95b9ee0.jpg'),
(8, 5, 'Kapak', '9', 'baik', '6487259e96d48.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbpeminjam`
--

CREATE TABLE `tbpeminjam` (
  `id_peminjam` int(10) NOT NULL,
  `nama_peminjam` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kebutuhan` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbarang`
--
ALTER TABLE `tbbarang`
  ADD PRIMARY KEY (`id_alat`);

--
-- Indexes for table `tbpeminjam`
--
ALTER TABLE `tbpeminjam`
  ADD PRIMARY KEY (`id_peminjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbarang`
--
ALTER TABLE `tbbarang`
  MODIFY `id_alat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbpeminjam`
--
ALTER TABLE `tbpeminjam`
  MODIFY `id_peminjam` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
