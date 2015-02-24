-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 26, 2014 at 10:22 AM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gd-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(320) NOT NULL,
  `item_no` int(11) NOT NULL,
  `item_category` varchar(120) NOT NULL,
  `item_date` date NOT NULL,
  `ext` varchar(8) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=102 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_no`, `item_category`, `item_date`, `ext`) VALUES
(94, 'home', 1234, 'material handling equipment', '2014-11-18', ''),
(95, 'DELTA SL UB Electric Stacker 901', 1234, 'Air Compressor', '2014-11-18', ''),
(96, 'DELTA SL UB Electric Stacker 901', 1234, 'Air Compressor', '2014-11-18', ''),
(100, 'DELTA SL UB Electric Stacker 901', 1234, 'material handling equipment', '2014-11-18', ''),
(101, 'Air Receiver', 123454, 'Air Compressor', '2014-11-18', '');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(160) NOT NULL,
  `thumb_name` varchar(32) NOT NULL,
  `ext` varchar(8) NOT NULL,
  `upload_date` varchar(20) NOT NULL,
  `item_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `img_name`, `thumb_name`, `ext`, `upload_date`, `item_id`) VALUES
(50, 'home84_(3)10', 'home84_(3)10_thumb', '.png', '1416990794', 94),
(51, 'ALFA-SL-M-Hand-Stacker-150x15022', 'ALFA-SL-M-Hand-Stacker-150x15022', '.jpg', '1416990844', 95),
(52, 'boxes226', 'boxes226_thumb', '.png', '1416991047', 96),
(56, 'DoubleScissorMobileTableLift-266x3003', 'DoubleScissorMobileTableLift-266', '.jpg', '1416992271', 100),
(57, 'AirReceiver-150x150', 'AirReceiver-150x150_thumb', '.png', '1416992414', 101);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
