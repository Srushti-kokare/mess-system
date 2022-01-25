-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 09:26 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mms_db-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `menue_price`
--

CREATE TABLE `menue_price` (
  `rec_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `mor_price` int(11) NOT NULL,
  `lun_price` int(11) NOT NULL,
  `even_price` int(11) NOT NULL,
  `din_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menue_price`
--

INSERT INTO `menue_price` (`rec_id`, `date`, `mor_price`, `lun_price`, `even_price`, `din_price`) VALUES
(1, '2021-01-12', 20, 60, 20, 80),
(2, '2021-01-12', 20, 60, 20, 80),
(3, '2021-01-12', 20, 60, 20, 80),
(4, '2021-01-12', 20, 60, 20, 80),
(5, '2021-01-12', 20, 60, 20, 80),
(6, '2021-01-12', 20, 60, 20, 80),
(7, '2021-01-12', 20, 60, 20, 80),
(8, '2021-01-12', 20, 60, 20, 80),
(9, '2021-01-12', 20, 60, 20, 80),
(10, '0000-00-00', 20, 60, 20, 80),
(11, '0000-00-00', 20, 60, 20, 80),
(12, '2021-01-12', 20, 60, 20, 80),
(13, '2021-01-12', 20, 60, 20, 80),
(14, '2021-01-12', 20, 60, 20, 80),
(15, '2021-01-12', 20, 60, 20, 80),
(16, '2021-01-12', 20, 60, 20, 80),
(17, '2021-01-12', 20, 60, 20, 80),
(18, '2021-01-12', 20, 60, 20, 80),
(19, '2021-01-12', 20, 80, 30, 100),
(20, '2021-01-12', 20, 80, 30, 100),
(21, '2021-01-12', 20, 60, 20, 80),
(22, '2021-01-12', 20, 60, 20, 80),
(23, '2021-01-12', 20, 60, 20, 80),
(24, '2021-01-16', 20, 60, 20, 80),
(25, '0000-00-00', 40, 60, 10, 50),
(26, '2021-01-16', 40, 60, 10, 50),
(27, '2021-01-16', 40, 60, 10, 50),
(28, '2021-01-16', 40, 60, 10, 50),
(29, '2021-01-16', 40, 60, 10, 50),
(30, '2021-01-16', 40, 60, 10, 50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menue_price`
--
ALTER TABLE `menue_price`
  ADD PRIMARY KEY (`rec_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menue_price`
--
ALTER TABLE `menue_price`
  MODIFY `rec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
