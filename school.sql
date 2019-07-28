-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3312
-- Generation Time: Apr 04, 2019 at 03:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Sebastian', 'Vettel');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseid` int(11) NOT NULL,
  `coursename` varchar(15) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `coursename`, `year`) VALUES
(6, 'OS', 2016),
(101, 'Data Structure', 2018),
(102, 'Computer Networ', 2018),
(103, 'Database Manage', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `rollno` int(11) DEFAULT NULL,
  `courseid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`rollno`, `courseid`) VALUES
(35, 6),
(35, 101),
(36, 103),
(36, 101);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `eventname` varchar(15) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventname`, `location`) VALUES
(1, 'Cricket', 'School Ground'),
(2, 'IOT', 'Lab 1'),
(3, 'Android DEV', 'Thane');

-- --------------------------------------------------------

--
-- Table structure for table `facultylog`
--

CREATE TABLE `facultylog` (
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facultylog`
--

INSERT INTO `facultylog` (`username`, `password`) VALUES
('jignasha.dalal', 'jignashadalal'),
('snehal.shinde', 'snehalshinde'),
('nikhil.parmar', 'nikhilparmar'),
('niti.patel', 'nitipatel'),
('charulata.ingle', 'charulataingle'),
('rupali.patil', 'rupalipatil');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `std` varchar(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `handle`
--

CREATE TABLE `handle` (
  `teacherid` int(11) DEFAULT NULL,
  `eventid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handle`
--

INSERT INTO `handle` (`teacherid`, `eventid`) VALUES
(3, 1),
(2, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `hasf`
--

CREATE TABLE `hasf` (
  `teacherid` int(11) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasf`
--

INSERT INTO `hasf` (`teacherid`, `username`) VALUES
(1, 'jignasha.dalal'),
(2, 'snehal.shinde'),
(3, 'nikhil.parmar'),
(4, 'niti.patel'),
(5, 'charulata.ingle');

-- --------------------------------------------------------

--
-- Table structure for table `hass`
--

CREATE TABLE `hass` (
  `rollno` int(11) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hass`
--

INSERT INTO `hass` (`rollno`, `username`) VALUES
(35, 'divyang.o'),
(31, 'jimit.tm'),
(14, 'viraj.rd'),
(6, 'jay.bhatt'),
(27, 'paras.luvani'),
(16, 'kewal.gangar'),
(36, 'd.padhiyar'),
(25, 'divyang.oza');

-- --------------------------------------------------------

--
-- Table structure for table `participate`
--

CREATE TABLE `participate` (
  `rollno` int(11) DEFAULT NULL,
  `eventid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participate`
--

INSERT INTO `participate` (`rollno`, `eventid`) VALUES
(35, 2),
(35, 1),
(36, 3);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `username` varchar(15) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `English` int(11) NOT NULL,
  `Maths` int(11) NOT NULL,
  `rollno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollno` int(11) NOT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `mname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `mobileno` bigint(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollno`, `fname`, `mname`, `lname`, `dob`, `mobileno`, `email`, `username`) VALUES
(6, 'Jay', 'Dharmendra', 'Bhatt', '1998-12-18', 7812365478, 'jay.bhatt@rediff.edu', 'jay.bhatt'),
(14, 'Viraj', 'Rajesh', 'Doshi', '1998-12-20', 8541263189, 'viraj.rd@rediff.edu', 'viraj.rd'),
(16, 'Kewal', 'Kiran', 'Gangar', '1998-09-05', 8466274201, 'kewal.gangar@rediff.edu', 'kewal.gangar'),
(25, 'Divyang', 'Pragnesh', 'Oza', '1998-09-07', 9892415605, 'divyang.o@rediff.edu', 'divyang.oza'),
(27, 'Paras', 'Ram', 'Luvani', '1999-05-27', 7451021590, 'paras.luvani@rediff.edu', 'paras.luvani'),
(31, 'Jimit', 'Mukesh', 'Mehta', '1998-07-16', 9863245612, 'jimit.tm@rediff.edu', 'jimit.tm'),
(35, 'Divyang', 'Pragnesh', 'Oza', '1998-09-07', 9892415605, 'divyang.o@rediff.edu', 'divyang.o'),
(36, 'Dhruv', 'Deepak', 'Padhiyar', '1998-12-25', 8785412541, 'd.padhiyar@rediff.edu', 'd.padhiyar');

-- --------------------------------------------------------

--
-- Table structure for table `studentlog`
--

CREATE TABLE `studentlog` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlog`
--

INSERT INTO `studentlog` (`username`, `password`) VALUES
('d.padhiyar', 'dpadhiyar'),
('divyang.o', 'divyang7998'),
('divyang.oza', 'qwerty'),
('jay.bhatt', 'jaybhatt'),
('jimit.tm', 'jimittm'),
('kewal.gangar', 'kewalgangar'),
('paras.luvani', 'parasluvani'),
('viraj.rd', 'virajrd');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherid` int(11) NOT NULL,
  `fname` varchar(15) DEFAULT NULL,
  `lname` varchar(15) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `mobileno` bigint(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherid`, `fname`, `lname`, `salary`, `mobileno`, `email`, `username`) VALUES
(1, 'Jignasha', 'Dalal', 60000, 7846321055, 'jignasha.dalal@somaiya.ed', 'jignasha.dalal'),
(2, 'Snehal', 'Shinde', 65000, 8462013687, 'snehal.shinde@rediff.edu', 'snehal.shinde'),
(3, 'Nikhil', 'Parmar', 120000, 9896452130, 'nikhil.parmar@rediff.edu', 'nikhil.parmar'),
(4, 'Niti', 'Patel', 78000, 7466412301, 'niti.patel@rediff.edu', 'niti.patel'),
(5, 'Charulata', 'Ingle', 60500, 7846316941, 'charulata.ingle@rediff.edu', 'charulata.ingle');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `teacherid` int(11) DEFAULT NULL,
  `courseid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`teacherid`, `courseid`) VALUES
(1, 101),
(3, 102),
(4, 103),
(5, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD KEY `rollno` (`rollno`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `facultylog`
--
ALTER TABLE `facultylog`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `handle`
--
ALTER TABLE `handle`
  ADD KEY `teacherid` (`teacherid`),
  ADD KEY `eventid` (`eventid`);

--
-- Indexes for table `hasf`
--
ALTER TABLE `hasf`
  ADD KEY `teacherid` (`teacherid`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `hass`
--
ALTER TABLE `hass`
  ADD KEY `rollno` (`rollno`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `participate`
--
ALTER TABLE `participate`
  ADD KEY `rollno` (`rollno`),
  ADD KEY `eventid` (`eventid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `studentlog`
--
ALTER TABLE `studentlog`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD KEY `teacherid` (`teacherid`),
  ADD KEY `courseid` (`courseid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`rollno`),
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`);

--
-- Constraints for table `handle`
--
ALTER TABLE `handle`
  ADD CONSTRAINT `handle_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `teacher` (`teacherid`),
  ADD CONSTRAINT `handle_ibfk_2` FOREIGN KEY (`eventid`) REFERENCES `event` (`eventid`);

--
-- Constraints for table `hasf`
--
ALTER TABLE `hasf`
  ADD CONSTRAINT `hasf_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `teacher` (`teacherid`),
  ADD CONSTRAINT `hasf_ibfk_2` FOREIGN KEY (`username`) REFERENCES `facultylog` (`username`);

--
-- Constraints for table `hass`
--
ALTER TABLE `hass`
  ADD CONSTRAINT `hass_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`rollno`),
  ADD CONSTRAINT `hass_ibfk_2` FOREIGN KEY (`username`) REFERENCES `studentlog` (`username`);

--
-- Constraints for table `participate`
--
ALTER TABLE `participate`
  ADD CONSTRAINT `participate_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `student` (`rollno`),
  ADD CONSTRAINT `participate_ibfk_2` FOREIGN KEY (`eventid`) REFERENCES `event` (`eventid`);

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`teacherid`) REFERENCES `teacher` (`teacherid`),
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`courseid`) REFERENCES `course` (`courseid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
