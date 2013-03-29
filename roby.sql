-- phpMyAdmin SQL Dump
-- version 3.4.5deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2013 at 07:31 PM
-- Server version: 5.1.67
-- PHP Version: 5.3.6-13ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `roby`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', '*58D24DFDC5B5D55D6F6A25496AB51B74AA0FF7C9'),
(5, 'muslih ferecov', 'muslih', '*58D24DFDC5B5D55D6F6A25496AB51B74AA0FF7C9');

-- --------------------------------------------------------

--
-- Table structure for table `data_jurusan`
--

CREATE TABLE IF NOT EXISTS `data_jurusan` (
  `id_jurusan` int(15) NOT NULL,
  `npsn_sekolah` int(15) NOT NULL,
  `masa_studi_dalam_tahun` int(1) NOT NULL,
  PRIMARY KEY (`id_jurusan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jurusan`
--

INSERT INTO `data_jurusan` (`id_jurusan`, `npsn_sekolah`, `masa_studi_dalam_tahun`) VALUES
(21, 3132, 2003);

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

CREATE TABLE IF NOT EXISTS `data_sekolah` (
  `no` int(3) NOT NULL AUTO_INCREMENT,
  `npsn` int(10) NOT NULL,
  `nama_sekolah` text NOT NULL,
  `jenis_sekolah` text NOT NULL,
  `kode_kabupaten` int(15) NOT NULL,
  `nama_kabupaten` text NOT NULL,
  `kode_provinsi` int(15) NOT NULL,
  `nama_provinsi` text NOT NULL,
  `akreditasi_sekolah` text NOT NULL,
  `kepemilikan` text NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`no`, `npsn`, `nama_sekolah`, `jenis_sekolah`, `kode_kabupaten`, `nama_kabupaten`, `kode_provinsi`, `nama_provinsi`, `akreditasi_sekolah`, `kepemilikan`) VALUES
(1, 3132, 'Sekolah Dodol', 'SMA', 321132, 'Tabah Bumbu', 787, 'Kalimantan Selatan', 'A', 'Kada tahu');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
