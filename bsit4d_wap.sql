-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 10:59 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bsit4d_wap`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_no` varchar(25) NOT NULL,
  `emp_pass` varchar(25) NOT NULL,
  `emp_ln` varchar(25) NOT NULL,
  `emp_fn` varchar(25) NOT NULL,
  `emp_mn` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_no`, `emp_pass`, `emp_ln`, `emp_fn`, `emp_mn`) VALUES
('977', '977', 'cunanan', 'angelito', 'ignacio');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_code` varchar(25) NOT NULL,
  `exam_title` varchar(65) NOT NULL,
  `subject_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `score_tbl`
--

CREATE TABLE `score_tbl` (
  `score` int(25) NOT NULL,
  `stud_no` varchar(25) NOT NULL,
  `exam_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_no` varchar(25) NOT NULL,
  `stud_pass` varchar(25) NOT NULL,
  `stud_ln` varchar(25) NOT NULL,
  `stud_fn` varchar(25) NOT NULL,
  `stud_mn` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_no`, `stud_pass`, `stud_ln`, `stud_fn`, `stud_mn`) VALUES
('2014102824', 'animes', 'mabanag', 'louise joy', 'gonzales');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_code` varchar(25) NOT NULL,
  `subject_description` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `subject_description`) VALUES
('ITE22', 'WAP2');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_exam`
--

CREATE TABLE `teacher_exam` (
  `emp_no` varchar(25) NOT NULL,
  `exam_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `test_question` varchar(300) NOT NULL,
  `correct_answer` varchar(65) NOT NULL,
  `option_1` varchar(65) NOT NULL,
  `option_2` varchar(65) NOT NULL,
  `option_3` varchar(65) NOT NULL,
  `exam_code` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_code`),
  ADD UNIQUE KEY `subject_code` (`subject_code`);

--
-- Indexes for table `score_tbl`
--
ALTER TABLE `score_tbl`
  ADD UNIQUE KEY `stud_no` (`stud_no`),
  ADD UNIQUE KEY `exam_code` (`exam_code`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_no`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_code`);

--
-- Indexes for table `teacher_exam`
--
ALTER TABLE `teacher_exam`
  ADD UNIQUE KEY `emp_no` (`emp_no`),
  ADD UNIQUE KEY `exam_code` (`exam_code`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD UNIQUE KEY `exam_code` (`exam_code`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`subject_code`) REFERENCES `subject` (`subject_code`);

--
-- Constraints for table `score_tbl`
--
ALTER TABLE `score_tbl`
  ADD CONSTRAINT `score_tbl_ibfk_1` FOREIGN KEY (`stud_no`) REFERENCES `student` (`stud_no`),
  ADD CONSTRAINT `score_tbl_ibfk_2` FOREIGN KEY (`exam_code`) REFERENCES `exam` (`exam_code`);

--
-- Constraints for table `teacher_exam`
--
ALTER TABLE `teacher_exam`
  ADD CONSTRAINT `teacher_exam_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `employee` (`emp_no`),
  ADD CONSTRAINT `teacher_exam_ibfk_2` FOREIGN KEY (`exam_code`) REFERENCES `exam` (`exam_code`);

--
-- Constraints for table `test`
--
ALTER TABLE `test`
  ADD CONSTRAINT `test_ibfk_1` FOREIGN KEY (`exam_code`) REFERENCES `exam` (`exam_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
