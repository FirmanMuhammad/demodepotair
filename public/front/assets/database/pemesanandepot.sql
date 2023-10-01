-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 05:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemesanandepot`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `pesanan` int(2) NOT NULL,
  `tanggal` datetime NOT NULL,
  `harga` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `nama`, `nohp`, `alamat`, `jenis`, `pesanan`, `tanggal`, `harga`) VALUES
(2, 'Wiwin windarsih', '081625141524', 'jl.Bogor Baru no.45', 'Air Isi Ulang', 2, '0000-00-00 00:00:00', 0),
(5, 'Dian Wicaksono', '081544426271', 'Jl.Mekarsari No.8 Bandung Raya', 'Ganti Galon Baru', 1, '0000-00-00 00:00:00', 0),
(7, 'Rida Nurhayati', '081625141520', 'jl.Sukacipta no.3', 'Air Isi Ulang', 2, '0000-00-00 00:00:00', 0),
(8, 'Veni Wigiyanti', '081222298876', 'Jl.Babakan Sari 2 No.8', 'Air Isi Ulang', 1, '2020-11-20 04:47:58', 0),
(10, 'Dina Mardianti', '083632763276', 'Jl.Antapani Raya No.51', 'Ganti Galon Baru', 1, '2020-12-01 08:41:05', 0),
(12, 'Daniar', '082173121', 'Jl.Mekarsari', 'Ganti Galon Baru', 2, '2020-12-16 05:56:59', 0),
(13, 'Veni Wigiyanti', '087821510547', 'Jl.Babakan Sari 2 No.8 RT 01 RW 07', 'Ganti Galon Baru', 2, '2020-12-22 07:48:07', 30000),
(14, '', '', '', 'Galon Isi Ulang', 1, '2023-08-15 10:19:09', 15000),
(15, 'Muhammad Firmanullah', '085171521905', 'Komp.TWI FWA 35 no.6', 'Galon Isi Ulang', 2, '2023-08-15 10:39:19', 30000),
(16, 'Muhammad', '085171521905', 'Komp.TWI FWA 35 no.6', 'Galon Isi Ulang', 3, '2023-08-15 10:44:48', 45000),
(17, 'Muhammad Firmanullah', '08752436234', 'Jl. Terusan Buah Batu', 'Galon Isi Ulang', 5, '2023-08-15 22:21:52', 75000);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(5) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `harga` bigint(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `nama`, `jenis`, `jumlah`, `harga`, `tanggal`) VALUES
(1, 'Veni Wigiyanti', 'Air Isi Ulang', 3, 50000, '2020-11-03'),
(2, 'Mirna Sutiarsih', 'Galon Baru', 2, 400000, '2020-11-06'),
(4, 'Esti Winarni', 'Galon Baru', 3, 13000, '2020-12-14'),
(5, 'Nia', 'Galon Baru', 1, 12000, '2020-12-26'),
(6, 'Rina', 'Galon Baru', 12, 11000, '2021-05-14'),
(7, 'Wiwin windarsih', 'Galon Baru', 4, 50000, '2021-06-03');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `username` varchar(30) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` int(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`username`, `namalengkap`, `email`, `nohp`, `password`) VALUES
('firman12', 'Muhammad Firman', 'firmanullohmuhammad', 87532526, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `nohp`, `alamat`, `password`) VALUES
(7, 'Rudi Ardiansyah', 'rudi43@gmail.com', '081238298876', 'Jl.Supratman Bandung', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `id` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`id`, `username`, `password`) VALUES
(1, 'veniwg', '$2y$10$9XzaX/nEEGDcvpQKjS2V1Ool2aLYIMB.xg38B9NxD9SWp4aFXOVvu'),
(2, 'vitodsp', '$2y$10$7EsIJ60D6H2Os7lPEKG4EeZofNEoVo4lDHqoJXAnhQVjfRvgDLoDe'),
(4, 'veniwigiyanti', '$2y$10$j5TUUSFKnSdYVuTXIghkHuJMpgUQWFE9JYBRAaDxSTKD/d3R7/i1q');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Murahsenyum', 'murahsenyum@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `useradmin`
--
ALTER TABLE `useradmin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
