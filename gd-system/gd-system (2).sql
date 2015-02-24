-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 27, 2014 at 10:24 AM
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
  `item_sell_price` float NOT NULL,
  `item_pur_price` float NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`, `item_no`, `item_category`, `item_date`, `ext`, `item_sell_price`, `item_pur_price`) VALUES
(100, 'DELTA SL UB Electric Stacker 901', 1234, 'material handling equipment', '2014-11-18', '', 0, 0),
(102, 'Belt Sander – MM1510', 44, 'Small Machines', '2014-11-18', '', 10, 12),
(103, 'Bobbin Sander OS-1', 0, 'Small Machines', '2014-11-18', '', 12.2, 12.9),
(104, ' Four Side Moulder', 1234, 'Material handling equipment', '2014-11-18', '', 4, 12),
(107, 'Double Scissor Mobile Table Lift', 1234, 'welding Equipments', '2014-11-18', '', 4, 12.9),
(108, 'Spot Welder', 1234, 'Welding Equipments', '2014-11-25', '', 2900, 4000),
(109, 'Inverter MMA Welding Machine', 1234, 'Welding Equipments', '2014-11-18', '', 5, 12),
(110, 'VELOX Battery Chargers Starters', 1234, 'Welding Equipments', '2014-11-18', '', 12.2, 12.9),
(111, ' Mobil Air Compressor – Professional Cast Iron', 1234, 'Air Compressor', '2014-11-18', '', 1233.2, 1332.9),
(112, 'Screw Compressor', 1234, 'Air Compressor', '2014-11-25', '', 12.2, 12.9),
(113, 'Screw Compressors FORMULA LT.270', 1234, 'Air Compressor', '2014-11-23', '', 33, 233),
(114, 'Low Noise and Oil Free Compressor', 1234, 'Air Compressor', '2014-11-23', '', 10, 12.9),
(115, ' Water-Oil Separators', 1234, 'Air Compressor', '2014-11-18', '', 10, 12.9),
(116, 'DELTA SL UB Electric Stacker 901', 123454, 'Welding Equipments', '2014-11-18', '', 10, 12.9);

-- --------------------------------------------------------

--
-- Table structure for table `item_category`
--

CREATE TABLE `item_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(120) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `item_category`
--

INSERT INTO `item_category` (`cat_id`, `cat_name`) VALUES
(5, 'Small Machines'),
(6, 'Metal Working Machines'),
(7, 'Welding Equipments'),
(8, 'Wood Working Machines'),
(9, 'Hardware & Tooling Supplies'),
(10, 'Material Handling Equipment'),
(13, 'Air Compressor'),
(14, 'Construction Equipments');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `img_name`, `thumb_name`, `ext`, `upload_date`, `item_id`) VALUES
(50, 'home84_(3)10', 'home84_(3)10_thumb', '.png', '1416990794', 94),
(51, 'ALFA-SL-M-Hand-Stacker-150x15022', 'ALFA-SL-M-Hand-Stacker-150x15022', '.jpg', '1416990844', 95),
(52, 'boxes226', 'boxes226_thumb', '.png', '1416991047', 96),
(56, 'DoubleScissorMobileTableLift-266x3003', 'DoubleScissorMobileTableLift-266', '.jpg', '1416992271', 100),
(57, 'AirReceiver-150x150', 'AirReceiver-150x150_thumb', '.png', '1416992414', 101),
(58, 'Belt_Sander_MM15101-133x150', 'Belt_Sander_MM15101-133x150_thum', '.jpg', '1417056999', 102),
(59, 'Bobbin_Sander_OS-1-133x150', 'Bobbin_Sander_OS-1-133x150_thumb', '.jpg', '1417059807', 103),
(60, 'Four_Side_Moulder-300x300', 'Four_Side_Moulder-300x300_thumb', '.jpg', '1417066459', 104),
(61, 'Bobbin_Sander_OS-1-133x1501', 'Bobbin_Sander_OS-1-133x1501_thum', '.jpg', '1417067213', 105),
(62, 'DoubleScissorMobileTableLift-266x3004', 'DoubleScissorMobileTableLift-266', '.jpg', '1417069647', 106),
(63, 'Precisa-201-SG1-111x150', 'Precisa-201-SG1-111x150_thumb', '.png', '1417069770', 107),
(64, 'Spot-Welder-124x150', 'Spot-Welder-124x150_thumb', '.png', '1417074349', 108),
(65, 'Inverter_MMA_Welding_Machine-133x150', 'Inverter_MMA_Welding_Machine-133', '.jpg', '1417074425', 109),
(66, 'VELOX_Battery_Chargers', 'VELOX_Battery_Chargers_thumb', '.jpg', '1417076715', 110),
(67, 'AirCompressor–ProfessionalCastIron-150x127', 'AirCompressor–ProfessionalCastIr', '.jpg', '1417077547', 111),
(68, 'ScrewCompressor-150x150', 'ScrewCompressor-150x150_thumb', '.png', '1417077619', 112),
(69, 'Screw_Compressors_FORMULA_LT.270_', 'Screw_Compressors_FORMULA_LT.270', '.jpg', '1417077675', 113),
(70, 'LowNoise-OilFreeCompressor-300x283', 'LowNoise-OilFreeCompressor-300x2', '.jpg', '1417077746', 114),
(71, 'Water-Oil-Separators', 'Water-Oil-Separators_thumb', '.png', '1417077791', 115),
(72, 'Precisa-201-SG1-111x1501', 'Precisa-201-SG1-111x1501_thumb', '.png', '1417079514', 116);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
