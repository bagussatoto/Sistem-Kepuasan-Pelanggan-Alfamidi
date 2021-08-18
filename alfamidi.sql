-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 04:53 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alfamidi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'user', 'user', 'user'),
(3, 'pt', 'pt', 'perusahaan');

-- --------------------------------------------------------

--
-- Table structure for table `identitas_koresponden`
--

CREATE TABLE `identitas_koresponden` (
  `id` int(11) NOT NULL,
  `timestampt` varchar(50) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `usia` varchar(50) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `v1p1` varchar(255) DEFAULT NULL,
  `v1p2` varchar(255) DEFAULT NULL,
  `v1p3` varchar(255) DEFAULT NULL,
  `v1p4` varchar(255) DEFAULT NULL,
  `v2p1` varchar(255) DEFAULT NULL,
  `v2p2` varchar(255) DEFAULT NULL,
  `v2p3` varchar(255) DEFAULT NULL,
  `v2p4` varchar(255) DEFAULT NULL,
  `v3p1` varchar(255) DEFAULT NULL,
  `v3p2` varchar(255) DEFAULT NULL,
  `v3p3` varchar(255) DEFAULT NULL,
  `v3p4` varchar(255) DEFAULT NULL,
  `v4p1` varchar(255) DEFAULT NULL,
  `v4p2` varchar(255) DEFAULT NULL,
  `v4p3` varchar(255) DEFAULT NULL,
  `v4p4` varchar(255) DEFAULT NULL,
  `v5p1` varchar(255) DEFAULT NULL,
  `v5p2` varchar(255) DEFAULT NULL,
  `v5p3` varchar(255) DEFAULT NULL,
  `v5p4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `identitas_koresponden`
--

INSERT INTO `identitas_koresponden` (`id`, `timestampt`, `nama`, `email`, `jenis_kelamin`, `usia`, `pekerjaan`, `v1p1`, `v1p2`, `v1p3`, `v1p4`, `v2p1`, `v2p2`, `v2p3`, `v2p4`, `v3p1`, `v3p2`, `v3p3`, `v3p4`, `v4p1`, `v4p2`, `v4p3`, `v4p4`, `v5p1`, `v5p2`, `v5p3`, `v5p4`) VALUES
(25, '19/08/2019 18:05:19', 'Maya', 'mayasyaroh1412@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(26, '19/08/2019 18:08:33', 'Nita', 'Anitasofyan270@gmail.com', 'Perempuan', '>25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Puas'),
(27, '19/08/2019 18:14:42', 'Vivianti', 'vivirivai56@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas'),
(28, '19/08/2019 18:26:15', 'Khairunnisa Fitri', 'Khairunnisafutri61@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Tidak puas', 'Puas', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral'),
(29, '19/08/2019 19:47:34', 'Choirul Iqbal Nuril Ilahi', 'iqbalilahi7@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Sangat puas'),
(30, '19/08/2019 19:49:09', 'Hari Avrianto', 'h.avrianto27@gmail.com ', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(31, '19/08/2019 19:52:49', 'Rafi', 'rafizulkifli1@gmail.com ', 'Laki-laki', '>25tahun', 'wiraswasta', 'Netral', 'Netral', 'Puas', 'Sangat puas', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Tidak puas', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral'),
(32, '19/08/2019 20:06:50', 'Syahrul Ataufik', 'syahrulataufikaja11@gmail.com', 'Laki-laki', '17-20tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Puas', 'Sangat puas', 'Netral'),
(33, '19/08/2019 20:07:31', 'Luffy Madinatul SIddiq', 'luffymadinatulsiddiq@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(34, '19/08/2019 20:09:31', 'Rafi zulkifli', 'rafizulkifli1@gmail.com ', 'Laki-laki', '>25tahun', 'wiraswasta', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral'),
(35, '19/08/2019 20:20:40', 'Elin', 'elinyulia25@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral'),
(36, '19/08/2019 20:25:11', 'Fatya Rahmah Farihah', 'fatyarahmah99@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Netral', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Netral'),
(37, '19/08/2019 20:32:02', 'Sande', 'yanuarsandey28@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral'),
(38, '19/08/2019 20:35:14', 'Yamin Saputra', 'yamin.saputra27@gmail.com', 'Laki-laki', '17-20tahun', 'pelajar/mahasiswa', 'Tidak puas', 'Sngat tidak puas', 'Netral', 'Tidak puas', 'Puas', 'Netral', 'Netral', 'Puas', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat tidak puas', 'Netral', 'Netral'),
(39, '19/08/2019 20:37:04', 'Lina', 'dwicahya.erlin@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak puas', 'Netral', 'Netral', 'Sangat puas', 'Netral', 'Sangat puas', 'Puas'),
(40, '19/08/2019 20:45:38', 'Ahmad baydowi', 'ahmadbaydowi88@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral'),
(41, '19/08/2019 20:45:59', 'Burhan praditya', 'praditya.burhan@gmail.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Tidak puas', 'Netral', 'sangat tidak puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Tidak puas', 'Puas', 'Sangat puas'),
(42, '19/08/2019 21:17:40', 'sintia', 'sintiaapriliani018@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Tidak puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Tidak puas', 'Puas', 'Tidak puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Tidak puas', 'Tidak puas'),
(43, '19/08/2019 21:50:54', 'Dedi Prasetio', 'dediprasetio03@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Sangat puas'),
(44, '19/08/2019 21:55:22', 'Ninik Nur W', 'Niniknuwii091@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Netral', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas'),
(45, '19/08/2019 22:01:20', 'Desi kuryani', 'Desikuryani@yahoo.co.id', 'Perempuan', '>25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(46, '19/08/2019 22:02:11', 'Eki abriansyah rachman', 'ekiabriansyah@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Tidak puas', 'Tidak puas', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Tidak puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas'),
(47, '19/08/2019 22:07:07', 'Ayu aprillia wahyuni', 'Ayuaprillia1997@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Sangat puas', 'Puas', 'Netral'),
(48, '19/08/2019 22:11:06', 'Ahmad', 'Ahmadfadloli93@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(49, '19/08/2019 22:13:45', 'Afif Farhan Muhammad ', 'afiffarhanmuhammad@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Tidak puas', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral'),
(50, '19/08/2019 22:19:07', 'Sayyid abdul aziz', 'sayyid.aziz01@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral'),
(51, '19/08/2019 22:19:35', 'Helma Rubiyani', 'agusgss45@gmail.com', 'Perempuan', '21-25tahun', 'Ibu rumah tangga wirausaha', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Sangat tidak puas', 'Netral', 'Netral', 'Tidak puas'),
(52, '19/08/2019 22:20:14', 'Asep saprudin', 'Asepsaprudin42@gmail.con', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Tidak puas', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Tidak puas', 'Tidak puas', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Tidak puas', 'Netral'),
(53, '19/08/2019 22:26:51', 'Dck', 'Dickiadi31@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Tidak puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas'),
(54, '19/08/2019 22:27:20', 'Deka hisbulwatton', 'Hisbulhawai@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(55, '19/08/2019 22:33:54', 'Huday', 'hudahuday75@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(56, '19/08/2019 22:40:02', 'Aisyah Gaya Tri', 'aisyah97.agt@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Puas', 'Netral', 'Netral', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas'),
(57, '19/08/2019 22:59:01', 'Fajar patriansyah', 'Fajarpatriansah@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Sangat puas', 'Puas', 'Tidak puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Sangat puas'),
(58, '19/08/2019 23:13:30', 'Sandy', 'maulanasandy43@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(59, '19/08/2019 23:25:59', 'Ricky', 'Rickyandreatriyanto@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Tidak puas', 'Netral', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Tidak puas'),
(60, '20/08/2019 0:38:24', 'Lidya Septiani', 'lidyaseptiani08@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(61, '20/08/2019 0:44:47', 'Ahmad duhroni', 'ahmadduhroni@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Puas', 'Tidak puas', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Tidak puas', 'Netral', 'Tidak puas', 'Puas', 'Tidak puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Tidak puas', 'Puas', 'Tidak puas'),
(62, '20/08/2019 0:56:52', 'Nurani', 'raninurani414@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Netral', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Tidak puas', 'Netral', 'Sangat puas'),
(63, '20/08/2019 6:13:57', 'Ega mahendra', 'egamahendraaa@gmail.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Puas', 'Tidak puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Netral', 'Sangat puas'),
(64, '20/08/2019 7:28:57', 'Ita', 'Anitasofyan270@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(65, '20/08/2019 7:39:57', 'Intan pratiwi', 'pratiwii432@gmail.com', 'Perempuan', '17-20tahun', 'karyawan swasta', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak puas', 'Puas', 'Netral', 'Tidak puas', 'Netral', 'Puas'),
(66, '20/08/2019 7:53:15', 'Nurani', 'raninurani414@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Sangat puas', 'Puas', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(67, '20/08/2019 7:54:09', 'Dina', 'Tania123@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Netral', 'Sangat puas', 'Puas', 'Sangat puas'),
(68, '20/08/2019 8:01:50', 'Sopyan saori', 'Sofyanis.2728@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(69, '20/08/2019 8:04:16', 'Agin Gunawan', 'agingunawan95@gmail.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(70, '20/08/2019 8:10:57', 'Fitri', 'Jimbiltimbil@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(71, '20/08/2019 8:19:08', 'erwin rifki sunardi', 'erwinrifki22@gmail.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Tidak puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Netral', 'Puas', 'Puas', 'Sangat puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Sangat puas'),
(72, '20/08/2019 10:08:42', 'Dini purnamasari', 'Dinipurnamasari2409@gmail.com', 'Perempuan', '>25tahun', 'IRT', 'Tidak puas', 'Tidak puas', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(73, '20/08/2019 10:52:41', 'Fitri', 'syafitriyani28@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Netral', 'Puas', 'Puas'),
(74, '20/08/2019 11:15:44', 'Liya susilowati', 'Liyasusilowati1001@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Puas', 'Puas'),
(75, '20/08/2019 13:27:49', 'Liyana', 'liyanaindahst@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral'),
(76, '20/08/2019 13:31:07', 'Muhamad Rafli', 'raflitby@gmail.com', 'Laki-laki', '17-20tahun', 'pelajar/mahasiswa', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas'),
(77, '20/08/2019 16:31:53', 'Rivaldi Adhitya Putra', 'rivaldiputra2310@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral'),
(78, '20/08/2019 16:49:31', 'Niken ayu citra', 'nikenayucitra155@gmail.com', 'Perempuan', '<17 tahun', 'wiraswasta', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral'),
(79, '20/08/2019 16:49:49', 'Niken ayu citra', 'nikenayucitra155@gmail.com', 'Perempuan', '<17 tahun', 'wiraswasta', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral'),
(80, '20/08/2019 17:16:43', 'Doni hutama', 'Doni.hutama@yahoo.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(81, '20/08/2019 17:36:17', 'Aris irsandi', 'Aris.kicrn@gmail.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(82, '20/08/2019 17:54:12', 'Gilang', 'Gilangsugih19@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral'),
(83, '20/08/2019 18:04:14', 'Jaya', 'Murjaya1304@gmail.com', 'Laki-laki', '>25tahun', 'Wirausaha', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas'),
(84, '20/08/2019 18:40:43', 'Wiwit ', 'whiwit.wijaya23@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral'),
(85, '20/08/2019 18:43:34', 'Nurul Nadia ', 'Nurul.tkd@gmail.com', 'Perempuan', '17-20tahun', 'pelajar/mahasiswa', 'Tidak puas', 'Tidak puas', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Tidak puas', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(86, '21/08/2019 0:24:51', 'Eti rosmiatin', 'Etirosmiatin@yahoo.com', 'Perempuan', '>25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral'),
(87, '21/08/2019 7:39:55', 'Ahmad Nabrih', 'ahmadnabrih2000@gmail.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Tidak puas'),
(88, '21/08/2019 20:17:16', 'Ita', 'Anitaajja@gmail.com', 'Perempuan', '17-20tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Tidak puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(89, '21/08/2019 20:18:32', 'Sari', 'Sarinaini@gmail.com', 'Perempuan', '>25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat tidak puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak puas', 'Sangat puas', 'Puas'),
(90, '21/08/2019 20:22:49', 'Dian', 'Dianayu123@gmail.com', 'Perempuan', '>25tahun', 'pelajar/mahasiswa', 'Puas', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(91, '21/08/2019 20:25:23', 'Indri agustian', 'Bayuandriyansah@ymail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', '', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(92, '21/08/2019 20:29:14', 'Denny fernando', 'Denny_fernando@gmail.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Tidak puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas'),
(93, '21/08/2019 20:30:48', 'Pera', 'Rikopera@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Sangat tidak puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral'),
(94, '21/08/2019 20:43:55', 'Tulus ', 'tulusb20@gmail.com', 'Laki-laki', '17-20tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(95, '21/08/2019 20:50:51', 'Dedi', 'Dedi@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Tidak puas', 'Puas'),
(96, '21/08/2019 21:08:05', 'Desi', 'Desiaja@gmail.com', 'Perempuan', '>25tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas'),
(97, '21/08/2019 21:09:06', 'Gani anjani', 'Ganianjani56@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(98, '21/08/2019 21:10:01', 'Maya', 'mayasyaroh1412@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(99, '21/08/2019 21:12:18', 'Ika', 'Ika@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Puas'),
(100, '21/08/2019 21:13:57', 'Deri', 'Deri@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral'),
(101, '21/08/2019 21:17:11', 'Wahyu', 'Wahyu@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral'),
(102, '21/08/2019 21:18:13', 'Melli', 'Meli@gmail.com', 'Perempuan', '>25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas'),
(103, '21/08/2019 21:19:34', 'Dendi', 'Dendi@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral'),
(104, '21/08/2019 21:21:22', 'Debi', 'Debi@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Netral', 'Netral', 'Netral'),
(105, '21/08/2019 21:23:20', 'Uyuwahyudin', 'Uyuwahyudin@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral'),
(106, '21/08/2019 21:25:44', 'Destri', 'Destri@gmail.com', 'Perempuan', '17-20tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas'),
(107, '21/08/2019 21:28:50', 'Yuni', 'Yuni@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral'),
(108, '21/08/2019 21:30:53', 'Devi', 'Devi@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(109, '21/08/2019 21:37:02', 'Bayu', 'Bayu@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(110, '21/08/2019 22:02:30', 'Yudiono', 'Yudiono@gmail.com', 'Laki-laki', '21-25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(111, '21/08/2019 22:18:46', 'Ida', 'Ida@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas'),
(112, '21/08/2019 22:19:45', 'Dila', 'Dila@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(113, '21/08/2019 22:20:58', 'Afifa', 'Afifa123@gmail.com', 'Perempuan', '17-20tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(114, '21/08/2019 22:22:04', 'Rara', 'Raraaja@gmail.com', 'Perempuan', '17-20tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(115, '21/08/2019 22:41:31', 'Yudhi Juliyanto', 'Yudhi.juliyanto1@gmail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas'),
(116, '22/08/2019 10:57:22', 'Eki', 'Ekialfian@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(117, '22/08/2019 10:56:22', 'Debi', 'Debi@gmail.com', 'Perempuan', '>25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(118, '22/08/2019 10:58:27', 'Iskandar', 'Iskandar@gmail.con', 'Laki-laki', '>25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(119, '22/08/2019 10:59:34', 'Jonii', 'Joniii@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Sangat puas', 'Netral', 'Sangat puas'),
(120, '22/08/2019 11:00:50', 'Ahmad', 'Ahmadmamad@gnail.com', 'Laki-laki', '21-25tahun', 'pelajar/mahasiswa', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat tidak puas'),
(121, '22/08/2019 11:02:03', 'Iin', 'Iinanwar@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(122, '22/08/2019 11:03:03', 'Oki', 'Okiaja@gmail.com', 'Perempuan', '17-20tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas'),
(123, '22/08/2019 11:04:32', 'Doni agung', 'Doniagung588@gmail.com', 'Laki-laki', '<17 tahun', 'pelajar/mahasiswa', 'Puas', 'Netral', 'Netral', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas'),
(124, '22/08/2019 11:05:39', 'Obi', 'Obiom@gmail.com', 'Laki-laki', '17-20tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(125, '23/08/2019 22:40:48', 'Obi', 'Obiobi@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(126, '23/08/2019 22:41:50', 'Devia', 'Deviasari@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(127, '23/08/2019 22:42:47', 'Heru', 'Herudanu', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Sangat tidak puas', 'Tidak puas', 'Tidak puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Netral'),
(128, '23/08/2019 22:45:16', 'Anita nita', 'Anitanita123@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Netral', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas'),
(129, '23/08/2019 22:46:30', 'Diah ayu', 'Diahayu@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas'),
(130, '23/08/2019 22:47:43', 'Wahyu uyu', 'Wahyudinuyu@gmail.com', 'Perempuan', '21-25tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral'),
(131, '23/08/2019 22:49:23', 'Ani', 'Anivirginia@gmail.com', 'Perempuan', '17-20tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(132, '23/08/2019 22:50:26', 'Cinta', 'Cintacinta@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'sangat tidak puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(133, '23/08/2019 22:51:59', 'Doni Yolanda putra', 'Doniyolandayolanda@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(134, '23/08/2019 22:53:19', 'Danni', 'Danidani@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(135, '23/08/2019 22:54:19', 'Jihan', 'Jihan@gmail.com', 'Perempuan', '17-20tahun', 'pelajar/mahasiswa', 'Sangat tidak puas', 'Sngat tidak puas', 'sangat tidak puas', 'Sangat tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Sangat tidak puas', 'Sangat tidak puas', 'Sangat tidak puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(136, '23/08/2019 22:55:20', 'Yopi', 'Yopi@gmail.con', 'Perempuan', '21-25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Puas', 'Netral', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Tidak puas', 'Puas', 'Sangat tidak puas'),
(137, '23/08/2019 22:56:14', 'Nandang', 'Nandang@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Netral', 'Puas', 'Sangat puas', 'Netral', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat tidak puas', 'Tidak puas', 'Tidak puas', 'Sangat tidak puas', 'Sangat tidak puas', 'Netral', 'Tidak puas', 'Tidak puas', 'Sangat tidak puas'),
(138, '23/08/2019 22:57:51', 'Jaka kelana', 'Jakakelana123@gmail.com', 'Laki-laki', '17-20tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Tidak puas', 'Tidak puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(139, '23/08/2019 22:58:58', 'Muhamad fikri', 'Muhammadfikiri@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat tidak puas', 'Tidak puas', 'Sangat puas', 'Sangat puas', 'Tidak puas', 'Tidak puas', 'Sangat puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Netral', 'Sangat puas', 'Sangat tidak puas', 'Tidak puas', 'Sangat tidak puas', 'Sangat tidak puas'),
(140, '23/08/2019 23:00:00', 'Zikri', 'Zikri@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Tidak puas', 'Netral', 'Tidak puas', 'Tidak puas', 'Tidak puas', '', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Sangat puas', 'Sangat puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Sangat puas', 'Sangat tidak puas', 'Netral', 'Netral', 'Netral'),
(141, '23/08/2019 23:01:25', 'Dwiki sputra', 'Dwikisaputra@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Tidak puas', 'Netral', 'Netral', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Sangat puas', 'Sangat tidak puas', 'Netral', 'Tidak puas', 'Tidak puas'),
(142, '24/08/2019 17:33:52', 'Dera', 'Deraoktavi@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(143, '24/08/2019 17:35:10', 'Didi saputra', 'Didisaputra@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', '', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(144, '24/08/2019 17:38:42', 'Dodi firmansyah', 'Dosifirmansyah@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(145, '24/08/2019 17:41:41', 'Satiri ahmad', 'Satiriahmad@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas'),
(146, '24/08/2019 17:46:07', 'Zaenal', 'Zaenalzaenal@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(147, '24/08/2019 17:47:50', 'Rizki', 'Rizkisaputra@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(148, '24/08/2019 17:48:50', 'Sri', 'Sriningsihningsih@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(149, '24/08/2019 17:50:40', 'Dani', 'Danidani@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(150, '24/08/2019 17:51:44', 'Icha', 'Ichaicha@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(151, '24/08/2019 17:52:48', 'Tri udaya', 'Tri udaya@gmail.com', 'Perempuan', '<17 tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(152, '24/08/2019 17:54:05', 'Qoriyatun', 'Qoriyatun@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(153, '24/08/2019 17:55:17', 'Tania susanti', 'Taniasusanti@gmail.com', 'Perempuan', '>25tahun', 'karyawan swasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(154, '24/08/2019 17:58:44', 'Desi', 'Dessy@gmail.com', 'Perempuan', '>25tahun', 'pelajar/mahasiswa', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(155, '24/08/2019 18:00:20', 'Dila angraini', 'Dilaangraini@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas'),
(156, '24/08/2019 18:03:04', 'OKI agusti', 'Okiagustia@gmail.com', 'Perempuan', '17-20tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Puas', 'Puas', 'Netral', 'Puas'),
(157, '24/08/2019 18:04:31', 'Dea Puspita sari', 'Deapuspitasari@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(158, '24/08/2019 18:06:16', 'Candra winata', 'Candrawinata@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak puas'),
(159, '24/08/2019 18:07:26', 'Mila', 'Milamila@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Tidak puas', 'Tidak puas', 'Netral'),
(160, '24/08/2019 18:08:39', 'Dekat yukika', 'Dekayukikachan@gmail.com', 'Perempuan', '>25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(161, '24/08/2019 18:09:42', 'Dendi', 'Dendi@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(162, '24/08/2019 18:14:45', 'Sugeng', 'Sugeng@gmail.com', 'Laki-laki', '<17 tahun', 'pelajar/mahasiswa', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(163, '24/08/2019 18:15:52', 'Uncu bambang', 'Uncubambang@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas'),
(164, '24/08/2019 18:17:41', 'Kiki susanti', 'Susantikiki@gmail.com', 'Perempuan', '>25tahun', 'karyawan swasta', 'Puas', 'Tidak puas', 'Puas', 'Puas', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(165, '24/08/2019 18:19:00', 'Afrika hermawan', 'Afikahermawan@gmail.com', 'Perempuan', '<17 tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas'),
(166, '24/08/2019 18:20:12', 'Lili', 'Lililislis@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Netral', 'Netral', 'Tidak puas', 'Tidak puas'),
(167, '24/08/2019 18:21:15', 'Sela susanti', 'Selasusanti@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral'),
(168, '24/08/2019 18:22:10', 'Kurnia', 'Kurnia@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(169, '24/08/2019 18:29:14', 'Cinta', 'Cintaaja@gmail.com', 'Perempuan', '21-25tahun', 'wiraswasta', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Netral', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(170, '24/08/2019 18:30:11', 'Denada', 'Denada@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat tidak puas', 'Netral', 'Sangat tidak puas', 'Sangat tidak puas', 'Tidak puas', 'Sangat tidak puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Tidak puas', 'Tidak puas', 'Tidak puas'),
(171, '24/08/2019 18:32:10', 'Juri', 'Juriah@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(172, '24/08/2019 21:00:33', 'Juanda', 'Juanda@gmail.com', 'Laki-laki', '21-25tahun', 'wiraswasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Netral', 'Netral', 'Netral'),
(173, '24/08/2019 21:02:41', 'Ilham', 'Ilhamadi@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Netral', 'Netral', 'Puas'),
(174, '24/08/2019 21:04:36', 'Nike', 'Nike@gmail.com', 'Perempuan', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas'),
(175, '24/08/2019 21:07:07', 'Dika', 'Dika@gmail.com', 'Laki-laki', '>25tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas'),
(176, '24/08/2019 21:09:55', 'Didi saputra', 'Didisaputra@gmail.com', 'Perempuan', '>25tahun', 'karyawan swasta', 'Tidak puas', 'Tidak puas', 'Netral', 'Netral', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Puas', 'Sangat puas', 'Puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Tidak puas');
INSERT INTO `identitas_koresponden` (`id`, `timestampt`, `nama`, `email`, `jenis_kelamin`, `usia`, `pekerjaan`, `v1p1`, `v1p2`, `v1p3`, `v1p4`, `v2p1`, `v2p2`, `v2p3`, `v2p4`, `v3p1`, `v3p2`, `v3p3`, `v3p4`, `v4p1`, `v4p2`, `v4p3`, `v4p4`, `v5p1`, `v5p2`, `v5p3`, `v5p4`) VALUES
(177, '24/08/2019 21:11:04', 'Reli', 'Reliansyah@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Puas', 'Sangat puas', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas'),
(178, '24/08/2019 21:12:18', 'Roli marliza', 'Rolimarlizamarliza@gmail.com', 'Perempuan', '<17 tahun', 'pelajar/mahasiswa', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Tidak puas', 'Netral', 'Netral', 'Netral', 'Netral', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Puas', 'Netral', 'Puas'),
(179, '24/08/2019 21:13:23', 'Wahyudin uyu', 'Wahyudinway@gmail.com', 'Laki-laki', '>25tahun', 'karyawan swasta', 'Tidak puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(180, '24/08/2019 21:15:22', 'Reza pramana', 'Fezapramana@gmail.com', 'Laki-laki', '<17 tahun', 'pelajar/mahasiswa', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas'),
(181, '24/08/2019 21:43:43', 'Juni', 'Juni@gmail.com', 'Perempuan', '21-25tahun', 'karyawan swasta', 'Tidak puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Netral', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(182, NULL, 'mmm', 'mmm', 'Perempuan', '17-20tahun', 'wiraswasta', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas'),
(183, NULL, 'adittttt', 'adit@gmail.com', 'Laki-laki', '<17 tahun', 'karyawan swasta', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Sangat puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas', 'Puas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identitas_koresponden`
--
ALTER TABLE `identitas_koresponden`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `identitas_koresponden`
--
ALTER TABLE `identitas_koresponden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
