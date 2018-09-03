-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Ven 31 Août 2018 à 13:38
-- Version du serveur :  5.7.23-0ubuntu0.18.04.1
-- Version de PHP :  7.2.7-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `crmV2`
--

-- --------------------------------------------------------

--
-- Structure de la table `customer`
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
-- Structure de la table `diary`
--

CREATE TABLE `diary` (
  `diaryId` int(11) NOT NULL,
  `diaryCustomer` varchar(255) NOT NULL,
  `diaryTime` time NOT NULL,
  `diaryText` text NOT NULL,
  `diaryDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `edit`
--

CREATE TABLE `edit` (
  `orderId` int(11) NOT NULL,
  `fkProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `product`
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
-- Contenu de la table `product`
--

INSERT INTO `product` (`productId`, `productName`, `productPrice`, `productStock`, `productPlace`, `productDescription`, `productSize`, `productWeight`, `productReference`, `productStatus`) VALUES
(2, 'Nexus 5x LG', '250.000', 55, 'Entrepôt Toulouse', 'Téléphone Google fabriqué par LG', 0.5, 0.3, 123456, 1);

-- --------------------------------------------------------

--
-- Structure de la table `purchase`
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
  `purchaseStatus` tinyint(1) NOT NULL,
  `fkCustomer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userLogin` varchar(255) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userStatus` tinyint(1) NOT NULL,
  `fkDiary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`),
  ADD KEY `fkUser` (`fkUser`);

--
-- Index pour la table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`diaryId`);

--
-- Index pour la table `edit`
--
ALTER TABLE `edit`
  ADD PRIMARY KEY (`orderId`,`fkProduct`),
  ADD KEY `edit_products0_FK` (`fkProduct`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productId`);

--
-- Index pour la table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`purchaseId`),
  ADD KEY `Orders_customers_FK` (`fkCustomer`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `Trader_diary_AK` (`fkDiary`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `diary`
--
ALTER TABLE `diary`
  MODIFY `diaryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `purchaseId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`fkUser`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `edit`
--
ALTER TABLE `edit`
  ADD CONSTRAINT `edit_Orders_FK` FOREIGN KEY (`orderId`) REFERENCES `purchase` (`purchaseId`),
  ADD CONSTRAINT `edit_products0_FK` FOREIGN KEY (`fkProduct`) REFERENCES `product` (`productId`);

--
-- Contraintes pour la table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `Orders_customers_FK` FOREIGN KEY (`fkCustomer`) REFERENCES `customer` (`customerId`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `Trader_diary0_FK` FOREIGN KEY (`fkDiary`) REFERENCES `diary` (`diaryId`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
