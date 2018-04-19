-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2018 at 02:32 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngontrakuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idbooking` varchar(8) NOT NULL,
  `iduser` varchar(8) NOT NULL,
  `tglbooking` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detilbooking`
--

CREATE TABLE `detilbooking` (
  `idbooking` varchar(8) NOT NULL,
  `idrumah` int(11) NOT NULL,
  `notelp` varchar(14) NOT NULL,
  `tglcheckin` date DEFAULT NULL,
  `tglcheckout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontrakan`
--

CREATE TABLE `kontrakan` (
  `idkontrakan` int(11) NOT NULL,
  `iduser` varchar(8) NOT NULL,
  `nmkontrakan` varchar(100) NOT NULL,
  `notelp` varchar(14) DEFAULT NULL,
  `deskripsi` text,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `idpesan` int(11) NOT NULL,
  `iduser` varchar(8) NOT NULL,
  `tglpesan` date DEFAULT NULL,
  `subject` varchar(100) NOT NULL,
  `jenispesan` varchar(10) DEFAULT NULL,
  `isi` text,
  `status` varchar(20) DEFAULT NULL,
  `penerima` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesancustomer`
--

CREATE TABLE `pesancustomer` (
  `id` int(10) UNSIGNED NOT NULL,
  `iduser` varchar(8) NOT NULL,
  `pesancustomer` text NOT NULL,
  `idpesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `idrumah` int(11) NOT NULL,
  `idkontrakan` int(11) NOT NULL,
  `nmrumah` varchar(100) DEFAULT NULL,
  `dayatampung` varchar(3) DEFAULT NULL,
  `gambar` text,
  `ukuran` varchar(40) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `fasilitas` text,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `idtagihan` int(11) NOT NULL,
  `idbooking` varchar(8) NOT NULL,
  `tgltagihan` date DEFAULT NULL,
  `totaltagihan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgllahir` date DEFAULT NULL,
  `notelp` varchar(14) DEFAULT NULL,
  `auth` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `email`, `password`, `nama`, `tgllahir`, `notelp`, `auth`) VALUES
('USR01', 'zackyburhani99@gmail.com', 'admin', 'Zacky Burhani', '2018-04-03', '083891778014', '1'),
('USR02', 'zein@gmail.com', 'admin', 'Zein Hanafi', '2018-04-11', '085473664736', '1'),
('USR03', 'niko@gmail.com', 'admin', 'Niko', '2018-04-06', '085847556422', '0'),
('USR04', 'cia@gmail.com', 'admin', 'Cia', '2018-04-04', '085847556431', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idbooking`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `detilbooking`
--
ALTER TABLE `detilbooking`
  ADD KEY `idbooking` (`idbooking`);

--
-- Indexes for table `kontrakan`
--
ALTER TABLE `kontrakan`
  ADD PRIMARY KEY (`idkontrakan`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`idpesan`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `pesancustomer`
--
ALTER TABLE `pesancustomer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`idrumah`),
  ADD KEY `idkontrakan` (`idkontrakan`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`idtagihan`),
  ADD KEY `idbooking` (`idbooking`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontrakan`
--
ALTER TABLE `kontrakan`
  MODIFY `idkontrakan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `idpesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `pesancustomer`
--
ALTER TABLE `pesancustomer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `idrumah` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `detilbooking`
--
ALTER TABLE `detilbooking`
  ADD CONSTRAINT `detilbooking_ibfk_1` FOREIGN KEY (`idbooking`) REFERENCES `booking` (`idbooking`);

--
-- Constraints for table `kontrakan`
--
ALTER TABLE `kontrakan`
  ADD CONSTRAINT `kontrakan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `pesancustomer`
--
ALTER TABLE `pesancustomer`
  ADD CONSTRAINT `pesancustomer_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `rumah`
--
ALTER TABLE `rumah`
  ADD CONSTRAINT `rumah_ibfk_1` FOREIGN KEY (`idkontrakan`) REFERENCES `kontrakan` (`idkontrakan`);

--
-- Constraints for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`idbooking`) REFERENCES `booking` (`idbooking`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
