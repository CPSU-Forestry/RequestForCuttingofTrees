-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2022 at 02:30 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `cpsu_request_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` double NOT NULL auto_increment,
  `feller_id` varchar(255) NOT NULL,
  `inspector_id` varchar(255) NOT NULL,
  `tree_id` varchar(255) NOT NULL,
  `tree_name` varchar(255) NOT NULL,
  `tree_no` varchar(255) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `inspect_report` varchar(255) NOT NULL,
  `decline_message` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `request`
--


-- --------------------------------------------------------

--
-- Table structure for table `trees`
--

CREATE TABLE `trees` (
  `id` double NOT NULL auto_increment,
  `tree_name` varchar(255) NOT NULL,
  `tree_no` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `trees`
--

INSERT INTO `trees` (`id`, `tree_name`, `tree_no`, `location`, `status`) VALUES
(4, 'Akasha', '4654', 'river near my house.', 'uncut'),
(5, 'Melina', '2365', 'at my house ', 'uncut');

-- --------------------------------------------------------

--
-- Table structure for table `tree_feller`
--

CREATE TABLE `tree_feller` (
  `id` double NOT NULL auto_increment,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `attach_file` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tree_feller`
--

INSERT INTO `tree_feller` (`id`, `fname`, `lname`, `gender`, `contact`, `address`, `username`, `password`, `profile`, `attach_file`, `status`) VALUES
(2, 'Alexander', 'Golez', 'Male', '051261265', 'Kabankalan, Negros Ocidental', 'alex@gmail.com', 'Alexander', '2642mabinay-ogo.jpg', '2642My ID.pdf', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` double NOT NULL auto_increment,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `type`, `profile`) VALUES
(6, 'Vanessa', 'Enlangan', 'vaness@gmail.com', 'Admin', 'Admin', 'profile.jpg'),
(7, 'Doneza', 'Lascano', 'doneza@gmail.com', 'Inspector', 'Inspector', '19876search.png');
