-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2017 at 06:35 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'karina', 'karkarkar', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produk_id` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `produk_name` varchar(255) NOT NULL,
  `produk_artist` varchar(255) NOT NULL,
  `produk_release` date NOT NULL,
  `produk_price` int(11) NOT NULL,
  `produk_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produk_id`, `jenis`, `produk_name`, `produk_artist`, `produk_release`, `produk_price`, `produk_path`) VALUES
(1, 1, 'NOTHING WITHOUT YOU', 'WANNA ONE', '2017-11-13', 250000, 'images/wannaone 1-1_0.jpg'),
(2, 1, 'TWICETAGRAM', 'TWICE', '2017-10-30', 225000, 'images/twice-twicetagram.jpg'),
(3, 1, 'LOVE YOURSELF', 'BTS', '2017-09-18', 245000, 'images/bts-love-yourself.jpg'),
(4, 1, 'AI1', 'SEVENTEEN', '2017-05-23', 230000, 'images/seventeen-ai1.jpg'),
(5, 1, 'WE\'VE DONE SOMETHING WONDERFUL', 'EPIK HIGH', '2017-10-23', 245000, 'images/epik-high-weve-done-something-wonderful.jpg'),
(6, 1, 'NEVER END', 'BOYFRIEND', '2017-08-09', 225000, 'images/boyfriend-star.jpg'),
(7, 2, 'BLOCK B OFFICIAL LIGHTSTICK + MINI LIGHTSTICK', 'BLOCK B', '2017-11-08', 200000, 'merch/BlockB LS.jpg'),
(8, 2, 'BTS OFFICIAL LIGHTSTICK', 'BTS', '2017-10-08', 220000, 'merch/BTSLS.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
