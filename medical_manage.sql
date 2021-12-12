-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2019 at 05:14 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medical_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcart`
--

CREATE TABLE `addcart` (
  `id` int(11) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `orderid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcart`
--

INSERT INTO `addcart` (`id`, `uid`, `orderid`, `bid`, `price`, `quantity`, `amount`, `status`) VALUES
(1, '1', 1, 1, 56, 2, 112, 1),
(2, '1', 2, 1, 56, 2, 112, 1),
(3, '1', 3, 1, 56, 1, 56, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `psw`) VALUES
('admin', '11');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `quali` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `gender`, `age`, `email`, `phone`, `quali`, `address`, `psw`) VALUES
('1', 'admin', 'male', '24', 'vinothk1216@gmail.com', '9087408476', 'test', 'trichy', '111');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `mfd` varchar(50) NOT NULL,
  `exd` varchar(50) NOT NULL,
  `power` varchar(50) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `mfd`, `exd`, `power`, `qty`, `img`, `desc`) VALUES
(1, 'paracitamel', '56', '28-03-2019', '20-12-2020', '1.5', '50strp', '1.jpg', 'test descrption');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `psw` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `age`, `email`, `phone`, `location`, `address`, `uname`, `psw`) VALUES
(1, 'admin', 'male', '21', 'test@gmail.com', '9087408476', 'trichy', 'trichy', 'admin', '111');
