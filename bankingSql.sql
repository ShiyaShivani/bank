-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2022 at 12:20 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `21bcs193`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE IF NOT EXISTS `account` (
  `account_number` int(8) NOT NULL,
  `branch_name` varchar(15) NOT NULL,
  `balance` int(8) NOT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`account_number`),
  KEY `branch_name` (`branch_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`account_number`, `branch_name`, `balance`, `date`) VALUES
(101, 'Wright Town', 500, '0005-02-11'),
(215, 'Mehgawan', 700, '0003-07-12'),
(102, 'S street', 400, '0006-08-10'),
(305, 'Napier town', 350, '0006-08-10'),
(201, 'Stadium', 900, '0009-04-10'),
(222, 'Cross square', 700, '0008-11-11'),
(217, 'Stadium', 750, '0002-05-12'),
(104, 'Wright Town', 500, '2011-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

DROP TABLE IF EXISTS `borrower`;
CREATE TABLE IF NOT EXISTS `borrower` (
  `customer_name` varchar(15) NOT NULL,
  `loan_number` int(8) NOT NULL,
  PRIMARY KEY (`customer_name`,`loan_number`),
  KEY `loan_number` (`loan_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrower`
--

INSERT INTO `borrower` (`customer_name`, `loan_number`) VALUES
('Amit', 16),
('Charu', 93),
('Divya', 11),
('Divya', 23),
('Priya', 15),
('Sakshi', 17),
('Vinay', 17),
('Yash', 14);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `branch_name` varchar(15) NOT NULL,
  `branch_city` varchar(15) NOT NULL,
  `assets` int(8) DEFAULT NULL,
  PRIMARY KEY (`branch_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_name`, `branch_city`, `assets`) VALUES
('Stadium', 'Delhi', 710000),
('Wright Town', 'Delhi', 9000000),
('Mehgawan', 'Hyderabad', 400000),
('North town', 'Raipur', 3700000),
('S street', ' Hyderabad ', 1700000),
('Pownal', ' Bilaspur', 300000),
('Cross square', 'Nagpur', 2100000),
('Napier town', 'Hyderabad', 8000000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_name` varchar(15) NOT NULL,
  `customer_street` varchar(15) DEFAULT NULL,
  `customer_city` varchar(15) NOT NULL,
  PRIMARY KEY (`customer_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_street`, `customer_city`) VALUES
('Amit', 'Sarafa', 'Patna'),
('Bani', 'Civil Lines', 'Delhi'),
('Charu', NULL, 'Raipu\'r'),
('Jai', 'South Street', 'Mumbai'),
('Rahul', 'Vijay nagar', 'Jabalpur'),
('Priya', 'Main Street', 'Bangalore'),
('Yash', 'Hill Road', 'Nagpur'),
('Vinay', 'Main Street', 'Bangalore'),
('Anjali', 'Mall Road', 'Patna'),
('Divya', NULL, 'Raipur'),
('Rohit', 'Sadar', 'Jabalpur'),
('Sakshi', 'Park Street', 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `depositer`
--

DROP TABLE IF EXISTS `depositer`;
CREATE TABLE IF NOT EXISTS `depositer` (
  `customer_name` varchar(15) NOT NULL,
  `account_number` int(8) NOT NULL,
  PRIMARY KEY (`customer_name`,`account_number`),
  KEY `account_number` (`account_number`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depositer`
--

INSERT INTO `depositer` (`customer_name`, `account_number`) VALUES
('Anjali', 222),
('Divya', 217),
('Priya', 102),
('Rohit', 305),
('Vinay', 217),
('Yash', 101),
('Yash', 201);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

DROP TABLE IF EXISTS `loan`;
CREATE TABLE IF NOT EXISTS `loan` (
  `loan_number` int(8) NOT NULL,
  `branch_name` varchar(15) NOT NULL,
  `amount` int(8) NOT NULL,
  PRIMARY KEY (`loan_number`),
  KEY `branch_name` (`branch_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_number`, `branch_name`, `amount`) VALUES
(11, 'Napier town', 900),
(14, 'Wright Town', 1500),
(15, 'S street', 1500),
(16, 'S street', 1300),
(17, 'Wright Town', 1000),
(23, 'Cross square', 2000),
(93, 'Mehgawan', 500);

-- --------------------------------------------------------

--
-- Table structure for table `masterlogin`
--

DROP TABLE IF EXISTS `masterlogin`;
CREATE TABLE IF NOT EXISTS `masterlogin` (
  `customer_name` varchar(15) NOT NULL,
  `password` int(10) NOT NULL,
  PRIMARY KEY (`password`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `masterlogin`
--

INSERT INTO `masterlogin` (`customer_name`, `password`) VALUES
('Shiya', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `master_customer`
--

DROP TABLE IF EXISTS `master_customer`;
CREATE TABLE IF NOT EXISTS `master_customer` (
  `customer_name` varchar(15) NOT NULL,
  `customer_street` varchar(15) DEFAULT NULL,
  `customer_city` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`customer_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_customer`
--

INSERT INTO `master_customer` (`customer_name`, `customer_street`, `customer_city`) VALUES
('Shiya Shivani ', 'hostel', 'Jabalpur'),
('Uditi', 'west', 'Bengal'),
('sonya', 'home', 'gaya'),
('Shiya', 'del', 'bihar'),
('kishor', 'mnjk', 'ap'),
('Shiya sinha', 'girls hostel', 'jabalpuriram'),
('Shiya singh', 'hostel jbp', 'PATNA'),
('Shiya 123', 'girls hostels', 'jabalpurirama');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
