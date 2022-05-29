-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 06:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_kampus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen_kampus`
--

CREATE TABLE `tbl_dosen_kampus` (
  `id_dosen` int(11) NOT NULL,
  `nik_dosen` int(11) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `email_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_dosen_kampus`
--

INSERT INTO `tbl_dosen_kampus` (`id_dosen`, `nik_dosen`, `nama_dosen`, `email_dosen`) VALUES
(1, 191121, 'farhan', 'apaajas@gmail.com'),
(2, 1212, 'hanra', 'hanra@gmail.com'),
(3, 128327, 'rajab', 'rajab@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `npm_mahasiswa` varchar(12) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `no_hp_mahasiswa` varchar(13) NOT NULL,
  `email_mahasiswa` varchar(50) NOT NULL,
  `alamat_mahasiswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mahasiswa`, `npm_mahasiswa`, `nama_mahasiswa`, `no_hp_mahasiswa`, `email_mahasiswa`, `alamat_mahasiswa`) VALUES
(2, '1234', 'testing', '08123', 'apa@gmail.com', 'Jl. flamboyan be 8 dwiodiawd wadukuawnj dawukdwan do;awunda ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_dosen_kampus`
--
ALTER TABLE `tbl_dosen_kampus`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_dosen_kampus`
--
ALTER TABLE `tbl_dosen_kampus`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
