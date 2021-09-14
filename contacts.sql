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
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `F_Name` varchar(50) NOT NULL,
  `L_Name` varchar(50) NOT NULL,
  `Number` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `F_Name`, `L_Name`, `Number`, `email`, `created_at`) VALUES
(1, 'dwij', 'gohil', 2147483647, 'dwijgohil@gmail.com', '2021-09-13 21:42:06'),
(2, 'dwij', 'gohil', 2147483647, 'dwijgohil@gmail.com', '2021-09-13 21:46:35'),
(3, 'tarun ', 'singh', 1111111111, 'tarunsingh@gmail.com', '2021-09-13 21:46:57'),
(4, 'aaryan', 'pawar', 1110001110, 'aaryan@gmail.com', '2021-09-13 21:48:15'),
(5, 'last ', 'check', 1234567891, 'check@gmail.com', '2021-09-13 21:49:18'),
(6, 'final', 'check', 1234567812, 'abc@gmail.com', '2021-09-13 21:50:15'),
(7, 'final', 'check', 1234567812, 'abc@gmail.com', '2021-09-13 21:50:47'),
(8, 'final', 'check', 1234567813, 'def@gmail.com', '2021-09-13 21:51:17'),
(9, 'final', 'check', 1234567813, 'def@gmail.com', '2021-09-13 21:52:53'),
(10, 'devang', 'singh', 1119992223, 'singh@gmail.com', '2021-09-13 21:53:15'),
(11, 'devang', 'singh', 1119992223, 'singh@gmail.com', '2021-09-13 21:59:48'),
(12, 'parth', 'modi', 1234567142, 'parth@gmail.com', '2021-09-13 22:00:17'),
(13, 'ok', 'sir', 1234567891, 'oksir@gmail.com', '2021-09-13 22:02:04'),
(14, 'ok', 'sir', 1234567891, 'oksir@gmail.com', '2021-09-13 22:02:25'),
(15, 'dwijsinh', 'gohil', 1234567812, 'dj@gmail.com', '2021-09-13 22:02:44'),
(16, 'dwijsinh', 'gohil', 1234567812, 'dj@gmail.com', '2021-09-13 22:03:15'),
(17, 'sarthak', 'kumar', 1234541231, 'sarthak@gmail.com', '2021-09-13 22:03:53'),
(18, 'rio', 'singh', 1234567891, 'rio@gmail.com', '2021-09-13 22:10:51'),
(26, 'dwij', 'gohil', 1234567891, 'de@gmail.com', '2021-09-13 22:41:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
