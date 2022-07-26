-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 26, 2022 lúc 01:46 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `Username` varchar(100) NOT NULL,
  `Pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`Username`, `Pass`) VALUES
('a', 'a'),
('Array', 'Array'),
('b', 'b'),
('d', 'd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infor`
--

CREATE TABLE `infor` (
  `Username` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `infor`
--

INSERT INTO `infor` (`Username`, `Name`, `Email`, `Phone`) VALUES
('Array', 'Array', 'Array', 'Array'),
('d', 'd', 'd', 'd');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
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
  `URl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`ID`, `Name`, `Size`, `Mass`, `Material`, `Price`, `Time`, `View`, `URl`) VALUES
('1', 'Người yêu', '1x1', '1', 'Thịt dê', 'Liên Hệ', '2022-07-26 17:27:22', 0, 'ImageUploads/18IT319_PhanDucHai.jpg'),
('3', 'Không biết', '20x30', '2Kg', 'Thịt dê', 'Liên Hệ', '2022-07-26 17:36:16', 0, 'ImageUploads/a231bf5558779a29c366.jpg'),
('4', 'Gạch ốp tường', '1x1', '1', 'Gạch men', 'Liên Hệ', '2022-07-26 17:37:37', 0, 'ImageUploads/Untitled.png'),
('6', 'Người yêu', '1x1', '1', 'Thịt dê', 'Liên Hệ', '2022-07-26 17:38:08', 0, 'ImageUploads/Screenshot (289).png'),
('10', 'Test nè một cái tên dài ơi là dài luôn', '20x30', '1', 'Đá', 'Liên Hệ', '2022-07-26 18:40:36', 0, 'ImageUploads/Screenshot (335).png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Username`);

--
-- Chỉ mục cho bảng `infor`
--
ALTER TABLE `infor`
  ADD PRIMARY KEY (`Username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
