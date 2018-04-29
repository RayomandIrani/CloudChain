-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 12:59 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bc`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `filename` varchar(100) NOT NULL,
  `filelink` blob NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `userid`, `filename`, `filelink`) VALUES
(22, 3, 'Jellyfish.jpg', 0x31585a4d4f43436d775973544f595a705154324c4236476832566e496339425f63),
(23, 3, 'Koala.jpg', 0x31414336687871444b47455f30744f6c537236664531457541344847416a466433),
(24, 3, 'Hydrangeas.jpg', 0x316b544d304751734b77354835576456474a486b555948336858724b78336d616e);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uname`, `upass`, `uemail`) VALUES
(3, 'asd1', 'f5b3b9b303f5a0594272f99d191bbf45', 'asd1@asd1.com'),
(5, 'ray', '070dd72385b8b2b205db53237da57200', 'ray@ray.com'),
(7, 'kji', 'c536af635810bd807d14df814ac1b355', 'kji@kji.com'),
(8, 'john', '527bd5b5d689e2c32ae974c6229ff785', 'john@john.com'),
(9, 'john', '527bd5b5d689e2c32ae974c6229ff785', 'john@john.com'),
(10, 'lol', '9cdfb439c7876e703e307864c9167a15', 'lol@lol.com'),
(11, '', 'd41d8cd98f00b204e9800998ecf8427e', 'jigg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `files`
--
ALTER TABLE `files`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
