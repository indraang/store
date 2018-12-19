-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 03:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$ZLKgyuIQofE50I2ukgtxDe4zqIHzm/fbddNhCrNONrk64MJLjfPEy');

-- --------------------------------------------------------

--
-- Table structure for table `t_items`
--

CREATE TABLE `t_items` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `harga_produk` int(25) NOT NULL,
  `stok_produk` int(200) NOT NULL,
  `status_produk` int(11) NOT NULL,
  `gambar_produk` varchar(225) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_items`
--

INSERT INTO `t_items` (`id_produk`, `nama_produk`, `harga_produk`, `stok_produk`, `status_produk`, `gambar_produk`, `deskripsi`) VALUES
(2, '1', 1, 0, 0, 'img1544276966.jpg', 'aaaaaaaaa'),
(3, 'barang', 1, 0, 0, 'img1544276966.jpg', 'aaaaaaaaa'),
(4, 'Pop Mie', 20000, 0, 0, 'img1544321817.jpg', 'lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit ametlorem ipsum dolor sit amet lorem ipsum dolor sit amet '),
(5, '1', 1, 0, 0, 'img1544276966.jpg', 'aaaaaaaaa'),
(6, 'barang', 1, 0, 0, 'img1544276966.jpg', 'aaaaaaaaa'),
(7, 'Pop Mie', 20000, 0, 0, 'img1544321817.jpg', 'lorem ipsum dolor sit amet'),
(8, '1', 1, 0, 0, 'img1544276966.jpg', 'aaaaaaaaa'),
(9, 'barang', 1, 0, 0, 'img1544276966.jpg', 'aaaaaaaaa'),
(10, 'Pop Mie', 20000, 0, 0, 'img1544321817.jpg', 'lorem ipsum dolor sit amet'),
(11, '1', 1, 0, 0, 'img1544276966.jpg', 'aaaaaaaaa'),
(12, 'barang', 1, 0, 0, 'img1544276966.jpg', 'aaaaaaaaa'),
(13, 'Pop Mie', 20000, 0, 0, 'img1544321817.jpg', 'lorem ipsum dolor sit amet');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `email_user` varchar(25) NOT NULL,
  `class_user` varchar(12) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `email_user`, `class_user`, `password`) VALUES
(1, '0', 'user@gmail.com', '11', 'Shafaq'),
(2, 'user', 'user@gmail.com', '11', '$2y$10$r5mt.zrmN48TyTJTPCOoDOB1R9lFxVZETi77kmO9RT22EnZFmf0iy'),
(3, '1', '1', '1', '$2y$10$GsxO9cJNXqelHLYoz1ofvuMDPeqTpCb.EdJEpsnHoOarSXcbJTp2e'),
(4, '1', '1', '1', '$2y$10$iBLlE6pfYB47rwOYqRKs3e9rIaDdb.dYuei3P23jJFzpZSz0ysS0K'),
(5, 'ss', 'ss', 'ss', '$2y$10$/FcThkyZMalDQSUR5O1NUesnYqL7OsXdtoLyh.9c8nwtc6OmL3Mb2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `t_items`
--
ALTER TABLE `t_items`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_items`
--
ALTER TABLE `t_items`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
