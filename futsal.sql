-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 07:58 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyewaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `futsal`
--

CREATE TABLE `futsal` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_booking` date NOT NULL,
  `jam_booking` time NOT NULL,
  `durasi_sewa` varchar(255) NOT NULL,
  `jml_pemain` varchar(255) NOT NULL,
  `no_lap` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `depo` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `telefon` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `futsal`
--

INSERT INTO `futsal` (`id`, `nama`, `tgl_booking`, `jam_booking`, `durasi_sewa`, `jml_pemain`, `no_lap`, `harga`, `depo`, `keterangan`, `telefon`) VALUES
(1, 'Fikri', '2023-04-19', '05:54:00', '1', '11', '3', 150000, '50000', '', '082266644466'),
(3, '', '0000-00-00', '00:00:00', '', '', '', 0, '0', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `futsal`
--
ALTER TABLE `futsal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `futsal`
--
ALTER TABLE `futsal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
