-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2015 at 05:22 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amapia`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `nID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`nID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`nID`, `nama_kategori`) VALUES
(1, 'Hunian'),
(2, 'Properti'),
(3, 'Destinasi'),
(4, 'Belanja'),
(5, 'Kuliner');

-- --------------------------------------------------------

--
-- Table structure for table `properti`
--

CREATE TABLE IF NOT EXISTS `properti` (
  `nID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `jenis_properti` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `deskripsi` text NOT NULL,
  `luas_kamar` varchar(30) NOT NULL,
  `jumlah_kamar` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `penghuni_pria` int(11) NOT NULL,
  `penghuni_wanita` int(11) NOT NULL,
  `penghuni_keluarga` int(11) NOT NULL,
  `penghuni_suami_istri` int(11) NOT NULL,
  `penghuni_pria_wanita` int(11) NOT NULL,
  `mayoritas_penghuni` int(11) NOT NULL,
  `untuk_pria` int(11) NOT NULL,
  `untuk_wanita` int(11) NOT NULL,
  `untuk_keluarga` int(11) NOT NULL,
  `untuk_sumai_istri` int(11) NOT NULL,
  `umum_balkon` int(11) NOT NULL,
  `umum_kulkas` int(11) NOT NULL,
  `umum_tv` int(11) NOT NULL,
  `umum_tamu` int(11) NOT NULL,
  `umum_km` int(11) NOT NULL,
  `umum_lain` int(11) NOT NULL,
  `privat_kasur` int(11) NOT NULL,
  `privat_almari` int(11) NOT NULL,
  `privat_kursi` int(11) NOT NULL,
  `privat_ac` int(11) NOT NULL,
  `privat_kmd` int(11) NOT NULL,
  `privat_tv` int(11) NOT NULL,
  `umum_dapur` int(11) NOT NULL,
  `privat_meja` int(11) NOT NULL,
  `harian` int(11) NOT NULL,
  `mingguan` int(11) NOT NULL,
  `bulanan` int(11) NOT NULL,
  `tahunan` int(11) NOT NULL,
  `nohp_pengelola` int(11) NOT NULL,
  `nama_pengelola` varchar(30) NOT NULL,
  `kebijakan` text NOT NULL,
  `lat` varchar(50) NOT NULL,
  `lon` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `verified` tinyint(4) NOT NULL,
  `create_date` datetime NOT NULL,
  PRIMARY KEY (`nID`),
  KEY `jenis_properti` (`jenis_properti`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `properti`
--

INSERT INTO `properti` (`nID`, `username`, `jenis_properti`, `nama`, `alamat`, `deskripsi`, `luas_kamar`, `jumlah_kamar`, `status`, `penghuni_pria`, `penghuni_wanita`, `penghuni_keluarga`, `penghuni_suami_istri`, `penghuni_pria_wanita`, `mayoritas_penghuni`, `untuk_pria`, `untuk_wanita`, `untuk_keluarga`, `untuk_sumai_istri`, `umum_balkon`, `umum_kulkas`, `umum_tv`, `umum_tamu`, `umum_km`, `umum_lain`, `privat_kasur`, `privat_almari`, `privat_kursi`, `privat_ac`, `privat_kmd`, `privat_tv`, `umum_dapur`, `privat_meja`, `harian`, `mingguan`, `bulanan`, `tahunan`, `nohp_pengelola`, `nama_pengelola`, `kebijakan`, `lat`, `lon`, `photo`, `verified`, `create_date`) VALUES
(5, 'ricooktavianaw', 1, 'Rico Oktavian Adhi Wibowo', 'Bandung', 'Test', '3x4', 4, 'Rent', 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, 1, 100000, 0, 0, 0, 2147483647, 'Rico Oktavian Adhi Wibowo', 'Bebas', '4.50031', '96.7361', '_2015_06_06_06_11_36.png', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori`
--

CREATE TABLE IF NOT EXISTS `sub_kategori` (
  `nID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_subkat` varchar(30) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  PRIMARY KEY (`nID`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `sub_kategori`
--

INSERT INTO `sub_kategori` (`nID`, `nama_subkat`, `id_kategori`) VALUES
(1, 'Kost', 1),
(2, 'Apartement', 1),
(3, 'Kontrakan', 1),
(4, 'Villa', 1),
(6, 'Rumah', 2),
(7, 'Ruko', 2),
(8, 'Tanah', 2),
(9, 'Hotel', 3),
(10, 'Wisata', 3),
(11, 'Tempat Nongkrong', 3),
(12, 'Pakaian', 4),
(13, 'Mainan', 4),
(15, 'Oleh-oleh', 4),
(16, 'Restoran', 5),
(17, 'Cafe', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nID` bigint(20) NOT NULL AUTO_INCREMENT,
  `strUserName` varchar(100) NOT NULL,
  `strUserPassword` varchar(100) NOT NULL,
  `strUserHash` varchar(100) DEFAULT NULL,
  `nUserPrivilege` tinyint(4) DEFAULT NULL,
  `strFLName` varchar(100) DEFAULT NULL,
  `strCoName` varchar(100) DEFAULT NULL,
  `strTelNumber` varchar(100) DEFAULT NULL,
  `strAddress` varchar(100) DEFAULT NULL,
  `strEmail` varchar(200) DEFAULT NULL,
  `strRemark` varchar(100) DEFAULT NULL,
  `API` varchar(100) DEFAULT NULL,
  `photo` varchar(255) NOT NULL,
  `skype` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `fb` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `goplus` varchar(50) NOT NULL,
  `verify_email_code` varchar(100) DEFAULT NULL,
  `bVerified` tinyint(4) DEFAULT NULL,
  `idAgen` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_operator` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`nID`),
  UNIQUE KEY `strUserName_2` (`strUserName`),
  UNIQUE KEY `strEmail` (`strEmail`),
  KEY `strUserName` (`strUserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nID`, `strUserName`, `strUserPassword`, `strUserHash`, `nUserPrivilege`, `strFLName`, `strCoName`, `strTelNumber`, `strAddress`, `strEmail`, `strRemark`, `API`, `photo`, `skype`, `phone`, `fb`, `twitter`, `goplus`, `verify_email_code`, `bVerified`, `idAgen`, `jenis_kelamin`, `create_date`, `create_operator`) VALUES
(1, 'laksana', 'ec9f4fedf9942614e0e78f177a5900d6', NULL, 1, 'Pradana Aditya Laksana', NULL, '085740358564', 'Pati City', 'aditya_pl@ymail.com', NULL, NULL, '', '', '', '', '', '', 'e5837a8c86b689fef26d33b199448a8f', 1, '', '', '2015-03-23 00:51:01', NULL),
(2, 'ricooktavianaw', '8cafeefa637127c7958d60b9fb09865d', NULL, 1, 'Rico Oktavian Adhi Wibowo', NULL, '08997839790', 'Jalan Raden Ganda Kusuma', 'infoskripsirico@gmail.com', NULL, NULL, '_2015_05_31_06_06_14.png', '', '', '', '', '', 'e5b78096eea8e03e95a4377dad0318bb', 1, '', '', '2015-05-23 23:30:06', NULL),
(5, 'mrizkysaragih', '8cafeefa637127c7958d60b9fb09865d', NULL, 1, 'Muhammad Rizky Saragih', NULL, '08997839790', 'Ciandam', 'ricooktavianadhiwbw@outlook.com', NULL, NULL, '', '', '', '', '', '', NULL, 0, '', '', '2015-05-31 07:45:42', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `properti`
--
ALTER TABLE `properti`
  ADD CONSTRAINT `properti_ibfk_1` FOREIGN KEY (`jenis_properti`) REFERENCES `sub_kategori` (`nID`);

--
-- Constraints for table `sub_kategori`
--
ALTER TABLE `sub_kategori`
  ADD CONSTRAINT `sub_kategori_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`nID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
