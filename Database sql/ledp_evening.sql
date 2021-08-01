-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 08:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ledp_evening`
--

-- --------------------------------------------------------

--
-- Table structure for table `afridi`
--

CREATE TABLE `afridi` (
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ledp_registration`
--

CREATE TABLE `ledp_registration` (
  `Id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `teacher` varchar(100) DEFAULT NULL,
  `Course` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledp_registration`
--

INSERT INTO `ledp_registration` (`Id`, `Name`, `teacher`, `Course`, `email`, `section`) VALUES
(16, 'afridi', '', 'Web Engineering', 'rejoan15-11431@diu.edu.bd', '');

-- --------------------------------------------------------

--
-- Table structure for table `ledp_signup`
--

CREATE TABLE `ledp_signup` (
  `Id` int(11) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ledp_signup`
--

INSERT INTO `ledp_signup` (`Id`, `Name`, `email`, `Password`) VALUES
(1, 'MD MARUF HOSSAIN', 'marufhossain5454@gmail.com', 'd0970714757783e6cf17b26fb8e2298f'),
(2, 'Abdul Hakim', 'hakimaet11@gmail.com', '934b535800b1cba8f96a5d72f72f1611'),
(3, 'Abdulff', 'fffff@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, '', 'hlw@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, '', 'hakim@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(6, '', 'fahad@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, '', 'marufcoed@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, '', 'Bisso@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, '', 'rejoan15-11431@diu.edu.bd', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ledp_registration`
--
ALTER TABLE `ledp_registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ledp_signup`
--
ALTER TABLE `ledp_signup`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ledp_registration`
--
ALTER TABLE `ledp_registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ledp_signup`
--
ALTER TABLE `ledp_signup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
