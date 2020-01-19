-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 02:59 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwlab-project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `matakuliah` varchar(100) NOT NULL,
  `hari` varchar(25) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `dosen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `matakuliah`, `hari`, `jam`, `dosen`) VALUES
(11, 'Bahasa Inggris Bisnis 1', 'Senin', '3/4', 'ANINDIA AYU RAHMAWATI'),
(12, 'Pengantar Pengolahan Citra', 'Senin', '5/6', 'ROSNY GONIDJAYA'),
(13, 'Pemodelan dan Simulasi', 'Senin', '8/9/10', 'YUDI SATRIA'),
(14, 'Teknik Kompilasi **', 'Selasa', '4/5/6', 'MAUKAR'),
(15, 'Pemrograman WEB **', 'Selasa', '7/8', 'SURYARINI WIDODO'),
(16, 'Jaringan Komputer Lanjut **', 'Rabu', '1/2', 'VIVIEN NOVA FITHRIANA'),
(17, 'Rekayasa Perangkat Lunak 1', 'Rabu', '3/4', ' MOHAMAD SAEFUDIN'),
(18, 'Pengantar Forensik Teknologi Inf', 'Rabu', '7/8', 'NURLIYANI'),
(19, ' Pengantar Bisnis Informatika #', 'Rabu', '9/10', 'RHEZA ANDIKA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `npm` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `image`, `npm`, `nama`, `jurusan`, `alamat`, `email`) VALUES
(6, '', '53417413', 'M. Kizbudin', 'Teknik Informatika', 'Bogor', 'mkizbudin@outlook.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `name`, `username`, `password`, `date_created`) VALUES
(3, 'IMG_3576.jpg', 'M. Kizbudin', 'kizbudin', '$2y$10$s.QICQwBmfggpITmEYpHTe6nuWbrMXY4.DOye5STBXRMe3gtZgDHa', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
