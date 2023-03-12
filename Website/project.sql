-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 11:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `ActivityNo` int(11) NOT NULL,
  `ActivityID` varchar(32) NOT NULL,
  `ActivityName` varchar(32) NOT NULL,
  `TeacherID` varchar(32) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `Year` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `activity_register`
--

CREATE TABLE `activity_register` (
  `Activity_Register` int(10) NOT NULL,
  `ActivityName` varchar(32) NOT NULL,
  `Activity_time` varchar(128) NOT NULL,
  `Activity_day` varchar(128) NOT NULL,
  `Activity_Point` int(64) NOT NULL,
  `TeacherID` int(13) NOT NULL,
  `ActivityID` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `Advisor_Number` int(11) NOT NULL,
  `Advisor_ID` varchar(32) NOT NULL,
  `StudentID` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `open_section`
--

CREATE TABLE `open_section` (
  `BookingID` int(10) NOT NULL,
  `TeacherName` varchar(64) NOT NULL,
  `Subject_ID` varchar(64) NOT NULL,
  `Subject` varchar(32) NOT NULL,
  `Section` varchar(5) NOT NULL,
  `Program` varchar(64) NOT NULL,
  `Volume` int(10) NOT NULL,
  `Credit` int(10) NOT NULL,
  `Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `parent_profile`
--

CREATE TABLE `parent_profile` (
  `Parent_IDD` int(11) NOT NULL,
  `Parent_ID_Card` int(13) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `TypeOfParent` text NOT NULL,
  `Nationality` text NOT NULL,
  `Religion` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` text NOT NULL,
  `Workplace` text NOT NULL,
  `WorkPhone` text NOT NULL,
  `Phone` text NOT NULL,
  `Salary` varchar(30) NOT NULL,
  `Occupation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `RoomNo` varchar(32) NOT NULL,
  `Building` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`RoomNo`, `Building`) VALUES
('CB1405', 'CB1'),
('CB1504', 'CB1'),
('CB2405', 'CB2'),
('CB2501', 'CB2'),
('CB2504', 'CB2'),
('CB2507', 'CB2'),
('CB2603', 'CB2'),
('CB2607', 'CB2'),
('SOLA506', 'SOLA'),
('SOLA403', 'SOLA');

-- --------------------------------------------------------

--
-- Table structure for table `room_regisid`
--

CREATE TABLE `room_regisid` (
  `Room_RegisID` int(12) NOT NULL,
  `TimeID` int(32) DEFAULT NULL,
  `RoomNo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `Subject_Code` varchar(10) NOT NULL,
  `Section` varchar(16) NOT NULL,
  `Grade` varchar(10) NOT NULL,
  `Mean` double NOT NULL,
  `Max_Score` double NOT NULL,
  `Min_Score` double NOT NULL,
  `SD` double NOT NULL,
  `Median` double NOT NULL,
  `Teacher` varchar(32) NOT NULL,
  `StudentID` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `UserID` varchar(12) NOT NULL,
  `Password` varchar(12) DEFAULT NULL,
  `Student_ID` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `DOB` date NOT NULL,
  `ID_Card` text NOT NULL,
  `Gender` text NOT NULL,
  `Nationality` text NOT NULL,
  `Religion` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Parent_ID` int(13) NOT NULL,
  `Department` text NOT NULL,
  `Faculty` text NOT NULL,
  `Section` text NOT NULL,
  `Status` text NOT NULL,
  `YearOfStudy` date NOT NULL,
  `Program` text NOT NULL,
  `GPA` double NOT NULL,
  `GPAX` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `student_subject_register`
--

CREATE TABLE `student_subject_register` (
  `Subject_RegisterID` int(10) NOT NULL,
  `SubjectID` int(11) DEFAULT NULL,
  `StudentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SubjectID` int(11) NOT NULL,
  `Subject_Code` varchar(10) NOT NULL,
  `Section` varchar(5) DEFAULT NULL,
  `SubjectName` varchar(32) NOT NULL,
  `Teacher` varchar(64) NOT NULL,
  `Program` varchar(16) NOT NULL,
  `Credit` int(4) NOT NULL,
  `Volume` int(16) NOT NULL,
  `Price` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_profile`
--

CREATE TABLE `teacher_profile` (
  `Teacher_ID` bigint(13) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Faculty` text NOT NULL,
  `Email` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `time1`
--

CREATE TABLE `time1` (
  `TimeID` int(32) NOT NULL,
  `Time` text,
  `Date` text NOT NULL,
  `BookingID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`ActivityNo`);

--
-- Indexes for table `activity_register`
--
ALTER TABLE `activity_register`
  ADD PRIMARY KEY (`ActivityID`);

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`Advisor_Number`);

--
-- Indexes for table `open_section`
--
ALTER TABLE `open_section`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `parent_profile`
--
ALTER TABLE `parent_profile`
  ADD PRIMARY KEY (`Parent_IDD`,`Parent_ID_Card`) USING BTREE;

--
-- Indexes for table `room_regisid`
--
ALTER TABLE `room_regisid`
  ADD PRIMARY KEY (`Room_RegisID`),
  ADD KEY `TimeID` (`TimeID`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`Student_ID`);

--
-- Indexes for table `student_subject_register`
--
ALTER TABLE `student_subject_register`
  ADD PRIMARY KEY (`Subject_RegisterID`),
  ADD KEY `SubjectID` (`SubjectID`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SubjectID`);

--
-- Indexes for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  ADD PRIMARY KEY (`Teacher_ID`);

--
-- Indexes for table `time1`
--
ALTER TABLE `time1`
  ADD PRIMARY KEY (`TimeID`),
  ADD KEY `BookingID` (`BookingID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `ActivityNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `advisor`
--
ALTER TABLE `advisor`
  MODIFY `Advisor_Number` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `open_section`
--
ALTER TABLE `open_section`
  MODIFY `BookingID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `parent_profile`
--
ALTER TABLE `parent_profile`
  MODIFY `Parent_IDD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room_regisid`
--
ALTER TABLE `room_regisid`
  MODIFY `Room_RegisID` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `student_register`
--
ALTER TABLE `student_register`
  MODIFY `Student_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `student_subject_register`
--
ALTER TABLE `student_subject_register`
  MODIFY `Subject_RegisterID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `SubjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `teacher_profile`
--
ALTER TABLE `teacher_profile`
  MODIFY `Teacher_ID` bigint(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `time1`
--
ALTER TABLE `time1`
  MODIFY `TimeID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_regisid`
--
ALTER TABLE `room_regisid`
  ADD CONSTRAINT `room_regisid_ibfk_1` FOREIGN KEY (`TimeID`) REFERENCES `time1` (`TimeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student_subject_register`
--
ALTER TABLE `student_subject_register`
  ADD CONSTRAINT `student_subject_register_ibfk_1` FOREIGN KEY (`SubjectID`) REFERENCES `subject` (`SubjectID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `time1`
--
ALTER TABLE `time1`
  ADD CONSTRAINT `time1_ibfk_1` FOREIGN KEY (`BookingID`) REFERENCES `open_section` (`BookingID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
