-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2021 at 07:37 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `office`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `regId` varchar(30) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`regId`, `fName`, `lName`, `Password`) VALUES
('BSMIT-F21-196', 'Saqib', 'Javed', '123456saqib'),
('F12-6789', 'Muhammad', 'Shabbeer', '31102021'),
('FA19-BSE-011', 'Ali', 'Tahir', '123456'),
('FA19-BSE-099', 'Ali', 'Raza', '990ali'),
('FA19-BSE-105', 'Ali', 'Shouzib', 'Shouzib12345'),
('FA20-BEE-137', 'Nauman', 'Ali', 'nauman'),
('SP20-BSE-002', 'Ali', 'Zain', '123456'),
('SP20-BSE-012', 'Mati ul', 'Rehman', 'Mati123'),
('SP20-BSE-040', 'Hammad', 'Ahmad', '9999'),
('SP20-BSE-089', 'Mati ul', 'Rehman', 'fhg');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `First_Name` char(30) NOT NULL,
  `Last_Name` char(30) NOT NULL,
  `ID` varchar(10) NOT NULL,
  `Date` date NOT NULL,
  `Status` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`First_Name`, `Last_Name`, `ID`, `Date`, `Status`) VALUES
('Ali', 'Shouzib', 'fa19-105', '2021-12-01', 'Absent'),
('Ali', 'Raza', 'mo-456', '2021-12-07', 'Absent'),
('Mati ul', 'Rehman', 'sp20-42', '2021-12-01', 'Present'),
('Mati ul', 'Raza', 'sp20-bse-0', '2021-12-31', 'Working');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` varchar(30) NOT NULL,
  `fName` text NOT NULL,
  `lName` text NOT NULL,
  `designation` text NOT NULL,
  `salary` mediumint(50) NOT NULL,
  `doj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `fName`, `lName`, `designation`, `salary`, `doj`) VALUES
('asd123', 'Ahmad', 'Ali', 'Manager', 1, '2021-11-10'),
('f12em', 'Saqib', 'Javed', 'Associate', 12000, '2021-01-13'),
('gh234', 'Ali', 'Tahir', 'Associate', 12000, '2021-11-12'),
('mo2345', 'Muhammad', 'Ali', 'Manager', 12345, '2021-11-10'),
('SP20-BSE-090', 'Sohaib', 'Raffique', 'Manager', 15000, '2021-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `international_employees`
--

CREATE TABLE `international_employees` (
  `First_Name` char(30) NOT NULL,
  `Last_Name` char(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `designation` char(30) NOT NULL,
  `country` char(30) NOT NULL,
  `status` char(30) NOT NULL,
  `Salary` int(30) NOT NULL,
  `date_of_joining` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `international_employees`
--

INSERT INTO `international_employees` (`First_Name`, `Last_Name`, `id`, `email`, `designation`, `country`, `status`, `Salary`, `date_of_joining`) VALUES
('Kumar', 'Sangakara', 'sri-341', 'sk@gmail.com', 'Manager', 'LK', 'Not Working', 12000, '2021-12-15'),
('', '', '', '', '', 'select country', 'Working', 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`regId`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
