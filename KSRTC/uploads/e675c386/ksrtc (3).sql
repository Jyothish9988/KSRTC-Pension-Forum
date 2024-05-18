-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 08:11 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ksrtc`
--
CREATE DATABASE IF NOT EXISTS `ksrtc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ksrtc`;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bakey` char(8) NOT NULL,
  `bankname` varchar(100) NOT NULL,
  `branchname` varchar(100) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `accholname` varchar(100) NOT NULL,
  `accno` varchar(100) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `expirydate` varchar(50) NOT NULL,
  `tamount` varchar(100) NOT NULL,
  `contactno` varchar(100) NOT NULL,
  `bank` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bakey`, `bankname`, `branchname`, `ifsc`, `accholname`, `accno`, `cardno`, `cvv`, `expirydate`, `tamount`, `contactno`, `bank`) VALUES
(1, 'sh56hf56', 'icci', 'ayur', '12345633', 'p1', '123456', '1111 2222 3333 4444', '123', '01 / 01', '99999657600.5', '99999999', 0),
(2, 'abcdefgh', 'sbi', 'oyur', 'huy677', 'p2', '123456', '6666 6666 6666 6666', '123', '01 / 03', '1000000228925.5', '1234', 0),
(3, 'gfhtjuyt', 'hdbi', 'abcd', 'gh56tf67yg', 'murali', '345678', '9876 8765 7654 6543', '876', '02 / 06', '9999999000', '1234563456', 0),
(4, 'gh67ty67', 'chavara', 'idakkal', '9032jkhh', 'kuttapai', '456787', '5555 5555 5555 5555', '555', '01 / 03', '234567842345678', '87654765457', 0),
(5, 'hhgf87yh', 'southindia', 'ayur', 'hj45gh32', 'pandyan', '444444', '4444 4444 4444 4444', '444', '04 / 04', '767678686878', '87654', 0),
(6, 'hjfg5678', 'axis', 'pallikal', 'hg6787', 'suki', '222222', '2222 7777 5555 4444', '222', '07 / 05', '145', '345645645656', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chkey` char(8) NOT NULL,
  `msg` varchar(20) NOT NULL,
  `senderid` varchar(11) NOT NULL,
  `receiverid` varchar(11) NOT NULL,
  `currdate` date NOT NULL,
  `currtime` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `chkey`, `msg`, `senderid`, `receiverid`, `currdate`, `currtime`) VALUES
(48, '3d7acddc', 'hii', '18', '17', '2022-07-31', '08:42:03am'),
(49, '35ed20b2', 'hello', '17', '18', '2022-07-31', '08:42:51am');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE IF NOT EXISTS `complaint` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ckey` char(8) NOT NULL,
  `Subject` varchar(1000) NOT NULL,
  `Complaint` varchar(1000) NOT NULL,
  `Date` date NOT NULL,
  `loginid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `ckey`, `Subject`, `Complaint`, `Date`, `loginid`) VALUES
(1, 'f64af9e5', 'p1', 'p1 complaint', '2022-05-27', 7),
(2, 'f5a40f37', 'p1', 'p1->admin', '2022-05-19', 14),
(3, '51ed4079', 'dfvdssdfds', 'dsfdsS', '2022-07-01', 14),
(4, '0dc6dfbf', '26-6', 'fdg', '0545-05-04', 14),
(5, '5ea050a7', 'pension 1 complaint', 'abc', '2022-08-27', 21);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL,
  `fkey` char(8) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `loginid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `fkey`, `feedback`, `date`, `loginid`) VALUES
(1, '5840db37', 'p1->feedback 1', '2022-05-20', 7),
(0, '035053a7', 'pensioner feedback 1', '2022-08-27', 21),
(0, '88351652', 'Hii pensioner 1', '2022-08-27', 21);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `l_key` char(8) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `Status` enum('0','1','2') NOT NULL,
  `Usertype` enum('0','1','2','3') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `l_key`, `Email`, `Password`, `Status`, `Usertype`) VALUES
(7, '8626a62f', 'p1@g.com', 'cfcd208495d565ef66e7dff9f98764da', '1', '2'),
(9, '8f679add', 's1@g.com', 'cfcd208495d565ef66e7dff9f98764da', '1', '1'),
(10, 'b6c8208f', 's2@g.com', 'cfcd208495d565ef66e7dff9f98764da', '1', '1'),
(11, '97c8a512', 'admin@g.com', 'cfcd208495d565ef66e7dff9f98764da', '1', '0'),
(12, 'af0a143e', 's1@g.com', 'cfcd208495d565ef66e7dff9f98764da', '2', '1'),
(13, 'cd0eed83', 's2@g.com', 'cfcd208495d565ef66e7dff9f98764da', '1', '1'),
(15, '29ecdec4', 'p2@g.com', 'cfcd208495d565ef66e7dff9f98764da', '1', '2'),
(21, '19c2f8d6', 'stmr1@gmail.com', '202cb962ac59075b964b07152d234b70', '1', '1'),
(22, 'b4039f09', 'pension1@gmail.com', '202cb962ac59075b964b07152d234b70', '0', '2'),
(23, '8e947e05', 'sthygyaff1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', '2'),
(24, '8c1e3f9e', 'sthygyaff1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '0', '2');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mkey` char(8) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `senderid` int(11) NOT NULL,
  `receiverid` int(11) NOT NULL,
  `viewstatus` enum('0','1') NOT NULL,
  `usertype` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `mkey`, `msg`, `date`, `time`, `senderid`, `receiverid`, `viewstatus`, `usertype`) VALUES
(27, 'b9657049', 'Hi from pensioner 1', '2022-08-27', '07:32:48', 21, 0, '1', '2'),
(28, '3b36998d', 'hi from pensioner', '2022-08-29', '10:38:01', 22, 21, '1', '2'),
(29, 'f3cfa6c5', 'message from stmr1', '2022-08-29', '10:46:06', 21, 11, '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nkey` char(8) NOT NULL,
  `title` varchar(50) NOT NULL,
  `report` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `nkey`, `title`, `report`, `date`) VALUES
(4, '86210c6d', 'New Relese', 'Pension all relesed 08/10/2020', '2022-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `paykey` char(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cardno` varchar(100) NOT NULL,
  `cvv` varchar(100) NOT NULL,
  `expirydate` varchar(10) NOT NULL,
  `currentdate` date NOT NULL,
  `amount` varchar(10) NOT NULL,
  `loginid` int(11) NOT NULL,
  `payment` enum('0','1') NOT NULL,
  `contactno` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `paykey`, `name`, `cardno`, `cvv`, `expirydate`, `currentdate`, `amount`, `loginid`, `payment`, `contactno`) VALUES
(15, '2b6f9e83', 'sasi', '1111 2222 3333 4444', '123', '01 / 07', '2022-06-23', '12', 11, '1', '123'),
(16, '4f6ceff8', 'sasi', '1111 2222 3333 4444', '123', '01 / 07', '2022-07-09', '100000', 11, '1', '1234'),
(17, '388642ec', 'sasi', '1111 2222 3333 4444', '123', '01 / 07', '2022-07-09', '222222', 15, '1', '1234'),
(18, 'f6982e86', 'sasi', '1111 2222 3333 4444', '123', '01 / 07', '2022-07-23', '6701.5', 11, '1', '1234'),
(19, '8cade75f', 'p1', '1111 2222 3333 4444', '123', '01 / 01', '2022-08-29', '6701.5', 11, '1', ''),
(20, 'b3047250', 'p1', '1111 2222 3333 4444', '123', '01 / 01', '2022-08-29', '6701.5', 11, '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `pension`
--

CREATE TABLE IF NOT EXISTS `pension` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `p_key` char(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pincode` int(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Depo` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `Retirementdate` date NOT NULL,
  `Adharno` int(50) NOT NULL,
  `Contactno` int(15) NOT NULL,
  `Photo` text NOT NULL,
  `loginid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `pension`
--

INSERT INTO `pension` (`id`, `p_key`, `Name`, `Address`, `Pincode`, `District`, `Gender`, `Depo`, `DOB`, `Retirementdate`, `Adharno`, `Contactno`, `Photo`, `loginid`) VALUES
(9, '83412da5', 'p1', 'p1', 1, 'Kottayam', 'Male', 'abc', '2022-05-11', '2022-05-17', 123, 2022, 'IDMan.exe', 7),
(10, '29ecdec4', 'p2', 'p2', 123, 'Thriuvananthapuram', 'femal', 'abcd', '2022-05-21', '2022-05-18', 123, 1234, 'IDMan.exe', 15),
(15, '2b4321e1', 'pension1', 'pension 1 Home', 695602, 'Thriuvananthapuram', 'Male', 'ADOOR', '2001-10-08', '2019-10-07', 2147483647, 2147483647, 'Doc1.docx', 22),
(16, 'fd3aede1', 'vhfhf', 'bjhgjhgjh', 123456, 'Kottayam', 'Femal', 'CHALAKUDY', '2022-09-24', '2022-10-09', 2147483647, 2147483647, 'augloop_client.dll', 23),
(17, '98a031ec', 'vhfhf', 'bjhgjhgjh', 123456, 'Kottayam', 'Femal', 'CHALAKUDY', '2022-09-24', '2022-10-09', 2147483647, 2147483647, 'augloop_client.dll', 24);

-- --------------------------------------------------------

--
-- Table structure for table `pensionapply`
--

CREATE TABLE IF NOT EXISTS `pensionapply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pakey` char(8) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `marital` varchar(50) NOT NULL,
  `nomie` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `loginid` int(11) NOT NULL,
  `pass_status` enum('0','1') NOT NULL,
  `status` enum('0','1','2') NOT NULL,
  `lbp` int(50) NOT NULL,
  `qsvcp` varchar(50) NOT NULL,
  `bpam` int(50) NOT NULL,
  `rcert` text NOT NULL,
  `qsvcpy` varchar(10) NOT NULL,
  `da` varchar(7) NOT NULL,
  `pf` varchar(7) NOT NULL,
  `ream` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `pensionapply`
--

INSERT INTO `pensionapply` (`id`, `pakey`, `fathername`, `mothername`, `marital`, `nomie`, `nationality`, `state`, `religion`, `category`, `loginid`, `pass_status`, `status`, `lbp`, `qsvcp`, `bpam`, `rcert`, `qsvcpy`, `da`, `pf`, `ream`) VALUES
(24, '17d87dd4', 'f2', 'm2', 'Married', '', 'in', 'st', 'nill', 'nill', 15, '1', '2', 1200, '10-20', 150, 'release', '5', '500', '600', '6701.5'),
(25, 'b8a7093b', 'P1 F1', 'P1 M1', 'Select', '', 'Indian', 'Kerala', 'Hindhu', 'Nair', 20, '1', '1', 10000, '10-20', 1250, 'Adder.java', '5', '1000', '500', '40251.25');

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE IF NOT EXISTS `userreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_key` char(8) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pincode` int(11) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `DOB` date NOT NULL,
  `Depo` varchar(50) NOT NULL,
  `Contactno` int(13) NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`id`, `reg_key`, `Name`, `Address`, `Pincode`, `District`, `Gender`, `DOB`, `Depo`, `Contactno`, `loginid`) VALUES
(4, '318aff6b', 's1', 's1', 123, 'Thriuvananthapuram', 'Male', '2022-05-12', 'abc', 123, 12),
(5, '443b8d06', 's2', 's2', 123, 'Thriuvananthapuram', 'Femal', '2022-05-03', 'abcd', 1234, 13),
(9, '26745102', 'Station Master 1', 'Station Master 1 Home', 695604, 'Thriuvananthapuram', 'Male', '2022-08-18', 'ADOOR', 2147483647, 21);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
