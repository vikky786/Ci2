-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 28, 2016 at 02:58 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci`
--
CREATE DATABASE `ci` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ci`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pic` varchar(30) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `nation` varchar(15) NOT NULL,
  `state` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(512) NOT NULL,
  `pwd` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pwd`) VALUES
(46, 'vikas@123gmail.com', '1234'),
(47, 'vikas@123gmail.com', '1234'),
(48, 'vikas@123gmail.com', '1234'),
(49, 'vikas@123gmail.com', '1234'),
(50, 'vikas@123gmail.com', '1234'),
(51, 'vikas@123gmail.com', '1234'),
(52, 'vikas@123gmail.com', '1234'),
(53, 'vikas@123gmssdsail.com', '1234'),
(54, 'vikas@123gmail.com', '1234'),
(55, 'vikas@123gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE IF NOT EXISTS `recipe` (
  `rname` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `Category` varchar(15) NOT NULL,
  `Ingredient` varchar(100) NOT NULL,
  `tofFood` varchar(15) NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Skill_Level` varchar(10) NOT NULL,
  `Preperation_Time` varchar(5) NOT NULL,
  `Cook_Time` varchar(5) NOT NULL,
  `Estimated` varchar(5) NOT NULL,
  `No_of_Ingred` varchar(10) NOT NULL,
  PRIMARY KEY (`rname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`rname`, `username`, `Category`, `Ingredient`, `tofFood`, `Status`, `Skill_Level`, `Preperation_Time`, `Cook_Time`, `Estimated`, `No_of_Ingred`) VALUES
(1, 'vikas', 'xyz', 'yui', 'dfgg', 'fdgdfg', '', '', '', '', ''),
(2, 'John', 'Italian', ' saffron vanilla extract  truffles  chilli oil', 'American', 'Approved', '', '', '', '', ''),
(3, 'John', 'Italian', ' saffron vanilla extract  truffles  chilli oil', 'American', 'Pending', '', '', '', '', ''),
(4, 'John', 'American', ' saffron vanilla extract  truffles  chilli oil', 'American', 'Approved', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE IF NOT EXISTS `student_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(20) NOT NULL,
  `course_fee` varchar(10) NOT NULL,
  `course_duration(in Months)` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `course_name`, `course_fee`, `course_duration(in Months)`) VALUES
(1, 'oracle', '9000', '2'),
(2, 'core java', '9000', '2'),
(3, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `gender` varchar(512) DEFAULT NULL,
  `pic` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `fname`, `lname`, `dob`, `email`, `contact`, `gender`, `pic`) VALUES
(10, 'mohit', 'gupta', '2016-03-11', 'mohitguss@gmail.com', '9879879873', 'Female', NULL),
(12, 'jhon', 'snow', NULL, 'snow@gmail.com', '666666677', 'Male', 'blob:http%3A//localhost/1b93814d-3fbf-4f96-9769-3930a1fc85b0'),
(13, 'huge', 'jackman', '2016-04-08', 'huge@gmail.com', '7878787878', 'Male', NULL),
(14, 'leo', 'skull', NULL, 'leowe@gmail.com', '5656565656', 'male', NULL),
(15, 'jhone', 'statham', NULL, 'jhonw@gmail.com', '8808978697', 'male', NULL),
(16, 'tarion', 'linnester', NULL, 'line@gmail.com', '8808088888', 'male', NULL),
(17, 'will', 'smith', NULL, 'will@gmail.com', '7877877878787', 'male', NULL),
(19, 'bruce', 'wain', NULL, 'wain@gmail.com', '565656565656', 'male', NULL),
(20, 'jack', 'goodman', '2016-03-24', 'jack@gmail.com', '4444444444', 'Female', NULL),
(22, 'mritunjay', 'kumar', NULL, 'mritunjay@gmail.com', '45345344', 'male', NULL),
(23, 'maxwell', 'brown', NULL, 'max@br.com', '3434343434343', 'male', NULL),
(24, 'bred', 'pitt', NULL, 'bred@gmail.com', '3434545453', 'male', NULL),
(26, 'good', 'wether', NULL, 'good12123@gmail.com', '2222111123', 'male', NULL),
(27, 'rajkumar', 'maurya', NULL, 'rajkumar@gmail.com', '8808768975', 'male', NULL),
(30, 'santosh', 'devi', NULL, 'sontosh@gmail.com', '4444333323', 'female', NULL),
(31, 'adesh', 'kushwaha', NULL, 'adesh@gmail.com', '3333444456', 'Male', NULL),
(33, 'jyoti', 'kushwaha', NULL, 'jyoti@gmail.com', '3333444456', 'Female', NULL),
(38, 'goolmohan', 'singh', NULL, 'gool@mohan.com', '8800757575', 'Male', NULL),
(39, 'rohan', 'kumar', '2014-02-02', 'rohan@gmail.com', '1122111121212', 'Male', NULL),
(40, 'wrrrerwrew', 'erwerwer', '2016-03-29', 'werwerwer@rtttyrty.com', '8808767676', 'Male', NULL),
(44, 'mohan', 'bhagwat', '1971-12-31', 'mohan@gmail.com', '5566554444', 'Male', NULL),
(45, 'rocky', 'hansome', NULL, 'rocky@gmail.com', '5555555556', 'Male', NULL),
(49, 'jp', 'dumeny', '2016-04-21', 'jp@gmail.com', '9999999999', 'Male', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `dob` varchar(12) DEFAULT NULL,
  `contact` varchar(13) DEFAULT NULL,
  `pic` varchar(15) NOT NULL,
  `nation` varchar(11) NOT NULL,
  `state` varchar(11) NOT NULL,
  `address` varchar(11) NOT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `lang` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pwd`, `dob`, `contact`, `pic`, `nation`, `state`, `address`, `gender`, `lang`) VALUES
(2, 'Admin', 'Control', 'admin@control.com', 'admin', NULL, NULL, 'administrator1.', 'india', 'delhi', 'saket', NULL, NULL),
(4, 'Rahul', 'Shukla', 'rahul@gmail.com', '293847hg', '2015-10-10', '5643897643', 'download1.jpg', 'india', 'delhi', 'lweihowe', 'male', 'English'),
(5, 'Sharad', 'Dubey', 'sah@gmail.com', 'hru76576', '2015-10-10', '7765889765', 'downwill.jpg', 'india', 'delhi', 'Delhi', 'male', 'English'),
(7, 'Sandeep', 'Dubey', 'sandy@gmail.com', 'leitr984759', '2015-10-01', '7778645392', 'download_(2).jp', 'india', 'delhi', 'Jaunpur', 'male', 'Hindi'),
(8, 'Vikas', 'Kushwaha', 'vikas@123gmail.com', '1234', '2015-10-10', '8889706675', 'hugjackman5.jpg', 'india', 'delhi', 'Saket', 'male', 'English'),
(9, 'Vikas', 'Kushwaha', 'vikas@gmail.com', 'kweury7', '2015-10-07', '7566648932', 'hugjackman.jpg', 'india', 'delhi', 'Allahabad', 'male', 'English');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
