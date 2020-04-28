-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 07:32 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `file_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_in_activity`
--

CREATE TABLE `log_in_activity` (
  `login_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `login_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_in_activity`
--

INSERT INTO `log_in_activity` (`login_id`, `user_id`, `username`, `email`, `password`, `login_date`) VALUES
(1, 1, 'dupleix', 'jmuathen@gmail.com', 'qw123', '2017-04-01 21:00:00'),
(2, 1, 'dupleix', 'jmuathen@gmail.com', 'qw123', '2017-04-01 21:00:00'),
(3, 1, 'dupleix', 'jmuathen@gmail.com', 'qw123', '2017-04-02 08:53:26'),
(4, 1, 'dupleix', 'jmuathen@gmail.com', 'director123', '2017-04-02 10:00:12'),
(5, 1, 'dupleix', 'jmuathen@gmail.com', 'director123', '2017-04-03 10:47:15'),
(6, 1, 'dupleix', 'jmuathen@gmail.com', 'director123', '2017-04-10 04:09:35'),
(7, 1, 'dupleix', 'jmuathen@gmail.com', 'director123', '2017-04-10 04:47:29'),
(8, 1, 'dupleix', 'jmuathen@gmail.com', 'director123', '2017-04-12 04:49:22'),
(9, 1, 'dupleix', 'jmuathen@gmail.com', 'director123', '2017-04-18 05:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int(10) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `user_id`, `firstname`, `lastname`, `email`, `phone`, `gender`, `age`, `city`, `address`, `location`) VALUES
(1, 1, 'Julius', 'muathe', 'jmuathen@gmail.com', 719670604, NULL, NULL, NULL, NULL, 'uploads/010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `reg_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `email`, `phone`, `username`, `password`, `location`, `status`, `reg_date`) VALUES
(1, 'Julius', 'muathe', 'jmuathen@gmail.com', 719670604, 'dupleix', 'director123', 'uploads/NO-IMAGE-AVAILABLE.jpg', '1', '2017-03-24 07:02:59'),
(2, 'kamau', 'jikoi', 'irushmbucho@gmail.com', 71234345, 'were', 'qwe123', NULL, '1', '2017-03-24 10:11:00'),
(3, 'maryam', 'ali', 'alim@gmail.com', 789898989, 'marya', 'qw123', NULL, '1', '2017-03-24 11:33:49'),
(4, 'kiilu', 'hassan', 'hassan@gmail.com', 712222222, 'hasaki', 'qwe123', NULL, '0', '2017-03-27 14:26:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_in_activity`
--
ALTER TABLE `log_in_activity`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_in_activity`
--
ALTER TABLE `log_in_activity`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
