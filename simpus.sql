-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 12:03 PM
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
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time_admin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `time_admin`, `status`) VALUES
('admin', 'admin', '2019-06-25 09:03:04', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pembuatankta`
--

INSERT INTO `pembuatankta` (`id_pembuatankta`, `judul_pembuatankta`, `deskripsi_pembuatankta`, `gambar_pembuatankta`) VALUES
(1, 'Tata Cara Pembuatan Kartu Tanda Anggota (KTA) Pustaka', '1. Slip SPP terbarua\r\n\r\n2. Mengisi Formulir\r\n\r\n3. Melakukan foto langusng di tempat\r\n\r\n4. Menyerahkan biaya administrasi sebesar Rp.5000\r\n', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `sirkulasi`
--

INSERT INTO `sirkulasi` (`id_sirkulasi`, `judul_sirkulasi`, `deskripsi_sirkulasi`, `gambar_sirkulasi`) VALUES
(1, 'Tata Cara Peminjaman Koleksi Buku', '1. Meminjam secara mandiri melalui alat peminjaman yang berada di depan meja sirkulasi.\r\n\r\n2. Batas waktu pengembalian selama 7 hari setelah buku dipinjam.\r\n\r\n3. Jumlah buku yang dapat pinjam sebanyak 3 buku untuk mahasiswa S1, 5 buku untuk mahasiswa S2 dan S3.', ''),
(2, 'Tata Cara Pengembalian Koleksi Buku', '1. Mengembalikan buku yang sudah dipinjam melalui alat sort assistant yang berada di meja sirkulasi.\r\n\r\n2. Memperlihatkan Kartu Tanda Anggota Perpustakaan kepada petugas untuk diperiksa.\r\n\r\n3. Apabila terlambat mengembalikan buku maka mahasiswa wajib membayar denda Rp. 500 perhari persatu buku yang dipinjam. ', ''),
(3, 'Tata Cara Perpanjangan Buku yang telah dipinjam', '1. Mengembalikan buku yang sudah dipinjam melalui alat sort assistant yang berada di meja sirkulasi.\r\n\r\n2. Memperlihatkan Kartu Tanda Anggota Perpustakaan kepada petugas untuk diperiksa.\r\n\r\n3. Apabila terlambat mengembalikan buku maka mahasiswa wajib membayar denda Rp. 500 perhari persatu buku yang dipinjam.\r\n\r\n4. Melakukan peminjaman kembali secara mandiri dengan alat peminjaman yang berada di depan meja sirkulasi dengan batas waktu pengembalian selama 7 hari.', '');

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
