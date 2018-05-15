-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2018 at 11:33 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `linkme`
--

-- --------------------------------------------------------

--
-- Table structure for table `donation_dates`
--

CREATE TABLE IF NOT EXISTS `donation_dates` (
  `last_donation_date` int(11) NOT NULL DEFAULT '0',
  `storing_time_date` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `number` varchar(20) NOT NULL,
  PRIMARY KEY (`last_donation_date`,`number`),
  KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donator_comments`
--

CREATE TABLE IF NOT EXISTS `donator_comments` (
  `number` varchar(20) NOT NULL,
  `comment` text,
  `member_id` int(11) DEFAULT NULL,
  `storing_comment_time_date` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`storing_comment_time_date`,`number`),
  KEY `number` (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `member_id` int(11) NOT NULL DEFAULT '0',
  `friend_id` int(11) NOT NULL DEFAULT '0',
  `relation_type` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`member_id`,`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friendship`
--

CREATE TABLE IF NOT EXISTS `friendship` (
  `friend1` int(11) NOT NULL,
  `friend2` int(11) NOT NULL,
  `date_added` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`friend1`,`friend2`),
  KEY `friend2` (`friend2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friend_requests`
--

CREATE TABLE IF NOT EXISTS `friend_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  PRIMARY KEY (`id`,`user_from`,`user_to`),
  KEY `user_from` (`user_from`),
  KEY `user_to` (`user_to`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `post_number` int(11) NOT NULL,
  `liker_id` int(11) NOT NULL,
  `liker_name` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`post_number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `full_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `home_town` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `marital_status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logged_in` int(11) DEFAULT NULL,
  `about_me` text COLLATE utf8_unicode_ci,
  `profile_pic` varchar(300) COLLATE utf8_unicode_ci DEFAULT 'NULL',
  `friend_array` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `first_name`, `last_name`, `full_name`, `password`, `email`, `phone_number`, `gender`, `birth_date`, `home_town`, `marital_status`, `logged_in`, `about_me`, `profile_pic`, `friend_array`) VALUES
(1, 'Esraa', 'Hefny', 'Esraa Hefny', '123456', 'esraahefny3@gmail.com', '0122391842', 'femail', '1-7-1994', NULL, NULL, NULL, 'j,sbdkjsd', 'NULL', NULL),
(2, 'esraa', 'hefny', 'esraa hefny', '1234', 'esraahefny3333@hotmail.com', '1234', 'female', '', NULL, NULL, NULL, '', 'NULL', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `operations`
--

CREATE TABLE IF NOT EXISTS `operations` (
  `patient_name` varchar(100) NOT NULL,
  `national_id_of_patient` varchar(20) NOT NULL DEFAULT '',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `responsor_name` varchar(100) NOT NULL,
  `number_of_responsor` varchar(20) NOT NULL,
  `report_of_patient` text NOT NULL,
  `hospital` text,
  `report_of_requirements` text NOT NULL,
  `patient_gender` varchar(6) NOT NULL DEFAULT 'male',
  `patient_blood_type` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`national_id_of_patient`,`add_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `operations_donators`
--

CREATE TABLE IF NOT EXISTS `operations_donators` (
  `national_id_of_patient` varchar(20) NOT NULL DEFAULT '',
  `national_id_of_donator` varchar(20) NOT NULL DEFAULT '',
  `add_time` int(11) NOT NULL DEFAULT '0',
  `donator_name` varchar(200) NOT NULL,
  `donator_blood_type` varchar(3) DEFAULT NULL,
  `donator_number` varchar(20) NOT NULL,
  `donator_gender` varchar(6) NOT NULL DEFAULT 'male',
  PRIMARY KEY (`national_id_of_patient`,`national_id_of_donator`,`add_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ourdata`
--

CREATE TABLE IF NOT EXISTS `ourdata` (
  `name` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `blood_type` varchar(3) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `gender` varchar(6) NOT NULL DEFAULT 'male',
  `member_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_number` int(11) NOT NULL AUTO_INCREMENT,
  `poster_member_id` int(11) NOT NULL,
  `profile_member_id` int(11) NOT NULL,
  `caption` text COLLATE utf8_unicode_ci,
  `post_pic` text COLLATE utf8_unicode_ci NOT NULL,
  `public_private` int(11) NOT NULL,
  `poster_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_date` int(11) NOT NULL,
  PRIMARY KEY (`post_number`),
  KEY `poster_member_id` (`poster_member_id`),
  KEY `profile_member_id` (`profile_member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_dates`
--
ALTER TABLE `donation_dates`
  ADD CONSTRAINT `donation_dates_ibfk_1` FOREIGN KEY (`number`) REFERENCES `ourdata` (`number`) ON DELETE CASCADE;

--
-- Constraints for table `donator_comments`
--
ALTER TABLE `donator_comments`
  ADD CONSTRAINT `donator_comments_ibfk_1` FOREIGN KEY (`number`) REFERENCES `ourdata` (`number`) ON DELETE CASCADE;

--
-- Constraints for table `friendship`
--
ALTER TABLE `friendship`
  ADD CONSTRAINT `friendship_ibfk_1` FOREIGN KEY (`friend1`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `friendship_ibfk_2` FOREIGN KEY (`friend2`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `friend_requests`
--
ALTER TABLE `friend_requests`
  ADD CONSTRAINT `friend_requests_ibfk_1` FOREIGN KEY (`user_from`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `friend_requests_ibfk_2` FOREIGN KEY (`user_to`) REFERENCES `member` (`member_id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_number`) REFERENCES `posts` (`post_number`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`poster_member_id`) REFERENCES `member` (`member_id`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`profile_member_id`) REFERENCES `member` (`member_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
