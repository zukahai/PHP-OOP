-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 07:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL,
  `Role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Username`, `Pass`, `Role`) VALUES
('1', '1', 'admin'),
('a', 'a', 'customer'),
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `infor`
--

CREATE TABLE `infor` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infor`
--

INSERT INTO `infor` (`Username`, `Name`, `Email`, `Phone`) VALUES
('Array', 'Array', 'Array', 'Array'),
('d', 'd', 'd', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `ID` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Size` varchar(10) NOT NULL,
  `Mass` varchar(10) NOT NULL,
  `Material` varchar(100) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp(),
  `View` int(10) NOT NULL DEFAULT 0,
  `URl` varchar(100) NOT NULL,
  `Detail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`ID`, `Name`, `Size`, `Mass`, `Material`, `Price`, `Time`, `View`, `URl`, `Detail`) VALUES
('2', 'HaiZuka', '1x1', '1', 'Linh', 'Liên Hệ', '2022-07-29 15:57:42', 1, '../assets/ImageUploads/qOJpi23uKUoxQedIQYbRFTHTKmQgDaera6z4rdtkqdR3oTVTc5.png', '<h1 style=\"text-align: center;\"><span style=\"background-color: rgb(224, 62, 45);\">Hải</span> n&egrave;</h1>\r\n<p style=\"text-align: center;\">Tạm biệt</p>'),
('4', 'Tesst', '', '', '', '2', '2022-07-29 23:52:13', 1, '../assets/ImageUploads/8WkylHBuCBkMQejHCxhcvthEuKV3xHkLYafSZ3nCiQxgYqAer0.png', '<p>Xin chafo</p>\r\n<h1 style=\"text-align: center;\">Hair ne</h1>');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `page` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`page`, `view`) VALUES
('Home', 253),
('Product', 242);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `infor`
--
ALTER TABLE `infor`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
