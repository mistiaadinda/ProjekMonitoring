-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 03:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id` int(11) NOT NULL,
  `nama_projek` varchar(100) NOT NULL,
  `nama_klien` varchar(100) NOT NULL,
  `nama_leader` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `tanggal_mulai` varchar(100) NOT NULL,
  `tanggal_selesai` varchar(100) NOT NULL,
  `progress` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id`, `nama_projek`, `nama_klien`, `nama_leader`, `email`, `gambar`, `tanggal_mulai`, `tanggal_selesai`, `progress`) VALUES
(1, 'InternShip MSIB Batch#4', 'Nabila Aurora Destiani', 'Mistia Adinda Dwi Syahputri', 'mistia20ti@mahasiswa.pcr.ac.id', 'MistiaProfil.jpg', '2023-01-21', '2023-01-11', 30),
(5, 'InternShip MSIB Batch#4', 'Zahira Dea', 'Liestia Cindika', 'liesta@gmail.com', 'default.jpg', '2023-01-18', '2023-02-01', 50),
(6, 'InternShip MSIB Batch#4', 'Muhammad Nayyul Habibie', 'Muhammad Ghiyats Rasyid ', '', 'ghiyats1.jpeg', '2023-01-13', '2023-01-21', 90);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `date_created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `gambar`, `role`, `date_created`) VALUES
(17, 'embun', 'embun@gmail.com', '$2y$10$v9Yx2OwfaeNKeFYrnz/XYe.uh4px/YUvR9wofN84UEtRDfLQ9ZGkO', 'default.jpg', 'user', '1657515411'),
(19, 'Morinna Couture', 'morinna@gmail.com', '$2y$10$1zlrJZSeXQ2TW31ijXOcseVD6RDGEDVAGPLezRDuildXXH590QPiS', 'admin.jpg', 'Admin', '1657532665'),
(20, 'mistiaadinda', 'mistia@gmail.com', '$2y$10$BkID9qJP1DvrUf/VpB2TmOQ9kW4gInyCti8NNQ/yotcic3CJLHqTe', 'default.jpg', 'user', '1657541177'),
(21, 'zahwa', 'zahwa@gmail.com', '$2y$10$tRah8ZETEOl33qOqr8tJlOq7SPugkbw0BE4C1ZWpJb/x3x7GryTi.', 'default.jpg', 'user', '1657731409'),
(22, 'ghiyats', 'ghiyats@gmail.com', '$2y$10$ymsE//5UVzHllT6aT8.y5eM3DtuPAc8WbdppQ2KmPg9W/8flqgCfC', 'default.jpg', 'user', '1657733894'),
(23, 'morinna couture', 'morinnac@gmail.com', '$2y$10$NtYDJZ4RGtwZs5B8Li.hJuJSO7mTGSFEtT1BwIYRKDm2bQHzoXDdy', 'Admin.jpg', 'Admin', '1658091557'),
(24, 'Kartika Amelia', 'kartika20ti@mahasiswa.pcr.ac.id', '$2y$10$MNOrFAXXSRfiAk48/Mq4Zu5Eh1j4oxkwJ7BiT9gqno79UJ7/DgpaK', 'default.jpg', 'User', '1671559871'),
(25, 'liestia cindika', 'liestia@gmail.com', '$2y$10$gWkHj.j2ND18bbpp70ydVuTIOUcTdjlVzTBhgcXMl.xh0vzMnloiW', 'default.jpg', 'User', '1671638415'),
(26, 'Mistia Adinda Dwi Syahputri', 'mistia20ti@mahasiswa.pcr.ac.id', '$2y$10$nHzeaKYk.7IqanzDY0XyluVd.OEDrzaw6MoTbhQw15ghqQfcIKMKC', 'default.jpg', 'User', '1673469850'),
(27, 'admin', 'mistia20ti@mahasiswa.pcr.ac.id', '$2y$10$eiWrzfsoWXQQXUcqOZ34Xe4zF0frOkRCDh8FcIFpd6i7PgDa0yIve', 'default.jpg', 'User', '1673472879'),
(28, 'zahwa', 'morinna@gmail.com', '$2y$10$vJVkpk/5Vbm2Vs0tSw1uDOjalGN38cylcRkVdv6mzVyJ8OuZwUFtO', 'default.jpg', 'User', '1673533673'),
(29, 'zahwa', 'morinna@gmail.com', '$2y$10$wgNkveGQbhhaQ75Xy87qyulQLTrSgWp4eIYJOE/QqVDEJKUIBxvbe', 'default.jpg', 'User', '1673533845'),
(30, 'zahwa', 'morinna@gmail.com', '$2y$10$nIXE3MDGv1g1irVMV4Qt1uEQhkUkI06vkyAMxqObiG5r5mvJDu57e', 'default.jpg', 'User', '1673533848'),
(31, 'zahwa', 'morinna@gmail.com', '$2y$10$AOBZGgucdqECdPxwgWWyEursTmOZ1y5kEg..a2KUQ65opLff74tN.', 'default.jpg', 'User', '1673533885');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
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
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
