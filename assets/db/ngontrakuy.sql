# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2018-04-20 08:57:29
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "booking"
#

DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `idbooking` varchar(8) NOT NULL,
  `iduser` int(11) NOT NULL,
  `tglbooking` date DEFAULT NULL,
  PRIMARY KEY (`idbooking`),
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "booking"
#

INSERT INTO `booking` VALUES ('1',1,'2018-06-02'),('2',3,'2018-02-24'),('3',4,'2018-01-02'),('4',6,'2018-01-17'),('5',7,'2018-02-02');

#
# Structure for table "detilbooking"
#

DROP TABLE IF EXISTS `detilbooking`;
CREATE TABLE `detilbooking` (
  `idbooking` varchar(8) NOT NULL,
  `idrumah` int(11) NOT NULL,
  `notelp` varchar(14) NOT NULL,
  `tglcheckin` date DEFAULT NULL,
  `tglcheckout` date DEFAULT NULL,
  KEY `idbooking` (`idbooking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "detilbooking"
#

INSERT INTO `detilbooking` VALUES ('1',3,'08121222','2018-02-06','2018-08-12'),('2',1,'081212226090','2018-02-24','2018-10-23'),('3',2,'081212224090','2018-01-02','2018-03-04'),('5',4,'081212227090','2018-02-03','2018-04-17'),('4',6,'081212228090','2018-09-18','2018-12-03');

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
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Data for table "kontrakan"
#

INSERT INTO `kontrakan` VALUES (1,1,'punya zein','081212222090','luas','jl haji yamin no 23',NULL),(2,4,'punya puspa','081212226090','banyak kamar mandinya','jl makota simprug',NULL),(3,6,'punya jaki','081212224090','ada lapangan bola','jl cipadu',NULL);

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
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pesan"
#


#
# Structure for table "pesancustomer"
#

DROP TABLE IF EXISTS `pesancustomer`;
CREATE TABLE `pesancustomer` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `iduser` varchar(8) NOT NULL,
  `pesancustomer` text NOT NULL,
  `idpesan` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `iduser` (`iduser`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pesancustomer"
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
  KEY `idkontrakan` (`idkontrakan`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "rumah"
#

INSERT INTO `rumah` VALUES (1,1,'bungalow1','3',NULL,'3x3 meter persegi','500000','furnished, satu kamar mandi, satu ruang keluarga, satu taman belakang','kosong'),(2,1,'bungalow2','5',NULL,'5x5 meter persegi','2000000','furnished, kamar mandi dua, lantai dua, kamar tidur dua di bawah, satu kamar tidur di atas. taman belakang satu.','kosong'),(3,4,'melati1','5',NULL,'7x7 meter persegi','3000000','empty, dua lantai, empat kamar: dua di atas dua di bawah. Satu taman belakang.','tersewa'),(4,4,'melati2','3',NULL,'3x3 meter persegi','300000','not furnished, water heater, dua kamar tidur, taman belakang',NULL),(5,6,'gardenia1','4',NULL,'4x4 meter persegi','400000','not furnished, kamar tidur dua, gudang satu',NULL);

#
# Structure for table "tagihan"
#

DROP TABLE IF EXISTS `tagihan`;
CREATE TABLE `tagihan` (
  `idtagihan` int(11) NOT NULL AUTO_INCREMENT,
  `idbooking` varchar(8) NOT NULL,
  `tgltagihan` date DEFAULT NULL,
  `totaltagihan` int(11) DEFAULT NULL,
  `statuspembayaran` char(1) DEFAULT NULL,
  PRIMARY KEY (`idtagihan`),
  KEY `idbooking` (`idbooking`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tagihan"
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'zein@gmail.com','zein','zein','1996-01-01','081212222090','1'),(2,'chia@gmail.com','chia','chia','1996-01-01','081212228090','2'),(3,'rafly@gmail.com','rafly','rafly','1996-01-01','081212227090','0'),(4,'puspa@gmail.com','puspa','puspa','1996-01-01','081212226090','1'),(5,'nikko@gmail.com','nikko','nikko','1996-01-01','081212225090','2'),(6,'zacky@gmail.com','zacky','zacky','1996-01-01','081212224090','1'),(7,'rinaldy@gmail.com','rinaldy','rinaldy','1996-01-01','081212223090','0');
