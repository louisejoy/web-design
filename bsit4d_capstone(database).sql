-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 04:43 AM
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
-- Database: `bsit4d_capstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_user` varchar(20) NOT NULL,
  `admin_pass` varchar(36) NOT NULL,
  `admin_key` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_user`, `admin_pass`, `admin_key`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'OJT');

-- --------------------------------------------------------

--
-- Table structure for table `bap_sponsors`
--

CREATE TABLE `bap_sponsors` (
  `sponsors_name` varchar(255) NOT NULL,
  `sponsors_age` int(2) NOT NULL,
  `sponsors_religion` varchar(255) NOT NULL,
  `sponsors_residence` varchar(255) NOT NULL,
  `bap_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bap_sponsors`
--

INSERT INTO `bap_sponsors` (`sponsors_name`, `sponsors_age`, `sponsors_religion`, `sponsors_residence`, `bap_id`) VALUES
('reteryqret', 34, 'dfasdgsdfg', 'fdbdfbdfgb', 1),
('sdfgfdg', 32, 'fgsdfgdfg', 'bncvbnbvn', 1),
('gdsfgsdfgh', 56, 'dfghfdgj', 'jhgjfghjgn', 1),
('wdaerfwe', 44, 'sdfgsdfg', 'scvxcv', 1),
('asd', 34, 'sdfg', 'vcvn', 3),
('435', 56, 'b', 'jfhgnhg', 3),
('fghj', 45, 'ghdf', 'cvb', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bap_tbl`
--

CREATE TABLE `bap_tbl` (
  `bap_id` int(11) NOT NULL,
  `bap_child` varchar(65) NOT NULL,
  `bap_age` varchar(5) NOT NULL,
  `bap_father` varchar(255) NOT NULL,
  `bap_mother` varchar(255) NOT NULL,
  `child_birthday` date NOT NULL,
  `child_birthplace` varchar(255) NOT NULL,
  `child_gender` varchar(65) NOT NULL,
  `legitimacy` varchar(65) NOT NULL,
  `father_origin` varchar(255) NOT NULL,
  `mother_origin` varchar(255) NOT NULL,
  `parent_residence` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bap_tbl`
--

INSERT INTO `bap_tbl` (`bap_id`, `bap_child`, `bap_age`, `bap_father`, `bap_mother`, `child_birthday`, `child_birthplace`, `child_gender`, `legitimacy`, `father_origin`, `mother_origin`, `parent_residence`, `client_id`) VALUES
(3, 'sdfg', '3', 'sfdgfdg', 'sdfg', '2017-10-07', '43545fgsdfgdfg', 'Female', 'Protestant', 'xcbv', 'jhj', 'bnmv', 204),
(4, 'ioup', '67', 'dyghfg', 'ghj', '2017-10-11', 'hgfjhj', 'Female', 'Protestant', 'vbn', 'fghj', 'fghj', 205);

-- --------------------------------------------------------

--
-- Table structure for table `client_tbl`
--

CREATE TABLE `client_tbl` (
  `client_id` int(11) NOT NULL,
  `client_fname` varchar(255) NOT NULL,
  `client_mname` varchar(255) NOT NULL,
  `client_lname` varchar(255) NOT NULL,
  `client_gender` varchar(65) NOT NULL,
  `client_contact` int(25) NOT NULL,
  `client_email` varchar(25) NOT NULL,
  `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `client_order` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_tbl`
--

INSERT INTO `client_tbl` (`client_id`, `client_fname`, `client_mname`, `client_lname`, `client_gender`, `client_contact`, `client_email`, `submitted`, `client_order`) VALUES
(203, 'Louise joy', '', 'Mabanag', 'Female', 45345, 'l_joyknk@yahoo.com', '2017-10-11 16:37:44', 'mass'),
(204, 'Louise joy', '', 'Mabanag', 'Female', 445345, 'l_joyknk@yahoo.com', '2017-10-11 16:38:26', 'baptism'),
(205, 'Louise joy', '', 'Mabanag', 'Male', 4576567, 'l_joyknk@yahoo.com', '2017-10-11 16:39:04', 'baptism'),
(206, 'Louise joy', '', 'Mabanag', 'Female', 325246, 'l_joyknk@yahoo.com', '2017-10-11 16:39:20', 'funeral'),
(207, 'Louise joy', '', 'Mabanag', 'Female', 0, 'l_joyknk@yahoo.com', '2017-10-11 16:39:37', 'funeral'),
(208, 'www', 'www', 'www', 'Female', 12345678, 'www@www', '2017-10-11 16:47:24', 'wedding');

-- --------------------------------------------------------

--
-- Table structure for table `date_tbl`
--

CREATE TABLE `date_tbl` (
  `date_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `ordertype` int(10) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `date_tbl`
--

INSERT INTO `date_tbl` (`date_id`, `date`, `time`, `ordertype`, `client_id`) VALUES
(40, '2017-10-16', '10:00:00', 0, 203),
(41, '2017-10-14', '10:00:00', 1, 204),
(42, '2017-10-14', '08:00:00', 2, 205),
(43, '2017-10-22', '10:00:00', 2, 206),
(44, '2017-10-24', '13:00:00', 0, 207),
(45, '2017-10-26', '11:00:00', 0, 208);

-- --------------------------------------------------------

--
-- Table structure for table `event_tbl`
--

CREATE TABLE `event_tbl` (
  `event_id` int(10) NOT NULL,
  `event_month` varchar(20) NOT NULL,
  `event_day` int(10) NOT NULL,
  `event_title` varchar(1000) NOT NULL,
  `event_desc` varchar(1000) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_order` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_tbl`
--

INSERT INTO `event_tbl` (`event_id`, `event_month`, `event_day`, `event_title`, `event_desc`, `date_created`, `event_order`) VALUES
(4, 'Jan', 1, 'aa', 'aa', '2017-09-29 07:19:09', 1),
(5, 'Apr', 3, 'sdfg', 'sdfg', '2017-10-07 16:39:34', 1),
(7, 'May', 11, 'dadadaadda', 'adddadadad', '2017-09-30 02:46:31', 1),
(8, 'Nov', 1, 'kjlkjlkjlk', 'yfjgkhklj', '2017-09-30 02:46:27', 1),
(10, 'Oct', 31, 'Holiday', 'Special non-working Day!!', '2017-10-07 16:40:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `funeral_tbl`
--

CREATE TABLE `funeral_tbl` (
  `funeral_id` int(11) NOT NULL,
  `funeral_name` varchar(65) NOT NULL,
  `funeral_relation` varchar(65) NOT NULL,
  `funeral_other` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funeral_tbl`
--

INSERT INTO `funeral_tbl` (`funeral_id`, `funeral_name`, `funeral_relation`, `funeral_other`, `client_id`) VALUES
(3, 'ded', 'ded', 'sfdgsdf', 206),
(4, 'xcvbcvb', '657456', 'dsfdsgfdth', 207);

-- --------------------------------------------------------

--
-- Table structure for table `img_upload`
--

CREATE TABLE `img_upload` (
  `img_id` int(11) NOT NULL,
  `img_link` varchar(255) NOT NULL,
  `ordertype` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_upload`
--

INSERT INTO `img_upload` (`img_id`, `img_link`, `ordertype`) VALUES
(6, 'image_upload/601644.jpgtumblr_inline_nlfmv1ZBn21ruzlp5_500.jpg', 1),
(7, 'image_upload/938870.jpgtumblr_inline_nlfmvxtUsO1ruzlp5_250.jpg', 1),
(8, 'image_upload/852187.jpg1966674.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mass_tbl`
--

CREATE TABLE `mass_tbl` (
  `mass_id` int(11) NOT NULL,
  `mass_name` varchar(65) NOT NULL,
  `mass_type` varchar(65) NOT NULL,
  `mass_other` varchar(255) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mass_tbl`
--

INSERT INTO `mass_tbl` (`mass_id`, `mass_name`, `mass_type`, `mass_other`, `client_id`) VALUES
(5, 'qwe', 'Death Anniversary', 'wetet', 203);

-- --------------------------------------------------------

--
-- Table structure for table `mssg_tbl`
--

CREATE TABLE `mssg_tbl` (
  `mssgnum` int(11) NOT NULL,
  `mssg_fn` varchar(65) NOT NULL,
  `mssg_ln` varchar(65) NOT NULL,
  `mssg_email` varchar(25) NOT NULL,
  `mssg_subject` varchar(25) NOT NULL,
  `mssg_cmnt` text NOT NULL,
  `mssg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mssg_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mssg_tbl`
--

INSERT INTO `mssg_tbl` (`mssgnum`, `mssg_fn`, `mssg_ln`, `mssg_email`, `mssg_subject`, `mssg_cmnt`, `mssg_date`, `mssg_status`) VALUES
(7, 'tetyioyi', 'oksgokfo', 'joy@yahoo.com', 'kajdfk', 'kjsdflkjdlkjlkgjdkgjkjg', '2017-09-30 02:08:38', 2),
(8, 'fghjd', 'dghh', 'fhd@fdg', 'dgg', 'dfgsg', '2017-09-29 17:54:21', 2),
(9, 'lalalal', 'lalala', 'kdfls@kfls', 'lololol', 'klsjdflkjsdkfmlsdkclkmkmdkcmkdc', '2017-09-30 02:01:26', 1),
(10, 'hahhah', 'hahah', 'haha@haha', 'jkhdfjkhs', 'kdlfklkdjklhg', '2017-09-30 02:30:05', 2),
(11, 'pearl', 'universe', 'pearl@yahoo.com', 'hello', 'goodmorningggggg', '2017-10-11 10:19:39', 2),
(12, 'finn', 'martins', 'finn@gmail.com', 'booyahhhh', 'boomshakalaklokamakadokabombabeybeee', '2017-10-07 13:40:31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wed_tbl`
--

CREATE TABLE `wed_tbl` (
  `wed_id` int(11) NOT NULL,
  `wed_groom` varchar(65) NOT NULL,
  `wed_bride` varchar(65) NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wed_tbl`
--

INSERT INTO `wed_tbl` (`wed_id`, `wed_groom`, `wed_bride`, `client_id`) VALUES
(9, 'aaaa', 'bbbb', 208);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_user`);

--
-- Indexes for table `bap_sponsors`
--
ALTER TABLE `bap_sponsors`
  ADD KEY `bap_id` (`bap_id`);

--
-- Indexes for table `bap_tbl`
--
ALTER TABLE `bap_tbl`
  ADD PRIMARY KEY (`bap_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `client_tbl`
--
ALTER TABLE `client_tbl`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `date_tbl`
--
ALTER TABLE `date_tbl`
  ADD PRIMARY KEY (`date_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `event_tbl`
--
ALTER TABLE `event_tbl`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `funeral_tbl`
--
ALTER TABLE `funeral_tbl`
  ADD PRIMARY KEY (`funeral_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `img_upload`
--
ALTER TABLE `img_upload`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `mass_tbl`
--
ALTER TABLE `mass_tbl`
  ADD PRIMARY KEY (`mass_id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `mssg_tbl`
--
ALTER TABLE `mssg_tbl`
  ADD PRIMARY KEY (`mssgnum`);

--
-- Indexes for table `wed_tbl`
--
ALTER TABLE `wed_tbl`
  ADD PRIMARY KEY (`wed_id`),
  ADD KEY `client_id` (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bap_tbl`
--
ALTER TABLE `bap_tbl`
  MODIFY `bap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `client_tbl`
--
ALTER TABLE `client_tbl`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT for table `date_tbl`
--
ALTER TABLE `date_tbl`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `event_tbl`
--
ALTER TABLE `event_tbl`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `funeral_tbl`
--
ALTER TABLE `funeral_tbl`
  MODIFY `funeral_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `img_upload`
--
ALTER TABLE `img_upload`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mass_tbl`
--
ALTER TABLE `mass_tbl`
  MODIFY `mass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mssg_tbl`
--
ALTER TABLE `mssg_tbl`
  MODIFY `mssgnum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `wed_tbl`
--
ALTER TABLE `wed_tbl`
  MODIFY `wed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bap_sponsors`
--
ALTER TABLE `bap_sponsors`
  ADD CONSTRAINT `bap_sponsors_ibfk_1` FOREIGN KEY (`bap_id`) REFERENCES `bap_tbl` (`bap_id`);

--
-- Constraints for table `bap_tbl`
--
ALTER TABLE `bap_tbl`
  ADD CONSTRAINT `bap_tbl_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_tbl` (`client_id`);

--
-- Constraints for table `date_tbl`
--
ALTER TABLE `date_tbl`
  ADD CONSTRAINT `date_tbl_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_tbl` (`client_id`);

--
-- Constraints for table `funeral_tbl`
--
ALTER TABLE `funeral_tbl`
  ADD CONSTRAINT `funeral_tbl_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_tbl` (`client_id`);

--
-- Constraints for table `mass_tbl`
--
ALTER TABLE `mass_tbl`
  ADD CONSTRAINT `mass_tbl_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_tbl` (`client_id`);

--
-- Constraints for table `wed_tbl`
--
ALTER TABLE `wed_tbl`
  ADD CONSTRAINT `wed_tbl_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client_tbl` (`client_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
