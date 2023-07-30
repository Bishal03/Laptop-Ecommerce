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

CREATE TABLE `Customer` (
  `Customer_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `PhoneNumber` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO 'Customer' ('Customer_id','Name','PhoneNumber') VALUES
(16,'Bishal Majhi',7735127086);
(01,'Abhishek Kumar',8120351909);
(20,'Rahul Sahu',7742352134);
(22,'Priya Agrrawal',1154624631);
(21,'Riya Patel',1142326578);
(49,'Musi Patel',1125343721);
(69,'Daya Bag',1112434743);
(70,'Binay Pradhan',1124368441);
(75,'Arun Majhi',1234567890);
(100,'zukuci oram',0987654321);

ALTER TABLE `Customer`
  ADD PRIMARY KEY (`Customer_id`);

ALTER TABLE `Customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;