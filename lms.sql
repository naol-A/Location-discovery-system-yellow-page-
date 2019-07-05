-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 04, 2019 at 09:23 AM
-- Server version: 5.7.25
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `HouseNumber` varchar(5) NOT NULL,
  `city` varchar(50) NOT NULL,
  `woreda` varchar(50) NOT NULL,
  `coordinate` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`HouseNumber`, `city`, `woreda`, `coordinate`) VALUES
('011', 'addis ababa', '02', '18,23'),
('012', 'addis ababa', '04', '68,45'),
('013', 'addis ababa', '05', '83,56'),
('014', 'addis ababa', '05', '67,46'),
('015', 'addis ababa', '02', '38,31'),
('016', 'addis ababa', '03', '84,67'),
('017', 'addis ababa', '03', '19,38'),
('018', 'addis ababa', '02', '57,28'),
('019', 'addis ababa', '06', '94,19'),
('020', 'addis ababa', '07', '29,39'),
('021', 'addis ababa', '02', '43,49'),
('022', 'addis ababa', '08', '94,29'),
('111', 'addis ababa', '09', '12,14'),
('222', 'addis ababa', '03', '23,78'),
('333', 'addis ababa', '02', '32,45'),
('444', 'addis ababa', '04', '54,23'),
('555', 'adama', '04', '64,64'),
('777', 'mekele', '05', '25,34'),
('888', 'addis ababa', '03', '13,12'),
('999', 'adama', '03', '16,29'),
('n/a', 'n/a', 'n/a', 'n/a');

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `AdminName` varchar(50) NOT NULL,
  `passwordd` varchar(32) NOT NULL,
  `Email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`AdminName`, `passwordd`, `Email`) VALUES
('admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'naol@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `advertcompany`
--

CREATE TABLE `advertcompany` (
  `AdminName` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `AID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CatID` int(4) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CatID`, `cname`) VALUES
(1, 'advertising'),
(2, 'agriculture'),
(3, 'bakery'),
(4, 'bank'),
(5, 'cafe'),
(6, 'cinema'),
(7, 'dairy'),
(8, 'decoration'),
(9, 'education'),
(10, 'electronics');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment` tinytext NOT NULL,
  `approved` varchar(11) NOT NULL,
  `commented_by` varchar(30) NOT NULL,
  `type` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment`, `approved`, `commented_by`, `type`) VALUES
('hello world', 'approved', 'admin', 'comment'),
('comment test', 'approved', 'user1245', 'comment'),
('', 'notapproved', '', 'comment'),
('', 'notapproved', '', 'comment'),
('', 'notapproved', '', 'comment'),
('', 'notapproved', '', 'comment'),
('', 'notapproved', '', 'comment');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `CID` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `HouseNumber` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`CID`, `name`, `phoneNumber`, `email`, `cname`, `HouseNumber`) VALUES
(1, 'astra advertising plc.', '+251114426100', 'contact@astraglobal.com', 'advertising', '013'),
(2, 'Big buzz marketing plc.', '+251116628265', 'bibuzz@ethionet.et', 'advertising', '012'),
(3, 'agricultural input supply enterprise', '+251114425628', 'aiso@ethionet.et', 'agriculture', '011'),
(4, 'ethio falcon trading', '+251118962670', 'info@aczazis.com', 'agriculture', '014'),
(5, 'shoa bakery', '+251221112978', 'shoabakery@yahoo.com', 'bakery', '015'),
(6, 'aba guben bakery', '+251113722608', 'abaguden3478@gmail.com', 'bakery', '016'),
(7, 'lame dairy', '+251116460091', 'lameDairy123@gmail.com', 'dairy', '017'),
(8, 'alem cinema', '+251116636717', 'alemaCinema@gmail.com', 'cinema', '018'),
(9, 'mama\'s kitchen restaurant', '+251939569726', 'mamasKitchen@gmail.com', 'cafe', '019'),
(10, 'bole rock restaurant', '+251116188173', 'bolerock192@gmail.com', 'cafe', '020'),
(11, 'agona abel cinema', '+251114160490', 'agonacinema@yahoo.com', 'cinema', '021'),
(12, 'agape decore', '+251911473697', 'agape0908@yahoo.com', 'decoration', '022'),
(13, 'bikame dairy', '+251118641022', 'bikameDairy@gmail.com', 'dairy', '111'),
(14, 'medihn decore', '+251929298283', 'medhinDEC@gmail.com', 'decoration', '222'),
(15, 'bank of abyssinia', '+251221123585', 'info@bankofabyssinia.com', 'bank', '333'),
(16, 'abay bank s.c', '+251221126391', 'info@abaybank.com', 'bank', '444'),
(17, 'multilanguage training center', '+251922727944', 'lilpa9@gmail.com', 'education', '555'),
(18, 'tesfa technics', '+251911231837', 'tesfatechnics@ethionet.et', 'education', '777'),
(19, 'alpha business plc', '+251911207852', 'alpha.eth@gmail.com', 'electronics', '888'),
(20, 'tecno mobile', '+251114671360', 'harris.huang@tecnotelcom.com', 'electronics', '999'),
(32, 'ccrda', '+251114425628', 'ccrda@ehionet.et', 'cinema', 'n/a'),
(33, 'ccrda', '+251114425628', 'ccrda@ehionet.et', 'cinema', '222'),
(35, 'ccrda', '+251114425628', 'ccrda@ehionet.et', 'cinema', '222'),
(36, 'ccrda', '+251114425628', 'ccrda@ehionet.et', 'cinema', '222'),
(37, 'ccrda', '+251114425628', 'ccrda@ehionet.et', 'cinema', '222'),
(38, 'ccrda', '+251114425628', 'ccrda@ehionet.et', 'cinema', '222'),
(39, 'ccrda', '+251114425628', 'ccrda@ehionet.et', 'cinema', '222'),
(40, 'ccrda', '+251114425628', 'ccrda@ehionet.et', 'cinema', '222');

-- --------------------------------------------------------

--
-- Table structure for table `userr`
--

CREATE TABLE `userr` (
  `Email` varchar(20) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userr`
--

INSERT INTO `userr` (`Email`, `FName`, `LName`, `phoneNumber`) VALUES
('naol@gmail.com', 'naol', 'arega', '+00011112222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`HouseNumber`);

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`AdminName`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `advertcompany`
--
ALTER TABLE `advertcompany`
  ADD PRIMARY KEY (`AID`),
  ADD KEY `AdminName` (`AdminName`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `company_ibfk_2` (`HouseNumber`);

--
-- Indexes for table `userr`
--
ALTER TABLE `userr`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CatID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `CID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminn`
--
ALTER TABLE `adminn`
  ADD CONSTRAINT `adminn_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `userr` (`Email`);

--
-- Constraints for table `advertcompany`
--
ALTER TABLE `advertcompany`
  ADD CONSTRAINT `advertcompany_ibfk_1` FOREIGN KEY (`AdminName`) REFERENCES `adminn` (`AdminName`);

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`CatID`) REFERENCES `company` (`CID`);

--
-- Constraints for table `company`
--
ALTER TABLE `company`
  ADD CONSTRAINT `company_ibfk_2` FOREIGN KEY (`HouseNumber`) REFERENCES `address` (`HouseNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
