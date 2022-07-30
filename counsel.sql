-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2022 at 12:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `counsel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `counseling_session`
--

CREATE TABLE `counseling_session` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `counseling_category` text NOT NULL,
  `counselor_id` int(11) NOT NULL,
  `appointment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counseling_session`
--

INSERT INTO `counseling_session` (`id`, `student_id`, `counseling_category`, `counselor_id`, `appointment_date`) VALUES
(1, 2, 'General Counseling', 1, '2022-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `counselor`
--

CREATE TABLE `counselor` (
  `counselor_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `counselor`
--

INSERT INTO `counselor` (`counselor_id`, `first_name`, `last_name`, `gender`, `email`, `uname`, `upass`) VALUES
(1, 'Fortune', 'Edhere', 'Female', 'uyoyoedhere@gmail.com', 'fortune15', '8a039f415bc885f3ce68c2f89dff1729');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `mat_number` varchar(12) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `upass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `gender`, `email`, `department`, `mat_number`, `uname`, `upass`) VALUES
(2, 'Famous', 'Fortune', 'Female', 'uyoyoedhere@gmail.com', 'Physiology', '19/CHS05/065', 'Mystery15', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Test', 'Test', 'Test', 'test@testgmail.com', 'Testing', 'Test', 'test', 'cc03e747a6afbbcbf8be7668acfebee5'),
(5, 'Amblessed', 'Noble', 'Male', 'ambnoble@gmail.com', 'Computer Science', '02/CS001/001', 'ambee01', 'da500426dc7d3bfde9288728a68b2668');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counseling_session`
--
ALTER TABLE `counseling_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counselor`
--
ALTER TABLE `counselor`
  ADD PRIMARY KEY (`counselor_id`),
  ADD UNIQUE KEY `counsel_uname` (`uname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `uname` (`uname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counseling_session`
--
ALTER TABLE `counseling_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counselor`
--
ALTER TABLE `counselor`
  MODIFY `counselor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
