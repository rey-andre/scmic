-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2022 at 02:22 PM
-- Server version: 10.3.36-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candrawj_indonesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama_galeri` text NOT NULL,
  `foto_galeri` text NOT NULL,
  `target` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `nama_galeri`, `foto_galeri`, `target`, `created_at`) VALUES
(3, 'Merapi', 'Bannergudeg_.jpg', 'Header', '2022-11-27 16:28:47'),
(4, 'Merapi', 'Bannergudeg_1.jpg', 'Destinasi Pilihan', '2022-11-27 16:30:27'),
(5, 'Merapi', 'Bannergudeg_11.jpg', 'Inspirasi Perjalanan', '2022-11-27 16:30:41');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `foto` text NOT NULL,
  `tgl` datetime NOT NULL DEFAULT current_timestamp(),
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `id_user`, `foto`, `tgl`, `deskripsi`) VALUES
(5, 10, 'bogor_10.jpg', '2022-11-28 21:17:59', 'saya mau melapor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `nama` text NOT NULL,
  `no_hp` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `nama`, `no_hp`, `password`, `role`) VALUES
(1, 'candraw71@gmail.com', 'Candra', '0895377562532', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(2, 'admin@gmail.com', 'admin', '087654321', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(6, 'canderaw8@gmail.com', 'Cand', '91806', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(7, 'ihsanulhadi23@gmail.com', 'Ihsan', '082285292309', 'e699e672f32834b3e485a32691f5a687', 'admin'),
(8, 'ihsanulhadi40@gmail.com', 'ihsan', '082285292309', 'e699e672f32834b3e485a32691f5a687', 'admin'),
(9, 'ferdy@gmail.com', 'ferdy', '081234567890', 'b38cefac115e58ed079972d1891e4b39', 'admin'),
(10, 'user@gmail.com', 'user', '123456789', '6ad14ba9986e3615423dfca256d04e3f', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
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
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
