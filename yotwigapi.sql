-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2020 at 06:32 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yotwigapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_key`
--

CREATE TABLE `api_key` (
  `id_key` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `valid` tinyint(1) NOT NULL DEFAULT '1',
  `dibuat_pada` timestamp NOT NULL,
  `expire_pada` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `api_key`
--

INSERT INTO `api_key` (`id_key`, `id_user`, `api_key`, `valid`, `dibuat_pada`, `expire_pada`) VALUES
(1, 1, '5d41402abc4b2a76b9719d911017c592', 0, '2020-06-12 12:10:43', '2020-06-12 14:10:43'),
(2, 1, 'e034b36276d0c096af70c1b5c4e18ca7', 0, '2020-06-12 12:58:16', '2020-06-13 12:58:16'),
(6, 2, '7d31653f207e795ace3451160ba15964', 0, '2020-06-13 16:16:36', '2020-06-13 18:16:36'),
(7, 4, '96b7ce9b6d89ae5f8544d19c5360cf5c', 0, '2020-06-14 01:44:35', '2020-06-14 03:44:35'),
(8, 4, '3f646082e215a8e85e97241d1fb45696', 0, '2020-06-18 03:49:51', '2020-06-18 05:49:51'),
(9, 4, 'd3b8c1733f9edd6bca9d4e43ecb6afa7', 0, '2020-06-30 19:21:09', '2020-06-30 21:21:09'),
(10, 4, 'dc90fdbe3f07764777f55a64d2e9bdcf', 1, '2020-06-30 21:34:43', '2020-06-30 23:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_depan` varchar(255) NOT NULL,
  `nama_belakang` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_depan`, `nama_belakang`, `email`, `password`, `tanggal_daftar`) VALUES
(1, 'Mujahid', 'Abdillah', 'mujahid@mail.com', 'ab033ca2bc357691384fc9a5702047ff', '2020-06-12 12:07:38'),
(2, 'Budi', 'Rita', 'budirita@mail.com', '25d55ad283aa400af464c76d713c07ad', '2020-06-13 15:58:42'),
(3, 'User', 'Pertama', 'userpertama@mail.com', '\r\n$2y$12$kFgeEqXdSDofNF1KV6IOPOCNM9wNE4X/7ZXYBDjHPEZBvsDvCrYFS', '2020-06-13 22:16:44'),
(4, 'Contoh', 'User', 'contohuser@mail.com', '$2y$10$ZRUUEFtoZFthdRzRqwNVc.RUeG3arMvGrd2WLh1QMnSvUf0SxC0eW', '2020-06-14 01:24:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_key`
--
ALTER TABLE `api_key`
  ADD PRIMARY KEY (`id_key`),
  ADD KEY `fk_api_key_1` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_key`
--
ALTER TABLE `api_key`
  MODIFY `id_key` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `api_key`
--
ALTER TABLE `api_key`
  ADD CONSTRAINT `fk_api_key_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
