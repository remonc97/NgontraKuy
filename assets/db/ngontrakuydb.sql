# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-04-17 22:24:19
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "detilbooking"
#

DROP TABLE IF EXISTS `detilbooking`;
CREATE TABLE `detilbooking` (
  `idbooking` int(11) NOT NULL AUTO_INCREMENT,
  `idrumah` int(11) NOT NULL,
  `notelp` varchar(14) NOT NULL,
  `tglcheckin` date DEFAULT NULL,
  `tglcheckout` date DEFAULT NULL,
  KEY `idbooking` (`idbooking`),
  CONSTRAINT `detilbooking_ibfk_1` FOREIGN KEY (`idbooking`) REFERENCES `booking` (`idbooking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "detilbooking"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgllahir` date DEFAULT NULL,
  `notelp` varchar(14) DEFAULT NULL,
  `auth` char(1) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#


#
# Structure for table "pesan"
#

DROP TABLE IF EXISTS `pesan`;
CREATE TABLE `pesan` (
  `idpesan` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `tglpesan` date DEFAULT NULL,
  `jenispesan` varchar(10) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `isi` text,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idpesan`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pesan"
#


#
# Structure for table "kontrakan"
#

DROP TABLE IF EXISTS `kontrakan`;
CREATE TABLE `kontrakan` (
  `idkontrakan` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `nmkontrakan` varchar(100) NOT NULL,
  `notelp` varchar(14) DEFAULT NULL,
  `deskripsi` text,
  `alamat` text,
  `gambar` text,
  PRIMARY KEY (`idkontrakan`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `kontrakan_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "kontrakan"
#


#
# Structure for table "rumah"
#

DROP TABLE IF EXISTS `rumah`;
CREATE TABLE `rumah` (
  `idrumah` int(11) NOT NULL AUTO_INCREMENT,
  `idkontrakan` int(11) NOT NULL,
  `nmrumah` varchar(100) DEFAULT NULL,
  `dayatampung` varchar(3) DEFAULT NULL,
  `gambar` text,
  `ukuran` varchar(40) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `fasilitas` text,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idrumah`),
  KEY `idkontrakan` (`idkontrakan`),
  CONSTRAINT `rumah_ibfk_1` FOREIGN KEY (`idkontrakan`) REFERENCES `kontrakan` (`idkontrakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "rumah"
#


#
# Structure for table "booking"
#

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `idbooking` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(11) NOT NULL,
  `tglbooking` date DEFAULT NULL,
  PRIMARY KEY (`idbooking`),
  KEY `iduser` (`iduser`),
  CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "booking"
#


#
# Structure for table "tagihan"
#

DROP TABLE IF EXISTS `tagihan`;
CREATE TABLE `tagihan` (
  `idtagihan` int(11) NOT NULL AUTO_INCREMENT,
  `idbooking` int(11) NOT NULL,
  `tgltagihan` date DEFAULT NULL,
  `totaltagihan` int(11) DEFAULT NULL,
  `statuspembayaran` char(1) DEFAULT NULL,
  PRIMARY KEY (`idtagihan`),
  KEY `idbooking` (`idbooking`),
  CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`idbooking`) REFERENCES `booking` (`idbooking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tagihan"
#

