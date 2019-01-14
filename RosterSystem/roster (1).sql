-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2019 at 11:52 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roster`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_mst`
--

CREATE TABLE `company_mst` (
  `company_id` int(10) NOT NULL,
  `company_name` varchar(30) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `start_date` date NOT NULL,
  `company_type` varchar(30) NOT NULL,
  `company_rangeEmployees` varchar(10) NOT NULL,
  `company_email` varchar(30) NOT NULL,
  `company_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_mst`
--

INSERT INTO `company_mst` (`company_id`, `company_name`, `country`, `state`, `city`, `start_date`, `company_type`, `company_rangeEmployees`, `company_email`, `company_password`) VALUES
(1, 'assignus', 'india', 'gujarat', 'anand', '2018-12-04', 'IT', '0-51', 'abc@yahoo.com', 'abc123'),
(2, 'ciosynergy', 'sample1', 'sample2', 'sample3', '2018-12-07', 'IT', '51-100', '51-100', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `employee_mst`
--

CREATE TABLE `employee_mst` (
  `employee_id` int(11) NOT NULL,
  `employee_fname` varchar(25) NOT NULL,
  `employee_lname` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  `employee_gender` varchar(11) NOT NULL,
  `employee_address` varchar(30) NOT NULL,
  `job_type` varchar(11) NOT NULL,
  `employee_experience` float NOT NULL,
  `employee_image` varchar(20) NOT NULL,
  `prev_job_at` varchar(20) NOT NULL,
  `Company_to_join` varchar(30) NOT NULL,
  `employee_email` varchar(30) NOT NULL,
  `employee_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_mst`
--

INSERT INTO `employee_mst` (`employee_id`, `employee_fname`, `employee_lname`, `birth_date`, `employee_gender`, `employee_address`, `job_type`, `employee_experience`, `employee_image`, `prev_job_at`, `Company_to_join`, `employee_email`, `employee_password`) VALUES
(0, 'Happy', 'Christian', '2018-12-03', 'MALE', 'Borsad', 'IT', 10, 'abc', 'abc', 'assignus', 'happy.christian.hc3@gmail.com', 'abc123'),
(0, 'gaurang', 'patel', '2019-01-10', 'MALE', 'anand', 'developer', 10, 'Koala.jpg', 'collabra', 'ciosynergy', 'gaurang@gmail.com', 'abc123');

-- --------------------------------------------------------

--
-- Table structure for table `event_mst`
--

CREATE TABLE `event_mst` (
  `event_it` int(10) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_date` date NOT NULL,
  `event_desc` varchar(100) NOT NULL,
  `company_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addincident`
--

CREATE TABLE `tbl_addincident` (
  `id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `employee_name` varchar(20) NOT NULL,
  `employee_email` int(30) NOT NULL,
  `employee_contactNo` varchar(10) NOT NULL,
  `company_name` varchar(20) NOT NULL,
  `company_email` varchar(20) NOT NULL,
  `company_location` varchar(30) NOT NULL,
  `date_Incident` date NOT NULL,
  `location_Incident` varchar(15) NOT NULL,
  `level_Incident` varchar(10) NOT NULL,
  `description_incident` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addincident`
--

INSERT INTO `tbl_addincident` (`id`, `employee_id`, `employee_name`, `employee_email`, `employee_contactNo`, `company_name`, `company_email`, `company_location`, `date_Incident`, `location_Incident`, `level_Incident`, `description_incident`) VALUES
(1, 1, 'Happy Christian', 0, '723232323', 'ciosynergy', 'happy.christian.hc3@', 'baroda', '2019-01-18', 'asdad', 'Medium', 'asdfcasd'),
(2, 1, 'gaurang patel', 0, '9898989898', 'dell', 'dell@ymail.com', 'usa', '2019-01-04', 'dfsfsf', 'Medium', 'SFGSDFF'),
(3, 1, 'gaurang patel', 0, '9898989898', 'dell', 'dell@ymail.com', 'usa', '2019-01-04', 'dfsfsf', 'Medium', 'SFGSDFF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'abc', 'abc@gmail.com', 'xyz', 'abc xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_mst`
--
ALTER TABLE `company_mst`
  ADD PRIMARY KEY (`company_id`),
  ADD UNIQUE KEY `company_name` (`company_name`);

--
-- Indexes for table `employee_mst`
--
ALTER TABLE `employee_mst`
  ADD KEY `Company_to_join` (`Company_to_join`);

--
-- Indexes for table `event_mst`
--
ALTER TABLE `event_mst`
  ADD PRIMARY KEY (`event_it`),
  ADD KEY `company_name` (`company_name`);

--
-- Indexes for table `tbl_addincident`
--
ALTER TABLE `tbl_addincident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_mst`
--
ALTER TABLE `company_mst`
  MODIFY `company_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event_mst`
--
ALTER TABLE `event_mst`
  MODIFY `event_it` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_addincident`
--
ALTER TABLE `tbl_addincident`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_mst`
--
ALTER TABLE `employee_mst`
  ADD CONSTRAINT `employee_mst_ibfk_1` FOREIGN KEY (`Company_to_join`) REFERENCES `company_mst` (`company_name`);

--
-- Constraints for table `event_mst`
--
ALTER TABLE `event_mst`
  ADD CONSTRAINT `event_mst_ibfk_1` FOREIGN KEY (`company_name`) REFERENCES `company_mst` (`company_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
