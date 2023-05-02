-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 06:30 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_wvsu`
--

-- --------------------------------------------------------

--
-- Table structure for table `messagein`
--

CREATE TABLE `messagein` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `SMSC` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagein`
--

INSERT INTO `messagein` (`Id`, `SendTime`, `ReceiveTime`, `MessageFrom`, `MessageTo`, `SMSC`, `MessageText`, `MessageType`, `MessageParts`, `MessagePDU`, `Gateway`, `UserId`) VALUES
(1, '2018-12-10 15:52:11', NULL, '+639305235027', '+639305235027', NULL, 'You have notification from WVSU - ANOUNCEMENT - ok on 2018-12-10 08:45 @ kABANKALAN', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messagelog`
--

CREATE TABLE `messagelog` (
  `Id` int(11) NOT NULL,
  `SendTime` datetime DEFAULT NULL,
  `ReceiveTime` datetime DEFAULT NULL,
  `StatusCode` int(11) DEFAULT NULL,
  `StatusText` varchar(80) DEFAULT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `MessageId` varchar(80) DEFAULT NULL,
  `ErrorCode` varchar(80) DEFAULT NULL,
  `ErrorText` text,
  `Gateway` varchar(80) DEFAULT NULL,
  `MessageParts` int(11) DEFAULT NULL,
  `MessagePDU` text,
  `Connector` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagelog`
--

INSERT INTO `messagelog` (`Id`, `SendTime`, `ReceiveTime`, `StatusCode`, `StatusText`, `MessageTo`, `MessageFrom`, `MessageText`, `MessageType`, `MessageId`, `ErrorCode`, `ErrorText`, `Gateway`, `MessageParts`, `MessagePDU`, `Connector`, `UserId`, `UserInfo`) VALUES
(1, '2018-12-09 11:13:50', NULL, 200, NULL, '+639663445717', NULL, 'You have notification from WVSU - ANOUNCEMENT - THIS IS THE TEST 0.1 FOR THE ANNOUNCEMENT', NULL, '1:+639663445717:241', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, '2018-12-09 11:14:09', NULL, 300, NULL, '+6313213', NULL, 'You have notification from WVSU - ANOUNCEMENT - THIS IS THE TEST 0.1 FOR THE ANNOUNCEMENT', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '2018-12-09 11:15:39', NULL, 200, NULL, '+639663445717', NULL, 'You have notification from WVSU - EVENT - THIS IS THE TEST 0.1 FOR THE EVENTS', NULL, '1:+639663445717:245', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, '2018-12-09 11:15:58', NULL, 300, NULL, '+6313213', NULL, 'You have notification from WVSU - EVENT - THIS IS THE TEST 0.1 FOR THE EVENTS', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '2018-12-09 11:19:20', NULL, 200, NULL, '+639663445717', NULL, 'You have notification from WVSU - ANOUNCEMENT - THIS IS FOR THE TEST OF ANNOUNCEMENT 0.2 on 2018-12-09 11:20 @ kABANKALAN', NULL, '1:+639663445717:249', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '2018-12-09 11:19:39', NULL, 300, NULL, '+6313213', NULL, 'You have notification from WVSU - ANOUNCEMENT - THIS IS FOR THE TEST OF ANNOUNCEMENT 0.2 on 2018-12-09 11:20 @ kABANKALAN', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '2018-12-09 11:20:25', NULL, 200, NULL, '+639663445717', NULL, 'You have notification from WVSU - EVENT - THIS IS FOR THE TEXT EVENT 0.2 on 2018-12-09 11:20 @ KABANKALAN', NULL, '1:+639663445717:253', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '2018-12-09 11:20:43', NULL, 300, NULL, '+6313213', NULL, 'You have notification from WVSU - EVENT - THIS IS FOR THE TEXT EVENT 0.2 on 2018-12-09 11:20 @ KABANKALAN', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '2018-12-10 15:48:54', NULL, 300, NULL, '+639663445717', NULL, 'You have notification from WVSU - new event - dshjdhjdjd on 2018-12-09 11:10 @ KABANKALAN', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, '2018-12-10 15:48:58', NULL, 300, NULL, '+6313213', NULL, 'You have notification from WVSU - new event - dshjdhjdjd on 2018-12-09 11:10 @ KABANKALAN', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '2018-12-10 15:49:55', NULL, 300, NULL, '+639663445717', NULL, 'You have notification from WVSU - ANOUNCEMENT - yes on 2018-12-10 08:45 @ kABANKALAN', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, '2018-12-10 15:50:01', NULL, 300, NULL, '+6313213', NULL, 'You have notification from WVSU - ANOUNCEMENT - yes on 2018-12-10 08:45 @ kABANKALAN', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, '2018-12-10 15:52:12', NULL, 200, NULL, '+639305235027', NULL, 'You have notification from WVSU - ANOUNCEMENT - ok on 2018-12-10 08:45 @ kABANKALAN', NULL, '1:+639305235027:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, '2018-12-10 15:52:31', NULL, 300, NULL, '+6313213', NULL, 'You have notification from WVSU - ANOUNCEMENT - ok on 2018-12-10 08:45 @ kABANKALAN', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, '2019-01-26 13:23:58', NULL, 300, NULL, '+6381238123', NULL, 'You have notification from WVSU - New Announcement - Test announcement on 2019-01-26 08:45 @ Bago City', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, '2019-01-26 13:23:58', NULL, 300, NULL, '+63s', NULL, 'You have notification from WVSU - New Announcement - Test announcement on 2019-01-26 08:45 @ Bago City', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, '2019-01-26 13:28:50', NULL, 300, NULL, '+6381238123', NULL, 'You have notification from WVSU - BSIT ANNOUNCEMENT - BSIT ANNOUNCEMENT on 2019-01-30 09:45 @ Bago City', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, '2019-01-26 13:28:50', NULL, 300, NULL, '+63s', NULL, 'You have notification from WVSU - BSIT ANNOUNCEMENT - BSIT ANNOUNCEMENT on 2019-01-30 09:45 @ Bago City', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messageout`
--

CREATE TABLE `messageout` (
  `Id` int(11) NOT NULL,
  `MessageTo` varchar(80) DEFAULT NULL,
  `MessageFrom` varchar(80) DEFAULT NULL,
  `MessageText` text,
  `MessageType` varchar(80) DEFAULT NULL,
  `Gateway` varchar(80) DEFAULT NULL,
  `UserId` varchar(80) DEFAULT NULL,
  `UserInfo` text,
  `Priority` int(11) DEFAULT NULL,
  `Scheduled` datetime DEFAULT NULL,
  `ValidityPeriod` int(11) DEFAULT NULL,
  `IsSent` tinyint(1) NOT NULL DEFAULT '0',
  `IsRead` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblannouncement`
--

CREATE TABLE `tblannouncement` (
  `ANNOUNCEMENTID` int(11) NOT NULL,
  `ANNOUNCEMENT_TEXT` text NOT NULL,
  `ANNOUNCEMENT_WHAT` text NOT NULL,
  `ANNOUNCEMENT_WHEN` datetime NOT NULL,
  `ANNOUNCEMENT_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblannouncement`
--

INSERT INTO `tblannouncement` (`ANNOUNCEMENTID`, `ANNOUNCEMENT_TEXT`, `ANNOUNCEMENT_WHAT`, `ANNOUNCEMENT_WHEN`, `ANNOUNCEMENT_WHERE`, `DATEPOSTED`) VALUES
(201800038, 'asd', '<p>sad</p>', '2018-10-15 08:40:00', 'ASDASd', '2018-10-14 18:18:17'),
(201800041, 'sad', '<p>asdas</p>', '2018-10-22 12:40:00', '', '2018-10-22 15:28:29'),
(201800042, 'asdssssssssssssssss', '<p>asdas</p>', '2018-10-22 16:25:00', 'sadsa', '2018-10-22 17:25:14'),
(201800043, 'ANOUNCEMENT', '<p>THIS IS THE TEST 0.1 FOR THE ANNOUNCEMENT</p>', '2018-12-10 08:45:00', 'kABANKALAN', '2018-12-09 04:13:43'),
(201800045, 'ANOUNCEMENT', '<p>THIS IS FOR THE TEST OF ANNOUNCEMENT 0.2</p>', '2018-12-09 11:20:00', 'kABANKALAN', '2018-12-09 04:19:11'),
(201800048, 'ANOUNCEMENT', '<p>yes</p>', '2018-12-10 08:45:00', 'kABANKALAN', '2018-12-10 08:49:30'),
(201800049, 'ANOUNCEMENT', '<p>ok</p>', '2018-12-10 08:45:00', 'kABANKALAN', '2018-12-10 08:52:07'),
(201900050, 'New Announcement', '<p>Test announcement</p>', '2019-01-26 08:45:00', 'Bago City', '2019-01-26 06:23:53'),
(201900051, 'BSIT ANNOUNCEMENT', '<p>BSIT ANNOUNCEMENT<br></p>', '2019-01-30 09:45:00', 'Bago City', '2019-01-26 06:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumbers`
--

CREATE TABLE `tblautonumbers` (
  `AUTOID` int(11) NOT NULL,
  `AUTOSTART` varchar(30) NOT NULL,
  `AUTOEND` int(11) NOT NULL,
  `AUTOINC` int(11) NOT NULL,
  `AUTOKEY` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumbers`
--

INSERT INTO `tblautonumbers` (`AUTOID`, `AUTOSTART`, `AUTOEND`, `AUTOINC`, `AUTOKEY`) VALUES
(1, '02983', 8, 1, 'userid'),
(10, '000', 27, 1, 'bookingid'),
(12, '000', 52, 1, 'BLOGID'),
(13, '0', 9, 1, 'STUDENTID');

-- --------------------------------------------------------

--
-- Table structure for table `tblblogpost`
--

CREATE TABLE `tblblogpost` (
  `BLOGID` int(11) NOT NULL,
  `BLOGS` text NOT NULL,
  `BLOG_WHAT` text NOT NULL,
  `BLOG_WHEN` varchar(90) NOT NULL,
  `BLOG_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL,
  `CATEGORY` varchar(90) NOT NULL,
  `AUTHOR` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblblogpost`
--

INSERT INTO `tblblogpost` (`BLOGID`, `BLOGS`, `BLOG_WHAT`, `BLOG_WHEN`, `BLOG_WHERE`, `DATEPOSTED`, `CATEGORY`, `AUTHOR`) VALUES
(201800036, 'Event', '<p>ets</p>', '2018-06-12 01:25', '', '2018-10-14 23:53:59', 'EVENT', 'Janno Palacios'),
(201800037, 'asdas', '<p>asd</p>', '2018-06-12 00:25', '', '2018-10-15 00:06:32', 'EVENT', 'Janno Palacios'),
(201800038, 'asd', '<p>sad</p>', '2018-10-15 08:40', 'ASDASd', '2018-10-15 00:18:17', 'ANNOUNCEMENT', 'Janno Palacios'),
(201800039, 'test event', '<p>to all event</p>', '2018-10-16 13:00', 'gym', '2018-10-15 10:20:38', 'EVENT', 'Janno Palacios'),
(201800040, 'dshsadgkjf', '<p>dfysdfghakjagb g</p>', '2018-10-17 10:45', '', '2018-10-15 10:45:41', 'EVENT', 'Janno Palacios'),
(201800041, 'sad', '<p>asdas</p>', '2018-10-22 12:40', '', '2018-10-22 21:28:30', 'ANNOUNCEMENT', 'Janno Palacios'),
(201800042, 'asdssssssssssssssss', '<p>asdas</p>', '2018-10-22 16:25:00', 'sadsa', '2018-10-22 23:25:15', 'ANNOUNCEMENT', 'Janno Palacios'),
(201800043, 'ANOUNCEMENT', '<p>THIS IS THE TEST 0.1 FOR THE ANNOUNCEMENT</p>', '2018-12-10 08:45', 'kABANKALAN', '2018-12-09 11:13:43', 'ANNOUNCEMENT', 'Janno Palacios'),
(201800044, 'EVENT', '<p>THIS IS THE TEST 0.1 FOR THE EVENTS</p>', '2018-12-09 11:10', 'KABANKALAN', '2018-12-09 11:15:33', 'EVENT', 'Janno Palacios'),
(201800045, 'ANOUNCEMENT', '<p>THIS IS FOR THE TEST OF ANNOUNCEMENT 0.2</p>', '2018-12-09 11:20', 'kABANKALAN', '2018-12-09 11:19:11', 'ANNOUNCEMENT', 'Janno Palacios'),
(201800046, 'EVENT', '<p>THIS IS FOR THE TEXT EVENT 0.2</p>', '2018-12-09 11:20', 'KABANKALAN', '2018-12-09 11:20:20', 'EVENT', 'Janno Palacios'),
(201800047, 'new event', '<p>dshjdhjdjd</p>', '2018-12-09 11:10', 'KABANKALAN', '2018-12-10 15:47:19', 'EVENT', 'Janno Palacios'),
(201800048, 'ANOUNCEMENT', '<p>yes</p>', '2018-12-10 08:45', 'kABANKALAN', '2018-12-10 15:49:30', 'ANNOUNCEMENT', 'Janno Palacios'),
(201800049, 'ANOUNCEMENT', '<p>ok</p>', '2018-12-10 08:45', 'kABANKALAN', '2018-12-10 15:52:07', 'ANNOUNCEMENT', 'Janno Palacios'),
(201900050, 'New Announcement', '<p>Test announcement</p>', '2019-01-26 08:45', 'Bago City', '2019-01-26 13:23:53', 'ANNOUNCEMENT', 'Janno Palacios'),
(201900051, 'BSIT ANNOUNCEMENT', '<p>BSIT ANNOUNCEMENT<br></p>', '2019-01-30 09:45', 'Bago City', '2019-01-26 13:28:48', 'ANNOUNCEMENT', 'Janno Palacios');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `COURSEID` int(11) NOT NULL,
  `COURSE` varchar(60) NOT NULL,
  `DESCRIPTION` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`COURSEID`, `COURSE`, `DESCRIPTION`) VALUES
(3, 'BSED', 'Bachelor of Science in Secondary Education');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `DEPARTMENTID` int(11) NOT NULL,
  `DEPARTMENT` varchar(90) NOT NULL,
  `DESCRIPTION` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`DEPARTMENTID`, `DEPARTMENT`, `DESCRIPTION`) VALUES
(3, 'IT Department', 'Information Technology Department'),
(4, 'sadasd', 'sad');

-- --------------------------------------------------------

--
-- Table structure for table `tblevent`
--

CREATE TABLE `tblevent` (
  `EVENTID` int(11) NOT NULL,
  `EVENT_TEXT` text NOT NULL,
  `EVENT_WHAT` text NOT NULL,
  `EVENT_WHEN` datetime NOT NULL,
  `EVENT_WHERE` varchar(90) NOT NULL,
  `DATEPOSTED` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblevent`
--

INSERT INTO `tblevent` (`EVENTID`, `EVENT_TEXT`, `EVENT_WHAT`, `EVENT_WHEN`, `EVENT_WHERE`, `DATEPOSTED`) VALUES
(201800036, 'Event', '<p>ets</p>', '2018-06-12 01:25:00', '', '2018-10-14 17:53:00'),
(201800037, 'asdas', '<p>asd</p>', '2018-06-12 00:25:00', '', '2018-10-14 18:06:00'),
(201800039, 'test event', '<p>to all event</p>', '2018-10-16 13:00:00', 'gym', '2018-10-15 04:20:00'),
(201800040, 'dshsadgkjf', '<p>dfysdfghakjagb g</p>', '2018-10-17 10:45:00', '', '2018-10-15 04:45:00'),
(201800044, 'EVENT', '<p>THIS IS THE TEST 0.1 FOR THE EVENTS</p>', '2018-12-09 11:10:00', 'KABANKALAN', '2018-12-09 04:15:00'),
(201800046, 'EVENT', '<p>THIS IS FOR THE TEXT EVENT 0.2</p>', '2018-12-09 11:20:00', 'KABANKALAN', '2018-12-09 04:20:00'),
(201800047, 'new event', '<p>dshjdhjdjd</p>', '2018-12-09 11:10:00', 'KABANKALAN', '2018-12-10 08:47:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `INCID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `FNAME` varchar(30) NOT NULL,
  `MNAME` varchar(30) NOT NULL,
  `LNAME` varchar(30) NOT NULL,
  `ADDRESS` varchar(90) NOT NULL,
  `PHONE` varchar(30) NOT NULL,
  `COURSE` varchar(90) NOT NULL,
  `DEPARTMENT` varchar(90) NOT NULL,
  `USERNAME` varchar(90) NOT NULL,
  `STUDPASS` varchar(90) NOT NULL,
  `PROIMAGE` text NOT NULL,
  `FORGOTPASSAUTH` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`INCID`, `IDNO`, `FNAME`, `MNAME`, `LNAME`, `ADDRESS`, `PHONE`, `COURSE`, `DEPARTMENT`, `USERNAME`, `STUDPASS`, `PROIMAGE`, `FORGOTPASSAUTH`) VALUES
(1, '201806', 'Janno', 'Er', 'Palacios', 'Kabankalan City', '081238123', '3', '3', 'a', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 'student_image/2018-10-19.png', ''),
(2, '201807', 'Janno', 'Palacios', 'Willis', 'd', 'as', '3', '3', 'a', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'student_image/2018-10-21ww.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudentnotif`
--

CREATE TABLE `tblstudentnotif` (
  `NotificationID` int(11) NOT NULL,
  `IDNO` varchar(90) NOT NULL,
  `BLOGID` varchar(90) NOT NULL,
  `TYPE` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstudentnotif`
--

INSERT INTO `tblstudentnotif` (`NotificationID`, `IDNO`, `BLOGID`, `TYPE`) VALUES
(4, '201806', '201800043', 'Announcement'),
(5, '201807', '201800043', 'Announcement'),
(6, '201806', '201800044', 'Event'),
(7, '201807', '201800044', 'Event'),
(8, '201806', '201800045', 'Announcement'),
(9, '201807', '201800045', 'Announcement'),
(10, '201806', '201800046', 'Event'),
(11, '201807', '201800046', 'Event'),
(13, '201807', '201800047', 'Event'),
(15, '201807', '201800048', 'Announcement'),
(16, '201806', '201800049', 'Announcement'),
(17, '201807', '201800049', 'Announcement'),
(18, '201806', '201900050', 'Announcement'),
(19, '201807', '201900050', 'Announcement'),
(20, '201806', '201900051', 'Announcement'),
(21, '201807', '201900051', 'Announcement');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `USERID` int(11) NOT NULL,
  `NAME` varchar(90) NOT NULL,
  `UEMAIL` varchar(90) NOT NULL,
  `PASS` varchar(90) NOT NULL,
  `TYPE` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`USERID`, `NAME`, `UEMAIL`, `PASS`, `TYPE`) VALUES
(4, 'Janno Palacios', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator'),
(312313, 'Gino', 'Gino', '91dd9eeb26bc669762ae4d697705fca3809c3713', 'Administrator'),
(312314, 'asd', 'sad', 'b521caa6e1db82e5a01c924a419870cb72b81635', 'Administrator'),
(312315, 'asd', 'sad', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messagein`
--
ALTER TABLE `messagein`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messagelog`
--
ALTER TABLE `messagelog`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_MessageId` (`MessageId`,`SendTime`);

--
-- Indexes for table `messageout`
--
ALTER TABLE `messageout`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IDX_IsRead` (`IsRead`);

--
-- Indexes for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  ADD PRIMARY KEY (`ANNOUNCEMENTID`);

--
-- Indexes for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  ADD PRIMARY KEY (`AUTOID`);

--
-- Indexes for table `tblblogpost`
--
ALTER TABLE `tblblogpost`
  ADD PRIMARY KEY (`BLOGID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`COURSEID`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`DEPARTMENTID`);

--
-- Indexes for table `tblevent`
--
ALTER TABLE `tblevent`
  ADD PRIMARY KEY (`EVENTID`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`INCID`),
  ADD UNIQUE KEY `STUDID` (`IDNO`);

--
-- Indexes for table `tblstudentnotif`
--
ALTER TABLE `tblstudentnotif`
  ADD PRIMARY KEY (`NotificationID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`USERID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messagein`
--
ALTER TABLE `messagein`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messagelog`
--
ALTER TABLE `messagelog`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `messageout`
--
ALTER TABLE `messageout`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblannouncement`
--
ALTER TABLE `tblannouncement`
  MODIFY `ANNOUNCEMENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201900052;

--
-- AUTO_INCREMENT for table `tblautonumbers`
--
ALTER TABLE `tblautonumbers`
  MODIFY `AUTOID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblblogpost`
--
ALTER TABLE `tblblogpost`
  MODIFY `BLOGID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201900052;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `COURSEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `DEPARTMENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblevent`
--
ALTER TABLE `tblevent`
  MODIFY `EVENTID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201800048;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `INCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblstudentnotif`
--
ALTER TABLE `tblstudentnotif`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `USERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312316;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
