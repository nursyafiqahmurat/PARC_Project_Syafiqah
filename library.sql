-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 05:55 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Book_ID` int(50) NOT NULL,
  `Title_and_Statement_of_Responsibilities` varchar(1000) NOT NULL,
  `Edition` int(100) NOT NULL,
  `Publication_and_Distribution` varchar(1000) NOT NULL,
  `Physical_Description` varchar(1000) NOT NULL,
  `Series` varchar(1000) NOT NULL,
  `Notes` varchar(1000) NOT NULL,
  `ISBN_Number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_ID`, `Title_and_Statement_of_Responsibilities`, `Edition`, `Publication_and_Distribution`, `Physical_Description`, `Series`, `Notes`, `ISBN_Number`) VALUES
(50, 'abc123', 1, 'selangor', '12 ms', 'tiada', 'tiada', 54321),
(51, 'abc123', 1, 'selangor', '12 ms', 'tiada', 'tiada', 54321);

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `User_ID` varchar(100) NOT NULL,
  `Book_ID` varchar(100) NOT NULL,
  `Book_borrowed` date NOT NULL,
  `Book_Returned` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `handles`
--

CREATE TABLE `handles` (
  `Staff_ID` int(50) NOT NULL,
  `insert` varchar(1000) NOT NULL,
  `edit` varchar(1000) NOT NULL,
  `remove` varchar(500) NOT NULL,
  `Borrowing_Date` int(10) NOT NULL,
  `Returning_Date` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(50) NOT NULL,
  `Full_Name` varchar(100) NOT NULL,
  `IC_Number` int(12) NOT NULL,
  `Phone_Number` int(12) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Full_Name`, `IC_Number`, `Phone_Number`, `Email`, `Password`) VALUES
(16, 'syafiqah', 123456, 1234, 'poiu@uiop', '25d55ad283aa400af464c76d713c07ad'),
(18, 'fiqa', 123456, 1234, 'fiqa@fiqa', '5e8667a439c68f5145dd2fcbecf02209');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`Book_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Staff_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `Book_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
