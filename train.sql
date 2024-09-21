-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 04:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `l_trains_t`
--

CREATE TABLE `l_trains_t` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `num` varchar(100) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `train_num` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `str_time` varchar(20) NOT NULL,
  `end_time` varchar(29) NOT NULL,
  `start_location` varchar(50) NOT NULL,
  `end_location` varchar(100) NOT NULL,
  `couch` varchar(100) NOT NULL,
  `preference` varchar(100) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `adult_list` varchar(100) NOT NULL,
  `cld_list` varchar(100) NOT NULL,
  `totl_lis` varchar(100) NOT NULL,
  `tol_amt` varchar(100) NOT NULL,
  `gst` varchar(100) NOT NULL,
  `net_amt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `l_trains_t`
--

INSERT INTO `l_trains_t` (`id`, `name`, `address`, `num`, `train_name`, `train_num`, `date`, `str_time`, `end_time`, `start_location`, `end_location`, `couch`, `preference`, `amount`, `adult_list`, `cld_list`, `totl_lis`, `tol_amt`, `gst`, `net_amt`) VALUES
(0, '', '', '', ' ', ' ', '0000-00-00', '', '', '', '', '--select--', '--select--', ' ', '', '', '', ' ', '', ''),
(0, 'balaji', 'chennai', '7594758796', '1 ', ' 001', '2024-08-17', '1pm', '8pm', 'chennia', 'coimbatore', 'sc', 'sitt', ' 370', '2', '2', '4', ' 1480', '266.4', '1746');

-- --------------------------------------------------------

--
-- Table structure for table `m_trains_t`
--

CREATE TABLE `m_trains_t` (
  `train_id` int(100) NOT NULL,
  `train_name` varchar(100) NOT NULL,
  `train_num` varchar(100) NOT NULL,
  `str_time` varchar(100) NOT NULL,
  `end_time` varchar(100) NOT NULL,
  `start_location` varchar(100) NOT NULL,
  `end_location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_trains_t`
--

INSERT INTO `m_trains_t` (`train_id`, `train_name`, `train_num`, `str_time`, `end_time`, `start_location`, `end_location`) VALUES
(1, 'balaji express', '001', '1pm', '8pm', 'chennia', 'coimbatore');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_trains_t`
--
ALTER TABLE `m_trains_t`
  ADD PRIMARY KEY (`train_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_trains_t`
--
ALTER TABLE `m_trains_t`
  MODIFY `train_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
