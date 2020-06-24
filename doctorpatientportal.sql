-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 05:35 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctorpatientportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `designation` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `photo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`, `first_name`, `last_name`, `gender`, `designation`, `email`, `address`, `contact_no`, `created_at`, `photo`) VALUES
(1, 'Porag', 'porag1', 'Faisal', 'Porag', 'Male', 'Super admin', 'faisal.porag@yahoo.com', 'Khilkhet,Dhaka', '01741337720', '2016-08-19 20:57:49', NULL),
(3, 'Parves', 'admin2', 'Nazmus', 'Sakib', 'Male', 'Admin', 'parves@gmail.com', 'Mirpur,Dhaka', '01723462142', '2016-08-19 20:59:48', NULL),
(4, 'admin', 'admin', 'Admin', 'Admin', 'Male', 'Admin', 'admin@admin.com', 'Dhaka', '01721212112', '2016-08-19 21:15:36', NULL),
(5, 'Newaj', '132', 'Newaj', 'Shuvo', 'Male', 'Admin', 'shahriar@hotmail.com', 'Khilkhet,Dhaka-1229', '01773758389', '2016-08-25 14:24:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `appoint_date` varchar(50) NOT NULL,
  `appoint_time` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `is_pescribed` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctor_id`, `appoint_date`, `appoint_time`, `status`, `patient_id`, `created_at`, `is_active`, `is_pescribed`) VALUES
(20, 3, '2018-10-09', '11:00 am', 'available', 0, '2018-10-09 00:17:36', 1, 0),
(23, 3, '2018-10-14', '11:00 am', 'available', 0, '2018-10-12 11:52:55', 1, 0),
(25, 3, '2018-10-12', '01:00 pm', 'available', 0, '2018-10-12 11:52:37', 1, 0),
(27, 3, '2018-10-12', '09:00 am', 'booked', 1, '2018-10-12 11:52:37', 1, 1),
(28, 5, '2018-10-12', '01:00 pm', 'booked', 1, '2018-10-12 11:52:37', 1, 1),
(30, 3, '2018-11-23', '03:00 pm', 'available', 0, '2018-11-22 21:39:09', 1, 0),
(31, 3, '2018-11-23', '04:30 pm', 'available', 0, '2018-11-22 21:39:24', 1, 0),
(32, 3, '2018-11-24', '10:30 am', 'available', 0, '2018-11-22 21:39:37', 1, 0),
(33, 5, '2018-11-23', '11:00 am', 'available', 0, '2018-11-22 21:40:58', 1, 0),
(34, 5, '2018-11-23', '10:00 am', 'booked', 11, '2018-11-22 21:41:09', 1, 0),
(35, 5, '2018-11-23', '04:00 pm', 'available', 0, '2018-11-22 21:41:21', 1, 0),
(36, 5, '2018-11-24', '09:00 am', 'available', 11, '2018-11-22 21:41:30', 1, 0),
(37, 7, '2018-11-23', '10:00 am', 'available', 11, '2018-11-22 21:42:05', 1, 0),
(38, 7, '2018-11-23', '11:00 am', 'available', 0, '2018-11-22 21:42:14', 1, 0),
(39, 7, '2018-11-23', '12:30 pm', 'booked', 11, '2018-11-22 21:42:23', 1, 0),
(40, 7, '2018-11-23', '03:30 pm', 'available', 0, '2018-11-22 21:42:35', 1, 0),
(41, 7, '2018-11-24', '09:00 am', 'available', 0, '2018-11-22 21:42:41', 1, 0),
(42, 7, '2018-11-24', '10:30 am', 'available', 0, '2018-11-22 21:42:51', 1, 0),
(43, 4, '2018-11-23', '05:00 pm', 'available', 0, '2018-11-22 21:45:33', 1, 0),
(44, 4, '2018-11-23', '05:30 pm', 'available', 0, '2018-11-22 21:45:41', 1, 0),
(45, 4, '2018-11-23', '06:00 pm', 'available', 0, '2018-11-22 21:45:51', 1, 0),
(46, 4, '2018-11-25', '12:00 pm', 'available', 0, '2018-11-22 21:46:00', 1, 0),
(47, 4, '2018-11-25', '01:00 pm', 'available', 0, '2018-11-22 21:46:11', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_bookings`
--

CREATE TABLE `appointment_bookings` (
  `id` int(11) NOT NULL,
  `doctors_id` int(11) DEFAULT NULL,
  `doctor_name` varchar(30) DEFAULT NULL,
  `patients_id` int(11) DEFAULT NULL,
  `patient_name` varchar(30) NOT NULL,
  `appointment_schedule_id` int(11) DEFAULT NULL,
  `diseases_description` varchar(30) DEFAULT NULL,
  `appointment_datetime_start` datetime DEFAULT NULL,
  `appointment_datetime_end` datetime DEFAULT NULL,
  `book_status` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_schedule`
--

CREATE TABLE `appointment_schedule` (
  `id` int(11) NOT NULL,
  `doctors_id` int(11) NOT NULL,
  `doctor_name` varchar(30) DEFAULT NULL,
  `working_days` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `appoint_list`
--

CREATE TABLE `appoint_list` (
  `id` int(11) NOT NULL,
  `appointment_id` int(11) NOT NULL,
  `patients_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `ap_date` varchar(100) NOT NULL,
  `ap_time` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appoint_list`
--

INSERT INTO `appoint_list` (`id`, `appointment_id`, `patients_id`, `doctor_id`, `ap_date`, `ap_time`, `created_at`, `is_active`) VALUES
(3, 3, 2, 5, '2016-08-29', '10:00 am', '2016-08-30 12:25:21', 1),
(6, 4, 2, 3, '2016-08-30', '12:00 pm', '2016-08-30 15:22:10', 1),
(7, 12, 1, 4, '2018-05-25', '9:00 am', '2018-09-11 22:38:17', 1),
(8, 21, 1, 3, '2018-10-11', '11:20 pm', '2018-10-11 22:40:16', 1),
(10, 27, 1, 3, '2018-10-12', '09:00 am', '2018-10-12 12:00:39', 1),
(11, 28, 1, 5, '2018-10-12', '01:00 pm', '2018-10-12 21:54:30', 1),
(17, 24, 1, 3, '2018-10-13', '4:00 pm', '2018-10-12 23:54:16', 1),
(18, 29, 1, 3, '2018-11-02', '11:30 am', '2018-11-01 23:57:02', 1),
(19, 34, 11, 5, '2018-11-23', '10:00 am', '2018-11-22 21:44:01', 1),
(22, 39, 11, 7, '2018-11-23', '12:30 pm', '2018-11-22 22:02:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `complain_history`
--

CREATE TABLE `complain_history` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `complain_title` varchar(100) DEFAULT NULL,
  `complain_details` varchar(1000) DEFAULT NULL,
  `patient_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `specialty` varchar(250) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `education_qualification` varchar(1000) DEFAULT NULL,
  `experience` int(11) DEFAULT '0',
  `photo` varchar(300) DEFAULT NULL,
  `is_active` tinyint(2) NOT NULL DEFAULT '1',
  `visit_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `first_name`, `last_name`, `user_name`, `password`, `gender`, `email`, `specialty`, `address`, `contact_no`, `created_at`, `education_qualification`, `experience`, `photo`, `is_active`, `visit_fees`) VALUES
(3, 'Faisal', 'Porag', 'porag', '1234', 'Male', 'porag_faisal123@gmail.com', 'Cardiologist', 'Khilkhet,Dhaka, Bangladesh', '01741337720', '2016-08-20 22:35:04', NULL, 0, NULL, 1, 0),
(4, 'Nazmus', 'Sakib', 'sakib', '1234', 'Male', 'parves@gmail.com', 'Emergency physician', 'Dhaka, Bangladesh', '01745236521', '2016-08-20 23:05:20', NULL, 0, NULL, 1, 0),
(5, 'Newaj', 'Shahriar', 'shuvo', '12365', 'Male', 'shuvo@hotmail.com', 'Dentist', 'Khilkhet,Dhaka, Bangladesh', '01623542652', '2016-08-20 23:25:52', NULL, 0, NULL, 1, 0),
(7, 'Fatema', 'Tuz', 'tuz', '3333', 'Female', 'fatema@gmail.com', 'Anesthesiologist', 'Khilkhet,Dhaka, Bangladesh', '01821452123', '2016-08-24 14:19:34', NULL, 0, NULL, 1, 0),
(10, 'Kaniz', 'Fatima', 'Kanon', '', 'Female', 'kanon@gmail.com', 'Dentist', 'Rangpur, Bangladesh', '01714692976', '2016-08-30 21:04:46', NULL, 0, NULL, 1, 0),
(11, 'Basirul', 'Islam', 'sourav', '', 'Male', 'basirul@gmail.com', 'Diabetologist', 'Rangpur, Bangladesh', '01923548521', '2016-08-30 21:07:35', NULL, 0, NULL, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `organ`
--

CREATE TABLE `organ` (
  `id` int(11) NOT NULL,
  `organ_name` varchar(30) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organ`
--

INSERT INTO `organ` (`id`, `organ_name`, `created_at`) VALUES
(1, 'Heart', '2016-08-19 21:06:28'),
(2, 'Lung', '2016-08-19 21:06:28'),
(3, 'Kidney', '2016-08-19 21:07:03'),
(4, 'Liver', '2016-08-19 21:07:03'),
(5, 'Pancreas', '2016-08-19 21:07:37'),
(6, 'Eye tissue', '2016-08-19 21:07:37'),
(7, 'Bone', '2016-08-19 21:08:00'),
(8, 'Skin', '2016-08-19 21:08:00'),
(9, 'Heart tissue', '2016-08-19 21:08:34');

-- --------------------------------------------------------

--
-- Table structure for table `organ_donar`
--

CREATE TABLE `organ_donar` (
  `id` int(11) NOT NULL,
  `organ_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `address` varchar(30) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `organname` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(2) NOT NULL DEFAULT '1',
  `purpose_of_donate` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organ_donar`
--

INSERT INTO `organ_donar` (`id`, `organ_id`, `name`, `gender`, `email`, `blood_group`, `address`, `contact_no`, `organname`, `created_at`, `is_active`, `purpose_of_donate`) VALUES
(3, 1, 'Rasel', 'Male', 'rasel@gamil.com', 'B+', 'Mirpur,Dhaka', '01711111111', 'Heart', '2016-08-24 16:09:34', 1, NULL),
(4, 2, 'Raju Sarker', 'Male', 'raju@gamil.com', 'A-', 'Monipur', '01742222222', ' Lung', '2016-08-26 17:36:24', 1, NULL),
(10, 6, 'Nila sarker', 'Female', 'nila@yahoo.com', 'A+', 'Dhaka, Bangladesh', '01742222222', 'Eye tissue', '2016-08-28 13:16:06', 1, NULL),
(11, 5, 'Mila', 'Female', 'mila@gmail.com', 'O-', 'Khilkhet,Dhaka, Bangladesh', '01821452123', 'Pancreas', '2016-08-28 13:18:37', 1, NULL),
(14, 7, 'Mithun', 'Male', 'mithun@gmail.com', 'AB-', 'Dhaka, Bangladesh', '01821452123', 'Bone', '2016-08-28 14:08:21', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `blood_group` varchar(100) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `contact_no` varchar(15) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `age` int(11) DEFAULT NULL,
  `is_active` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `user_name`, `password`, `gender`, `email`, `blood_group`, `address`, `contact_no`, `created_at`, `age`, `is_active`) VALUES
(1, 'Jhon', 'jhon', '123', 'male', 'jhon@gmail.com', 'O-', 'Uttara,Dkaha', '01623254123', '2016-08-24 14:09:34', NULL, 1),
(2, 'Mithun', 'mithun', '123456', 'Male', 'mithun@gmail.com', 'AB-', 'Dhaka, Bangladesh', '01821452123', '2016-08-26 22:44:07', NULL, 1),
(5, 'Shamsul Huda', 'roni ', 'Aa123', 'Male', 'roni@aiub.edu', 'O+', 'Khilkhet,Dhaka, Bangladesh', '01821563254', '2016-08-30 13:43:50', NULL, 1),
(7, 'Zamil Hasan', 'hasan', 'Zamil1', 'Male', 'zamil@yahoo.com', 'A-', 'Dhaka, Bangladesh', '01752365214', '2016-08-30 17:37:32', NULL, 1),
(8, 'Sam shuvo', 'username', 'Abcd1', 'Male', 'abc@gmail.com', 'AB+', 'no need', '0165498', '2016-08-30 19:38:08', NULL, 1),
(9, 'Kamol', 'kk', 'Abal123456', 'Male', 'kamol@gmail.com', 'AB-', 'Dhaka, Bangladesh', '01741337720', '2018-09-28 14:30:09', NULL, 1),
(10, 'Jamil', 'jam', 'Aval123456', 'Male', 'ja@gmail.com', 'AB+', 'Dhaka, Bangladesh', '01745236521', '2018-09-28 14:32:07', NULL, 1),
(11, 'Porag', 'fporag', 'Porag123', 'Male', 'porag@bdjobs.com', 'O+', 'Dhaka, Bangladesh', '01741337720', '2018-11-22 21:34:03', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `treatment_history`
--

CREATE TABLE `treatment_history` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `treatment_for` varchar(30) DEFAULT NULL,
  `treatment` varchar(30) DEFAULT NULL,
  `note` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dname` varchar(150) DEFAULT NULL,
  `is_active` tinyint(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_history`
--

INSERT INTO `treatment_history` (`id`, `patient_id`, `doctor_id`, `treatment_for`, `treatment`, `note`, `created_at`, `dname`, `is_active`) VALUES
(5, 1, 3, 'Skin fungal infection', 'miconazole daily 2 pics.1 afte', '1 month later meet again with this prescription  ', '2018-10-12 20:09:31', NULL, 1),
(6, 1, 5, 'Dental plaque', 'Get proper medicine', 'Brush thoroughly at least twice a day to remove plaque from all surfaces of your teeth', '2018-10-12 21:57:41', NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_bookings`
--
ALTER TABLE `appointment_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_schedule`
--
ALTER TABLE `appointment_schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoint_list`
--
ALTER TABLE `appoint_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain_history`
--
ALTER TABLE `complain_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organ`
--
ALTER TABLE `organ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organ_donar`
--
ALTER TABLE `organ_donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_history`
--
ALTER TABLE `treatment_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `appointment_bookings`
--
ALTER TABLE `appointment_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointment_schedule`
--
ALTER TABLE `appointment_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appoint_list`
--
ALTER TABLE `appoint_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `complain_history`
--
ALTER TABLE `complain_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `organ`
--
ALTER TABLE `organ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `organ_donar`
--
ALTER TABLE `organ_donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `treatment_history`
--
ALTER TABLE `treatment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
