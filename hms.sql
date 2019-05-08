-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 01:08 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `Id` int(100) NOT NULL,
  `slot` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`Id`, `slot`) VALUES
(1, '00:00'),
(2, '01:00'),
(3, '02:00'),
(4, '03:00'),
(5, '04:00'),
(6, '05:00'),
(7, '06:00'),
(8, '07:00'),
(9, '08:00'),
(10, '09:00'),
(11, '10:00'),
(12, '11:00'),
(13, '12:00'),
(14, '13:00'),
(15, '14:00'),
(16, '15:00'),
(17, '16:00'),
(18, '17:00'),
(19, '18:00'),
(20, '19:00'),
(21, '20:00'),
(22, '21:00'),
(23, '22:00'),
(24, '23:00');

-- --------------------------------------------------------

--
-- Table structure for table `createdbookedappointments`
--

CREATE TABLE `createdbookedappointments` (
  `Id` int(100) NOT NULL,
  `slotdate` varchar(100) NOT NULL,
  `slottime` varchar(100) NOT NULL,
  `doctorid` int(100) DEFAULT NULL,
  `patientid` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createdbookedappointments`
--

INSERT INTO `createdbookedappointments` (`Id`, `slotdate`, `slottime`, `doctorid`, `patientid`) VALUES
(162, '2019-04-06', '09:00', 41, 0),
(163, '2019-04-06', '10:00', 41, 0),
(164, '2019-04-06', '11:00', 41, 40),
(165, '2019-04-06', '12:00', 41, 0),
(166, '2019-04-06', '13:00', 41, 0),
(167, '2019-04-06', '14:00', 41, 0),
(168, '2019-04-07', '07:00', 41, 0),
(169, '2019-04-07', '08:00', 41, 0),
(170, '2019-04-07', '09:00', 41, 0),
(171, '2019-04-07', '10:00', 41, 40),
(172, '2019-04-07', '11:00', 41, 0),
(173, '2019-04-07', '12:00', 41, 0),
(174, '2019-04-07', '13:00', 41, 0),
(175, '2019-04-09', '09:00', 41, 0),
(176, '2019-04-09', '10:00', 41, 0),
(177, '2019-04-09', '11:00', 41, 0),
(178, '2019-04-09', '12:00', 41, 0),
(179, '2019-04-09', '13:00', 41, 0),
(180, '2019-04-09', '14:00', 41, 0),
(181, '2019-04-10', '09:00', 41, 0),
(182, '2019-04-10', '10:00', 41, 0),
(183, '2019-04-10', '11:00', 41, 0),
(184, '2019-04-10', '12:00', 41, 0),
(185, '2019-04-10', '13:00', 41, 0),
(186, '2019-04-11', '08:00', 41, 0),
(187, '2019-04-11', '09:00', 41, 0),
(188, '2019-04-11', '10:00', 41, 40),
(189, '2019-04-11', '11:00', 41, 0),
(190, '2019-04-11', '12:00', 41, 0),
(191, '2019-04-11', '13:00', 41, 0),
(192, '2019-04-12', '08:00', 41, 0),
(193, '2019-04-12', '09:00', 41, 0),
(194, '2019-04-12', '10:00', 41, 0),
(195, '2019-04-15', '13:00', 41, 0),
(196, '2019-04-15', '14:00', 41, 0),
(197, '2019-04-15', '15:00', 41, 40),
(198, '2019-04-15', '16:00', 41, 0),
(199, '2019-04-15', '17:00', 41, 0),
(200, '2019-04-16', '08:00', 41, 0),
(201, '2019-04-16', '09:00', 41, 0),
(202, '2019-04-16', '10:00', 41, 0),
(203, '2019-04-16', '12:00', 41, 40),
(204, '2019-04-16', '13:00', 41, 0),
(205, '2019-04-16', '14:00', 41, 0),
(206, '2019-04-17', '05:00', 41, 0),
(207, '2019-04-17', '06:00', 41, 40),
(208, '2019-04-17', '07:00', 41, 0),
(209, '2019-04-16', '04:00', 48, 0),
(210, '2019-04-16', '05:00', 48, 0),
(211, '2019-04-16', '06:00', 48, 0),
(212, '2019-04-16', '19:00', 48, 0),
(213, '2019-04-16', '20:00', 48, 0),
(214, '2019-05-02', '07:00', 41, 0),
(215, '2019-05-02', '08:00', 41, 0),
(216, '2019-05-02', '09:00', 41, 40),
(217, '2019-04-30', '00:00', 41, 40),
(218, '2019-04-30', '01:00', 41, 0),
(219, '2019-04-30', '02:00', 41, 0),
(220, '2019-05-01', '02:00', 41, 0),
(221, '2019-05-01', '03:00', 41, 40),
(222, '2019-05-01', '04:00', 41, 0),
(223, '2019-05-08', '06:00', 41, 0),
(224, '2019-05-08', '07:00', 41, 0),
(225, '2019-05-08', '08:00', 41, 40),
(226, '2019-05-08', '09:00', 41, 0),
(227, '2019-05-08', '10:00', 41, 0),
(228, '2019-05-09', '09:00', 41, 0),
(229, '2019-05-09', '10:00', 41, 0),
(230, '2019-05-09', '11:00', 41, 0),
(231, '2019-05-09', '12:00', 41, 0),
(232, '2019-05-09', '14:00', 41, 0),
(233, '2019-05-09', '15:00', 41, 0),
(234, '2019-05-09', '16:00', 41, 0),
(235, '2019-05-08', '03:00', 39, 0),
(236, '2019-05-08', '04:00', 39, 0),
(237, '2019-05-08', '05:00', 39, 0),
(238, '2019-05-08', '06:00', 39, 0),
(239, '2019-05-10', '06:00', 48, 0),
(240, '2019-05-10', '07:00', 48, 0),
(241, '2019-05-10', '08:00', 48, 0),
(242, '2019-05-10', '09:00', 48, 0),
(243, '2019-05-10', '10:00', 48, 0),
(244, '2019-05-14', '03:00', 48, 0),
(245, '2019-05-14', '04:00', 48, 0),
(246, '2019-05-14', '05:00', 48, 0),
(247, '2019-05-14', '09:00', 41, 0),
(248, '2019-05-14', '10:00', 41, 0),
(249, '2019-05-14', '11:00', 41, 40),
(250, '2019-05-14', '12:00', 41, 0),
(251, '2019-05-14', '14:00', 41, 0),
(252, '2019-05-14', '15:00', 41, 0),
(253, '2019-05-16', '09:00', 41, 0),
(254, '2019-05-16', '10:00', 41, 0),
(255, '2019-05-16', '11:00', 41, 0),
(256, '2019-05-16', '12:00', 41, 0),
(257, '2019-05-16', '14:00', 41, 0),
(258, '2019-05-16', '15:00', 41, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patientmedicine`
--

CREATE TABLE `patientmedicine` (
  `Id` int(200) NOT NULL,
  `patientid` int(200) NOT NULL,
  `doctorid` int(200) NOT NULL,
  `medicine` varchar(200) NOT NULL,
  `frequency` varchar(200) NOT NULL,
  `duration` date NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientmedicine`
--

INSERT INTO `patientmedicine` (`Id`, `patientid`, `doctorid`, `medicine`, `frequency`, `duration`, `date`) VALUES
(12, 40, 41, 'Descripine', 'Twice', '2019-04-06', '2019-04-05'),
(13, 40, 41, 'Descripine', 'Thrice', '2019-04-11', '2019-04-05'),
(14, 40, 41, 'Descripine', 'Thrice', '2019-04-10', '2019-04-05'),
(15, 40, 41, 'Neorophene', 'Twice', '2019-04-13', '2019-04-07'),
(16, 40, 41, 'Descripine', 'Twice', '2019-04-12', '2019-04-07'),
(17, 40, 41, 'Descripine', 'Twice', '2019-04-12', '2019-04-07'),
(18, 40, 41, 'Neorophene', 'Thrice', '2019-04-16', '2019-04-10'),
(19, 40, 41, 'Descripine', 'Twice', '2019-04-13', '2019-04-11'),
(20, 40, 41, 'Neorophene', 'Twice', '2019-04-19', '2019-04-16'),
(21, 40, 41, 'Descripine', 'Thrice', '2019-04-23', '2019-04-16'),
(22, 40, 41, 'Neorophene', 'Once', '2019-04-23', '2019-04-30'),
(24, 40, 41, 'Neorophene', 'Thrice', '2019-05-15', '2019-05-08');

-- --------------------------------------------------------

--
-- Table structure for table `patientnote`
--

CREATE TABLE `patientnote` (
  `Id` int(200) NOT NULL,
  `patientid` int(200) NOT NULL,
  `doctorid` int(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientnote`
--

INSERT INTO `patientnote` (`Id`, `patientid`, `doctorid`, `date`, `notes`) VALUES
(2, 40, 41, '2019-04-04', 'jds '),
(3, 40, 41, '2019-04-05', 'Do not drink cold water'),
(4, 40, 41, '2019-04-05', 'please donot drink cold water'),
(5, 40, 41, '2019-04-07', 'lksdc sacscalk asca'),
(6, 40, 41, '2019-04-16', 'jmvkxdvxv  dxjgmndxg '),
(8, 40, 41, '2019-05-08', 'do not drink cold water');

-- --------------------------------------------------------

--
-- Table structure for table `patientsymptom`
--

CREATE TABLE `patientsymptom` (
  `Id` int(200) NOT NULL,
  `patientid` int(200) NOT NULL,
  `doctorid` int(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `symptoms` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientsymptom`
--

INSERT INTO `patientsymptom` (`Id`, `patientid`, `doctorid`, `date`, `symptoms`) VALUES
(1, 40, 41, '2019-04-04', 'fever'),
(3, 40, 41, '2019-04-05', 'fever'),
(4, 40, 41, '2019-04-05', 'fever'),
(5, 40, 41, '2019-04-05', 'fever'),
(6, 40, 41, '2019-04-05', 'cold'),
(7, 40, 41, '2019-04-07', 'fever'),
(8, 40, 41, '2019-04-10', 'fever'),
(9, 40, 41, '2019-04-11', 'fever, cold'),
(10, 40, 41, '2019-04-16', 'fever, cold'),
(12, 40, 41, '2019-05-08', 'fever, cold, ');

-- --------------------------------------------------------

--
-- Table structure for table `patienttest`
--

CREATE TABLE `patienttest` (
  `Id` int(250) NOT NULL,
  `patientid` int(250) NOT NULL,
  `doctorid` int(250) NOT NULL,
  `test` varchar(250) NOT NULL,
  `phlebotomistid` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `completeddate` date NOT NULL,
  `bill` varchar(200) NOT NULL,
  `report` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patienttest`
--

INSERT INTO `patienttest` (`Id`, `patientid`, `doctorid`, `test`, `phlebotomistid`, `date`, `completeddate`, `bill`, `report`) VALUES
(6, 54, 41, 'Blood TEST--Lab-1', '0', '2019-03-30', '0000-00-00', '', ''),
(7, 54, 41, 'Chest-Xray -- Lab-2', '0', '2019-03-30', '0000-00-00', '', ''),
(10, 59, 41, 'Chest-Xray -- Lab-2', 'Andrew', '2019-04-04', '2019-04-10', '', 'medicalreport/sample.jpg'),
(11, 59, 41, 'Blood TEST -- Lab-1', '0', '2019-04-04', '0000-00-00', '', ''),
(12, 60, 41, 'Blood TEST -- Lab-1', '0', '2019-04-04', '0000-00-00', '', ''),
(13, 60, 41, 'Chest-Xray -- Lab-2', '0', '2019-04-04', '0000-00-00', '', ''),
(15, 40, 41, 'Chest-Xray -- Lab-2', 'Andrew', '2019-04-05', '2019-04-09', '', 'medicalreport/bookedappointment.jpg'),
(16, 40, 41, 'Blood TEST -- Lab-1', 'Andrew', '2019-04-07', '2019-04-09', '', 'medicalreport/background.jpg'),
(17, 40, 41, 'Urine Test -- Lab-2', 'Andrew', '2019-04-10', '2019-04-10', '', 'medicalreport/sample.jpg'),
(18, 40, 41, 'Chest-Xray -- Lab-2', 'Andrew', '2019-04-11', '2019-04-16', '', 'medicalreport/appointment.jpg'),
(19, 40, 41, 'Chest-Xray -- Lab-2', 'Andrew', '2019-04-11', '2019-05-08', '', 'medicalreport/background.jpg'),
(20, 40, 41, 'Blood TEST -- Lab-1', '', '2019-04-11', '0000-00-00', '', ''),
(21, 40, 41, 'Chest-Xray -- Lab-2', '', '2019-04-16', '0000-00-00', '', ''),
(22, 40, 41, 'Blood TEST -- Lab-1', '', '2019-04-16', '0000-00-00', '', ''),
(23, 40, 41, 'Chest-Xray -- Lab-2', '', '2019-04-17', '0000-00-00', '', ''),
(25, 40, 41, 'Blood TEST -- Lab-1', '', '2019-05-08', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `Id` int(200) NOT NULL,
  `Tittle` varchar(200) NOT NULL,
  `Lab` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`Id`, `Tittle`, `Lab`) VALUES
(1, 'Blood TEST', 'Lab-1'),
(2, 'Chest-Xray', 'Lab-2'),
(3, 'Urine Test', 'Lab-2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `UserGender` varchar(100) NOT NULL,
  `UserEmail` varchar(100) NOT NULL,
  `UserPassword` varchar(100) NOT NULL,
  `UserNumber` int(100) NOT NULL,
  `UserDiscription` varchar(100) NOT NULL,
  `UserAddress` varchar(100) NOT NULL,
  `UserType` varchar(100) NOT NULL,
  `UserImage` varchar(100) NOT NULL,
  `UserStatus` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `UserName`, `UserGender`, `UserEmail`, `UserPassword`, `UserNumber`, `UserDiscription`, `UserAddress`, `UserType`, `UserImage`, `UserStatus`) VALUES
(39, 'Husnain Azeem Toor', 'Male', 'toorinter@gmail.com', '123456789', 899659857, 'Eye Specialist', '21 Kilmainham Dublin 8', 'doctor', '46506014_1226186520862624_1012085824709197824_n.jpg', ''),
(40, 'JHON PAUL', 'Male', 'jp@gmail.com', '123456789', 899658245, '', '21 killmainham Orchard Turvey Avenue', 'patient', 'azeempic.jpg', ''),
(41, 'Waqas Adill sahib', 'Male', 'waqasadil@gmail.com', '123456789', 899659857, 'Lungs Specialist', '22-23 westmoreland', 'doctor', 'azeempic.jpg', ''),
(48, 'Abdul Qader', 'Male', 'qadeer@gmail.com', '12345', 2147483647, 'Stomach Specialist ', 'Tallagh, Dublin Ireland', 'doctor', 'waqaspic.jpg', ''),
(49, 'Hassan', 'Male', 'hassan@gmail.com', '12345', 899659857, 'Eye Specialist', 'Bhoth Sialkot Pakistan', 'doctor', 'hassanpic.jpg', ''),
(51, 'Azeem Ahmed', 'Male', 'azeemahmed@gmail.com', '12345', 899659857, 'Bone Specialist', '21310 Sialkot, Pakistan', 'doctor', 'azeempic.jpg', ''),
(53, 'David Higin', 'Male', 'david@gmail.com', '12345', 899659857, 'Neurol Sargon', 'Lucan Dublin Ireland', 'doctor', 'davidpic.jpg', ''),
(54, 'Umer', '', 'umer@gmail.com', '123456789', 899659857, '', '', 'patient', 'e-logo.PNG', ''),
(58, 'muqadas', '', 'm@gmail.com', '123456789', 2128372, '', '', 'patient', 'uploadphoto.jpg', ''),
(59, 'GRAHAM', '', 'g@cct.ie', '123456789', 899659857, '', '', 'patient', 'azeempic.jpg', ''),
(60, 'KKen', 'Male', 'ken@cct.ie', '123456789', 899657415, '', '30-34 Westmoreland Street', 'patient', 'abdulpic.jpg', ''),
(61, 'Andrew', 'Male', 'andrew@gmail.com', '123456789', 899659857, '', '21 Kilmainham orchard D8', 'phlebotomist', 'uploadphoto.jpg', ''),
(62, 'admin', 'Male', 'admin@ehms.com', 'admin', 899659857, '', '21 Kilmainham orchard', 'admin', 'uploadphoto.jpg', ''),
(63, 'Husnain Azeem Toor', 'Male', 'toor@ehms.com', '123', 899659857, '', '21 Kilmainham Orchard Turvey avenue', 'doctor', '46506014_1226186520862624_1012085824709197824_n.jpg', ''),
(64, 'waqar', '', 'waqar@gmail.com', '12345', 899659857, '', '', 'patient', 'uploadphoto.jpg', ''),
(65, 'John Snel', 'Male', 'john@cct.ie', '123456789', 899659857, '', '32-33 westmoreland', 'doctor', 'uploadphoto.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `createdbookedappointments`
--
ALTER TABLE `createdbookedappointments`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `doctorid` (`doctorid`);

--
-- Indexes for table `patientmedicine`
--
ALTER TABLE `patientmedicine`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patientnote`
--
ALTER TABLE `patientnote`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patientsymptom`
--
ALTER TABLE `patientsymptom`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `patienttest`
--
ALTER TABLE `patienttest`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `createdbookedappointments`
--
ALTER TABLE `createdbookedappointments`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `patientmedicine`
--
ALTER TABLE `patientmedicine`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `patientnote`
--
ALTER TABLE `patientnote`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `patientsymptom`
--
ALTER TABLE `patientsymptom`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `patienttest`
--
ALTER TABLE `patienttest`
  MODIFY `Id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `createdbookedappointments`
--
ALTER TABLE `createdbookedappointments`
  ADD CONSTRAINT `createdbookedappointments_ibfk_1` FOREIGN KEY (`doctorid`) REFERENCES `user` (`UserId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
