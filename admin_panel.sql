-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 10:31 PM
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
-- Database: `admin panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL,
  `category_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_image`) VALUES
(1, 'Women', 'categorywomen.jpg'),
(2, 'Men', 'categorymen.jpg'),
(3, 'Shoes', 'categoryshoes .jpg'),
(4, 'Watches', 'categorywatch.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_category_id` int(11) DEFAULT NULL,
  `product_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_category_id`, `product_image`) VALUES
(1, 'Esprit Ruffle Shirt', 469078, 1, 'product-01.jpg'),
(2, 'Herschel supply', 46, 1, 'product-02.jpg'),
(3, 'Only Check Trouser', 987, 2, 'product-03.jpg'),
(4, 'Classic Trench Coat', 231, 1, 'product-04.jpg'),
(5, 'Front Pocket Jumper', 987, 1, 'product-05.jpg'),
(6, 'Vintage Inspired Classic', 231, 4, 'product-06.jpg'),
(7, 'Shirt in Stretch Cotton', 223, 1, 'product-07.jpg'),
(8, 'Pieces Metallic Printed', 223, 1, 'product-08.jpg'),
(9, 'Converse All Star Hi Plimsolls\r\n', 98, 3, 'product-09.jpg'),
(10, 'Femme T-Shirt In Stripe', 934, 1, 'product-10.jpg'),
(11, 'Herschel supply\r\n', 876, 2, 'product-11.jpg'),
(12, 'Herschel supply', 763, 2, 'product-12.jpg'),
(13, 'T-Shirt with Sleeve', 901, 1, 'product-13.jpg'),
(14, 'Pretty Little Thing', 254, 1, 'product-14.jpg'),
(15, 'Mini Silver Mesh Watch', 654, 4, 'product-15.jpg'),
(16, 'Square Neck Back', 654, 1, 'product-16.jpg');

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
  ADD KEY `xyz` (`product_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `xyz` FOREIGN KEY (`product_category_id`) REFERENCES `category` (`category_id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
