-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2014 at 06:44 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `powerlink`
--
CREATE DATABASE IF NOT EXISTS `powerlink` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `powerlink`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(20) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(60) NOT NULL,
  `cust_email` varchar(40) NOT NULL,
  `cust_request` varchar(200) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `cust_email`, `cust_request`) VALUES
(1, 'Narck', '', ''),
(2, 'John Travolta', 'voltajhn@saturdaynight.com', ''),
(3, 'Nicholas Cage', 'niciscrazy@hollyboy.com', 'I like to rent balls!');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `employ_id` int(20) NOT NULL AUTO_INCREMENT,
  `employ_ln` varchar(26) NOT NULL,
  `employ_name` varchar(20) NOT NULL,
  `employ_mi` varchar(2) NOT NULL,
  `employ_age` int(20) NOT NULL,
  `employ_contact` varchar(20) NOT NULL,
  `employ_worksched` varchar(60) NOT NULL,
  `employ_otsrsrc` varchar(30) DEFAULT 'NO',
  `employ_payroll` int(20) NOT NULL,
  `employ_type` varchar(60) NOT NULL,
  `employ_Image` varchar(100) DEFAULT 'Null.jpg',
  PRIMARY KEY (`employ_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employ_id`, `employ_ln`, `employ_name`, `employ_mi`, `employ_age`, `employ_contact`, `employ_worksched`, `employ_otsrsrc`, `employ_payroll`, `employ_type`, `employ_Image`) VALUES
(2, 'Yap', 'MaNelle', 'D', 18, '234234', 'MWF', 'NO', 2000, 'Admin', '2.jpg'),
(3, 'Echiverri', 'Louiz Vincent', 'C', 20, '09992', 'MWF', 'NO', 2000, 'Agent', '3.jpg'),
(51, 'Echiverri', 'Karl', 'C', 21, '0922', 'MTWTHFSS', 'NO', 2121212, 'Admin', 'Capture.JPG'),
(52, 'Echiverri', 'Duke', 'C', 5, '51', 'MTWTHFSS', 'NO', 36, 'Admin', '1358899850239.jpg'),
(53, 'MSI', 'Fogh', 'C', 12, '13131', 'MTWTHFSS', 'NO', 92121231, 'Admin', '1492874_10200719191620899_568634508_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

DROP TABLE IF EXISTS `employee_list`;
CREATE TABLE IF NOT EXISTS `employee_list` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `employlist_id` int(11) NOT NULL,
  `employ_id` int(11) NOT NULL,
  PRIMARY KEY (`list_id`),
  KEY ` employ_id` (`employ_id`),
  KEY `employlist_id` (`employlist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`list_id`, `employlist_id`, `employ_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(5, 2, 51),
(6, 2, 52),
(7, 3, 53),
(8, 3, 51);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
CREATE TABLE IF NOT EXISTS `equipment` (
  `eqp_id` int(11) NOT NULL AUTO_INCREMENT,
  `eqp_name` varchar(60) NOT NULL,
  `eqp_rentprice` int(11) NOT NULL,
  `eqp_type` varchar(60) NOT NULL,
  `eqp_avail` varchar(60) NOT NULL,
  `eqp_desc` varchar(60) NOT NULL,
  `eqp_qty` int(11) NOT NULL,
  `eqp_otsrsrc` varchar(30) NOT NULL DEFAULT 'NO',
  `eqp_Image` varchar(100) DEFAULT 'Null.jpg',
  PRIMARY KEY (`eqp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eqp_id`, `eqp_name`, `eqp_rentprice`, `eqp_type`, `eqp_avail`, `eqp_desc`, `eqp_qty`, `eqp_otsrsrc`, `eqp_Image`) VALUES
(8, 'Sharpy01', 12, '', '12', 'This is an equipment.', 2, 'NO', 'Sharpy.jpg'),
(10, 'Sharpy04', 240, '', '16', 'This is an equipment.', 0, 'NO', 'Sharpy.jpg'),
(14, 'M7CL', 200002, 'Mixer', '1', '2007', 0, 'NO', 'M7CL.jpg'),
(21, 'LumiLights', 2000, 'LED ', '', 'LUMILIGHTS LED', 4, 'NO', 'LumiLights.jpg'),
(22, 'Stage', 2000, 'Stage', '', 'LUMILIGHTS LED', 4, 'NO', 'BatmanSupahman.jpg'),
(23, 'LumiLights2', 2000, 'LED ', '', 'Digital YAMAHA!', 1, 'NO', 'Penguins.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_list`
--

DROP TABLE IF EXISTS `equipment_list`;
CREATE TABLE IF NOT EXISTS `equipment_list` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `equiplist_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  `equip_qty` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`list_id`),
  KEY `equip_id` (`equip_id`),
  KEY `equiplist_id` (`equiplist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `equipment_list`
--

INSERT INTO `equipment_list` (`list_id`, `equiplist_id`, `equip_id`, `equip_qty`) VALUES
(1, 1, 8, 1),
(2, 1, 10, 1),
(3, 2, 22, 1),
(4, 2, 23, 1),
(11, 2, 23, 1),
(12, 2, 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `equpment_outsource`
--

DROP TABLE IF EXISTS `equpment_outsource`;
CREATE TABLE IF NOT EXISTS `equpment_outsource` (
  `equip_id` int(11) NOT NULL AUTO_INCREMENT,
  `otsr_source` int(11) NOT NULL,
  PRIMARY KEY (`equip_id`),
  KEY `otsr_source` (`otsr_source`),
  KEY `equip_id` (`equip_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(60) NOT NULL,
  `event_location` varchar(60) NOT NULL,
  `event_pkgid` int(11) NOT NULL,
  `event_timestart` time NOT NULL,
  `event_timeend` time DEFAULT NULL,
  PRIMARY KEY (`event_id`),
  KEY `event_pkgid` (`event_pkgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_location`, `event_pkgid`, `event_timestart`, `event_timeend`) VALUES
(1, 'The Cat', 'Basic', 3, '00:00:00', '00:00:00'),
(2, 'The Rapid Gator', 'Rapids', 1, '05:00:00', '08:00:00'),
(6, 'The Spring', 'IMOTO', 3, '02:13:00', '01:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_storage`
--

DROP TABLE IF EXISTS `gallery_storage`;
CREATE TABLE IF NOT EXISTS `gallery_storage` (
  `Gal_id` int(11) NOT NULL AUTO_INCREMENT,
  `Gal_Image` varchar(100) NOT NULL,
  PRIMARY KEY (`Gal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `gallery_storage`
--

INSERT INTO `gallery_storage` (`Gal_id`, `Gal_Image`) VALUES
(5, '1057721183.jpg'),
(6, '814376460.jpg'),
(7, '1059012136.jpg'),
(8, '1351671280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_custid` int(11) NOT NULL,
  `order_agentid` int(11) NOT NULL,
  `order_eventid` int(11) NOT NULL,
  `employlist_id` int(11) NOT NULL,
  `ordersched_date` date NOT NULL,
  PRIMARY KEY (`order_id`),
  UNIQUE KEY `event_id` (`order_eventid`),
  KEY `cust_id` (`order_custid`),
  KEY `employlist_id` (`employlist_id`),
  KEY `Agent` (`order_agentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_custid`, `order_agentid`, `order_eventid`, `employlist_id`, `ordersched_date`) VALUES
(6, 2, 51, 1, 2, '2014-03-21'),
(15, 2, 53, 6, 3, '2014-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `outsource_employee`
--

DROP TABLE IF EXISTS `outsource_employee`;
CREATE TABLE IF NOT EXISTS `outsource_employee` (
  `employ_id` int(11) NOT NULL,
  `otsr_type` varchar(60) NOT NULL,
  `otsr_source` varchar(60) NOT NULL,
  PRIMARY KEY (`employ_id`),
  KEY `employ_id` (`employ_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `pkg_id` int(11) NOT NULL AUTO_INCREMENT,
  `equip_listid` int(11) NOT NULL,
  `pkg_price` int(11) NOT NULL,
  `pkg_discount` int(11) NOT NULL,
  `pkg_name` varchar(20) NOT NULL,
  PRIMARY KEY (`pkg_id`),
  KEY `equip_listid` (`equip_listid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkg_id`, `equip_listid`, `pkg_price`, `pkg_discount`, `pkg_name`) VALUES
(1, 1, 50000, 50, 'Package1'),
(2, 2, 209000, 1232131, 'Nuptial Package'),
(3, 2, 2000000, 244444, 'Package3'),
(5, 1, 2000000, 4221231, 'Package Here');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

DROP TABLE IF EXISTS `quotation`;
CREATE TABLE IF NOT EXISTS `quotation` (
  `quot_id` int(11) NOT NULL AUTO_INCREMENT,
  `quot_name` varchar(20) NOT NULL,
  `quot_date` date NOT NULL,
  `quot_pkgid` int(11) NOT NULL,
  PRIMARY KEY (`quot_id`),
  KEY `pkg_id` (`quot_pkgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`quot_id`, `quot_name`, `quot_date`, `quot_pkgid`) VALUES
(3, 'RUSCO tire requisiti', '0000-00-00', 1),
(4, 'Rusco Billing 2014-0', '0000-00-00', 1),
(5, 'Rusco Billing 2014-0', '0000-00-00', 2),
(6, 'Rusco Billing 2014-0', '0000-00-00', 2),
(7, 'Review of LIT revise', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `usename` (`username`),
  UNIQUE KEY `employee_id_2` (`employee_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `employee_id`) VALUES
(1, 'Nelle', 'Yap', 2),
(3, 'Louiz', '12345', 3);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD CONSTRAINT `employee_list_ibfk_1` FOREIGN KEY (`employ_id`) REFERENCES `employee` (`employ_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equipment_list`
--
ALTER TABLE `equipment_list`
  ADD CONSTRAINT `equip_id_fk` FOREIGN KEY (`equip_id`) REFERENCES `equipment` (`eqp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `equpment_outsource`
--
ALTER TABLE `equpment_outsource`
  ADD CONSTRAINT `equip_fk` FOREIGN KEY (`equip_id`) REFERENCES `equipment` (`eqp_id`) ON UPDATE CASCADE;

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_pkgid_fk` FOREIGN KEY (`event_pkgid`) REFERENCES `package` (`pkg_id`) ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`order_custid`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`order_eventid`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`employlist_id`) REFERENCES `employee_list` (`employlist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`order_agentid`) REFERENCES `employee` (`employ_id`);

--
-- Constraints for table `outsource_employee`
--
ALTER TABLE `outsource_employee`
  ADD CONSTRAINT `emp_fk` FOREIGN KEY (`employ_id`) REFERENCES `employee` (`employ_id`) ON UPDATE CASCADE;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`equip_listid`) REFERENCES `equipment_list` (`equiplist_id`) ON UPDATE CASCADE;

--
-- Constraints for table `quotation`
--
ALTER TABLE `quotation`
  ADD CONSTRAINT `pkgid_fk` FOREIGN KEY (`quot_pkgid`) REFERENCES `package` (`pkg_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_employee` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employ_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
