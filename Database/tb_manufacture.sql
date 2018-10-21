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
-- Indexes for table `tb_manufacture`
--
ALTER TABLE `tb_manufacture`
  ADD PRIMARY KEY (`manufacture_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_manufacture`
--
ALTER TABLE `tb_manufacture`
  MODIFY `manufacture_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
