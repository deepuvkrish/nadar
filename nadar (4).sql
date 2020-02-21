-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 06:53 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

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

--
-- Dumping data for table `bh108`
--

INSERT INTO `bh108` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(24, 'dhanya', 46, 11, 90, 90, 9, '79589-Fantasy-Girl-PNG-Photos.png'),
(25, 'aleena', 200, 11, 90, 11, 80, '3625-Fantasy-Angel-PNG-Image.png'),
(26, 'aiswarya', 500, 9, 45, 12, 40, '3205-Fantasy-Girl-PNG-Clipart.png'),
(27, 'anagha', 46, 12, 111, 90, 11, '70384-Fantasy-Girl-PNG-File.png');

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
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bk105`
--

INSERT INTO `bk105` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'abin', 700, 9, 111, 0, 111, '17104-Chris-Evans-Transparent-Background.png'),
(2, 'abhiram', 700, 11, 111, 90, 11, '60847-Chris-Evans-PNG-Free-Download.png');

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
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bv104`
--

INSERT INTO `bv104` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'Anupama', 700, 25, 90, 20, 72, '49395-Fantasy-Women-Warrior-PNG-Clipart.png'),
(2, 'avin', 200, 12, 100, 11, 89, '16916-Werewolf-PNG-HD.png');

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
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gr107`
--

INSERT INTO `gr107` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'divya', 90, 11, 100, 11, 89, '52613-student_PNG62534.png');

-- --------------------------------------------------------

--
-- Table structure for table `hs101`
--

CREATE TABLE `hs101` (
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
-- Dumping data for table `hs101`
--

INSERT INTO `hs101` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(26, 'akhil', 12, 9, 45, 20, 36, '50621-Clothes-Iron-PNG-Free-Download.png'),
(27, 'EDX  LUCIDRAKEZ', 700, 80, 90, 20, 72, '19463-Android-PNG-HD.png'),
(28, 'christy', 700, 12, 111, 90, 11, '34215-Computer-Speakers-PNG-Clipart.png'),
(29, 'amala', 700, 25, 45, 20, 36, '32888-Woman-Warrior-PNG-Pic.png');

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
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kt103`
--

INSERT INTO `kt103` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'arjun', 46, 12, 100, 90, 10, '71410-student_PNG62527.png');

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
  `Final_Price` int(10) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pt106`
--

INSERT INTO `pt106` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'gladees', 46, 11, 12, 12, 11, '88375-Hugh-Jackman-Transparent-PNG.png');

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

--
-- Dumping data for table `sf109`
--

INSERT INTO `sf109` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'anila', 46, 12, 90, 90, 9, '50751-Secretary-PNG-Clipart.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slno` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `header1` varchar(50) NOT NULL,
  `header2` varchar(50) NOT NULL,
  `header3` varchar(50) NOT NULL,
  `header4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slno`, `image`, `header1`, `header2`, `header3`, `header4`) VALUES
(1, '20416-clickz_00033.jpg', 'aaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaa'),
(2, '36736-clickz_00027.jpg', 'sssssssssssss', 'sssssssssssssss', 'sssssssssssss', 'ssssssssssssss'),
(3, '68826-clickz_00038.jpg', 'vvvvvvvvvvvv', 'vvvvvvvvvvvvvvvv', 'vvvvvvvvvvvv', 'vvvvvvvvvvvvvvvv');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'FinePix Pro2 3D Camera', '3DcAM01', 'product-images/camera.jpg', 1500.00),
(2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00);

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
-- Dumping data for table `vf102`
--

INSERT INTO `vf102` (`Sl.no`, `item_name`, `Current_Stock`, `Booked_Stock`, `Act_Price`, `Discount`, `Final_Price`, `image`) VALUES
(1, 'hari', 500, 25, 90, 20, 72, '63426-Security-Camera-PNG-Picture.png'),
(2, 'anjali', 12, 12, 90, 20, 72, '5218-Apple-iPhone-PNG-Transparent-Image.png');

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
-- Indexes for table `kt103`
--
ALTER TABLE `kt103`
  ADD PRIMARY KEY (`Sl.no`);

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
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

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
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `bk105`
--
ALTER TABLE `bk105`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bv104`
--
ALTER TABLE `bv104`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gr107`
--
ALTER TABLE `gr107`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hs101`
--
ALTER TABLE `hs101`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kt103`
--
ALTER TABLE `kt103`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pt106`
--
ALTER TABLE `pt106`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sf109`
--
ALTER TABLE `sf109`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vf102`
--
ALTER TABLE `vf102`
  MODIFY `Sl.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
