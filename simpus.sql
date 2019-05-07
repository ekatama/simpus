-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 07:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `pembuatanbebas`
--

CREATE TABLE IF NOT EXISTS `pembuatanbebas` (
  `id_pembuatanbebas` int(11) NOT NULL AUTO_INCREMENT,
  `judul_pembuatanbebas` varchar(255) NOT NULL,
  `deskripsi_pembuatanbebas` varchar(1000) NOT NULL,
  `gambar_pembuatanbebas` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pembuatanbebas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pembuatankta`
--

CREATE TABLE IF NOT EXISTS `pembuatankta` (
  `id_pembuatankta` int(11) NOT NULL AUTO_INCREMENT,
  `judul_pembuatankta` varchar(255) NOT NULL,
  `deskripsi_pembuatankta` varchar(1000) NOT NULL,
  `gambar_pembuatankta` varchar(255) NOT NULL,
  PRIMARY KEY (`id_pembuatankta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pembuatankta`
--

INSERT INTO `pembuatankta` (`id_pembuatankta`, `judul_pembuatankta`, `deskripsi_pembuatankta`, `gambar_pembuatankta`) VALUES
(1, 'Tata Cara Pembuatan Kartu Tanda Anggota (KTA) Pustaka', '1. Slip SPP terbaru\n\n2. Mengisi Formulir\n\n3. Melakukan foto langusng di tempat\n\n4. Menyerahkan biaya administrasi sebesar Rp.5000\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `peminjamanref`
--

CREATE TABLE IF NOT EXISTS `peminjamanref` (
  `id_peminjamanref` int(11) NOT NULL AUTO_INCREMENT,
  `judul_peminjamanref` varchar(255) NOT NULL,
  `deskripsi_peminjamanref` varchar(1000) NOT NULL,
  `gamar_peminjamanref` varchar(255) NOT NULL,
  PRIMARY KEY (`id_peminjamanref`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sirkulasi`
--

CREATE TABLE IF NOT EXISTS `sirkulasi` (
  `id_sirkulasi` int(11) NOT NULL AUTO_INCREMENT,
  `judul_sirkulasi` varchar(255) NOT NULL,
  `deskripsi_sirkulasi` varchar(1000) NOT NULL,
  `gambar_sirkulasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sirkulasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `uploadrepository`
--

CREATE TABLE IF NOT EXISTS `uploadrepository` (
  `id_uploadrepository` int(11) NOT NULL AUTO_INCREMENT,
  `judul_uploadrepository` varchar(255) NOT NULL,
  `deskripsi_uploadrepository` varchar(1000) NOT NULL,
  `gambar_uploadrepository` varchar(255) NOT NULL,
  PRIMARY KEY (`id_uploadrepository`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
