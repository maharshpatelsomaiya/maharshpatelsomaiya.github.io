-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 27, 2018 at 05:04 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learnanintern`
--

-- --------------------------------------------------------

--
-- Table structure for table `abstractsub`
--

CREATE TABLE `abstractsub` (
  `fname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contactno` int(10) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `year` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abstractsub`
--

INSERT INTO `abstractsub` (`fname`, `email`, `contactno`, `Branch`, `year`) VALUES
('rashmi', 'xyz', 1234, 'computers', 2001),
('roshni', 'xyz', 1234, 'computers', 2007),
('karan', 'xyz', 1234, 'computers', 2005),
('maharsh', 'xyz', 1234, 'IT', 2008),
('aastha', 'xyz', 1234, 'IT', 2006),
('utkarsh', 'xyz', 1234, 'electrical', 2002),
('pooja', 'xyz', 1234, 'electrical', 2017),
('jaineel', 'xyz', 1234, 'electronics', 2009),
('pari', 'xyz', 1234, 'electronics', 2007);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
