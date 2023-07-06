-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2023 at 04:24 AM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_password` int(11) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_password`, `admin_email`, `admin_image`) VALUES
(1, 'iqra', 1234, 'iqra@gmail.com\r\n', ''),
(2, 'iqra', 1234, 'iqra@gmail.com\r\n', ''),
(3, 'xyz', 12345, 'xyz@gmail.com', ''),
(4, 'sss', 678, 'ww@gmail.com', ''),
(5, 'oeuie', 9828, 'ewew@gmail.com', ''),
(6, 'xx', 0, 'xx@gmail.com', ''),
(7, 'k', 0, '', ''),
(8, 'lllapxz', 32421, 'jddzj@gmail.com', ''),
(9, 'dlas', 131, 'xamadx@gmail.com', ''),
(10, 'opwop', 291, 'qwo@gmail.com', ''),
(11, 'iqra', 1234, 'iqra44938@gmail.com', 'images.jpg');

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
(4, 'Watches', 'categorywatch.jpg'),
(5, 'Laptop', 'laptop.webp'),
(6, 'Perfumes', 'perfume.jpg'),
(7, 'Homeappliances', 'homeappliances.jpg'),
(8, 'Phones & Tablets', 'phone.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `dateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(200) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `product_name`, `product_price`, `product_qty`, `user_id`, `user_name`, `dateTime`, `status`) VALUES
(1, 2, 'Herschel supply', 46, 1, 1, 'iqra', '2023-07-05 07:59:32', 'pending'),
(2, 14, 'Pretty Little Thing', 254, 1, 1, 'iqra', '2023-07-05 07:59:32', 'pending'),
(3, 1, 'Esprit Ruffle Shirt', 469078, 1, 1, 'iqra', '2023-07-05 07:59:32', 'pending'),
(4, 1, 'Esprit Ruffle Shirt', 469078, 1, 1, 'iqra', '2023-07-05 08:00:36', 'pending'),
(5, 1, 'Esprit Ruffle Shirt', 469078, 1, 1, 'iqra', '2023-07-06 02:19:37', 'pending'),
(6, 14, 'Pretty Little Thing', 254, 1, 1, 'iqra', '2023-07-06 02:19:37', 'pending'),
(7, 12, 'Herschel supply', 763, 1, 1, 'iqra', '2023-07-06 02:22:18', 'pending'),
(8, 11, 'Herschel supply\r\n', 876, 1, 1, 'iqra', '2023-07-06 02:23:34', 'pending');

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
(16, 'Square Neck Back', 654, 1, 'product-16.jpg'),
(25, 'chees', 222, 1, 'code.php.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(2000) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `admin_email`, `admin_password`) VALUES
(1, 'iqra', 'iqra@gmail.com', 1234),
(2, 'iqra', 'iqra@gmail.com', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `xyz` (`product_category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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