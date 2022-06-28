-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 05:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `ID_DOSEN` varchar(10) NOT NULL,
  `NAMA_D` varchar(100) NOT NULL,
  `JK` varchar(50) NOT NULL,
  `ALAMAT` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `TELP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`ID_DOSEN`, `NAMA_D`, `JK`, `ALAMAT`, `EMAIL`, `TELP`) VALUES
('D1111', 'Mertha Jaya', 'L', 'Bali', 'MJ@gmail.com', '081111111111');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `NIM` int(10) NOT NULL,
  `NAMA` varchar(100) NOT NULL,
  `JURUSAN` varchar(100) NOT NULL,
  `JK` varchar(100) NOT NULL,
  `TGLLAHIR` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`NIM`, `NAMA`, `JURUSAN`, `JK`, `TGLLAHIR`) VALUES
(112233, 'Alex', 'SK', 'L', '2002-05-21'),
(223344, 'James', 'MTI', 'P', '2003-02-03'),
(445566, 'Udin', 'KAB', 'L', '2005-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `mk`
--

CREATE TABLE `mk` (
  `KDMK` varchar(10) NOT NULL,
  `NAMAMK` varchar(100) NOT NULL,
  `SKS` int(4) NOT NULL,
  `SEMESTER` int(4) NOT NULL,
  `KODEKLS` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mk`
--

INSERT INTO `mk` (`KDMK`, `NAMAMK`, `SKS`, `SEMESTER`, `KODEKLS`) VALUES
('MK111', 'Pemrograman Web', 4, 2, 'KLS111'),
('MK222', 'Pemrograman Web', 4, 2, 'KLS222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`ID_DOSEN`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `mk`
--
ALTER TABLE `mk`
  ADD PRIMARY KEY (`KDMK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
