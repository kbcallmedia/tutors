-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 03:22 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorcrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `studprof`
--

CREATE TABLE `studprof` (
  `id` int(50) NOT NULL,
  `fullname` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `classc` varchar(30) NOT NULL,
  `subjects` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `cityarea` varchar(100) NOT NULL,
  `studenthome` varchar(100) NOT NULL,
  `tutorplace` varchar(100) NOT NULL,
  `online` varchar(60) NOT NULL,
  `groupinsti` text NOT NULL,
  `twoseessos` varchar(50) NOT NULL,
  `threseessos` varchar(50) NOT NULL,
  `fourseesion` varchar(50) NOT NULL,
  `fiveseesson` varchar(50) NOT NULL,
  `requirment` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `inzip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studprof`
--

INSERT INTO `studprof` (`id`, `fullname`, `mobile`, `gender`, `classc`, `subjects`, `email`, `password`, `city`, `cityarea`, `studenthome`, `tutorplace`, `online`, `groupinsti`, `twoseessos`, `threseessos`, `fourseesion`, `fiveseesson`, `requirment`, `state`, `inzip`) VALUES
(1, 'fghfgh', '89464646', '', '', '', 'admin@admin.com', 'password', '', '', 'Students Home', '', '', '', '', '', '', '', '', '', 43110),
(2, 'kiran', '8956266929', '', '', '', 'admin@admin.com', 'password', '', '', '', 'Tutors Place', '', '', '', '', '', '', '', '', 431001),
(3, 'kiran', '8956266929', '', '', '', 'admin@admin.com', 'password', '', '', 'Students Home', 'Tutors Place', 'Online', 'Group/Institute', '', '', '', '', '', '', 431001),
(4, '', '', '', '', '', 'admin@admin.com', 'password', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 'jay', '9209179807', '', '4th', 'English', 'admin@admin.com', 'password', 'Pune', 'Nirala Bazar', '', '', 'Online', '', '2 seessos/classes in a week', '3 seessos/classes in a week', '', '', 'and more subject info', 'Choose...', 431002),
(6, 'jay', '9209179807', '', '4th', 'English', 'admin@admin.com', 'password', 'Pune', 'Nirala Bazar', '', '', 'Online', '', '2 seessos/classes in a week', '3 seessos/classes in a week', '', '', 'and more subject info', 'Choose...', 431002),
(7, 'dsfljl', '46464646', '', 'sdfsdf', 'sdfsdf', 'admin@admin.com', 'password', '', '', 'Students Home', '', '', '', '2 seessos/classes in a week', '', '', '', 'sdfsdf', 'Choose...', 6465654);

-- --------------------------------------------------------

--
-- Table structure for table `tutorprof`
--

CREATE TABLE `tutorprof` (
  `id` int(50) NOT NULL,
  `fullname` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `birthdate` date NOT NULL,
  `experience` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `yourqualific` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `studenthome` varchar(100) NOT NULL,
  `tutorplace` varchar(100) NOT NULL,
  `online` varchar(60) NOT NULL,
  `groupinsti` text NOT NULL,
  `city` varchar(60) NOT NULL,
  `inzip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorprof`
--

INSERT INTO `tutorprof` (`id`, `fullname`, `mobile`, `birthdate`, `experience`, `email`, `password`, `yourqualific`, `address`, `studenthome`, `tutorplace`, `online`, `groupinsti`, `city`, `inzip`) VALUES
(1, 'fghfgh', '89464646', '0000-00-00', 'ghfgh', 'admin@admin.com', 'password', 'ghfgh', 'gfhfgh', 'Students Home', '', '', '', '0', 43110),
(2, 'kiran', '8956266929', '0000-00-00', '10', 'admin@admin.com', 'password', 'BA', 'djdslkjf', '', 'Tutors Place', '', '', '0', 431001),
(3, 'kiran', '8956266929', '0000-00-00', '10', 'admin@admin.com', 'password', 'ba', 'sdf', 'Students Home', 'Tutors Place', 'Online', 'Group/Institute', 'pune', 431001),
(4, '', '', '0000-00-00', '', 'admin@admin.com', 'password', '', '', '', '', '', '', '', 0),
(5, 'testing', 'testing', '0000-00-00', '10', 'admin@admin.com', 'password', 'BA', 'sfsdf', 'Students Home', '', '', '', 'dsfsdf', 465464);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studprof`
--
ALTER TABLE `studprof`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorprof`
--
ALTER TABLE `tutorprof`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studprof`
--
ALTER TABLE `studprof`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tutorprof`
--
ALTER TABLE `tutorprof`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
