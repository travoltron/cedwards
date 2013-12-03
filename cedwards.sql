-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2013 at 11:08 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.6-1ubuntu1.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cedwards`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `showname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_start` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_end` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `showname`, `position`, `date_start`, `date_end`, `supervisor`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Black Swan', 'Makeup FX Assistant', '2010', '2010', 'Mike Marino', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'The Lion King', 'Makeup Swing', '2010', '2013', 'Elizabeth Cohen', 'New York City', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Spiderman: Turn Off The Dark', 'Makeup Swing', '2012', '2013', 'Angela Johnson', 'New York City', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Rocky: The Musical', 'Hair/Makeup Assistant', '2014', '', 'Rick Caroto', 'New York City', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Cinderella', 'Hair Swing', '2013', '2013', 'Carrie Rohm', 'New York City', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Rock of Ages', 'Hair Swing', '2012', '2012', 'Renee Kelly', 'New York City', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Evita', 'Hair Swing', '2012', '2012', 'Wanda Gregory', 'New York City', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Ghost', 'Hair Swing', '2012', '2012', 'Susan Corrado', 'New York City', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'American Players Theatre', 'Wig Stylist', '2011', '2011', '', 'Spring Green, WI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'After Earth', 'Creature Assistant: Hair', '2012', '2012', 'Mike Marino', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Shakespeare Theatre of New Jersey', 'Hair and Wardrobe Supervisor', '2010', '2010', '', 'Madison, NJ', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2013_12_03_003823_create_portimgs_table', 1),
('2013_12_03_004832_create_jobs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `portimgs`
--

CREATE TABLE IF NOT EXISTS `portimgs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `portimgs`
--

INSERT INTO `portimgs` (`id`, `image`, `heading`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'img/portfolio/img1.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'img/portfolio/img2.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'img/portfolio/img3.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'img/portfolio/img4.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'img/portfolio/img5.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'img/portfolio/img6.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'img/portfolio/img7.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'img/portfolio/img8.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'img/portfolio/img9.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'img/portfolio/img10.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'img/portfolio/img11.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'img/portfolio/img12.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'img/portfolio/img13.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'img/portfolio/img14.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'img/portfolio/img15.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'img/portfolio/img16.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'img/portfolio/img17.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'img/portfolio/img18.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'img/portfolio/img19.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'img/portfolio/img20.jpg', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
