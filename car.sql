-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2013 at 10:22 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `idcus` int(4) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `numcard` int(4) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `add` varchar(70) NOT NULL,
  PRIMARY KEY (`idcus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcus`, `fname`, `lname`, `numcard`, `tel`, `email`, `add`) VALUES
(1001, 'Luffy', 'D. Monkey', 1001, '0822929940', 'LuffyD.Monkey@gotmail.com', '123 Forida Vilse Somal 12000'),
(1002, 'Zoro', 'Rolanoa', 1002, '0909887543', 'RolanoaZoro@gmail,com', '221 Flodf Dlogk lsp 123456');

-- --------------------------------------------------------

--
-- Table structure for table `datacar`
--

CREATE TABLE IF NOT EXISTS `datacar` (
  `idcar` int(11) NOT NULL,
  `idcus` int(4) NOT NULL,
  `numcar` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cag` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nummec` int(11) NOT NULL,
  `numgas` int(11) NOT NULL,
  PRIMARY KEY (`idcar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datacar`
--

INSERT INTO `datacar` (`idcar`, `idcus`, `numcar`, `cag`, `brand`, `color`, `nummec`, `numgas`) VALUES
(1001, 1001, 'ADS1234', 'Echo Cars', 'Honda Civic', 'RED', 102, 132),
(1002, 1002, 'SAE1232', 'Truck', 'Toyota', 'Blue', 112, 120);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
