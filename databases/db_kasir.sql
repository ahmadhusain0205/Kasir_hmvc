-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 04:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`, `alamat`, `no_telp`) VALUES
(1, 'adminLTE', '32e30aee6db3a42391e1891adc6dd5b9d4b0066f', 'Ahmad Husain 0205', 'Paremono', '0895363260970'),
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Ahmad Husain', 'Magelang', '089121448712'),
(4, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 'Borobudur', '1234567890'),
(5, 'admin1', 'bd11ad6c0b8ff5de0cc1780b708cd1b9ecffe54d', 'admin1', 'Kaliangkrik', '089121448714'),
(6, 'neko', 'cbbda04c98848bc6e520abcfeea8ee61ad30fbac', 'neko', 'Rambeanak', '0819273614719');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE `log_activity` (
  `id` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `time_login` varchar(200) DEFAULT NULL,
  `time_logout` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_activity`
--

INSERT INTO `log_activity` (`id`, `id_petugas`, `time_login`, `time_logout`, `keterangan`) VALUES
(45, 9, '2021-04-02 15:31:35', '2021-04-02 15:42:34', 'Lama Bekerja'),
(46, 5, '2021-04-02 15:47:22', '2021-04-02 16:27:13', 'Lama Bekerja');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `jk` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `name`, `jk`, `alamat`, `no_telp`) VALUES
(2, 'zera archive', 'Laki-laki', 'Mertoyudan', '089121448714'),
(3, 'Rina', 'Perempuan', 'Bandongan', '189201471824'),
(4, 'Rosi', 'Perempuan', 'Bojong', '087615927168'),
(5, 'Joko', 'Laki-laki', 'Borobudur', '087711992288');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `username`, `password`, `name`, `alamat`, `no_telp`) VALUES
(5, 'zera', 'a01d1df447b0a53c49f0cf8b3d0053186f8889fb', 'zera', 'Secang', '089121448712'),
(6, 'user', '77886a1e559b68d65e4da22518b119212b8c0372', 'Pegawai 1', 'Pucang', '089121448712'),
(7, 'zeref', '2a6467915b342b4598a8bb03c43550a19ea48482', 'Zeref Dragneel', 'Fairy', '189120371581'),
(8, 'natsu', 'a82034b6b1e46fe72afac994bf70f521a61033b6', 'Natsu Dragneel', 'Fairy', '085718871192'),
(9, 'Husen', 'a7bee61b78669b89953d3725dbc958719ea9a67e', 'Husen', 'Mungkid', '087612929911');

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `tambah` datetime NOT NULL DEFAULT current_timestamp(),
  `ubah` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id`, `name`, `no_telp`, `alamat`, `deskripsi`, `tambah`, `ubah`) VALUES
(2, 'Toko B', '087791661122', 'Muntilan', 'Toko Besi', '2021-03-28 04:54:44', '2021-04-01 13:55:52'),
(3, 'Toko C', '089121448712', 'Mertoyudan', 'Toko Elektronik', '2021-03-27 15:20:12', '2021-03-28 18:42:28'),
(4, 'Toko D', '081922001111', 'Borobudur', 'Toko Besi', '2021-03-28 05:07:16', '2021-04-01 13:56:14'),
(6, 'Toko A', '089121448712', 'Mertoyudan', 'Toko Baju', '2021-03-28 18:33:11', '2021-03-28 18:42:37'),
(9, 'Toko D', '082233771782', 'Mertoyudan', 'Toko Baju', '2021-03-28 18:40:50', '2021-04-01 13:56:26'),
(10, 'Toko F', '089121448714', 'Blondo', 'Toko Baju', '2021-03-28 18:41:47', '2021-04-01 09:04:32'),
(11, 'Toko E', '085744599821', 'Gatak', 'Toko Buah', '2021-04-01 09:48:43', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log_activity`
--
ALTER TABLE `log_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `log_activity`
--
ALTER TABLE `log_activity`
  ADD CONSTRAINT `log_activity_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
