-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2017 at 09:16 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mimo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', 'admin'),
(2, 'nisha', 'nisha');

-- --------------------------------------------------------

--
-- Table structure for table `move_in`
--

CREATE TABLE IF NOT EXISTS `move_in` (
  `User_Id` int(5) NOT NULL AUTO_INCREMENT,
  `Location` varchar(50) NOT NULL,
  `Room_Size` varchar(50) NOT NULL,
  `No_of_rooms` int(100) NOT NULL,
  `Room_Setup` varchar(100) NOT NULL,
  `Room_cost` int(50) NOT NULL,
  `Date_of_joining` date NOT NULL,
  `Otherhousewares` varchar(100) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=141 ;

--
-- Dumping data for table `move_in`
--

INSERT INTO `move_in` (`User_Id`, `Location`, `Room_Size`, `No_of_rooms`, `Room_Setup`, `Room_cost`, `Date_of_joining`, `Otherhousewares`) VALUES
(122, 'pune', '2300*2200', 2, 'Bed', 43000, '0000-00-00', 'sofa'),
(123, 'mumbai', '2300*2200', 2, 'Bed', 43000, '0000-00-00', 'sofa'),
(124, 'pune', '2300*2200', 3, 'Bed', 21000, '0000-00-00', 'chair'),
(125, 'mumbai', '1800*1400', 3, 'Bed', 21000, '0000-00-00', 'chair'),
(126, 'delhi', '1800*1400', 3, 'Bed', 21000, '0000-00-00', 'chair'),
(127, 'nagpur', '2300*2200', 2, 'Bed', 45000, '0000-00-00', 'chair'),
(128, 'pune', '1400*1500', 2, 'chair', 24000, '0000-00-00', 'no'),
(129, 'banglore', '', 0, '', 43000, '0000-00-00', ''),
(130, 'ahemdabad', '1600*1700', 3, 'Bed', 35000, '0000-00-00', 'utensils'),
(131, 'aurangabad', '1500*1200', 3, 'Bed', 56000, '0000-00-00', 'chair'),
(132, 'delhi', '1500*1200', 3, 'table', 47000, '0000-00-00', 'sofa'),
(133, 'banglore', '1500*1200', 3, 'table', 54000, '0000-00-00', 'sofa'),
(134, 'pune', '1400*1500', 3, 'Bed', 46000, '0000-00-00', 'table'),
(135, 'pune', '1400*1500', 3, 'Bed', 46000, '0000-00-00', 'table'),
(136, 'pune', '1400*1500', 3, 'Bed', 46000, '0000-00-00', 'table'),
(137, 'banglore', '2300*2200', 2, 'chair', 45000, '0000-00-00', 'bed'),
(138, 'delhi', '2300*2200', 3, 'sofa', 64000, '0000-00-00', 'table'),
(139, 'banglore', '2300*2200', 2, 'Bed', 54000, '0000-00-00', 'table'),
(140, 'banglore', '2300*2200', 2, 'Bed', 54000, '0000-00-00', 'table');

-- --------------------------------------------------------

--
-- Table structure for table `move_out`
--

CREATE TABLE IF NOT EXISTS `move_out` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `City` varchar(100) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Date_of_leaving` date NOT NULL,
  `Contact_no` varchar(10) NOT NULL,
  `Room_size` varchar(50) NOT NULL,
  `No_of_rooms` int(100) NOT NULL,
  `Room_setup` varchar(50) NOT NULL,
  `Room_cost` varchar(50) NOT NULL,
  `Room_Address` varchar(100) NOT NULL,
  `Other_housewares` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `move_out`
--

INSERT INTO `move_out` (`Id`, `City`, `Name`, `Date_of_leaving`, `Contact_no`, `Room_size`, `No_of_rooms`, `Room_setup`, `Room_cost`, `Room_Address`, `Other_housewares`) VALUES
(2, 'Mumbai', 'Amit Gajbhiye', '2016-12-30', '', '1500*1200', 0, 'Floor', '40000', 'Bandra', 'Fan'),
(4, 'ajmer', 'Amit Gajbhiye', '2016-12-28', '', '2300*2200', 0, 'chair', '54000', 'dighi, plot no 21', 'bed'),
(5, 'Amrawati', 'Amit Gajbhiye', '2016-12-12', '2154856452', '4800', 2, 'None', '45000', 'Sadar', 'none'),
(7, 'Pune', 'Amit Gajbhiye', '2017-01-25', '9254781245', '1200*1500', 2, 'sofa', '43000', '123, buddha nagar,nagpur', 'sofa'),
(10, 'nagpur', 'Suresh Jaipurkar', '2017-01-21', '8923548132', '1400*1500', 2, 'Bed', '43000', 'medical sq', 'table'),
(14, 'aizawal', 'Rohan', '2017-01-02', '8746546951', '2300*2200', 3, 'Bed', '65000', 'Hingna', 'sofa'),
(15, 'ahemdabad', 'sneha', '2017-02-25', '8764131336', '1800*1400', 2, 'sofa', '45000', 'Hingna', 'none'),
(16, 'Chandigarh', 'Soniya', '2017-01-24', '7993149988', '1300*1200', 3, 'fan', '120000', 'Pardi', ''),
(17, 'bhopal', 'karina', '2017-01-25', '2323232323', '800*1200', 2, 'sofa', '21000', 'jp', 'b'),
(19, 'bangalore', 'Sonal', '2017-01-30', '185969846', '1800*1400', 2, 'sofa', '36000', 'Bandra', 'utensils'),
(20, 'banglore', 'Rutuja', '2017-06-22', '8948626932', '1700*1800', 2, 'bed', '58000', 'Sitabardi', 'table'),
(21, 'anantapur', 'abc', '1017-06-22', '7686987986', 'avc', 4, 'acvrt', '23000', 'bacf', '');

-- --------------------------------------------------------

--
-- Table structure for table `new_user`
--

CREATE TABLE IF NOT EXISTS `new_user` (
  `User_id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `new_user`
--

INSERT INTO `new_user` (`User_id`, `Name`, `Address`, `DOB`, `Email`, `Password`) VALUES
(44, 'karina', 'Sadar Nagpur', '2016-09-18', 'sneha@gmail.com', 'MIMO'),
(46, 'mrudul', 'jp', '2016-09-18', 'mrudul@gmail.com', 'mrudul'),
(47, 'karina', 'ca road', '2016-09-18', 'karinabhagwani95@gmail.com', 'karina'),
(48, '', '', '2016-09-18', '', ''),
(49, '', '', '2016-09-18', '', ''),
(50, 'mansi', 'medical sq', '2016-09-18', 'mansi@gmail.com', 'mansi'),
(51, 'varsha', 'jp', '2016-09-18', 'varsha@gmail.com', 'varsh'),
(52, 'riya', 'jp', '2016-09-24', 'riya@gmail.com', 'riya'),
(53, '', '', '2016-10-01', '', ''),
(54, '1223', '123', '2016-10-10', '123', '123'),
(55, '', '', '2016-10-10', '', ''),
(56, '123456', '', '2016-10-10', '', ''),
(57, '321', '321', '2016-10-10', '321', '321'),
(58, 'qwe', '', '2016-10-10', 'ad@hgdh.com', ''),
(59, 'neha', 'jp', '2016-11-10', 'neha@gmail.com', 'neha'),
(60, 'amit', 'indora', '2017-01-09', 'amit@gmail.com', 'amit');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
