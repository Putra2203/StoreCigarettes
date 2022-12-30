-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2022 at 09:34 PM
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
-- Database: `db_cigarettes`
--

-- --------------------------------------------------------

--
-- Table structure for table `csbukutamu`
--

CREATE TABLE `csbukutamu` (
  `id` int(3) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `nope` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `csbukutamu`
--

INSERT INTO `csbukutamu` (`id`, `nama`, `email`, `nope`) VALUES
(1, 'Erdin Purwa Putra', 'erdin22xii@gmail.com', '081329195789'),
(2, 'Erdin Purwa Putra', 'ERDIN22XII@GMAIL.COM', '081329195789'),
(3, 'Erdin Purwa Putra', 'ERDIN22XII@GMAIL.COM', '081329195789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `csbukutamu`
--
ALTER TABLE `csbukutamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `csbukutamu`
--
ALTER TABLE `csbukutamu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
