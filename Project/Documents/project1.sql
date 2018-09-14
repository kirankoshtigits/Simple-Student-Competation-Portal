-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 02:22 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `agegroup`
--

CREATE TABLE `agegroup` (
  `age` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agegroup`
--

INSERT INTO `agegroup` (`age`) VALUES
('ssssssss'),
(''),
('fffffff'),
('sssssgggggg'),
('ssssss'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `compition`
--

CREATE TABLE `compition` (
  `id` int(100) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compition`
--

INSERT INTO `compition` (`id`, `cname`) VALUES
(1, 'sssssssssqqqqqqq'),
(2, 'sssssssssqqqqqqq'),
(3, 'sssssssssqqqqqqq'),
(4, 'sssssssssqqqqqqq'),
(5, 'photography');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `Age` int(100) NOT NULL,
  `C_ID` int(100) NOT NULL,
  `Num1` int(100) NOT NULL,
  `Num2` int(100) NOT NULL,
  `Num3` int(100) NOT NULL,
  `Consolation1` int(100) NOT NULL,
  `Consolation2` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`Age`, `C_ID`, `Num1`, `Num2`, `Num3`, `Consolation1`, `Consolation2`) VALUES
(0, 0, 0, 0, 0, 0, 0),
(1, 1, 1, 1, 1, 1, 1),
(1, 1, 1, 1, 1, 1, 1),
(0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `School_Name` varchar(100) NOT NULL,
  `Principle_Name` varchar(100) NOT NULL,
  `Contact_Number` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`School_Name`, `Principle_Name`, `Contact_Number`, `Address`, `City`) VALUES
('ssssssss', 'ssssssss', 'sssss', 'ssssssssss', 'sssssssss'),
('ssssss', 'rrrrrrrr', 'fffffffff', 'qqqqqqqq', 'tttttttt'),
('ssss', 'ssssss', 'sssssss', 'ssssssss', 'ssssssss'),
('ssss', 'ssssss', 'sssssss', 'ssssssss', 'ssssssss'),
('z.p Salgare ', 'kiran pavankumar koshti', '8624991829', 'A/P Salgare Tal-Miraj Dist-Sangli', 'Salgare');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `School_Name` varchar(100) NOT NULL,
  `Age_Group` varchar(100) NOT NULL,
  `Compitition_Name` varchar(100) NOT NULL,
  `Student_Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`School_Name`, `Age_Group`, `Compitition_Name`, `Student_Name`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('aaaaaaaaa', 'aaaaaaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaa'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('ass', 'aaaaa', 'aaaaaaaaa', 'aaaaaaaaaa'),
('ssss', '05-10', 'Graphics', 'kiran pavankumar koshti');

-- --------------------------------------------------------

--
-- Table structure for table `studentmarks`
--

CREATE TABLE `studentmarks` (
  `Group Id` int(100) NOT NULL,
  `Compation Id` int(100) NOT NULL,
  `Student Id` int(100) NOT NULL,
  `Mark1` int(100) NOT NULL,
  `Mark2` int(100) NOT NULL,
  `Mark3` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentmarks`
--

INSERT INTO `studentmarks` (`Group Id`, `Compation Id`, `Student Id`, `Mark1`, `Mark2`, `Mark3`) VALUES
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(0, 0, 0, 0, 0, 0),
(33, 0, 0, 0, 0, 0),
(1, 1, 1, 101, 0, 0),
(2, 2, 2, 111, 0, 0),
(4, 4, 4, 1, 0, 0),
(6, 6, 6, 101, 0, 0),
(3, 4, 44, 111, 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_No` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Email`, `Mobile_No`, `password`) VALUES
('wwwwww', 'aaa@gmail.com', '1234', '123'),
('vvv', 'ssssssss@gmail.com', '234567', '123'),
('sss', 'fffff@gmail.com', '1111', '123'),
('kiran Pavankumar Koshti', 'karan@gmail.com', '8624991829', 'Karan@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compition`
--
ALTER TABLE `compition`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compition`
--
ALTER TABLE `compition`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
