# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-04-22 11:52:11
# Generator: MySQL-Front 6.0  (Build 2.20)

drop database if exists ngontrakuy;
create database ngontrakuy;
use ngontrakuy;

#
# Structure for table "kontrakan"
#

DROP TABLE IF EXISTS `kontrakan`;
CREATE TABLE `kontrakan` (
  `idkontrakan` int(11) NOT NULL AUTO_INCREMENT,
  `idpengguna` int(11) NOT NULL,
  `nmkontrakan` varchar(255) DEFAULT NULL,
  `notelp` varchar(14) DEFAULT NULL,
  `alamat` text,
  `kota` varchar(30) DEFAULT NULL,
  `deskripsi` text,
  `fasilitas` text,
  `ukuran` varchar(40) DEFAULT NULL,
  `gambar` text,
  `harga` varchar(10) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idkontrakan`),
  KEY `idpengguna` (`idpengguna`),
  CONSTRAINT `kontrakan_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `pengguna` (`idpengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

#
# Data for table "kontrakan"
#

INSERT INTO `kontrakan` VALUES (1,8,'kontrakan1','081286923340','jalan sabar','DKI Jakarta','bisa nego','kamar tidur;wi-fi;kamar mandi;garasi;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','100000000','available'),(2,8,'kontrakan2','081286923340','jalan sabar','Tangerang','bisa nego','kamar tidur;wi-fi;kamar mandi;meja;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','100000000','not available'),(3,8,'kontrakan3','081286923340','jalan sabar','DKI Jakarta','bisa nego','tempat tidur;wi-fi;kamar mandi;lemari;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','200000000','available'),(4,10,'kontrakan4','081286923340','jalan sabar','Bekasi','bisa nego','kamar tidur;wi-fi;kamar mandi;garasi;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','100000000','available'),(5,8,'kontrakan5','081286923340','jalan sabar','DKI Jakarta','bisa nego','kamar tidur;wi-fi;kamar mandi;meja;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','200000000','not available'),(6,10,'kontrakan6','081286923340','jalan sabar','Bekasi','bisa nego','furnished;wi-fi;kamar mandi;lemari;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','100000000','available'),(7,8,'kontrakan7','081286923340','jalan sabar','Tangerang','bisa nego','kamar tidur;wi-fi;kamar mandi;garasi;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','100000000','available'),(8,11,'kontrakan8','081286923340','jalan sabar','DKI Jakarta','bisa nego','kamar tidur;wi-fi;kamar mandi;meja;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','300000000','not available'),(9,11,'kontrakan9','081286923340','jalan sabar','DKI Jakarta','bisa nego','furnished;wi-fi;kamar mandi;meja;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','400000000','available'),(10,11,'kontrakan10','081286923340','jalan sabar','Tangerang','bisa nego','kamar tidur;wi-fi;kamar mandi;meja makan;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','200000000','not available'),(11,10,'kontrakan11','081286923340','jalan sabar','Tangerang','bisa nego','meja belajar;wi-fi;kamar mandi;meja makan;','100x100','k1g1.png;k1g2.png;k1g3.png;k1g4.png;','20000000','not available');

#
# Structure for table "pengguna"
#

DROP TABLE IF EXISTS `pengguna`;
CREATE TABLE `pengguna` (
  `idpengguna` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `namalengkap` varchar(100) NOT NULL,
  `tgllahir` date DEFAULT NULL,
  `notelp` varchar(14) DEFAULT NULL,
  `auth` char(1) DEFAULT NULL,
  PRIMARY KEY (`idpengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

#
# Data for table "pengguna"
#

INSERT INTO `pengguna` VALUES (1,'chia@gmail.com','chia','chintya','1997-05-17','081286923340','2'),(2,'nikko@gmail.com','nikko','nikko','1997-05-17','081286923340','2'),(3,'zein@gmail.com','zein','zein','1997-05-17','081286923340','2'),(4,'zacky@gmail.com','zacky','zacky','1997-05-17','081286923340','2'),(5,'rinaldy@gmail.com','rinaldy','rinaldy','1997-05-17','081286923340','2'),(6,'rafly@gmail.com','rafly','rafly','1997-05-17','081286923340','2'),(7,'puspa@gmail.com','puspa','puspa','1997-05-17','081286923340','2'),(8,'meydita@gmail.com','meydita','meydita','1997-05-17','081286923340','1'),(9,'fakhri@gmail.com','fakhri','fakhri','1997-05-17','081286923340','0'),(10,'aldis@gmail.com','aldis','aldis','1997-05-17','081286923340','1'),(11,'gugum@gmail.com','gugum','gugum','1997-05-17','081286923340','1'),(12,'pandu@gmail.com','pandu','pandu','1997-05-17','081286923340','0'),(13,'mufidah@gmail.com','mufidah','mufidah','1997-05-17','081286923340','0'),(14,'rivaldy@gmail.com','rivaldy','rivaldy','1997-05-17','081286923340','0'),(15,'hilmi@gmail.com','hilmi','hilmi','1997-05-17','081286923340','0'),(16,'andy@gmail.com','andy','andy','1997-05-17','081286923340','0'),(17,'rinaldy@gmail.com','rinaldy','rinaldy','1997-05-17','081286923340','0'),(18,'fadilah@gmail.com','fadilah','fadilah','1997-05-17','081286923340','0');

#
# Structure for table "pesan"
#

DROP TABLE IF EXISTS `pesan`;
CREATE TABLE `pesan` (
  `idpesan` int(11) NOT NULL AUTO_INCREMENT,
  `idpengirim` int(11) NOT NULL DEFAULT '0',
  `idpenerima` int(11) NOT NULL,
  `tglpesan` date DEFAULT NULL,
  `jenispesan` varchar(10) DEFAULT NULL,
  `topik` varchar(100) DEFAULT NULL,
  `isi` text,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idpesan`),
  KEY `idpengguna` (`idpengirim`),
  CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`idpengirim`) REFERENCES `pengguna` (`idpengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "pesan"
#

INSERT INTO `pesan` VALUES (1,9,8,'2018-03-10','normal','topik1','isi1','submitted'),(2,8,9,'2018-03-10','normal','topik2','isi2','submitted'),(3,9,8,'2018-03-11','normal','topik3','isi3','submitted'),(4,12,10,'2018-04-11','normal','topik4','isi4','submitted'),(5,9,8,'2018-05-10','komplain','topik1','isi1','submitted'),(6,9,8,'2018-05-11','komplain','topik2','isi2','on progress'),(7,9,8,'2018-06-11','komplain','topik3','isi3','solved');

#
# Structure for table "reservasi"
#

DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi` (
  `idreservasi` varchar(8) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `tglbooking` date DEFAULT NULL,
  PRIMARY KEY (`idreservasi`),
  KEY `idpengguna` (`idpengguna`),
  CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `pengguna` (`idpengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "reservasi"
#

INSERT INTO `reservasi` VALUES ('B0000001',9,'2018-04-20'),('B0000002',9,'2018-04-21'),('B0000003',12,'2018-04-20'),('B0000004',13,'2018-04-20'),('B0000005',13,'2018-03-20');

#
# Structure for table "detilreservasi"
#

DROP TABLE IF EXISTS `detilreservasi`;
CREATE TABLE `detilreservasi` (
  `idreservasi` varchar(8) NOT NULL,
  `idkontrakan` int(11) NOT NULL,
  `notelp` varchar(14) NOT NULL,
  `tglmasuk` date DEFAULT NULL,
  `tglkeluar` date DEFAULT NULL,
  KEY `idreservasi` (`idreservasi`),
  CONSTRAINT `detilreservasi_ibfk_1` FOREIGN KEY (`idreservasi`) REFERENCES `reservasi` (`idreservasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "detilreservasi"
#

INSERT INTO `detilreservasi` VALUES ('B0000001',2,'081286923340','2018-05-01','2019-05-01'),('B0000002',5,'081286923340','2018-05-16','2018-06-16'),('B0000003',8,'081286923340','2018-05-02','2019-06-02'),('B0000004',10,'081286923340','2018-05-09','2018-06-02'),('B0000005',11,'081286923340','2018-03-22','2018-06-22');

#
# Structure for table "tagihan"
#

DROP TABLE IF EXISTS `tagihan`;
CREATE TABLE `tagihan` (
  `idtagihan` int(11) NOT NULL AUTO_INCREMENT,
  `idreservasi` varchar(8) NOT NULL,
  `tgltagihan` date DEFAULT NULL,
  `totaltagihan` int(11) DEFAULT NULL,
  `statusbayar` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idtagihan`),
  KEY `idreservasi` (`idreservasi`),
  CONSTRAINT `tagihan_ibfk_1` FOREIGN KEY (`idreservasi`) REFERENCES `reservasi` (`idreservasi`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "tagihan"
#

INSERT INTO `tagihan` VALUES (1,'B0000001','2018-06-01',100000000,'0'),(2,'B0000002','2018-06-16',200000000,'0'),(3,'B0000003','2018-06-02',300000000,'0'),(4,'B0000004','2018-06-09',200000000,'0'),(5,'B0000005','2018-04-22',20000000,'1');
