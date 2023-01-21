-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 07:20 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quarex`
--

-- --------------------------------------------------------

--
-- Table structure for table `sh_duyuru`
--

CREATE TABLE `sh_duyuru` (
  `id` int(11) NOT NULL,
  `d_icerik` varchar(255) NOT NULL,
  `d_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Dumping data for table `sh_duyuru`
--

INSERT INTO `sh_duyuru` (`id`, `d_icerik`, `d_time`) VALUES
(0, 'Ünlü sorgulamak yasaktır.', '20.12.2022'),
(0, 'discord.gg/quarex', '20.12.2022'),
(0, 't.me/quarexroblox', '20.12.2022');

-- --------------------------------------------------------

--
-- Table structure for table `sh_kullanici`
--

CREATE TABLE `sh_kullanici` (
  `id` int(11) NOT NULL,
  `k_rol` enum('0','1','2') NOT NULL DEFAULT '0',
  `k_log` varchar(32) NOT NULL,
  `u_time` varchar(32) NOT NULL,
  `k_browser` varchar(32) NOT NULL,
  `k_os` varchar(32) NOT NULL,
  `k_time` varchar(32) NOT NULL,
  `k_key` varchar(255) NOT NULL,
  `k_verified` varchar(255) NOT NULL,
  `k_adi` varchar(255) NOT NULL,
  `k_lastlogin` varchar(255) NOT NULL,
  `k_ekleyen` varchar(255) NOT NULL,
  `k_cooldown` varchar(255) NOT NULL,
  `k_cooldown_bypass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sh_kullanici`
--

INSERT INTO `sh_kullanici` (`id`, `k_rol`, `k_log`, `u_time`, `k_browser`, `k_os`, `k_time`, `k_key`, `k_verified`, `k_adi`, `k_lastlogin`, `k_ekleyen`, `k_cooldown`, `k_cooldown_bypass`) VALUES
(1, '1', '78.606.202.725', '1', 'Google Chrome', 'Windows 10', '2022-06-06 15:54:09', 'fayuj_adminkey', 'true', 'fayujx', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36 OPR/93.0.0.0 (Edition std-1)', 'fayujx', '1668632461', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sh_kullanici`
--
ALTER TABLE `sh_kullanici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sh_kullanici`
--
ALTER TABLE `sh_kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2898;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
