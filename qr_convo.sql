-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 02:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qr_convo`
--

-- --------------------------------------------------------

--
-- Table structure for table `details_members`
--

CREATE TABLE `details_members` (
  `id_matrik` varchar(20) NOT NULL,
  `fullname` text NOT NULL,
  `department` text NOT NULL,
  `level` text NOT NULL,
  `branch` text NOT NULL,
  `imageqr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id_matrik` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id_matrik`, `name`, `Time`) VALUES
('', '900110115305', '2022-12-25 19:04:34'),
('', 'mcs1248', '2022-12-26 10:32:47'),
('', 'mcs3737-2006-03', '2022-12-30 01:15:25'),
('', 'wrm5467', '2022-12-30 15:13:04'),
('', 'mcs85647', '2022-12-30 16:36:12'),
('', 'mcs61574', '2022-12-30 21:10:29');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
