-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 05:05 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transportportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` text CHARACTER SET utf8mb4 NOT NULL,
  `Password` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `Mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `final`
--

CREATE TABLE `final` (
  `TypeOfGood` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `ProductName` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Size` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Weight` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Source` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Destination` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `Time` varchar(10) CHARACTER SET utf8mb4 NOT NULL,
  `Amount` float NOT NULL,
  `TypeOfVehicle` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `typeofgood`
--

CREATE TABLE `typeofgood` (
  `Goods` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeofgood`
--

INSERT INTO `typeofgood` (`Goods`) VALUES
('Electronics'),
('TV & Appliances'),
('Clothes'),
('Home & Furnitures'),
('Footwear'),
('Vehicles');

-- --------------------------------------------------------

--
-- Table structure for table `typeofvehicle`
--

CREATE TABLE `typeofvehicle` (
  `Vehicle` text CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `typeofvehicle`
--

INSERT INTO `typeofvehicle` (`Vehicle`) VALUES
('Strainght Truck'),
('DryVan (Enclosed) Trailer'),
('Flat Bed Trailer'),
('Step Deck Trailer'),
('Lowboy Trailer'),
('Refrigerated Trailer'),
('Specialized Trailer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Name` text CHARACTER SET utf8mb4 NOT NULL,
  `Password` text CHARACTER SET utf8mb4 NOT NULL,
  `Email` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `Mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Password`, `Email`, `Mobile`) VALUES
(1, 'Anand', 'qwerty', 'anandsingh9450@', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `vehicletable`
--

CREATE TABLE `vehicletable` (
  `VId` varchar(4) CHARACTER SET utf8mb4 NOT NULL,
  `VName` text CHARACTER SET utf8mb4 NOT NULL,
  `Rate/km` int(4) NOT NULL,
  `Rate/hrs` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `vehicletable`
--
ALTER TABLE `vehicletable`
  ADD PRIMARY KEY (`VId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
