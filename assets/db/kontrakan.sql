# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2018-04-14 12:21:00
# Generator: MySQL-Front 6.0  (Build 2.20)

create database kontrakan;
use kontrakan;

#
# Structure for table "ada"
#


CREATE TABLE `ada` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `id_rmh` int(11) NOT NULL DEFAULT '0',
  `detail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_res`),
  KEY `id_rmh` (`id_rmh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "ada"
#


#
# Structure for table "bayar"
#


CREATE TABLE `bayar` (
  `id_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL DEFAULT '0',
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `status` varchar(8) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_bayar`),
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "bayar"
#


#
# Structure for table "include"
#


CREATE TABLE `include` (
  `id_byr` int(10) NOT NULL AUTO_INCREMENT,
  `id_res` int(11) NOT NULL DEFAULT '0',
  `total` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_byr`),
  KEY `id_res` (`id_res`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "include"
#


#
# Structure for table "jenisrumah"
#


CREATE TABLE `jenisrumah` (
  `id_jns` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jns` varchar(50) DEFAULT NULL,
  `daya_tampung` varchar(50) DEFAULT NULL,
  `jml` int(3) DEFAULT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_jns`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "jenisrumah"
#


#
# Structure for table "kirim"
#


CREATE TABLE `kirim` (
  `id_psn` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL DEFAULT '0',
  `tgl` date DEFAULT NULL,
  `detail` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_psn`),
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "kirim"
#


#
# Structure for table "kontrakan"
#


CREATE TABLE `kontrakan` (
  `id_kont` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kont` varchar(50) DEFAULT NULL,
  `pemilik_kont` varchar(50) DEFAULT NULL,
  `telp_pemilik` varchar(13) DEFAULT NULL,
  `id_users` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_kont`),
  KEY `id_users` (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "kontrakan"
#


#
# Structure for table "pesan"
#


CREATE TABLE `pesan` (
  `id_psn` int(11) NOT NULL AUTO_INCREMENT,
  `topik` varchar(50) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_psn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pesan"
#


#
# Structure for table "reservasi"
#


CREATE TABLE `reservasi` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `id_users` int(11) NOT NULL DEFAULT '0',
  `id_rmh` int(11) NOT NULL DEFAULT '0',
  `tgl_res` date DEFAULT NULL,
  PRIMARY KEY (`id_res`),
  KEY `id_users` (`id_users`,`id_rmh`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "reservasi"
#


#
# Structure for table "rumah"
#


CREATE TABLE `rumah` (
  `id_rmh` int(11) NOT NULL AUTO_INCREMENT,
	`id_kont` int(11) NOT NULL DEFAULT '0',
  `id_jns` int(11) NOT NULL DEFAULT '0',
	`nm_rmh` varchar(50),
  `gambar` varchar(255) DEFAULT NULL,
  `harga` int(10) DEFAULT NULL,
	`status` varchar(10), 
  PRIMARY KEY (`id_rmh`),
  KEY `id_jns` (`id_jns`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "rumah"
#


#
# Structure for table "users"
#


CREATE TABLE `users` (
  `id_users` int(11) NOT NULL AUTO_INCREMENT,
  `pass` varchar(10) DEFAULT NULL,
  `nama_users` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `no_rek` varchar(16) DEFAULT NULL,
  `auth` int(1) DEFAULT NULL,
  `telp_users` varchar(13) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_users`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "users"
#
