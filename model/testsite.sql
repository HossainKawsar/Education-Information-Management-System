-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 05:21 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `requser` varchar(100) NOT NULL,
  `teauser` varchar(100) NOT NULL,
  `coursetitle` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `requser`, `teauser`, `coursetitle`, `comment`, `time`) VALUES
(12, 'hasin', 'testt', 'dfgbdzf', 'dfgdz', 'dfdzfg'),
(13, 'Anurag', 'hasin', 'dfgbdzf', 'dfgdz', 'dfdzfg'),
(14, 'Anurag', 'FACULTY', 'CSE111', 'hello', 'mon');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(6) NOT NULL,
  `description` text NOT NULL,
  `teacher` varchar(100) NOT NULL,
  `coursetype` varchar(3) NOT NULL DEFAULT 'CSE',
  `appointment` varchar(100) NOT NULL,
  `user` varchar(50) NOT NULL,
  `longdes` varchar(1000) NOT NULL,
  `filelink` varchar(100) NOT NULL,
  `prereq` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `description`, `teacher`, `coursetype`, `appointment`, `user`, `longdes`, `filelink`, `prereq`) VALUES
(39, 'CSE110', ' Programming Language I', 'A', 'CSE', 'MON/WED 8AM-9.20AM', 'testt', '', '', ''),
(40, 'CSE230', 'Discrete Mathematics', 'C', 'CSE', 'MON/WED 8AM-9.20AM', 'testt', '', '', ''),
(41, 'EEE207', 'Electronic Circuits II', 'E', 'EEE', 'SAT/TUE 12.30PM-1.50PM', '', '', '', ''),
(42, 'EEE205', 'Electronic Circuits I', 'B', 'EEE', 'SAT/TUE 12.30PM-1.50PM', 'testt', '', '', ''),
(43, 'STA201', 'Probability and Statistics ', 'F', 'OTH', 'SAT/TUE 12.30PM-1.50PM', 'testt', '', '', ''),
(44, 'MAT111', 'Principles of Mathematics', 'G', 'OTH', 'MON/WED 9.30AM-11AM', 'testt', '', '', ''),
(45, 'CSE111', 'Programming Language-II', 'D', 'CSE', 'MON/WED 9.30AM-11AM', 'testt', '', '', ''),
(46, 'CSE220', 'Data Structures', 'C', 'CSE', 'SAT/TUE 12.30PM-1.50PM', '', '', '', ''),
(47, 'CSE221', 'Algorithms', 'A', 'CSE', 'MON/WED 8AM-9.20AM', '', '', '', ''),
(48, 'MAT121', 'Basic Algebra', 'G', 'OTH', 'SAT/TUE 12.30PM-1.50PM', 'testt', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `info_student`
--

CREATE TABLE `info_student` (
  `uname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` int(10) NOT NULL,
  `major` varchar(20) NOT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_student`
--

INSERT INTO `info_student` (`uname`, `fullname`, `institution`, `address`, `phone`, `major`, `bio`) VALUES
('Anurag', 'anurag', 'brac', 'moa', 19, '', '10'),
('hasin', 'fgdg', 'dfgsdfg', 'qweqw', 123, '', 'afgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `info_teacher`
--

CREATE TABLE `info_teacher` (
  `uname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `availability` varchar(20) NOT NULL,
  `bio` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_teacher`
--

INSERT INTO `info_teacher` (`uname`, `fullname`, `education`, `email`, `availability`, `bio`) VALUES
('FACULTY', 'FACULTY', 'sssss', 'sss', 'ssss', 'safdsdfs'),
('hasin', 'Hasin', 'dfgdfg', 'sfgsdfg', 'sdfsdf', 'afa'),
('testt', 'Test Teacher One', 'Test College', 'testt@aol.com', 'Sunday', 'Short bio for the test teacher');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `userstatus` varchar(8) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `userstatus`) VALUES
(13, 'admin', '$2y$10$sl9tj58eSLdks5GausH1pueXfMDWOgaaJ4f41fMMeCr6ad2WCevju', '2019-07-22 16:36:11', 'admin'),
(20, 'testt', '$2y$10$s59nexJVYrAtKm2eF0pI0.NzX/oMb5GL942YDxv3iItUqq37K53..', '2019-12-09 08:23:37', 'teacher'),
(21, 'hasin', '$2y$10$Ajg/pn9qiLXsZhxeXmkUqe6y04dLEFRTWlhbGITxvJ0pfDxsOreli', '2021-04-23 12:02:17', 'user'),
(22, 'Anurag', '$2y$10$GZUKKQdYgG9DaKqTMgCx/uHHtj4VcrlQHyLFPhyGQR4r7ofNR9iSq', '2021-04-23 13:14:02', 'user'),
(23, 'FACULTY', '$2y$10$CfhUpjcPnTG11Mn3mgNnpuvwxDHma8UB9GZ/m94z9expONYhWUhMq', '2021-04-26 21:01:49', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `user` (`user`);

--
-- Indexes for table `info_student`
--
ALTER TABLE `info_student`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `info_teacher`
--
ALTER TABLE `info_teacher`
  ADD PRIMARY KEY (`uname`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `userstatus` (`userstatus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_student`
--
ALTER TABLE `info_student`
  ADD CONSTRAINT `info_student_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `info_teacher`
--
ALTER TABLE `info_teacher`
  ADD CONSTRAINT `info_teacher_ibfk_1` FOREIGN KEY (`uname`) REFERENCES `users` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
