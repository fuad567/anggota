-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 27, 2019 at 12:58 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dts19aprogsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nik` int(16) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nik`, `password`) VALUES
(1, '1234'),
(2, '1234'),
(3, '1234'),
(4, '1234'),
(44, '1234'),
(55, '1234'),
(90, '81dc9bdb52d04dc20036dbd8313ed055'),
(555, 'd41d8cd98f00b204e9800998ecf8427e'),
(900, '81dc9bdb52d04dc20036dbd8313ed055'),
(1111, '1234'),
(1122, '1234'),
(1199, '81dc9bdb52d04dc20036dbd8313ed055'),
(4456, '81dc9bdb52d04dc20036dbd8313ed055'),
(5678, '81dc9bdb52d04dc20036dbd8313ed055'),
(6767, '81dc9bdb52d04dc20036dbd8313ed055'),
(8989, '81dc9bdb52d04dc20036dbd8313ed055'),
(9001, '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `mapping_pengguna`
--

CREATE TABLE `mapping_pengguna` (
  `nik` int(16) NOT NULL,
  `id_posisi` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapping_pengguna`
--

INSERT INTO `mapping_pengguna` (`nik`, `id_posisi`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 900),
(1122, 4),
(1111, 4),
(1111, 4),
(1111, 4),
(44, 4),
(44, 4),
(55, 4),
(90, 1),
(555, 4),
(555, 4),
(900, 4),
(9001, 4),
(6767, 4),
(8989, 4),
(5678, 4),
(4456, 3),
(1199, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `nik` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`nik`, `nama`, `ttl`, `alamat`, `provinsi`, `email`, `status`, `created`) VALUES
(1, 'admin', '2019-07-01', 'Klaten', 'Jawa Tengah', 'admin@admin.com', '1', '2019-02-08'),
(2, 'ketua', '2019-07-08', 'Klaten', 'Jawa Tengah', 'ketua@gmail.com', '1', '2019-03-06'),
(3, 'sekretariat', '2019-07-02', 'Klaten', 'Jawa Tengah', 'sek@gmail.com', '1', '2019-03-13'),
(4, 'anggota', '2019-07-16', 'Klaten', 'Jawa Timur', 'anggota@gmail.com', '1', '2019-06-12'),
(55, 'whw', '2019-07-10', 'Klaten', 'Jawa Timur', 'zanzan@gmail.com', '0', '2019-04-11'),
(90, 'Fuad', '2019-07-02', 'Karangdowo', 'Jawa Barat', 'fuad@demo.isc.id', '1', '2019-06-13'),
(134, 'fff', '1990-01-01', '1fdsfdsf', 'sdfdsf', 'sdff@gmail.com', '0', '2019-05-08'),
(900, 'Fachrud', '2019-07-03', 'Karangdowo', 'DKI Jakarta', 'fachr@gmail.com', '1', '2019-05-07'),
(1199, 'Deni', '2019-07-11', 'Solo', 'Jawa Tengah', 'deni@gmail.com', '1', '2019-05-13'),
(4456, 'Ahmad', '2019-07-09', 'Ponorogo', 'Jawa Timur', 'ahmad@yahoo.com', '1', '2019-06-12'),
(5678, 'Eko', '2019-07-11', 'Tegal', 'Jawa Tengah', 'eko1@gmail.com', '1', '2019-06-12'),
(6767, 'Agus', '2019-07-10', 'Klaten ID', 'DKI Jakarta', 'agus1ss@gmail.com', '0', '2019-07-26'),
(9001, 'Fachrud', '2019-07-03', 'Karangdowo', 'DKI Jakarta', 'fachr@gmail.com', '0', '2019-07-04'),
(11123, 'Agus', '2019-07-02', 'Klaten', 'Yogyakarta', 'agus@gmail.com', '0', '2019-07-02');

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `NIK` int(11) NOT NULL,
  `Bidang_Keahlian` varchar(100) NOT NULL,
  `Riwayat_Keahlian` varchar(100) NOT NULL,
  `Sertifikat_Dimiliki` text NOT NULL,
  `Riwayat_Project` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`NIK`, `Bidang_Keahlian`, `Riwayat_Keahlian`, `Sertifikat_Dimiliki`, `Riwayat_Project`) VALUES
(44, ' ', ' ', ' ', ' '),
(55, ' 1', ' 1', ' 1', ' 1'),
(90, 'Full Stack Developer', 'IT Support Staff', 'Web Programmer', 'IT Freelancer'),
(555, ' ', ' ', ' ', ' '),
(900, 'Full Stack Developer', 'IT Support Staff', 'Web Programmer', 'IT Freelance'),
(1199, ' ', ' ', ' ', ' '),
(4456, ' ', ' ', ' ', ' '),
(5678, ' ', ' ', ' ', ' '),
(6767, ' ', ' ', ' ', ' '),
(8989, ' ', ' ', ' ', ' '),
(9001, ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id_posisi` int(11) NOT NULL,
  `nama_posisi` enum('Admin','Ketua','Sekretariat','Anggota') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id_posisi`, `nama_posisi`) VALUES
(1, 'Admin'),
(2, 'Ketua'),
(3, 'Sekretariat'),
(4, 'Anggota');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `mapping_pengguna`
--
ALTER TABLE `mapping_pengguna`
  ADD KEY `mapping_nik` (`nik`),
  ADD KEY `mapping_posisi` (`id_posisi`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD UNIQUE KEY `porto_nik` (`NIK`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id_posisi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id_posisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
