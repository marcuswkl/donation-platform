-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2021 at 02:58 AM
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
  `donationId` int(255) NOT NULL,
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
  `userId` int(255) NOT NULL,
  `donationHistory` datetime NOT NULL,
  `donorProfileImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `fundraiserId` int(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `ssmRegNo` int(11) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `bankNumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `acc_holder_name` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `verifiedStatus` enum('verified','pending','rejected') NOT NULL,
  `profileImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fundraiserDescription` text,
  `fundraiserWebsite` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`fundraiserId`, `userId`, `ssmRegNo`, `phoneNumber`, `bankNumber`, `acc_holder_name`, `bank_name`, `verifiedStatus`, `profileImage`, `fundraiserDescription`, `fundraiserWebsite`) VALUES
(16, '16', 1122334455, '312345678', '111111222000', 'Derek Edmonds', 'Maybank', 'verified', 'resources\\img\\derek-edmonds-foundation-dp.png', NULL, NULL),
(17, '17', 1122334466, '312345679', '111222333', 'Peter Simon', 'Public Bank', 'verified', 'resources\\img\\derek-edmonds-foundation-dp.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `projectId` int(255) NOT NULL,
  `projectName` varchar(255) NOT NULL,
  `projectDescription` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `projectLocation` varchar(255) NOT NULL,
  `projectPhoto` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `projectGoalAmt` double NOT NULL,
  `projectCurrentAmt` double NOT NULL,
  `projectGoalStatus` tinyint(1) NOT NULL,
  `projectCategory` enum('Covid-19','Education','Natural Disaster','Food Supply') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `projectStartDate` date NOT NULL,
  `projectEndDate` date NOT NULL,
  `fundraiserId` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectId`, `projectName`, `projectDescription`, `projectLocation`, `projectPhoto`, `projectGoalAmt`, `projectCurrentAmt`, `projectGoalStatus`, `projectCategory`, `projectStartDate`, `projectEndDate`, `fundraiserId`) VALUES
(1, 'Empower Children Through Education', 'The children did not have a chance to attend school since they were young. They are all passionate children who have their own dream.', 'Kajang, Selangor', 'resources/img/showcase1.png', 5000, 3000, 0, 'Education', '2021-11-19', '2021-12-25', '16'),
(2, 'Mask up against Covid', 'Tis the flu season. \r\nThe needy have not the masks for tis season.\r\nThee could help them.', 'Sibu, Sarawak', 'resources\\img\\donor-home-covid2.png', 10000, 100, 0, 'Covid-19', '2021-11-19', '2021-12-26', '17'),
(3, 'Mask up against Covid 2.0', 'Tis the flu season. \r\nThere are even more needy that have not the masks for tis season.\r\nThee could help them.', 'Kulim, Kedah', 'resources\\img\\donor-home-covid1.png', 6000, 150, 0, 'Covid-19', '2021-11-19', '2021-12-26', '17'),
(4, 'Mask up against Covid 3.0', 'Tis the flu season. \r\nThere are even, even more needy that have not the masks for tis season.\r\nThee could help them, again.', 'Subang Jaya, Selangor', 'resources\\img\\donor-home-covid1.png', 6900.69, 1155.69, 0, 'Covid-19', '2021-11-19', '2021-12-27', '17');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` enum('donor','fundraiser','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `name`, `email`, `password`, `type`) VALUES
(12, 'wais100', 'waisiong144@gmail.com', '$2y$10$EvGVktKwoeK1.0oneuUsJ.NgkkuAEDox5hyxKaY6FfSheakRh23je', 'donor'),
(14, 'wais200', 'admin1@hotmail.com', '$2y$10$lgdbKQqkjh3W/LTOCP.cAOEARzPd8ILdwQz8m0RAMf.9pLFcTgwtu', 'admin'),
(16, 'Derek Edmonds', 'derekedmonds@gmail.com', '$2y$10$oHVFH.ZhmF00TjwN7vcfwOr0h3FFj/FqLXXfTanhTxr9Jk3NwHkom', 'fundraiser'),
(17, 'Peter Simons', 'petersimon69@gmail.com', 'petersimon69', 'fundraiser');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_history`
--
ALTER TABLE `donation_history`
  MODIFY `donationId` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fundraiser`
--
ALTER TABLE `fundraiser`
  MODIFY `fundraiserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
