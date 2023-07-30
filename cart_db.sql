-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 07:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `Category`, `description`, `image`) VALUES
(8, 'Asus ROG', 'Gaming', ' Asus ROG Strix Scar 17 G733QS-HG056TS Laptop AMD Octa Core Ryzen 9 5900HX NVIDIA GeForce RTX 3080 32GB 1TB SSD Windows 10', 'Asus ROG Strix G.jpg'),
(10, 'Lenovo Ideapad 3', 'Creator', ' AMD Ryzen 5 5500U 15.6\" FHD Thin & Light Laptop (8GB/512GB SSD/Windows 11/Office 2021/Backlit Keyboard/2Yr Warranty/Arctic Grey/1.65Kg), 82KU017KIN ', 'Lenovo Ideapad Flex 5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
