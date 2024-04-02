-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2024 at 04:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `perpus`
--

CREATE TABLE `perpus` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `buku` varchar(30) NOT NULL,
  `genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `perpus`
--

INSERT INTO `perpus` (`id`, `nama`, `buku`, `genre`) VALUES
(1, 'Marshanda', 'Novel', 'Horror'),
(2, 'chacha', 'fictional book', 'romance'),
(3, 'Inggit', 'Novel', 'fantasy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `perpus`
--
ALTER TABLE `perpus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perpus`
--
ALTER TABLE `perpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
