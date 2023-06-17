-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 01:43 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agakhan_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `employee_ID` int(20) DEFAULT NULL,
  `employee_Name` varchar(200) DEFAULT NULL,
  `employee_Qualification` varchar(200) DEFAULT NULL,
  `employee_Salary` varchar(200) DEFAULT NULL,
  `employee_Design` varchar(200) DEFAULT NULL,
  `employee_Number` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`employee_ID`, `employee_Name`, `employee_Qualification`, `employee_Salary`, `employee_Design`, `employee_Number`) VALUES
(1, 'Adam', '', '60000', 'Incharge', '032126787878'),
(2, 'Mudassir', 'Inter-Pass', '30000', 'Compoter', '01324548635'),
(3, 'Huzaifa', 'Bachelor', '20000', 'Sweeper', '62222937584'),
(4, 'Arsalan', 'MBBS', '60000', 'Doctor', '6335474841'),
(5, 'Alisher', 'MBBS', '60000', 'Nurse', '54744746756'),
(6, 'Atiq', 'Matric-Pass', '60000', 'Compoter', '0322463488'),
(7, 'Aqib', 'Inter-Pass', '60000', 'Manager', '02316384858'),
(8, 'Bilal', 'B.Com-Pass', '60000', 'Manager', '0132457488874'),
(9, 'Maaz', 'Matric-Pass', '60000', 'Incharge', '022535485348'),
(10, 'Hamza', '8th-Pass', '60000', 'Compoter', '01254386374'),
(1, 'Adam', '', '60000', 'Incharge', '032126787878'),
(2, 'Mudassir', 'Inter-Pass', '30000', 'Compoter', '01324548635'),
(3, 'Huzaifa', 'Bachelor', '20000', 'Sweeper', '62222937584'),
(4, 'Arsalan', 'MBBS', '60000', 'Doctor', '6335474841'),
(5, 'Alisher', 'MBBS', '60000', 'Nurse', '54744746756'),
(6, 'Atiq', 'Matric-Pass', '60000', 'Compoter', '0322463488'),
(7, 'Aqib', 'Inter-Pass', '60000', 'Manager', '02316384858'),
(8, 'Bilal', 'B.Com-Pass', '60000', 'Manager', '0132457488874'),
(9, 'Maaz', 'Matric-Pass', '60000', 'Incharge', '022535485348'),
(10, 'Hamza', '8th-Pass', '60000', 'Compoter', '01254386374');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
