-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2019 at 10:14 PM
-- Server version: 10.1.41-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ispa`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` int(11) NOT NULL,
  `judul_album` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` varchar(30) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi_artikel` text NOT NULL,
  `gambar_id` varchar(50) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `hit_view` int(11) NOT NULL,
  `penulis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi_artikel`, `gambar_id`, `tanggal`, `hit_view`, `penulis`) VALUES
('5d87bb89918ad', 'Ikan Cupang', '<p>ini namanya ikan cupang<br></p>', '5d87bb89918ba', 1569176457, 1, 'admin'),
('5d8f5ae95888f', 'Cupang Gratis 2', '<p style=\"text-align: justify;\"><span style=\"font-size: 14px;\">jkvkvbbkkkkk kkk<i>kkkkkkkk</i>&nbsp; </span><span style=\"font-size: 14px;\">kkkkkkkk<b>kkk</b></span><span style=\"font-size: 14px;\"> kbhhhhhhhhhh<i> h<u>hhhh</u></i><u>h</u>hhhhhhh hhhhhhhhhhhhhhhhh hhhh hhhhhhhh hhhhhhhhh hhhhhhhhhhh hhh<b>hhhhhhhhh</b> hhhhhhhhhhhh hh bbbbbbbb bbb<span style=\"color: rgb(8, 82, 148);\">bb</span><span style=\"color: rgb(74, 123, 140);\"><span style=\"background-color: rgb(255, 255, 0);\"><span style=\"color: rgb(8, 82, 148);\">bbb</span>b<span style=\"color: rgb(206, 0, 0);\">bb bbb</span></span></span><span style=\"color: rgb(206, 0, 0);\">b</span>b bbbbbbb bbbbbbbb bbbbbb jbjjjjjjjjjjjjjjjjjjjjjj bmbjjjjjjjj jb,b,k, kgjgjh jkjgkj jbklkk </span><br></p>', '5d8f5ae95889c', 1569676009, 5, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` varchar(50) NOT NULL,
  `album_id` int(11) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `ukuran_file` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `album_id`, `nama`, `ukuran_file`, `tipe`, `deskripsi`) VALUES
('5d876304a1f72', 0, 'lungs-2803208_640.png', 83171, 'image/png', ''),
('5d87b7b157707', 0, '3.jpg', 223281, 'image/jpeg', ''),
('5d87b9dee4f08', 0, '3.jpg', 223281, 'image/jpeg', ''),
('5d87ba06e9e35', 0, '1.jpg', 79667, 'image/jpeg', ''),
('5d87bb2b21db8', 0, 'Giant.png', 586120, 'image/png', ''),
('5d87bb89918ba', 0, 'Giant.png', 586120, 'image/png', ''),
('5d8f5ae95889c', 0, 'Halfmoon_Dumbo_Ear.png', 597553, 'image/png', ''),
('5d8f68bce9679', 0, 'Halfmoon.png', 593550, 'image/png', NULL),
('5d8f6944e9fed', 0, 'Halfmoon_Rosetail.png', 775774, 'image/png', NULL),
('5d8f6cbb2dc37', 0, 'Giant.png', 586120, 'image/png', 'bvbvbvbvb'),
('5d8f7082486ad', 0, 'Halfmoon.png', 593550, 'image/png', 'half moon albno\r\n'),
('5d8f76a74c1be', 0, 'Giant.png', 586120, 'image/png', 'sfsf dvdvgd ddvgfv dgfv'),
('5d8f77b97377a', 0, 'IMG-20180813-WA0002.png', 646038, 'image/png', 'sadasdd');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` varchar(300) NOT NULL,
  `status` int(1) NOT NULL,
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `nama`, `email`, `pesan`, `status`, `tanggal`) VALUES
('', 'bagol', 'bagolakang@gmail.com', 'coba coba aja', 0, 1568890030),
('1', 'emul', 'e2016141010@gmail.com', 'test', 0, 0),
('5d8f78461e93c', 'ridwa', 'ridwan@example.com', 'asdad sadsa', 0, 1569683526);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(30) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `role`, `gambar`) VALUES
(1, 'admin', '$2y$10$Pz9AOzt7AwHlJ0BXisaEeOxbFDHHbtuaBjsYYpb4qQO1ryFzyTvai', 'e2016141010@gmail.com', 'admin', 'lungs-2803208_1280.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gambar_id_2` (`gambar_id`),
  ADD KEY `gambar_id` (`gambar_id`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`gambar_id`) REFERENCES `gambar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
