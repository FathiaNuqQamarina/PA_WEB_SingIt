-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 12:36 PM
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
-- Table structure for table `lagu`
--

CREATE TABLE `lagu` (
  `id_lagu` int(15) NOT NULL,
  `Penyanyi` varchar(20) NOT NULL,
  `Lagu` varchar(20) NOT NULL,
  `File` varchar(30) NOT NULL,
  `Gambar` varchar(255) NOT NULL,
  `Tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lagu`
--

INSERT INTO `lagu` (`id_lagu`, `Penyanyi`, `Lagu`, `File`, `Gambar`, `Tanggal`) VALUES
(14, 'Tulus', 'Manusia Kuat', 'Manusia Kuat.mp3', 'Manusia Kuat.jpg', '10/11/2022 12:49:46'),
(15, 'Lyodra', 'Pesan Terakhir', 'Pesan Terakhir.mp3', 'Pesan Terakhir.jpg', '05/11/2022 18:38:07'),
(16, 'Tiara', 'Menjadi Dia', 'Menjadi Dia.mp3', 'Menjadi Dia.jfif', '08/11/2022 19:29:35'),
(17, 'Mahalini', 'Sisa Rasa', 'Sisa Rasa.mp3', 'Sisa Rasa.jfif', '08/11/2022 19:51:35'),
(19, 'Fabio', 'Rumah Singgah', 'Rumah Singgah.mp3', 'Rumah Singgah.jfif', '08/11/2022 23:00:08');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `nama`, `username`, `password`, `gambar`) VALUES
(1, 'Admin', 'Admin', 'Admin123', 'noprofile.png'),
(2, 'Fathia', 'tia', '$2y$10$pf.jG1VvP4ygxm64jcfmw..Z1jUYloWwKNR9XK4iHvQdNjm4NySBy', 'noprofile.png'),
(3, 'Ega Sulfika', 'ega11', '$2y$10$d0zeiRUPgnUPZQUE0JsZqO5X11b5IJdXXYAHlFHADdVoa/Lv3Hyb6', 'noprofile.png'),
(4, 'eva', 'eva', '$2y$10$3f9I.a3iWoguWQveZYaDYOi7YRGcdbjEf3RafMICXOYH7SFL/2zCC', 'noprofile.png'),
(30, 'Yanuar Gideon Simalango', 'yans', '$2y$10$TxIPciNeF/2LOCfitI71euly.oNpjYnUHLkydDBIBqL3lVj1kRE4u', '30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `id_playlist` int(30) NOT NULL,
  `id_user` int(30) NOT NULL,
  `id_lagu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`id_playlist`, `id_user`, `id_lagu`) VALUES
(59, 2, 19),
(60, 3, 16),
(62, 30, 17),
(63, 30, 19);

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
(2, 'Harry Styles', 'As It Was', 'As It Was.mp3', 'As It Was.jpg', '05/11/2022 12:56:46'),
(3, 'Troye Sivan', 'Youth', 'Youth.mp3', 'Youth.jpg', '06/11/2022 12:40:27'),
(4, 'Taylor Swift', 'Anti-Hero', 'Anti-Hero.mp3', 'Anti-Hero.jpg', '14/11/2022 16:08:20'),
(5, 'Charlie Puth', 'Smells Like Me', 'Smells Like Me.mp3', 'Smells Like Me.jpg', '14/11/2022 16:09:10'),
(6, 'Joji', 'Glimpse of Us', 'Glimpse of Us.mp3', 'Glimpse of Us.jpg', '14/11/2022 16:09:44'),
(7, 'Meghan Trainor', 'Made You Look', 'Made You Look.mp3', 'Made You Look.jpg', '14/11/2022 16:10:18'),
(8, 'Rihanna', 'Lift Me Up', 'Lift Me Up.mp3', 'Lift Me Up.jpg', '14/11/2022 16:10:46'),
(9, 'Sam Smith', 'Unholy', 'Unholy.mp3', 'Unholy.jpg', '14/11/2022 16:11:18'),
(10, 'Stacey Ryan', 'Fall In Love Alone', 'Fall In Love Alone.mp3', 'Fall In Love Alone.jpg', '14/11/2022 16:12:06'),
(11, 'Stephen Sanchez', 'Until I Found You ', 'Until I Found You .mp3', 'Until I Found You .jpg', '14/11/2022 16:12:38');

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
(1, 'Hindia', 'Evaluasi', 'Evaluasi.mp3', 'Evaluasi.jpg', '05/11/2022 12:57:07'),
(3, 'Soegi Bornean', 'Pijaraya', 'Pijaraya.mp3', 'Pijaraya.jpg', '06/11/2022 12:27:31'),
(4, 'Andmesh', 'Andaikan Kau Datang Kembali', 'Andaikan Kau Datang Kembali.mp3', 'Andaikan Kau Datang Kembali.jpg', '14/11/2022 18:43:48'),
(5, 'Keisya Levronka', 'Tak Ingin Usai ', 'Tak Ingin Usai .mp3', 'Tak Ingin Usai .jpg', '14/11/2022 18:45:27'),
(6, 'Lyodra', 'Sang Dewi ', 'Sang Dewi .mp3', 'Sang Dewi .jpg', '14/11/2022 18:46:01'),
(7, 'Mahalini', 'Kisah Sempurna', 'Kisah Sempurna.mp3', 'Kisah Sempurna.jpg', '14/11/2022 18:46:50'),
(8, 'Tulus', 'Hati Hati Di Jalan', 'Hati Hati Di Jalan.mp3', 'Hati Hati Di Jalan.jpg', '14/11/2022 18:48:44'),
(9, 'Yura Yunita', 'Dunia Tipu-Tipu', 'Dunia Tipu-Tipu.mp3', 'Dunia Tipu-Tipu.jpg', '14/11/2022 18:49:25'),
(10, 'Ziva Magnolya', 'Pilihan Yang Terbaik', 'Pilihan Yang Terbaik.mp3', 'Pilihan Yang Terbaik.jpg', '14/11/2022 18:49:55'),
(11, 'Rizky Febian', ' Hingga Tua Bersama', ' Hingga Tua Bersama.mp3', ' Hingga Tua Bersama.jpg', '14/11/2022 19:09:34');

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
(1, 'BlackPink', 'Pink Venom', 'Pink Venom.mp3', 'Pink Venom.jpg', '05/11/2022 11:54:39'),
(2, 'Red Velvet', 'Psycho', 'Psycho.mp3', 'Psycho.jpg', '06/11/2022 12:40:00'),
(3, 'Aespa', 'Next Level', 'Next Level.mp3', 'Next Level.jpg', '14/11/2022 19:14:59'),
(4, 'BTS', 'Butter', 'Butter.mp3', 'Butter.png', '14/11/2022 19:15:26'),
(5, 'DO', 'Thats okay', 'Thats okay.mp3', 'Thats okay.png', '14/11/2022 19:15:55'),
(6, 'EXO', 'Love Shot', 'Love Shot.mp3', 'Love Shot.jpg', '14/11/2022 19:16:19'),
(7, 'IU', 'Celebrity LILAC', 'Celebrity LILAC.mp3', 'Celebrity LILAC.jpg', '14/11/2022 19:16:39'),
(8, 'LE SSERAFIM', 'Good Parts', 'Good Parts.mp3', 'Good Parts.jpg', '14/11/2022 19:17:13'),
(9, 'NCT DREAM', 'Beatbox', 'Beatbox.mp3', 'Beatbox.jpg', '14/11/2022 19:17:45'),
(10, 'ZICO', 'Any song', 'Any song.mp3', 'Any song.jpg', '14/11/2022 19:19:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lagu`
--
ALTER TABLE `lagu`
  ADD PRIMARY KEY (`id_lagu`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`id_playlist`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_lagu` (`id_lagu`);

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
-- AUTO_INCREMENT for table `lagu`
--
ALTER TABLE `lagu`
  MODIFY `id_lagu` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `id_playlist` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `topbarat`
--
ALTER TABLE `topbarat`
  MODIFY `id_barat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `topindo`
--
ALTER TABLE `topindo`
  MODIFY `id_indo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `topkorea`
--
ALTER TABLE `topkorea`
  MODIFY `id_korea` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_Lagu` FOREIGN KEY (`id_lagu`) REFERENCES `lagu` (`id_lagu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `playlist_Login` FOREIGN KEY (`id_user`) REFERENCES `login` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
