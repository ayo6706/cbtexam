-- phpMyAdmin SQL Dump
-- version 4.1.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2019 at 10:17 PM
-- Server version: 5.1.67-andiunpam
-- PHP Version: 5.6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `adminId` int(11) NOT NULL AUTO_INCREMENT,
  `adminUser` varchar(50) NOT NULL,
  `adminPass` varchar(32) NOT NULL,
  PRIMARY KEY (`adminId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE IF NOT EXISTS `tbl_ans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(25, 1, 1, 'Operation'),
(26, 1, 0, 'Oral therapy'),
(27, 1, 0, 'Medication'),
(28, 1, 0, 'Labour'),
(29, 2, 0, 'hydrogen'),
(30, 2, 1, 'Salt'),
(31, 2, 0, 'H20'),
(32, 2, 0, 'sodium'),
(33, 3, 0, 'adjournment'),
(34, 3, 1, 'long speech'),
(35, 3, 0, 'physical combat'),
(36, 3, 0, 'absenteeism'),
(37, 4, 0, 'Petrol'),
(38, 4, 0, 'Petroleum Jelly'),
(39, 4, 1, 'Crude oil'),
(40, 4, 0, 'Plan oil'),
(41, 5, 0, '37'),
(42, 5, 0, '170'),
(43, 5, 0, '108'),
(44, 5, 1, '109 '),
(45, 6, 0, 'Wind hook'),
(46, 6, 0, 'Wind clock'),
(47, 6, 1, 'Wind Vane'),
(48, 6, 0, 'Baro meter'),
(49, 7, 0, 'To council the law'),
(50, 7, 0, 'To reject the law'),
(51, 7, 1, 'To activate the law'),
(52, 7, 0, 'To review the law'),
(53, 8, 1, 'Special Anti-Robbery Squad'),
(54, 8, 0, 'Special Autorobbery Squad '),
(55, 8, 0, 'Special Anti-Robbers Squad'),
(56, 8, 0, 'Special Automated Squad '),
(57, 9, 1, 'Diplomat '),
(58, 9, 0, 'Visitors'),
(59, 9, 0, ' Foreigners'),
(60, 9, 0, 'Spies'),
(61, 10, 0, 'Words '),
(62, 10, 0, 'Letters'),
(63, 10, 1, 'Sentences'),
(64, 10, 0, 'Permutation');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE IF NOT EXISTS `tbl_ques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL,
  `Timer` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesNo`, `ques`, `Timer`) VALUES
(7, 1, 'Ceasarian section is a process of giving birth to a baby by a woman through', 20),
(8, 2, 'Urine contains urea, water and', 10),
(9, 3, 'Parliamentary Filibuster strategy is a method of delaying decision in the parliament through', 30),
(10, 4, 'Kerosene is a product refined from', 15),
(11, 5, 'The Senate of the Federal Republic of Nigeria has ---- members', 10),
(12, 6, 'The instrument for finding the direction of the wind is called ------', 10),
(13, 7, 'â€œI challenge the public to put teeth into the law meansâ€ ..............', 5),
(14, 8, 'The acronym SARS means...........', 8),
(15, 9, 'An official representing a country abroad is a............', 10),
(16, 10, 'Paragraph is a group of ........', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userId` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `name`, `username`, `password`, `email`, `status`) VALUES
(1, 'John Obi', 'john', '81dc9bdb52d04dc20036dbd8313ed055', 'johnobi@gmail.com', 0),
(3, 'Hasib Hasan', 'hasib', '202cb962ac59075b964b07152d234b70', 'hasib@gmail.com', 0),
(4, 'James Ahmed', 'James', '202cb962ac59075b964b07152d234b70', 'jamesmahmud@gmail.com', 0),
(5, 'Ajayi Tunde', 'tunde123', '6f52b759340d864bcce202cdb2e42b80', 'tunde@yahoo.com', 0),
(6, 'Fred Ovie', 'fred123', '77064f5bd13e417f564e7d880dc7a536', 'fred@yahoo.com', 0),
(7, 'John Okoro', 'john123', '6e0b7076126a29d5dfcbd54835387b7b', 'johno@yahoo.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_viva`
--

CREATE TABLE IF NOT EXISTS `tbl_viva` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) NOT NULL,
  `email` varchar(2000) NOT NULL,
  `facebook` varchar(2000) NOT NULL,
  `skype` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_viva`
--

INSERT INTO `tbl_viva` (`id`, `name`, `email`, `facebook`, `skype`) VALUES
(1, 'John Obi', 'johnobi@gmail.com', 'facebook.com/johnobi', 'skype.com/johnobi');

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE IF NOT EXISTS `timer` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `day` text NOT NULL,
  `hour` text NOT NULL,
  `mins` text NOT NULL,
  `secs` text NOT NULL,
  `timer` datetime NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`Id`, `day`, `hour`, `mins`, `secs`, `timer`) VALUES
(3, '', '', '', '', '2019-07-17 22:12:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
