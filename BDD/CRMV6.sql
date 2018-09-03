-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 03, 2018 at 11:45 AM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CRM`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(11) NOT NULL,
  `customerFirstName` varchar(255) NOT NULL,
  `customerLastName` varchar(255) NOT NULL,
  `customerBirthday` date NOT NULL,
  `customerCity` varchar(255) NOT NULL,
  `customerAdress` varchar(255) NOT NULL,
  `customerZipCode` varchar(400) NOT NULL,
  `customerPhoneNumber` int(11) NOT NULL,
  `customerRegistrationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `customerGender` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `customerCountry` varchar(255) NOT NULL,
  `customerStatus` tinyint(1) NOT NULL,
  `fkUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_purchase`
--

CREATE TABLE `customer_purchase` (
  `fkCustomer` int(11) NOT NULL,
  `fkPurchase` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE `diary` (
  `diaryId` int(11) NOT NULL,
  `diaryCustomer` varchar(255) NOT NULL,
  `diaryTime` time NOT NULL,
  `diaryText` text NOT NULL,
  `diaryDate` datetime NOT NULL,
  `fkUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productId` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` decimal(15,3) NOT NULL,
  `productStock` int(11) NOT NULL,
  `productPlace` varchar(255) NOT NULL,
  `productDescription` varchar(255) DEFAULT NULL,
  `productSize` float DEFAULT NULL,
  `productWeight` float DEFAULT NULL,
  `productReference` int(11) NOT NULL,
  `productStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productPrice`, `productStock`, `productPlace`, `productDescription`, `productSize`, `productWeight`, `productReference`, `productStatus`) VALUES
(2, 'Nexus 5x LG', '250.000', 55, 'Entrepôt Toulouse', 'Téléphone Google fabriqué par LG', 0.5, 0.3, 123456, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_purchase`
--

CREATE TABLE `product_purchase` (
  `fkPurchase` int(11) NOT NULL,
  `fkProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `purchaseId` int(11) NOT NULL,
  `purchaseProduct` varchar(255) NOT NULL,
  `purchaseQuantity` int(11) NOT NULL,
  `purchasePrice` decimal(15,3) NOT NULL,
  `purchaseReduction` int(11) DEFAULT NULL,
  `purchasePostalCharge` decimal(15,3) NOT NULL,
  `purchaseTotalPrice` decimal(15,3) NOT NULL,
  `purchaseTaxe` decimal(15,3) NOT NULL,
  `purchaseDeliveryAddress` varchar(255) NOT NULL,
  `purchaseBillingAddress` varchar(255) NOT NULL,
  `purchaseDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `purchaseState` varchar(255) NOT NULL,
  `purchaseDeliveryDate` date NOT NULL,
  `purchaseNameCustomer` varchar(400) NOT NULL,
  `purchaseStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userLogin` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userStatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
  ADD KEY `fkUser` (`fkUser`);

--
-- Indexes for table `customer_purchase`
--
ALTER TABLE `customer_purchase`
  ADD PRIMARY KEY (`fkCustomer`,`fkPurchase`),
  ADD KEY `fk_customer` (`fkCustomer`),
  ADD KEY `fk_purchase` (`fkPurchase`);

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`diaryId`),
  ADD KEY `fkUser` (`fkUser`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD PRIMARY KEY (`fkPurchase`,`fkProduct`),
  ADD KEY `edit_products0_FK` (`fkProduct`),
  ADD KEY `fk_purchase` (`fkPurchase`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `diaryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`fkUser`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_purchase`
--
ALTER TABLE `customer_purchase`
  ADD CONSTRAINT `customer_purchase_ibfk_1` FOREIGN KEY (`fkCustomer`) REFERENCES `customer` (`customerId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_purchase_ibfk_2` FOREIGN KEY (`fkPurchase`) REFERENCES `purchase` (`purchaseId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `diary`
--
ALTER TABLE `diary`
  ADD CONSTRAINT `diary_ibfk_1` FOREIGN KEY (`fkUser`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_purchase`
--
ALTER TABLE `product_purchase`
  ADD CONSTRAINT `edit_Orders_FK` FOREIGN KEY (`fkPurchase`) REFERENCES `purchase` (`purchaseId`),
  ADD CONSTRAINT `edit_products0_FK` FOREIGN KEY (`fkProduct`) REFERENCES `product` (`productId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
