-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 03, 2016 at 10:46 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--
CREATE DATABASE IF NOT EXISTS `cars` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cars`;

-- --------------------------------------------------------

--
-- Table structure for table `carsid`
--

CREATE TABLE `carsid` (
  `id` int(32) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` int(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `weight` int(50) NOT NULL,
  `height` int(50) NOT NULL,
  `dealer` varchar(50) NOT NULL,
  `number` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carsid`
--

INSERT INTO `carsid` (`id`, `name`, `year`, `color`, `weight`, `height`, `dealer`, `number`) VALUES
(1, 'Lambhorgini', 2010, 'red', 400, 40, 'Dinesh', 12345675),
(2, 'Audi', 2010, 'red', 400, 40, 'Dinesh', 123345675),
(3, 'Skoda', 2012, 'Black', 500, 50, 'Dinesh', 123345675),
(4, 'Skoda', 2014, 'yellow', 500, 50, 'Dinesh', 123345675),
(5, 'Ferrari', 2014, 'Black', 600, 60, 'Dinesh', 123345675);

