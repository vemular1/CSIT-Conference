-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2015 at 06:48 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `congress`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `user_password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `attendee_info`
--

CREATE TABLE IF NOT EXISTS `attendee_info` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `mobile` int(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `company` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `author_info`
--

CREATE TABLE IF NOT EXISTS `author_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(20) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `company` varchar(50) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `user_id`, `fname`, `lname`, `mobile`, `address`, `company`, `gender`) VALUES
(9, 38, 'Raju', 'Vemula', '4437637258', '92 Monroe Place', 'Montclair State University', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `submit_paper`
--

CREATE TABLE IF NOT EXISTS `submit_paper` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `paper_title` varchar(50) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `affiliation` varchar(50) NOT NULL,
  `upload_paper` varchar(20000) NOT NULL,
  `upload_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `submit_paper`
--

INSERT INTO `submit_paper` (`id`, `user_id`, `paper_title`, `author_name`, `affiliation`, `upload_paper`, `upload_date`) VALUES
(14, 38, 'ACM 2010', 'Raju Vemula', '', 'upload/19830ACM-2010_SAC_Word_Template-1.doc', '2015-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_role_id` enum('0','1','2') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_role_id`) VALUES
(38, 'chikna88@gmail.com', 'Bazingaa11', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role` int(11) NOT NULL,
  `value` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
