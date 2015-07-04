-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 04:54 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `msarea`
--

CREATE TABLE IF NOT EXISTS `msarea` (
  `areaID` varchar(20) NOT NULL DEFAULT '',
  `areaName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msarea`
--

INSERT INTO `msarea` (`areaID`, `areaName`) VALUES
('area001', 'Jakarta Barat'),
('area002', 'Jakarta Timur');

-- --------------------------------------------------------

--
-- Table structure for table `mscustomer`
--

CREATE TABLE IF NOT EXISTS `mscustomer` (
  `customerID` varchar(5) NOT NULL,
  `customerAddress1` varchar(40) NOT NULL,
  `customerAddress2` varchar(40) NOT NULL,
  `customerAddress3` varchar(40) NOT NULL,
  `customerAddress4` varchar(40) NOT NULL,
  `areaID` varchar(20) NOT NULL,
  `regionID` varchar(20) NOT NULL,
  `customerPhone` varchar(20) NOT NULL,
  `customerFax` varchar(20) NOT NULL,
  `customerEmail` varchar(30) NOT NULL,
  `customerContact` varchar(30) NOT NULL,
  `POBirth` varchar(30) NOT NULL,
  `DOBirth` date NOT NULL,
  `customerReligion` varchar(12) NOT NULL,
  `customerPosition` varchar(20) NOT NULL,
  `customerStatus` varchar(12) NOT NULL,
  `customerChildren` int(11) NOT NULL,
  `customerPhoneHome` varchar(20) NOT NULL,
  `customerMobile` varchar(20) NOT NULL,
  `customerPinBB` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mscustomer`
--

INSERT INTO `mscustomer` (`customerID`, `customerAddress1`, `customerAddress2`, `customerAddress3`, `customerAddress4`, `areaID`, `regionID`, `customerPhone`, `customerFax`, `customerEmail`, `customerContact`, `POBirth`, `DOBirth`, `customerReligion`, `customerPosition`, `customerStatus`, `customerChildren`, `customerPhoneHome`, `customerMobile`, `customerPinBB`) VALUES
('CS001', 'Mediterania', 'Bangun Reksa', 'Cileduk', 'Tangerang', 'area001', 'reg001', '08123123123', '021393939', 'nathanael.febrianto@gmail.com', 'nathan.febrianto', '20 juni 2012', '1994-02-03', 'Kristen', 'CEO', 'onDuty', 3, '08132123123', '08123123132', 'A96CEF');

-- --------------------------------------------------------

--
-- Table structure for table `msitem`
--

CREATE TABLE IF NOT EXISTS `msitem` (
  `itemID` varchar(12) NOT NULL,
  `itemBrand` varchar(20) NOT NULL,
  `itemType` varchar(20) NOT NULL,
  `itemDesc` varchar(40) NOT NULL,
  `itemUnit` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msitem`
--

INSERT INTO `msitem` (`itemID`, `itemBrand`, `itemType`, `itemDesc`, `itemUnit`) VALUES
('item001', 'Indofood', 'Food', 'Mie goreng', '20'),
('item002', 'Indofood', 'Food', 'Soto Mie', '100');

-- --------------------------------------------------------

--
-- Table structure for table `msitemset`
--

CREATE TABLE IF NOT EXISTS `msitemset` (
  `itemSetID` varchar(12) NOT NULL,
  `itemID` varchar(12) NOT NULL,
  `itemQty` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msitemset`
--

INSERT INTO `msitemset` (`itemSetID`, `itemID`, `itemQty`) VALUES
('set001', 'item001', 30);

-- --------------------------------------------------------

--
-- Table structure for table `msregion`
--

CREATE TABLE IF NOT EXISTS `msregion` (
  `regionID` varchar(20) NOT NULL,
  `regionName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msregion`
--

INSERT INTO `msregion` (`regionID`, `regionName`) VALUES
('reg001', 'Jakarta'),
('reg002', 'Bekasi'),
('reg003', 'Bogor');

-- --------------------------------------------------------

--
-- Table structure for table `mssalesman`
--

CREATE TABLE IF NOT EXISTS `mssalesman` (
  `salesID` varchar(5) NOT NULL,
  `salesName` varchar(30) NOT NULL,
  `salesAddress1` varchar(40) NOT NULL,
  `salesAddress2` varchar(40) NOT NULL,
  `areaID` varchar(20) NOT NULL,
  `regionID` varchar(20) NOT NULL,
  `salesPhone` varchar(20) NOT NULL,
  `salesMobile1` varchar(20) NOT NULL,
  `salesMobile2` varchar(20) NOT NULL,
  `salesPinBB` varchar(10) NOT NULL,
  `salesEmail` varchar(30) NOT NULL,
  `POBirth` varchar(20) NOT NULL,
  `DOBirth` date NOT NULL,
  `salesReligion` varchar(12) NOT NULL,
  `salesPosition` varchar(20) NOT NULL,
  `salesStatus` varchar(12) NOT NULL,
  `salesChildren` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mssalesman`
--

INSERT INTO `mssalesman` (`salesID`, `salesName`, `salesAddress1`, `salesAddress2`, `areaID`, `regionID`, `salesPhone`, `salesMobile1`, `salesMobile2`, `salesPinBB`, `salesEmail`, `POBirth`, `DOBirth`, `salesReligion`, `salesPosition`, `salesStatus`, `salesChildren`) VALUES
('SA001', 'Steven Halim', 'Bojong', 'Citra 6', 'area001', 'reg001', '08123123', '081231313', '0812331212', 'BCG001', 'steve,halim@gmail.com', '12 juli 2012', '1994-06-10', 'Kristen', 'MarketingSales', 'onDuty', 4);

-- --------------------------------------------------------

--
-- Table structure for table `mssupplier`
--

CREATE TABLE IF NOT EXISTS `mssupplier` (
  `supplierID` varchar(5) NOT NULL,
  `supplierName` varchar(30) NOT NULL,
  `supplierAddress1` varchar(40) NOT NULL,
  `supplierAddress2` varchar(40) NOT NULL,
  `areaID` varchar(20) NOT NULL,
  `regionID` varchar(20) NOT NULL,
  `supplierPhone` varchar(20) NOT NULL,
  `supplierFax` varchar(20) NOT NULL,
  `supplierEmail` varchar(30) NOT NULL,
  `supplierContact` varchar(30) NOT NULL,
  `supplierMobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mssupplier`
--

INSERT INTO `mssupplier` (`supplierID`, `supplierName`, `supplierAddress1`, `supplierAddress2`, `areaID`, `regionID`, `supplierPhone`, `supplierFax`, `supplierEmail`, `supplierContact`, `supplierMobile`) VALUES
('SU001', 'Irwan Prasetia', 'Binus', 'Kemanggisan', 'area001', 'reg001', '0812312123', '02131131', 'irwan.pras@gmail.com', 'irwan,pras', '08121313121');

-- --------------------------------------------------------

--
-- Table structure for table `msuser`
--

CREATE TABLE IF NOT EXISTS `msuser` (
  `userID` varchar(12) NOT NULL,
  `userPassword` varchar(250) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `userRole` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msuser`
--

INSERT INTO `msuser` (`userID`, `userPassword`, `userName`, `userRole`) VALUES
('user001', 'admin', 'Albert Wijaya', 'admin'),
('user002', '$2y$10$xGByaknEZfMriT3NOmhv8ej6uTCVkAdIkrymcp/ImYHEig1Qs6E.m', 'Irwan Prasetia', 'Member'),
('user003', '$2y$10$./d8/fuNJw9PFSGbdKUCO.cBXO.urgDl6hDXIA7gzx5VdcWcK2.Oi', 'Admin', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `mswarehouse`
--

CREATE TABLE IF NOT EXISTS `mswarehouse` (
  `warehouseID` varchar(3) NOT NULL,
  `warehouseName` varchar(30) NOT NULL,
  `warehouseAddress1` varchar(40) NOT NULL,
  `warehouseAddress2` varchar(40) NOT NULL,
  `areaID` varchar(20) NOT NULL,
  `regionID` varchar(20) NOT NULL,
  `warehousePhone` varchar(20) NOT NULL,
  `warehouseFax` varchar(20) NOT NULL,
  `warehouseEmail` varchar(30) NOT NULL,
  `warehousePIC` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mswarehouse`
--

INSERT INTO `mswarehouse` (`warehouseID`, `warehouseName`, `warehouseAddress1`, `warehouseAddress2`, `areaID`, `regionID`, `warehousePhone`, `warehouseFax`, `warehouseEmail`, `warehousePIC`) VALUES
('wa1', 'Maju Terus', 'Kemang', 'Jakarta', 'area001', 'reg001', '08123133', '02112313', 'maju@gmail.com', 'Irwan Prasetia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msarea`
--
ALTER TABLE `msarea`
 ADD PRIMARY KEY (`areaID`);

--
-- Indexes for table `mscustomer`
--
ALTER TABLE `mscustomer`
 ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `msitem`
--
ALTER TABLE `msitem`
 ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `msitemset`
--
ALTER TABLE `msitemset`
 ADD PRIMARY KEY (`itemSetID`);

--
-- Indexes for table `msregion`
--
ALTER TABLE `msregion`
 ADD PRIMARY KEY (`regionID`);

--
-- Indexes for table `mssalesman`
--
ALTER TABLE `mssalesman`
 ADD PRIMARY KEY (`salesID`);

--
-- Indexes for table `mssupplier`
--
ALTER TABLE `mssupplier`
 ADD PRIMARY KEY (`supplierID`);

--
-- Indexes for table `msuser`
--
ALTER TABLE `msuser`
 ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `mswarehouse`
--
ALTER TABLE `mswarehouse`
 ADD PRIMARY KEY (`warehouseID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
