-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 07:50 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msme`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE `certificate` (
  `c_id` longtext NOT NULL,
  `aadhar_no` longtext NOT NULL,
  `e_name` longtext NOT NULL,
  `category` longtext NOT NULL,
  `gender` longtext NOT NULL,
  `physi_handy` longtext NOT NULL,
  `b_name` longtext NOT NULL,
  `org_type` longtext NOT NULL,
  `pan_no` longtext NOT NULL,
  `plant_address` longtext NOT NULL,
  `office_address` longtext NOT NULL,
  `mob_no` longtext NOT NULL,
  `email_id` longtext NOT NULL,
  `commence_date` longtext NOT NULL,
  `acc_no` longtext NOT NULL,
  `ifsc` longtext NOT NULL,
  `business_activity` longtext NOT NULL,
  `nic` longtext NOT NULL,
  `business_details` longtext NOT NULL,
  `no_of_emp` longtext NOT NULL,
  `investment` longtext NOT NULL,
  `attachment` longtext NOT NULL,
  `sub_date_time` longtext NOT NULL,
  `o_id` longtext NOT NULL,
  `app_date_time` longtext NOT NULL,
  `enterprise_type` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grievance`
--

CREATE TABLE `grievance` (
  `g_id` longtext NOT NULL,
  `f_name` longtext NOT NULL,
  `l_name` longtext NOT NULL,
  `email_id` longtext NOT NULL,
  `mob_no` longtext NOT NULL,
  `description` longtext NOT NULL,
  `date` longtext NOT NULL,
  `status` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` longtext NOT NULL,
  `date` longtext NOT NULL,
  `time` longtext NOT NULL,
  `aadhar_no` longtext NOT NULL,
  `e_name` longtext NOT NULL,
  `category` longtext NOT NULL,
  `gender` longtext NOT NULL,
  `physi_handy` longtext NOT NULL,
  `b_name` longtext NOT NULL,
  `org_type` longtext NOT NULL,
  `pan_no` longtext NOT NULL,
  `plant_address` longtext NOT NULL,
  `office_address` longtext NOT NULL,
  `mob_no` longtext NOT NULL,
  `email_id` longtext NOT NULL,
  `commence_date` longtext NOT NULL,
  `acc_no` longtext NOT NULL,
  `ifsc` longtext NOT NULL,
  `business_activity` longtext NOT NULL,
  `nic` longtext NOT NULL,
  `business_details` longtext NOT NULL,
  `no_of_emp` longtext NOT NULL,
  `investment` longtext NOT NULL,
  `attachment` longtext NOT NULL,
  `status` longtext NOT NULL,
  `c_id` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id` longtext NOT NULL,
  `email_id` longtext NOT NULL,
  `password` longtext NOT NULL,
  `otp` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id`, `email_id`, `password`, `otp`) VALUES
('1', 'test@gmail.com', 'Satish@890', 'sndjcnjsd');

-- --------------------------------------------------------

--
-- Table structure for table `login_officer`
--

CREATE TABLE `login_officer` (
  `o_id` longtext NOT NULL,
  `f_name` longtext NOT NULL,
  `l_name` longtext NOT NULL,
  `email_id` longtext NOT NULL,
  `mob_no` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_officer`
--

INSERT INTO `login_officer` (`o_id`, `f_name`, `l_name`, `email_id`, `mob_no`, `password`) VALUES
('1', 'hu', '', 'test@gmail.com', '878665', 'Test@123'),
('', 'sanika', 'jadhav', 'sanika@gmail.com', '8888888888', 'Sanika@123'),
('', 'sanika', 'jadhav', 'sanika@gmail.com', '8888888888', 'Sanika@123'),
('', 'ij', 'jij', 'ij', 'ij', 'ij'),
('', 'n', 'nkn', 'kn', 'kn', 'knk');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `u_id` longtext NOT NULL,
  `f_name` longtext NOT NULL,
  `email_id` longtext NOT NULL,
  `mob_no` longtext NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`u_id`, `f_name`, `email_id`, `mob_no`, `password`) VALUES
('1', 'hjh', 'h', 'khk', 'hkh'),
('1', 'kpkp', 'kpk', 'pk', 'pk'),
('1', 'sanika', 'sanika@gmail.com', '647474623647246', 'Sanika@123'),
('', 'test', 'test1@gmail.com', '987650987', 'Test@123'),
('', 'test', 'test1@gmail.com', '987650987', 'Test@123');

-- --------------------------------------------------------

--
-- Table structure for table `reg_form`
--

CREATE TABLE `reg_form` (
  `id` longtext NOT NULL,
  `u_id` longtext NOT NULL,
  `aadhar_no` longtext NOT NULL,
  `e_name` longtext NOT NULL,
  `category` longtext NOT NULL,
  `gender` longtext NOT NULL,
  `physi_handy` longtext NOT NULL,
  `b_name` longtext NOT NULL,
  `org_type` longtext NOT NULL,
  `pan_no` longtext NOT NULL,
  `plant_address` longtext NOT NULL,
  `office_address` longtext NOT NULL,
  `mob_no` longtext NOT NULL,
  `email_id` longtext NOT NULL,
  `commence_date` longtext NOT NULL,
  `acc_no` longtext NOT NULL,
  `ifsc` longtext NOT NULL,
  `business_activity` longtext NOT NULL,
  `nic` longtext NOT NULL,
  `business_details` longtext NOT NULL,
  `no_of_emp` longtext NOT NULL,
  `investment` longtext NOT NULL,
  `attachment` longtext NOT NULL,
  `status` longtext NOT NULL,
  `sub_date_time` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_form`
--

INSERT INTO `reg_form` (`id`, `u_id`, `aadhar_no`, `e_name`, `category`, `gender`, `physi_handy`, `b_name`, `org_type`, `pan_no`, `plant_address`, `office_address`, `mob_no`, `email_id`, `commence_date`, `acc_no`, `ifsc`, `business_activity`, `nic`, `business_details`, `no_of_emp`, `investment`, `attachment`, `status`, `sub_date_time`) VALUES
('l_2019022416031115510043911351479175c7272e7561ed', '', 'ihh', 'ioh', 'oih', 'ioh', 'ioh', 'ih', 'oih', 'oih', 'oih', 'ih', 'oih', 'oih', 'oih', 'hih', 'oih', 'oih', 'oihoi', 'hio', 'h', 'oi', 'd_2019022416031115510043919124936065c7272e755fa8.jpg', 'micro', ''),
('l_2019022416041015510044509529471845c7273224784c', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'd_20190224160410155100445011901789795c72732246dab.', 'micro', ''),
('l_20190224160532155100453218260753035c72737422827', '', 'nh', 'nnh', 'SC', 'female', 'yes', 'NNJN', 'Partnership Firm', 'j', 'ij', '', 'ijji', 'ji@gmail.com', '2019-02-23', 'jnnkl', 'iojiji', 'Manufacturer', 'nknknk', '', 'klnknklnkl', 'iijijiji', 'd_20190224160532155100453210364507815c727374225e5.', 'micro', ''),
('l_2019022416061615510045763456581075c7273a08f918', '', 'nh', 'nnh', 'SC', 'female', 'yes', 'NNJN', 'Partnership Firm', 'j', 'ij', '', 'ijji', 'ji@gmail.com', '2019-02-23', 'jnnkl', 'iojiji', 'Manufacturer', 'nknknk', '', 'klnknklnkl', 'iijijiji', 'd_2019022416061615510045761188726985c7273a08f66b.', 'micro', ''),
('l_2019022416062115510045818484995705c7273a5814a1', '', 'nh', 'nnh', 'SC', 'female', 'yes', 'NNJN', 'Partnership Firm', 'j', 'ij', '', 'ijji', 'ji@gmail.com', '2019-02-23', 'jnnkl', 'iojiji', 'Manufacturer', 'nknknk', '', 'klnknklnkl', 'iijijiji', 'd_2019022416062115510045816870928575c7273a5812a8.', 'micro', ''),
('l_2019022416062615510045861616942405c7273aa99e5a', '', 'nh', 'nnh', 'SC', 'female', 'yes', 'NNJN', 'Partnership Firm', 'j', 'ij', '', 'ijji', 'ji@gmail.com', '2019-02-23', 'jnnkl', 'iojiji', 'Manufacturer', 'nknknk', '', 'klnknklnkl', 'iijijiji', 'd_20190224160626155100458615657927985c7273aa99c4c.', 'micro', ''),
('l_201902241606401551004600820600535c7273b8af5b6', '', 'nh', 'nnh', 'SC', 'female', 'yes', 'NNJN', 'Partnership Firm', 'j', 'ij', '', 'ijji', 'ji@gmail.com', '2019-02-23', 'jnnkl', 'iojiji', 'Manufacturer', 'nknknk', '', 'klnknklnkl', 'iijijiji', 'd_20190224160640155100460017662632945c7273b8af3ab.', 'micro', '');

-- --------------------------------------------------------

--
-- Table structure for table `solve_grievance`
--

CREATE TABLE `solve_grievance` (
  `g_id` longtext NOT NULL,
  `o_id` longtext NOT NULL,
  `u_id` longtext NOT NULL,
  `solution` text NOT NULL,
  `solved_date` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
