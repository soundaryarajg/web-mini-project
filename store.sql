-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 07:23 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Coriander', 50),
(2, 'Bay Leaf', 40),
(3, 'Spinach', 50),
(4, 'Lettuce', 80),
(5, 'bannana', 130),
(6, 'seethaphal', 300),
(7, 'Pomegranate', 300),
(8, 'Custard Apple', 180),
(9, 'kiwi', 1500),
(10, 'Mojari', 4200),
(11, 'Fabindia', 2900),
(12, 'PINK', 1200),
(13, 'Fenugreek', 32),
(14, 'Mustard', 50),
(15, 'Dill Leaves', 40),
(16, 'Mint', 30),
(17, 'Sorrel', 45),
(18, 'Curry Leaves', 34),
(19, 'Zhiuyun', 54000),
(20, 'polaroid Onestep+', 23000),
(21, 'Mango', 260),
(22, 'Apple', 230),
(23, 'Orange', 130),
(24, 'Strawberry', 370),
(25, 'Sweet Lime', 190),
(26, 'Green Apple', 300),
(27, 'Fab India', 5500),
(28, 'Soch', 3900),
(29, 'Myntra', 2800),
(30, 'Westside', 30),
(31, 'Lifestyle', 4120),
(32, 'Indiamart', 5200),
(33, 'Khadi', 3400),
(34, 'PN Rao', 4900);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `creditCardNumber` int(50) NOT NULL,
  `cvv2Number` int(5) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`creditCardNumber`, `cvv2Number`, `amount`) VALUES
(2147483647, 154, 8000),
(2147483647, 154, 8000),
(2147483647, 154, 8000),
(1234567899, 255, 80000),
(1234567899, 255, 80000),
(1234567899, 255, 80000),
(1234567899, 1555, 95500),
(1234567899, 123, 8000),
(1234567899, 123, 8000),
(123456, 123345, 8000),
(123456, 123345, 8000),
(123456, 1555, 80000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(233313131, 123, 8000),
(123456, 123, 8000),
(123, 300, 8000),
(1233, 2222, 8000),
(123456, 123, 0),
(0, 123345, 0),
(1234567899, 123345, 8000),
(123456, 1555, 0),
(121454, 123, 900000),
(123445678, 231, 36000),
(2147483647, 877, 75000),
(685877869, 675, 11800000),
(2147483647, 876, 119676),
(534535, 454, 3454),
(33454, 456, 45354),
(33454, 454, 45354),
(33454, 454, 45354),
(4534, 454, 5435),
(233, 324, 43434),
(86876, 678, 0),
(32343, 332, 0),
(2147483647, 343, 44234),
(33454, 324, 45354),
(765765675, 768, 85565675),
(3523523, 243, 0),
(5875, 234, 0),
(123456, 123, 50000),
(234567, 234, 26000),
(1234567890, 123, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Sam', 'sam@gmail.com', '57f231b1ec41dc6641270cb09a56f897', '8899889988', 'back', '100 palace'),
(2, 'Ram', 'ram4@xyz.com', '57f231b1ec41dc6641270cb09a56f897', '8899889989', 'blore', '100 palace'),
(3, 'Shyam', 'shyam@xyz.com', '57f231b1ec41dc6641270cb09a56f897', '8899889990', 'Bangalore', '100 palace colony, Bangalore'),
(4, 'gvjv', 'hvhv@gami.com', '70873e8580c9900986939611618d7b1e', 'ja', 'adhuf', 'hdfa'),
(5, 'vv', 'ecec@gmail.com', '14e1b600b1fd579f47433b88e8d85291', 'fs', 'fddd', 'dd'),
(6, 'lkji', 'kjad@gamil.com', 'ebba99cfd270763bf0cab6af52b190f9', 'lkn', ';kj', 'ln'),
(7, 'tim', 'tim@gmailkj.com', '14e1b600b1fd579f47433b88e8d85291', '7406467409', 'blore', '#34,tim villa, jayanagar'),
(8, 'man', 'man@gmail.com', '352eaae5cc63c358f4bc7087dd05a4e4', '740646740', 'blore', '#34,man villa, jayanagar'),
(9, 'bob', 'bob@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '7406467409', 'blore', '#34,bob villa'),
(10, 'sid', 'sid@gamil.com', '14e1b600b1fd579f47433b88e8d85291', '123456789', 'bangalore', 'bangalore'),
(11, 'aaa', 'aaa@gmail.com', '7c3d596ed03ab9116c547b0eb678b247', '1234567898', 'blore', 'ecity'),
(12, 'yash', 'yash@gmail.com', 'abb16e76b925e80bfa827ddacf034cc7', '9876543212', 'Bangalore', 'kudlu'),
(13, 'can', 'can@gmail.com', '0b4f0124bd04da32cc68e4d6f94f62a0', '9481923049', 'Bangalore', 'kudlu'),
(14, 'deepak', 'deepak@gmail.com', '696d29e0940a4957748fe3fc9efd22a3', '909090909', 'blore', 'blore');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(7, 3, 3, 'Added to cart'),
(8, 3, 4, 'Added to cart'),
(9, 3, 5, 'Added to cart'),
(10, 3, 11, 'Added to cart'),
(11, 1, 9, 'Added to cart'),
(12, 1, 2, 'Added to cart'),
(13, 1, 8, 'Added to cart'),
(19, 6, 4, 'Added to cart'),
(20, 6, 8, 'Added to cart'),
(23, 5, 4, 'Added to cart'),
(24, 7, 1, 'Added to cart'),
(25, 7, 2, 'Added to cart'),
(27, 8, 3, 'Added to cart'),
(28, 8, 7, 'Added to cart'),
(29, 4, 3, 'Added to cart'),
(30, 9, 3, 'Added to cart'),
(31, 11, 1, 'Added to cart'),
(32, 13, 13, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
