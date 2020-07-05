-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2020 at 02:44 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminUserName` varchar(60) NOT NULL,
  `adminUser` varchar(52) NOT NULL,
  `adminPassword` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminUserName`, `adminUser`, `adminPassword`) VALUES
(1, 'bossra', 'boss', 'boss');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `userName` varchar(25) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `password` varchar(16) NOT NULL,
  `email` varchar(90) NOT NULL,
  `street` varchar(100) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `province` varchar(45) NOT NULL,
  `gender` varchar(12) NOT NULL,
  `birthDate` date NOT NULL,
  `balance` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `userName`, `firstName`, `lastName`, `password`, `email`, `street`, `municipality`, `province`, `gender`, `birthDate`, `balance`) VALUES
(39, 'TonyLoose', 'Tony Andrew', 'Loser', 'tony', 'TonySLooseSSS@teleworm.us', '430 Jones Street', 'Fort Worth', 'TX', '', '1990-01-01', 265),
(47, 'Rajiv', 'Rajiv', 'Singh', 'iam', 'iam@scammer.us', 'Scammer City', 'Kolkata', 'Mumbai', 'Male', '1965-05-08', 0),
(48, 'Rajiv', 'Rajiv Jr.', 'Singh', 'iama', 'iam@scammer.us', 'Scammer City', 'Kolkata', 'Mumbai', 'Male', '1965-05-08', 0),
(49, 'Rajiv', 'Rajiv Jr.', 'dsadsa', 'dd', 'iam@scammer.usdasd', 'Scammer City', 'Kolkata', 'Mumbai', 'Male', '1965-05-08', 0),
(50, 'asdsad', 'asdsa', 'asdsadsadsadas', 'adfg', 's', 'sadsa', 'sadsad', 'asdsadas', 'Female', '1999-01-01', 0),
(51, 'Rajiv', 'Eman', 'Do', 'rrrrr', 'rr', 'r', 'r', 'r', 'Male', '2002-02-02', 0),
(52, 'Rajiv d', 'Rajiv Jr.', 'dsdsds', 'aaa', 'a', '', '', '', ' ', '1990-02-02', 0),
(53, 'Rajiv', 'Rajiv Jr.', 'dsdsds', 'aaaa', 'aas', '', '', '', 'Male', '1990-02-02', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
