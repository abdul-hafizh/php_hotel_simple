-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2015 at 09:16 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kamar`
--

CREATE TABLE IF NOT EXISTS `jenis_kamar` (
  `id` int(3) NOT NULL,
  `jenis_kamar` varchar(30) NOT NULL,
  `harga` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kamar`
--

INSERT INTO `jenis_kamar` (`id`, `jenis_kamar`, `harga`) VALUES
(1, 'V-VIP', 950000),
(2, 'VIP', 800000),
(3, 'Standar', 550000);

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `id` int(11) NOT NULL,
  `jenis_id` int(11) DEFAULT NULL,
  `nomor` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id`, `jenis_id`, `nomor`, `status`) VALUES
(1, 1, 1, 0),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 0),
(6, 2, 6, 1),
(7, 2, 7, 1),
(8, 2, 8, 0),
(9, 2, 9, 1),
(10, 2, 10, 1),
(11, 3, 11, 0),
(12, 3, 12, 1),
(13, 3, 13, 1),
(14, 3, 14, 1),
(15, 3, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE IF NOT EXISTS `pemesan` (
  `id` int(3) NOT NULL,
  `jenis_kamar` varchar(10) NOT NULL,
  `cbnomor` int(2) NOT NULL,
  `nomoridentitas` char(10) NOT NULL,
  `namalengkap` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phonenumber` char(12) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Reserved'
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id`, `jenis_kamar`, `cbnomor`, `nomoridentitas`, `namalengkap`, `email`, `phonenumber`, `checkin`, `checkout`, `status`) VALUES
(42, 'V-VIP', 3, '1283938197', 'Yusuf', 'yusuf@gmail.com', '098775746747', '2015-12-16', '2015-12-23', 'Reserved'),
(43, 'VIP', 6, '1367875786', 'Agos', 'agos@gmail.com', '087868696878', '2015-12-23', '2015-12-31', 'Reserved'),
(44, 'Standar', 13, '1728272817', 'Ardi', 'ardi@gmail.com', '087563566734', '2015-12-23', '2015-12-30', 'Reserved'),
(45, 'VIP', 10, '1388892738', 'Volta', 'volta@yahoo.com', '085672737378', '2015-12-30', '2016-01-02', 'Reserved'),
(46, 'Standar', 14, '1829383388', 'shinta', 'shinta@gmail.com', '08753633728', '2015-12-23', '2015-12-31', 'Reserved'),
(47, 'V-VIP', 2, '1526363737', 'Rizki', 'rizki@gmail.com', '097773738388', '2015-12-23', '2015-12-24', 'Reserved'),
(48, 'VIP', 9, '1827283838', 'Pandu', 'pandu@gmail.com', '098737373838', '2015-12-24', '2015-12-30', 'Reserved'),
(49, 'VIP', 7, '1627273838', 'Heru', 'heru@gmail.com', '09896857578', '2015-12-24', '2015-12-30', 'Reserved'),
(50, 'V-VIP', 4, '1228838383', 'Nopal', 'nopal@gmail.com', '098636364646', '2015-12-23', '2015-12-24', 'Reserved'),
(51, 'Standar', 12, '1938383747', 'Sapto', 'sapto@gmail.com', '096367363267', '2015-12-23', '2015-12-30', 'Reserved');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kamar`
--
ALTER TABLE `jenis_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomoridentitas` (`nomoridentitas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
