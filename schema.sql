-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 02:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `usersinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `intenship`
--

CREATE TABLE `intenship` (
  `Name` varchar(255) NOT NULL,
  `Roll_Number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `section` enum('A','B','NIL') NOT NULL,
  `batch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paper` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `from_` varchar(255) NOT NULL,
  `to_` varchar(255) NOT NULL,
  `prize` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nontechnical`
--

CREATE TABLE `nontechnical` (
  `Name` varchar(255) NOT NULL,
  `Roll_Number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `section` enum('A','B','NIL') NOT NULL,
  `batch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paper` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `from_` varchar(255) NOT NULL,
  `to_` varchar(255) NOT NULL,
  `prize` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `paperpresentation`
--

CREATE TABLE `paperpresentation` (
  `Name` varchar(255) NOT NULL,
  `Roll_Number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `section` enum('A','B','NIL') NOT NULL,
  `batch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paper` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `from_` varchar(255) NOT NULL,
  `to_` varchar(255) NOT NULL,
  `prize` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `technicalevent`
--

CREATE TABLE `technicalevent` (
  `Name` varchar(255) NOT NULL,
  `Roll_Number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `section` enum('A','B','NIL') NOT NULL,
  `batch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paper` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `from_` varchar(255) NOT NULL,
  `to_` varchar(255) NOT NULL,
  `prize` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `Name` varchar(255) NOT NULL,
  `Roll_Number` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `section` enum('A','B','NIL') NOT NULL,
  `batch` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `paper` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `from_` varchar(255) NOT NULL,
  `to_` varchar(255) NOT NULL,
  `prize` varchar(255) NOT NULL,
  `certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
