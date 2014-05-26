-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2014 at 06:05 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `powerlink1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(60) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `emp_type` varchar(10) NOT NULL,
  PRIMARY KEY (`emp_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `username`, `password`, `emp_type`) VALUES
(1, 'Ma. Nelle', 'Nelle', 'Yap', 'Admin'),
(2, 'Louiz', 'buh', 'duh', 'Agent'),
(13, 'John', 'Wilbert', 'Lim', 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `equip_id` int(11) NOT NULL AUTO_INCREMENT,
  `equip_name` varchar(60) NOT NULL,
  `equip_price` int(11) NOT NULL,
  `equip_desc` varchar(60) NOT NULL,
  PRIMARY KEY (`equip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equip_id`, `equip_name`, `equip_price`, `equip_desc`) VALUES
(5, 'Sharpy01', 5000, 'Moving Head'),
(6, 'Sharpy02', 2000, 'Moving Head');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `Event_ID` date NOT NULL DEFAULT '0000-00-00',
  `Event_Agent` int(11) NOT NULL,
  `Event_PkgID` int(11) NOT NULL,
  `Event_Name` varchar(20) NOT NULL,
  `Event_Location` varchar(20) NOT NULL,
  `Event_timestart` time NOT NULL,
  `Event_timeend` time NOT NULL,
  PRIMARY KEY (`Event_ID`),
  KEY `Event_Agent` (`Event_Agent`),
  KEY `event_ibfk_1` (`Event_PkgID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID`, `Event_Agent`, `Event_PkgID`, `Event_Name`, `Event_Location`, `Event_timestart`, `Event_timeend`) VALUES
('2014-01-02', 13, 11, 'Walberz', 'Hello', '12:00:00', '12:00:00'),
('2014-03-18', 2, 11, 'Estoryahe', 'Mabolo', '11:00:00', '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `pkg_id` int(11) NOT NULL AUTO_INCREMENT,
  `pkg_name` varchar(60) NOT NULL,
  `pkg_price` int(11) NOT NULL,
  `pkg_desc` varchar(60) NOT NULL,
  PRIMARY KEY (`pkg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkg_id`, `pkg_name`, `pkg_price`, `pkg_desc`) VALUES
(11, 'Package1', 10000000, 'THIS IS PACKAGE!');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`Event_Agent`) REFERENCES `employee` (`emp_id`),
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`Event_PkgID`) REFERENCES `package` (`pkg_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
