-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 09:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) DEFAULT NULL,
  `category_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Laptop', 'laptop.webp'),
(2, 'Mobile & Tablet', 'mobile.jpg'),
(3, 'Foods & Drinks', 'food.webp'),
(4, 'Vehicles', 'car.webp'),
(5, 'Home Appliances', 'homeappliances.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_image` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_category_id`, `product_image`) VALUES
(1, 'hp', 223456, 1, 'hp.jpeg'),
(2, 'fresh juice', 32332, 3, 'juice.webp'),
(3, 'honda', 8888888, 4, 'honda.jpg'),
(4, 'iphone', 778271, 2, 'iphone.webp'),
(5, 'Refridgerator', 38276, 5, 'fridge.jpg'),
(6, 'toyota', 999123, 4, 'toyota.jpg'),
(7, 'spicyfoods', 92876, 3, 'foods.jpg'),
(8, 'huawei', 26512, 2, 'huawei.jpg'),
(9, 'Microwave Oven', 9187, 5, 'oven.png'),
(10, 'oppo', 32421, 2, 'oppo.webp'),
(11, 'dell', 98765, 1, 'dell.jpg'),
(12, 'ice-cream', 9876, 3, 'ice-cream.jpg'),
(13, 'dryfruits', 3652, 3, 'dryfruits.jpg'),
(14, 'acer', 876543, 1, 'acer.jpg'),
(15, 'techno', 274632, 2, 'techno.jpg'),
(16, 'infinix', 987654, 2, 'infinix.jpg'),
(17, 'desserts', 87654, 3, 'desserts.jpg'),
(18, 'iphonSe3', 987654, 2, 'iphonese3.webp'),
(19, 'chinese foods', 87654, 3, 'chinesefoods.jpg'),
(20, 'Sandwich Maker\r\n', 9876, 5, 'sandwich maker.webp'),
(21, 'Electric Kettle', 9876, 5, 'electric kettle.jpg'),
(26, 'car', 231465, 4, 'i4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`product_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_category_id`) REFERENCES `category` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
