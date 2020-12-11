

CREATE DATABASE geoAlert;


CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 12:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geoalertsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `node_20`
--
-- **************************  copy from here  ********************
CREATE TABLE `node_20` (
  `id` int(200) NOT NULL,
  `nodeId` int(5) NOT NULL DEFAULT 20,
  `Date-and-time` datetime(6) NOT NULL,
  `Temp_20_Ch1` float NOT NULL,
  `Aaxix_20_Ch1` float NOT NULL,
  `Baxix_20_Ch1` float NOT NULL,
  `AaxisVariation-20-Ch1` float NOT NULL,
  `BaxisVariation-20-Ch1` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `node_20`
--

INSERT INTO `node_20` (`id`, `nodeId`, `Date-and-time`, `Temp_20_Ch1`, `Aaxix_20_Ch1`, `Baxix_20_Ch1`, `AaxisVariation-20-Ch1`, `BaxisVariation-20-Ch1`) VALUES
(303, 20, '2020-11-01 01:04:35.000000', 34.45, -0.1628, -0.3873, -0.0099, -0.0517),
(304, 20, '2020-11-02 01:05:17.000000', 30.34, -0.1625, -0.3881, -0.0096, -0.0525),
(305, 20, '2020-11-03 01:05:37.000000', 31.67, -0.2625, -0.2881, -0.1196, -0.0524);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `node_20`
--
ALTER TABLE `node_20`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `node_20`
--
ALTER TABLE `node_20`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=592;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;








INSERT INTO `node_chart_10` (`id`, `nodeId`, `gatewayID`, `model`, `createdTime`, `timeZone`, `dateAndTime`, `temp_10_ch1`, `Aaxis_10_ch1`, `Baxis_10_ch1`, `AaxisVariation_10_ch1`, `BaxisVariation_10_ch1`) VALUES ('1', '10', '20837', 'LS-G6-INC15', '1/11/2020 ', 'Asia/Kuala_Lumpur', '2020-11-18 00:00:00.000000', '28.7', '-0.1628', '-0.3873', '-0.0099', '-0.0517');