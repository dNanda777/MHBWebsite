-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 05:38 PM
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
-- Database: `mhswebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_applicant`
--

CREATE TABLE `user_applicant` (
  `applicantID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `fullName` text NOT NULL,
  `monthlyIncome` double NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_applicant`
--

INSERT INTO `user_applicant` (`applicantID`, `email`, `fullName`, `monthlyIncome`, `password`, `username`) VALUES
(2, 'bil@gmail.com', 'Bilia Eka', 800, '5555', 'bilia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_applicant`
--
ALTER TABLE `user_applicant`
  ADD PRIMARY KEY (`applicantID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_applicant`
--
ALTER TABLE `user_applicant`
  MODIFY `applicantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
