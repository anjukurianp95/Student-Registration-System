-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 01:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `adminid` varchar(20) NOT NULL,
  `adminlv` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `adminid`, `adminlv`) VALUES
('admin2', 'admin234', '101', 'B'),
('Admin3', 'admin345', '103', 'C'),
('Admin4', 'admin456', '104', 'C'),
('admin1', 'admin123', '100', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `coursename` varchar(50) NOT NULL,
  `depname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`coursename`, `depname`) VALUES
('B. Tech', 'EC'),
('B. Tech', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `noticeid` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `begdate` date NOT NULL,
  `enddate` date NOT NULL,
  `description` varchar(50) NOT NULL,
  `adminid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`noticeid`, `title`, `begdate`, `enddate`, `description`, `adminid`) VALUES
(3, 'Sports Day', '2020-01-27', '2020-01-29', 'for all batch', 100);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `regno` int(11) NOT NULL,
  `indexno` int(11) NOT NULL,
  `coursecode` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subname` varchar(50) NOT NULL,
  `result` varchar(50) NOT NULL,
  `credit` varchar(50) NOT NULL,
  `totalgpa` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`regno`, `indexno`, `coursecode`, `name`, `subname`, `result`, `credit`, `totalgpa`) VALUES
(1214, 1, '11', 'Anju', 'OOPS', 'passed', '4', '7.5');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `indexno` int(11) NOT NULL,
  `regno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `depname` varchar(20) NOT NULL,
  `coursename` varchar(11) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `semno` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`indexno`, `regno`, `name`, `mobile`, `depname`, `coursename`, `password`, `email`, `username`, `semno`, `year`) VALUES
(1, 1214, 'Anju', 7034311056, 'CS', 'B. Tech', 'anju1234', 'anju@gmail.com', 'anjukurian', 8, 4),
(3, 1215, 'Joncy', 8809876542, 'CS', 'B. Tech', 'joncy123', 'joncy@gmail.com', 'joncy', 8, 4),
(4, 1216, 'anu', 7034311057, 'EC', 'B. Tech', 'anju123', 'anu@gmail.com', 'anju', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `code` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `subjectname` varchar(20) NOT NULL,
  `depname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`code`, `semester`, `year`, `credit`, `subjectname`, `depname`) VALUES
('8101', '8', '4', '3', 'OOPS', 'CS'),
('8102', '8', '4', '3', 'DISTRIBUTED COMPUTIN', 'CS');

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`username`, `password`) VALUES
('superuser', 'superuser');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `day` varchar(10) NOT NULL,
  `subjecthour1` varchar(20) NOT NULL,
  `subjecthour2` varchar(20) NOT NULL,
  `subjecthour3` varchar(20) NOT NULL,
  `subjecthour4` varchar(20) NOT NULL,
  `depname` varchar(20) NOT NULL,
  `adminid` int(11) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`day`, `subjecthour1`, `subjecthour2`, `subjecthour3`, `subjecthour4`, `depname`, `adminid`, `semester`) VALUES
('monday', 'OOP', 'CAO', 'DSA', 'DSP', 'CS', 100, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`noticeid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`indexno`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`indexno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `noticeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `indexno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
