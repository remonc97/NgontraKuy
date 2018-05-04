# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-05-04 08:18:33
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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "kontrakan"
#

INSERT INTO `kontrakan` VALUES (1,8,'kontrakan1','081286923340','jalan sabar','DKI Jakarta','bisa nego','kamar tidur;wi-fi;kamar mandi;garasi;','100x100','k1g1.png','100000000','available'),(2,8,'kontrakan2','081286923340','jalan sabar','Tangerang','bisa nego','kamar tidur;wi-fi;kamar mandi;meja;','100x100','k1g1.png','100000000','not available'),(3,8,'kontrakan3','081286923340','jalan sabar','DKI Jakarta','bisa nego','tempat tidur;wi-fi;kamar mandi;lemari;','100x100','k1g1.png','200000000','available'),(4,10,'kontrakan4','081286923340','jalan sabar','Bekasi','bisa nego','kamar tidur;wi-fi;kamar mandi;garasi;','100x100','k1g1.png','100000000','available'),(5,8,'kontrakan5','081286923340','jalan sabar','DKI Jakarta','bisa nego','kamar tidur;wi-fi;kamar mandi;meja;','100x100','k1g1.png','200000000','not available'),(6,10,'kontrakan6','081286923340','jalan sabar','Bekasi','bisa nego','furnished;wi-fi;kamar mandi;lemari;','100x100','k1g1.png','100000000','available'),(7,8,'kontrakan7','081286923340','jalan sabar','Tangerang','bisa nego','kamar tidur;wi-fi;kamar mandi;garasi;','100x100','k1g1.png','100000000','available'),(8,11,'kontrakan8','081286923340','jalan sabar','DKI Jakarta','bisa nego','kamar tidur;wi-fi;kamar mandi;meja;','100x100','k1g1.png','300000000','not available'),(9,11,'kontrakan9','081286923340','jalan sabar','DKI Jakarta','bisa nego','furnished;wi-fi;kamar mandi;meja;','100x100','k1g1.png','400000000','available'),(10,11,'kontrakan10','081286923340','jalan sabar','Tangerang','bisa nego','kamar tidur;wi-fi;kamar mandi;meja makan;','100x100','k1g1.png','200000000','not available'),(11,10,'kontrakan11','081286923340','jalan sabar','Tangerang','bisa nego','meja belajar;wi-fi;kamar mandi;meja makan;','100x100','k1g1.png','20000000','not available'),(12,13,'hehe','2930','hehe','hehe','hehe','hehe','hehe','girl1.png','832900','available'),(13,8,'hdhdjsj','9028034','KDJLJD','hsfjsl','LDKSDL','ldsaljd','lsndlasL',NULL,'028339','available');

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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

#
# Data for table "pengguna"
#

INSERT INTO `pengguna` VALUES (1,'chia@gmail.com','chia','chintya','1997-05-17','081286923340','2'),(2,'nikko@gmail.com','nikko','nikko','1997-05-17','081286923340','2'),(3,'zein@gmail.com','zein','zein','1997-05-17','081286923340','2'),(4,'zacky@gmail.com','zacky','zacky','1997-05-17','081286923340','2'),(5,'rinaldy@gmail.com','rinaldy','rinaldy','1997-05-17','081286923340','2'),(6,'rafly@gmail.com','rafly','rafly','1997-05-17','081286923340','2'),(7,'puspa@gmail.com','puspa','puspa','1997-05-17','081286923340','2'),(8,'meydita@gmail.com','meydita','meydita','1997-05-17','081286923340','1'),(9,'fakhri@gmail.com','fakhri','fakhri','1997-05-17','081286923340','0'),(10,'aldis@gmail.com','aldis','aldis','1997-05-17','081286923340','1'),(11,'gugum@gmail.com','gugum','gugum','1997-05-17','081286923340','1'),(12,'pandu@gmail.com','pandu','pandu','1997-05-17','081286923340','0'),(13,'mufidah@gmail.com','mufidah','mufidah','1997-05-17','081286923340','1'),(14,'rivaldy@gmail.com','rivaldy','rivaldy','1997-05-17','081286923340','0'),(15,'hilmi@gmail.com','hilmi','hilmi','1997-05-17','081286923340','0'),(16,'andy@gmail.com','andy','andy','1997-05-17','081286923340','0'),(17,'rinaldy@gmail.com','rinaldy','rinaldy','1997-05-17','081286923340','0'),(18,'fadilah@gmail.com','fadilah','fadilah','1997-05-17','081286923340','0'),(19,'ehehe@yahoo.com','ehehe','ehehe','2008-08-08','0829','0'),(20,'ehyou@gmail.com','ehyou','ehyou','2008-08-08','3849','0');

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
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

#
# Data for table "pesan"
#

INSERT INTO `pesan` VALUES (1,9,8,'2018-03-10','normal','topik1','isi1','submitted'),(2,8,9,'2018-03-10','normal','topik2','isi2','submitted'),(3,9,8,'2018-03-11','normal','topik3','isi3','submitted'),(4,12,10,'2018-04-11','normal','topik4','isi4','submitted'),(5,9,8,'2018-05-10','komplain','topik1','isi1','submitted'),(6,9,8,'2018-05-11','komplain','topik2','isi2','on process'),(7,9,8,'2018-06-11','komplain','topik3','isi3','solved'),(20,9,10,'2018-04-24','request','Book Request','Book Request <br/>\r\n                ----------------------<br/>\r\n                Tenant Name : <br/>Phone No. : 0808<br/>Planned Check In Date :2020-02-20<br/>Planned Check Out Date :2021-02-20<br/><br/>\r\n                Click this url to confirm the booking request.\r\n                <br.></br.><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookConfirm/B0000007_9_2018-04-24_6_0808_2020-02-20_2021-02-20_20_fakhri\">accept booking request</a><br/><br/>\r\n                Click this url below to decline the booking request.\r\n                <br/><br/><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookCancel/20\">Decline booking request</a>','submitted'),(22,15,8,'2018-04-25','request','Book Request','Book Request <br/>\r\n                ----------------------<br/>\r\n                Tenant Name : <br/>Phone No. : 08128372992<br/>Planned Check In Date :2018-04-24<br/>Planned Check Out Date :2020-04-24<br/><br/>\r\n                Click this url to confirm the booking request.\r\n                <br.></br.><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookConfirm/B0000006_15_2018-04-25_1_08128372992_2018-04-24_2020-04-24_22_hilmi\">accept booking request</a><br/><br/>\r\n                Click this url below to decline the booking request.\r\n                <br/><br/><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookCancel/22\">Decline booking request</a>','accepted'),(23,15,15,'2018-04-25','request','Book Request Accepted','Congrats, You have successfully booked this kontrakan! <br/>\r\n                Here are your kontrakan booking details:<br/>\r\n                Booking ID : B0000006Tenant Name : hilmi<br/>Phone No. : 08128372992<br/>Booking Date : 2018-04-25<br/>Planned Check In Date :2018-04-24<br/>Planned Check Out Date :2020-04-24<br/><br/>','submitted'),(24,15,8,'2018-04-25','request','Book Request','Book Request <br/>\r\n                ----------------------<br/>\r\n                Tenant Name : <br/>Phone No. : 081286923340<br/>Planned Check In Date :2018-04-25<br/>Planned Check Out Date :2019-04-25<br/><br/>\r\n                Click this url to confirm the booking request.\r\n                <br.></br.><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookConfirm/B0000007_15_2018-04-25_1_081286923340_2018-04-25_2019-04-25_24_hilmi\">accept booking request</a><br/><br/>\r\n                Click this url below to decline the booking request.\r\n                <br/><br/><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookCancel/24\">Decline booking request</a>','accepted'),(25,15,15,'2018-04-25','request','Book Request Accepted','Congrats, You have successfully booked this kontrakan! <br/>\r\n                Here are your kontrakan booking details:<br/>\r\n                Booking ID : B0000007Tenant Name : hilmi<br/>Phone No. : 081286923340<br/>Booking Date : 2018-04-25<br/>Planned Check In Date :2018-04-25<br/>Planned Check Out Date :2019-04-25<br/><br/>','submitted'),(26,15,8,'2018-04-25','request','Book Request','Book Request <br/>\r\n                ----------------------<br/>\r\n                Tenant Name : <br/>Phone No. : 083947<br/>Planned Check In Date :2019-04-20<br/>Planned Check Out Date :2024-02-20<br/><br/>\r\n                Click this url to confirm the booking request.\r\n                <br.></br.><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookConfirm/B0000008_15_2018-04-25_1_083947_2019-04-20_2024-02-20_26_hilmi\">accept booking request</a><br/><br/>\r\n                Click this url below to decline the booking request.\r\n                <br/><br/><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookCancel/26\">Decline booking request</a>','accepted'),(27,15,15,'2018-04-25','request','Book Request Accepted','Congrats, You have successfully booked this kontrakan! <br/>\r\n                Here are your kontrakan booking details:<br/>\r\n                Booking ID : B0000008Tenant Name : hilmi<br/>Phone No. : 083947<br/>Booking Date : 2018-04-25<br/>Planned Check In Date :2019-04-20<br/>Planned Check Out Date :2024-02-20<br/><br/>','submitted'),(28,9,8,'2018-04-26','request','Book Request','Book Request <br/>\r\n                ----------------------<br/>\r\n                Tenant Name : <br/>Phone No. : 081293743<br/>Planned Check In Date :2018-01-20<br/>Planned Check Out Date :2019-02-20<br/><br/>\r\n                Click this url to confirm the booking request.\r\n                <br.></br.><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookConfirm/B0000009_9_2018-04-26_3_081293743_2018-01-20_2019-02-20_28_fakhri\">accept booking request</a><br/><br/>\r\n                Click this url below to decline the booking request.\r\n                <br/><br/><a href=\"http://localhost/College_Files/SCVC/UTS/NgontraKuy/BookCancel/28\">Decline booking request</a>','submitted');

#
# Structure for table "reservasi"
#

DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi` (
  `idreservasi` varchar(8) NOT NULL,
  `idpengguna` int(11) NOT NULL,
  `tglreservasi` date DEFAULT NULL,
  PRIMARY KEY (`idreservasi`),
  KEY `idpengguna` (`idpengguna`),
  CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`idpengguna`) REFERENCES `pengguna` (`idpengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "reservasi"
#

INSERT INTO `reservasi` VALUES ('B0000001',9,'2018-04-20'),('B0000002',9,'2018-04-21'),('B0000003',12,'2018-04-20'),('B0000004',13,'2018-04-20'),('B0000005',13,'2018-03-20'),('B0000006',15,'2018-04-25'),('B0000007',15,'2018-04-25'),('B0000008',15,'2018-04-25');

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

INSERT INTO `detilreservasi` VALUES ('B0000001',2,'081286923340','2018-05-01','2019-05-01'),('B0000002',5,'081286923340','2018-05-16','2018-06-16'),('B0000003',8,'081286923340','2018-05-02','2019-06-02'),('B0000004',10,'081286923340','2018-05-09','2018-06-02'),('B0000005',11,'081286923340','2018-03-22','2018-06-22'),('B0000006',1,'08128372992','2018-04-24','2020-04-24'),('B0000007',1,'081286923340','2018-04-25','2019-04-25'),('B0000008',1,'083947','2019-04-20','2024-02-20');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "tagihan"
#

INSERT INTO `tagihan` VALUES (1,'B0000001','2018-06-01',100000000,'0'),(2,'B0000002','2018-06-16',200000000,'0'),(3,'B0000003','2018-06-02',300000000,'0'),(4,'B0000004','2018-06-09',200000000,'0'),(5,'B0000005','2018-04-22',20000000,'1'),(6,'B0000007','2018-05-25',100000000,'0'),(7,'B0000008','2019-05-20',100000000,'0');
