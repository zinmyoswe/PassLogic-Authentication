-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 02:09 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `passlogic`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign1`
--

CREATE TABLE `assign1` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `assign` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assign1`
--

INSERT INTO `assign1` (`id`, `login_id`, `assign`) VALUES
(3, 1, '1,6,11,16,');

-- --------------------------------------------------------

--
-- Table structure for table `no_logic`
--

CREATE TABLE `no_logic` (
  `id` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `no_logic`
--

INSERT INTO `no_logic` (`id`, `login_id`, `num`) VALUES
(8, 1, '4'),
(9, 1, '7'),
(10, 1, '15'),
(11, 1, '16');

-- --------------------------------------------------------

--
-- Table structure for table `play`
--

CREATE TABLE `play` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `play`
--

INSERT INTO `play` (`id`, `name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18'),
(19, '19'),
(20, '20'),
(21, '21'),
(22, '22'),
(23, '23'),
(24, '24'),
(25, '25'),
(26, '26'),
(27, '27'),
(28, '28'),
(29, '29'),
(30, '30'),
(31, '31'),
(32, '32'),
(33, '33'),
(34, '34'),
(35, '35'),
(36, '36'),
(37, '37'),
(38, '38'),
(39, '39'),
(40, '40'),
(41, '41'),
(42, '42'),
(43, '43'),
(44, '44'),
(45, '45'),
(46, '46'),
(47, '47'),
(48, '48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign1`
--
ALTER TABLE `assign1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `no_logic`
--
ALTER TABLE `no_logic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `play`
--
ALTER TABLE `play`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign1`
--
ALTER TABLE `assign1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `no_logic`
--
ALTER TABLE `no_logic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `play`
--
ALTER TABLE `play`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
