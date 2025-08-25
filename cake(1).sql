-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2025 at 12:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `msg`) VALUES
('akalanka', 'fdvdfzb', 'ffeg'),
('akalanka jaysinghe', 'akalankafjhfhh@gmail.com', 'super'),
('dhananjali wijerathana', 'dami@gamil.com', 'great cake orders'),
('sithumini ', 'sith@gamil.com', 'super and delisiyas cake');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `event` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `flavor` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `email`, `phoneNo`, `event`, `amount`, `flavor`, `date`, `msg`) VALUES
(0, 'abc@data.gamil.com', '07652140 ', 'wedding', 2, 'chocolate', '2024-07-18', ''),
(0, 'abc@data.gamil.com', '07652140 ', 'wedding', 2, 'chocolate', '2024-07-03', 'ewfwetree'),
(0, 'abc@data.gamil.com', '0786787567', 'birthday', 1, 'vanilla', '2024-07-31', 'super'),
(0, 'NAB@BA.COM', '0789067899', 'wedding', 2, 'chocolate', '2024-07-19', 'add the sindarella picter');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
