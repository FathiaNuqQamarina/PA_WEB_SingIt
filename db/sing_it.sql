-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 06:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sing_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nama`, `username`, `password`) VALUES
('Deo', 'Yans123', 'Sims123'),
('Admin1', 'Admin', 'Admin123'),
('Yanuar Gideon Simalango', 'yans', 'Simalango23');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(15) NOT NULL,
  `Penyanyi` varchar(20) NOT NULL,
  `Lagu` varchar(20) NOT NULL,
  `File` varchar(30) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `Tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `Penyanyi`, `Lagu`, `File`, `Gambar`, `Tanggal`) VALUES
(14, 'Tulus', 'Manusia Kuat', 'Manusia Kuat.mp3', 'Manusia Kuat.jpg', '05/11/2022 12:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `topbarat`
--

CREATE TABLE `topbarat` (
  `id_barat` int(20) NOT NULL,
  `Penyanyi` varchar(30) NOT NULL,
  `Lagu` varchar(30) NOT NULL,
  `File` varchar(40) NOT NULL,
  `Gambar` varchar(40) NOT NULL,
  `Tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topbarat`
--

INSERT INTO `topbarat` (`id_barat`, `Penyanyi`, `Lagu`, `File`, `Gambar`, `Tanggal`) VALUES
(2, 'Harry Styles', 'As It Was', 'As It Was.mp3', 'As It Was.jpg', '05/11/2022 12:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `topindo`
--

CREATE TABLE `topindo` (
  `id_indo` int(20) NOT NULL,
  `Penyanyi` varchar(25) NOT NULL,
  `Lagu` varchar(30) NOT NULL,
  `File` varchar(40) NOT NULL,
  `Gambar` varchar(40) NOT NULL,
  `Tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topindo`
--

INSERT INTO `topindo` (`id_indo`, `Penyanyi`, `Lagu`, `File`, `Gambar`, `Tanggal`) VALUES
(1, 'Hindia', 'Evaluasi', 'Evaluasi.mp3', 'Evaluasi.jpg', '05/11/2022 12:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `topkorea`
--

CREATE TABLE `topkorea` (
  `id_korea` int(20) NOT NULL,
  `Penyanyi` varchar(25) NOT NULL,
  `Lagu` varchar(30) NOT NULL,
  `File` varchar(40) NOT NULL,
  `Gambar` varchar(40) NOT NULL,
  `Tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topkorea`
--

INSERT INTO `topkorea` (`id_korea`, `Penyanyi`, `Lagu`, `File`, `Gambar`, `Tanggal`) VALUES
(1, 'BlackPink', 'Pink Venom', 'Pink Venom.mp3', 'Pink Venom.jpg', '05/11/2022 11:54:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`);

--
-- Indexes for table `topbarat`
--
ALTER TABLE `topbarat`
  ADD PRIMARY KEY (`id_barat`);

--
-- Indexes for table `topindo`
--
ALTER TABLE `topindo`
  ADD PRIMARY KEY (`id_indo`);

--
-- Indexes for table `topkorea`
--
ALTER TABLE `topkorea`
  ADD PRIMARY KEY (`id_korea`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `topbarat`
--
ALTER TABLE `topbarat`
  MODIFY `id_barat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topindo`
--
ALTER TABLE `topindo`
  MODIFY `id_indo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `topkorea`
--
ALTER TABLE `topkorea`
  MODIFY `id_korea` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
