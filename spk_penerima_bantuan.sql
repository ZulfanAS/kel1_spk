-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 03:49 PM
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
-- Database: `spk_penerima_bantuan`
--
CREATE DATABASE IF NOT EXISTS `spk_penerima_bantuan` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `spk_penerima_bantuan`;

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` varchar(20) NOT NULL,
  `c5` varchar(20) NOT NULL,
  `c6` varchar(20) NOT NULL,
  `c7` varchar(20) NOT NULL,
  `c8` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`) VALUES
(1, 'Hendra Surya', 1600000, 3, 20, 'Tepas', 'Kontrak', 'Listrik', 'Minyak Tanah', 'SMA'),
(2, 'Erni Elvani', 2500000, 3, 36, 'Batu', 'Milik Sendiri', 'Listrik', 'LPG', 'SMA'),
(3, 'Subiantoro', 1500000, 2, 32, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMA'),
(4, 'Edi Putra', 2500000, 4, 40, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMA'),
(5, 'Rahmadani Syahputra', 1600000, 3, 20, 'Batu', 'Milik Sendiri', 'Listrik', 'LPG', 'SMA'),
(6, 'Saifullah Hasibuan Sp. Mp.', 1400000, 2, 24, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMP'),
(7, 'Miswan', 1500000, 1, 36, 'Papan', 'Milik Sendiri', 'Listrik', 'Minyak Tanah', 'SMA'),
(8, 'Syahril', 2000000, 3, 36, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMA'),
(9, 'Zul Kifli Lubis', 2000000, 3, 32, 'Batu', 'Menumpang', 'Listrik', 'LPG', 'SMA'),
(10, 'Sukamto Salim', 2400000, 4, 20, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMP'),
(11, 'Andong Simanjuntak', 1600000, 2, 24, 'Papan', 'Kontrak', 'Listrik', 'LPG', 'SMP'),
(12, 'Pardomuan Siregar', 1500000, 3, 28, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMA'),
(13, 'Muliadi', 1500000, 3, 24, 'Tepas', 'Milik Sendiri', 'Listrik', 'Minyak Tanah', 'SMA'),
(14, 'Surani', 2000000, 3, 30, 'Batu', 'Milik Sendiri', 'Listrik', 'LPG', 'SMP'),
(15, 'Buha Manullang', 1600000, 1, 20, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMA'),
(16, 'Hengki Urira Dame', 2000000, 2, 36, 'Batu', 'Milik Sendiri', 'Listrik', 'LPG', 'SMP'),
(17, 'Yuda Pranata Siregar', 2400000, 3, 36, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMA'),
(18, 'Zulfan Efendi', 2000000, 3, 20, 'Batu', 'Kontrak', 'Listrik', 'Minyak Tanah', 'SMA'),
(19, 'Abd Karim', 1600000, 2, 36, 'Tepas', 'Milik Sendiri', 'Listrik', 'LPG', 'SMA'),
(20, 'Juardiansyah', 2400000, 2, 36, 'Batu', 'Kontrak', 'Listrik', 'LPG', 'SMA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
