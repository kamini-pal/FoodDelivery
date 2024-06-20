-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 08:03 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact-us`
--

CREATE TABLE `contact-us` (
  `s.no` int(12) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile.no` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact-us`
--

INSERT INTO `contact-us` (`s.no`, `name`, `email`, `mobile.no`, `address`, `message`, `date`) VALUES
(1, 'kamini', 'kamini123@gmail.com', '8853985583', 'nawabganj', 'web designing', '2020-07-10 11:47:23'),
(2, 'rahul', 'rahul123@gmail.com', '906829839', 'fbd', 'hiiiii', '2020-07-10 11:50:09'),
(3, 'surjeet', 'surjeet123@gamil.com', '7510029028', 'farrukhabad', 'hiii', '2020-08-01 13:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `S.No` int(12) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Food-Name` varchar(20) NOT NULL,
  `Mobile-No` varchar(11) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Message` text NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`S.No`, `Name`, `Food-Name`, `Mobile-No`, `Address`, `Message`, `Date`) VALUES
(3, 'reyansh', 'pizza', '906829839', 'fbd', 'hiiiiii', '2020-07-14 10:57:26'),
(7, 'kamini', 'pizza', '8853985583', 'fbd', 'good job', '2020-07-29 11:34:05'),
(8, 'rahul', 'burgar', '906829838', 'fbd', 'very good', '2020-07-29 11:34:47'),
(10, 'fattu', 'burgar', '906829839', 'fbd', 'my food', '2020-07-29 11:57:12'),
(11, '', '', '', '', '', '2020-07-29 20:19:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `S.no` int(12) NOT NULL,
  `username` varchar(15) NOT NULL,
  `Email-Address` varchar(30) NOT NULL,
  `Phone-No` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`S.no`, `username`, `Email-Address`, `Phone-No`, `password`, `Date`) VALUES
(1, 'kamini', 'kamini2001@gmail.com', '8853985583', '1234', '2020-07-10 11:21:20'),
(4, 'jyoti', 'jyoti123@gmail.com', '9076829839', '123', '2020-07-10 11:41:21'),
(7, 'rahul', 'rahul123@gmail.com', '9076829839', '9921', '2020-07-10 14:47:57'),
(8, 'diksha', 'diksha123@gmail.com', '8808268525', '$2y$10$5oFMNrlVNsRHNBOJ.ZdameS0WFcl0/9mvtfBm9qZSeCcFo9OmJnTm', '2020-07-11 01:32:49'),
(9, 'chhaviram singh', 'schhaviram@gmail.com', '9506256739', '$2y$10$ytDJZf4CFdifD7BZadxUVuLDjIjbDrgRH4TQmWiy/0mYMYroKlwL6', '2020-07-14 10:43:49'),
(10, 'rahulsk', 'rahul123@gmail.com', '9076829839', '$2y$10$9WDit2MnT9IrAvXKliuuZegeuxdFlPZiuYuCJhzgy9x.9RIZASdb.', '2020-07-22 11:33:05'),
(11, 'kkrr', 'kk123@gmail.com', '8808268525', '$2y$10$gScxN5JQOo4074CmeRmeZ.pUKs8v2aTGI2Ry55TzOlpsbsxHYS5rK', '2020-07-29 11:45:05'),
(12, 'kaminir', 'rahul123@gmail.com', '8853985583', '$2y$10$rSZDl0jQ8.7erFA.SHfOD.Tz/5AxBSOxT/9G2FnbNwo7yUpJPe1WO', '2020-07-29 11:53:27'),
(13, 'surjeet', 'surjeet123@gmail.com', '7510029028', '$2y$10$6cX1q8mJoFHsnu7IN8Zn4eZd5EPoaTw4pEbzECIk9.dc6y27qG53i', '2020-08-01 14:04:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact-us`
--
ALTER TABLE `contact-us`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`S.no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact-us`
--
ALTER TABLE `contact-us`
  MODIFY `s.no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `S.No` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `S.no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
