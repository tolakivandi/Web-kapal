-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2023 at 08:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ivandi`
--

-- --------------------------------------------------------

--
-- Table structure for table `alat_tangkap`
--

CREATE TABLE `alat_tangkap` (
  `id_alat_tangkap` int(11) NOT NULL,
  `nama_alat_tangkap` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dpi`
--

CREATE TABLE `dpi` (
  `id_dpi` int(11) NOT NULL,
  `nama_dpi` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id_kapal` int(11) NOT NULL,
  `nama_kapal` varchar(255) NOT NULL,
  `id_pemilik` int(11) NOT NULL,
  `id_dpi` int(11) NOT NULL,
  `id_alat_tangkap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id_pemilik` int(11) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no._hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alat_tangkap`
--
ALTER TABLE `alat_tangkap`
  ADD PRIMARY KEY (`id_alat_tangkap`);

--
-- Indexes for table `dpi`
--
ALTER TABLE `dpi`
  ADD PRIMARY KEY (`id_dpi`);

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id_kapal`),
  ADD UNIQUE KEY `id_pemilik` (`id_pemilik`),
  ADD UNIQUE KEY `id_dpi` (`id_dpi`),
  ADD UNIQUE KEY `id_alat_tangkap` (`id_alat_tangkap`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alat_tangkap`
--
ALTER TABLE `alat_tangkap`
  MODIFY `id_alat_tangkap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dpi`
--
ALTER TABLE `dpi`
  MODIFY `id_dpi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id_kapal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id_pemilik` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kapal`
--
ALTER TABLE `kapal`
  ADD CONSTRAINT `kapal_ibfk_1` FOREIGN KEY (`id_dpi`) REFERENCES `dpi` (`id_dpi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kapal_ibfk_2` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik` (`id_pemilik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kapal_ibfk_3` FOREIGN KEY (`id_alat_tangkap`) REFERENCES `alat_tangkap` (`id_alat_tangkap`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
