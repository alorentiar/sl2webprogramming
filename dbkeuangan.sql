-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 09:23 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbkeuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `msnasabah`
--

CREATE TABLE `msnasabah` (
  `namadepan` varchar(50) NOT NULL,
  `namatengah` varchar(50) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `tempatlahir` varchar(50) NOT NULL,
  `tanggallahir` date DEFAULT NULL,
  `nik` varchar(50) NOT NULL,
  `warganegara` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` int(8) NOT NULL,
  `photo` longblob NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msnasabah`
--

INSERT INTO `msnasabah` (`namadepan`, `namatengah`, `namabelakang`, `tempatlahir`, `tanggallahir`, `nik`, `warganegara`, `email`, `nohp`, `alamat`, `kodepos`, `photo`, `username`, `password`) VALUES
('Antonius', 'Frederikus', 'Yanto', 'Jombang', '2022-02-14', '11111111111111111', 'Somalia', 'afy@gmail.com', '082112341233', 'Jl Tebu Ireng 123', 123456, 0x70726f66696c65706963747572652f736974616e647365652e706e67, 'anton', 'anton!'),
('Mas', 'Alfredo', 'Lorentiar', 'Jakarta', '2022-01-01', '1231231231231', 'Jepang', 'masedo@yahoo.com', '082112341234', 'Jl Kebon jeruk sebelah rumah jason', 65341, 0x70726f66696c65706963747572652f416c667265646f204c6f72656e746961722053202831292e6a7067, 'alorentiar', 'tampan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msnasabah`
--
ALTER TABLE `msnasabah`
  ADD PRIMARY KEY (`nik`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
