-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2011 at 06:29 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `balsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` varchar(100) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `ip`, `at`) VALUES
('install.zip', '127.0.0.1', '07-03-2011 05:35:36 PM'),
('depsi', '127.0.0.1', '07-03-2011 06:09:01 PM');

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE `hits` (
  `page` varchar(100) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`page`, `ip`, `at`) VALUES
('', '127.0.0.1', '07-03-2011 06:05:56 PM'),
('', '127.0.0.1', '07-03-2011 06:06:07 PM'),
('', '127.0.0.1', '07-03-2011 06:07:09 PM'),
('', '127.0.0.1', '07-03-2011 06:08:36 PM'),
('', '127.0.0.1', '07-03-2011 06:13:10 PM'),
('index', '127.0.0.1', '07-03-2011 06:14:01 PM'),
('index', '127.0.0.1', '07-03-2011 06:16:18 PM'),
('index', '127.0.0.1', '07-03-2011 06:22:49 PM'),
('profile', '127.0.0.1', '07-03-2011 06:22:57 PM'),
('achievements', '127.0.0.1', '07-03-2011 06:23:16 PM'),
('profile', '127.0.0.1', '07-03-2011 06:23:19 PM'),
('my-self', '127.0.0.1', '07-03-2011 06:23:23 PM'),
('index', '127.0.0.1', '07-03-2011 06:26:13 PM'),
('guest-book', '127.0.0.1', '07-03-2011 06:26:13 PM'),
('my-self', '127.0.0.1', '07-03-2011 06:26:20 PM'),
('profile', '127.0.0.1', '07-03-2011 06:26:32 PM'),
('achievements', '127.0.0.1', '07-03-2011 06:27:19 PM'),
('design', '127.0.0.1', '07-03-2011 06:27:33 PM'),
('portfoilo', '127.0.0.1', '07-03-2011 06:27:33 PM'),
('flash', '127.0.0.1', '07-03-2011 06:27:36 PM'),
('softs', '127.0.0.1', '07-03-2011 06:27:40 PM'),
('achievements', '127.0.0.1', '07-03-2011 06:29:05 PM'),
('empowerit', '127.0.0.1', '07-03-2011 06:29:07 PM');
