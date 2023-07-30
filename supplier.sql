-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 07:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `Supplier` (
  `Supplier_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PhoneNumber` bigint(11) NOT NULL,
  `Location`varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `Supplier`(`Supplier_id`,`Name`,`PhoneNumber`,`Location`) VALUES
(921032,'SHIVA Enterprise',9112700356,'Jharsuguda,Shiva Mandir');
(129302,'Riya Comp.pvt',1002678921,'Mahaveer Nagar,Bhubhaneswar');
(290112,'MG Comp Store',0877319022,'Boxi Choxk,Banglore');
(216352,'MK pvt.lmt',1093647221,'Saheed Nagar,Bhubaneswar');
(123467,'Perfect Computer',3456789546,'Jaganath Temple,Puri');
(012532,'The Gadget ZOne',7354273911,'Saheed Rd,Bhubhaneswar');
(0221623,'Prem Computers',8745231629,'Rourkela,Odisha');
(536422,'CompuServe',7332252521,'Sambalpure Rd,CityMall,Odisha');
(5342573,"HP World",8263481301,'Raipur,Near KFC,Chattisgarh');
(52438724,'Orissa Computers',7535435391,'Jhariabhala,Jhasrsuguda,odisha');

ALTER TABLE `Supplier`
  ADD PRIMARY KEY (`Supplier_id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `Supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;