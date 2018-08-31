-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2018 at 09:44 AM
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_firstname` varchar(255) NOT NULL,
  `customer_birthday` date NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_adress` varchar(255) NOT NULL,
  `customer_zipCode` varchar(400) NOT NULL,
  `customer_phoneNumber` int(11) NOT NULL,
  `customer_registrationDate` date NOT NULL,
  `customer_gender` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_firstname`, `customer_birthday`, `customer_city`, `customer_adress`, `customer_zipCode`, `customer_phoneNumber`, `customer_registrationDate`, `customer_gender`, `customer_email`, `customer_country`) VALUES
(1, 'hyhyhyhy', 'yhyhyhyh', '2018-08-30', 'ujujuju', 'juju', 'juj', 618860178, '2018-08-30', 'tgtgtg', 'tgtgtg', 'gtgtg');

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE `diary` (
  `diary_id` int(11) NOT NULL,
  `diary_text` text NOT NULL,
  `diary_date` datetime NOT NULL,
  `diary_name_customer` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`diary_id`, `diary_text`, `diary_date`, `diary_name_customer`) VALUES
(1, 'huhuhuh', '2018-08-30 00:00:00', 'huhuh');

-- --------------------------------------------------------

--
-- Table structure for table `edit`
--

CREATE TABLE `edit` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_products` varchar(255) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_price` decimal(15,3) NOT NULL,
  `order_reduction` int(11) DEFAULT NULL,
  `order_postal_charges` decimal(15,3) NOT NULL,
  `order_totalprice` decimal(15,3) NOT NULL,
  `order_taxes` decimal(15,3) NOT NULL,
  `order_delivery_address` varchar(255) NOT NULL,
  `order_billing_address` varchar(255) NOT NULL,
  `order_date` date NOT NULL,
  `order_state` varchar(255) NOT NULL,
  `order_delivery_date` date NOT NULL,
  `order_name_customer` varchar(400) NOT NULL,
  `customer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(15,3) NOT NULL,
  `product_stock` varchar(255) NOT NULL,
  `product_place` varchar(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_size` int(11) NOT NULL,
  `product_weight` int(11) NOT NULL,
  `product_reference` int(11) NOT NULL,
  `product_state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_place`, `product_description`, `product_size`, `product_weight`, `product_reference`, `product_state`) VALUES
(1, 'huhuhuh', '2.000', 'ijhij', 'jijij', 'ijij', 0, 12, 65467, 'gygy');

-- --------------------------------------------------------

--
-- Table structure for table `trader`
--

CREATE TABLE `trader` (
  `trader_id` int(11) NOT NULL,
  `trader_username` varchar(255) NOT NULL,
  `trader_password` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `diary_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trader`
--

INSERT INTO `trader` (`trader_id`, `trader_username`, `trader_password`, `customer_id`, `diary_id`) VALUES
(1, 'jijij', 'ijijij', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`diary_id`);

--
-- Indexes for table `edit`
--
ALTER TABLE `edit`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `edit_products0_FK` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `Orders_customers_FK` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `trader`
--
ALTER TABLE `trader`
  ADD PRIMARY KEY (`trader_id`),
  ADD UNIQUE KEY `Trader_diary_AK` (`diary_id`),
  ADD KEY `Trader_customers_FK` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `diary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `trader`
--
ALTER TABLE `trader`
  MODIFY `trader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `edit`
--
ALTER TABLE `edit`
  ADD CONSTRAINT `edit_Orders_FK` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `edit_products0_FK` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Orders_customers_FK` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `trader`
--
ALTER TABLE `trader`
  ADD CONSTRAINT `Trader_customers_FK` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `Trader_diary0_FK` FOREIGN KEY (`diary_id`) REFERENCES `diary` (`diary_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
