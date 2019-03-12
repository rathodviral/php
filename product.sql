-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 02:09 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ro_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `srno` int(11) UNSIGNED NOT NULL,
  `panelname` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tdsppm` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `collection` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `powerusage` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `recharge` varchar(4) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `tankempty` int(1) NOT NULL,
  `tanklevellow` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`srno`, `panelname`, `tdsppm`, `collection`, `powerusage`, `recharge`, `tankempty`, `tanklevellow`) VALUES
(3, '', '', '', '', '', 0, 0),
(4, 'TEST234', '0001', '0001', '0001', '0001', 1, 1),
(9, 'test333', '0000', '0000', '0000', '0000', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `srno` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
