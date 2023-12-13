-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2023 at 06:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `Id` int(100) NOT NULL,
  `AboutUs` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`Id`, `AboutUs`) VALUES
(3, 'fdkghkl;fdkhlgfkjjhk,jk'),
(4, 'JAWJKSJKGJFKHJKGFHKGF'),
(5, 'kjjjjjjjjj;l;\'\'');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `Id` int(100) NOT NULL,
  `Faq` varchar(10000) NOT NULL,
  `Answer` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`Id`, `Faq`, `Answer`) VALUES
(1, 'Q; ekfagrshgfljhgljjgh', 'Answer: ksadkfkfkgkrkg'),
(2, 'saflcdslgfdhbmgjm', ' fdglf;h;gj;jl;khjk,jk,l'),
(3, '1. Q; sjdfjkjsdgfjgjgj', 'Answer:DLKFLKLSKGHLFH'),
(4, 'q:SFGF,DSH,GFJ,J,J', ' JSAkfjsdmgfdm');

-- --------------------------------------------------------

--
-- Table structure for table `guestinfo`
--

CREATE TABLE `guestinfo` (
  `GuestId` varchar(100) NOT NULL,
  `GuestName` varchar(100) NOT NULL,
  `GuestEmail` varchar(100) NOT NULL,
  `GuestNumber` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `GuestUserName` varchar(100) NOT NULL,
  `GuestImg` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guestinfo`
--

INSERT INTO `guestinfo` (`GuestId`, `GuestName`, `GuestEmail`, `GuestNumber`, `Gender`, `GuestUserName`, `GuestImg`) VALUES
('G-7', 'asif rahman', 'bob@aiub.edu', '01556789468', 'Male', 'AR10', ''),
('G-6', ' asif rahman', 'bob@aiub.edu', '01556789468', 'Male', 'AR9', ''),
('G-3', ' asif rahman', 'bob@aiub.edu', '01556789468', 'Male', 'bob90', '');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `UserName` varchar(100) NOT NULL,
  `UserType` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserName`, `UserType`, `Password`) VALUES
('AR', 'Admin', '1234567@'),
('asha', 'Guest', '123456'),
('bob', 'reception', '1234567'),
('jhon', 'Guest', '45698712'),
('nadim', 'Guest', '234567'),
('rock', 'Admin', '65412398'),
('roman', 'Guest', '98745612'),
('sadi', 'Guest', '0987654'),
('tanvir', 'Guest', '1234567'),
('tanvir18', 'RECEPTION', '12345'),
('tanvir19', 'Receptionist', '0987654@'),
('tazdik', 'Guest', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `Id` int(100) NOT NULL,
  `Date` date NOT NULL,
  `Notice` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`Id`, `Date`, `Notice`) VALUES
(1, '2023-12-13', ' hello world');

-- --------------------------------------------------------

--
-- Table structure for table `reserveroom`
--

CREATE TABLE `reserveroom` (
  `UserName` varchar(250) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `RoomNo` int(250) NOT NULL,
  `CheckIn` varchar(250) NOT NULL,
  `CheckOut` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserveroom`
--

INSERT INTO `reserveroom` (`UserName`, `Name`, `RoomNo`, `CheckIn`, `CheckOut`, `status`) VALUES
('asha', 'Asha Akthar', 5040, '2023-11-23', '2023-11-28', 'Confirmed'),
('sadi', 'sadi islam', 1022, '2023-11-22', '2023-11-25', 'Confirmed'),
('tanvir', 'tanvir islam', 1111, '2023-12-13', '2023-12-20', 'Confirmed'),
('tazdik', 'tazdik hossain', 2222, '2023-12-13', '2023-12-20', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` int(11) NOT NULL,
  `roomType` varchar(200) NOT NULL,
  `bedding` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `roomType`, `bedding`) VALUES
(1, 'Superior Room', 'SINGLE'),
(2, 'Superior Room', 'TRIPLE'),
(3, 'Delux Room', 'SINGLE'),
(4, 'Superior Room', 'DOUBLE'),
(5, 'Superior Room', 'QUAD'),
(6, 'Gueast House', 'DOUBLE'),
(7, 'Single Room', 'SINGLE'),
(8, 'Superior Room', 'DOUBLE'),
(9, 'Delux Room', 'TRIPLE'),
(17, 'Superior Room', 'SINGLE');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `StaffType` varchar(100) NOT NULL,
  `StaffSalary` bigint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`StaffType`, `StaffSalary`) VALUES
('Admin', 100000),
('Receptionist', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `salarysheet`
--

CREATE TABLE `salarysheet` (
  `StaffId` varchar(100) NOT NULL,
  `StaffName` varchar(100) NOT NULL,
  `StaffType` varchar(100) NOT NULL,
  `StaffUserName` varchar(100) NOT NULL,
  `StaffSalary` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salarysheet`
--

INSERT INTO `salarysheet` (`StaffId`, `StaffName`, `StaffType`, `StaffUserName`, `StaffSalary`) VALUES
('S-1', 'asif ra', 'Admin', 'AR', 100000),
('S-7', ' asif rahman', 'Receptionist', 'AR1000', 80000),
('S-2', 'tanvir islam', 'Receptionist', 'tanvir19', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `StaffId` varchar(100) NOT NULL,
  `StaffName` varchar(100) NOT NULL,
  `StaffEmail` varchar(100) NOT NULL,
  `StaffNumber` varchar(100) NOT NULL,
  `StaffAddress` varchar(100) NOT NULL,
  `StaffType` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `StaffUserName` varchar(100) NOT NULL,
  `StaffImg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`StaffId`, `StaffName`, `StaffEmail`, `StaffNumber`, `StaffAddress`, `StaffType`, `Gender`, `StaffUserName`, `StaffImg`) VALUES
('S-1', 'asif ra', 'jhon@aiub.edu', '01556789469', '1161/B Rampura', 'Admin', 'Male', 'AR', 'men2.jpg'),
('S-2', 'tanvir islam', 'tanvir@gmail.com', '01772462549', 'notun bazar', 'Receptionist', 'Male', 'tanvir19', 'men1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `guestinfo`
--
ALTER TABLE `guestinfo`
  ADD PRIMARY KEY (`GuestUserName`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `reserveroom`
--
ALTER TABLE `reserveroom`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `salarysheet`
--
ALTER TABLE `salarysheet`
  ADD PRIMARY KEY (`StaffUserName`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`StaffUserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
