-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 09:18 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `7ss`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` bigint(20) NOT NULL,
  `admin_email` varchar(1100) NOT NULL,
  `admin_password` varchar(2000) NOT NULL,
  `admin_name` varchar(1100) NOT NULL,
  `admin_phone` bigint(50) NOT NULL,
  `admin_photo` varchar(5000) NOT NULL,
  `admin_status` tinyint(1) NOT NULL,
  `customers_view` tinyint(1) NOT NULL,
  `customers_create` tinyint(1) NOT NULL,
  `customers_edit` tinyint(1) NOT NULL,
  `customers_del` tinyint(1) NOT NULL,
  `admin_view` tinyint(1) NOT NULL,
  `admin_create` tinyint(1) NOT NULL,
  `admin_edit` tinyint(1) NOT NULL,
  `admin_del` tinyint(1) NOT NULL,
  `renewal_view` tinyint(1) NOT NULL,
  `renewal_edit` tinyint(1) NOT NULL,
  `renewal_del` tinyint(1) NOT NULL,
  `admin_special` tinyint(1) NOT NULL,
  `admin_delete` tinyint(1) NOT NULL,
  `admin_added_date` varchar(50) NOT NULL,
  `admin_updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `admin_req` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `admin_photo`, `admin_status`, `customers_view`, `customers_create`, `customers_edit`, `customers_del`, `admin_view`, `admin_create`, `admin_edit`, `admin_del`, `renewal_view`, `renewal_edit`, `renewal_del`, `admin_special`, `admin_delete`, `admin_added_date`, `admin_updated_date`, `admin_req`) VALUES
(6, 'admin@admin.com', '$2y$10$IUHcsSNbUjp1W.9wG76dZ.YI.wXYIhOWzgwf.hun/0Xp2gGgiUjWC', 'ADMIN', 9845138636, '2022-06-26_1656253258.jpeg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '18-11-2021 11:13:30 pm', '2022-06-28 19:14:15', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customers_id` bigint(20) NOT NULL,
  `customers_name` varchar(1000) NOT NULL,
  `customers_phone1` bigint(20) NOT NULL,
  `customers_phone2` bigint(20) DEFAULT NULL,
  `customers_phone3` bigint(20) DEFAULT NULL,
  `customers_email` varchar(250) DEFAULT NULL,
  `customers_address` varchar(2000) DEFAULT NULL,
  `customers_website` varchar(500) NOT NULL,
  `customers_purpoes` varchar(5000) NOT NULL,
  `customers_renewal_date` date NOT NULL,
  `customers_updated_date` varchar(20) NOT NULL,
  `customers_added_date` varchar(20) NOT NULL,
  `customers_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `customers_name`, `customers_phone1`, `customers_phone2`, `customers_phone3`, `customers_email`, `customers_address`, `customers_website`, `customers_purpoes`, `customers_renewal_date`, `customers_updated_date`, `customers_added_date`, `customers_deleted`) VALUES
(1, 'BEEMA LINGA REDDY ', 9845138636, 9480489827, 0, 'royalpupilinternationalschool@gmail.com', 'KUDUTHINI 583115\r\n', 'royalpupilinternationalschool.com', 'SCHOOL FEE MANAGEMENT\r\n', '2023-06-25', '29-06-2022 12:44:15 ', '28-06-2022 11:48:58 ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customers_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
