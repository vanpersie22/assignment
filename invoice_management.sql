-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 12:13 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_requests`
--

CREATE TABLE `product_requests` (
  `id` int(11) NOT NULL,
  `product_selection` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `serial_number` varchar(255) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_rate` decimal(10,2) DEFAULT NULL,
  `discount` decimal(10,2) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `net_amount` decimal(10,2) DEFAULT NULL,
  `tracking_id` varchar(255) DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_requests`
--

INSERT INTO `product_requests` (`id`, `product_selection`, `quantity`, `serial_number`, `product_name`, `product_rate`, `discount`, `amount`, `net_amount`, `tracking_id`) VALUES
(19, 'product1', 44, 'myopium3', 'awserdtgh', '54.00', '565.00', '450.00', '55.00', '6603634d7e0ad'),
(20, 'product1', 55, 'mami', 'mamijinso', '1222.00', '234.00', '44.00', '77.00', '66036d1759724'),
(21, 'product2', 66, 'jkhgf5677', 'jhgjhgyjj', '76.00', '780.00', '12233.00', '77.00', '660429e49035c'),
(22, 'product2', 76, 'jkhgf5677', 'jhgjhgyjj', '76.00', '78.00', '600.00', '78.00', '660430ab39350'),
(23, 'product2', 76, 'jkhgf5677', 'jhgjhgyjj', '76.00', '78.00', '600.00', '78.00', '660430b28f7c1'),
(24, 'product2', 76, 'jkhgf5677', 'jhgjhgyjj', '76.00', '78.00', '600.00', '78.00', '660430cc96bbf'),
(25, 'product2', 76, 'jkhgf5677', 'jhgjhgyjj', '76.00', '78.00', '600.00', '78.00', '660430e34c624'),
(26, 'product2', 65, '65768ghhggff', 'apple', '78.00', '790.00', '2500.00', '78.00', '6604704850abf'),
(27, 'product1', 44, 'jkhgf5677', 'jhgjhgyjj', '34.00', '55.00', '1000.00', '55.00', '66056682818be'),
(28, 'product2', 1, '457466355', 'popil', '5.00', '10.00', '100.00', '80.00', '660569db54d52'),
(29, 'product1', 33, '67774ghgh', 'Camera', '22.00', '550.00', '1000.00', '550.00', '660571c1a1852');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Hackkid22 ', 'Ezealijonas@gmail.com', '$2y$10$7t9VUlFI8QEdIYcXmI1Qu.CB4e6myTQkPU6B2f8t7dDuSrD0.DriO'),
(6, 'okolieS', 'Tokenmarketbag@gmail.com', '$2y$10$MfZnaz6Jz2YBwZy8dvD5K.j04sguBabCUIVHx0kl9rs5gcM7b5CcO'),
(7, 'Hackk', 'admin@Al-scalablecapitals.org', '$2y$10$v4WCwypXjQ.BZcZb0j7Oq.ZvMo9XEuID3UsspKTg2Gqu4478r/yrO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_requests`
--
ALTER TABLE `product_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_requests`
--
ALTER TABLE `product_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
