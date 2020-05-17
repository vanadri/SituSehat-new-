-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2020 at 01:30 PM
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
-- Database: `db_situsehat`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(3) NOT NULL,
  `gejala` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `gejala`, `ket`) VALUES
(2, 'Detak jantung tidak teratur', 'jika jantung sering berdegup kencang pada saat-saat tidak terduga dan tidak diketahui penyebabnya, perlu waspada. Meski begitu, beberapa hal lain seperti terlalu banyak mengonsumsi kafein dan kurang tidur juga dapat menyebabkan jantung berdetak tidak beraturan.');

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(3) NOT NULL,
  `penyakit` varchar(50) NOT NULL,
  `ket` text NOT NULL,
  `penyembuhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `penyakit`, `ket`, `penyembuhan`) VALUES
(1, 'Tifus', 'Tifus atau demam tifoid adalah penyakit yang disebabkan oleh infeksi bakteri Salmonella typhii. Tifus dapat menular dengan cepat, umumnya melalui konsumsi makanan atau minuman yang sudah terkontaminasi tinja yang mengandung bakteri Salmonella typhii.', 'Vaksin tifoid diberikan kepada anak-anak berusia lebih dari 2 tahun, dan diulang tiap tiga tahun. Seperti vaksin lainnya, vaksin tifoid tidak menjamin perlindungan 100 persen terhadap infeksi tifus. Anak yang sudah diimunisasi tifoid pun tetap dapat terinfeksi, namun tingkat infeksinya tidak seberat pada pasien yang belum mendapat vaksin tifoid.');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `username`, `password`) VALUES
(1, 'arta', '123'),
(2, 'mira', '456'),
(3, 'irfanad', '555');

-- --------------------------------------------------------

--
-- Table structure for table `sehat`
--

CREATE TABLE `sehat` (
  `id` int(3) NOT NULL,
  `sehat` text NOT NULL,
  `dampak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sehat`
--

INSERT INTO `sehat` (`id`, `sehat`, `dampak`) VALUES
(1, 'Olahraga', 'Olahraga dapat membuat memberi dampak pada tubuh menjadi lebih sehat dan bahagia.\r\n\r\n- Menurunkan tekanan darah tinggi\r\n- Menangkal obesitas\r\n- Menunda keterbatasan fisik saat usia tua\r\n- Mengatasi stres\r\n- Membuat tidur lebih nyenyak\r\n\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sehat`
--
ALTER TABLE `sehat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sehat`
--
ALTER TABLE `sehat`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
