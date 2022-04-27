-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2018 at 05:56 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
CREATE TABLE `Feedback` (
  `email` varchar(60) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `admin` (
  `id` int(8) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `userlevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `userlevel`) VALUES
(3, 'rocky123', 'rocky', 'rocky@gmail.com', 0) , (1, 'Uzzal Rahman', 'hackit', 'uzzal.ewu16@gmail.com', 0),(2, 'swarup', 'swarup007', 'swarup@gmail.com', 0);

-- --------------------------------------------------------
--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(10) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `division` varchar(100) NOT NULL,
  `district` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `body_type` text NOT NULL,
  `physical_status` text NOT NULL,
  `drink` varchar(8) NOT NULL,
  `mothertounge` text NOT NULL,
  `colour` varchar(20) NOT NULL,
  `weight` int(5) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `diet` varchar(8) NOT NULL,
  `smoke` varchar(8) NOT NULL,
  `dateofbirth` date NOT NULL,
  `occupation` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `fathers_occupation` varchar(20) NOT NULL,
  `mothers_occupation` varchar(20) NOT NULL,
  `no_bro` int(5) NOT NULL,
  `no_sis` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `profilecreationdate` date NOT NULL,
`image` varchar(200)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) NOT NULL,
  `cust_id` int(5) NOT NULL,
  `email` varchar(60) NOT NULL,
  `age` varchar(10) NOT NULL,
  `height` int(10) NOT NULL,
  `sex` varchar(6) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `division` varchar(100) NOT NULL,
  `district` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `education` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `body_type` text NOT NULL,
  `physical_status` text NOT NULL,
  `drink` varchar(8) NOT NULL,
  `mothertounge` text NOT NULL,
  `colour` varchar(20) NOT NULL,
  `weight` int(5) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `diet` varchar(8) NOT NULL,
  `smoke` varchar(8) NOT NULL,
  `dateofbirth` date NOT NULL,
  `occupation` text NOT NULL,
  `annual_income` varchar(20) NOT NULL,
  `fathers_occupation` varchar(20) NOT NULL,
  `mothers_occupation` varchar(20) NOT NULL,
  `no_bro` int(5) NOT NULL,
  `no_sis` int(5) NOT NULL,
  `aboutme` text NOT NULL,
  `profilecreationdate` date NOT NULL,
`image` varchar(200)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `email`, `age`, `height`, `sex`, `religion`, `division`, `district`, `country`, `maritalstatus`, `education`, `firstname`, `lastname`, `phonenumber`, `body_type`, `physical_status`, `drink`, `mothertounge`, `colour`, `weight`, `blood_group`, `diet`, `smoke`, `dateofbirth`, `occupation`, `annual_income`, `fathers_occupation`, `mothers_occupation`, `no_bro`, `no_sis`, `aboutme`, `profilecreationdate`,`image`) VALUES
(101, 1, 'uzzal@gmail.com', '25', 0, 'Male', 'Muslim', 'Dhaka', 'Dhaka', 'bangladesh', 'Single', 'Primary', 'uzzal', 'rahman', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1995-01-10', '', '', '', '', 1, 1, '', '2021-07-24',''),
(103, 3, 'SRK@gmail.com', '56', 0, 'Male', 'Muslim', 'Mumbai', 'Mumbai', 'India', 'Married', 'Primary', ' Shahrukh', 'Khan', 0, 'Slim', 'No Problem', 'yes', '', 'Fair', 0, 'O +ve', 'Non-Veg', 'yes', '1965-11-02', '', '', '', '', 1, 1, '', '2021-07-24',''),
(105, 5, 'sallu@gmail.com', '56', 0, 'Male', 'Muslim', 'Mumbai', 'Mumbai', 'India', 'Single', 'Primary', 'Salman', 'Khan', 0, 'Slim', 'No Problem', 'yes', '', 'Fair', 0, 'O +ve', 'Non-Veg', 'yes', '1965-12-27', '', '', '', '', 1, 1, '', '2021-07-24',''),
(107, 7, 'Nazriya@gmail.com', '26', 0, 'Female', 'Muslim', 'Kerala', 'Kerala', 'India', 'Married', 'Primary', 'Nazriya', 'Nazim', 0, 'Slim', 'No Problem', 'yes', '', 'fair', 0, 'O +ve', 'Veg', 'yes', '1994-12-20', '', '', '', '', 1, 1, '', '2021-07-24',''),
(111, 11, 'user3@gmail.com', '18', 0, 'Female', 'Muslim', 'Dhaka', 'Dhaka', 'bangladesh', 'Married', 'Primary', 'User', 'E', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1996-02-20', '', '', '', '', 1, 1, '', '2021-07-24',''),
(113, 13, 'rocky@gmail.com', '27', 0, 'Male', 'Muslim', 'Dhaka', 'Dhaka', 'bangladesh', 'Single', 'Primary', 'mehatub', 'rocky', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1996-05-01', '', '', '', '', 1, 1, '', '2021-07-24',''),
(117, 17, 'user5@gmail.com', '21', 0, 'Female', 'Muslim', 'Dhaka', 'Dhaka', 'bangladesh', 'Married', 'Primary', 'User', 'UU', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1996-02-20', '', '', '', '', 1, 1, '', '2021-07-24',''),
(119, 19, 'user6@gmail.com', '19', 0, 'Male', 'Muslim', 'Dhaka', 'Dhaka', 'bangladesh', 'Single', 'Primary', 'User', 'SS', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1996-05-01', '', '', '', '', 1, 1, '', '2021-07-24',''),
(123, 23, 'user7@gmail.com', '29', 0, 'Female', 'Muslim', 'Dhaka', 'Dhaka', 'bangladesh', 'Married', 'Primary', 'User', 'EE', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1996-02-20', '', '', '', '', 1, 1, '', '2021-07-24',''),
(129, 29, 'user8@gmail.com', '36', 0, 'Male', 'Muslim', 'Dhaka', 'Dhaka', 'bangladesh', 'Single', 'Primary', 'User', 'RR', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1996-05-01', '', '', '', '', 1, 1, '', '2021-07-24',''),
(131, 31, 'user9@gmail.com', '34', 0, 'Female', 'Muslim', 'Dhaka', 'Dhaka', 'bangladesh', 'Married', 'Primary', 'User', 'UUU', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1996-02-20', '', '', '', '', 1, 1, '', '2021-07-24',''),
(137, 37, 'swarup@gmail.com', '27', 0, 'Male', 'Hindu', 'Dhaka', 'Dhaka', 'bangladesh', 'Married', 'Primary', 'Swarup', 'Mondol', 0, 'Slim', 'No Problem', 'yes', '', 'Dark', 0, 'O +ve', 'Veg', 'yes', '1996-02-20', '', '', '', '', 1, 1, '', '2021-07-24','');



-- --------------------------------------------------------

--
-- Table structure for table `partnerprefs`
--

CREATE TABLE `partnerprefs` (
  `id` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `agemin` varchar(3) NOT NULL,
  `agemax` int(3) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `height` int(3) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `subcaste` varchar(20) NOT NULL,
  `mothertounge` varchar(20) NOT NULL,
  `education` varchar(30) NOT NULL,
  `occupation` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `descr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partnerprefs`
--

INSERT INTO `partnerprefs` (`id`, `custId`, `agemin`, `agemax`, `maritalstatus`, `complexion`, `height`, `diet`, `religion`, `caste`, `subcaste`, `mothertounge`, `education`, `occupation`, `country`, `descr`) VALUES
(6, 15, '30', 31, 'Single', '', 21, 'Veg', 'Not Applicable', '', '', '', 'Primary', 'anything', 'Not Applicable', '				    				good		    		'),
(7, 16, '', 0, '', '', 0, '', '', '', '', '', '', '', '', ''),
(8, 17, '', 0, '', '', 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) NOT NULL,
  `cust_id` int(10) NOT NULL,
  `pic1` varchar(200) NOT NULL,
  `pic2` varchar(200),
  `pic3` varchar(200),
  `pic4` varchar(200)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photos`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `profilestat` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(5) NOT NULL,
  `userlevel` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profilestat`, `username`, `password`, `email`, `dateofbirth`, `gender`, `userlevel`)
VALUES 
(1, 0, 'Uzzal Rahman', 'hackit', 'user1@gmail.com', '1995-01-10', 'Male', 0),
(3, 0, 'user4', 'user4', 'user2@gmail.com', '1997-01-10', 'Female', 0),
(5, 0, 'user10', 'user10', 'user3@gmail.com', '1995-01-10', 'Male', 0),
(7, 0, 'user2', 'user2', 'user2@gmail.com', '1997-01-10', 'Female', 0),
(11, 0, 'user3', 'user3', 'user3@gmail.com', '1995-01-10', 'Male', 0),
(13, 0, 'Mehatub', 'rocky', 'rocky@gmail.com', '1995-01-10', 'Male', 0),
(17, 0, 'user5', 'user5', 'user3@gmail.com', '1995-01-10', 'Male', 0),
(19, 0, 'user6', 'user6', 'user2@gmail.com', '1997-01-10', 'Female', 0),
(23, 0, 'user7', 'user7', 'user3@gmail.com', '1995-01-10', 'Male', 0),
(29, 0, 'user8', 'user8', 'user2@gmail.com', '1997-01-10', 'Female', 0),
(31, 0, 'user9', 'user9', 'user3@gmail.com', '1995-01-10', 'Male', 0),
(37, 0, 'Swarup', 'swarup', 'swarup@gmail.com', '1995-01-10', 'Male', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `custId` (`custId`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cust_id` (`cust_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `partnerprefs`
--
ALTER TABLE `partnerprefs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

ALTER TABLE `admin`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
