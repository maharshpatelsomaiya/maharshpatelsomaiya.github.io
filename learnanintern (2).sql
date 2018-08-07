-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2018 at 07:45 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

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
  `fname` varchar(30) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `femail` varchar(30) NOT NULL,
  `semail` varchar(30) NOT NULL,
  `temail` varchar(30) NOT NULL,
  `fcontactno` varchar(30) NOT NULL,
  `scontactno` varchar(30) NOT NULL,
  `tcontactno` varchar(30) NOT NULL,
  `accyear` varchar(30) NOT NULL,
  `under` varchar(30) NOT NULL,
  `prob_stmt` varchar(1200) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `abs` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abstractsub`
--

INSERT INTO `abstractsub` (`fname`, `sname`, `tname`, `femail`, `semail`, `temail`, `fcontactno`, `scontactno`, `tcontactno`, `accyear`, `under`, `prob_stmt`, `domain`, `abs`) VALUES
('Student name 1', 'Student name 2', 'Student name 3', 'email1@demo.com', 'email2@demo.com', 'email3@demo.com', '1234567890', '1234567890', '1234567890', '1', '1', 'Problem Statement Demo', 'Demo', 'LearnAnIntern is a proposed initiative undertaken by the students of our esteemed institution K.J. Somaiya Institute of Engineering and Information Technology, where, we not only want to provide a centralised access to all the projects under taken in KJSIEIT but are hopeful to provide our students with internship opportunities within the boundaries of our college, so that our students can save their time and energy on finding internship opportunities outside the framework of the institution.'),
('Demo 2', 'Demo 2', 'Demo 2', 'email@gmail.com', 'email@gmail.com', 'email@gmail.com', '1234567890', '1234567890', '1234567890', '1', '1', 'Statement 2', 'Demo 2', 'This is just a demo input under IT section.');

-- --------------------------------------------------------

--
-- Table structure for table `internship_form`
--

CREATE TABLE `internship_form` (
  `fname` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `internship_type` varchar(20) NOT NULL,
  `internship_no` varchar(20) NOT NULL,
  `Domain` varchar(30) NOT NULL,
  `who_can_apply` varchar(1200) NOT NULL,
  `internship_stmt` varchar(1200) NOT NULL,
  `Perks` varchar(1200) NOT NULL,
  `abs` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internship_form`
--

INSERT INTO `internship_form` (`fname`, `phno`, `emailid`, `internship_type`, `internship_no`, `Domain`, `who_can_apply`, `internship_stmt`, `Perks`, `abs`) VALUES
('Aastha', '9969779378', 'aastha.s@somaiya.edu', 'on', '2', 'cdgf', 'fdgffd', 'dsafv', 'dsafv', '');

-- --------------------------------------------------------

--
-- Table structure for table `projectsub`
--

CREATE TABLE `projectsub` (
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `tname` varchar(20) NOT NULL,
  `femail` varchar(20) NOT NULL,
  `semail` varchar(20) NOT NULL,
  `temail` varchar(20) NOT NULL,
  `telephone1` int(10) NOT NULL,
  `telephone2` int(10) NOT NULL,
  `telephone3` int(10) NOT NULL,
  `prob_stmt` varchar(120) NOT NULL,
  `acc_year` varchar(10) NOT NULL,
  `under` varchar(10) NOT NULL,
  `facname` varchar(20) NOT NULL,
  `file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectsub`
--

INSERT INTO `projectsub` (`fname`, `sname`, `tname`, `femail`, `semail`, `temail`, `telephone1`, `telephone2`, `telephone3`, `prob_stmt`, `acc_year`, `under`, `facname`, `file`) VALUES
('', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
