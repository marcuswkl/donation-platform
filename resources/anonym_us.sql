-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 31, 2021 at 11:59 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anonym_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_history`
--

CREATE TABLE `donation_history` (
  `donationId` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `amount` double NOT NULL,
  `projectId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `fundraiserId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `userId` varchar(255) NOT NULL,
  `donationHistory` datetime NOT NULL,
  `donorProfileImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `fundraiserId` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `ssmRegNo` int(11) NOT NULL,
  `phoneNumber` int(11) NOT NULL,
  `billingInformation` varchar(255) NOT NULL,
  `verifiedStatus` enum('verified','pending','rejected') NOT NULL,
  `profileImage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectId` varchar(255) NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `projectDescription` varchar(255) NOT NULL,
  `projectLocation` varchar(255) NOT NULL,
  `projectPhoto` varchar(255) NOT NULL,
  `projectGoalAmt` double NOT NULL,
  `projectStartingAmt` double NOT NULL,
  `projectGoalStatus` tinyint(1) NOT NULL,
  `projectCategory` varchar(255) NOT NULL,
  `projectStartDate` date NOT NULL,
  `projectEndDate` date NOT NULL,
  `fundraiserId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_history`
--
ALTER TABLE `donation_history`
  ADD PRIMARY KEY (`donationId`),
  ADD KEY `fk_fundraiserId` (`fundraiserId`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD PRIMARY KEY (`fundraiserId`),
  ADD KEY `fk_userId` (`userId`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectId`),
  ADD KEY `fk_fundraiserId_project` (`fundraiserId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_history`
--
ALTER TABLE `donation_history`
  ADD CONSTRAINT `fk_fundraiserId` FOREIGN KEY (`fundraiserId`) REFERENCES `fundraiser` (`fundraiserId`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `fk_to_userId` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD CONSTRAINT `fk_userId` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `fk_fundraiserId_project` FOREIGN KEY (`fundraiserId`) REFERENCES `fundraiser` (`fundraiserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;