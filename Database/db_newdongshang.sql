-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 11:50 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_newdongshang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(5) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_firstname` varchar(100) NOT NULL,
  `admin_lastname` varchar(100) NOT NULL,
  `admin_mobilephone` varchar(10) NOT NULL,
  `admin_address` text NOT NULL,
  `admin_gender` varchar(5) NOT NULL,
  `admin_activation_status` tinyint(4) NOT NULL COMMENT '1 = Active , 2 = Inactive',
  `admin_image` varchar(100) NOT NULL,
  `access_label` tinyint(1) NOT NULL COMMENT '1 = Super Admin, 2 = คุณอ๊อด-คุณวรรณ , 3=บัญชี , 4=OP , 0 = Inactive',
  `admin_created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_firstname`, `admin_lastname`, `admin_mobilephone`, `admin_address`, `admin_gender`, `admin_activation_status`, `admin_image`, `access_label`, `admin_created_at`) VALUES
(1, 'PEeCz', 'scpeecz@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Sorakrit', '', '', '', '', 1, '', 1, '2018-10-03 10:02:34'),
(2, 'PzAdlg', 'sincerite_piece@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '', '', '', '', 1, '', 2, '2018-10-03 10:02:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_description` text,
  `published_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`, `category_description`, `published_status`, `created_at`) VALUES
(1, 'โรงแรม', '<p>Booking Hotels Online</p>\r\n', 1, '2018-10-04 04:59:32'),
(2, 'สถานที่เที่ยว', '<p>Travels of Thailand</p>\r\n', 1, '2018-10-04 06:12:47'),
(3, 'แพ็คเกจทัวร์', '<p>Booking Package Tours (อาทิเช่น ทัวร์ไหว้พระ 9 วัด)</p>\r\n', 1, '2018-10-04 08:53:55'),
(4, 'จองรถ', '<p>Booking Cars Online (VANS)</p>\r\n\r\n', 1, '2018-10-04 08:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `tb_manufacture`
--

CREATE TABLE `tb_manufacture` (
  `manufacture_id` int(5) NOT NULL,
  `manufacture_name` varchar(100) DEFAULT NULL,
  `manufacture_description` text,
  `published_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_manufacture`
--

INSERT INTO `tb_manufacture` (`manufacture_id`, `manufacture_name`, `manufacture_description`, `published_status`, `created_at`) VALUES
(1, 'dsa', '<p>dsadsad</p>\r\n', 1, '2018-10-05 05:10:33'),
(2, 'sda', '<p>dsad</p>\r\n', 1, '2018-10-05 06:18:58'),
(3, 'sadsad', '<p>dascxzczxc</p>\r\n', 1, '2018-10-05 06:19:04'),
(4, 'rwqrcz', '<p>savrtqdd</p>\r\n', 1, '2018-10-05 06:19:10'),
(5, 'dasczxc', '<p>sdasaczxwqe</p>\r\n', 1, '2018-10-05 06:19:14'),
(6, 'gbfvx', '<p>fdgfdre</p>\r\n', 0, '2018-10-05 06:19:18'),
(7, 'zxce', '<p>cdadada</p>\r\n', 1, '2018-10-05 06:19:23'),
(8, 'dsgdsfgds', '<p>ghhthytye</p>\r\n', 0, '2018-10-05 06:19:29'),
(9, 'gfdshfd', '<p>vfxvreyuyjf</p>\r\n', 1, '2018-10-05 06:19:35'),
(10, 'gdsfg', '<p>vcxvcdaf</p>\r\n', 1, '2018-10-05 06:19:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tb_manufacture`
--
ALTER TABLE `tb_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_manufacture`
--
ALTER TABLE `tb_manufacture`
  MODIFY `manufacture_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
