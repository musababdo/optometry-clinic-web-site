-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2021 at 10:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ohmsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `appointmentdate` varchar(20) NOT NULL,
  `appointmenttime` varchar(20) NOT NULL,
  `app_reason` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rightdis_id` int(11) DEFAULT NULL,
  `rightred_id` int(11) DEFAULT NULL,
  `leftdis_id` int(11) DEFAULT NULL,
  `leftred_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `appointmentdate`, `appointmenttime`, `app_reason`, `user_id`, `rightdis_id`, `rightred_id`, `leftdis_id`, `leftred_id`, `status`) VALUES
(8, '2021-11-27', '00:24', 'gjgjgjgjgjgiiyit', 1, 5, 5, 5, 5, 0),
(9, '2021-12-16', '00:20', 'hfff', 5, 6, 6, 6, 6, 0),
(10, '2021-12-22', '02:12', 'hkmlkjj', 5, 7, 7, 7, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `leftdis`
--

CREATE TABLE `leftdis` (
  `id` int(11) NOT NULL,
  `sph` double NOT NULL,
  `cyl` double NOT NULL,
  `ax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leftdis`
--

INSERT INTO `leftdis` (`id`, `sph`, `cyl`, `ax`) VALUES
(5, 3.3, 3.3, 3.3),
(6, 4.3, 3.4, 5.4),
(7, 7.9, 9, 4.3);

-- --------------------------------------------------------

--
-- Table structure for table `leftred`
--

CREATE TABLE `leftred` (
  `id` int(11) NOT NULL,
  `sph` double NOT NULL,
  `cyl` double NOT NULL,
  `ax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leftred`
--

INSERT INTO `leftred` (`id`, `sph`, `cyl`, `ax`) VALUES
(5, 3.3, 3.3, 3.3),
(6, 3.1, 2.2, 1.7),
(7, 3.2, 2.1, 1.7);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`, `phone`, `email`) VALUES
(1, 'tasneem', '123', '0962883311', 'taso@gmail.com'),
(5, 'aya', '123', '09123456789', 'aya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rightdis`
--

CREATE TABLE `rightdis` (
  `id` int(11) NOT NULL,
  `sph` double NOT NULL,
  `cyl` double NOT NULL,
  `ax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rightdis`
--

INSERT INTO `rightdis` (`id`, `sph`, `cyl`, `ax`) VALUES
(5, 3.3, 3.3, 3.4),
(6, 5.3, 1.1, 3.6),
(7, 8, 9, 3.4);

-- --------------------------------------------------------

--
-- Table structure for table `rightred`
--

CREATE TABLE `rightred` (
  `id` int(11) NOT NULL,
  `sph` double NOT NULL,
  `cyl` double NOT NULL,
  `ax` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rightred`
--

INSERT INTO `rightred` (`id`, `sph`, `cyl`, `ax`) VALUES
(5, 3.3, 3.3, 3.3),
(6, 7.7, 8.9, 6.7),
(7, 7.8, 8.7, 5.5);

-- --------------------------------------------------------

--
-- Table structure for table `theshow`
--

CREATE TABLE `theshow` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theshow`
--

INSERT INTO `theshow` (`id`, `name`, `price`, `image`) VALUES
(54, 'سامس', 4447, '525918_525918_neymar_suarez_messi.jpg'),
(56, 'mosab', 3700, '1181696-24721199-640-360.jpg');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vappointment`
-- (See below for the actual view)
--
CREATE TABLE `vappointment` (
`id` int(11)
,`name` varchar(50)
,`phone` varchar(15)
,`email` varchar(50)
,`appointmentdate` varchar(20)
,`appointmenttime` varchar(20)
,`app_reason` varchar(100)
,`rightdis_sph` double
,`rightdis_cyl` double
,`rightdis_ax` double
,`rightred_sph` double
,`rightred_cyl` double
,`rightred_ax` double
,`leftdis_sph` double
,`leftdis_cyl` double
,`leftdis_ax` double
,`leftred_sph` double
,`leftred_cyl` double
,`leftred_ax` double
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vname`
-- (See below for the actual view)
--
CREATE TABLE `vname` (
`id` int(11)
,`name` varchar(50)
,`phone` varchar(15)
,`email` varchar(50)
,`appointmentdate` varchar(20)
,`appointmenttime` varchar(20)
,`app_reason` varchar(100)
,`status` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `vappointment`
--
DROP TABLE IF EXISTS `vappointment`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vappointment`  AS  select `appointment`.`id` AS `id`,`login`.`name` AS `name`,`login`.`phone` AS `phone`,`login`.`email` AS `email`,`appointment`.`appointmentdate` AS `appointmentdate`,`appointment`.`appointmenttime` AS `appointmenttime`,`appointment`.`app_reason` AS `app_reason`,`rightdis`.`sph` AS `rightdis_sph`,`rightdis`.`cyl` AS `rightdis_cyl`,`rightdis`.`ax` AS `rightdis_ax`,`rightred`.`sph` AS `rightred_sph`,`rightred`.`cyl` AS `rightred_cyl`,`rightred`.`ax` AS `rightred_ax`,`leftdis`.`sph` AS `leftdis_sph`,`leftdis`.`cyl` AS `leftdis_cyl`,`leftdis`.`ax` AS `leftdis_ax`,`leftred`.`sph` AS `leftred_sph`,`leftred`.`cyl` AS `leftred_cyl`,`leftred`.`ax` AS `leftred_ax`,`appointment`.`status` AS `status` from (((((`appointment` join `login` on(`appointment`.`user_id` = `login`.`id`)) join `rightdis` on(`appointment`.`rightdis_id` = `rightdis`.`id`)) join `rightred` on(`appointment`.`rightred_id` = `rightred`.`id`)) join `leftdis` on(`appointment`.`leftdis_id` = `leftdis`.`id`)) join `leftred` on(`appointment`.`leftred_id` = `leftred`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `vname`
--
DROP TABLE IF EXISTS `vname`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vname`  AS  select `appointment`.`id` AS `id`,`login`.`name` AS `name`,`login`.`phone` AS `phone`,`login`.`email` AS `email`,`appointment`.`appointmentdate` AS `appointmentdate`,`appointment`.`appointmenttime` AS `appointmenttime`,`appointment`.`app_reason` AS `app_reason`,`appointment`.`status` AS `status` from (`appointment` join `login` on(`appointment`.`user_id` = `login`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `rightdis_id` (`rightdis_id`),
  ADD KEY `rightred_id` (`rightred_id`),
  ADD KEY `leftdis_id` (`leftdis_id`),
  ADD KEY `leftred_id` (`leftred_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leftdis`
--
ALTER TABLE `leftdis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leftred`
--
ALTER TABLE `leftred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rightdis`
--
ALTER TABLE `rightdis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rightred`
--
ALTER TABLE `rightred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theshow`
--
ALTER TABLE `theshow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `leftdis`
--
ALTER TABLE `leftdis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `leftred`
--
ALTER TABLE `leftred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rightdis`
--
ALTER TABLE `rightdis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rightred`
--
ALTER TABLE `rightred`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `theshow`
--
ALTER TABLE `theshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`rightdis_id`) REFERENCES `rightdis` (`id`),
  ADD CONSTRAINT `appointment_ibfk_3` FOREIGN KEY (`rightred_id`) REFERENCES `rightred` (`id`),
  ADD CONSTRAINT `appointment_ibfk_4` FOREIGN KEY (`leftdis_id`) REFERENCES `leftdis` (`id`),
  ADD CONSTRAINT `appointment_ibfk_5` FOREIGN KEY (`leftred_id`) REFERENCES `leftred` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
