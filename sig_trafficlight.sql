-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 05:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_trafficlight`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(12, '', 'cscs'),
(13, '', ''),
(14, 'sdfsdfsf', 'sdfes'),
(15, 'dsvsd', 'w');

-- --------------------------------------------------------

--
-- Table structure for table `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id_galeri` int(11) NOT NULL,
  `gambar` text DEFAULT NULL,
  `ket_galeri` varchar(50) DEFAULT NULL,
  `id_trafficlight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` text DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_trafficlight` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kondisi`
--

CREATE TABLE `tb_kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `nama_kondisi` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kondisi`
--

INSERT INTO `tb_kondisi` (`id_kondisi`, `nama_kondisi`) VALUES
(1, 'Hidup'),
(2, 'Tidak Difungsikan'),
(3, 'Mati'),
(17, 'hh'),
(18, 'hh');

-- --------------------------------------------------------

--
-- Table structure for table `tb_traffic_light`
--

CREATE TABLE `tb_traffic_light` (
  `id_trafficlight` int(11) NOT NULL,
  `nama_trafficlight` varchar(50) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `fitur` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_kondisi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_traffic_light`
--

INSERT INTO `tb_traffic_light` (`id_trafficlight`, `nama_trafficlight`, `alamat`, `latitude`, `longitude`, `fitur`, `keterangan`, `id_kondisi`) VALUES
(27, 'dsgs', 'Jl. Kalimantan', '-0.498209', '117.126357', 'gre', 'ewewg', 1),
(29, 'ertge', 'Jl. Maluku', '-0.498101', '117.126646', 'sss', 'fgsedgf', 3),
(31, 'aaaaaaaaaaa', 'Jl. Mentawai', '-0.498230', '117.127623', 'bbbb', 'sfffff', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `alamat`, `email`, `password`) VALUES
(1, 'fbx', 'hdrhr', 'hdrhrd', 'drhrd'),
(2, 'ascsac', 'aas', 'aa', 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `FK_tb_galeri_tb_traffic_light` (`id_trafficlight`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `FK_tb_komentar_tb_user` (`id_user`),
  ADD KEY `FK_tb_komentar_tb_traffic_light` (`id_trafficlight`);

--
-- Indexes for table `tb_kondisi`
--
ALTER TABLE `tb_kondisi`
  ADD PRIMARY KEY (`id_kondisi`);

--
-- Indexes for table `tb_traffic_light`
--
ALTER TABLE `tb_traffic_light`
  ADD PRIMARY KEY (`id_trafficlight`),
  ADD KEY `FK_tb_traffic_light_tb_kondisi` (`id_kondisi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kondisi`
--
ALTER TABLE `tb_kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_traffic_light`
--
ALTER TABLE `tb_traffic_light`
  MODIFY `id_trafficlight` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD CONSTRAINT `FK_tb_galeri_tb_traffic_light` FOREIGN KEY (`id_trafficlight`) REFERENCES `tb_traffic_light` (`id_trafficlight`);

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD CONSTRAINT `FK_tb_komentar_tb_traffic_light` FOREIGN KEY (`id_trafficlight`) REFERENCES `tb_traffic_light` (`id_trafficlight`),
  ADD CONSTRAINT `FK_tb_komentar_tb_user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Constraints for table `tb_traffic_light`
--
ALTER TABLE `tb_traffic_light`
  ADD CONSTRAINT `FK_tb_traffic_light_tb_kondisi` FOREIGN KEY (`id_kondisi`) REFERENCES `tb_kondisi` (`id_kondisi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
