-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 10:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `praktikum_9`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawandata`
--

CREATE TABLE `karyawandata` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `kelamin` varchar(300) NOT NULL,
  `posisi` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawandata`
--

INSERT INTO `karyawandata` (`id`, `nama`, `email`, `alamat`, `kelamin`, `posisi`, `status`) VALUES
(20, 'farhan nazara udma', 'notmicrowings676@gmail.com', 'Jl. Bambu No.22 kreo larangan tangerang', 'Male', 'CEO', 'Fulltime'),
(21, 'Cyril Raifanda', 'crilraifanda@gmail.com', 'Jl. gotong royong  No.15  kreo larangan tangerang', 'Male', 'babu', 'Fulltime'),
(22, 'raihan rusdi ', 'raihanrusdi@yahoo.com', 'jl. dpr2 kebon jeruk', 'Male', 'babu ke 2', 'Fulltime'),
(23, 'M. rozan', 'rozankekgedungpencakarlangit@gmail.com', 'kembangan jl.lupa anjir gw nama jalannya', 'Male', 'babu ke 3', 'Fulltime'),
(24, 'alifeyo', 'fiomakannazi@gmail.com', 'puriboiitanical', 'Male', 'babu ke 4', 'Parttime'),
(25, 'aldiza', 'aldiza@gmail.com', 'deket rumah nenek gw', 'Male', 'babu ke 5', 'Fulltime');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawandata`
--
ALTER TABLE `karyawandata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawandata`
--
ALTER TABLE `karyawandata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
