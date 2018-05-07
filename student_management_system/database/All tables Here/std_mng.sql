-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2018 at 09:49 AM
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
-- Database: `std_mng`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`id`, `name`, `email`, `phno`, `password`) VALUES
(9, 'Tanvir Hossain', 'hossain@gmail.com', '67354657634', '1111'),
(10, 'Motaleb Hossain', 'motaleb@gmail.com', '65348768764238', '2222'),
(12, 'Shamsul Kaonain', 'kaonain@gmail.com', '235765432', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(5) NOT NULL,
  `dept_name` varchar(20) NOT NULL,
  `dept_loc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_loc`) VALUES
(20001, 'EEE', 'Building 5, 5th floor'),
(30001, 'CSE', 'Building 5, 4th Floor'),
(40001, 'ESS', 'Building 4, 8th floor'),
(50001, 'MNS', 'Building 2, 15th floor');

-- --------------------------------------------------------

--
-- Table structure for table `gradedetails`
--

CREATE TABLE `gradedetails` (
  `subjectname` varchar(10) NOT NULL,
  `gpa` int(10) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gradedetails`
--

INSERT INTO `gradedetails` (`subjectname`, `gpa`, `grade`, `id`) VALUES
('Computer S', 3, 'B', 0),
('Computer S', 4, 'A', 10),
('Computer S', 4, 'A', 10);

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
(9, 'Tanvir', 'Hossain', 'hossain@gmail.com', 'Ahmed Hossain', 'Teacher', 'Jorina Begum', 'Housewife', 'Mohammadpur', '1997-10-05', 'male', 'Saint Joseph School', 5, 'Notre Dame College', 5),
(10, 'Motaleb', 'Hossain', 'motaleb@gmail.com', 'Mohammad Hossain', 'Architect', 'Morjina Begum', 'Housewife', 'Uttara', '1997-02-19', '', 'Rajuk', 5, 'Rajuk', 5),
(12, 'Shamsul', 'Kaonain', 'kaonain@gmail.com', 'Kabir Hossain', 'Teacher', 'Korima Begum', 'Housewife', 'Dhanmondi', '1996-10-05', '', 'Dhanmondi Govt. Boys High School', 5, 'Notre Dame College', 5);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `std_id` int(11) NOT NULL,
  `sub` varchar(20) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`std_id`, `sub`, `day`, `time`) VALUES
(1, 'CSE110', 'sun', '11am'),
(3, 'CSE110', 'sun', '9am'),
(1, 'MAT110', 'mon', '11am'),
(1, 'ENG091', 'sun', '9am'),
(2, 'Electrical & Electro', 'sun', '9am'),
(1, 'Electrical & Electro', 'sun', '9am'),
(1, 'Electrical & Electro', 'sun', '9am'),
(10, 'Computer Sci & Engin', 'sun', '9am'),
(2, 'Computer Sci & Engin', 'sun', '9am'),
(1, 'Electrical & Electro', 'sun', '9am'),
(10, 'Electrical & Electro', 'sun', '9am'),
(10, 'Mathematics', 'sun', '11am'),
(10, 'Electronics & Commun', 'sun', '9am'),
(12, 'Electrical & Electro', 'sun', '9am'),
(12, 'Computer Sci & Engin', 'sun', '1pm'),
(9, 'Electrical & Electro', 'sun', '9am'),
(9, 'Electronics & Commun', 'sun', '11am'),
(8, 'Computer Science', 'sun', '9am'),
(8, 'Electrical & Electro', 'sun', '11am'),
(2, 'Mathematics', 'sun', '11am'),
(10, 'Computer Science', 'sun', '1pm'),
(14, 'Electrical & Electro', 'mon', '1pm'),
(10, 'Electrical & Electro', 'sun', '9am');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sub_id` int(7) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `sub_credit` int(4) NOT NULL,
  `dept_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sub_id`, `sub_name`, `sub_credit`, `dept_id`) VALUES
(20011, 'Electrical & Electronics Eng', 136, 20001),
(20012, 'Electronics & Communication', 133, 20001),
(30011, 'Computer Sci & Engineering', 136, 30001),
(30012, 'Computer Science', 130, 30001),
(50011, 'Mathematics', 145, 50001);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `dept_id` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a`
--
ALTER TABLE `a`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `dept_id` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
