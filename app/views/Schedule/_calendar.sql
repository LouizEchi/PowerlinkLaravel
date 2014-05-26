-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2014 at 11:04 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `_calendar`
--
CREATE DATABASE IF NOT EXISTS `_calendar` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `_calendar`;

-- --------------------------------------------------------

--
-- Table structure for table `event_calendarz`
--

CREATE TABLE IF NOT EXISTS `event_calendarz` (
  `event_date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_calendarz`
--

INSERT INTO `event_calendarz` (`event_date`, `description`) VALUES
('2014-03-05', 'hahahaha'),
('2014-02-01', 'tset teststsetet'),
('2014-03-01', 'First test');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
