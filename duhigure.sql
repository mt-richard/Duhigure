-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2022 at 04:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duhigure`
--

-- --------------------------------------------------------

--
-- Table structure for table `abanyamuryango`
--

CREATE TABLE `abanyamuryango` (
  `um_id` varchar(16) NOT NULL,
  `ab_name` varchar(40) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `age` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abanyamuryango`
--

INSERT INTO `abanyamuryango` (`um_id`, `ab_name`, `gender`, `age`, `username`, `password`, `role`) VALUES
('1111111111111111', 'Twahirwa', 'Male', '12', 'richard', 'richard', 'member'),
('12002566874835', 'Prince hone', 'Gabo', '6', 'prince', '123', 'umunyamuryango'),
('19999454534767', 'Ndagijhimana', 'Gabo', '6', 'ndagi', '123', 'umunyamuryango');

-- --------------------------------------------------------

--
-- Table structure for table `imihigo`
--

CREATE TABLE `imihigo` (
  `im_id` int(10) NOT NULL,
  `im_name` varchar(30) NOT NULL,
  `um_id` varchar(30) NOT NULL,
  `ab_name` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `Igihe` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imihigo`
--

INSERT INTO `imihigo` (`im_id`, `im_name`, `um_id`, `ab_name`, `status`, `Igihe`) VALUES
(1, 'Guteka neza', '11111111111111111111', 'richard', 'pending', '2022-09-30 13:46:11');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `umuryango`
--

CREATE TABLE `umuryango` (
  `um_id` varchar(11) NOT NULL,
  `um_name` varchar(30) NOT NULL,
  `umurenge` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `umuryango`
--

INSERT INTO `umuryango` (`um_id`, `um_name`, `umurenge`, `username`, `password`, `role`) VALUES
('12000233445', 'Richard MBANZA', 'Kanombe', 'rich', 'rich', 'umuryango'),
('12001879834', 'Kamana', 'Kicukiro', 'kamana', '123', 'umuryango'),
('5765856', 'Kamana', 'nbm', 'bnmbn', 'nbmb', 'umuryango');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(22) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abanyamuryango`
--
ALTER TABLE `abanyamuryango`
  ADD PRIMARY KEY (`um_id`);

--
-- Indexes for table `imihigo`
--
ALTER TABLE `imihigo`
  ADD PRIMARY KEY (`im_id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umuryango`
--
ALTER TABLE `umuryango`
  ADD PRIMARY KEY (`um_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imihigo`
--
ALTER TABLE `imihigo`
  MODIFY `im_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
