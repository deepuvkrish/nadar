-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 01:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nadar`
--

-- --------------------------------------------------------

--
-- Table structure for table `bh108`
--

CREATE TABLE `bh108` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bk105`
--

CREATE TABLE `bk105` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bv104`
--

CREATE TABLE `bv104` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `sl.no` int(15) NOT NULL,
  `Cat_name` varchar(25) NOT NULL,
  `Cat_Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`sl.no`, `Cat_name`, `Cat_Code`) VALUES
(1, 'Household', 'hs101'),
(2, 'veggies d fruits', 'vg102'),
(3, 'Kitchen Accesories', 'kt103'),
(4, 'Beverages', 'bv104'),
(5, 'Bread and Bakery', 'bk105'),
(6, 'Pet food', 'pt106'),
(7, 'Groceries', 'gr107'),
(8, 'Beauty and Healthcare', 'bh108'),
(9, 'schools and office', 'sf109');

-- --------------------------------------------------------

--
-- Table structure for table `gr107`
--

CREATE TABLE `gr107` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hs101`
--

CREATE TABLE `hs101` (
  `Sl.no` int(15) NOT NULL,
  `Item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `img_name` varchar(50) DEFAULT NULL,
  `size` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(10) NOT NULL,
  `file` varchar(300) NOT NULL,
  `size` varchar(300) NOT NULL,
  `type` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `file`, `size`, `type`) VALUES
(6, '68872-win_20200124_23_45_10_pro.jpg', '102.587890625', 'image/jpeg'),
(7, '74825-win_20200204_22_12_36_pro.jpg', '124.5185546875', 'image/jpeg'),
(8, '23809-ewwee.jpg', '102.587890625', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `kt103`
--

CREATE TABLE `kt103` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'username', 'password'),
(2, 'deepak', 'dgetdata@383');

-- --------------------------------------------------------

--
-- Table structure for table `pt106`
--

CREATE TABLE `pt106` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sf109`
--

CREATE TABLE `sf109` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vf102`
--

CREATE TABLE `vf102` (
  `Sl.no` int(10) NOT NULL,
  `item_name` varchar(20) NOT NULL,
  `Current_Stock` int(10) NOT NULL,
  `Booked_Stock` int(10) NOT NULL,
  `Act_Price` int(10) NOT NULL,
  `Discount` int(10) NOT NULL,
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bh108`
--
ALTER TABLE `bh108`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `bk105`
--
ALTER TABLE `bk105`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `bv104`
--
ALTER TABLE `bv104`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`sl.no`);

--
-- Indexes for table `gr107`
--
ALTER TABLE `gr107`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `hs101`
--
ALTER TABLE `hs101`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kt103`
--
ALTER TABLE `kt103`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pt106`
--
ALTER TABLE `pt106`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `sf109`
--
ALTER TABLE `sf109`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `vf102`
--
ALTER TABLE `vf102`
  ADD PRIMARY KEY (`Sl.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bh108`
--
ALTER TABLE `bh108`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `bk105`
--
ALTER TABLE `bk105`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bv104`
--
ALTER TABLE `bv104`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `sl.no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `gr107`
--
ALTER TABLE `gr107`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hs101`
--
ALTER TABLE `hs101`
  MODIFY `Sl.no` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kt103`
--
ALTER TABLE `kt103`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pt106`
--
ALTER TABLE `pt106`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sf109`
--
ALTER TABLE `sf109`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vf102`
--
ALTER TABLE `vf102`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
