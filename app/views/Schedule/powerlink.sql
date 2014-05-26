-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2014 at 02:43 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cust_id` int(20) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(60) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`) VALUES
(1, 'Narck');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employ_id` int(20) NOT NULL AUTO_INCREMENT,
  `employ_name` varchar(60) NOT NULL,
  `employ_age` int(20) NOT NULL,
  `employ_contact` varchar(20) NOT NULL,
  `employ_worksched` varchar(60) NOT NULL,
  `employ_payroll` int(20) NOT NULL,
  `employ_type` varchar(60) NOT NULL,
  `availability` varchar(60) NOT NULL,
  PRIMARY KEY (`employ_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employ_id`, `employ_name`, `employ_age`, `employ_contact`, `employ_worksched`, `employ_payroll`, `employ_type`, `availability`) VALUES
(2, 'nelle', 18, '234234', 'MWF', 2000, 'Normal', 'YES'),
(3, 'Louiz', 20, '09992', 'MWF', 2000, 'Agent', 'YES');

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE IF NOT EXISTS `employee_list` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `employlist_id` int(11) NOT NULL,
  `employ_id` int(11) NOT NULL,
  PRIMARY KEY (`list_id`),
  KEY ` employ_id` (`employ_id`),
  KEY `employlist_id` (`employlist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`list_id`, `employlist_id`, `employ_id`) VALUES
(1, 1, 2),
(2, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE IF NOT EXISTS `equipment` (
  `eqp_id` int(11) NOT NULL AUTO_INCREMENT,
  `eqp_name` varchar(60) NOT NULL,
  `eqp_qty` int(11) NOT NULL,
  `eqp_rentprice` int(11) NOT NULL,
  `eqp_type` varchar(60) NOT NULL,
  `eqp_avail` varchar(60) NOT NULL,
  `eqp_desc` varchar(60) NOT NULL,
  PRIMARY KEY (`eqp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`eqp_id`, `eqp_name`, `eqp_qty`, `eqp_rentprice`, `eqp_type`, `eqp_avail`, `eqp_desc`) VALUES
(8, 'Sharpy01', 0, 12, '', '12', 'This is an equipment.'),
(10, 'Sharpy04', 0, 240, '', '16', 'This is an equipment.');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_list`
--

CREATE TABLE IF NOT EXISTS `equipment_list` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `equiplist_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL,
  PRIMARY KEY (`list_id`),
  KEY `equip_id` (`equip_id`),
  KEY `equiplist_id` (`equiplist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `equipment_list`
--

INSERT INTO `equipment_list` (`list_id`, `equiplist_id`, `equip_id`) VALUES
(1, 1, 8),
(2, 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `equpment_outsource`
--

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

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(60) NOT NULL,
  `event_location` varchar(60) NOT NULL,
  `event_pkgid` int(11) NOT NULL,
  `event_timestart` varchar(60) NOT NULL,
  `event_timeend` varchar(60) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `event_pkgid` (`event_pkgid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_name`, `event_location`, `event_pkgid`, `event_timestart`, `event_timeend`) VALUES
(1, 'Party', 'Den', 1, '10:00:00', '14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `employlist_id` int(11) NOT NULL,
  `ordersched_date` date NOT NULL,
  PRIMARY KEY (`order_id`),
  KEY `cust_id` (`cust_id`),
  KEY `event_id` (`event_id`),
  KEY `employlist_id` (`employlist_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `cust_id`, `event_id`, `employlist_id`, `ordersched_date`) VALUES
(3, 1, 1, 1, '2014-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `outsource_employee`
--

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

CREATE TABLE IF NOT EXISTS `package` (
  `pkg_id` int(11) NOT NULL AUTO_INCREMENT,
  `equip_listid` int(11) NOT NULL,
  `pkg_price` int(11) NOT NULL,
  `pkg_discount` int(11) NOT NULL,
  `pkg_name` varchar(20) NOT NULL,
  PRIMARY KEY (`pkg_id`),
  KEY `equip_listid` (`equip_listid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pkg_id`, `equip_listid`, `pkg_price`, `pkg_discount`, `pkg_name`) VALUES
(1, 1, 50000, 50, 'Package1');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE IF NOT EXISTS `quotation` (
  `quot_id` int(11) NOT NULL AUTO_INCREMENT,
  `quot_doc` int(11) NOT NULL,
  `pkg_id` int(11) NOT NULL,
  PRIMARY KEY (`quot_id`),
  KEY `pkg_id` (`pkg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `quotation_storage`
--

CREATE TABLE IF NOT EXISTS `quotation_storage` (
  `quotstor_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_pkgid` int(11) NOT NULL,
  `quot_id` int(11) NOT NULL,
  PRIMARY KEY (`quotstor_id`),
  KEY `event_pkgid` (`event_pkgid`),
  KEY `quot_id` (`quot_id`),
  KEY `quot_id_2` (`quot_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `employee_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `employee_id`) VALUES
(1, 'Nelle', 'Yap', 2);

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
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`employlist_id`) REFERENCES `employee_list` (`employlist_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `pkgid_fk` FOREIGN KEY (`pkg_id`) REFERENCES `package` (`pkg_id`) ON UPDATE CASCADE;

--
-- Constraints for table `quotation_storage`
--
ALTER TABLE `quotation_storage`
  ADD CONSTRAINT `eventpkgid_fk` FOREIGN KEY (`event_pkgid`) REFERENCES `package` (`pkg_id`),
  ADD CONSTRAINT `quot_if_fk` FOREIGN KEY (`quot_id`) REFERENCES `quotation` (`quot_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_employee` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employ_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
