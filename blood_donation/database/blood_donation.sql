-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2019 at 02:54 AM
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
  `donor_type` text NOT NULL,
  `blood_type` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`donor_id`, `fname`, `mname`, `lname`, `age`, `birthdate`, `gender`, `civil_status`, `contact`, `address`, `email`, `nationality`, `occupation`, `donor_type`, `blood_type`, `status`) VALUES
(25, 'Kenneth', 'Cano', 'Competente', '22', '1996-07-03', 'Male', 'Single', '2147483647', 'P-7 Geraldine Village, Libtong, Tiwi, Albay', 'kennethcompetente03@gmail.com', 'Filipino', 'Student', 'New', 'O+', ''),
(26, 'leo', 'bitara', 'medel', '20', '1998-08-30', 'Male', 'Single', '1234567890', 'Legazpi City', 'leomedel@gmail.com', 'Filipino', 'Student', 'New', 'O+', ''),
(27, 'Kim Hervi', 'Cano', 'Competente', '14', '2004-01-20', 'Male', 'Single', '2147483647', 'Tiwi Albay', 'kimhervi@gmail.com', 'Filipino', 'Student', 'New', 'O+', ''),
(28, 'Christian Ian', 'A', 'Cuya', '21', '2019-01-10', 'Male', 'Single', '09296857625', 'Tiwi Albay', 'iancuya@gmail.com', 'Filipino', 'Student', 'New', 'O+', ''),
(29, 'Kenneth', 'Cano', 'Competente', '22', '1996-01-03', 'Male', 'Single', '09296857625', 'Tiwi', 'kenthz@gmail.com', 'Filipino', 'Student', 'New', 'O+', ''),
(30, 'Kenneth', 'Cano', 'Competente', '22', '1996-07-03', 'Male', 'Single', '09296857625', 'Tiwi Albay', 'kennethcompetente03@gmail.com', 'Filipino', 'Student', 'New', 'O+', 'status'),
(31, 'Kenthz', 'Cano', 'Competente', '22', '1996-07-03', 'Male', 'Single', '09296857625', 'Tiwi Albay', 'kennethcompetente06@gmail.com', 'Filipino', 'Student', 'New', 'O+', 'status');

-- --------------------------------------------------------

--
-- Table structure for table `d_mssg`
--

CREATE TABLE `d_mssg` (
  `id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Contact` text NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` text NOT NULL,
  `Logs` datetime NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d_mssg`
--

INSERT INTO `d_mssg` (`id`, `Name`, `Contact`, `Email`, `Message`, `Logs`, `Status`) VALUES
(23, 'Yernel Kent A. Malate', '094919299974', 'yernel@gmail.com', 'willing to donate.', '2019-01-27 21:07:03', 0),
(24, 'kane', '4656', 'kane@gmail.com', 'sdasd', '2019-01-27 22:10:14', 0),
(25, 'jeglsjdl', 'FA;', 'yernel@gmail.com', 'SEGSGSDG', '2019-01-28 09:54:41', 0),
(26, 'asf', '455', 're@gmail.com', '\r\n\r\nlakshflahflshdkf', '2019-01-28 10:20:49', 0),
(27, 'lalsk', '2464646', 'yernel@gmail.com', 'measdsa', '2019-01-28 10:22:44', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `username`, `password`) VALUES
(8, 'HOSPITAL', '$2y$10$d44XikjiL3sYwaWo7hAVNu..x0evz/FIrJPeQz5TkWc.uepIgfAsm');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BUNIT` int(11) NOT NULL,
  `HOSP` text NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `PIN` varchar(150) NOT NULL,
  `DOC` varchar(150) NOT NULL,
  `RDATE` date NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CADDRESS` text NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `CON1` varchar(150) NOT NULL,
  `CON2` varchar(150) NOT NULL,
  `REASON` text NOT NULL,
  `PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `CDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`ID`, `NAME`, `GENDER`, `BLOOD`, `BUNIT`, `HOSP`, `CITY`, `PIN`, `DOC`, `RDATE`, `CNAME`, `CADDRESS`, `EMAIL`, `CON1`, `CON2`, `REASON`, `PIC`, `STATUS`, `CDATE`) VALUES
(1, 'nick', 'Female', 'A2B', 2147483647, 'afaf', 'afaf', '5646546465', 'afdsdfsdfsd', '2019-01-09', 'afasfafasfaf', 'asfafasf', 'asfasfafaf', '456565465464', '646546546546', 'sdfsdfsdfsdf', 'request_image/no-image.jpg', 1, '2018-03-08'),
(2, 'nick', 'Female', 'A2B', 2147483647, 'afaf', 'afaf', '5646546465', 'afdsdfsdfsd', '2019-01-09', 'afasfafasfaf', 'asfafasf', 'asfasfafaf', '456565465464', '646546546546', 'sdfsdfsdfsdf', 'request_image/no-image.jpg', 0, '0000-00-00'),
(3, 'kent', 'Male', 'B+', 545, 'asdasd', 'Kanchipuram', '513', 'nick', '2019-01-01', 'k331331', 'asdasd', 'yernel@gmail.com', '51515', '151', 'asdasda', 'request_image/no-image.jpg', 0, '0000-00-00'),
(4, 'kent', 'Male', 'B+', 545, 'asdasd', 'Kanchipuram', '513', 'nick', '2019-01-01', 'k331331', 'asdasd', 'yernel@gmail.com', '51515', '151', 'asdasda', 'request_image/no-image.jpg', 0, '0000-00-00'),
(5, 'kent', 'Male', 'B+', 545, 'asdasd', 'Kanchipuram', '513', 'nick', '2019-01-01', 'k331331', 'asdasd', 'yernel@gmail.com', '51515', '151', 'asdasda', 'request_image/no-image.jpg', 0, '0000-00-00'),
(6, 'kina', 'Male', 'AB+', 45, 'asdas', 'Kanchipuram', '513', 'kent', '2019-01-01', '45446', 'asdasd', 'yernel@gmail.com', '4644645', '64644', 'asdas', 'request_image/no-image.jpg', 2, '2018-03-08'),
(7, 'Yernel', 'Male', 'A1B', 45, 'fasf', 'asf', '61', 'sfafasfasfasf', '2019-01-02', '31516', 'asfasf', 'asfasf@gmail.com', '64661', '546455146', 'sfasf', 'request_image/no-image.jpg', 0, '0000-00-00'),
(8, 'mommy', 'Male', 'A1+', 45, 'sfasf', 'Kanchipuram', '513', 'kent', '2019-01-27', 'kent', 'pangpang', 'yernel@gmail.com', '664', '646', '15161616515', 'request_image/no-image.jpg', 0, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `d_mssg`
--
ALTER TABLE `d_mssg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `d_mssg`
--
ALTER TABLE `d_mssg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
