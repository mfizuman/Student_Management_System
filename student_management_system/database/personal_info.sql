-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2018 at 12:02 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `temp`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `faname` varchar(50) DEFAULT NULL,
  `faocu` varchar(15) NOT NULL,
  `moname` varchar(50) DEFAULT NULL,
  `moocu` varchar(15) NOT NULL,
  `addr` varchar(80) NOT NULL,
  `birth` date DEFAULT NULL,
  `gender` varchar(5) NOT NULL,
  `sscName` varchar(50) DEFAULT NULL,
  `sscGpa` int(1) DEFAULT NULL,
  `hscName` varchar(50) DEFAULT NULL,
  `hscGpa` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `fname`, `lname`, `email`, `faname`, `faocu`, `moname`, `moocu`, `addr`, `birth`, `gender`, `sscName`, `sscGpa`, `hscName`, `hscGpa`) VALUES
(7, 'Hasan', 'Sabuj', 'sabuj@gmail.com', 'bastob', 'std', 'mohibul', 'housewife', '1995-11-23', '1995-11-23', 'male', 'vola', 2, 'nodi', 1),
(8, 'a', 'd', 'f@f.com', 'a', 'a', 'a', 'a', 'a', '1995-11-11', 'male', 'a', 3, 'a', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
