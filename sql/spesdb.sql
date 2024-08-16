-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2024 at 09:38 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(3) NOT NULL,
  `department_name` varchar(50) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `department_name`, `created_at`) VALUES
(1, 'GENERAL SERVICES OFFICE', '2023-08-26 04:30:03.000000'),
(2, 'CITY ACCOUNTING OFFICE', '2023-08-26 04:30:03.000000'),
(3, 'CITY BUDGET OFFICE', '2023-08-20 23:50:38.000000'),
(4, 'PUBLIC EMPLOYMENT SERVICE OFFICE', '2023-08-26 23:50:38.000000'),
(5, 'CITY TREASURY', '2023-08-20 23:53:08.000000'),
(6, 'CITY ASSESSOR', '2023-08-26 23:53:08.000000'),
(7, 'OFFICE OF THE CITY MAYOR', '2023-08-20 23:53:51.000000'),
(8, 'HUMAN RESOURCES MANAGEMENT OFFICE', '2023-08-20 23:53:51.000000');

-- --------------------------------------------------------

--
-- Table structure for table `deployment_history`
--

CREATE TABLE `deployment_history` (
  `id` int(6) NOT NULL,
  `spes_id` int(6) NOT NULL,
  `dept_id` varchar(3) DEFAULT NULL,
  `batch_number` varchar(30) NOT NULL,
  `date_from` varchar(20) NOT NULL,
  `date_to` varchar(20) NOT NULL,
  `dep_status` int(2) NOT NULL DEFAULT '0',
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deployment_history`
--

INSERT INTO `deployment_history` (`id`, `spes_id`, `dept_id`, `batch_number`, `date_from`, `date_to`, `dep_status`, `created_at`) VALUES
(30, 2, NULL, '', '', '', 5, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pesoadmin`
--

CREATE TABLE `pesoadmin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesoadmin`
--

INSERT INTO `pesoadmin` (`id`, `username`, `password`, `full_name`, `position`) VALUES
(1, 'admin', 'admin', 'Edward Emil', 'Programmer'),
(2, 'donel', 'admin', 'donel martinez', 'system-ad');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(5) NOT NULL,
  `batch_number` varchar(30) NOT NULL,
  `program` varchar(100) NOT NULL,
  `capacity` int(5) NOT NULL,
  `year` varchar(10) NOT NULL,
  `status` int(2) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `batch_number`, `program`, `capacity`, `year`, `status`, `created_at`) VALUES
(8, 'YFD-2023MARCH', 'SPES PROGRAM', 2, '2023', 0, '2023-11-05 12:54:28.180528');

-- --------------------------------------------------------

--
-- Table structure for table `spesaccount`
--

CREATE TABLE `spesaccount` (
  `spes_id` bigint(255) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `surName` varchar(100) DEFAULT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `mName` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `doBirth` date DEFAULT NULL,
  `poBirth` varchar(100) DEFAULT NULL,
  `cShip` varchar(100) DEFAULT NULL,
  `gsisBeneficiary` varchar(100) DEFAULT NULL,
  `relationship` varchar(100) DEFAULT NULL,
  `pAdd` varchar(100) DEFAULT NULL,
  `cAdd` varchar(100) DEFAULT NULL,
  `barangay` varchar(30) NOT NULL,
  `mNo` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `socialAcc` varchar(100) DEFAULT NULL,
  `pStatus` varchar(100) DEFAULT NULL,
  `fatherName` varchar(100) DEFAULT NULL,
  `fCNo` int(11) DEFAULT NULL,
  `fStatus` varchar(100) DEFAULT NULL,
  `fOccu` int(100) DEFAULT NULL,
  `fSalary` int(255) DEFAULT NULL,
  `motherName` varchar(100) DEFAULT NULL,
  `mCNo` int(11) DEFAULT NULL,
  `mStatus` varchar(100) DEFAULT NULL,
  `mOccu` varchar(100) DEFAULT NULL,
  `mSalary` int(255) DEFAULT NULL,
  `elemSName` varchar(100) DEFAULT NULL,
  `elemDegree` varchar(100) DEFAULT NULL,
  `elemYearLvl` date DEFAULT NULL,
  `elemDEnd` date DEFAULT NULL,
  `secondSName` varchar(100) DEFAULT NULL,
  `secondDegree` varchar(100) DEFAULT NULL,
  `secondYearLvl` date DEFAULT NULL,
  `secondDEnd` date DEFAULT NULL,
  `tertSName` varchar(100) DEFAULT NULL,
  `tertDegree` varchar(100) DEFAULT NULL,
  `tertYearLvl` date DEFAULT NULL,
  `tertDEnd` date DEFAULT NULL,
  `tecSName` varchar(100) DEFAULT NULL,
  `tecDegree` varchar(100) DEFAULT NULL,
  `tecYearLvl` date DEFAULT NULL,
  `tectDEnd` date DEFAULT NULL,
  `historySpes` varchar(100) DEFAULT NULL,
  `historyYear` date DEFAULT NULL,
  `spesID` int(255) DEFAULT NULL,
  `is_blacklist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spesaccount`
--

INSERT INTO `spesaccount` (`spes_id`, `username`, `password`, `surName`, `firstName`, `mName`, `status`, `gender`, `doBirth`, `poBirth`, `cShip`, `gsisBeneficiary`, `relationship`, `pAdd`, `cAdd`, `barangay`, `mNo`, `email`, `socialAcc`, `pStatus`, `fatherName`, `fCNo`, `fStatus`, `fOccu`, `fSalary`, `motherName`, `mCNo`, `mStatus`, `mOccu`, `mSalary`, `elemSName`, `elemDegree`, `elemYearLvl`, `elemDEnd`, `secondSName`, `secondDegree`, `secondYearLvl`, `secondDEnd`, `tertSName`, `tertDegree`, `tertYearLvl`, `tertDEnd`, `tecSName`, `tecDegree`, `tecYearLvl`, `tectDEnd`, `historySpes`, `historyYear`, `spesID`, `is_blacklist`) VALUES
(1, 'edd', 'edd112592', 'Engay', 'Edward Emil', 'Escultura', 'single', 'MALE', '1992-11-25', 'Manila', 'Filipino', 'Elma Engay', 'Mother', '316 LANZONES ST., SAMPALOC SITE II, BRGY. BF HOMES PARA&#65533;AQUE, CITY OF, METROPOLITAN MANILA', '316 LANZONES ST., SAMPALOC SITE II, BRGY. BF HOMES PARA&#65533;AQUE, CITY OF, METROPOLITAN MANILA', 'BF HOMES', 2147483647, 'emhzhot@gmail.com', 'Edward Emil Engay', 'living', 'Eduardo Engay', 2147483647, 'fnone', 0, 15000, 'Elma Engay', 1987654321, 'mnone', 'Housewife', 0, 'SSIIES', '6 years', '0000-00-00', '0000-00-00', 'PNHS MAIN', '4 years', '0000-00-00', '0000-00-00', 'PUP ParaÃ±aque', 'BSIT', '0000-00-00', '0000-00-00', 'PCCST', 'Assoc. IT', '0000-00-00', '0000-00-00', 'one', '0000-00-00', 25, 0),
(2, 'donel', '123456', 'Martinez', 'Donel', 'Escultura', 'single', 'MALE', '1990-12-19', 'Manila', 'Filipino', 'Elma Engay', 'Mother', '', '', 'BF HOMES', 2147483647, 'reydonelmartinez@gmail.com', 'Edward Emil Engay', 'living', 'Eduardo Engay', 2147483647, 'fnone', 0, 15000, 'Elma Engay', 1987654321, 'mnone', 'Housewife', 0, 'SSIIES', '6 years', '0000-00-00', '0000-00-00', 'PNHS MAIN', '4 years', '0000-00-00', '0000-00-00', 'PUP ParaÃ±aque', 'BSHM', '0000-00-00', '0000-00-00', 'PCCST', 'Assoc. IT', '0000-00-00', '0000-00-00', 'one', '0000-00-00', 0, 0),
(3, 'jerome', '12345', 'Alimpongat', 'Jerome', 'Agila', 'single', 'MALE', '2023-08-21', '', '', '', '', '', '', 'SAN ISIDRO', 0, 'jerome@gmail.com', '', '', '', 0, '', 0, 0, '', 0, '', '', 0, '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', 'BSBA', '0000-00-00', '0000-00-00', '', 'BSBA', '0000-00-00', '0000-00-00', '', '0000-00-00', 2345, 0),
(4, 'joyce', '12345', 'Buergo', 'Joycelyn', 'C', 'single', 'MALE', '2023-08-16', '', '', '', '', '', '', 'SAN DIONISIO', 0, 'joycelyn@gmail.com', '', '', '', 0, '', 0, 0, '', 0, '', '', 0, '', '', '0000-00-00', '0000-00-00', '', '', '0000-00-00', '0000-00-00', '', 'BSIT', '0000-00-00', '0000-00-00', '', 'BSIT', '0000-00-00', '0000-00-00', '', '0000-00-00', 3722, 1);

-- --------------------------------------------------------

--
-- Table structure for table `spesrequest`
--

CREATE TABLE `spesrequest` (
  `id` bigint(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `surName` varchar(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `mName` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `doBirth` date NOT NULL,
  `poBirth` varchar(100) NOT NULL,
  `cShip` varchar(100) NOT NULL,
  `gsisBeneficiary` varchar(100) NOT NULL,
  `relationship` varchar(100) NOT NULL,
  `pAdd` varchar(100) NOT NULL,
  `cAdd` varchar(100) NOT NULL,
  `mNo` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `socialAcc` varchar(100) NOT NULL,
  `pStatus` varchar(100) NOT NULL,
  `fatherName` varchar(100) NOT NULL,
  `fCNo` int(11) NOT NULL,
  `fStatus` varchar(100) NOT NULL,
  `fOccu` int(100) NOT NULL,
  `fSalary` int(255) NOT NULL,
  `motherName` varchar(100) NOT NULL,
  `mCNo` int(11) NOT NULL,
  `mStatus` varchar(100) NOT NULL,
  `mOccu` varchar(100) NOT NULL,
  `mSalary` int(255) NOT NULL,
  `elemSName` varchar(100) NOT NULL,
  `elemDegree` varchar(100) NOT NULL,
  `elemYearLvl` date NOT NULL,
  `elemDEnd` date NOT NULL,
  `secondSName` varchar(100) NOT NULL,
  `secondDegree` varchar(100) NOT NULL,
  `secondYearLvl` date NOT NULL,
  `secondDEnd` date NOT NULL,
  `tertSName` varchar(100) NOT NULL,
  `tertDegree` varchar(100) NOT NULL,
  `tertYearLvl` date NOT NULL,
  `tertDEnd` date NOT NULL,
  `tecSName` varchar(100) NOT NULL,
  `tecDegree` varchar(100) NOT NULL,
  `tecYearLvl` date NOT NULL,
  `tectDEnd` date NOT NULL,
  `historySpes` varchar(100) NOT NULL,
  `historyYear` date NOT NULL,
  `spesID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `spes_availment`
--

CREATE TABLE `spes_availment` (
  `id` int(11) NOT NULL,
  `spes_id` int(11) NOT NULL,
  `no_avail` int(11) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spes_availment`
--

INSERT INTO `spes_availment` (`id`, `spes_id`, `no_avail`, `date_created`) VALUES
(1, 2, 4, '2024-08-15 09:49:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `deployment_history`
--
ALTER TABLE `deployment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesoadmin`
--
ALTER TABLE `pesoadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spesaccount`
--
ALTER TABLE `spesaccount`
  ADD PRIMARY KEY (`spes_id`);

--
-- Indexes for table `spes_availment`
--
ALTER TABLE `spes_availment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `deployment_history`
--
ALTER TABLE `deployment_history`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `pesoadmin`
--
ALTER TABLE `pesoadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `spesaccount`
--
ALTER TABLE `spesaccount`
  MODIFY `spes_id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `spes_availment`
--
ALTER TABLE `spes_availment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
