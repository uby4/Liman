-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 07:31 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth`
--

CREATE TABLE IF NOT EXISTS `birth` (
  `user_id` int(11) NOT NULL,
  `c_certno` int(100) NOT NULL,
  `c_fname` varchar(50) NOT NULL,
  `c_mname` varchar(50) DEFAULT NULL,
  `c_lname` varchar(50) NOT NULL,
  `c_weight` float NOT NULL,
  `c_gender` varchar(50) NOT NULL,
  `c_faname` varchar(100) NOT NULL,
  `c_moname` varchar(100) NOT NULL,
  `c_bplace` varchar(256) NOT NULL,
  `c_rcenter` varchar(256) NOT NULL,
  `c_poccupation` varchar(256) NOT NULL,
  `c_nationality` varchar(100) NOT NULL,
  `c_state` varchar(100) NOT NULL,
  `c_lga` varchar(150) NOT NULL,
  `c_town` varchar(100) NOT NULL,
  `c_address` varchar(256) NOT NULL,
  `c_number` varchar(50) NOT NULL,
  `c_registrar` varchar(100) NOT NULL,
  `c_dob` date NOT NULL,
  `c_passport` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=130 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birth`
--

INSERT INTO `birth` (`user_id`, `c_certno`, `c_fname`, `c_mname`, `c_lname`, `c_weight`, `c_gender`, `c_faname`, `c_moname`, `c_bplace`, `c_rcenter`, `c_poccupation`, `c_nationality`, `c_state`, `c_lga`, `c_town`, `c_address`, `c_number`, `c_registrar`, `c_dob`, `c_passport`) VALUES
(124, 54323, 'Dunamis', 'Comrade', 'lama', 45, 'Male', 'Malgwi', 'Amos', 'Jimeta', 'Anguwan Fulani', 'Politician', 'USA', 'California', 'jOS', 'JJUI', 'DJAJJA', '09031305810', 'FGGHG', '0000-00-00', 'bpassport/FB_IMG_15602296938989334.jpg'),
(125, 5050, 'nanna', 'ananna', 'annana45', 54, 'Male', 'annanna', 'jaja', 'anna', 'annana', 'manama', 'ammama', 'amamam', 'namnanna', 'aammama', 'amamma', 'okajja', 'annana', '0000-00-00', 'bpassport/IMG_20190530_175704_7.jpg'),
(126, 2147483647, 'Dunamis', 'adada', 'adada35', 34, 'Male', 'fsnnns', 'ss', 'jimeta', 'adada', 'ksjs', 'jsnns', 'snsn', 'mamma', 'amama', 'amananaa', 'ananna', 'aamaaaaaaaaaaa', '0000-00-00', 'bpassport/IMG_20190530_175704_7.jpg'),
(127, 456782, 'nanana', 'ananna', 'annanna', 45, 'Male', 'ssmms', 'ananna', 'snnsns', 'anaaaaaaaaaaaaaaaaaaa', 'annaaaaaaaaaaaaaaa', 'ananana', 'mamamma', 'annana', 'nanana', 'anaaaaaaaaaaaaaaaaaaaa', '08031305810', 'snsnns', '0000-00-00', 'bpassport/IMG_20190530_175712_2.jpg'),
(128, 56672, 'Yunux', 'Badooo', 'Hassan', 45, 'Male', 'Ali', 'Naomi', 'Jimeta', 'Anguwan tssamiya', 'Business man', 'Nigeria', 'Adamawa State', 'Michika', 'Hua', 'Anguwan ', '08031305810', 'Saaa', '0000-00-00', 'bpassport/2348145645470_status_d248bdde446f4123bf8bb143d94587de.jpg'),
(129, 1, 'Anasam', 'K', 'Vandi', 45, 'Male', 'John', 'Mary', 'Jimeta', 'Vunoklang', 'Politician', 'Nigerian', 'Adamawa State', 'Michika', 'Futu', 'Anguwan Fulani', '08167956216', 'Dlama Vandi', '0000-00-00', 'bpassport/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `death`
--

CREATE TABLE IF NOT EXISTS `death` (
  `user_id` int(11) NOT NULL,
  `d_certno` varchar(30) NOT NULL,
  `d_fname` varchar(50) NOT NULL,
  `d_mname` varchar(50) DEFAULT NULL,
  `d_lname` varchar(50) NOT NULL,
  `d_rcenter` varchar(256) NOT NULL,
  `d_state` varchar(100) NOT NULL,
  `d_lga` varchar(100) NOT NULL,
  `d_town` varchar(100) NOT NULL,
  `d_age` int(10) NOT NULL,
  `d_dod` date NOT NULL,
  `d_dor` date NOT NULL,
  `d_address` varchar(256) NOT NULL,
  `d_primary` varchar(256) NOT NULL,
  `d_secondary` varchar(256) NOT NULL,
  `d_registrar` varchar(100) NOT NULL,
  `d_gender` varchar(50) NOT NULL,
  `d_nok` varchar(100) NOT NULL,
  `d_issue` varchar(256) NOT NULL,
  `d_passport` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `death`
--

INSERT INTO `death` (`user_id`, `d_certno`, `d_fname`, `d_mname`, `d_lname`, `d_rcenter`, `d_state`, `d_lga`, `d_town`, `d_age`, `d_dod`, `d_dor`, `d_address`, `d_primary`, `d_secondary`, `d_registrar`, `d_gender`, `d_nok`, `d_issue`, `d_passport`) VALUES
(1, '5051', 'kol', 'sss', 'ddd', 'adadadad', 'Adamawa State', 'Michika', 'Futu', 30, '0000-00-00', '0000-00-00', 'amaaaaaaaaaa', 'annnnnnnnn', 'nananna', 'kakaka', 'Male', 'nanana', 'nannnnnnnnnnnnnn', 'dpassport/IMG_20190530_175712_2.jpg'),
(2, '35627892', '8uudjdd', 'ssddd', 'sfsfs', 'a,a,,a', 'a,a,,a', ',ssms', 'fsfsfsfs', 30, '0000-00-00', '0000-00-00', 'sfssfs', 'sfsfsfs', 'sfsfsfs', 'sfsfsfsf', 'Male', 'fsfsfs', 'sfsfsfsfs', 'dpassport/IMG_20190530_175704_7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(8, 'Dlama', 'Vandi', 'd@gmail.com', 'test', '$2y$10$vsf6MMdJ3PKkRazagYc3d.vXIVUcFJdaNZoRpMLka0MjMvbqKMIwG'),
(9, 'Anasam', 'Phanuel', 'anasamphanuel7@gmail.com', 'DamcyXzebitor', '$2y$10$zRCwIPkgzsmJhQq9AHeaWuwJoGFFUccOP0dbjd8vCZ7HSlOCwxU/e'),
(10, 'John', 'Edan', 'john@yahoo.com', 'tommy', '$2y$10$tR3GoQuzghhxQLZbddYBguXOsTIVBzjzT1C3OYitWk4.JhXOSDd6e'),
(11, 'Louis', 'James', 'Jamesj@gmail.com', 'haliru', '$2y$10$fTEtUS3nAY9QdCyJSQ0DLOTErDzAcXo2rNgbJwA8k0jWhDDKWY9tS'),
(12, 'Comrade', 'Dunamis', 'dunamis@gmail.com', 'dunamis', '$2y$10$sm0TlAJYVhkStbfcHVfUXezZif/379b3BNlWhLbDrqIMESBYOVv4S'),
(13, 'John', 'jjj', 'abubakarsaleh59079@gmail.com', 'james', '$2y$10$Wl1gHwkiXDSl2WQsioxsnuw8YB2U2JpBa1n3ne3Fj2nWvEy3xTp9G'),
(14, 'Sadiq', 'Abubakar', 'abk@gmail.com', 'sadiq01', '$2y$10$wY5Sa0DgoO6M7odGWWRAKejFqUSs.AcGjtGtYvMaFQBVqA9rQmX.m'),
(15, 'Zubathy', 'john', 'j@gmail.com', 'sirzubathy', '$2y$10$cCV9vPTPJT9wEKOzCRwhEuwrUQALsnEdLg1sapXNzDXLdm4FDDSFS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth`
--
ALTER TABLE `birth`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `death`
--
ALTER TABLE `death`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth`
--
ALTER TABLE `birth`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `death`
--
ALTER TABLE `death`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
