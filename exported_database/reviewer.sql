-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2018 at 11:58 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reviewer`
--
CREATE DATABASE IF NOT EXISTS `reviewer` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `reviewer`;

-- --------------------------------------------------------

--
-- Table structure for table `classcode`
--

CREATE TABLE `classcode` (
  `class_id` int(15) NOT NULL,
  `classcode` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `room` varchar(20) NOT NULL,
  `time_and_days` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `units` int(4) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classcode`
--

INSERT INTO `classcode` (`class_id`, `classcode`, `description`, `room`, `time_and_days`, `title`, `units`, `timestamp`) VALUES
(1, '9345B', 'Web System and Technologies laboratory', 'D323', '4:00-5:30 THS', 'IT 325', 1, '2018-04-27 08:08:26'),
(2, '9364A', 'Web System and Technologies', 'D515', '1:00-2:00TF', 'IT 324', 2, '2018-04-27 08:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `scores`
--

CREATE TABLE `scores` (
  `score_id` int(11) NOT NULL,
  `score` int(250) NOT NULL,
  `quiz_date` varchar(250) NOT NULL,
  `total_score` int(250) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scores`
--

INSERT INTO `scores` (`score_id`, `score`, `quiz_date`, `total_score`, `timestamp`, `user_id`) VALUES
(1, 20, 'april 25, 2018', 50, '2018-04-27 08:23:36', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `idno` int(6) NOT NULL,
  `contact_no` varchar(16) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `position` varchar(250) NOT NULL,
  `Status` varchar(250) NOT NULL DEFAULT 'Active',
  `class_id` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `idno`, `contact_no`, `password`, `email`, `timestamp`, `position`, `Status`, `class_id`) VALUES
(1, 'Lovelace', 'Oliva', 2144074, '094868745151', '1234', 'oliva@gmail.com', '2018-04-23 07:26:27.166411', 'Admin', 'Active', '2'),
(3, 'Sarah', 'Centino', 2152834, '09057747156', '12345', '2152834@slu.edu.ph', '2018-04-23 10:27:24.409749', 'Student', 'Active', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classcode`
--
ALTER TABLE `classcode`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `class_id` (`class_id`);

--
-- Indexes for table `scores`
--
ALTER TABLE `scores`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `idno` (`idno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classcode`
--
ALTER TABLE `classcode`
  MODIFY `class_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scores`
--
ALTER TABLE `scores`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
