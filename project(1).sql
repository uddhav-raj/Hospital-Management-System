-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2018 at 05:14 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `Accountant`
--

CREATE TABLE `Accountant` (
  `accountantid` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Accountant`
--

INSERT INTO `Accountant` (`accountantid`, `name`, `password`) VALUES
('acc1', 'accname1', 'acc1udd'),
('acc10', 'accname10', 'acc10udd'),
('acc2', 'accname2', 'acc2udd'),
('acc3', 'accname3', 'acc3udd'),
('acc4', 'accname4', 'uddacc4'),
('acc5', 'accname5', 'acc5udd'),
('acc6', 'accname6', 'acc6udd'),
('acc7', 'accname7', 'acc7udd'),
('acc8', 'accname8', 'acc8udd'),
('acc9', 'accname9', 'acc9udd');

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `adminid` varchar(6) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`adminid`, `password`) VALUES
('admin', 'uddhav');

-- --------------------------------------------------------

--
-- Table structure for table `Doctor`
--

CREATE TABLE `Doctor` (
  `doctorid` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `specialization` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `salary` int(6) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Doctor`
--

INSERT INTO `Doctor` (`doctorid`, `name`, `specialization`, `address`, `salary`, `password`) VALUES
('doc1', 'docname1', 'spec1', 'terr street', 10000, 'doc1udd'),
('doc10', 'docname10', 'spec10', 'awe street', 100000, 'doc10udd'),
('doc15', 'docname15', 'spec2', 'hty street', 250000, 'doc15udd'),
('doc2', 'docname2', 'spec2', 'wer street', 20000, 'doc2udd'),
('doc3', 'docname3', 'spec3', 'ger street', 30000, 'doc3udd'),
('doc4', 'docname4', 'spec4', 'yer street', 40000, 'udddoc4'),
('doc5', 'docname5', 'spec5', 'qre street', 50000, 'doc5udd'),
('doc6', 'docname6', 'spec6', 'tyr street', 60000, 'doc6udd'),
('doc7', 'docname7', 'spec7', 'hgf street', 70000, 'doc7udd'),
('doc8', 'docname8', 'spec8', 'kjl street', 80000, 'doc8udd'),
('doc9', 'docname9', 'spec9', 'kte street', 90000, 'doc9udd');

-- --------------------------------------------------------

--
-- Table structure for table `Medicine`
--

CREATE TABLE `Medicine` (
  `medid` varchar(6) NOT NULL,
  `name` varchar(6) NOT NULL,
  `quantity` int(6) NOT NULL,
  `Price` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Medicine`
--

INSERT INTO `Medicine` (`medid`, `name`, `quantity`, `Price`) VALUES
('med1', 'name1', 100, 10),
('med10', 'name1', 1000, 100),
('med2', 'name2', 200, 20),
('med3', 'name3', 300, 30),
('med4', 'name4', 400, 40),
('med5', 'name5', 500, 50),
('med6', 'name6', 600, 60),
('med7', 'name7', 700, 70),
('med8', 'name8', 800, 80),
('med9', 'name9', 900, 90);

-- --------------------------------------------------------

--
-- Table structure for table `Nurse`
--

CREATE TABLE `Nurse` (
  `nurseid` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `doctorid` varchar(6) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Nurse`
--

INSERT INTO `Nurse` (`nurseid`, `name`, `doctorid`, `password`) VALUES
('nur1', 'nurname1', 'doc5', 'nur1udd'),
('nur10', 'nurname10', 'doc8', 'nur10udd'),
('nur11', 'nurname11', 'doc2', 'nur11udd'),
('nur2', 'nurname2', 'doc2', 'nur2udd'),
('nur3', 'nurname3', 'doc3', 'nur3udd'),
('nur4', 'nurname4', 'doc4', 'uddnur4'),
('nur5', 'nurname5', 'doc2', 'nur5udd'),
('nur6', 'nurname6', 'doc2', 'nur6udd'),
('nur7', 'nurname7', 'doc5', 'nur7udd'),
('nur8', 'nurname8', 'doc2', 'nur8udd'),
('nur9', 'nurname9', 'doc5', 'nur9udd');

-- --------------------------------------------------------

--
-- Table structure for table `Patient`
--

CREATE TABLE `Patient` (
  `patientid` varchar(6) NOT NULL,
  `doctorid` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `datedischarged` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dateadmitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `medid1` varchar(10) DEFAULT NULL,
  `medid2` varchar(10) DEFAULT NULL,
  `medid3` varchar(10) DEFAULT NULL,
  `medid4` varchar(10) DEFAULT NULL,
  `medid5` varchar(10) DEFAULT NULL,
  `room` int(6) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Patient`
--

INSERT INTO `Patient` (`patientid`, `doctorid`, `name`, `address`, `sex`, `datedischarged`, `dateadmitted`, `medid1`, `medid2`, `medid3`, `medid4`, `medid5`, `room`, `password`) VALUES
('pat15', 'doc2', 'namepat15', 'herr street', 'male', '2017-10-23 11:02:02', '2017-10-22 05:57:46', 'med3', 'med2', 'med8', 'med4', 'med9', 202, 'pat15udd'),
('pat16', 'doc4', 'name16', 'htre street', 'male', '2017-10-23 11:01:26', '2017-10-23 11:01:26', 'med6', 'med4', 'med8', 'med2', 'med1', 209, 'pat16udd'),
('pat2', 'doc2', 'name2', 'elm street', 'female', '2017-10-23 18:57:29', '2017-09-04 18:30:00', 'med6', 'med7', 'med8', 'med9', 'med10', 202, 'pat2udd'),
('pat20', 'doc5', 'pat20name', 'vasant vihar', 'male', '2017-10-31 13:56:31', '2017-10-31 13:55:21', 'med5', 'med2', 'med8', 'med1', 'med6', 587, 'pat20udd'),
('Uddhav', 'pat1', 'doc1', '21 gem street', 'male', '2017-05-03 18:30:00', '2017-05-08 18:30:00', 'med1', 'med2', 'med3', 'med4', 'med5', 102, 'pat1udd');

-- --------------------------------------------------------

--
-- Table structure for table `Pharmacist`
--

CREATE TABLE `Pharmacist` (
  `pharmacistid` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Pharmacist`
--

INSERT INTO `Pharmacist` (`pharmacistid`, `name`, `password`) VALUES
('phr1', 'phrname1', 'phr1udd'),
('phr10', 'phrname10', 'phr10udd'),
('phr2', 'phrname2', 'phr2udd'),
('phr3', 'phrname3', 'phr3udd'),
('phr4', 'phrname4', 'uddphr4'),
('phr5', 'phrname5', 'phr5udd'),
('phr6', 'phrname6', 'phr6udd'),
('phr7', 'phrname7', 'phr7udd'),
('phr8', 'phrname8', 'phr8udd'),
('phr9', 'phrname9', 'phr9udd');

-- --------------------------------------------------------

--
-- Table structure for table `Receptionist`
--

CREATE TABLE `Receptionist` (
  `receptionistid` varchar(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Receptionist`
--

INSERT INTO `Receptionist` (`receptionistid`, `name`, `password`) VALUES
('rec1', 'recname1', 'rec1udd'),
('rec10', 'recname10', 'rec10udd'),
('rec2', 'recname2', 'rec2udd'),
('rec3', 'recname3', 'rec3udd'),
('rec4', 'recname4', 'uddrec4'),
('rec5', 'recname5', 'rec5udd'),
('rec6', 'recname6', 'rec6udd'),
('rec7', 'recname7', 'rec7udd'),
('rec8', 'recname8', 'rec8udd'),
('rec9', 'recname9', 'rec9udd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accountant`
--
ALTER TABLE `Accountant`
  ADD PRIMARY KEY (`accountantid`);

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `Doctor`
--
ALTER TABLE `Doctor`
  ADD PRIMARY KEY (`doctorid`);

--
-- Indexes for table `Medicine`
--
ALTER TABLE `Medicine`
  ADD PRIMARY KEY (`medid`);

--
-- Indexes for table `Nurse`
--
ALTER TABLE `Nurse`
  ADD PRIMARY KEY (`nurseid`);

--
-- Indexes for table `Patient`
--
ALTER TABLE `Patient`
  ADD PRIMARY KEY (`patientid`);

--
-- Indexes for table `Pharmacist`
--
ALTER TABLE `Pharmacist`
  ADD PRIMARY KEY (`pharmacistid`);

--
-- Indexes for table `Receptionist`
--
ALTER TABLE `Receptionist`
  ADD PRIMARY KEY (`receptionistid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
