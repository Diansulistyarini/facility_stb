-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2020 at 02:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `plant`
--

CREATE TABLE `plant` (
  `id` int(11) NOT NULL,
  `nama_tanaman` varchar(50) NOT NULL,
  `nama_latin` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plant`
--

INSERT INTO `plant` (`id`, `nama_tanaman`, `nama_latin`, `date`, `lokasi`, `jumlah`, `kondisi`) VALUES
(1, 'Sirih Gading', 'Epipremnum Aureum', 'Sekitar tahun 2018', 'Di depan R.Litbang', 7, 'Subur'),
(2, 'Sirih Gading(2)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R. RPL Med', 16, 'Subur'),
(3, 'Sirih Gading(3)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan Perpustakaan', 8, 'Subur'),
(4, 'Sirih Gading(4)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan MM Adv', 18, 'Subur'),
(5, 'Sirih Gading(5)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R.15', 8, 'Subur'),
(6, 'Sirih Gading(6)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R.14', 20, 'Subur'),
(7, 'Sirih Gading(7)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R.13', 18, 'Subur'),
(8, 'Sirih Gading(8)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R.11', 9, 'Subur'),
(9, 'Sirih Gading(9)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R.10', 17, 'Subur'),
(10, 'Sirih Gading(10)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R.9', 21, 'Subur'),
(11, 'Sirih Gading(11)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R.7', 8, 'Subur'),
(12, 'Sirih Gading(12)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan R.6', 16, 'Subur'),
(13, 'Sirih Gading(13)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan r.5', 16, 'Subur'),
(14, 'Sirih Gading(14)', 'Epipremnum Aureum', 'Sekitar tahun 2019', 'Di depan Tata Usaha', 20, 'Subur'),
(15, 'Lee Kwan Yew', 'Vernonia Elliptica', 'Sekitar tahun 2019', 'Di depan R.13', 18, 'Subur'),
(16, 'Lee Kwan Yew(2)', 'Vernonia Elliptica', 'Sekitar tahun 2019', 'Di depan R.14', 14, 'Subur'),
(17, 'Lee Kwan Yew(3)', 'Vernonia Elliptica', 'Sekitar tahun 2019', 'Di depan R.15', 5, 'Subur'),
(18, 'Lee Kwan Yew(4)', 'Vernonia Elliptica', 'Sekitar tahun 2019', 'Di depan R.11', 8, 'Subur'),
(19, 'Lee Kwan Yew(5)', 'Vernonia Elliptica', 'Sekitar tahun 2019', 'Di depan R.10', 16, 'Subur'),
(20, 'Lee Kwan Yew(6)', 'Vernonia Elliptica', 'Sekitar tahun 2019', 'Di depan R.9', 8, 'Subur'),
(21, 'Pucuk Merah', 'Syzygium Panicaltum', 'Sekitar tahun 2019', 'Di depan R.9', 2, 'Subur'),
(22, 'Pucuk Merah(2)', 'Syzygium Panicaltum', 'Sekitar tahun 2019', 'Di depan R.7', 8, '6 subur, 2 kurang su'),
(23, 'Pucuk Merah(3)', 'Syzygium Panicaltum', 'Sekitar tahun 2019', 'Di depan R.6', 16, '15 subur, 1 mati'),
(24, 'Pucuk Merah(4)', 'Syzygium Panicaltum', 'Sekitar tahun 2019', 'Di depan R.5', 15, 'Subur'),
(25, 'Pinang', 'Areca Catechu', 'Sekitar tahun 2016', 'Area Mushola', 5, 'Subur'),
(26, 'Kemuning', 'Murraya Paniculata', 'Sekitar tahun 2017', 'Area Depan Mushola', 1, 'Subur'),
(27, 'Kemuning(2)', 'Murraya Paniculata', 'Sekitar tahun 2015', 'Area Gerbang', 2, 'Subur'),
(28, 'Pucuk Merah(5)', 'Syzygium Paniculataum', 'Sekitar tahun 2018', 'Di depan R.Guru SMP', 18, 'Subur'),
(29, 'Jambu Air', 'Syzyium Aqueum', 'Sekitar tahun 2010', 'Area Gerbang', 1, 'Subur'),
(30, 'Paku Sarang Burung', 'Asplenium Nidus', 'Sekitar tahun 2019', 'Di depan R.Guru', 7, 'Subur'),
(31, 'Rambutan', 'Nephelium Lappaceum', 'Sekitar tahun 2015', 'Di depan R.Guru', 1, 'Subur'),
(32, 'Cemara', 'Casurinaceae', 'Sekitar tahun 2019', 'Di tempat wudhu wanita', 1, 'Subur'),
(33, 'Cemara(2)', 'Casurinaceae', 'Sekitar tahun 2019', 'Di depan R.Guru', 1, 'Subur'),
(34, 'Palem Kuning ', 'Areca Palm ', 'Sekitar tahun 2019', 'Di tempat wudhu wanita', 2, 'Subur'),
(35, 'Mengkudu', 'Morinda Citrifolia', 'Sekitar tahun 2016', 'Area Gerbang', 1, 'Subur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `plant`
--
ALTER TABLE `plant`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
