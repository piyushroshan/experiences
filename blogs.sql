-- phpMyAdmin SQL Dump
-- version 3.3.2deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2012 at 02:40 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_entry`
--

CREATE TABLE IF NOT EXISTS `blog_entry` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(80) NOT NULL,
  `Lname` varchar(100) NOT NULL,
  `Sub` varchar(100) NOT NULL,
  `Tag` text NOT NULL,
  `Contnt` longtext NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Facebook` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `blog_entry`
--

INSERT INTO `blog_entry` (`id`, `Fname`, `Lname`, `Sub`, `Tag`, `Contnt`, `Date`, `Time`, `Facebook`, `Email`) VALUES
(65, 'Roshan', 'piyush', 'An example', 'example', '<p>\r\n	&nbsp;</p>\r\n<p>\r\n	<meta content="text/html; charset=utf-8" http-equiv="content-type" />\r\n	Welcome to Free Samples Post. We are striving to be a leading free sample directory for finding free sample products such as cosmetic samples, food samples, samples for the household, hygiene product samples, pet food samples, gardening and more. We realize that what you want is totally free samples, so we do our best to list all of the freebies that are available on the internet. Browse all of the categories to the many free offers you might be interested in and be sure to bookmark us and visit on a regular basis.</p>\r\n', '2012-04-12', '00:09:00', 'http://facebook.com/piyushroshan', 'piyushroshan@gmail.com'),
(66, 'Roshan', 'Piyush', 'Mr Alpha Tester', 'csea', '<p>\r\n	<strong>This is a venture by Computer Science and Engineering Association (CSEA) to narrow the communication gap among the students of NIT Calicut. Students can share their Experiences irrespective of their stream and academic year.</strong></p>\r\n', '2012-04-12', '14:09:00', 'http://facebook.com/piyushroshan', 'roshanpiyush@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `search_entry`
--

CREATE TABLE IF NOT EXISTS `search_entry` (
  `search` text NOT NULL,
  `id` bigint(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `search_entry`
--

INSERT INTO `search_entry` (`search`, `id`) VALUES
('none', 87);
