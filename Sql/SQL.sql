-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 11, 2021 at 01:48 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfirstsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `accountholderinfo`
--

CREATE TABLE `accountholderinfo` (
  `CustomerName` varchar(20) NOT NULL,
  `CustomerEmail` varchar(20) NOT NULL,
  `CurrentBalance` int(20) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `Details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accountholderinfo`
--

INSERT INTO `accountholderinfo` (`CustomerName`, `CustomerEmail`, `CurrentBalance`, `CustomerID`, `Details`) VALUES
('Jai', 'jai@gmail.com', 17675, 1, 'Street:  Sankalp Estate, Panna Estate Road, Rakhial\r\n\r\nCity:   Ahmedabad\r\n\r\nState/province/area:    Gujarat\r\n\r\nPhone number  07922731617\r\n\r\nZip code  380023\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Jack', 'jack@gmail.com', 25710, 2, 'Street:  C 1/a, M S Chamber, Vikas Marg Extn, Laxmi Nagar\r\n\r\nCity:   Delhi\r\n\r\nState/province/area:    Delhi\r\n\r\nPhone number  01122414048\r\n\r\nZip code  110092\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Jaffer', 'jaffer@gmail.com', 111710, 3, 'Street:  4/11, Hosur Main Road, Next To Rajeshwari Weight Bridge, Bommana Halli\r\n\r\nCity:   Bangalore\r\n\r\nState/province/area:    Karnataka\r\n\r\nPhone number  25731697\r\n\r\nZip code  560068\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Hanumanth', 'hanu@gmail.com', 24045, 4, 'Street:  Shop No 2, Rameshghar, T.h.kataria Marg, Matunga(w)\r\n\r\nCity:   Mumbai\r\n\r\nState/province/area:    Maharashtra\r\n\r\nPhone number  02224227263\r\n\r\nZip code  400016\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Harry', 'harry@gmail.com', 546885, 5, 'Street:  6, Lalji \'s Shpg Center, S.v.road, Nr Railway Station, Borivali (west)\r\n\r\nCity:   Mumbai\r\n\r\nState/province/area:    Maharashtra\r\n\r\nPhone number  02228987436\r\n\r\nZip code  400092\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Chandrika', 'chandrika@gmail.com', 62145, 6, 'Street:  Bahadur Shah Zafar Marg\r\n\r\nCity:   Delhi\r\n\r\nState/province/area:    Delhi\r\n\r\nPhone number  01123317654\r\n\r\nZip code  110002\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Carline', 'carline@gmail.com', 79105, 7, 'Street:  Krushal Commercial Cplx, M G Road, Chembur\r\n\r\nCity:   Mumbai\r\n\r\nState/province/area:    Maharashtra\r\n\r\nPhone number  02225275873\r\n\r\nZip code  400071\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Caitlyn', 'caitlyn@gmail.com', 696505, 8, 'Street:  74, New Bardan Lane, Mandvi\r\n\r\nCity:   Mumbai\r\n\r\nState/province/area:    Maharashtra\r\n\r\nPhone number  02223424012\r\n\r\nZip code  400003\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Diana', 'diana@gmail.com', 92000, 9, 'Street:  574/6, Basement Floor, Near Basappa Circle, Sajjan Rao, Vv Puram\r\n\r\nCity:   Bangalore\r\n\r\nState/province/area:    Karnataka\r\n\r\nPhone number  08026523551\r\n\r\nZip code  560004\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India'),
('Deepthi', 'deepthi@gmail.com', 267170, 10, 'Street:  2nd Main Kanteerava Nagar, Nandhini Layout\r\n\r\nCity:   Bangalore\r\n\r\nState/province/area:    Karnataka\r\n\r\nPhone number  22902799\r\n\r\nZip code  560096\r\n\r\nCountry calling code  +91\r\n\r\nCountry  India');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `s_no` int(11) NOT NULL,
  `Sender` varchar(20) NOT NULL,
  `Receiver` varchar(20) NOT NULL,
  `Credit` int(11) NOT NULL,
  `Account_Balance` int(11) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Sender_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transfer`
--

INSERT INTO `transfer` (`s_no`, `Sender`, `Receiver`, `Credit`, `Account_Balance`, `DateTime`, `Sender_ID`) VALUES
(4, 'Chandrika', 'Hanumanth', 755, 62835, '2021-03-08 10:43:23', 6),
(5, 'Jack', 'Carline', 755, 26465, '2021-03-08 14:12:58', 2),
(6, 'Chandrika', 'Carline', 700, 62080, '2021-03-10 09:23:19', 6),
(7, 'Chandrika', 'Hanumanth', 800, 61380, '2021-03-10 12:53:55', 6),
(8, 'Jack', 'Chandrika', 800, 25710, '2021-03-10 14:37:21', 2),
(9, 'Deepthi', 'Harry', 8000, 283170, '2021-03-10 14:41:43', 10),
(10, 'Deepthi', 'Harry', 8000, 275170, '2021-03-10 14:41:49', 10),
(11, 'Caitlyn', 'Jack', 800, 696840, '2021-03-11 01:54:50', 8),
(12, 'Caitlyn', 'Chandrika', 765, 696040, '2021-03-11 06:18:02', 8),
(13, 'Jai', 'Caitlyn', 1230, 18905, '2021-03-11 06:23:12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accountholderinfo`
--
ALTER TABLE `accountholderinfo`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`s_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accountholderinfo`
--
ALTER TABLE `accountholderinfo`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
