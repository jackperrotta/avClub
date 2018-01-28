-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2017 at 04:42 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `avclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
CREATE TABLE `people` (
  `people_id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`people_id`, `username`, `password`, `firstname`, `lastname`, `type`) VALUES
(1, 'joe', 'joe123', 'Joe', 'TeacherGuy', 'teacher'),
(2, 'jane', 'jane123', 'Jane', 'TeacherLady', 'teacher'),
(3, 'betty', 'betty123', 'Betty', 'TechLady', 'tech'),
(4, 'brian', 'brian123', 'Brian', 'TechGuy', 'tech');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `avtech_id` int(11) DEFAULT NULL,
  `room` varchar(5) NOT NULL,
  `problem_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`request_id`, `teacher_id`, `avtech_id`, `room`, `problem_type`, `status`, `comments`) VALUES
(1, 1, NULL, '333', 'Projector Problem', 'In Progress', 'Please help, ASAP'),
(2, 1, NULL, '333', 'AV Cart Needed', 'In Progress', 'need a cart now'),
(3, 2, 4, '222', 'Other', 'In Progress', 'air conditioning problem'),
(4, 2, NULL, '555', 'Computer Problem', 'In Progress', 'unable to load BIOS. Black screen.'),
(5, 2, NULL, '555', 'Computer Problem', 'In Progress', 'unable to load BIOS. Black screen.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`people_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `avtech_id` (`avtech_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `people_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
