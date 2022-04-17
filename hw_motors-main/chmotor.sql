-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 01:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chmotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `instaform`
--

CREATE TABLE `instaform` (
  `userID` int(11) NOT NULL,
  `vmade` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `regNo` varchar(50) NOT NULL,
  `Cowner` varchar(50) NOT NULL,
  `CownerNIC` varchar(30) NOT NULL,
  `fowner` varchar(50) NOT NULL,
  `monthlyinsta` int(30) NOT NULL,
  `dues` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `vTotal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instaform`
--

INSERT INTO `instaform` (`userID`, `vmade`, `model`, `regNo`, `Cowner`, `CownerNIC`, `fowner`, `monthlyinsta`, `dues`, `email`, `password`, `phone`, `vTotal`) VALUES
(15, 'Honda', '2012', 'LH12345', 'Faisal', '425013377154', 'Hammas', 10000, '2021-04-11', 'hammasmasood@gmail.com', 'hammas', '+923122023432', 1200000),
(16, 'Toyota', '2012', 'LH12345', 'Hassan', '4240111155144', 'Hammas', 10000, '2021-04-11', 'ihasnain4@gmail.com', 'hasnain', '+923122023432', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `vehiclename` varchar(50) NOT NULL,
  `vehiclemade` varchar(50) NOT NULL,
  `vehiclemodel` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `vehicleimage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `vehiclename`, `vehiclemade`, `vehiclemodel`, `price`, `vehicleimage`) VALUES
(10, 'HOnda', 'Toyota', '2012', '1000000', '2019-honda-civic-sedan-1558453497.jpg'),
(11, 'HOnda', 'Toyota', '2012', '1000000', '2019-honda-civic-sedan-1558453497.jpg'),
(12, 'HOnda', 'Toyota', '2012', '1000000', '2019-honda-civic-sedan-1558453497.jpg'),
(13, 'HOnda', 'Toyota', '2012', '1000000', '2019-honda-civic-sedan-1558453497.jpg'),
(14, 'HondaCity', 'Honda', '2020', '200000000', 'images.jpg'),
(15, 'HondaCity', 'Honda', '2020', '200000000', 'images.jpg'),
(16, 'HondaCity', 'Honda', '2020', '200000000', 'images.jpg'),
(17, 'HondaCity', 'Honda', '2020', '200000000', 'images.jpg'),
(18, 'Hyndai2123', 'Hyndai', '2012', '5151000', '2017_hyundai_sonata_angularfront.jpg'),
(19, 'Hyndai2123', 'Hyndai', '2012', '5151000', '2017_hyundai_sonata_angularfront.jpg'),
(20, 'Hyndai2123', 'Hyndai', '2012', '5151000', '2017_hyundai_sonata_angularfront.jpg'),
(21, 'Hyndai2123', 'Hyndai', '2012', '5151000', '2017_hyundai_sonata_angularfront.jpg'),
(22, 'Hyndai2123', 'Hyndai', '2012', '5151000', '2017_hyundai_sonata_angularfront.jpg'),
(23, 'Hyndai2123', 'Hyndai', '2012', '5151000', '2017_hyundai_sonata_angularfront.jpg'),
(24, 'Hyndai2123', 'Hyndai', '2012', '5151000', '2019-honda-civic-sedan-1558453497.jpg'),
(25, 'HondaCity', 'Honda', '21323', '1212312312', 'images.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instaform`
--
ALTER TABLE `instaform`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instaform`
--
ALTER TABLE `instaform`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
