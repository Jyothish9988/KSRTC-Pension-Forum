-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 08:48 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `bakey`, `bankname`, `branchname`, `ifsc`, `accholname`, `accno`, `cardno`, `cvv`, `expirydate`, `tamount`, `contactno`, `bank`) VALUES
(2, 'abcdefgh', 'sbi', 'oyur', 'SBIN0070724', 'admin', '123456', '6666 6666 6666 6666', '123', '01 / 23', '2000000', '1234567891', 0),
(6, 'hjfg5678', 'axis', 'pallikal', 'UTIB0000705', 'JYOTHISH', '63643700000', '2222 4444 6666 8888', '222', '07 / 25', '145', '7736419988', 0),
(7, 'sha256ef', 'sbi', 'madavoor', 'SBIN0070286	', 'ARJUN', '45678900000', '1111 2222 3333 4444', '333', '01 / 23', '320700', '9061109887', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `ckey`, `Subject`, `Complaint`, `Date`, `loginid`) VALUES
(1, 'f64af9e5', 'p1', 'p1 complaint', '2022-05-27', 7),
(2, 'f5a40f37', 'p1', 'p1->admin', '2022-05-19', 14),
(3, '51ed4079', 'dfvdssdfds', 'dsfdsS', '2022-07-01', 14),
(4, '0dc6dfbf', '26-6', 'fdg', '0545-05-04', 14),
(5, '5ea050a7', 'pension 1 complaint', 'abc', '2022-08-27', 21),
(6, 'f7404c65', 'sdfyguhiopsz', 'sdfghjkl;', '2022-10-02', 25);

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
(0, '88351652', 'Hii pensioner 1', '2022-08-27', 21),
(0, '78699a41', 'new feadback', '2022-10-09', 30);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `l_key`, `Email`, `Password`, `Status`, `Usertype`) VALUES
(11, '97c8a512', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '1', '0'),
(30, '276179be', 'arjunpension@gmail.com', '8dc19a90fca7f1bf18fafab27abc89ca', '1', '2'),
(31, '991a2880', 'jyothishpension@gmail.com', '8dc19a90fca7f1bf18fafab27abc89ca', '1', '2'),
(32, 'c39db02e', 'athilstmr@gmail.com', '8dc19a90fca7f1bf18fafab27abc89ca', '1', '1'),
(33, '62cf0ab8', 'arunstmr@gmail.com', '8dc19a90fca7f1bf18fafab27abc89ca', '1', '1'),
(34, '2bf71061', 'p1@gmail.com', '8dc19a90fca7f1bf18fafab27abc89ca', '2', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `mkey`, `msg`, `date`, `time`, `senderid`, `receiverid`, `viewstatus`, `usertype`) VALUES
(30, 'ccef4370', 'hi stmr', '2022-10-09', '02:48:09', 30, 32, '1', '2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `nkey`, `title`, `report`, `date`) VALUES
(4, '86210c6d', 'New Relese', 'Pension all relesed 08/10/2020', '2022-08-27'),
(5, 'f65f621c', 'New relese', 'New pension payment has been relesed 10-10-2022', '2022-10-10');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `Adharno` bigint(50) NOT NULL,
  `Contactno` bigint(15) NOT NULL,
  `Photo` text NOT NULL,
  `loginid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `pension`
--

INSERT INTO `pension` (`id`, `p_key`, `Name`, `Address`, `Pincode`, `District`, `Gender`, `Depo`, `DOB`, `Retirementdate`, `Adharno`, `Contactno`, `Photo`, `loginid`) VALUES
(20, '93b6debf', 'Arjun A L', 'Arjun nivas paiveli', 695604, 'Thriuvananthapuram', 'Male', 'TVM CITY', '2001-10-02', '2022-08-01', 456325715984, 9061109887, 'download.jpeg', 30),
(21, '77b13be6', 'Jyothish S L', 'souparnika moothala pallickal', 695604, 'Thriuvananthapuram', 'Male', 'ATTINGAL', '2001-10-08', '2022-10-06', 751532495212, 7736419988, 'download.jpeg', 31);

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
  `pay` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pensionapply`
--

INSERT INTO `pensionapply` (`id`, `pakey`, `fathername`, `mothername`, `marital`, `nomie`, `nationality`, `state`, `religion`, `category`, `loginid`, `pass_status`, `status`, `lbp`, `qsvcp`, `bpam`, `rcert`, `qsvcpy`, `da`, `pf`, `ream`, `pay`) VALUES
(26, 'e4fb1f5e', 'Anil', 'Laya', 'Unmarried', 'Anil (Father)', 'Indian', 'Kerala', 'Hindhu', 'Nair', 30, '1', '1', 20000, '10-20', 7500, 'arjun.jpg', '15', '5000', '25000', '245187.5', '0'),
(27, 'dd19a9c1', 'Satheesh', 'Leju', 'Unmarried', 'Satheesh(Father)', 'Indian', 'Kerala', 'Hindhu', 'Nair', 31, '1', '1', 20000, '10-20', 7500, 'jyothish cert.jpg', '15', '5000', '25000', '245187.5', '0');

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
  `Contactno` bigint(13) NOT NULL,
  `loginid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`id`, `reg_key`, `Name`, `Address`, `Pincode`, `District`, `Gender`, `DOB`, `Depo`, `Contactno`, `loginid`) VALUES
(13, 'f8fb785d', 'Athil Chand', 'Athil Nivas Vettikavala', 691533, 'Kollam', 'Male', '2001-10-23', 'TVM CITY', 6282485014, 32),
(14, '2d9e2424', 'Arun B S', 'Arun Kiran Sadanam kalayam', 691534, 'Kollam', 'Male', '2001-03-04', 'ATTINGAL', 9946980221, 33),
(15, '4d098fa0', 'ass', 'dfds', 123456, 'Kasargod', 'Male', '2022-09-27', 'CHERTHALA', 4561237891, 34);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
