-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2020 at 06:34 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `navigus`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Name` varchar(200) NOT NULL,
  `f_name` varchar(200) NOT NULL,
  `m_name` varchar(200) NOT NULL,
  `password` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `status` int(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  `login_time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Name`, `f_name`, `m_name`, `password`, `email`, `status`, `image`, `login_time`) VALUES
('akshay2204', 'pramod', 'nidhi', 0, 'akshanku@gmail.com', 0, '6.jpg', '11:39:30'),
('Udit Raj', 'Raj kishore', 'Radha', 1234, 'udit.raj2019@vitbhopal.ac.in', 0, '22.jpg', '11:21:00');
