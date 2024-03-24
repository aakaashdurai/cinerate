-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 05:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinerate`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`username`, `email`, `password`) VALUES
('aakash2124', 'aakashbca2124@gmail.com', '$2y$10$qWnXmhyxnYX4DLS6GMtQieI.izPKXo5B3Pk6WomiNmAY.QA7J8U/u'),
('kumanan', 'kumanan@gmail.com', '$2y$10$3UJ9ogPFwm8eX8/4YYJ24.gBR.ew9cf/iGMyPtnIj2HPsPlqoG5.u'),
('vimal', 'rajv@gmail.com', '$2y$10$l8sfAmwaTgzminL2QKeiduVHinp/BoT4v1ki5WSoO2L.mBzOKg.Pa'),
('sam', 'sam@gmail.com', '$2y$10$gfdKlRn8Y.g9UKPsZZRTReIz2S8FzR1xrJquf7du5fJMH3dgBl4pa'),
('dhanush', 'vthilagam372@gmail.com', '$2y$10$KyFWGbRNUHsn25y5Vf4Db./e3o80kupMrLJN8T8hBS5vUh3SyLegu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
