-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2015 at 02:44 AM
-- Server version: 5.5.43-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `thumbnail` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `visible` tinyint(1) NOT NULL DEFAULT '1',
  `view_count` int(11) NOT NULL DEFAULT '0',
  `download_count` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`, `filename`, `thumbnail`, `created_at`, `visible`, `view_count`, `download_count`) VALUES
(1, 'Image 1', 'Image+1.jpg', '', '2015-10-04 04:16:24', 1, 1, 0),
(2, 'Image 2', 'Image+2.jpg', '', '2015-10-04 04:16:24', 1, 0, 12),
(3, 'Image 3', 'Image+3.jpg', '', '2015-10-04 04:16:24', 1, 12, 102),
(4, 'Image 4', 'Image+4.jpg', '', '2015-10-04 04:16:24', 1, 0, 0),
(5, 'Image 5', 'Image+5.jpg', '', '2015-10-04 00:16:24', 1, 1, 70),
(6, 'Image 6', 'Image+6.jpg', '', '2015-10-04 04:22:24', 1, 5, 0),
(7, 'Image 7', 'Image+7.jpg', '', '2015-10-04 04:30:24', 1, 0, 0),
(8, 'Image 8', 'Image+8.jpg', '', '2015-10-04 04:16:24', 1, 2, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
