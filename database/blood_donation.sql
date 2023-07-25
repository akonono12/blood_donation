-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 12:01 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$53Sy83JiH0VItG.Zbk73a.7urLaVL9SazjjGZG7y2AWJFQwoQGrBu');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `blood_id` int(11) NOT NULL,
  `blood_type` varchar(150) NOT NULL,
  `date_of_blood` date NOT NULL,
  `date_expiration` date NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`blood_id`, `blood_type`, `date_of_blood`, `date_expiration`, `name`) VALUES
(1, 'O-', '2019-03-16', '2019-04-27', 'KennethCanoCompetente'),
(2, 'B-', '2019-03-16', '2019-04-27', 'asdsadas'),
(3, 'A1B+', '2019-03-16', '2019-04-27', 'sdsdsasassasaas'),
(4, 'A1B+', '2019-03-16', '2019-04-27', 'aaiaiaiaiaiauauaua'),
(5, 'A2-', '2019-03-17', '2019-04-28', 'dsdssdsdsdsd');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `donor_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` varchar(150) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` text NOT NULL,
  `civil_status` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `blood_type` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`donor_id`, `fname`, `mname`, `lname`, `age`, `birthdate`, `gender`, `civil_status`, `contact`, `address`, `email`, `nationality`, `occupation`, `blood_type`, `status`) VALUES
(5, 'dsds', 'sdsd', 'sdsd', '22', '1996-07-03', 'Male', 'Single', '9296857625', 'tiwi', 'sdsdsds@gmail.com', 'sdsdsds', 'sdsdsd', 'A2-', '2'),
(6, 'sdsds', 'sdsd', 'sdsds', '22', '1998-04-02', 'Female', 'Single', '1243567890', 'asasas', 'asas@gmail.com', 'sdsdsd', 'sdsdsd', 'B+', '1');

-- --------------------------------------------------------

--
-- Table structure for table `brbc`
--

CREATE TABLE `brbc` (
  `brbc_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brbc`
--

INSERT INTO `brbc` (`brbc_id`, `username`, `password`) VALUES
(1, 'brbc', '$2y$10$53Sy83JiH0VItG.Zbk73a.7urLaVL9SazjjGZG7y2AWJFQwoQGrBu');

-- --------------------------------------------------------

--
-- Table structure for table `donor_mssg`
--

CREATE TABLE `donor_mssg` (
  `donor_mssg_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `logs` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `num_units` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `hospital_contact` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `hospital_contact`, `username`, `password`) VALUES
(1, 'Ago General Hospital', '1912-1211-11', 'Ago_Hospital', '$2y$10$KT7/DGl2PoFHNyZpj1yvA.HYLqfOKrIFXTCnenhuHm3X5w.j3jnqm');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_mssg`
--

CREATE TABLE `hospital_mssg` (
  `hospital_mssg_id` int(11) NOT NULL,
  `h_name` varchar(150) NOT NULL,
  `contact` text NOT NULL,
  `message` text NOT NULL,
  `logs` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `num_units` int(100) NOT NULL,
  `blood_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital_mssg`
--

INSERT INTO `hospital_mssg` (`hospital_mssg_id`, `h_name`, `contact`, `message`, `logs`, `status`, `num_units`, `blood_type`) VALUES
(2, 'Ago General Hospital', '1912-1211-11', 'asdsd', '2019-03-16 16:32:31', 0, 2, 'O-'),
(3, 'Ago General Hospital', '1912-1211-11', 'sdsd', '2019-03-16 16:32:53', 0, 2, 'O-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `brbc`
--
ALTER TABLE `brbc`
  ADD PRIMARY KEY (`brbc_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `donor_mssg`
--
ALTER TABLE `donor_mssg`
  ADD PRIMARY KEY (`donor_mssg_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `hospital_mssg`
--
ALTER TABLE `hospital_mssg`
  ADD PRIMARY KEY (`hospital_mssg_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brbc`
--
ALTER TABLE `brbc`
  MODIFY `brbc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor_mssg`
--
ALTER TABLE `donor_mssg`
  MODIFY `donor_mssg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_mssg`
--
ALTER TABLE `hospital_mssg`
  MODIFY `hospital_mssg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
