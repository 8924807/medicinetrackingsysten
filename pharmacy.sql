-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2021 at 11:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosage`
--

CREATE TABLE `dosage` (
  `ID` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosage`
--

INSERT INTO `dosage` (`ID`, `medicine_id`, `date`, `time`, `quantity`) VALUES
(1, 01, '2021-01-03', '12:37', 7),
(3, 02, '2021-06-20', '15:39', 10),
(7, 03, '2021-02-10', '11:45', 1),
(8, 02, '2021-03-28', '16:57', 6),
(9, 03, '2021-01-30', '19:15', 5),
(10, 03, '2021-04-20', '01:47', 3),
(11, 01, '2021-01-04', '22:00', 2),
(12, 02, '2021-05-13', '20:45', 3);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dosage_quantity` int(11) NOT NULL,
  `dosage_unit` varchar(10) NOT NULL,
  `milligram_quantity` int(11) NOT NULL,
  `milligram_unit` varchar(10) NOT NULL,
  `frequency_quantity` int(11) NOT NULL,
  `frequency_unit` varchar(25) NOT NULL,
  `amount_taken` int(11) NOT NULL,
  `daily_amount` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`ID`, `name`, `dosage_quantity`, `dosage_unit`, `milligram_quantity`, `milligram_unit`, `frequency_quantity`, `frequency_unit`, `amount_taken`, `daily_amount`, `user_ID`) VALUES
(01, 'Norfloxacin', 20, 'Tab', 400, 'mg', 2, 'Per Day', 0, 0, 02),
(02, 'Lonat', 06, 'Tab', 500, 'mg', 2, 'Per Day', 4, 0, 01),
(03, 'Ceptrin', 20, 'Tab', 200, 'mg', 2, 'Per Day', 0, 0, 02);


-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Enter data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `password`) VALUES
(01, 'Francis Turay', 'Fturay@gmail.com', '6699d2e1940Bv95E748d2a0b'),
(02, 'Zohene Mans', 'imans@gmail.com', 'Sy65Ze0940a495Y748fD3fc9e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosage`
--
ALTER TABLE `dosage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosage`
--
ALTER TABLE `dosage`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
