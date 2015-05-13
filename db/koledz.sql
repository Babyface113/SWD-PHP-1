-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2015 at 01:13 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koledz`
--

-- --------------------------------------------------------

--
-- Table structure for table `studenti`
--

CREATE TABLE IF NOT EXISTS `studenti` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(15) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `studenti`
--

INSERT INTO `studenti` (`id`, `ime`, `prezime`) VALUES
(1, 'Ilmi', 'Ramadani'),
(2, 'Ivana', 'Korovesovska'),
(3, 'Marko', 'Tanaskoski'),
(4, 'Dragi', 'Tanchev'),
(5, 'Ardijan', 'Demirovikj'),
(7, 'Pero', 'Peroski'),
(8, 'Janko', 'Jankovski'),
(9, 'Ivanovski', 'Ivanovski'),
(10, 'Stanko', 'Stankovski'),
(11, 'Toshe', 'Toshevski'),
(12, 'Goran', 'Goranovski');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
