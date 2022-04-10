-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 05:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ananas_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_ID` varchar(10) NOT NULL,
  `Cat_Name` varchar(30) NOT NULL,
  `Cat_Des` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_ID`, `Cat_Name`, `Cat_Des`) VALUES
('C001', 'Vintas - High Top', 'Ananas product'),
('C002', 'Vintas - Low Top', 'Ananas product');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `CustName` varchar(30) NOT NULL,
  `gender` int(11) NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `CusDate` int(11) NOT NULL,
  `CusMonth` int(11) NOT NULL,
  `CusYear` int(11) NOT NULL,
  `SSN` varchar(10) DEFAULT NULL,
  `ActiveCode` varchar(100) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Username`, `Password`, `CustName`, `gender`, `Address`, `telephone`, `email`, `CusDate`, `CusMonth`, `CusYear`, `SSN`, `ActiveCode`, `state`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 0, '146B mau than', '0337905287', 'admin@gmail.com', 20, 5, 1988, '', '', 1),
('duc', 'e10adc3949ba59abbe56e057f20f883e', 'nguyen tien duc', 0, '146B mau than', '0777555444', 'tienduc314@gmail.com', 19, 5, 1992, '', '', 0),
('user', 'e10adc3949ba59abbe56e057f20f883e', 'user', 0, 'Can Tho', '0337905287', 'user@gmail.com', 19, 8, 2001, '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` varchar(10) NOT NULL,
  `Product_Name` varchar(30) NOT NULL,
  `Price` bigint(20) NOT NULL,
  `oldPrice` decimal(12,2) NOT NULL,
  `SmallDesc` varchar(1000) NOT NULL,
  `DetailDesc` text NOT NULL,
  `ProDate` datetime NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_image` varchar(200) NOT NULL,
  `Cat_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Price`, `oldPrice`, `SmallDesc`, `DetailDesc`, `ProDate`, `Pro_qty`, `Pro_image`, `Cat_ID`) VALUES
('P001', 'Vintas Temperate', 770, '800.00', 'Chocolate Brown', '', '2021-05-07 06:32:28', 5, 'pro1.jpg', 'C001'),
('P0010', 'Vintas Saigon 1980s', 480, '550.00', 'Vin Black', '', '2021-05-07 07:04:21', 5, 'pro10.jpg', 'C002'),
('P0011', 'Vintas Yesterday', 330, '450.00', 'Taupe Leather ', '', '2021-05-07 07:04:21', 5, 'pro11.jpg', 'C002'),
('P0012', 'Vintas Saigon 1980s', 495, '700.00', 'Dark Denim ', '', '2021-05-07 07:06:40', 5, 'pro012.jpg', 'C001'),
('P002', 'Vintas Bleached Sand', 550, '700.00', 'Roasted Sand', '', '2021-05-07 06:41:45', 5, 'pro02.jpg', 'C001'),
('P003', 'Vintas Mister', 610, '750.00', 'Chocolate Brown', '', '2021-05-07 06:45:20', 5, 'pro3.jpg', 'C002'),
('P004', 'Vintas Temperate', 720, '800.00', 'Dusty Olive', '', '2021-05-07 06:45:20', 5, 'pro4.jpg', 'C002'),
('P005', 'Vintas Bleached Sand', 465, '500.00', 'Bleached Sand', '', '2021-05-07 06:56:12', 5, 'pro5.jpg', 'C002'),
('P006', 'Vintas The New Military', 465, '550.00', 'Capulet Olive', '', '2021-05-07 06:58:23', 5, 'pro6.jpg', 'C002'),
('P007', 'Vintas Earth', 580, '700.00', 'Dark Olive', '', '2021-05-07 06:58:23', 5, 'pro7.jpg', 'C002'),
('P008', 'Vintas Mister', 465, '750.00', 'Slate Carafe ', '', '2021-05-07 07:00:59', 5, 'pro8.jpg', 'C002'),
('P009', 'Vintas Mister', 580, '800.00', 'Narcissuede', '', '2021-05-07 07:00:59', 5, 'pro9.jpg', 'C002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Cat_ID` (`Cat_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Cat_ID`) REFERENCES `category` (`Cat_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
