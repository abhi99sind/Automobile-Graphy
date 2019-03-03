-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2019 at 03:06 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automtlm_auto_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(150) NOT NULL,
  `adminid` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `adminid`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Id` int(150) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`Id`, `Name`, `Email`, `Message`) VALUES
(1, 'RAJESH SINDHWANI', 'gupta.abhinav1011@gmail.com', 'esfcfgbd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(150) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'abhishek', 'sindhwani', 'abhi99sindh@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `make_offer`
--

CREATE TABLE `make_offer` (
  `id` int(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Preferred Contact` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Phone` varchar(150) NOT NULL,
  `Offered_Price` varchar(150) NOT NULL,
  `Finance_Required` text NOT NULL,
  `Comments` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `make_offer`
--

INSERT INTO `make_offer` (`id`, `Name`, `Preferred Contact`, `Email`, `Phone`, `Offered_Price`, `Finance_Required`, `Comments`) VALUES
(1, 'Love Manchanda', '', '', '8800733833', '500', 'yes', 'Nah');

-- --------------------------------------------------------

--
-- Table structure for table `request_info`
--

CREATE TABLE `request_info` (
  `id` int(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `preference` varchar(150) NOT NULL,
  `email` text NOT NULL,
  `phone` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_info`
--

INSERT INTO `request_info` (`id`, `name`, `preference`, `email`, `phone`) VALUES
(1, 'bhavna', 'phone', 'abhi99sindh@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `schedule_drive`
--

CREATE TABLE `schedule_drive` (
  `Id` int(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Contact` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Phone` varchar(150) NOT NULL,
  `Best_Day` varchar(150) NOT NULL,
  `Best_Time` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_drive`
--

INSERT INTO `schedule_drive` (`Id`, `Name`, `Contact`, `Email`, `Phone`, `Best_Day`, `Best_Time`) VALUES
(1, 'Love Manchanda', '', '', '8800733833', 'Jab kaho', 'jab mrzi'),
(2, 'Love Manchanda', '', '', '8800733833', 'Jab kaho', 'jab mrzi');

-- --------------------------------------------------------

--
-- Table structure for table `showroom`
--

CREATE TABLE `showroom` (
  `id` int(255) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `category_name` varchar(150) NOT NULL,
  `style` varchar(150) NOT NULL,
  `engine` varchar(150) NOT NULL,
  `drivetrain` varchar(150) NOT NULL,
  `transmission` varchar(150) NOT NULL,
  `exterior` varchar(150) NOT NULL,
  `interior` varchar(150) NOT NULL,
  `year` int(150) NOT NULL,
  `doors` int(150) NOT NULL,
  `passengers` int(150) NOT NULL,
  `varient` text NOT NULL,
  `driven` varchar(150) NOT NULL,
  `mileage` varchar(150) NOT NULL,
  `fuel_type` varchar(150) NOT NULL,
  `condition` varchar(150) NOT NULL,
  `owners` varchar(150) NOT NULL,
  `warranty` varchar(150) NOT NULL,
  `price` int(150) NOT NULL,
  `image1` varchar(150) NOT NULL,
  `image2` varchar(150) NOT NULL,
  `image3` varchar(150) NOT NULL,
  `image4` varchar(150) NOT NULL,
  `image5` varchar(150) NOT NULL,
  `video` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_offer`
--
ALTER TABLE `make_offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_info`
--
ALTER TABLE `request_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_drive`
--
ALTER TABLE `schedule_drive`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `showroom`
--
ALTER TABLE `showroom`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `make_offer`
--
ALTER TABLE `make_offer`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_info`
--
ALTER TABLE `request_info`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule_drive`
--
ALTER TABLE `schedule_drive`
  MODIFY `Id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `showroom`
--
ALTER TABLE `showroom`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
