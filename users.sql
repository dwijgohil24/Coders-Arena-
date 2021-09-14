-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2021 at 07:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(2, 'dwij', '$2y$10$iISvrwll3B3A5iVAgoL2IOznql00i3OanDJ9i4gYZjvqUqnHCqiZG', '2021-09-11 16:02:21'),
(3, 'dwijgohil', '$2y$10$hrDRF5Cj6.hWvUnVT28zjOLlTAJb5v.mUxcwayvdwdOMwWkCWm9aq', '2021-09-11 16:04:14'),
(4, 'tarunsingh', '$2y$10$2MjwpI2jB6nWfPia9C1VfuJilT4i31hK.aPXYZmM0vH0HH.OOObtm', '2021-09-11 16:06:51'),
(5, 'aaryan', '$2y$10$9xxtwwI3Tdf6PblbfilqJe3GVU139PhGTNRsWcrOXBUga2BaV0d1G', '2021-09-11 16:10:12'),
(6, 'dwijst', '$2y$10$sdfktgdZjYCVwAZ.k4RtWOWTKoTJ2m0.XBlAnihx8BmrwuFHoPvc.', '2021-09-11 16:16:26'),
(7, 'mayur', '$2y$10$XLfVEKWHCjkitoOxPT91kOiM5G29v7WIKm93ltatLWsQIy9hvukHW', '2021-09-11 16:17:38'),
(8, 'unknown', '$2y$10$UmeI0oIUiRfhDlSiYNfbZOTjbZY5mOmZVWaSiTDRZO9rj/n/tnEGO', '2021-09-11 16:20:00'),
(9, 'ok', '$2y$10$OukoEzdogH6Y6HVuK/hM2O5SswowmptwtvoovTfO3V2k8dTDZ7SPW', '2021-09-11 16:21:55'),
(10, 'gohil', '$2y$10$KfP2hPJytW74VrL5J8dbQOob0UgKsTbu.Thj.4Uq9g4qTdPvs/T1q', '2021-09-11 16:25:33'),
(11, 'sidd', '$2y$10$BAKtXrcJKaczZ3hJU0fceOwGOhAhgNhpVCGIDoKzFc.w..YcMULg2', '2021-09-11 16:56:51'),
(12, 'satya', '$2y$10$EfHjtoO8dt90WVLj68np3.kfqcNYu.Zg5kWpChuR2AZZzbP.POx6m', '2021-09-11 17:08:47'),
(13, 'anonymous', '$2y$10$cl.Cdl0e9va88Xk2lAjKMuF8npjyk9FGnnE2SHDhuAnOutsSVK66y', '2021-09-11 17:11:12'),
(14, 'last testing', '$2y$10$mZeoe3LsHR.jeij2VCdsN.HfutKJa6X0kVPZ9CSnzYdnI5F4n6vP2', '2021-09-11 17:13:29'),
(15, 'last', '$2y$10$wNbZrmdPYGJjdqEVGefo7OGlv4DD5uTn2WJy3zG8lrWNaMUTJBhqu', '2021-09-11 17:23:47'),
(16, 'final check', '$2y$10$vAcJGoIF.XEq98sRtjwUjeza7LdgZz7N/z/YoZr.KZ0BN6cqXei.K', '2021-09-11 17:28:22'),
(17, 'tarunsinghop', '$2y$10$B3cnc1DXXDbTdvWpVGjqJ.0n5O/tE/esUySp0iU9hiJccVuOklA/.', '2021-09-11 17:34:31'),
(18, 'okgoogle', '$2y$10$UQ.XObdT5h8xTCf1G8Qy5OywO1KIedP2vpbBwMUnISpiJHRya2Ixu', '2021-09-11 17:47:45'),
(19, 'check', '$2y$10$JE.zimr310deo9H08hqkhOIoiCDzLXp.VBz5G8QUf0lFLOLe0fqj.', '2021-09-12 13:49:30'),
(21, 'tarun singh', '$2y$10$SoTQ0K6AXlz3v7QYweatq.ymMAxjLUDEHdxHAQuqfwKZvCF5lHI12', '2021-09-12 13:57:09'),
(22, 'djisgod', '$2y$10$vwcZV54jTD1YUpbA9gR8.uY.F0CGzC2vYuhSkJ3tP.d1PseQZdvAm', '2021-09-12 17:38:24'),
(23, 'yoyo', '$2y$10$8bFobAVgjwwmIZrd/35gHeysk0mN4ssUK0e48LJ3Q5h4bQ2tk5aQe', '2021-09-12 18:50:24'),
(24, 'tarunopsir', '$2y$10$bqAWNbcc1DuRqZHGYJtuMeCAGwpvTcihlRrcTMAN4eKCueTNqSLJO', '2021-09-12 19:02:06'),
(25, 'rio', '$2y$10$xWU8HXbaeRc51IqYvxkwBuSmlAn7a4IN3iNtp2Ky3t71EIB43AW.e', '2021-09-13 22:11:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
